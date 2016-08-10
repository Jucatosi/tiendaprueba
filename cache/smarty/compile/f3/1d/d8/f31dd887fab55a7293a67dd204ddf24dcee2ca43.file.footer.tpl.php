<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:53
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\layout\default\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2676257ab4e890848a0-99863633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f31dd887fab55a7293a67dd204ddf24dcee2ca43' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\layout\\default\\footer.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2676257ab4e890848a0-99863633',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_CONTENTBOTTOM' => 0,
    'page_name' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e890b0383_01919852',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e890b0383_01919852')) {function content_57ab4e890b0383_01919852($_smarty_tpl) {?>		<?php if ($_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value&&in_array($_smarty_tpl->tpl_vars['page_name']->value,array('index'))) {?>
			<div id="contentbottom" class="no-border clearfix block">
				<?php echo $_smarty_tpl->tpl_vars['HOOK_CONTENTBOTTOM']->value;?>

			</div>
		<?php }?>
</section>
<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
<!-- Right -->
<section id="right_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>

</section>
<?php }?>

<?php }} ?>
