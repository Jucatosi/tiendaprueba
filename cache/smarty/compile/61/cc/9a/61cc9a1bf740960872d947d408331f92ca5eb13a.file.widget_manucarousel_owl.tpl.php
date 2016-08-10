<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:51
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\leomanagewidgets\views\widgets\widget_manucarousel_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3225757ab4e878e5f87-74808224%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61cc9a1bf740960872d947d408331f92ca5eb13a' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\leomanagewidgets\\views\\widgets\\widget_manucarousel_owl.tpl',
      1 => 1470840141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3225757ab4e878e5f87-74808224',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'manufacturers' => 0,
    'widget_heading' => 0,
    'tab' => 0,
    'owl_rows' => 0,
    'mmanufacturers' => 0,
    'columnspage' => 0,
    'manufacturer' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e87983a26_17777594',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e87983a26_17777594')) {function content_57ab4e87983a26_17777594($_smarty_tpl) {?>
 
 <?php if ($_smarty_tpl->tpl_vars['manufacturers']->value) {?>
 <div id="manufacture-carousel" class="widget-manufacture block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="page-subheading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
		<div class="slide" id="manucarousel">
			<div id="<?php echo $_smarty_tpl->tpl_vars['tab']->value;?>
" class="owl-carousel owl-theme">
				<?php $_smarty_tpl->tpl_vars['mmanufacturers'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['manufacturers']->value,$_smarty_tpl->tpl_vars['owl_rows']->value), null, 0);?>
				<?php  $_smarty_tpl->tpl_vars['manufacturers'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturers']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mmanufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturers']->key => $_smarty_tpl->tpl_vars['manufacturers']->value) {
$_smarty_tpl->tpl_vars['manufacturers']->_loop = true;
?>
					<div class="item">
						<?php  $_smarty_tpl->tpl_vars['manufacturer'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['manufacturer']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['manufacturers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['manufacturer']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['manufacturer']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['manufacturer']->key => $_smarty_tpl->tpl_vars['manufacturer']->value) {
$_smarty_tpl->tpl_vars['manufacturer']->_loop = true;
 $_smarty_tpl->tpl_vars['manufacturer']->iteration++;
 $_smarty_tpl->tpl_vars['manufacturer']->last = $_smarty_tpl->tpl_vars['manufacturer']->iteration === $_smarty_tpl->tpl_vars['manufacturer']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['manufacturers']['last'] = $_smarty_tpl->tpl_vars['manufacturer']->last;
?>
							<?php if ($_smarty_tpl->tpl_vars['manufacturer']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==1&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
								<div>
							<?php }?>
							<div class="logo-manu">
								<a href="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getmanufacturerLink($_smarty_tpl->tpl_vars['manufacturer']->value['id_manufacturer'],$_smarty_tpl->tpl_vars['manufacturer']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" title="<?php echo smartyTranslate(array('s'=>'view products','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
">
								<img src="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer']->value['image'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" alt=""/></a>
							</div>
							<?php if (($_smarty_tpl->tpl_vars['manufacturer']->iteration%$_smarty_tpl->tpl_vars['columnspage']->value==0||$_smarty_tpl->getVariable('smarty')->value['foreach']['manufacturers']['last'])&&$_smarty_tpl->tpl_vars['columnspage']->value>1) {?>
								</div>
							<?php }?>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php }?>


<?php $_smarty_tpl->tpl_vars["call_owl_carousel"] = new Smarty_variable("#".((string)$_smarty_tpl->tpl_vars['tab']->value), null, 0);?>
<?php echo $_smarty_tpl->getSubTemplate ('./owl_carousel_config.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
