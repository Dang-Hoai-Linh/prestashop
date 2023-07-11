<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__efa28ddcfdbe34a96598f2697023f4e982b4ca272d58328b67d02512c65b3c06 */
class __TwigTemplate_31c50345b327320659a7223cd0bd948d5a8ef024e9d5247da7eb1f0b2e10989d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'extra_stylesheets' => [$this, 'block_extra_stylesheets'],
            'content_header' => [$this, 'block_content_header'],
            'content' => [$this, 'block_content'],
            'content_footer' => [$this, 'block_content_footer'],
            'sidebar_right' => [$this, 'block_sidebar_right'],
            'javascripts' => [$this, 'block_javascripts'],
            'extra_javascripts' => [$this, 'block_extra_javascripts'],
            'translate_javascripts' => [$this, 'block_translate_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/ps/PrestaShop/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/ps/PrestaShop/img/app_icon.png\" />

<title>Module notifications • PrestaShop</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminModulesUpdates';
    var iso_user = 'en';
    var lang_is_rtl = '0';
    var full_language_code = 'en-us';
    var full_cldr_language_code = 'en-US';
    var country_iso_code = 'VN';
    var _PS_VERSION_ = '8.0.4';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'A new order has been placed on your shop.';
    var order_number_msg = 'Order number: ';
    var total_msg = 'Total: ';
    var from_msg = 'From: ';
    var see_order_msg = 'View this order';
    var new_customer_msg = 'A new customer registered on your shop.';
    var customer_name_msg = 'Customer name: ';
    var new_msg = 'A new message was posted on your shop.';
    var see_msg = 'Read this message';
    var token = '19686480de78d153cdffb2a838c35dad';
    var token_admin_orders = tokenAdminOrders = '1e90f7d2fff3b034f6c1cfe805d0a87c';
    var token_admin_customers = 'ffc66b5496c7c8b23522e9040147cd73';
    var token_admin_customer_threads = tokenAdminCustomerThreads = 'b442b045b10efde8165e5f1d585e072e';
    var currentIndex = 'index.php?controller=AdminModulesUpdates';
    var employee_token = '46efbf994f25399087d50877f6d342e5';
    var choose_language_translate = 'Choose language:';
    var default_language = '1';
    var admin_modules_link = '/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/manage?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8';
    var admin_notification_get_link = '/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/common/notificatio";
        // line 42
        echo "ns?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8';
    var admin_notification_push_link = adminNotificationPushLink = '/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/common/notifications/ack?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8';
    var tab_modules_list = '';
    var update_success_msg = 'Update successful';
    var search_product_msg = 'Search for a product';
  </script>



<link
      rel=\"preload\"
      href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/new-theme/public/703cf8f274fbb265d49c6262825780e1.preload.woff2\"
      as=\"font\"
      crossorigin
    >
      <link href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/modules/ps_mbo/views/css/module-catalog.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/modules/ps_mbo/views/css/cdc-error-templating.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/modules/psxmarketingwithgoogle/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"https://unpkg.com/@prestashopcorp/edition-reskin@latest/dist/back.min.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/ps/PrestaShop/modules/ps_facebook/views/css/admin/menu.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/ps\\/PrestaShop\\/admin820iuypvkvyalbqnyjd\\/\";
var baseDir = \"\\/ps\\/PrestaShop\\/\";
var changeFormLanguageUrl = \"\\/ps\\/PrestaShop\\/admin820iuypvkvyalbqnyjd";
        // line 71
        echo "\\/index.php\\/configure\\/advanced\\/employees\\/change-form-language?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\";
var currency = {\"iso_code\":\"VND\",\"sign\":\"\\u20ab\",\"name\":\"Vietnamese Dong\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"VND\",\"currencySymbol\":\"\\u20ab\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4#,##0.00\",\"negativePattern\":\"-\\u00a4#,##0.00\",\"maxFractionDigits\":0,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/js/admin.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/js/tools.js?v=8.0.4\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/js/vendor/d3.v3";
        // line 88
        echo ".min.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/js/jquery/plugins/growl/jquery.growl.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_mbo/views/js/cdc-error-templating.js\"></script>
<script type=\"text/javascript\" src=\"https://assets.prestashop3.com/dst/mbo/v1/mbo-cdc.umd.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_mbo/views/js/recommended-modules.js?v=4.4.1\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_edition_basic/views/js/favicon.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_faviconnotificationbo/views/js/favico.js\"></script>
<script type=\"text/javascript\" src=\"/ps/PrestaShop/modules/ps_faviconnotificationbo/views/js/ps_faviconnotificationbo.js\"></script>

  <script>
            var admin_gamification_ajax_url = \"http:\\/\\/localhost\\/ps\\/PrestaShop\\/admin820iuypvkvyalbqnyjd\\/index.php?controller=AdminGamification&token=c3b891b5025d0061df200286f1f822f4\";
            var current_id_tab = 42;
        </script><script>
  if (undefined !== ps_faviconnotificationbo) {
    ps_faviconnotificationbo.initialize({
      backgroundColor: '#DF0067',
      textColor: '#FFFFFF',
      notificationGetUrl: '/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/common/notifications?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8',
      CHECKBOX_ORDER: 1,
      CHECKBOX_CUSTOMER: 1,
      CHECKBOX_MESSAGE: 1,
      timer: 120000, // Refresh every 2 minutes
    });
  }
</script>


";
        // line 117
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-en adminmodulesupdates\"
  data-base-url=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php\"  data-token=\"tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminDashboard&amp;token=baa89970e2d071f2d3e1940997b7fca6\"></a>
      <span id=\"shop_version\">8.0.4</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Quick Access
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1cfb39be837f449493c005e9fca275fe\"
                 data-item=\"Catalog evaluation\"
      >Catalog evaluation</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/manage?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
                 data-item=\"Installed modules\"
      >Installed modules</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/categories/new?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
                 data-item=\"New category\"
      >New category</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/products/new?token=d37fa7770bf56f82d4c38c6de";
        // line 151
        echo "5c48b8c\"
                 data-item=\"New product\"
      >New product</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=70c8327da2998e8667ee8d8f838d967f\"
                 data-item=\"New voucher\"
      >New voucher</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
                 data-item=\"Orders\"
      >Orders</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"61\"
        data-icon=\"icon-AdminModulesSf\"
        data-method=\"add\"
        data-url=\"index.php/improve/modules/updates?-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\"
        data-post-link=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminQuickAccesses&token=62d3acc75ad83bab6cc40044acb1d894\"
        data-prompt-text=\"Please name this shortcut:\"
        data-link=\"Updates - List\"
      >
        <i class=\"material-icons\">add_circle</i>
        Add current page to Quick Access
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminQuickAccesses&token=62d3acc75ad83bab6cc40044acb1d894\">
      <i class=\"material-icons\">settings</i>
      Manage your quick accesses
    </a>
  </div>
</div>
      </div>
      <div class=\"component component-search\" id=\"header-search-container\">
        <div class=\"component-search-body\">
          <div class=\"component-search-top\">
            <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminSearch&amp;token=148e8b0addd4d054d6f9a31e0002c";
        // line 190
        echo "4d2\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Search (e.g.: product reference, customer name…)\" aria-label=\"Searchbar\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        Everywhere
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"Everywhere\" href=\"#\" data-value=\"0\" data-placeholder=\"What are you looking for?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> Everywhere</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catalog\" href=\"#\" data-value=\"1\" data-placeholder=\"Product name, reference, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catalog</a>
        <a class=\"dropdown-item\" data-item=\"Customers by name\" href=\"#\" data-value=\"2\" data-placeholder=\"Name\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Customers by name</a>
        <a class=\"dropdown-item\" data-item=\"Customers by ip address\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Customers by IP address</a>
        <a class=\"dropdown-item\" data-item=\"Orders\" href=\"#\" data-value=\"3\" data-placeholder=\"Order ID\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_basket</i> Orders</a>
        <a class=\"dropdown-item\" data-item=\"Invoices\" href=\"#\" data-value=\"4\" data-placeholder=\"Invoice number\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Invoices</a>
        <a class=\"dropdown-item\" data-item=\"Carts\" href=\"#\" data-value=\"5\" data-placeholder=\"Cart ID\" data-icon=\"icon-shopping-cart\"><i class";
        // line 207
        echo "=\"material-icons\">shopping_cart</i> Carts</a>
        <a class=\"dropdown-item\" data-item=\"Modules\" href=\"#\" data-value=\"7\" data-placeholder=\"Module name\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Modules</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">SEARCH</span><i class=\"material-icons\">search</i></button>
    </div>
  </div>
</form>

<script type=\"text/javascript\">
 \$(document).ready(function(){
    \$('#bo_query').one('click', function() {
    \$(this).closest('form').removeClass('collapsed');
  });
});
</script>
            <button class=\"component-search-cancel d-none\">Cancel</button>
          </div>

          <div class=\"component-search-quickaccess d-none\">
  <p class=\"component-search-title\">Quick Access</p>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=1cfb39be837f449493c005e9fca275fe\"
             data-item=\"Catalog evaluation\"
    >Catalog evaluation</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/manage?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
             data-item=\"Installed modules\"
    >Installed modules</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/categories/new?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
             data-item=\"New category\"
    >New category</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/products/new?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
             data-item=\"New product\"
    >New product</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCartRules&amp;";
        // line 244
        echo "addcart_rule&amp;token=70c8327da2998e8667ee8d8f838d967f\"
             data-item=\"New voucher\"
    >New voucher</a>
      <a class=\"dropdown-item quick-row-link\"
       href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders?token=d37fa7770bf56f82d4c38c6de5c48b8c\"
             data-item=\"Orders\"
    >Orders</a>
    <div class=\"dropdown-divider\"></div>
      <a id=\"quick-add-link\"
      class=\"dropdown-item js-quick-link\"
      href=\"#\"
      data-rand=\"47\"
      data-icon=\"icon-AdminModulesSf\"
      data-method=\"add\"
      data-url=\"index.php/improve/modules/updates?-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\"
      data-post-link=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminQuickAccesses&token=62d3acc75ad83bab6cc40044acb1d894\"
      data-prompt-text=\"Please name this shortcut:\"
      data-link=\"Updates - List\"
    >
      <i class=\"material-icons\">add_circle</i>
      Add current page to Quick Access
    </a>
    <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminQuickAccesses&token=62d3acc75ad83bab6cc40044acb1d894\">
    <i class=\"material-icons\">settings</i>
    Manage your quick accesses
  </a>
</div>
        </div>

        <div class=\"component-search-background d-none\"></div>
      </div>

      
      
      <div class=\"header-right\">
                  <div class=\"component\" id=\"header-shop-list-container\">
              <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/ps/PrestaShop/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>View my store</span>
    </a>
  </div>
          </div>
                          <div class=\"component header-right-component\" id=\"header-notifications-container\">
            <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggl";
        // line 289
        echo "e=\"dropdown\">
    <i class=\"material-icons\">notifications_none</i>
    <span id=\"notifications-total\" class=\"count hide\">0</span>
  </button>
  <div class=\"dropdown-menu dropdown-menu-right js-notifs_dropdown\">
    <div class=\"notifications\">
      <ul class=\"nav nav-tabs\" role=\"tablist\">
                          <li class=\"nav-item\">
            <a
              class=\"nav-link active\"
              id=\"orders-tab\"
              data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Orders<span id=\"_nb_new_orders_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"customers-tab\"
              data-toggle=\"tab\"
              data-type=\"customer\"
              href=\"#customers-notifications\"
              role=\"tab\"
            >
              Customers<span id=\"_nb_new_customers_\"></span>
            </a>
          </li>
                                    <li class=\"nav-item\">
            <a
              class=\"nav-link \"
              id=\"messages-tab\"
              data-toggle=\"tab\"
              data-type=\"customer_message\"
              href=\"#messages-notifications\"
              role=\"tab\"
            >
              Messages<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new order for now :(<br>
              Have you checked your <strong><a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=e11e843cbeb6c493c8f30666269c8485\">abandoned carts</a></strong>?<br>Your next order could be hiding there!
            </";
        // line 340
        echo "p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new customer for now :(<br>
              Are you active on social media these days?
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No new message for now.<br>
              Seems like all your customers are happy :)
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                        </div>
    </div>
  </div>
</div>

  <script type=\"text/html\" id=\"order-notification-template\">
    <a class=\"notif\" href='order_url'>
      #_id_order_ -
      from <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registered <strong>_date_add_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"message-notification-template\">
    <a class=\"notif\" href='message_url'>
    <span class=\"message-notification-status _status_\">
      <i class=\"material-icons\">fiber_manual_record</i> _status_
    </span>
      - <strong>_customer_name_</strong> (_company_) - <i class=\"material-icons\">access_time</i> _date_add_
    </a>
  </script>
          </div>
        
        <div class=\"component\" id=\"header-employee-container\">
          <div class=\"dropdown employee-dropdown\">
  <div class=\"rounded-circle person\" data-toggle=\"dropdown\">
    <i class=\"material-icons\">account_circle</i>
  </div>
  <div class=\"dropdown-menu dropdown-menu-right\">
    <div clas";
        // line 392
        echo "s=\"employee-wrapper-avatar\">
      <div class=\"employee-top\">
        <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/ps/PrestaShop/img/pr/default.jpg\" alt=\"Linh\" /></span>
        <span class=\"employee_profile\">Welcome back Linh</span>
      </div>

      <a class=\"dropdown-item employee-link profile-link\" href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/employees/1/edit?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\">
      <i class=\"material-icons\">edit</i>
      <span>Your profile</span>
    </a>
    </div>

    <p class=\"divider\"></p>

                  <a class=\"dropdown-item \" href=\"https://accounts.distribution.prestashop.net?utm_source=localhost&utm_medium=back-office&utm_campaign=ps_accounts&utm_content=headeremployeedropdownlink\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">open_in_new</i> Manage your PrestaShop account
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=training-en\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">school</i> Training
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=expert-en\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">person_pin_circle</i> Find an expert
        </a>
                          <a class=\"dropdown-item ps_mbo\" href=\"https://addons.prestashop.com/en/?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=addons-en\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">extension</i> Prestashop Marketplace
        </a>
                          <a class=\"dropdown-item ps_mbo\" hre";
        // line 418
        echo "f=\"https://help-center.prestashop.com/en?utm_source=back-office&utm_medium=menu&utm_content=download8_0&utm_campaign=help-center-en\" target=\"_blank\" rel=\"noopener noreferrer nofollow\">
            <i class=\"material-icons\">help</i> Help Center
        </a>
                  <p class=\"divider\"></p>
            
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminLogin&amp;logout=1&amp;token=be2dab10d1c691e3e67cc767bd4ca96d\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Sign out</span>
    </a>
  </div>
</div>
        </div>
              </div>
    </nav>
  </header>

  <nav class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/employees/toggle-navigation?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\">
    <i class=\"material-icons rtl-flip\">chevron_left</i>
    <i class=\"material-icons rtl-flip\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <div class=\"logo-container\">
          <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminDashboard&amp;token=baa89970e2d071f2d3e1940997b7fca6\"></a>
          <span id=\"shop_version\" class=\"header-version\">8.0.4</span>
      </div>

      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminDashboard&amp;token=baa89970e2d071f2d3e1940997b7fca6\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Dashboard</span>
              </a>
            </li>

          
                      
                                          
         ";
        // line 460
        echo "           
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Sell</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Orders
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Orders
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders/invoices/?";
        // line 493
        echo "_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Invoices
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders/credit-slips/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Credit Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/orders/delivery-slips/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Delivery Slips
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCarts&amp;token=e11e843cbeb6c493c8f30666269c8485\" class=\"link\"> Shopping Carts
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
             ";
        // line 525
        echo "                                         
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/products?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catalog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/products?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Products
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/categories?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Categories
                                </a>
                              </li>

                                                                     ";
        // line 554
        echo "             
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/monitoring/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Monitoring
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminAttributesGroups&amp;token=732872eddfa3be6e7ba154b120391751\" class=\"link\"> Attributes &amp; Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/catalog/brands/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Brands &amp; Suppliers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/a";
        // line 582
        echo "ttachments/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Files
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCartRules&amp;token=70c8327da2998e8667ee8d8f838d967f\" class=\"link\"> Discounts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/stocks/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/customers/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Customers
                      </span>
                                     ";
        // line 614
        echo "               <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/customers/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Customers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/addresses/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Addresses
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCustomerThreads&amp;token=b442b045b10efde8165e5f1d585";
        // line 642
        echo "e072e\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Customer Service
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCustomerThreads&amp;token=b442b045b10efde8165e5f1d585e072e\" class=\"link\"> Customer Service
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/sell/customer-service/order-messages/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Order Messages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=";
        // line 672
        echo "\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminReturn&amp;token=61df1433cb2e99123548c71e5874e53c\" class=\"link\"> Merchandise Returns
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/metrics/legacy/stats?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Stats
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"150\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/metrics/legacy/stats?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Stats
                                </a>
                              </li>

                                                                                  
                              
        ";
        // line 703
        echo "                                                    
                              <li class=\"link-leveltwo\" data-submenu=\"151\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/metrics?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"37\" id=\"tab-IMPROVE\">
                <span class=\"title\">Improve</span>
            </li>

                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"38\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/mbo/modules/catalog/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Modules
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-38\" class=\"submenu panel-collapse\">
                                                                                                                   ";
        // line 736
        echo "                                               
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminPsMboModuleParent\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/mbo/modules/catalog/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"39\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/manage?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Module Manager
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/design/themes/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Design
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                             ";
        // line 765
        echo "       keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"152\" id=\"subtab-AdminThemesParent\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/design/themes/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Theme &amp; Logo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"147\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/mbo/themes/catalog/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Themes Catalog
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"45\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/design/mail_theme/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Email Theme
                                </a>
                              </li>

                                                                                  
                              
                ";
        // line 795
        echo "                                            
                              <li class=\"link-leveltwo\" data-submenu=\"47\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/design/cms-pages/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Pages
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/design/modules/positions/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Positions
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"49\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminImages&amp;token=6727f1a2cf6ddb603cd33f1e59e35763\" class=\"link\"> Image Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/link-widget/list?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Link List
        ";
        // line 822
        echo "                        </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"50\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCarriers&amp;token=da0c68a7a49f584f020c7a2443ba9934\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Shipping
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-50\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"51\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminCarriers&amp;token=da0c68a7a49f584f020c7a2443ba9934\" class=\"link\"> Carriers
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"52\" id=\"subtab-AdminShipping\">
            ";
        // line 854
        echo "                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/shipping/preferences/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"126\" id=\"subtab-AdminMbeConfiguration\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminMbeConfiguration&amp;token=a44ecbd5eef8914a83f2fe9f35c8ded1\" class=\"link\"> Configuration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"127\" id=\"subtab-AdminMbeShipping\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminMbeShipping&amp;token=e8e322eed70d6cb4b91cc0ab65faf3ef\" class=\"link\"> MBE shipments
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"53\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/payment/payment_methods?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-paym";
        // line 882
        echo "ent\">payment</i>
                      <span>
                      Payment
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-53\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"54\" id=\"subtab-AdminPayment\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/payment/payment_methods?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Payment Methods
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/payment/preferences?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Preferences
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"56\" id=\"subtab-AdminInternational\">
                    <a href=\"/ps/PrestaS";
        // line 914
        echo "hop/admin820iuypvkvyalbqnyjd/index.php/improve/international/localization/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      International
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-56\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/international/localization/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Localization
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/international/zones/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Locations
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              ";
        // line 943
        echo "<li class=\"link-leveltwo\" data-submenu=\"66\" id=\"subtab-AdminParentTaxes\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/international/taxes/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Taxes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"69\" id=\"subtab-AdminTranslations\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/international/translations/settings?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Translations
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"131\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=d373ae854cfa4fe402e4b232bb5af5d1\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Marketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-131\" cla";
        // line 972
        echo "ss=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"132\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=d373ae854cfa4fe402e4b232bb5af5d1\" class=\"link\"> Google
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminPsfacebookModule&amp;token=e27958bbe81d028895064c9db6e8daf2\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"70\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configure</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"71\" id=\"subtab-ShopParameters\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/preferences/preferences?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
          ";
        // line 1007
        echo "            <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Shop Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-71\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/preferences/preferences?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"75\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/order-preferences/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Order Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"78\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/ps/PrestaShop/admi";
        // line 1036
        echo "n820iuypvkvyalbqnyjd/index.php/configure/shop/product-preferences/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Product Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/customer-preferences/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Customer Settings
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"83\" id=\"subtab-AdminParentStores\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/contacts/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Contact
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"86\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/shop/seo-urls/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Traffic &amp; SEO
                                </a>
                              </li>

                                                                                  
                  ";
        // line 1065
        echo "            
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminSearchConf&amp;token=e0c91220d06ab48da5be6cfbca8909b2\" class=\"link\"> Search
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"92\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/system-information/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Advanced Parameters
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-92\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminInformation\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/system-information/?_to";
        // line 1093
        echo "ken=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Information
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"94\" id=\"subtab-AdminPerformance\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/performance/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Performance
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"95\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/administration/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Administration
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminEmails\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/emails/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> E-mail
                                </a>
                              </li>

                                                                                  
                              
                                                            
                  ";
        // line 1124
        echo "            <li class=\"link-leveltwo\" data-submenu=\"97\" id=\"subtab-AdminImport\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/import/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Import
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"98\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/employees/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Team
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"102\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/sql-requests/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Database
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"105\" id=\"subtab-AdminLogs\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/logs/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Logs
                                </a>
                              </li>

             ";
        // line 1153
        echo "                                                                     
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminWebservice\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/webservice-keys/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/feature-flags/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> New &amp; Experimental Features
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"110\" id=\"subtab-AdminParentSecurity\">
                                <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/configure/advanced/security/?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" class=\"link\"> Security
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  
</nav>


<d";
        // line 1187
        echo "iv class=\"header-toolbar d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Module Manager</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/updates?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" aria-current=\"page\">Updates</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Module notifications          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-add_module\"
                  href=\"#\"                  title=\"Upload a module\"                  data-toggle=\"pstooltip\"
                  data-placement=\"bottom\"                >
                  <i class=\"material-icons\">cloud_upload</i>                  Upload a module
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Help\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.4%2526country%253Den/Help?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\"
                   id=\"product_form_open_help\"
                >
                  Help
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

  
      <div class=\"page-head-tabs\" id=\"head_tabs\">
      <ul c";
        // line 1239
        echo "lass=\"nav nav-pills\">
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                          <li class=\"nav-item\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/manage?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" id=\"subtab-AdminModulesManage\" class=\"nav-link tab \" data-submenu=\"40\">
                      Modules
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/alerts?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" id=\"subtab-AdminModulesNotifications\" class=\"nav-link tab \" data-submenu=\"41\">
                      Alerts
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                <li class=\"nav-item\">
                    <a href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/improve/modules/updates?_token=tKVT7Blv-bucyR";
        // line 1257
        echo "RRiAGiu9ixE4BxG_lovvbEL8c7nS8\" id=\"subtab-AdminModulesUpdates\" class=\"nav-link tab active current\" data-submenu=\"42\">
                      Updates
                      <span class=\"notification-container\">
                        <span class=\"notification-counter\"></span>
                      </span>
                    </a>
                  </li>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    </ul>
    </div>
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item   pointer\"              id=\"page-header-desc-floating-configuration-add_module\"
              href=\"#\"              title=\"Upload a module\"         ";
        // line 1276
        echo "     data-toggle=\"pstooltip\"
              data-placement=\"bottom\"            >
              Upload a module
              <i class=\"material-icons\">cloud_upload</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Help\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop-project.org%252Fen%252Fdoc%252FAdminModules%253Fversion%253D8.0.4%2526country%253Den/Help?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\"
            >
              Help
            </a>
                        </div>
    </div>
  </div>
  
</div>

<div id=\"main-div\">
          
      <div class=\"content-div  with-tabs\">

        

                                                        
        <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>
<div id=\"content-message-box\"></div>


  ";
        // line 1306
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

        

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>Oh no!</h1>
  <p class=\"mt-3\">
    The mobile version of this page is not available yet.
  </p>
  <p class=\"mt-2\">
    Please use a desktop computer to access this page, until is adapted to mobile.
  </p>
  <p class=\"mt-2\">
    Thank you.
  </p>
  <a href=\"http://localhost/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php?controller=AdminDashboard&amp;token=baa89970e2d071f2d3e1940997b7fca6\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons rtl-flip\">arrow_back</i>
    Back
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    <div id=\"module-modal-addons-connect\" class=\"modal  modal-vcenter fade\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"module-modal-title\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Connect to Addons marketplace</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
                  <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                      Link your shop to your Addons account to automatically receive important updates for the modules you purchased. Don&#039;t have an account yet?
                      <a href=\"https://accounts.distribution.prestashop.net/en/sign-up?_ga=2.183749797.2029715227.1645605306-2047387021.1643627469&amp;_gac=1.81371877.1644238612.CjwKCAiAo4OQBhBBEiwA5KWu_5UzrywbBPo4PKIYESy7K-noavdo7Z4riOZMJEoM9mE1IE3gks0thxoCZOwQAvD_BwE\" target=\"_blank\">Sign up now</a>
                  </p>
                  <p>
                      If you created your account using Google, please follow the forgotten password procedure of Addons Marketplace to create your password :
                      <a href=\"https://auth.prestashop.com";
        // line 1349
        echo "/en/password/request\" target=\"_blank\">Reset your password</a>
                  </p>
                  <form id=\"addons-connect-form\"
                        action=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/mbo/addons/login?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\"
                        method=\"POST\"
                        data-error-message=\"An error occurred while processing your request.\"
                  >
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-email\">Email address</label>
                    <input name=\"username_addons\" type=\"email\" class=\"form-control\" id=\"module-addons-connect-email\" placeholder=\"Email\">
                  </div>
                  <div class=\"form-group\">
                    <label for=\"module-addons-connect-password\">Password</label>
                    <input name=\"password_addons\" type=\"password\" class=\"form-control\" id=\"module-addons-connect-password\" placeholder=\"Password\">
                  </div>
                  <div class=\"md-checkbox md-checkbox-inline\">
                    <label>
                      <input type=\"checkbox\" name=\"addons_remember_me\">
                      <i class=\"md-checkbox-control\"></i>
                        Remember me
                    </label>
                  </div>
                  <div class=\"text-center\">
                      <button type=\"submit\" class=\"btn btn-primary\">Let&#039;s go!</button>
                    <div id=\"addons_login_btn\" class=\"spinner\" style=\"display:none;\"></div>
                  </div>
                </form>
                <p class=\"text-center py-3\">
                    <a href=\"https://auth.prestashop.com/en/password/request\" target=\"_blank\">Forgot your password?</a>
                </p>
              </div>
          </div>
              </div>
    </div>
  </div>
</div>
<div id=\"module-modal-addons-logout\" class=\"modal  modal-vcenter fade\" role=\"dialog\">
  <div class=\"modal-dial";
        // line 1386
        echo "og\">
    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h4 class=\"modal-title module-modal-title\">Confirm logout</h4>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
      </div>
      <div class=\"modal-body\">
          <div class=\"row\">
              <div class=\"col-md-12\">
                  <p>
                    You are about to log out your Addons account. You might miss important updates of Addons you&#039;ve bought.
                  </p>
              </div>
          </div>
      </div>
      <div class=\"modal-footer\">
          <input type=\"button\" class=\"btn btn-default uppercase\" data-dismiss=\"modal\" value=\"Cancel\">
          <a class=\"btn btn-primary uppercase\" href=\"/ps/PrestaShop/admin820iuypvkvyalbqnyjd/index.php/modules/mbo/addons/logout?_token=tKVT7Blv-bucyRRRiAGiu9ixE4BxG_lovvbEL8c7nS8\" id=\"module-modal-addons-logout-ack\">Yes, log out</a>
      </div>

        </div>
    </div>
</div>

</div>
  

      <div class=\"bootstrap\">
      
    </div>
  
";
        // line 1418
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 117
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1306
    public function block_content_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_content_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 1418
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "__string_template__efa28ddcfdbe34a96598f2697023f4e982b4ca272d58328b67d02512c65b3c06";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1599 => 1418,  1578 => 1306,  1567 => 117,  1558 => 1418,  1524 => 1386,  1485 => 1349,  1436 => 1306,  1404 => 1276,  1383 => 1257,  1363 => 1239,  1309 => 1187,  1273 => 1153,  1242 => 1124,  1209 => 1093,  1179 => 1065,  1148 => 1036,  1117 => 1007,  1080 => 972,  1049 => 943,  1018 => 914,  984 => 882,  954 => 854,  920 => 822,  891 => 795,  859 => 765,  828 => 736,  793 => 703,  760 => 672,  728 => 642,  698 => 614,  664 => 582,  634 => 554,  603 => 525,  569 => 493,  534 => 460,  490 => 418,  462 => 392,  408 => 340,  355 => 289,  308 => 244,  269 => 207,  250 => 190,  209 => 151,  170 => 117,  139 => 88,  120 => 71,  89 => 42,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__efa28ddcfdbe34a96598f2697023f4e982b4ca272d58328b67d02512c65b3c06", "");
    }
}
