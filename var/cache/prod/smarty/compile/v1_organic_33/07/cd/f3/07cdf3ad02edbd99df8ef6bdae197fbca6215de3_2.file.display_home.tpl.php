<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:27
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmsmultibanner2\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30683d6bd39_52874715',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '07cdf3ad02edbd99df8ef6bdae197fbca6215de3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmsmultibanner2\\views\\templates\\front\\display_home.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30683d6bd39_52874715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('num_of_rec', '1');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME_1', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('num_of_rec', '2');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME_2', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('num_of_rec', '3');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME_3', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if (!empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME_1']->value][$_smarty_tpl->tpl_vars['language_id']->value]) || !empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME_2']->value][$_smarty_tpl->tpl_vars['language_id']->value]) || !empty($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME_3']->value][$_smarty_tpl->tpl_vars['language_id']->value])) {?><div class="tvcmsmultibanners tvmultibanner-second container-fluid"><div class="container"><div class="tvmultibanners row"><div class="col-xl-8 col-md-8 col-xs-12 tvmultibanner2-center-wrapper"><?php $_smarty_tpl->_assignInScope('num_of_rec', '1');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION', ('TVCMSMULTIBANNER2_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_WIDTH', ('TVCMSMULTIBANNER2_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_HEIGHT', ('TVCMSMULTIBANNER2_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION_SIDE', ('TVCMSMULTIBANNER2_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_LINK', ('TVCMSMULTIBANNER2_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value]) {?><div class="tvmultibanner1-wrapper col-xl-6 col-md-6 col-xs-12 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner2'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanners-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }
$_smarty_tpl->_assignInScope('num_of_rec', '2');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION', ('TVCMSMULTIBANNER2_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_WIDTH', ('TVCMSMULTIBANNER2_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_HEIGHT', ('TVCMSMULTIBANNER2_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION_SIDE', ('TVCMSMULTIBANNER2_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_LINK', ('TVCMSMULTIBANNER2_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value]) {?><div class="tvmultibanner2-wrapper col-xl-6 col-md-6 col-xs-12 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class='tvbanner-hover-wrapper' href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner2'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanners-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php $_smarty_tpl->_assignInScope('num_of_rec', '3');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION', ('TVCMSMULTIBANNER2_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_WIDTH', ('TVCMSMULTIBANNER2_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_HEIGHT', ('TVCMSMULTIBANNER2_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION_SIDE', ('TVCMSMULTIBANNER2_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_LINK', ('TVCMSMULTIBANNER2_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value]) {?><div class="tvmultibanner3-wrapper col-xl-12 col-md-12 col-xs-12 tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner2'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanners-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }
}?></div><?php $_smarty_tpl->_assignInScope('num_of_rec', '4');
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_NAME', ('TVCMSMULTIBANNER2_IMAGE_NAME_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION', ('TVCMSMULTIBANNER2_CAPTION_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_WIDTH', ('TVCMSMULTIBANNER2_IMAGE_WIDTH_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_IMAGE_HEIGHT', ('TVCMSMULTIBANNER2_IMAGE_HEIGHT_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_CAPTION_SIDE', ('TVCMSMULTIBANNER2_CAPTION_SIDE_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
$_smarty_tpl->_assignInScope('TVCMSMULTIBANNER2_LINK', ('TVCMSMULTIBANNER2_LINK_').($_smarty_tpl->tpl_vars['num_of_rec']->value));
if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value]) {?><div class="tvmultibanner4-wrapper col-xl-4 col-lg-4 col-md-4 col-xs-12  tvmultibanner-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><a class="tvbanner-hover-wrapper" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_LINK']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Multibanner','mod'=>'tvcmsmultibanner2'),$_smarty_tpl ) );
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['num_of_rec']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['module_dir']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
views/img/<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_NAME']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"  class="img-responsive tv-img-responsive" alt="" width="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_WIDTH']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_IMAGE_HEIGHT']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" loading="lazy"/></a><?php if ($_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value] != 'none') {?><div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION_SIDE']->value][$_smarty_tpl->tpl_vars['language_id']->value],'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 tvmultibanners-content"><?php echo $_smarty_tpl->tpl_vars['data']->value[$_smarty_tpl->tpl_vars['TVCMSMULTIBANNER2_CAPTION']->value][$_smarty_tpl->tpl_vars['language_id']->value];?>
</div><?php }?></div><?php }?></div></div></div><?php }
}
}
