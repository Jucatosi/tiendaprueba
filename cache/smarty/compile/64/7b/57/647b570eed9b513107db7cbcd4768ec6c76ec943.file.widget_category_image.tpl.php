<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:50
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\leomanagewidgets\views\widgets\widget_category_image.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2098257ab4e86153da9-25449784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647b570eed9b513107db7cbcd4768ec6c76ec943' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\leomanagewidgets\\views\\widgets\\widget_category_image.tpl',
      1 => 1470840141,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2098257ab4e86153da9-25449784',
  'function' => 
  array (
    'menu' => 
    array (
      'parameter' => 
      array (
        'level' => 0,
      ),
      'compiled' => '',
    ),
  ),
  'variables' => 
  array (
    'level' => 0,
    'data' => 0,
    'category' => 0,
    'showicons' => 0,
    'link' => 0,
    'id_root' => 0,
    'categories' => 0,
    'widget_heading' => 0,
    'cate' => 0,
    'limit' => 0,
    'cate_depth' => 0,
  ),
  'has_nocache_code' => 0,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e86323011_28027666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e86323011_28027666')) {function content_57ab4e86323011_28027666($_smarty_tpl) {?>
<?php if (!function_exists('smarty_template_function_menu')) {
    function smarty_template_function_menu($_smarty_tpl,$params) {
    $saved_tpl_vars = $_smarty_tpl->tpl_vars;
    foreach ($_smarty_tpl->smarty->template_functions['menu']['parameter'] as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);};
    foreach ($params as $key => $value) {$_smarty_tpl->tpl_vars[$key] = new Smarty_variable($value);}?>
  <div class="level<?php echo $_smarty_tpl->tpl_vars['level']->value;?>
 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
    <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
    <?php if (isset($_smarty_tpl->tpl_vars['category']->value['children'])&&is_array($_smarty_tpl->tpl_vars['category']->value['children'])) {?>
    <div class="cate_<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
 cate" >
      <?php if (isset($_smarty_tpl->tpl_vars['category']->value['image'])) {?>
      <div class="c-image" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['showicons']->value;?>
<?php $_tmp7=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<?php $_tmp8=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['showicons']->value;?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp7==0||($_tmp8>0&&$_tmp9==2)) {?> style="display:none"<?php }?>>
        <img class="img-responsive" src='<?php echo $_smarty_tpl->tpl_vars['category']->value["image"];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['category']->value["name"];?>
'>
      </div>
      <?php }?>
      <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
        <span <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
<?php $_tmp10=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['id_root']->value;?>
<?php $_tmp11=ob_get_clean();?><?php if ($_tmp10==$_tmp11) {?> style="display:none"<?php }?>>
          <?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>

        </span>          
      </a>
      <?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['category']->value['children'],'level'=>$_smarty_tpl->tpl_vars['level']->value+1));?>

    </div>
    <?php } else { ?>
    <div class="cate_<?php echo $_smarty_tpl->tpl_vars['category']->value['id_category'];?>
 cate">
      <?php if (isset($_smarty_tpl->tpl_vars['category']->value['image'])) {?>
      <div class="c-image" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['showicons']->value;?>
<?php $_tmp12=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['level']->value;?>
<?php $_tmp13=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['showicons']->value;?>
<?php $_tmp14=ob_get_clean();?><?php if ($_tmp12==0||($_tmp13>0&&$_tmp14==2)) {?> style="display:none"<?php }?>>
        <img class="img-responsive" src='<?php echo $_smarty_tpl->tpl_vars['category']->value["image"];?>
' alt='<?php echo $_smarty_tpl->tpl_vars['category']->value["name"];?>
'>
      </div>
      <?php }?>
      <div class="cate-view">
        <a class="cate-link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCategoryLink($_smarty_tpl->tpl_vars['category']->value['id_category'],$_smarty_tpl->tpl_vars['category']->value['link_rewrite']), ENT_QUOTES, 'UTF-8', true);?>
">
          <span><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</span>
        </a>
      </div>

    </div>
    <?php }?>
  <?php } ?>
  </div>
<?php $_smarty_tpl->tpl_vars = $saved_tpl_vars;
foreach (Smarty::$global_tpl_vars as $key => $value) if(!isset($_smarty_tpl->tpl_vars[$key])) $_smarty_tpl->tpl_vars[$key] = $value;}}?>



<?php if (isset($_smarty_tpl->tpl_vars['categories']->value)) {?>
<div class="widget-category_image block">
	<?php if (isset($_smarty_tpl->tpl_vars['widget_heading']->value)&&!empty($_smarty_tpl->tpl_vars['widget_heading']->value)) {?>
	<h4 class="page-subheading">
		<?php echo $_smarty_tpl->tpl_vars['widget_heading']->value;?>

	</h4>
	<?php }?>
	<div class="block_content">
    <div class="row">
      <?php  $_smarty_tpl->tpl_vars['cate'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cate']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cate']->key => $_smarty_tpl->tpl_vars['cate']->value) {
$_smarty_tpl->tpl_vars['cate']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['cate']->key;
?>
  			<?php smarty_template_function_menu($_smarty_tpl,array('data'=>$_smarty_tpl->tpl_vars['cate']->value));?>

      <?php } ?>
    </div>
    <div id="view_all_wapper" style="display:none">
        <span class ="view_all"><a href="javascript:void(0)"><?php echo smartyTranslate(array('s'=>'View all','mod'=>'leomanagewidgets'),$_smarty_tpl);?>
</a></span>
    </div> 
	</div>
</div>
<?php }?>
<script type="text/javascript">
 
    jQuery(document).ready(function(){      
      var limit = <?php echo $_smarty_tpl->tpl_vars['limit']->value;?>
;
      var level = <?php echo $_smarty_tpl->tpl_vars['cate_depth']->value;?>
;
      $("ul.level0").each(function(){
          var element = $(this).find("ul.level" + level + " >li").length;
          var count = 0;
          $(this).find("ul.level" + level + " >li").each(function(){
            count = count + 1;
            if(count > limit){
              $(this).remove();
            }

          });
          
          if(element > limit){
              view = $(".view_all","#view_all_wapper").clone(1);
              view.appendTo($(this).find("ul.level" + level));
              var href = $(this).find('a:first').attr('href');
              $("a",view).attr("href", href);
          }
    })

});

</script>

<?php }} ?>
