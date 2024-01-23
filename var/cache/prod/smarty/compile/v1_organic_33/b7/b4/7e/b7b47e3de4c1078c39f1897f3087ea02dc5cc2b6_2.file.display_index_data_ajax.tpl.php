<?php
/* Smarty version 3.1.47, created on 2024-01-23 00:08:59
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmstabproducts\views\templates\front\display_index_data_ajax.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65af49eb982385_74899376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7b47e3de4c1078c39f1897f3087ea02dc5cc2b6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmstabproducts\\views\\templates\\front\\display_index_data_ajax.tpl',
      1 => 1705965267,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_65af49eb982385_74899376 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_status']) {
$_smarty_tpl->_assignInScope('col', 'col-xl-10 col-lg-9 col-md-9 col-sm-8 col-xs-12 tvimage-true');
$_smarty_tpl->_assignInScope('image', true);
if ($_smarty_tpl->tpl_vars['main_heading']->value['main_image_side'] == 'left') {
$_smarty_tpl->_assignInScope('image_side', 'left');
} else {
$_smarty_tpl->_assignInScope('image_side', 'right');
}
} else {
$_smarty_tpl->_assignInScope('col', '');
$_smarty_tpl->_assignInScope('image', '');
$_smarty_tpl->_assignInScope('image_side', '');
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'tab_products');
$_smarty_tpl->tpl_vars['tab_products']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab_products']->value) {
$_smarty_tpl->tpl_vars['tab_products']->do_else = false;
$_smarty_tpl->_assignInScope('tmp', true);?><div id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
" class="tvcmstab-product <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
 tvcmstab-product-detail"><div class="products owl-theme owl-carousel tvproduct-wrapper-content-box tvall-tab-product-block <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
"data-has-image='<?php if ($_smarty_tpl->tpl_vars['image']->value == true) {?>true<?php } else { ?>false<?php }?>'><?php if (Configuration::get('TVCMSCUSTOMSETTING_TAB_PRODUCT_ROW')) {
$_smarty_tpl->_assignInScope('count', 1);?>                <?php $_smarty_tpl->_assignInScope('double_row', true);
$_smarty_tpl->_assignInScope('single_row', false);
} else {
$_smarty_tpl->_assignInScope('count', 5);?>                <?php $_smarty_tpl->_assignInScope('double_row', false);
$_smarty_tpl->_assignInScope('single_row', true);
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tab_products']->value['product_list'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value == '1') {?><div class="tvtabproduct-main-block item"><?php $_smarty_tpl->_assignInScope('double_row', true);
}
$_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'tv_product_type'=>'tab_product','tab_slider'=>true,'double_row'=>$_smarty_tpl->tpl_vars['double_row']->value), 0, true);
$_smarty_tpl->_assignInScope('double_row', false);
if ($_smarty_tpl->tpl_vars['count']->value == '2') {?></div><?php $_smarty_tpl->_assignInScope('count', '0');
}
$_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['count']->value != '1' && !$_smarty_tpl->tpl_vars['single_row']->value) {?></div><?php }?></div><div class='tvtab-pagination-wrapper tv-pagination-wrapper'><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination tvtab-pagination <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?>"></div><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination tvtab-pagination <?php if ($_smarty_tpl->tpl_vars['tmp']->value) {?>active<?php }?>"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_pagination'], ENT_QUOTES, 'UTF-8');?>
-pagination-next-pre-btn tvcms-next-pre-btn"><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
-prev tvcmsprev-btn" data-parent="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>&#xe314;</i></div><div class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_class_slider'], ENT_QUOTES, 'UTF-8');?>
-next tvcmsnext-btn" data-parent="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tab_products']->value['tab_name_id'], ENT_QUOTES, 'UTF-8');?>
"><i class='material-icons'>&#xe315;</i></div></div></div></div></div><?php $_smarty_tpl->_assignInScope('tmp', false);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
