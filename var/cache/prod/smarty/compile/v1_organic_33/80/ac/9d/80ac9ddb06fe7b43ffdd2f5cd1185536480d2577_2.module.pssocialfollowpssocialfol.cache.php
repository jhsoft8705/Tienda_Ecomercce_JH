<?php
/* Smarty version 3.1.47, created on 2024-01-25 20:10:28
  from 'module:pssocialfollowpssocialfol' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.47',
  'unifunc' => 'content_65b30684899011_65313398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:pssocialfollowpssocialfol',
      1 => 1705965268,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b30684899011_65313398 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '153517197765b30684886f29_41092697';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_54350167365b306848878d5_45552740', 'block_social');
}
/* {block 'block_social'} */
class Block_54350167365b306848878d5_45552740 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_54350167365b306848878d5_45552740',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block-social tvcmsfooter-social-icon col-xl-4 col-md-12 col-sm-12"><ul id="footer_sub_menu_social_icon" class="tvfooter-social-icon-wrapper"><?php if (!empty(Configuration::get('BLOCKSOCIAL_FACEBOOK',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="facebook"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_FACEBOOK',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="facebook-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_TWITTER',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="twitter"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_TWITTER',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="twitter-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_RSS',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="rss"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_RSS',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rss','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="rss-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_YOUTUBE',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="youtube"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_YOUTUBE',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Youtube','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="youtube-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="googleplus"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_GOOGLE_PLUS',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google plus','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="googleplus-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_PINTEREST',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="pinterest"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_PINTEREST',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Pinterest','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="pinterest-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_VIMEO',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="vimeo"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_VIMEO',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Vimeo','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="vimeo-icon"></span></a></li><?php }
if (!empty(Configuration::get('BLOCKSOCIAL_INSTAGRAM',$_smarty_tpl->tpl_vars['language']->value['id']))) {?><li class="instagram"><a href="<?php echo htmlspecialchars(Configuration::get('BLOCKSOCIAL_INSTAGRAM',$_smarty_tpl->tpl_vars['language']->value['id']), ENT_QUOTES, 'UTF-8');?>
" rel="noreferrer" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
"><span class="instagram-icon"></span></a></li><?php }?></ul></div><?php
}
}
/* {/block 'block_social'} */
}
