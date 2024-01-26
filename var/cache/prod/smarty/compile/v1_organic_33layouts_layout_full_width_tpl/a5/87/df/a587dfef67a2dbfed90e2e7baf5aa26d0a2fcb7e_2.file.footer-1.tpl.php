<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\footer-1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30684546d18_66621487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a587dfef67a2dbfed90e2e7baf5aa26d0a2fcb7e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\footer-1.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30684546d18_66621487 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );
}
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShowMap'),$_smarty_tpl ) );?>
<div class="footer-container tvcmsfooter-background-image footer-1" data-footer-layout="1" <?php if ($_smarty_tpl->tpl_vars['FooterImageStatus']->value) {?>style="background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paths']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['FooterBackgroundImage']->value, ENT_QUOTES, 'UTF-8');?>
');" <?php }?>> <div class="container tvfooter-logo-link-wrapper"><div class="tvfooter-storelogo-weapper"><div class="tvfooter-storelogo-inner clearfix"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57547358765b30684543086_33871528', 'hook_footer_part_2');
?>
</div></div><div class='tvfooter-storelogo-imformation row'><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_66696155065b30684543a37_06856436', 'hook_footer_part_1');
?>
</div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29052117165b30684544d49_85300083', 'hook_footer');
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomsocialblock'),$_smarty_tpl ) );?>
<div class='tvbottom-to-top'><a href="javascript:" class="tvbottom-to-top-icon"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Go Top','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span><i class='material-icons'>&#xe316;</i></a></div></div><div class="tvfooter-copy-payment-icon-wrapper"><div class="container tvfooter-copy-payment-icon-content"><div class="row tvfooter-copy-payment-icon-inner"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayPaymentIcon'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCopyRightText'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySocialMediaBlock'),$_smarty_tpl ) );?>
</div></div></div></div><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomJs'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTvcmsFooter'),$_smarty_tpl ) );
}
/* {block 'hook_footer_part_2'} */
class Block_57547358765b30684543086_33871528 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_2' => 
  array (
    0 => 'Block_57547358765b30684543086_33871528',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart2'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_2'} */
/* {block 'hook_footer_part_1'} */
class Block_66696155065b30684543a37_06856436 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_part_1' => 
  array (
    0 => 'Block_66696155065b30684543a37_06856436',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayContactCinfo'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterCategory'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterPart1'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayMyaccountcblock'),$_smarty_tpl ) );
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNewslettersubscription'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer_part_1'} */
/* {block 'hook_footer'} */
class Block_29052117165b30684544d49_85300083 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_29052117165b30684544d49_85300083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );
}
}
/* {/block 'hook_footer'} */
}
