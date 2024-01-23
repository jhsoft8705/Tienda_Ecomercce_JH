<?php
/* Smarty version 3.1.47, created on 2024-01-22 23:24:19
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmscategoryslider\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65af3f73de40b2_98543574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae715a5dfede15859beba13521e6e5cfef6f42bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmscategoryslider\\views\\templates\\front\\display_home.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_65af3f73de40b2_98543574 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class='tvcmscategory-slider container-fluid' style="background-image:url(<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['BackimagePath']->value, ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['Backimage']->value, ENT_QUOTES, 'UTF-8');?>
)"><div class='tvcategory-slider container'><?php if ($_smarty_tpl->tpl_vars['main_heading']->value['main_status']) {?><div class='tvcategory-slider-main-title-wrapper'><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?></div><?php }?><div class="tvcategory-slider-inner-info-box"><div class='tvcategory-slider-content-box owl-theme owl-carousel'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dis_arr_result']->value['data'], 'data');
$_smarty_tpl->tpl_vars['data']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->do_else = false;
?><div class="item tvcategory-slider-wrapper-info"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['data']->value['id_category']), ENT_QUOTES, 'UTF-8');?>
" class="tvcategory-slider-title"><div class="tvcategory-img-block"><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['image'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['height'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" /></div><div class='tvcategory-slider-info-box'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['title'], ENT_QUOTES, 'UTF-8');?>
</div></a></div><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><div class='tvcategory-slider-pagination-wrapper tv-pagination-wrapper'><div class="tvcategory-slider-pagination"><div class="tvcategory-slider-next-pre-btn tvcms-next-pre-btn"><div class="tvcategory-slider-prev tvcmsprev-btn"><i class='material-icons'>&#xe314;</i></div><div class="tvcategory-slider-next tvcmsnext-btn"><i class='material-icons'>&#xe315;</i></div></div></div></div></div></div></div><?php }
}
}
