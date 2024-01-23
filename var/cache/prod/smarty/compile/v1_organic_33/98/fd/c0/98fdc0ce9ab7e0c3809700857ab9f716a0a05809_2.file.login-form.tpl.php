<?php
/* Smarty version 3.1.47, created on 2024-01-22 23:24:14
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65af3f6eae2636_00063260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98fdc0ce9ab7e0c3809700857ab9f716a0a05809' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_65af3f6eae2636_00063260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_182542189865af3f6eadb0d0_48768044', 'login_form');
}
/* {block 'login_form_errors'} */
class Block_180338472065af3f6eadb532_35423753 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_195687642065af3f6eadc4e7_43582978 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_32904989665af3f6eade247_24449242 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_162972213065af3f6eadce71_69612729 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32904989665af3f6eade247_24449242', 'form_field', $this->tplIndex);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_82734828665af3f6eae15c4_54555897 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<button id="submit-login" class="tvall-inner-btn form-control-submit" data-link-action="sign-in" type="submit"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</span></button><?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_135504641565af3f6eae12b2_86684040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="form-footer text-center clearfix"><input type="hidden" name="submitLogin" value="1"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82734828665af3f6eae15c4_54555897', 'form_buttons', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_182542189865af3f6eadb0d0_48768044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_182542189865af3f6eadb0d0_48768044',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_180338472065af3f6eadb532_35423753',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_195687642065af3f6eadc4e7_43582978',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_162972213065af3f6eadce71_69612729',
  ),
  'form_field' => 
  array (
    0 => 'Block_32904989665af3f6eade247_24449242',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_135504641565af3f6eae12b2_86684040',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_82734828665af3f6eae15c4_54555897',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_180338472065af3f6eadb532_35423753', 'login_form_errors', $this->tplIndex);
?>
<form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195687642065af3f6eadc4e7_43582978', 'login_form_actionurl', $this->tplIndex);
?>
" method="post"><div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162972213065af3f6eadce71_69612729', 'login_form_fields', $this->tplIndex);
?>
<div class="forgot-password"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</a></div></div><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_135504641565af3f6eae12b2_86684040', 'login_form_footer', $this->tplIndex);
?>
</form><?php
}
}
/* {/block 'login_form'} */
}
