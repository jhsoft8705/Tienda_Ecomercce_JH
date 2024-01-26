<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmsproductcompare\views\templates\front\display_right_sticky.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30684835567_64552220',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb329c30cc47fb8af28b8f9cc2bfcbd6d4f89da5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmsproductcompare\\views\\templates\\front\\display_right_sticky.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30684835567_64552220 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="tvsticky-compare">
  	<a class="link_wishlist tvcmscount-compare-product" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('tvcmsproductcompare','productcomparelist'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product Compare','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
">
    	<i class='material-icons'>&#xE043;</i>
      	<div class="tvsticky-compare-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Compare ','mod'=>'tvcmsproductcompare'),$_smarty_tpl ) );?>
(<span class="count-product"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tot_comp_prod']->value, ENT_QUOTES, 'UTF-8');?>
</span>)</div>
  	</a>
</div>
<?php }
}
