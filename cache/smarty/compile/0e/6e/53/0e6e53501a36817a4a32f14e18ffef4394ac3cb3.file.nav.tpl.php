<?php /* Smarty version Smarty-3.1.19, created on 2016-08-10 10:55:52
         compiled from "C:\wamp\www\Tienda\themes\ap_funiture\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1126457ab4e88808327-53098317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e6e53501a36817a4a32f14e18ffef4394ac3cb3' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\themes\\ap_funiture\\modules\\blockuserinfo\\nav.tpl',
      1 => 1470840140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1126457ab4e88808327-53098317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e888d1637_31478776',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e888d1637_31478776')) {function content_57ab4e888d1637_31478776($_smarty_tpl) {?><script type="text/javascript">
/* Blockusreinfo */
	
$(document).ready( function(){
	if( $(window).width() < 1025 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	$(window).resize(function() {
		if( $(window).width() < 1025 ){
			 $(".header_user_info").addClass('popup-over');
			 $(".header_user_info .links").addClass('popup-content');
		}
		else{
			$(".header_user_info").removeClass('popup-over');
			 $(".header_user_info .links").removeClass('popup-content');
		}
	});
});
</script>
<!-- Block user information module NAV  -->
<div class="header_user_info pull-right e-scale">
	<div data-toggle="dropdown" class="popup-title"><a href="#" title=""><span><?php echo smartyTranslate(array('s'=>'Top links','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</span></a></div>	
	<ul class="links">
		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li class="first">
				<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'View my customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" class="account" rel="nofollow">
					<span><?php echo smartyTranslate(array('s'=>'Hello','mod'=>'blockuserinfo'),$_smarty_tpl);?>
, <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span>
				</a>
			</li>
		<?php }?>

		<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
			<li><a class="logout" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php } else { ?>
			<li class="first"><a class="login" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Login to your customer account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
				<?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
		<?php }?>  

		<li>
			<a id="wishlist-total" href="<?php echo addslashes($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true));?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Wish List','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a>
		</li>

		<li>
			<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>
" rel="nofollow">
				<?php echo smartyTranslate(array('s'=>'Compare','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a>
		</li>
	</ul>
</div>	<?php }} ?>
