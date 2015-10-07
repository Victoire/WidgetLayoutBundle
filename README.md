#Victoire DCMS Layout Bundle
============

##What is the purpose of this bundle

This bundles gives you access to the *Columns Widget*.

This widget set up the layout of your pages in order to create from 1 to 6 colums on the same level.
Each column can holds any kind of widget.

##Set Up Victoire

If you haven't already, you can follow the steps to set up Victoire *[here](https://github.com/Victoire/victoire/blob/master/setup.md)*

##Install the bundle

Run the following composer command :

    php composer.phar require friendsofvictoire/layout-widget

##Reminder

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
