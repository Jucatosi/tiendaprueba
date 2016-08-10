<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 11:33:19
         compiled from "C:\wamp\www\Tienda\admin506mxckrs\themes\default\template\controllers\modules\warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2504057ab574f6f6359-43746669%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd60cb839c9f7af676e1a21e13ba56bc0dcc7769d' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\admin506mxckrs\\themes\\default\\template\\controllers\\modules\\warning_module.tpl',
      1 => 1466020874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2504057ab574f6f6359-43746669',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab574f768f63_39471434',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab574f768f63_39471434')) {function content_57ab574f768f63_39471434($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
