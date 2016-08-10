<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:51
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\leomanagewidgets\views\widgets\widget_customercarousel_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:533857ab4e8785b107-60518759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f76d0c797f20cbf887de5aca3d2d17e858dbb061' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\leomanagewidgets\\views\\widgets\\widget_customercarousel_owl.tpl',
      1 => 1470840141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '533857ab4e8785b107-60518759',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'widget_heading' => 0,
    'random_number' => 0,
    'customercarousel' => 0,
    'startSlide' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e878ac859_92961781',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e878ac859_92961781')) {function content_57ab4e878ac859_92961781($_smarty_tpl) {?>
 
 <div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" class="block custhtmlcarosel">
    <?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
    <h4 class="page-subheading">
        <?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

    </h4>
    <?php }?>
	<div class="block_content">
		<div class="carousel slide carousel-inner carousel-fade">
			<div id="custhtmlcarosel<?php echo $_smarty_tpl->tpl_vars['random_number']->value;?>
">
			<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['customercarousel']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["mypLoop"]['index']++;
?>
				<div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['mypLoop']['index']==$_smarty_tpl->tpl_vars['startSlide']->value) {?>active<?php }?>">
				<h4 class="title-custhtml"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</h4>
            		<?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
   					
				</div>
			<?php } ?>   
			</div>
		</div>
	</div>
</div>
    
<?php $_smarty_tpl->tpl_vars["call_owl_carousel"] = new Smarty_variable("#custhtmlcarosel".((string)$_smarty_tpl->tpl_vars['random_number']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('./owl_carousel_config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
