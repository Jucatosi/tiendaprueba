<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:50
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\leomanagewidgets\views\widgets\widget_html.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255157ab4e8633c868-11173194%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18f2675e05fe91a7eaf3ca0bc763e2b28056b660' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\leomanagewidgets\\views\\widgets\\widget_html.tpl',
      1 => 1470840141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255157ab4e8633c868-11173194',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'html' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e8635d651_77360277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e8635d651_77360277')) {function content_57ab4e8635d651_77360277($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['html']->value)) {?>
<div class="widget-html block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="title_block">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="custom_content">
		<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
