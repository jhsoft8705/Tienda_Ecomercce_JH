<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683e77585_15871936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9e2544bdd368c770bbf36a7ce706f92324793b4e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\page.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30683e77585_15871936 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_133924224565b30683e73f75_10898661', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_header_container'} */
class Block_108764854265b30683e74495_39177752 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_50809495265b30683e75285_44488561 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_19609782165b30683e75722_08015065 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Page content --><?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_105778068665b30683e74e51_01092019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="content" class="page-content card card-block"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_50809495265b30683e75285_44488561', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19609782165b30683e75722_08015065', 'page_content', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_179104093365b30683e768a0_47963658 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- Footer content --><?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_154036023065b30683e75f94_11318437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer class="page-footer"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_179104093365b30683e768a0_47963658', 'page_footer', $this->tplIndex);
?>
</footer><?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_133924224565b30683e73f75_10898661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_133924224565b30683e73f75_10898661',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_108764854265b30683e74495_39177752',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_105778068665b30683e74e51_01092019',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_50809495265b30683e75285_44488561',
  ),
  'page_content' => 
  array (
    0 => 'Block_19609782165b30683e75722_08015065',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_154036023065b30683e75f94_11318437',
  ),
  'page_footer' => 
  array (
    0 => 'Block_179104093365b30683e768a0_47963658',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="main"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_108764854265b30683e74495_39177752', 'page_header_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105778068665b30683e74e51_01092019', 'page_content_container', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154036023065b30683e75f94_11318437', 'page_footer_container', $this->tplIndex);
?>
</div><?php
}
}
/* {/block 'content'} */
}
