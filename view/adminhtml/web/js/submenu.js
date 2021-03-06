require([
    'jquery',
    'Magento_Ui/js/modal/modal'
], function ($, modal) {
    $(function () {
        // Prevent the click on the "Configuration" link to load the actual page.
        $('[data-ui-id=menu-magento-config-system-config] > a, [data-ui-id=menu-thedotwriter-storeconfigsubmenu-system-settings-config] > a')
            .click(function (e) {
                e.preventDefault();
            });

        // Init the modal that will be opened when clicking on the "Configuration" link.
        $('.config-submenu').modal({
            'type': 'slide',
            'title': 'Configuration',
            'trigger': '[data-ui-id=menu-magento-config-system-config] > a, [data-ui-id=menu-thedotwriter-storeconfigsubmenu-system-settings-config] > a',
            'responsive': true,
            'buttons': []
        });
    });
});
