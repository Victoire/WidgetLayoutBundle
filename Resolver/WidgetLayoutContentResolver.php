<?php

namespace Victoire\Widget\LayoutBundle\Resolver;

use Victoire\Bundle\WidgetBundle\Model\Widget;
use Victoire\Bundle\WidgetBundle\Resolver\BaseWidgetContentResolver;

class WidgetLayoutContentResolver extends BaseWidgetContentResolver
{
    protected $layoutConfig;

    public function __construct($layoutConfig, $responsiveConf)
    {
        $this->layoutConfig = $layoutConfig;
        $this->responsiveConf = $responsiveConf;
    }

    public function getWidgetStaticContent(Widget $widget)
    {
        $parameters = parent::getWidgetStaticContent($widget);
        $layouts = $this->responsiveConf;

        foreach ($layouts as $size => $void) {
            // We don't want to fatal if we add a new size in the responsive configuration
            $layouts[$size] = @$this->layoutConfig[$parameters['layout'.ucfirst($size)]] ?: null;
        }
        $colMax = array_reduce($layouts, function ($carry, $item) {
            return max(count($item), $carry);
        });

        $computedCols = [];
        foreach (range(1, $colMax) as $colNb) {
            $computedCols[$colNb] = [];
            foreach ($layouts as $device => $cols) {
                if ($cols === null) {
                    $computedCols[$colNb][$device] = null;
                } elseif (array_key_exists($colNb - 1, $cols)) {
                    $computedCols[$colNb][$device] = $cols[$colNb - 1];
                } else {
                    $computedCols[$colNb][$device] = $cols[($colNb - 1) % count($cols)];
                }
            }
        }

        $parameters['cols'] = $computedCols;

        return $parameters;
    }
}
