<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:53
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:485357ab4e89006228-98887778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76e0d2cf84dbf0482aef9ef149daf16573245ad1' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\footer.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '485357ab4e89006228-98887778',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'LEO_LAYOUT_DIRECTION' => 0,
    'HOOK_BOTTOM' => 0,
    'left_column_size' => 0,
    'right_column_size' => 0,
    'cols' => 0,
    'HOOK_FOOTER' => 0,
    'LEO_PANELTOOL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e89078de0_07048143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e89078de0_07048143')) {function content_57ab4e89078de0_07048143($_smarty_tpl) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
						<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./layout/".((string)$_smarty_tpl->tpl_vars['LEO_LAYOUT_DIRECTION']->value)."/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


                
                	</div>
				</div>
				
            </section>
<!-- Footer -->
            <?php if (isset($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)&&!empty($_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value)) {?>
			
				<section id="bottom">
				<div class="container">	
				<?php if (isset($_smarty_tpl->tpl_vars['left_column_size']->value)&&isset($_smarty_tpl->tpl_vars['right_column_size']->value)) {?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable((12-$_smarty_tpl->tpl_vars['left_column_size']->value-$_smarty_tpl->tpl_vars['right_column_size']->value), null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['cols'] = new Smarty_variable(12, null, 0);?><?php }?>
				<div class="<?php ob_start();?><?php echo intval($_smarty_tpl->tpl_vars['cols']->value);?>
<?php $_tmp17=ob_get_clean();?><?php if ($_tmp17!=12) {?>row<?php } else { ?>inner<?php }?>">
					<?php echo $_smarty_tpl->tpl_vars['HOOK_BOTTOM']->value;?>

				</div>
				</div>
				</section>
			<?php }?>
		<!-- Footer -->
			<footer id="footer" class="footer-container">       
				<div class="container"> 
					<div class="inner">	
						<?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
							
					</div> 
				</div>
            </footer>
		</section><!-- #page -->
<?php }?>
<p id="back-top">
<a href="#top" title="<?php echo smartyTranslate(array('s'=>'Scroll To Top'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Scroll To Top'),$_smarty_tpl);?>
</a>
</p>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if (isset($_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value)&&$_smarty_tpl->tpl_vars['LEO_PANELTOOL']->value) {?>
    <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./info/paneltool.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
	</body>
</html><?php }} ?>
