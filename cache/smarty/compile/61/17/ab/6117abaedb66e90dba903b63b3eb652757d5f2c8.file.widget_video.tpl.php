<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:49
         compiled from "C:\wamp\www\Tienda\modules\leobootstrapmenu\views\widgets\widget_video.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2613357ab4e85dd95b2-96463234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6117abaedb66e90dba903b63b3eb652757d5f2c8' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\modules\\leobootstrapmenu\\views\\widgets\\widget_video.tpl',
      1 => 1470840142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2613357ab4e85dd95b2-96463234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'video_code' => 0,
    'widget_heading' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e85e1fc45_63970275',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e85e1fc45_63970275')) {function content_57ab4e85e1fc45_63970275($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['video_code']->value)) {?>
<div class="widget-video">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<div class="menu-title">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</div>
	<?php }?>
	<div class="widget-inner">
		<?php echo $_smarty_tpl->tpl_vars['video_code']->value;?>

	</div>
</div>
<?php }?><?php }} ?>
