<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683f19b66_80173520',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e321bcefe18733d91c04ebf9d1dcc9c2d4741805' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\head.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/microdata/head-jsonld.tpl' => 1,
    'file:_partials/pagination-seo.tpl' => 1,
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_65b30683f19b66_80173520 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_107533391065b30683effd07_92021811', 'head_charset');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_127319940465b30683f004f7_50708846', 'head_ie_compatibility');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_75121153965b30683f00ac8_88603200', 'head_seo');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134890931565b30683f10849_69524906', 'head_viewport');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182372675265b30683f110f0_93462801', 'head_icons');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18920227465b30683f12f82_69993473', 'stylesheets');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66064159065b30683f14077_88800402', 'javascript_head');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_46851897465b30683f15518_19048802', 'hook_header');
?>
<link rel="dns-prefetch" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" /><link rel="preconnect" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['shop_domain_url'], ENT_QUOTES, 'UTF-8');?>
" crossorigin/><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
570eb83859dc23dd0eec423a49e147fe.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
../fonts/roboto/KFOlCnqEu92Fr1MmYUtfBBc4.woff2" as="font" type="font/woff2" crossorigin /><link rel="preload" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
../fonts/roboto-condensed/ieVl2ZhZI2eCN5jzbjEETS9weq8-19K7DQ.woff2" as="font" type="font/woff2" crossorigin media='(min-width: 992px)' /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
material-fonts.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
roboto.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
Els-messiri.css" /><link as="style" rel="stylesheet preload" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
roboto-condensed.css" media='(min-width: 992px)' /><?php if ($_smarty_tpl->tpl_vars['ArabicFontStatus']->value) {?><link type="text/css" rel="stylesheet" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
iran-yekan.css" media="all"><style type="text/css">body.lang-rtl, body.lang-rtl p, body.lang-rtl h1, body.lang-rtl h2, body.lang-rtl h3, body.lang-rtl h4, body.lang-rtl h5, body.lang-rtl h6, body.lang-rtl span, body.lang-rtl div {font-family: 'iran-yekan' !important;}</style><?php }
if (Configuration::get('TVCMSCUSTOMSETTING_DARK_MODE_INPUT')) {?><link rel="stylesheet" class="dark-theme-css-r" type="text/css" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['css_url'], ENT_QUOTES, 'UTF-8');?>
dark-theme.css"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28039770565b30683f191a1_09704531', 'hook_extra');
}
/* {block 'head_charset'} */
class Block_107533391065b30683effd07_92021811 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_107533391065b30683effd07_92021811',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta charset="utf-8"><?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_127319940465b30683f004f7_50708846 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_127319940465b30683f004f7_50708846',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta http-equiv="x-ua-compatible" content="ie=edge"><?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_microdata'} */
class Block_5957068165b30683f00da9_33973545 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/microdata/head-jsonld.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_microdata'} */
/* {block 'head_microdata_special'} */
class Block_35324262465b30683f017c4_03147876 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'head_microdata_special'} */
/* {block 'head_pagination_seo'} */
class Block_29545576065b30683f01c52_24892259 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/pagination-seo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
/* {/block 'head_pagination_seo'} */
/* {block 'head_seo_title'} */
class Block_113290171765b30683f02509_86579463 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'hook_after_title_tag'} */
class Block_27423698765b30683f032b2_53695027 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterTitleTag'),$_smarty_tpl ) );
}
}
/* {/block 'hook_after_title_tag'} */
/* {block 'head_seo_description'} */
class Block_66611551865b30683f03d24_76324106 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_58290491665b30683f045e9_30330996 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_hreflang'} */
class Block_137003995565b30683f06330_06920348 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
$_smarty_tpl->tpl_vars['pageUrl']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
$_smarty_tpl->tpl_vars['pageUrl']->do_else = false;
?><link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
"><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_open_graph'} */
class Block_212011258065b30683f07db9_56972839 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
" /><meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" /><?php if (!(isset($_smarty_tpl->tpl_vars['product']->value)) && $_smarty_tpl->tpl_vars['page']->value['page_name'] != 'product') {?><meta property="og:type" content="website" /><?php }
}
}
/* {/block 'head_open_graph'} */
/* {block 'head_seo'} */
class Block_75121153965b30683f00ac8_88603200 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_75121153965b30683f00ac8_88603200',
  ),
  'head_microdata' => 
  array (
    0 => 'Block_5957068165b30683f00da9_33973545',
  ),
  'head_microdata_special' => 
  array (
    0 => 'Block_35324262465b30683f017c4_03147876',
  ),
  'head_pagination_seo' => 
  array (
    0 => 'Block_29545576065b30683f01c52_24892259',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_113290171765b30683f02509_86579463',
  ),
  'hook_after_title_tag' => 
  array (
    0 => 'Block_27423698765b30683f032b2_53695027',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_66611551865b30683f03d24_76324106',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_58290491665b30683f045e9_30330996',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_137003995565b30683f06330_06920348',
  ),
  'head_open_graph' => 
  array (
    0 => 'Block_212011258065b30683f07db9_56972839',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5957068165b30683f00da9_33973545', 'head_microdata', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_35324262465b30683f017c4_03147876', 'head_microdata_special', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29545576065b30683f01c52_24892259', 'head_pagination_seo', $this->tplIndex);
?>
<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_113290171765b30683f02509_86579463', 'head_seo_title', $this->tplIndex);
?>
</title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27423698765b30683f032b2_53695027', 'hook_after_title_tag', $this->tplIndex);
?>
<meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66611551865b30683f03d24_76324106', 'head_seo_description', $this->tplIndex);
?>
"><meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_58290491665b30683f045e9_30330996', 'head_seo_keywords', $this->tplIndex);
?>
"><?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?><meta name="AdsBot-Google" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
"><?php }
if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?><link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
"><?php }
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137003995565b30683f06330_06920348', 'head_hreflang', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212011258065b30683f07db9_56972839', 'head_open_graph', $this->tplIndex);
}
}
/* {/block 'head_seo'} */
/* {block 'head_viewport'} */
class Block_134890931565b30683f10849_69524906 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_134890931565b30683f10849_69524906',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<meta name="viewport" content="width=device-width, initial-scale=1"><?php
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_182372675265b30683f110f0_93462801 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_182372675265b30683f110f0_93462801',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
"><?php
}
}
/* {/block 'head_icons'} */
/* {block 'stylesheets'} */
class Block_18920227465b30683f12f82_69993473 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_18920227465b30683f12f82_69993473',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_66064159065b30683f14077_88800402 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_66064159065b30683f14077_88800402',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_46851897465b30683f15518_19048802 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_46851897465b30683f15518_19048802',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_28039770565b30683f191a1_09704531 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_28039770565b30683f191a1_09704531',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
