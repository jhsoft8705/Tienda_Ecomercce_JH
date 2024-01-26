<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'module:pscontactinfonav.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b306844ce9b6_90676184',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0eb2119957cbc13b240126b3ccd8fac8f109f1e2' => 
    array (
      0 => 'module:pscontactinfonav.tpl',
      1 => 1705965268,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b306844ce9b6_90676184 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="_desktop_contact_link" class=""><div id="contact-link"><a href="tel:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['contact_infos']->value['phone'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['contact_infos']->value['phone']) {?><i class='material-icons'>&#xe0b0;</i><span class="tvcall-on"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Call On','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
&nbsp;</span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'[1]%phone%[/1]','sprintf'=>array('[1]'=>'<span class="tvcms_contact_info">','[/1]'=>'</span>','%phone%'=>$_smarty_tpl->tpl_vars['contact_infos']->value['phone']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );
}?></a></div></div><?php }
}
