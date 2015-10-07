Victoire DCMS Layout Bundle
============

What is the purpose of this bundle
------------

This bundles gives you access to the *Columns Widget*.

This widget set up the layout of your pages in order to create from 1 to 6 colums on the same level.
Each column can holds any kind of widget.

Install the bundle
-----------------

First you need to have a valid Symfony2 [Victoire](http://www.github.com/victoire/victoire) edition.

Then you just have to run the following composer command :

    php composer.phar require friendsofvictoire/layout-widget

Do not forget to add the bundle in your AppKernel !

    class AppKernel extends Kernel
    {
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Victoire\Widget\LayoutBundle\VictoireWidgetLayoutBundle(),
            );

            return $bundles;
        }
    }
