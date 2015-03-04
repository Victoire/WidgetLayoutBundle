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
     * @ORM\Column(name="layout", type="string", length=255)
     */
    protected $layout;

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
     * Set layout
     * @param string $layout
     *
     * @return $this
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;

        return $this;
    }

    /**
     * Get layout
     *
     * @return string
     */
    public function getLayout()
    {
        return $this->layout;
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
}
