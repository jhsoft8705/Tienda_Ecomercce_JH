<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* __string_template__25d9110a26066316f0044f9ec9b0a0013d64cf55b5e06d6274dcf4f3b6d17590 */
class __TwigTemplate_87b576949acde336c3cd0fb4bd73dc8f70a77c40d296acc695fecf7523b97ae8 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

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
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"pe\">
<head>
  <meta charset=\"utf-8\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">
<meta name=\"robots\" content=\"NOFOLLOW, NOINDEX\">

<link rel=\"icon\" type=\"image/x-icon\" href=\"/Tienda_Jh_soft_ecommerce/img/favicon.ico\" />
<link rel=\"apple-touch-icon\" href=\"/Tienda_Jh_soft_ecommerce/img/app_icon.png\" />

<title>Rendimiento • Venta Express Perú</title>

  <script type=\"text/javascript\">
    var help_class_name = 'AdminPerformance';
    var iso_user = 'pe';
    var lang_is_rtl = '0';
    var full_language_code = 'es-pe';
    var full_cldr_language_code = 'es-PE';
    var country_iso_code = 'PE';
    var _PS_VERSION_ = '1.7.8.8';
    var roundMode = 2;
    var youEditFieldFor = '';
        var new_order_msg = 'Se ha recibido un nuevo pedido en tu tienda.';
    var order_number_msg = 'Número de pedido: ';
    var total_msg = 'Total: ';
    var from_msg = 'Desde: ';
    var see_order_msg = 'Ver este pedido';
    var new_customer_msg = 'Un nuevo cliente se ha registrado en tu tienda.';
    var customer_name_msg = 'Nombre del cliente: ';
    var new_msg = 'Un nuevo mensaje ha sido publicado en tu tienda.';
    var see_msg = 'Leer este mensaje';
    var token = '34c5cdcae6004a402ea16a44033178c5';
    var token_admin_orders = tokenAdminOrders = 'e6e1857adc8b4aff99bdaca48d4414a0';
    var token_admin_customers = 'be69923bde50e52b400f3ba993962bb7';
    var token_admin_customer_threads = tokenAdminCustomerThreads = '469b4886bb8da8b9fcb176dfc2bdb21c';
    var currentIndex = 'index.php?controller=AdminPerformance';
    var employee_token = '759275f6e4197196602d69e7fd5141b0';
    var choose_language_translate = 'Selecciona el idioma:';
    var default_language = '2';
    var admin_modules_link = '/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/modules/catalog/recommended?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU';
    var admin_notification_get_link = ";
        // line 42
        echo "'/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/common/notifications?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU';
    var admin_notification_push_link = adminNotificationPushLink = '/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/common/notifications/ack?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU';
    var tab_modules_list = '';
    var update_success_msg = 'Actualización correcta';
    var errorLogin = 'PrestaShop no pudo iniciar sesión en Addons. Por favor verifica tus datos de acceso y tu conexión de Internet.';
    var search_product_msg = 'Buscar un producto';
  </script>

      <link href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/new-theme/public/theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/js/jquery/plugins/chosen/jquery.chosen.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/js/jquery/plugins/fancybox/jquery.fancybox.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/modules/blockwishlist/public/backoffice.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/default/css/vendor/nv.d3.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/modules/gamification/views/css/gamification.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/modules/ps_mbo/views/css/catalog.css?v=3.0.1\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/themes/base/jquery.ui.core.css\" rel=\"stylesheet\" type=\"text/css\"/>
      <link href=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/themes/base/jquery.ui.theme.css\" rel=\"stylesheet\" type=\"text/css\"/>
  
  <script type=\"text/javascript\">
var baseAdminDir = \"\\/Tienda_Jh_soft_ecommerce\\/admin969ku2sir\\/\";
var baseDir = \"\\/Tienda_Jh_soft_ecommerce\\/\";
var changeFormLanguageUrl = \"\\/Tienda_Jh_soft_ecommerce\\/admin969ku2sir\\/index.php\\/configure\\/advanced";
        // line 63
        echo "\\/employees\\/change-form-language?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\";
var currency = {\"iso_code\":\"PEN\",\"sign\":\"S\\/\",\"name\":\"Sol peruano\",\"format\":null};
var currency_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"currencyCode\":\"PEN\",\"currencySymbol\":\"S\\/\",\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"\\u00a4\\u00a0#,##0.00\",\"negativePattern\":\"-\\u00a4\\u00a0#,##0.00\",\"maxFractionDigits\":2,\"minFractionDigits\":2,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var host_mode = false;
var number_specifications = {\"symbol\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"numberSymbols\":[\".\",\",\",\";\",\"%\",\"-\",\"+\",\"E\",\"\\u00d7\",\"\\u2030\",\"\\u221e\",\"NaN\"],\"positivePattern\":\"#,##0.###\",\"negativePattern\":\"-#,##0.###\",\"maxFractionDigits\":3,\"minFractionDigits\":0,\"groupingUsed\":true,\"primaryGroupSize\":3,\"secondaryGroupSize\":3};
var prestashop = {\"debug\":false};
var show_new_customers = \"1\";
var show_new_messages = \"1\";
var show_new_orders = \"1\";
</script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/new-theme/public/main.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/plugins/jquery.chosen.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/plugins/fancybox/jquery.fancybox.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/admin.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/new-theme/public/cldr.bundle.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/tools.js?v=1.7.8.8\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/modules/blockwishlist/public/vendors.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/vendor/d3.v3.min.js\"></script>
<script type=\"text/javascri";
        // line 81
        echo "pt\" src=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/default/js/vendor/nv.d3.min.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/modules/gamification/views/js/gamification_bt.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/modules/ps_mbo/views/js/recommended-modules.js?v=3.0.1\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/modules/ps_emailalerts/js/admin/ps_emailalerts.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/jquery.ui.core.min.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/jquery.ui.widget.min.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/jquery.ui.mouse.min.js\"></script>
<script type=\"text/javascript\" src=\"/Tienda_Jh_soft_ecommerce/js/jquery/ui/jquery.ui.sortable.min.js\"></script>

  

";
        // line 92
        $this->displayBlock('stylesheets', $context, $blocks);
        $this->displayBlock('extra_stylesheets', $context, $blocks);
        echo "</head>";
        echo "

<body
  class=\"lang-pe adminperformance\"
  data-base-url=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php\"  data-token=\"hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\">

  <header id=\"header\" class=\"d-print-none\">

    <nav id=\"header_infos\" class=\"main-header\">
      <button class=\"btn btn-primary-reverse onclick btn-lg unbind ajax-spinner\"></button>

            <i class=\"material-icons js-mobile-menu\">menu</i>
      <a id=\"header_logo\" class=\"logo float-left\" href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminDashboard&amp;token=ef45755e2f67cba470c7629029c04841\"></a>
      <span id=\"shop_version\">1.7.8.8</span>

      <div class=\"component\" id=\"quick-access-container\">
        <div class=\"dropdown quick-accesses\">
  <button class=\"btn btn-link btn-sm dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\" id=\"quick_select\">
    Acceso rápido
  </button>
  <div class=\"dropdown-menu\">
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminStats&amp;module=statscheckup&amp;token=6bfdf95c0398cd7da0ae7f678af8e2da\"
                 data-item=\"Evaluación del catálogo\"
      >Evaluación del catálogo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/modules/manage?token=e66395fc8c0e6678fdc96298cb5ce74f\"
                 data-item=\"Módulos instalados\"
      >Módulos instalados</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/categories/new?token=e66395fc8c0e6678fdc96298cb5ce74f\"
                 data-item=\"Nueva categoría\"
      >Nueva categoría</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/products/ne";
        // line 126
        echo "w?token=e66395fc8c0e6678fdc96298cb5ce74f\"
                 data-item=\"Nuevo\"
      >Nuevo</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCartRules&amp;addcart_rule&amp;token=9617aa26329c46a72009b41ac7bd69cd\"
                 data-item=\"Nuevo cupón de descuento\"
      >Nuevo cupón de descuento</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminOrders&amp;token=e6e1857adc8b4aff99bdaca48d4414a0\"
                 data-item=\"Pedidos\"
      >Pedidos</a>
          <a class=\"dropdown-item quick-row-link\"
         href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminModules&amp;&amp;configure=tvcmsblog&amp;token=685a80a7f89c876ee25c0c0fa0fbd908\"
                 data-item=\"ThemeVolty Settings\"
      >ThemeVolty Settings</a>
        <div class=\"dropdown-divider\"></div>
          <a id=\"quick-add-link\"
        class=\"dropdown-item js-quick-link\"
        href=\"#\"
        data-rand=\"160\"
        data-icon=\"icon-AdminAdvancedParameters\"
        data-method=\"add\"
        data-url=\"index.php/configure/advanced/performance\"
        data-post-link=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminQuickAccesses&token=1c53c277432733d7982868438b0f39c1\"
        data-prompt-text=\"Por favor, renombre este acceso rápido:\"
        data-link=\"Rendimiento - Lista\"
      >
        <i class=\"material-icons\">add_circle</i>
        Añadir página actual al Acceso Rápido
      </a>
        <a id=\"quick-manage-link\" class=\"dropdown-item\" href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminQuickAccesses&token=1c53c277432733d7982868438b0f39c1\">
      <i class=\"material-icons\">settings</i>
      Administrar accesos rápidos
    </a>
  </div>
</div>
      </div>
      <div class=\"component\" ";
        // line 163
        echo "id=\"header-search-container\">
        <form id=\"header_search\"
      class=\"bo_search_form dropdown-form js-dropdown-form collapsed\"
      method=\"post\"
      action=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminSearch&amp;token=6bee6da592ae30394915ed4f856a5cb7\"
      role=\"search\">
  <input type=\"hidden\" name=\"bo_search_type\" id=\"bo_search_type\" class=\"js-search-type\" />
    <div class=\"input-group\">
    <input type=\"text\" class=\"form-control js-form-search\" id=\"bo_query\" name=\"bo_query\" value=\"\" placeholder=\"Buscar (p. ej.: referencia de producto, nombre de cliente...)\" aria-label=\"Barra de búsqueda\">
    <div class=\"input-group-append\">
      <button type=\"button\" class=\"btn btn-outline-secondary dropdown-toggle js-dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
        toda la tienda
      </button>
      <div class=\"dropdown-menu js-items-list\">
        <a class=\"dropdown-item\" data-item=\"toda la tienda\" href=\"#\" data-value=\"0\" data-placeholder=\"¿Qué estás buscando?\" data-icon=\"icon-search\"><i class=\"material-icons\">search</i> toda la tienda</a>
        <div class=\"dropdown-divider\"></div>
        <a class=\"dropdown-item\" data-item=\"Catálogo\" href=\"#\" data-value=\"1\" data-placeholder=\"Nombre del producto, referencia, etc.\" data-icon=\"icon-book\"><i class=\"material-icons\">store_mall_directory</i> Catálogo</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por nombre\" href=\"#\" data-value=\"2\" data-placeholder=\"Nombre\" data-icon=\"icon-group\"><i class=\"material-icons\">group</i> Clientes por nombre</a>
        <a class=\"dropdown-item\" data-item=\"Clientes por dirección IP\" href=\"#\" data-value=\"6\" data-placeholder=\"123.45.67.89\" data-icon=\"icon-desktop\"><i class=\"material-icons\">desktop_mac</i> Clientes por dirección IP</a>
        <a class=\"dropdown-item\" data-item=\"Pedidos\" href=\"#\" data-value=\"3\" data-placeholder=\"ID del pedido\" data-icon=\"icon-credit-card\"><i class=\"material-icons\">shopping_baske";
        // line 182
        echo "t</i> Pedidos</a>
        <a class=\"dropdown-item\" data-item=\"Facturas\" href=\"#\" data-value=\"4\" data-placeholder=\"Numero de Factura\" data-icon=\"icon-book\"><i class=\"material-icons\">book</i> Facturas</a>
        <a class=\"dropdown-item\" data-item=\"Carritos\" href=\"#\" data-value=\"5\" data-placeholder=\"ID carrito\" data-icon=\"icon-shopping-cart\"><i class=\"material-icons\">shopping_cart</i> Carritos</a>
        <a class=\"dropdown-item\" data-item=\"Módulos\" href=\"#\" data-value=\"7\" data-placeholder=\"Nombre del módulo\" data-icon=\"icon-puzzle-piece\"><i class=\"material-icons\">extension</i> Módulos</a>
      </div>
      <button class=\"btn btn-primary\" type=\"submit\"><span class=\"d-none\">BÚSQUEDA</span><i class=\"material-icons\">search</i></button>
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
      </div>

      
      
              <div class=\"component\" id=\"header-shop-list-container\">
            <div class=\"shop-list\">
    <a class=\"link\" id=\"header_shopname\" href=\"http://localhost/Tienda_Jh_soft_ecommerce/\" target= \"_blank\">
      <i class=\"material-icons\">visibility</i>
      <span>Ver mi tienda</span>
    </a>
  </div>
        </div>
                    <div class=\"component header-right-component\" id=\"header-notifications-container\">
          <div id=\"notif\" class=\"notification-center dropdown dropdown-clickable\">
  <button class=\"btn notification js-notification dropdown-toggle\" data-toggle=\"dropdown\">
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
   ";
        // line 224
        echo "           data-toggle=\"tab\"
              data-type=\"order\"
              href=\"#orders-notifications\"
              role=\"tab\"
            >
              Pedidos<span id=\"_nb_new_orders_\"></span>
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
              Clientes<span id=\"_nb_new_customers_\"></span>
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
              Mensajes<span id=\"_nb_new_messages_\"></span>
            </a>
          </li>
                        </ul>

      <!-- Tab panes -->
      <div class=\"tab-content\">
                          <div class=\"tab-pane active empty\" id=\"orders-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay pedidos nuevos por ahora :(<br>
              ¿Has revisado tus <strong><a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCarts&action=filterOnlyAbandonedCarts&token=705a980c0bcd4e52d8dc234da03b8a35\">carritos abandonados</a></strong>?<br>?. ¡Tu próximo pedido podría estar ocultándose allí!
            </p>
            <div class=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"customers-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay clientes nuevos por ahora :(<br>
              ¿Se mantiene activo en las redes sociales en estos momentos?
            </p>
            <div cl";
        // line 272
        echo "ass=\"notification-elements\"></div>
          </div>
                                    <div class=\"tab-pane  empty\" id=\"messages-notifications\" role=\"tabpanel\">
            <p class=\"no-notification\">
              No hay mensajes nuevo por ahora.<br>
              Parece que todos tus clientes están contentos :)
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
      de <strong>_customer_name_</strong> (_iso_code_)_carrier_
      <strong class=\"float-sm-right\">_total_paid_</strong>
    </a>
  </script>

  <script type=\"text/html\" id=\"customer-notification-template\">
    <a class=\"notif\" href='customer_url'>
      #_id_customer_ - <strong>_customer_name_</strong>_company_ - registrado <strong>_date_add_</strong>
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
    <div class=\"employee-wrapper-avatar\">

      <span class=\"employee-avatar\"><img class=\"avatar rounded-circle\" src=\"http://localhost/Tienda_Jh_soft_ecommerce/img/pr/default.jpg\" /></span>
      <span class=\"employee_profile\">Bienvenido de nuevo, Jhon Alex</span>
      <a class=\"dropdown-item employee-link profile-link\" href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir";
        // line 320
        echo "/index.php/configure/advanced/employees/1/edit?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\">
      <i class=\"material-icons\">edit</i>
      <span>Tu perfil</span>
    </a>
    </div>

    <p class=\"divider\"></p>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/resources/documentations?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=resources-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">book</i> Recursos</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/training?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=training-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">school</i> Formación</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/experts?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=expert-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">person_pin_circle</i> Encontrar un Experto</a>
    <a class=\"dropdown-item\" href=\"https://addons.prestashop.com?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=addons-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">extension</i> Marketplace de PrestaShop</a>
    <a class=\"dropdown-item\" href=\"https://www.prestashop.com/en/contact?utm_source=back-office&amp;utm_medium=profile&amp;utm_campaign=help-center-en&amp;utm_content=download17\" target=\"_blank\" rel=\"noreferrer\"><i class=\"material-icons\">help</i> Centro de ayuda</a>
    <p class=\"divider\"></p>
    <a class=\"dropdown-item employee-link text-center\" id=\"header_logout\" href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminLogin&amp;logout=1&amp;token=c38f91827c561665073b209a86847864\">
      <i class=\"material-icons d-lg-none\">power_settings_new</i>
      <span>Cerrar sesión</span>
    </a>
  </div>
</div>
      </div>
          </nav>
  </header>

  <nav";
        // line 343
        echo " class=\"nav-bar d-none d-print-none d-md-block\">
  <span class=\"menu-collapse\" data-toggle-url=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/employees/toggle-navigation?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\">
    <i class=\"material-icons\">chevron_left</i>
    <i class=\"material-icons\">chevron_left</i>
  </span>

  <div class=\"nav-bar-overflow\">
      <ul class=\"main-menu\">
              
                    
                    
          
            <li class=\"link-levelone\" data-submenu=\"1\" id=\"tab-AdminDashboard\">
              <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminDashboard&amp;token=ef45755e2f67cba470c7629029c04841\" class=\"link\" >
                <i class=\"material-icons\">trending_up</i> <span>Inicio</span>
              </a>
            </li>

          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"2\" id=\"tab-SELL\">
                <span class=\"title\">Vender</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"3\" id=\"subtab-AdminParentOrders\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/orders/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-shopping_basket\">shopping_basket</i>
                      <span>
                      Pedidos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                       ";
        // line 384
        echo "       <ul id=\"collapse-3\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"4\" id=\"subtab-AdminOrders\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/orders/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"5\" id=\"subtab-AdminInvoices\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/orders/invoices/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Facturas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"6\" id=\"subtab-AdminSlip\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/orders/credit-slips/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Facturas por abono
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"7\" id=\"subtab-AdminDeliverySlip\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2";
        // line 413
        echo "sir/index.php/sell/orders/delivery-slips/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Albaranes de entrega
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"8\" id=\"subtab-AdminCarts\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCarts&amp;token=705a980c0bcd4e52d8dc234da03b8a35\" class=\"link\"> Carros de compra
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"9\" id=\"subtab-AdminCatalog\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/products?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-store\">store</i>
                      <span>
                      Catálogo
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-9\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
          ";
        // line 445
        echo "                    <li class=\"link-leveltwo\" data-submenu=\"10\" id=\"subtab-AdminProducts\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/products?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"11\" id=\"subtab-AdminCategories\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/categories?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Categorías
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"12\" id=\"subtab-AdminTracking\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/monitoring/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Monitorización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"13\" id=\"subtab-AdminParentAttributesGroups\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminAttributesGroups&amp;token=4a0950ab5434c0616595a41a936a73da\" class=\"link\"> Atributos y Características
                                ";
        // line 471
        echo "</a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"16\" id=\"subtab-AdminParentManufacturers\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/catalog/brands/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Marcas y Proveedores
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"19\" id=\"subtab-AdminAttachments\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/attachments/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Archivos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"20\" id=\"subtab-AdminParentCartRules\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCartRules&amp;token=9617aa26329c46a72009b41ac7bd69cd\" class=\"link\"> Descuentos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"23\" id=\"subtab-AdminStockManagement\">
                ";
        // line 502
        echo "                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/stocks/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Stock
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"24\" id=\"subtab-AdminParentCustomer\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/customers/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-account_circle\">account_circle</i>
                      <span>
                      Clientes
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-24\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"25\" id=\"subtab-AdminCustomers\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/customers/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Clientes
                                </a>
                              </li>

                                                                                  
                              
                                    ";
        // line 533
        echo "                        
                              <li class=\"link-leveltwo\" data-submenu=\"26\" id=\"subtab-AdminAddresses\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/addresses/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Direcciones
                                </a>
                              </li>

                                                                                                                                    </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"28\" id=\"subtab-AdminParentCustomerThreads\">
                    <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCustomerThreads&amp;token=469b4886bb8da8b9fcb176dfc2bdb21c\" class=\"link\">
                      <i class=\"material-icons mi-chat\">chat</i>
                      <span>
                      Atención al cliente
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-28\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"29\" id=\"subtab-AdminCustomerThreads\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCustomerThreads&amp;token=469b4886bb8da8b9fcb176";
        // line 560
        echo "dfc2bdb21c\" class=\"link\"> Atención al cliente
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"30\" id=\"subtab-AdminOrderMessage\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/sell/customer-service/order-messages/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Mensajes de orden
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"31\" id=\"subtab-AdminReturn\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminReturn&amp;token=6bdb140371e864995caff3cbf3f3123d\" class=\"link\"> Devoluciones de mercancía
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"32\" id=\"subtab-AdminStats\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/metrics/legacy/stats?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-assessment\">assessment</i>
                      <span>
                      Estadísticas
                      </span>
                                ";
        // line 592
        echo "                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-32\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"143\" id=\"subtab-AdminMetricsLegacyStatsController\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/metrics/legacy/stats?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Estadísticas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"144\" id=\"subtab-AdminMetricsController\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/metrics?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> PrestaShop Metrics
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title\" data-submenu=\"42\" id=\"tab-IMPROVE\">
                <span class=\"title\">Personalizar</span>
            </li>

                              
                  
                                                      
               ";
        // line 628
        echo "   
                  <li class=\"link-levelone has_submenu\" data-submenu=\"43\" id=\"subtab-AdminParentModulesSf\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/addons/modules/catalog?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-extension\">extension</i>
                      <span>
                      Módulos
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-43\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"48\" id=\"subtab-AdminParentModulesCatalog\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/addons/modules/catalog?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Marketplace
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"44\" id=\"subtab-AdminModulesSf\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/modules/manage?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Gestor de módulo
                                </a>
                              </li>

                                                                  ";
        // line 656
        echo "                                                                                                                        </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"52\" id=\"subtab-AdminParentThemes\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/addons/themes/catalog?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-desktop_mac\">desktop_mac</i>
                      <span>
                      Diseño
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-52\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"140\" id=\"subtab-AdminPsMboTheme\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/addons/themes/catalog?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Catálogo de Temas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"130\" id=\"subtab-AdminThemesParent\">
                               ";
        // line 685
        echo " <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/design/themes/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Tema y logotipo
                                </a>
                              </li>

                                                                                                                                        
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"55\" id=\"subtab-AdminParentMailTheme\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/design/mail_theme/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Tema Email
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"57\" id=\"subtab-AdminCmsContent\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/design/cms-pages/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Páginas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"58\" id=\"subtab-AdminModulesPositions\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/design/modules/positions/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Posiciones
                                </a>
                              </li>

                                               ";
        // line 713
        echo "                                   
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"59\" id=\"subtab-AdminImages\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminImages&amp;token=da8f09c78608ed7a4fb989f404c88aad\" class=\"link\"> Ajustes de imágenes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"129\" id=\"subtab-AdminLinkWidget\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/link-widget/list?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Lista de enlaces
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"60\" id=\"subtab-AdminParentShipping\">
                    <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCarriers&amp;token=a5c86def248aa1cda646be7a2539f799\" class=\"link\">
                      <i class=\"material-icons mi-local_shipping\">local_shipping</i>
                      <span>
                      Transporte
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                     ";
        // line 743
        echo "                                       </i>
                                            </a>
                                              <ul id=\"collapse-60\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"61\" id=\"subtab-AdminCarriers\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminCarriers&amp;token=a5c86def248aa1cda646be7a2539f799\" class=\"link\"> Transportistas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"62\" id=\"subtab-AdminShipping\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/shipping/preferences/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"63\" id=\"subtab-AdminParentPayment\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/payment/payment_methods?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-payment\">payment</i>
                      <span>
                      Pago
                      </span>
                  ";
        // line 774
        echo "                                  <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-63\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"64\" id=\"subtab-AdminPayment\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/payment/payment_methods?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Métodos de pago
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"65\" id=\"subtab-AdminPaymentPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/payment/preferences?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Preferencias
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"66\" id=\"subtab-AdminInternational\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/international/localization/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_";
        // line 802
        echo "UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-language\">language</i>
                      <span>
                      Internacional
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-66\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"67\" id=\"subtab-AdminParentLocalization\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/international/localization/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Localización
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"72\" id=\"subtab-AdminParentCountries\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/international/zones/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Ubicaciones Geográficas
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"76\" id=\"subtab-AdminParentTaxes\">
                           ";
        // line 832
        echo "     <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/international/taxes/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Impuestos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"79\" id=\"subtab-AdminTranslations\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/improve/international/translations/settings?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Traducciones
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"145\" id=\"subtab-Marketing\">
                    <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminPsfacebookModule&amp;token=584b4fd59fdac2fad58af48801e63bbb\" class=\"link\">
                      <i class=\"material-icons mi-campaign\">campaign</i>
                      <span>
                      Márketing
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-145\" class=\"submenu panel-collapse\">
                                                      
                ";
        // line 862
        echo "              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"146\" id=\"subtab-AdminPsfacebookModule\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminPsfacebookModule&amp;token=584b4fd59fdac2fad58af48801e63bbb\" class=\"link\"> Facebook &amp; Instagram
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"148\" id=\"subtab-AdminPsxMktgWithGoogleModule\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminPsxMktgWithGoogleModule&amp;token=897f5dbd6fc522ddfbe8e3926b3dc733\" class=\"link\"> Google
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"154\" id=\"subtab-Adminxprtdashboard\">
                    <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=Admintvcmspost&amp;token=d9d2ffefeae4de4e3023d0d830624dca\" class=\"link\">
                      <i class=\"material-icons mi-\"></i>
                      <span>
                      ThemeVolty Blog
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                            ";
        // line 891
        echo "                </i>
                                            </a>
                                              <ul id=\"collapse-154\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"155\" id=\"subtab-Admintvcmspost\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=Admintvcmspost&amp;token=d9d2ffefeae4de4e3023d0d830624dca\" class=\"link\"> Blog Posts
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"156\" id=\"subtab-Admintvcmscategory\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=Admintvcmscategory&amp;token=1687f0e83def29518c4f4eacde741f16\" class=\"link\"> Blog Categories
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"157\" id=\"subtab-Admintvcmscomment\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=Admintvcmscomment&amp;token=146f54e36403b164f1e286fdf86cc17d\" class=\"link\"> Blog Comments
                                </a>
                              </li>

                                                                                  
                              
                                                         ";
        // line 920
        echo "   
                              <li class=\"link-leveltwo\" data-submenu=\"158\" id=\"subtab-Admintvcmsimagetype\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=Admintvcmsimagetype&amp;token=1609427b1ce56028f176a4519410b849\" class=\"link\"> Blog Image Type
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                      
                                          
                    
          
            <li class=\"category-title link-active\" data-submenu=\"80\" id=\"tab-CONFIGURE\">
                <span class=\"title\">Configurar</span>
            </li>

                              
                  
                                                      
                  
                  <li class=\"link-levelone has_submenu\" data-submenu=\"81\" id=\"subtab-ShopParameters\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/preferences/preferences?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-settings\">settings</i>
                      <span>
                      Parámetros de la tienda
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_down
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-81\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li cla";
        // line 956
        echo "ss=\"link-leveltwo\" data-submenu=\"82\" id=\"subtab-AdminParentPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/preferences/preferences?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> General
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"85\" id=\"subtab-AdminParentOrderPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/order-preferences/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Configuración de Pedidos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"88\" id=\"subtab-AdminPPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/product-preferences/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Configuración de Productos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"89\" id=\"subtab-AdminParentCustomerPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/customer-preferences/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Aj";
        // line 981
        echo "ustes sobre clientes
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"93\" id=\"subtab-AdminParentStores\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/contacts/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Contacto
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"96\" id=\"subtab-AdminParentMeta\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/shop/seo-urls/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Tráfico &amp; SEO
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"100\" id=\"subtab-AdminParentSearchConf\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminSearchConf&amp;token=45d7accfcc25618a7316ed4ca995b89d\" class=\"link\"> Buscar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"1";
        // line 1012
        echo "34\" id=\"subtab-AdminGamification\">
                                <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminGamification&amp;token=21db7638e768440061213a52f02145aa\" class=\"link\"> Merchant Expertise
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                                              
                  
                                                      
                                                          
                  <li class=\"link-levelone has_submenu link-active open ul-open\" data-submenu=\"103\" id=\"subtab-AdminAdvancedParameters\">
                    <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/system-information/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\">
                      <i class=\"material-icons mi-settings_applications\">settings_applications</i>
                      <span>
                      Parámetros Avanzados
                      </span>
                                                    <i class=\"material-icons sub-tabs-arrow\">
                                                                    keyboard_arrow_up
                                                            </i>
                                            </a>
                                              <ul id=\"collapse-103\" class=\"submenu panel-collapse\">
                                                      
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"104\" id=\"subtab-AdminInformation\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/system-information/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> ";
        // line 1038
        echo "Información
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo link-active\" data-submenu=\"105\" id=\"subtab-AdminPerformance\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/performance/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Rendimiento
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"106\" id=\"subtab-AdminAdminPreferences\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/administration/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Administración
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"107\" id=\"subtab-AdminEmails\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/emails/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Dirección de correo electrónico
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li ";
        // line 1069
        echo "class=\"link-leveltwo\" data-submenu=\"108\" id=\"subtab-AdminImport\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/import/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Importar
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"109\" id=\"subtab-AdminParentEmployees\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/employees/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Equipo
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"113\" id=\"subtab-AdminParentRequestSql\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/sql-requests/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Base de datos
                                </a>
                              </li>

                                                                                  
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"116\" id=\"subtab-AdminLogs\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/logs/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Registros
                                </a>
                              </li>

         ";
        // line 1098
        echo "                                                                         
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"117\" id=\"subtab-AdminWebservice\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/webservice-keys/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Webservice
                                </a>
                              </li>

                                                                                                                                                                                              
                              
                                                            
                              <li class=\"link-leveltwo\" data-submenu=\"120\" id=\"subtab-AdminFeatureFlag\">
                                <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/feature-flags/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" class=\"link\"> Características experimentales
                                </a>
                              </li>

                                                                              </ul>
                                        </li>
                              
          
                  </ul>
  </div>
  <div class=\"onboarding-navbar bootstrap\">
  <div class=\"row text\">
    <div class=\"col-md-8\">
      ¡Lanza tu tienda!
    </div>
    <div class=\"col-md-4 text-right text-md-right\">0%</div>
  </div>
  <div class=\"progress\">
    <div class=\"bar\" role=\"progressbar\" style=\"width:0%;\"></div>
  </div>
  <div>
    <button class=\"btn btn-main btn-sm onboarding-button-resume\">Resumen</button>
  </div>
  <div>
    <a class=\"btn -small btn-main btn-sm onboarding-button-stop\">Detener módulo Primeros pasos</a>
  </div>
</div>

</nav>


<div class=\"header-toolbar ";
        // line 1141
        echo "d-print-none\">
    
  <div class=\"container-fluid\">

    
      <nav aria-label=\"Breadcrumb\">
        <ol class=\"breadcrumb\">
                      <li class=\"breadcrumb-item\">Parámetros Avanzados</li>
          
                      <li class=\"breadcrumb-item active\">
              <a href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/performance/?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\" aria-current=\"page\">Rendimiento</a>
            </li>
                  </ol>
      </nav>
    

    <div class=\"title-row\">
      
          <h1 class=\"title\">
            Rendimiento          </h1>
      

      
        <div class=\"toolbar-icons\">
          <div class=\"wrapper\">
            
                                                          <a
                  class=\"btn btn-primary pointer\"                  id=\"page-header-desc-configuration-clear_cache\"
                  href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/performance/clear-cache?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\"                  title=\"Borrar la caché\"                >
                  <i class=\"material-icons\">delete</i>                  Borrar la caché
                </a>
                                      
            
                              <a class=\"btn btn-outline-secondary btn-help btn-sidebar\" href=\"#\"
                   title=\"Ayuda\"
                   data-toggle=\"sidebar\"
                   data-target=\"#right-sidebar\"
                   data-url=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpe%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Dpe/Ayuda?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\"
                   id=\"product_form_open_help\"
                >
                  Ayuda
                </a>
                                    </div>
        </div>

      
    </div>
  </div>

 ";
        // line 1190
        echo " 
  
  <div class=\"btn-floating\">
    <button class=\"btn btn-primary collapsed\" data-toggle=\"collapse\" data-target=\".btn-floating-container\" aria-expanded=\"false\">
      <i class=\"material-icons\">add</i>
    </button>
    <div class=\"btn-floating-container collapse\">
      <div class=\"btn-floating-menu\">
        
                              <a
              class=\"btn btn-floating-item  pointer\"              id=\"page-header-desc-floating-configuration-clear_cache\"
              href=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/configure/advanced/performance/clear-cache?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\"              title=\"Borrar la caché\"            >
              Borrar la caché
              <i class=\"material-icons\">delete</i>            </a>
                  
                              <a class=\"btn btn-floating-item btn-help btn-sidebar\" href=\"#\"
               title=\"Ayuda\"
               data-toggle=\"sidebar\"
               data-target=\"#right-sidebar\"
               data-url=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/common/sidebar/https%253A%252F%252Fhelp.prestashop.com%252Fpe%252Fdoc%252FAdminAdvancedParametersPerformance%253Fversion%253D1.7.8.8%2526country%253Dpe/Ayuda?_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU\"
            >
              Ayuda
            </a>
                        </div>
    </div>
  </div>
  <script>
  if (undefined !== mbo) {
    mbo.initialize({
      translations: {
        'Recommended Modules and Services': 'Recommended modules',
        'description': \"Here\\'s a selection of modules,<\\strong> compatible with your store<\\/strong>, to help you achieve your goals\",
        'Close': 'Cerrar',
      },
      recommendedModulesUrl: '/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php/modules/addons/modules/recommended?tabClassName=AdminPerformance&_token=hJan5GLMKSbUKrE6E6iPgH9U1_IPkWxrij0a_UyiUZU',
      shouldAttachRecommendedModulesAfterContent: 0,
      shouldAttachRecommendedMod";
        // line 1226
        echo "ulesButton: 0,
      shouldUseLegacyTheme: 0,
    });
  }
</script>

</div>

<div id=\"main-div\">
          
      <div class=\"content-div  \">

        

                                                        
        <div class=\"row \">
          <div class=\"col-sm-12\">
            <div id=\"ajax_confirmation\" class=\"alert alert-success\" style=\"display: none;\"></div>


  ";
        // line 1246
        $this->displayBlock('content_header', $context, $blocks);
        $this->displayBlock('content', $context, $blocks);
        $this->displayBlock('content_footer', $context, $blocks);
        $this->displayBlock('sidebar_right', $context, $blocks);
        echo "

            
          </div>
        </div>

      </div>
    </div>

  <div id=\"non-responsive\" class=\"js-non-responsive\">
  <h1>¡Oh no!</h1>
  <p class=\"mt-3\">
    La versión para móviles de esta página no está disponible todavía.
  </p>
  <p class=\"mt-2\">
    Por favor, utiliza un ordenador de escritorio hasta que esta página sea adaptada para dispositivos móviles.
  </p>
  <p class=\"mt-2\">
    Gracias.
  </p>
  <a href=\"http://localhost/Tienda_Jh_soft_ecommerce/admin969ku2sir/index.php?controller=AdminDashboard&amp;token=ef45755e2f67cba470c7629029c04841\" class=\"btn btn-primary py-1 mt-3\">
    <i class=\"material-icons\">arrow_back</i>
    Atrás
  </a>
</div>
  <div class=\"mobile-layer\"></div>

      <div id=\"footer\" class=\"bootstrap\">
    
</div>
  

      <div class=\"bootstrap\">
      <div class=\"modal fade\" id=\"modal_addons_connect\" tabindex=\"-1\">
\t<div class=\"modal-dialog modal-md\">
\t\t<div class=\"modal-content\">
\t\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
\t\t\t\t<h4 class=\"modal-title\"><i class=\"icon-puzzle-piece\"></i> <a target=\"_blank\" href=\"https://addons.prestashop.com/?utm_source=back-office&utm_medium=modules&utm_campaign=back-office-PE&utm_content=download\">PrestaShop Addons</a></h4>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"modal-body\">
\t\t\t\t\t\t<!--start addons login-->
\t\t\t<form id=\"addons_login_form\" method=\"post\" >
\t\t\t\t<div>
\t\t\t\t\t<a href=\"https://addons.prestashop.com/pe/login?email=jhon%40gmail.com&amp;firstname=Jhon+Alex&amp;lastname=Villa+Flores&amp;website=http%3A%2F%2Flocalhost%2FTienda_Jh_soft_ecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PE&amp;utm_content=download#createnow\"><img class=\"img-responsive center-block\" src=\"/Tienda_Jh_soft_ecommerce/admin969ku2sir/themes/default/img/prestashop-addons-logo.png\" alt=\"Logo PrestaShop Addons\"/></a>
\t\t\t\t\t<h3 class=\"text-center\">Conecta tu tienda con el mercado de PrestaShop para importar";
        // line 1292
        echo " automáticamente todas tus compras de Addons.</h3>
\t\t\t\t\t<hr />
\t\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>¿No tiene una cuenta?</h4>
\t\t\t\t\t\t<p class='text-justify'>¡Descubre el poder de PrestaShop Addons! Explora el Marketplace oficial de PrestaShop y encuentra más de 3.500 módulos y temas innovadores que optimizan las tasas de conversión, aumentan el tráfico, fidelizan a los clientes y maximizan tu productividad</p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<h4>Conectarme a PrestaShop Addons</h4>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-user\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"username_addons\" name=\"username_addons\" type=\"text\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<div class=\"input-group-prepend\">
\t\t\t\t\t\t\t\t\t<span class=\"input-group-text\"><i class=\"icon-key\"></i></span>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<input id=\"password_addons\" name=\"password_addons\" type=\"password\" value=\"\" autocomplete=\"off\" class=\"form-control ac_input\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a class=\"btn btn-link float-right _blank\" href=\"//addons.prestashop.com/pe/forgot-your-password\">Olvidé mi contraseña</a>
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div class=\"row row-padding-top\">
\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<a class=\"btn btn-default btn-block btn-lg _blank\" href=\"https://addons.prestashop.com/pe/login?email=jhon%40gmail.com&amp;firstname=Jhon+Alex&amp;lastname=Villa+Flores&amp;website=http%3A%2F%2Flocalhost%2FTienda_Jh_soft_ecommerce%2F&amp;utm_source=back-office&amp;utm_medium=connect-to-addons&amp;utm_campaign=back-office-PE&amp;utm_content=download#createnow\">
\t\t\t\t\t\t\t\tCrear una cuenta
\t\t\t\t\t\t\t\t<i class=\"icon-external-link\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div clas";
        // line 1332
        echo "s=\"col-md-6\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<button id=\"addons_login_button\" class=\"btn btn-primary btn-block btn-lg\" type=\"submit\">
\t\t\t\t\t\t\t\t<i class=\"icon-unlock\"></i> Iniciar sesión
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t\t<div id=\"addons_loading\" class=\"help-block\"></div>

\t\t\t</form>
\t\t\t<!--end addons login-->
\t\t\t</div>


\t\t\t\t\t</div>
\t</div>
</div>

    </div>
  
";
        // line 1354
        $this->displayBlock('javascripts', $context, $blocks);
        $this->displayBlock('extra_javascripts', $context, $blocks);
        $this->displayBlock('translate_javascripts', $context, $blocks);
        echo "</body>";
        echo "
</html>";
    }

    // line 92
    public function block_stylesheets($context, array $blocks = [])
    {
    }

    public function block_extra_stylesheets($context, array $blocks = [])
    {
    }

    // line 1246
    public function block_content_header($context, array $blocks = [])
    {
    }

    public function block_content($context, array $blocks = [])
    {
    }

    public function block_content_footer($context, array $blocks = [])
    {
    }

    public function block_sidebar_right($context, array $blocks = [])
    {
    }

    // line 1354
    public function block_javascripts($context, array $blocks = [])
    {
    }

    public function block_extra_javascripts($context, array $blocks = [])
    {
    }

    public function block_translate_javascripts($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "__string_template__25d9110a26066316f0044f9ec9b0a0013d64cf55b5e06d6274dcf4f3b6d17590";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1520 => 1354,  1503 => 1246,  1494 => 92,  1485 => 1354,  1461 => 1332,  1419 => 1292,  1367 => 1246,  1345 => 1226,  1307 => 1190,  1256 => 1141,  1211 => 1098,  1180 => 1069,  1147 => 1038,  1119 => 1012,  1086 => 981,  1059 => 956,  1021 => 920,  990 => 891,  959 => 862,  927 => 832,  895 => 802,  865 => 774,  832 => 743,  800 => 713,  770 => 685,  739 => 656,  709 => 628,  671 => 592,  637 => 560,  608 => 533,  575 => 502,  542 => 471,  514 => 445,  480 => 413,  449 => 384,  406 => 343,  381 => 320,  331 => 272,  281 => 224,  237 => 182,  216 => 163,  177 => 126,  138 => 92,  125 => 81,  105 => 63,  82 => 42,  39 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__25d9110a26066316f0044f9ec9b0a0013d64cf55b5e06d6274dcf4f3b6d17590", "");
    }
}
