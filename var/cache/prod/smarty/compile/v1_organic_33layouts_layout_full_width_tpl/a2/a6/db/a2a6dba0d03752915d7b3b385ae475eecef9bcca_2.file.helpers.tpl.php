<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683ee5bd7_26621646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2a6dba0d03752915d7b3b385ae475eecef9bcca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\helpers.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30683ee5bd7_26621646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\var\\cache\\prod\\smarty\\compile\\v1_organic_33layouts_layout_full_width_tpl\\a2\\a6\\db\\a2a6dba0d03752915d7b3b385ae475eecef9bcca_2.file.helpers.tpl.php',
    'uid' => 'a2a6dba0d03752915d7b3b385ae475eecef9bcca',
    'call_name' => 'smarty_template_function_renderLogo_213425090265b30683edde18_52872313',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_213425090265b30683edde18_52872313 */
if (!function_exists('smarty_template_function_renderLogo_213425090265b30683edde18_52872313')) {
function smarty_template_function_renderLogo_213425090265b30683edde18_52872313(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_213425090265b30683edde18_52872313 */
}
