<?php /*%%SmartyHeaderCode:938257ab4e87999753-36722156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9077a67457df48f8bf8f4468e0ea5fc562792a62' => 
    array (
      0 => 'C:\\wamp\\www\\Tienda\\modules\\leomanagewidgets\\views\\widgets\\group.tpl',
      1 => 1470840142,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938257ab4e87999753-36722156',
  'variables' => 
  array (
    'leoGroup' => 0,
    'group' => 0,
    'LEO_BG_STYLE_DATA' => 0,
    'column' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_57ab4e87af1db0_24947323',
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57ab4e87af1db0_24947323')) {function content_57ab4e87af1db0_24947323($_smarty_tpl) {?>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                


<div class="widget-category_image block">
		<div class="block_content">
    <div class="row">
        			  <div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
            <div class="cate_5 cate">
            <div class="c-image" >
        <img class="img-responsive" src='http://localhost/tienda/themes/ap_funiture/img/icontab/category-1.png' alt='Camisetas'>
      </div>
            <div class="cate-view">
        <a class="cate-link" href="http://localhost/tienda/index.php?id_category=5&amp;controller=category">
          <span>Camisetas</span>
        </a>
      </div>

    </div>
        </div>

        			  <div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
            <div class="cate_6 cate">
            <div class="c-image" >
        <img class="img-responsive" src='http://localhost/tienda/themes/ap_funiture/img/icontab/category-2.png' alt='Tops'>
      </div>
            <div class="cate-view">
        <a class="cate-link" href="http://localhost/tienda/index.php?id_category=6&amp;controller=category">
          <span>Tops</span>
        </a>
      </div>

    </div>
        </div>

        			  <div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
            <div class="cate_7 cate">
            <div class="c-image" >
        <img class="img-responsive" src='http://localhost/tienda/themes/ap_funiture/img/icontab/category-3.png' alt='Blusas'>
      </div>
            <div class="cate-view">
        <a class="cate-link" href="http://localhost/tienda/index.php?id_category=7&amp;controller=category">
          <span>Blusas</span>
        </a>
      </div>

    </div>
        </div>

          </div>
    <div id="view_all_wapper" style="display:none">
        <span class ="view_all"><a href="javascript:void(0)">View all</a></span>
    </div> 
	</div>
</div>
<script type="text/javascript">
 
    jQuery(document).ready(function(){      
      var limit = 6;
      var level = 3;
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

                                                                                    </div>
                                                        </div>
            <div class="clear row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 testimonial"
                            >
                                                                                                <div class="widget-html block">
		<div class="custom_content">
		<div class="ImageWrapper"><a title="" href="#"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/banner-1.jpg" alt="" /> <span class="PStyleLi"> </span></a></div>
	</div>
</div>
                                                                                    </div>
                                                        </div>
            <div class="clear row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                
<!-- MODULE Block specials -->
<div id="leoproducttab6475" class="block products_block exclusive producttab">
        <div class="block_content">
        <ul id="productTabs" class="text-center widget-tabs nav nav-tabs">
            	
                <li><a href="#leoproducttab6475special" data-toggle="tab">Special</a></li>
                                                        	
                <li><a href="#leoproducttab6475bestseller" data-toggle="tab"><span></span>Best Seller</a></li>
                                                	
                <li><a href="#leoproducttab6475featured" data-toggle="tab"><span></span>Featured Products</a></li>
                    </ul>

        <div id="product_tab_content">
            <div class="product_tab_content tab-content">
                	
                    <div class="tab-pane" id="leoproducttab6475special">
                                                    

				<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/2/12-home_default.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=5&amp;ipa=19&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/2/0/20-home_default.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=7&amp;ipa=34&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
	    





                    </div>
                                	
                		  
                    <div class="tab-pane" id="leoproducttab6475bestseller">
                                                     

				<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/1-home_default.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" data-id-product="1" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
						Camiseta efecto desteñido de manga corta
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								19,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=1&amp;ipa=1&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/7/7-home_default.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" data-id-product="2" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Blusa" itemprop="url" >
						Blusa
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								31,32 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=2&amp;ipa=7&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/2/12-home_default.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=5&amp;ipa=19&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/6/16-home_default.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" data-id-product="6" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								35,38 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=6&amp;ipa=31&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/2/0/20-home_default.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=7&amp;ipa=34&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/8/8-home_default.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" data-id-product="3" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								30,16 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=3&amp;ipa=13&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
	    





                    </div>   
                	
                		  
                    <div class="tab-pane" id="leoproducttab6475featured">
                                                     

				<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="1"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Camiseta efecto desteñido de manga corta" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/1-home_default.jpg" alt="Camiseta efecto desteñido de manga corta" title="Camiseta efecto desteñido de manga corta" itemprop="image" />
				<span class="product-additional" data-idproduct="1"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" data-id-product="1" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=1&amp;controller=product" title="Camiseta efecto desteñido de manga corta" itemprop="url" >
						Camiseta efecto desteñido de manga corta
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Camiseta de manga corta con efecto desteñido  y escote cerrado. Material suave y elástico para un ajuste cómodo. ¡Combínala con un sombrero de paja y estarás lista para el verano!
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								19,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=1&amp;ipa=1&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="1" data-id-product="1" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="2"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Blusa" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/7/7-home_default.jpg" alt="Blusa" title="Blusa" itemprop="image" />
				<span class="product-additional" data-idproduct="2"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" data-id-product="2" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=2&amp;controller=product" title="Blusa" itemprop="url" >
						Blusa
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Blusa de manga corta con detalle drapeado muy femenino en la manga.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								31,32 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=2&amp;ipa=7&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="7" data-id-product="2" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="3"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/8/8-home_default.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="3"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" data-id-product="3" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=3&amp;controller=product" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido doble estampado 100% algodón. Top de rayas negras y blancas y falda skater naranja de cintura alta.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								30,16 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=3&amp;ipa=13&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="13" data-id-product="3" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="4"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=4&amp;controller=product" title="Vestido estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/0/10-home_default.jpg" alt="Vestido estampado" title="Vestido estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="4"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=4&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=4&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=4&amp;controller=product" data-id-product="4" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=4&amp;controller=product" title="Vestido estampado" itemprop="url" >
						Vestido estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido de noche estampado con mangas rectas, cinturón negro y volantes.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								59,15 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=4&amp;ipa=16&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="16" data-id-product="4" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="5"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/2/12-home_default.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="5"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" data-id-product="5" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=5&amp;controller=product" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido largo estampado con tirantes finos ajustables. Escote en V, fruncido debajo del pecho y volantes en la parte inferior del vestido.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										35,39 $
									</span>
									
																			<span class="price-percent-reduction">-5%</span>
																	</span>
							<br />
							<span class="price product-price">
								33,62 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=5&amp;ipa=19&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="19" data-id-product="5" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="6"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vestido de verano estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/1/6/16-home_default.jpg" alt="Vestido de verano estampado" title="Vestido de verano estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="6"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" data-id-product="6" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=6&amp;controller=product" title="Vestido de verano estampado" itemprop="url" >
						Vestido de verano estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas de gasa hasta la rodilla. Escote en V con elástico debajo del pecho.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
							<br />
							<span class="price product-price">
								35,38 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=6&amp;ipa=31&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="31" data-id-product="6" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
			<div class="item">
							<div class="ajax_block_product">
					    
<div class="product-container product-block" itemscope itemtype="https://schema.org/Product">
	<div class="left-block">
		<div class="product-image-container image">
		    <div class="leo-more-info" data-idproduct="7"></div>
			<a class="product_img_link"	href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url">
				<img class="replace-2x img-responsive" src="http://localhost/tienda/img/p/2/0/20-home_default.jpg" alt="Vestido de gasa estampado" title="Vestido de gasa estampado" itemprop="image" />
				<span class="product-additional" data-idproduct="7"></span>
			</a>		
							
				<span class="label label-new">Nuevo</span>				
										
		</div>
				
		
		<div class="content-buttons clearfix">

						<div class="btn-small">		
				<a class="btn quick-view" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" rel="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vista r&aacute;pida" >
					<i class="fa fa-eye"></i>
				</a>
			</div>
			
						
			<div class="wishlist btn-small">					
								
			</div>	
			
							
				<a class="add_to_compare compare btn btn-outline" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" data-id-product="7" title="A&ntilde;adir para comparar" >
					<i class="fa fa-align-center"></i> 
				</a>										
			
		</div>	
	</div>

	<div class="right-block">
		<div class="product-meta">
			<div class="product-title">
				<h5 itemprop="name" class="name">
										<a class="product-name" href="http://localhost/tienda/index.php?id_product=7&amp;controller=product" title="Vestido de gasa estampado" itemprop="url" >
						Vestido de gasa estampado
					</a>
				</h5>
																					</div>
			<div class="product-desc" itemprop="description">
				Vestido sin mangas hasta la rodilla, tejido de gasa estampado. Escote pronunciado.
			</div>
			
			<div class="functional-buttons">
							<div class="content_price">
													
															<span class="product-cold">
									
									<span class="old-price product-price">
										23,78 $
									</span>
									
																			<span class="price-percent-reduction">-20%</span>
																	</span>
							<br />
							<span class="price product-price">
								19,03 $							</span>
							
							
							
											</div>
									
					<div class="cart">
																													<a class="button ajax_add_to_cart_button btn" href="http://localhost/tienda/index.php?controller=cart&amp;add=1&amp;id_product=7&amp;ipa=34&amp;token=0008080cf403c513598ef96c11f16740" rel="nofollow" title="A&ntilde;adir a la cesta" data-id-product-attribute="34" data-id-product="7" data-minimal_quantity="1">
										<i class="fa fa-shopping-cart"></i><span>A&ntilde;adir a la cesta</span>
									</a>
																		</div>  
							</div>

			 
		</div> <!-- end product meta -->
		
	</div>
</div>
<!-- .product-container> -->


				</div>
					</div>
	    





                    </div>   
                	

            </div></div>


    </div>
</div>
<!-- /MODULE Block specials -->

<script>
$(document).ready(function() {
    $("#leoproducttab6475special").owlCarousel({
            items : 4,
                                                                                    singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : false, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>



<script>
$(document).ready(function() {
    $("#leoproducttab6475newproducts").owlCarousel({
            items : 4,
                                                                                    singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : false, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>



<script>
$(document).ready(function() {
    $("#leoproducttab6475bestseller").owlCarousel({
            items : 4,
                                                                                    singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : false, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>



<script>
$(document).ready(function() {
    $("#leoproducttab6475featured").owlCarousel({
            items : 4,
                                                                                    singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : false, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>


<script>
    $("#leoproducttab6475 ul.widget-tabs li").first().addClass("active");
    $("#leoproducttab6475 .tab-content .tab-pane").first().addClass("active");
</script>                                                                                    </div>
                                                        </div>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                 
 <div id="custhtmlcarosel16628" class="block custhtmlcarosel">
    	<div class="block_content">
		<div class="carousel slide carousel-inner carousel-fade">
			<div id="custhtmlcarosel10118">
							<div class="item active">
				<h4 class="title-custhtml">Title Sample 1</h4>
            		<div class="media">
<div class="media-img pull-left"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/customer-1.jpg" alt="" /></div>
<div class="media-body">
<p class="desc">"For customers who want more than cookie cutter design solutions at home"</p>
<p class="author"><span class="author-name">James boyd </span> <span class="office">Creative Manager</span></p>
</div>
</div>   					
				</div>
							<div class="item ">
				<h4 class="title-custhtml">Title Sample 2</h4>
            		<div class="media">
<div class="media-img pull-left"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/customer-2.jpg" alt="" /></div>
<div class="media-body">
<p class="desc">"For customers who want more than cookie cutter design solutions at home"</p>
<p class="author"><span class="author-name">James boyd </span> <span class="office">Creative Manager</span></p>
</div>
</div>   					
				</div>
							<div class="item ">
				<h4 class="title-custhtml">Title Sample 3</h4>
            		<div class="media">
<div class="media-img pull-left"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/customer-3.jpg" alt="" /></div>
<div class="media-body">
<p class="desc">"For customers who want more than cookie cutter design solutions at home"</p>
<p class="author"><span class="author-name">James boyd </span> <span class="office">Creative Manager</span></p>
</div>
</div>   					
				</div>
							<div class="item ">
				<h4 class="title-custhtml">Title Sample 4</h4>
            		<div class="media">
<div class="media-img pull-left"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/customer-4.jpg" alt="" /></div>
<div class="media-body">
<p class="desc">"For customers who want more than cookie cutter design solutions at home"</p>
<p class="author"><span class="author-name">James boyd </span> <span class="office">Creative Manager</span></p>
</div>
</div>   					
				</div>
							<div class="item ">
				<h4 class="title-custhtml">Title Sample 5</h4>
            		<div class="media">
<div class="media-img pull-left"><img class="img-responsive" src="/tienda/themes/ap_funiture/img/modules/leomanagewidgets/customer-1.jpg" alt="" /></div>
<div class="media-body">
<p class="desc">"For customers who want more than cookie cutter design solutions at home"</p>
<p class="author"><span class="author-name">James boyd </span> <span class="office">Creative Manager</span></p>
</div>
</div>   					
				</div>
			   
			</div>
		</div>
	</div>
</div>
    
<script>
$(document).ready(function() {
    $("#custhtmlcarosel10118").owlCarousel({
            items : 1,
                                                                        itemsCustom : [[320, 1], [360, 1], [480, 1], [568, 1], [600, 1], [640, 1], [768, 1], [900, 1], [960, 1], [1024, 1]],            singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : true,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : true, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>
                                                                                    </div>
                                                        </div>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12"
                            >
                                                                                                 
  <div id="manufacture-carousel" class="widget-manufacture block">
		<div class="block_content">
		<div class="slide" id="manucarousel">
			<div id="leomanulogocarousel17992" class="owl-carousel owl-theme">
													<div class="item">
																					<div>
														<div class="logo-manu">
								<a href="http://localhost/tienda/index.php?id_manufacturer=1&amp;controller=manufacturer" title="view products">
								<img src="/tienda/img/m/es-default-brands.jpg" alt=""/></a>
							</div>
															</div>
																		</div>
							</div>
		</div>
	</div>
</div>


<script>
$(document).ready(function() {
    $("#leomanulogocarousel17992").owlCarousel({
            items : 5,
                                                                                    singleItem : false,         // chỉ hiện thị 1 item
            itemsScaleUp : false,       // true sẽ hiện thị giãn ảnh nếu diện tích còn thừa, và ẩn nếu độ rộng ko đủ
            slideSpeed : 200,  // tốc độ trôi khi thả chuột, kéo 1 nửa rồi thả ra
            paginationSpeed : 800, // tốc độ next page
            rewindSpeed : 1000, // tốc độ tua lại về first item
            autoPlay : 8000,   // thời gian show each item
            stopOnHover : true,
            navigation : false,
            navigationText : ["&lsaquo;", "&rsaquo;"],
            rewindNav : true, // enable, disable tua lại về first item
            scrollPerPage : false,
            
            pagination : false, // show bullist : nut tròn tròn
            paginationNumbers : false, // đổi nut tròn tròn thành số
            
            responsive : true,
            //responsiveRefreshRate : 200,
            //responsiveBaseWidth : window,
            
            //baseClass : "owl-carousel",
            //theme : "owl-theme",
            
            lazyLoad : false,
            lazyFollow : true,  // TRUE : nhảy vào page 7 load ảnh TỪ page 1->7. FALSE : nhảy vào page 7 CHỈ load ảnh page 7
            lazyEffect : "fade",
            
            autoHeight : false,

            //jsonPath : false,
            //jsonSuccess : false,

            //dragBeforeAnimFinish
            mouseDrag : true,
            touchDrag : true,
            
            addClassActive : true,
                        //transitionStyle : "owl_transitionStyle",
            
            //beforeUpdate : false,
            //afterUpdate : false,
            //beforeInit : false,
            afterInit : SetOwlCarouselFirstLast,
            //beforeMove : false,
            //afterMove : false,
            afterAction : SetOwlCarouselFirstLast,
            //startDragging : false,
            //afterLazyLoad: false
    

        });
    });
	
	function SetOwlCarouselFirstLast(el){
		el.find(".owl-item").removeClass("first_item");
		el.find(".owl-item.active").first().addClass("first_item");
		
		el.find(".owl-item").removeClass("last_item");
		el.find(".owl-item.active").last().addClass("last_item");
    }
</script>
                                                                                    </div>
                                                        </div>
            <div class="row" 
                    >
            
                                                                                    <div class="widget col-lg-12 col-md-12 col-sm-12 col-xs-12 col-sp-12 shipment"
                            >
                                                                                                <div class="widget-html block">
		<div class="custom_content">
		<div class="row">
<div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
<div class="media">
<div class="pull-left icon-box"><em class="fa fa-truck"> </em></div>
<div class="media-body">
<h4><a title="Free Return" href="#">Free shipping</a></h4>
<p>On order over $50.00</p>
</div>
</div>
</div>
<div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
<div class="media">
<div class="pull-left icon-box"><em class="fa fa-exchange"> </em></div>
<div class="media-body">
<h4><a title="Free Return" href="#">Free Return</a></h4>
<p>On order over $50.00</p>
</div>
</div>
</div>
<div class="level0 col-md-4 col-lg-4 col-sm-4 col-xs-4 col-sp-12">
<div class="media">
<div class="pull-left icon-box"><em class="fa fa-money"> </em></div>
<div class="media-body">
<h4><a title="Free Return" href="#">Money back</a></h4>
<p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius</p>
</div>
</div>
</div>
</div>
	</div>
</div>
                                                                                    </div>
                                                        </div>
    <?php }} ?>
