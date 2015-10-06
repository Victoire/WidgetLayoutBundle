<?php
namespace Victoire\Widget\LayoutBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Victoire\Bundle\WidgetBundle\Entity\Widget;

/**
 * WidgetLayout
 *
 * @ORM\Table("vic_widget_layout")
 * @ORM\Entity
 */
class WidgetLayout extends Widget
{
    /**
     * @var string
     *
     * @ORM\Column(name="layoutLg", type="string", length=25)
     */
    protected $layoutLg;
    /**
     * @var string
     *
     * @ORM\Column(name="layoutMd", type="string", length=255)
     */
    protected $layoutMd;
    /**
     * @var string
     *
     * @ORM\Column(name="layoutSm", type="string", length=25)
     */
    protected $layoutSm;
    /**
     * @var string
     *
     * @ORM\Column(name="layoutXs", type="string", length=25)
     */
    protected $layoutXs;

    /**
     * @var string
     *
     * @ORM\Column(name="has_container", type="boolean", options={"default" = false})
     */
    protected $hasContainer = false;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     *
     * @return String
     */
    public function __toString()
    {
        return 'Layout #'.$this->id;
    }

    /**
     * Get hasContainer
     *
     * @return string
     */
    public function getHasContainer()
    {
        return $this->hasContainer;
    }

    /**
     * Set hasContainer
     * @param string $hasContainer
     *
     * @return $this
     */
    public function setHasContainer($hasContainer)
    {
        $this->hasContainer = $hasContainer;

        return $this;
    }

    /**
     * @return string
     */
    public function getLayoutXs()
    {
        return $this->layoutXs;
    }

    /**
     * @param string $layoutXs
     */
    public function setLayoutXs($layoutXs)
    {
        $this->layoutXs = $layoutXs;
    }

    /**
     * @return string
     */
    public function getLayoutLg()
    {
        return $this->layoutLg;
    }

    /**
     * @param string $layoutLg
     */
    public function setLayoutLg($layoutLg)
    {
        $this->layoutLg = $layoutLg;
    }

    /**
     * @return string
     */
    public function getLayoutMd()
    {
        return $this->layoutMd;
    }

    /**
     * @param string $layoutMd
     */
    public function setLayoutMd($layoutMd)
    {
        $this->layoutMd = $layoutMd;
    }

    /**
     * @return string
     */
    public function getLayoutSm()
    {
        return $this->layoutSm;
    }

    /**
     * @param string $layoutSm
     */
    public function setLayoutSm($layoutSm)
    {
        $this->layoutSm = $layoutSm;
    }


}
