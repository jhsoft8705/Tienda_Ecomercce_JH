<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\tvcms-main-title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683e1b508_63718244',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e45a5854bf2f59f9af6ea4e3fa47529abe2b9dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\tvcms-main-title.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30683e1b508_63718244 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcmsmain-title-wrapper clearfix'><div class="tvcms-main-title"><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_sub_title']) {?><div class='tvmain-sub-title'><h4><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['short_desc'], ENT_QUOTES, 'UTF-8');?>
</h4></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_title']) {?><div class='tvmain-title'><h2><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>
</h2></div><?php }
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_description']) {?><div class='tvmain-desc'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['desc'], ENT_QUOTES, 'UTF-8');?>
</div><?php }?></div></div><?php }
}
}
