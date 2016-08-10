<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:56:34
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:472357ab4eb227b7d5-36806423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '558735a60fa06b66edea2d35e5b95aa86f5d76c3' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\category.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '472357ab4eb227b7d5-36806423',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'subcategories' => 0,
    'display_subcategories' => 0,
    'products' => 0,
    'categoryNameComplement' => 0,
    'description_short' => 0,
    'link' => 0,
    'subcategory' => 0,
    'img_cat_dir' => 0,
    'lang_iso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4eb24581d5_39829801',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4eb24581d5_39829801')) {function content_57ab4eb24581d5_39829801($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./errors.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['category']->value)) {?>
	<?php if ($_smarty_tpl->tpl_vars['category']->value->id&&$_smarty_tpl->tpl_vars['category']->value->active) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['subcategories']->value)) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['display_subcategories']->value)&&$_smarty_tpl->tpl_vars['display_subcategories']->value==1)||!isset($_smarty_tpl->tpl_vars['display_subcategories']->value)) {?>
        <h1 class="page-heading<?php if ((isset($_smarty_tpl->tpl_vars['subcategories']->value)&&!$_smarty_tpl->tpl_vars['products']->value)||(isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value)||!isset($_smarty_tpl->tpl_vars['subcategories']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?> product-listing<?php }?>">
            <span class="cat-name">
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value->name, ENT_QUOTES, 'UTF-8', true);?>
<?php if (isset($_smarty_tpl->tpl_vars['categoryNameComplement']->value)) {?>&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['categoryNameComplement']->value, ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
            </span>
            <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./category-count.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </h1>
        <?php if ($_smarty_tpl->tpl_vars['category']->value->description) {?>
            <div class="cat_desc rte">
            <?php if (Tools::strlen($_smarty_tpl->tpl_vars['category']->value->description)>350) {?>
                <div id="category_description_short"><?php echo $_smarty_tpl->tpl_vars['description_short']->value;?>
</div>
                <div id="category_description_full" class="unvisible"><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value->id_category,$_smarty_tpl->tpl_vars['category']->value->link_rewrite), ENT_QUOTES, 'UTF-8', true);?>
" class="lnk_more"><?php echo smartyTranslate(array('s'=>'More'),$_smarty_tpl);?>
</a>
            <?php } else { ?>
                <div><?php echo $_smarty_tpl->tpl_vars['category']->value->description;?>
</div>
            <?php }?>
            </div>
        <?php }?>
		<!-- Subcategories -->
		<h4><?php echo smartyTranslate(array('s'=>'Subcategories'),$_smarty_tpl);?>
</h4>			
        <div id="subcategories">
			<div class="clearfix row">
			<?php  $_smarty_tpl->tpl_vars['subcategory'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcategory']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['subcategories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcategory']->key => $_smarty_tpl->tpl_vars['subcategory']->value) {
$_smarty_tpl->tpl_vars['subcategory']->_loop = true;
?>
				<div class="col-md-3 col-xs-6 col-sp-12">
                	<div class="subcategories scene_cat">
                		<div class="image">
							<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="img">
							<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['id_image']) {?>
								<img class="replace-2x img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite'],$_smarty_tpl->tpl_vars['subcategory']->value['id_image'],'category_default'), ENT_QUOTES, 'UTF-8', true);?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
							<?php } else { ?>
								<img class="replace-2x img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['img_cat_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['lang_iso']->value;?>
-default-category_default.jpg" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subcategory']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
"/>
							<?php }?>
						</a>
                   		</div>
						<h5 class="cat-name"><a class="subcategory-name" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['subcategory']->value['id_category'],$_smarty_tpl->tpl_vars['subcategory']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['truncate'][0][0]->smarty_modifier_truncate($_smarty_tpl->tpl_vars['subcategory']->value['name'],25,'...'), ENT_QUOTES, 'UTF-8', true);?>
</a></h5>
						<?php if ($_smarty_tpl->tpl_vars['subcategory']->value['description']) {?>
							<div class="cat-desc"><?php echo $_smarty_tpl->tpl_vars['subcategory']->value['description'];?>
</div>
						<?php }?>
					</div>
				</div>
			<?php } ?>
			</div>
		</div>
        <?php }?>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['products']->value) {?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./sub/product/product-list-form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	<?php } elseif ($_smarty_tpl->tpl_vars['category']->value->id) {?>
		<p class="alert alert-warning"><?php echo smartyTranslate(array('s'=>'This category is currently unavailable.'),$_smarty_tpl);?>
</p>
	<?php }?>
<?php }?><?php }} ?>
