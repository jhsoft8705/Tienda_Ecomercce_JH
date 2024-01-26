<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\tvcms-page-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b306842b5b56_83374141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '05d6935fde63a080115161e6f48c37fb5b01a1c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\tvcms-page-loader.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b306842b5b56_83374141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (Configuration::get('TVCMSCUSTOMSETTING_PAGE_LOADER')) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140282444765b306842b43b2_38394488', 'page_loading');
}
}
/* {block 'page_loading'} */
class Block_140282444765b306842b43b2_38394488 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_loading' => 
  array (
    0 => 'Block_140282444765b306842b43b2_38394488',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvcms-loading-overlay"><div class="tvcms-loading-inner"><img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"  height="51" width="205"/><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['img_url'], ENT_QUOTES, 'UTF-8');?>
themevolty/tv_loading.gif" alt="" height="101" width="114"/></div></div><?php
}
}
/* {/block 'page_loading'} */
}
