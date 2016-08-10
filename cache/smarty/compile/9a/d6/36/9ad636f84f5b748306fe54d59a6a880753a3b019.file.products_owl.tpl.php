<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:51
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\leomanagewidgets\views\widgets\products_owl.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2011557ab4e8721e7e9-04700017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ad636f84f5b748306fe54d59a6a880753a3b019' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\leomanagewidgets\\views\\widgets\\products_owl.tpl',
      1 => 1470840141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2011557ab4e8721e7e9-04700017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'callFromModule' => 0,
    'products' => 0,
    'owl_rows' => 0,
    'mproducts' => 0,
    'comparator_max_item' => 0,
    'compared_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e8727bf62_39472576',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e8727bf62_39472576')) {function content_57ab4e8727bf62_39472576($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['callFromModule']->value)||$_smarty_tpl->tpl_vars['callFromModule']->value==0) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/setting.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['products']->value)) {?>
	<?php $_smarty_tpl->tpl_vars['mproducts'] = new Smarty_variable(array_chunk($_smarty_tpl->tpl_vars['products']->value,$_smarty_tpl->tpl_vars['owl_rows']->value), null, 0);?>
	<?php  $_smarty_tpl->tpl_vars['products'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['products']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['mproducts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['products']->key => $_smarty_tpl->tpl_vars['products']->value) {
$_smarty_tpl->tpl_vars['products']->_loop = true;
?>
		<div class="item">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['products']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
				<div class="ajax_block_product">
					<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product-item/product-item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				</div>
			<?php } ?>
		</div>
	<?php } ?>
    
<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'min_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'Please select at least one product','mod'=>'leomanagewidgets','js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'min_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('addJsDefL', array('name'=>'max_item')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo smartyTranslate(array('s'=>'You cannot add more than %d product(s) to the product comparison','mod'=>'leomanagewidgets','sprintf'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value,'js'=>1),$_smarty_tpl);?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['addJsDefL'][0][0]->addJsDefL(array('name'=>'max_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparator_max_item'=>$_smarty_tpl->tpl_vars['comparator_max_item']->value),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['addJsDef'][0][0]->addJsDef(array('comparedProductsIds'=>$_smarty_tpl->tpl_vars['compared_products']->value),$_smarty_tpl);?>

<?php }?><?php }} ?>
