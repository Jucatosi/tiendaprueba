<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:56:33
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\blocknewproducts\blocknewproducts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1118157ab4eb1cbc1f0-15776459%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3db0f3a6aac2ed81674eb805f86c7c1bfc990178' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\blocknewproducts\\blocknewproducts.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1118157ab4eb1cbc1f0-15776459',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'new_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4eb1d598d5_96379604',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4eb1d598d5_96379604')) {function content_57ab4eb1d598d5_96379604($_smarty_tpl) {?>
<!-- MODULE Block new products -->
<div id="new-products_block_right" class="block products_block nopadding">
	<h4 class="title_block">
    	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'New products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a>
    </h4>
    <div class="block_content products-block">
        <?php if ($_smarty_tpl->tpl_vars['new_products']->value!==false) {?>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['new_products']->value,'mod'=>'blocknewproducts'), 0);?>
           
            <div class="lnk">
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('new-products'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
" class="btn btn-outline button button-small"><span><?php echo smartyTranslate(array('s'=>'All new products','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</span></a>
            </div>
        <?php } else { ?>
        	<p>&raquo; <?php echo smartyTranslate(array('s'=>'Do not allow new products at this time.','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</p>
        <?php }?>
    </div>
</div>
<!-- /MODULE Block new products --><?php }} ?>
