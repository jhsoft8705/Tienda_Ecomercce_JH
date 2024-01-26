<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmswishlist\views\templates\front\my-account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b306846c18a5_86312330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4aa74907572edb55522ad4e5ee9ad73dea12e634' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmswishlist\\views\\templates\\front\\my-account.tpl',
      1 => 1705965267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b306846c18a5_86312330 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="item"><a class="link_compare " href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmswishlist','mywishlist',array(),true),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My wishlists','mod'=>'tvcmswishlist'),$_smarty_tpl ) );?>
</a></li><?php }
}
