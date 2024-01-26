<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\themes\v1_organic_33\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b306842d5dd7_78276175',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7a35b7b6f67fa0e2be62fb2b7a6a4f97a32a0e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\themes\\v1_organic_33\\templates\\_partials\\header.tpl',
      1 => 1705965268,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/desktop-header.tpl' => 2,
    'file:_partials/mobile-header.tpl' => 2,
  ),
),false)) {
function content_65b306842d5dd7_78276175 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26285417265b306842d31a3_61715972', 'header_nav');
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_195413307965b306842d39c8_33268947', 'header_top');
}
/* {block 'header_nav'} */
class Block_26285417265b306842d31a3_61715972 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_26285417265b306842d31a3_61715972',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_195413307965b306842d39c8_33268947 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_195413307965b306842d39c8_33268947',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
if (Context::getContext()->getDevice() == 1) {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, false);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, false);
} else {
$_smarty_tpl->_subTemplateRender('file:_partials/desktop-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>false), 0, true);
$_smarty_tpl->_subTemplateRender('file:_partials/mobile-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('withData'=>true), 0, true);
}
}
}
/* {/block 'header_top'} */
}
