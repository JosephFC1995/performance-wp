<?php $proyectos_venta = get_field('proyectos_venta', $__id_from_page) ?>

<div class="proyectos_ventas" id="proyectos_ventas">
	<div class="container">
		<div class="__content_proyectos">
			
			<div class="__group_title px-3 px-md-0">
				<div class="content__">
            		<div>
            			<div class="__title__">
	            			<span class="_top">
	            				Proyectos en ventas
	            			</span>
	            			<h1 class="center">
	            				Nuestros proyectos <br> en venta
	            			</h1>
	            		</div>
            		</div>
            	</div>
			</div>
			<div class="__group_buttons justify-content-start ml-3">
		    	<a class="btn-performance alter d-flex d-md-none" href="#modal-proyectos" uk-toggle>
		    		<span>
		    			Ver más proyectos
		    		</span>
		    	</a>
		    </div>

			<div class="uk-position-relative uk-visible-toggle uk-light slider__content_general" tabindex="-1" uk-slider>

			    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-3@m uk-grid">
			    	<?php foreach ($proyectos_venta  as $key => $value): ?>
				        <li>
				            <div class="uk-panel">
				                <div class="__content_slider">
				                	<div class="_picture_l">
				                		<img src="<?php echo $value['imagen'] ?>" alt="">
				                		<div class="__span_label">
				                			<span>
				                				<?php echo $value['estado'] ?>
				                			</span>
				                		</div>
				                	</div>
				                	<div class="_bottom_det">
				                		<div class="_left">
				                			<img src="<?php echo $value['imagen_escudo'] ?>" alt="">
				                		</div>
				                		<div class="_right">
				                			<span class="_title">
				                				<?php echo $value['nombre_lugar'] ?>
				                			</span>
				                			<div class="_middle">
				                				<?php echo $value['ubicacion'] ?>
				                			</div>
				                			<div class="_bottom">
				                				<?php echo $value['tipo'] ?>
				                			</div>
				                		</div>
				                	</div>
				                	<a href="<?php echo $value['link'] ?>" class="__link_floating__f" target="_blank"></a>
				                </div>
				            </div>
				        </li>
				    <?php endforeach ?>    

			    </ul>

			    <ul class="uk-slider-nav uk-dotnav d-flex d-md-none"></ul>

			    <div class="__group_buttons">
			    	<a class="btn-performance alter d-none d-md-flex" href="#modal-proyectos" uk-toggle>
			    		<span>
			    			Ver más proyectos
			    		</span>
			    	</a>
			    	 <div class="__conten_arrows v_2">
					  	 <div class="content__arrow">
					  	 	<a class="uk-position-small arrows prev" href="#" uk-slider-item="previous">
						   		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
								  <defs>
								    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
								  </defs>
								  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
								</svg>
						   	</a>
						    <a class=" uk-position-small arrows next" href="#" uk-slider-item="next">
						    	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
								  <defs>
								    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
								  </defs>
								  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
								</svg>
						    </a>
						  
					   </div>
				  </div>
			    </div>

			</div>

		</div>
	</div>
</div>

<!-- Modal proyectos -->
<div id="modal-proyectos" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <div class="container position-relative">
        	<div class="__fly_button hambuerguer moder_ uk-modal-close-full uk-close-large">
				<i class="ico-times"></i>
			</div>
		</div>
		<div class="__conten_scroll__ position-relative">
			<div class="container">
		        <div class="__content_modal pt-5">

		        	<div class="__group_title">
						<div class="content__">
		            		<div>
		            			<div class="__title__">
			            			<span class="_top">
			            				Proyectos en ventas
			            			</span>
			            			<h1 class="center">
			            				Nuestros proyectos <br> en venta
			            			</h1>
			            		</div>
		            		</div>
		            	</div>
					</div>


		            <div class="row __row_c">
		            	<?php foreach ($proyectos_venta  as $key => $value): ?>
		            		<div class="col-12 col-md-4 mb-3">
			            		<div class="__content_slider">
				                	<div class="_picture_l">
				                		<img src="<?php echo $value['imagen'] ?>" alt="">
				                		<div class="__span_label">
				                			<span>
				                				<?php echo $value['estado'] ?>
				                			</span>
				                		</div>
				                	</div>
				                	<div class="_bottom_det">
				                		<div class="_left">
				                			<img src="<?php echo $value['imagen_escudo'] ?>" alt="">
				                		</div>
				                		<div class="_right">
				                			<span class="_title">
				                				<?php echo $value['nombre_lugar'] ?>
				                			</span>
				                			<div class="_middle">
				                				<?php echo $value['ubicacion'] ?>
				                			</div>
				                			<div class="_bottom">
				                				<?php echo $value['tipo'] ?>
				                			</div>
				                		</div>
				                	</div>
				                </div>
			            	</div>
		            	<?php endforeach ?>    

		            </div>
		        </div>
		    </div>
        </div>
    </div>
</div>