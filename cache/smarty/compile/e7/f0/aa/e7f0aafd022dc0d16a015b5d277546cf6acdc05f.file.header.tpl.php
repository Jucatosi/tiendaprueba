<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:52
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\layout\default\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:209257ab4e88ef6130-74010344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7f0aafd022dc0d16a015b5d277546cf6acdc05f' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\layout\\default\\header.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209257ab4e88ef6130-74010344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'left_column_size' => 0,
    'HOOK_LEFT_COLUMN' => 0,
    'right_column_size' => 0,
    'cols' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e88f3c980_44709574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e88f3c980_44709574')) {function content_57ab4e88f3c980_44709574($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['left_column_size']->value)) {?>
<!-- Left -->
	<section id="left_column" class="column sidebar col-md-<?php echo intval($_smarty_tpl->tpl_vars['left_column_size']->value);?>
" role="navigation">
		<?php echo $_smarty_tpl->tpl_vars['HOOK_LEFT_COLUMN']->value;?>

	</section>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
<!-- Center -->
<section id="center_column" <?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
<?php $_tmp16=ob_get_clean();?><?php if ($_tmp16!=12) {?>class="col-md-<?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
"<?php }?>>
	

<?php }} ?>
