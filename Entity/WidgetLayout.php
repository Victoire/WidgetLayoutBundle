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
    public static $tags = array(
        "section",
        "header",
        "footer",
        "nav",
        "article",
        "aside",
        "div"
    );

    /**
     * @var string
     *
     * @ORM\Column(name="layout", type="string", length=255)
     */
    protected $layout;

    /**
     * @var string
     *
     * @ORM\Column(name="container_tag", type="string", length=255)
     */
    protected $containerTag;

    /**
     * @var string
     *
     * @ORM\Column(name="container_class", type="string", length=255)
     */
    protected $containerClass;

    /**
     * @var string
     *
     * @ORM\Column(name="container_width", type="string", length=255)
     */
    protected $containerWidth;

    /**
     * @var string
     *
     * @ORM\Column(name="container_margin", type="string", length=255)
     */
    protected $containerMargin;

    /**
     * @var string
     *
     * @ORM\Column(name="container_padding", type="string", length=255)
     */
    protected $containerPadding;

    /**
     * @var string
     *
     * @ORM\Column(name="container_background", type="string", length=255)
     */
    protected $containerBackground;

    /**
     * To String function
     * Used in render choices type (Especially in VictoireWidgetRenderBundle)
     * //TODO Check the generated value and make it more consistent
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
     * Set containerClass
     * @param string $containerClass
     *
     * @return $this
     */
    public function setContainerClass($containerClass)
    {
        $this->containerClass = $containerClass;

        return $this;
    }

    /**
     * Get containerClass
     *
     * @return string
     */
    public function getContainerClass()
    {
        return $this->containerClass;
    }

    /**
     * Set containerTag
     * @param string $containerTag
     *
     * @return $this
     */
    public function setContainerTag($containerTag)
    {
        $this->containerTag = $containerTag;

        return $this;
    }

    /**
     * Get containerTag
     *
     * @return string
     */
    public function getContainerTag()
    {
        return $this->containerTag;
    }

    /**
     * Set containerWidth
     * @param string $containerWidth
     *
     * @return $this
     */
    public function setContainerWidth($containerWidth)
    {
        $this->containerWidth = $containerWidth;

        return $this;
    }

    /**
     * Get containerWidth
     *
     * @return string
     */
    public function getContainerWidth()
    {
        return $this->containerWidth;
    }

    /**
     * Set containerMargin
     * @param string $containerMargin
     *
     * @return $this
     */
    public function setContainerMargin($containerMargin)
    {
        $this->containerMargin = $containerMargin;

        return $this;
    }

    /**
     * Get containerMargin
     *
     * @return string
     */
    public function getContainerMargin()
    {
        return $this->containerMargin;
    }

    /**
     * Set containerPadding
     * @param string $containerPadding
     *
     * @return WidgetLayout
     */
    public function setContainerPadding($containerPadding)
    {
        $this->containerPadding = $containerPadding;

        return $this;
    }

    /**
     * Get containerPadding
     *
     * @return string
     */
    public function getContainerPadding()
    {
        return $this->containerPadding;
    }

    /**
     * Get containerBackground
     *
     * @return string
     */
    public function getContainerBackground()
    {
        return $this->containerBackground;
    }

    /**
     * Set containerBackground
     * @param string $containerBackground
     *
     * @return $this
     */
    public function setContainerBackground($containerBackground)
    {
        $this->containerBackground = $containerBackground;

        return $this;
    }

}
