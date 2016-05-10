<?php

namespace Magium\Magento2\Themes\Magento2\Customer;

use Magium\Magento\Themes\Customer\AbstractThemeConfiguration;

class ThemeConfiguration extends AbstractThemeConfiguration
{

    public $loginUsernameField  = '//input[@id="email"]';
    public $loginPasswordField  = '//input[@id="pass"]';
    public $loginSubmitButton  = '//button[@id="send2"]';

    public $accountNavigationXpath  = '//div[@id="block-collapsible-nav"]/descendant::a[concat(" ",normalize-space(.)," ")=" {{%s}} "]';

    public $accountSectionHeaderXpath = '//h1[@class="page-title"]/descendant::span[concat(" ",normalize-space(.)," ")=" {{%s}} "]';

    public $orderPageName = 'My Orders';

    public $viewOrderLinkXpath = '//td[@data-th="{{Order #}}" and .="%s"]/../td[contains(concat(" ",normalize-space(@class)," ")," actions ")]/descendant::a[contains(concat(" ",normalize-space(@class)," ")," view ")]';

    public $orderPageTitleContainsText = 'Order #';
}