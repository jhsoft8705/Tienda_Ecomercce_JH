<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmscategoryproduct\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683e06ec0_82944533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fe2ec39c69dc9e009226bd66619f5e703e04178' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmscategoryproduct\\views\\templates\\front\\display_home.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_65b30683e06ec0_82944533 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='container-fluid tvcmstabcategory-product-slider'><div class='container tvtabcategory-product-slider'><div class='tvcmstabcategory-product-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class='tvtabcategory-tab-product'><div class='tvtabcategory-all-tab tvtabcategory-product-desktop-view tvall-product-branner col-xl-2 col-lg-3 col-md-3 col-sm-4'><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_product_title']) {?><div class='tvtabcategory-tab-title'><i class='material-icons'>&#xe5c3;</i><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['main_heading']->value['data']['product_title'], ENT_QUOTES, 'UTF-8');?>
</span></div><?php }?><div class="tvtabcategory-product-sub-title-block"><ul class="tvtabcategory-product-inner"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><li class="tvtabcategory-product-li"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['baseUrl'], ENT_QUOTES, 'UTF-8');?>
" class="tvtabcategory-tab-sub-title" title='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["title"], ENT_QUOTES, 'UTF-8');?>
' data-category-id='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["id_category"], ENT_QUOTES, 'UTF-8');?>
' data-num-prod='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value["num_of_prod"], ENT_QUOTES, 'UTF-8');?>
'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></li><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?><li class='tvtabcategory-show show-hide hide'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['baseUrl'], ENT_QUOTES, 'UTF-8');?>
" class="tvtabcategory-tab-sub-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show Category','mod'=>'tvcmscategoryproduct'),$_smarty_tpl ) );?>
</a><i class='material-icons'>&#xe313;</i></li><li class='tvtabcategory-hide show-hide hide'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['baseUrl'], ENT_QUOTES, 'UTF-8');?>
" class="tvtabcategory-tab-sub-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Hide Category','mod'=>'tvcmscategoryproduct'),$_smarty_tpl ) );?>
</a><i class='material-icons'>&#xe316;</i></li></ul></div></div><div class='tvtabcategory-all-product tvimage-true col-xl-10 col-lg-9 col-md-9 col-sm-8 col-xs-12'><div class='tvtabcategory-all-product-wrapper'></div></div></div></div></div><?php }
}
}
