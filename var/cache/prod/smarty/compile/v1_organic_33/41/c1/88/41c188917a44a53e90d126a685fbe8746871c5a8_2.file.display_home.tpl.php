<?php
/* Smarty version 3.1.47, created on 2024-01-22 23:24:19
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmscategorychainslider\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65af3f73e752f3_93571308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41c188917a44a53e90d126a685fbe8746871c5a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmscategorychainslider\\views\\templates\\front\\display_home.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_65af3f73e752f3_93571308 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='tvcmscategory-chain-slider container-fluid bottom-to-top hb-animate-element'><div class='tvcategory-chain-slider container'><div class='tvcategory-chain-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><div class="tvcategory-chain-slider-inner-info-box"><div class='tvcategory-chain-slider-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvcategory-chain-slider-wrapper-info"><div class="tvcategory-chain-slider-wrapper clearfix tvcategory-chain-slider-info-wrapper"><div class="tvcategory-chin-img-block col-xl-12 col-lg-12 col-md-12 col-xs-12"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" loading="lazy"/><div class='tvcategory-chain-title'><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</a></div></div><div class="tvcategory-chain-content-wrapper col-xl-12 col-lg-12 col-md-12 col-xs-12"><?php if (!empty($_smarty_tpl->tpl_vars['data']->value['child_category'])) {
$_smarty_tpl->_assignInScope('count', 1);
$_smarty_tpl->_assignInScope('open_div', 'true');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['child_category'], 'cat_info');
$_smarty_tpl->tpl_vars['cat_info']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat_info']->value) {
$_smarty_tpl->tpl_vars['cat_info']->do_else = false;
if ($_smarty_tpl->tpl_vars['count']->value <= 6) {?> <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['cat_info']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['name'], ENT_QUOTES, 'UTF-8');?>
" class="tvcategory-chain-slider-category"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['cat_info']->value['name'], ENT_QUOTES, 'UTF-8');?>
</a><?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);
} else {
break 1;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></div></div></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class="tvcategory-chain-slider-pagination-wrapper"><div class="tvcategory-chain-slider-next-pre-btn tvcms-next-pre-btn"><div class="tvcategory-chain-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe314;</i></div><div class="tvcategory-chain-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe315;</i></div></div></div></div></div></div><?php }
}
}
