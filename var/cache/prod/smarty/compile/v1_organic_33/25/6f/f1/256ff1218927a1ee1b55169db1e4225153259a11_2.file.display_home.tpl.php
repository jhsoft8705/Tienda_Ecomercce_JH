<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'C:\xampp\htdocs\Tienda_Jh_soft_ecommerce\modules\tvcmscustomerservices\views\templates\front\display_home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b3068457a644_94953667',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256ff1218927a1ee1b55169db1e4225153259a11' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Tienda_Jh_soft_ecommerce\\modules\\tvcmscustomerservices\\views\\templates\\front\\display_home.tpl',
      1 => 1705965266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/tvcms-main-title.tpl' => 1,
  ),
),false)) {
function content_65b3068457a644_94953667 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['status']) {?><div class="tvcmscustomer-services container-fluid"><div class="tvcustomer-services container"><div class="tvservice-inner"><?php $_smarty_tpl->_subTemplateRender('file:_partials/tvcms-main-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('main_heading'=>$_smarty_tpl->tpl_vars['main_heading']->value,'path'=>$_smarty_tpl->tpl_vars['dis_arr_result']->value['path']), 0, false);
?><div class="tvservice-all-block-wrapper"><div class="tvservices-all-block"><div class="tv-all-service wrapper card-deck"><?php if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['status']) {?><div class="tvservices-center card odd tvservice-payment"><div class="tvall-block-box-shadows"><div class="tvservices-1 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_1']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['status']) {?><div class="tvservices-center card even tvservice-cash-trustpay"><div class="tvall-block-box-shadows"><div class="tvservices-2 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_2']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['status']) {?><div class="tvservices-center card odd tvservice-supprt"><div class="tvall-block-box-shadows"><div class="tvservices-3 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['image'], ENT_QUOTES, 'UTF-8');?>
" width="50" height="50" class="tv-img-responsive" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_3']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }
if ($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['status']) {?><div class="tvservices-center card even tvservice-shopon"><div class="tvall-block-box-shadows"><div class="tvservices-4 tvall-services-block"><div class="tvservices-wrapper"><div class="tvservices-img-conut"><div class='tvservices-img'><img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['path'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['image'], ENT_QUOTES, 'UTF-8');?>
" class="tv-img-responsive" width="50" height="50" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
" loading="lazy" /></div> </div><div class='tvservices-content-box tvservices-info'><div class="tvservices-title"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['title'], ENT_QUOTES, 'UTF-8');?>
</div><div class="tvservice-dec"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dis_arr_result']->value['data']['service_4']['desc'], ENT_QUOTES, 'UTF-8');?>
</div></div></div></div></div></div><?php }?></div></div></div></div> </div></div><?php }
}
}
