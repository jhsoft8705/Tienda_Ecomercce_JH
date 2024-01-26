<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\tvcms-javascript-files.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30684076fa2_68545666',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb97ec678f41b11269cd31ca90a643e19f9c21d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\tvcms-javascript-files.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30684076fa2_68545666 (Smarty_Internal_Template $_smarty_tpl) {
if (Configuration::get('TVCMSFRONTSIDE_THEME_SETTING_SHOW')) {?><!-- START THEME_CONTROL --><div class="tvcms-custom-theme"></div><!-- END THEME_CONTROL --><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_OPTION')) {
if (Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_ALL_THEME_CSS_PATH'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2')) {?><link rel="stylesheet" type="text/css" href="<?php echo htmlspecialchars(Configuration::get('TVCMSCUSTOMSETTING_THEME_FONT_TYPE_LINK_2'), ENT_QUOTES, 'UTF-8');?>
"></link><?php }?><!-- END THEME_CONTROL CUSTOM COLOR CSS --><?php }
}
}
