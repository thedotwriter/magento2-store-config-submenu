<?php
namespace Thedotwriter\StoreConfigSubmenu\Plugin\Config\Block\System\Config;

use \Magento\Config\Block\System\Config\Tabs as NativeTabs;

class Tabs 
{
    /**
     * Specify the full URL in getUrl() instead of the "* /* /*" format, allowing us to include the menu in every admin 
     * page with the correct URL.
     * 
     * @param NativeTabs $subject
     * @param $url
     * 
     * @return string
     */
    public function afterGetSectionUrl(NativeTabs $subject, $url) {
        $urlParts = explode('/', $url);
        
        $section = null;
        foreach($urlParts as $key => $urlPart) {
            if ($urlPart == 'section') {
                $section = $urlParts[$key + 1];
            }
        }
        
        return $subject->getUrl('adminhtml/system_config/edit', ['section' => $section]);
    }
}