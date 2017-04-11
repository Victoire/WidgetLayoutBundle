<?php

namespace Victoire\Widget\LayoutBundle\Tests\Context;

use Behat\Behat\Hook\Scope\BeforeScenarioScope;
use Knp\FriendlyContexts\Context\RawMinkContext;

class WidgetContext extends RawMinkContext
{
    /**
     * @When /^I follow "(.+)" layout config$/
     */
    public function iFollowLayoutConfig($responsive)
    {
        $page = $this->getSession()->getPage();

        $tab = $page->find('xpath', sprintf(
            'descendant-or-self::a[@data-key="%s" and @data-toggle="vic-tab"]',
            $responsive
        ));

        if (!$tab) {
            throw new \RuntimeException('Tab for layout config "'.$responsive.'" could not be found.');
        }

        $tab->click();
    }

    /**
     * @Then /^I should find "(.+)" columns with xs "(.+)" sm "(.+)" md "(.+)" and lg "(.+)" (?P<container>with|without) a container$/
     */
    public function iShouldSeeColumnsWithXsSmMdAndLg($expectedCols, $xs, $sm, $md, $lg, $container)
    {
        $page = $this->getSession()->getPage();

        $containerSelector = $container == 'with' ? 'div[contains(@class, "container")]/div[@class="row"]/' : '';

        $cols = $page->findAll('xpath', sprintf(
            'descendant-or-self::%sdiv[contains(@class, "xs-%s") and contains(@class, "sm-%s") and contains(@class, "md-%s") and contains(@class, "lg-%s")]',
            $containerSelector,
            $xs,
            $sm,
            $md,
            $lg
        ));

        if (count($cols) != $expectedCols) {
            throw new \RuntimeException(sprintf(
                '%s column(s) found instead of %s columns expected.',
                count($cols),
                $expectedCols
            ));
        }
    }
}
