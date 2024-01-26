<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683e5ad76_22366479',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6caebbd22c4c7536a4e25b2b764707b131815c4a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\index.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30683e5ad76_22366479 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_32169480565b30683e586f4_55175109', 'page_content_container');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_39835043165b30683e59172_17473191 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_12971565065b30683e59e26_10877967 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_112947316965b30683e59a15_04254100 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12971565065b30683e59e26_10877967', 'hook_home', $this->tplIndex);
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_32169480565b30683e586f4_55175109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_32169480565b30683e586f4_55175109',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_39835043165b30683e59172_17473191',
  ),
  'page_content' => 
  array (
    0 => 'Block_112947316965b30683e59a15_04254100',
  ),
  'hook_home' => 
  array (
    0 => 'Block_12971565065b30683e59e26_10877967',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<section id="content" class="page-home"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39835043165b30683e59172_17473191', 'page_content_top', $this->tplIndex);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_112947316965b30683e59a15_04254100', 'page_content', $this->tplIndex);
?>
</section><?php
}
}
/* {/block 'page_content_container'} */
}
