<?php
/**
 * @author Amasty Team
 * @copyright Copyright (c) 2020 Amasty (https://www.amasty.com)
 * @package Amasty_Base
 */


namespace Thedotwriter\StoreConfigSubmenu\Plugin\Backend\Block;

use Magento\Backend\Block\Menu as NativeMenu;

class Menu
{
    /**
     * Include the configuration submenu as a hidden block next to the main menu and init a modal to be opened when
     * clicking on the "Configuration" link.
     * 
     * @param NativeMenu $subject
     * @param string $html
     *
     * @return string
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function afterToHtml(NativeMenu $subject, $html)
    {
        $submenu = $subject->getLayout()->createBlock(\Magento\Config\Block\System\Config\Tabs::class)
            ->setTemplate('Magento_Config::system/config/tabs.phtml');
        
        $js = $subject->getLayout()->createBlock(\Magento\Backend\Block\Template::class)
            ->assign('submenu', $submenu)
            ->setTemplate('Thedotwriter_StoreConfigSubmenu::submenu.phtml')
            ->toHtml();
        
        return $html . $js;
    }
}
