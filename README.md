# Magento 2 Store Config Submenu
Makes the configuration submenu available inside a slide modal when cliking on the Stores > Settings > Configuration link. Makes us skip the need to load the default config form before the one we want.

Also adds a "Configuration" link to the System menu for M1 developers still making the mistake ;).

![Demo](http://thedotwriter.com/static/magento2-store-config-submenu/demo_no_loop.gif)

## How to install
Run the following commands in your Magento 2 root folder:

```
composer require thedotwriter/magento2-store-config-submenu
php bin/magento setup:upgrade
```
