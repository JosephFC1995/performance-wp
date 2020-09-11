<?php $equipo = get_field('equipo', $__id_from_page) ?>
<div class="equipo" id="equipo">
	<div class="container">
		<div class="__content_equipo">	

			<div class="__group_title">
				<div class="content__">
            		<div>
            			<div class="__title__">
	            			<span class="_top">
	            				Equipo
	            			</span>
	            			<h1 class="center">
	            				Dispuestos a crecer junto <br> a tu proyecto
	            			</h1>
	            		</div>
            		</div>
            	</div>
			</div>

			<div class="__group_buttons justify-content-start ml-0 mb-3">
			    	<a class="btn-performance alter  d-flex d-md-none"  href="#modal-equipo" uk-toggle>
			    		<span>
			    			Ver todo el equipo
			    		</span>
			    	</a>

			    </div>

			<div class="uk-position-relative uk-visible-toggle uk-light slider__content_general" tabindex="-1" uk-slider="autoplay: true; autoplay-interval: 3000">

			    <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-4@m uk-grid">
			    	<?php foreach ($equipo  as $key => $value): ?>
				        <li>
				            <div class="uk-panel">
				                <div class="__content_slider" href="#modal-equipo-<?php echo $key ?>" uk-toggle>
				                	<div class="_picture_l">
				                		<img src="<?php echo $value['imagen'] ?>" alt="">
				                	</div>
				                	<div class="_bottom_det">
				                		<div class="_full">
				                			<span class="_nombre">
				                				<?php echo $value['nombre'] ?>
				                			</span>
				                			<div class="_cargo">
				                				<?php echo $value['cargo'] ?>
				                			</div>
				                		</div>
				                	</div>
				                </div>
				            </div>
				        </li>
				    <?php endforeach ?>            

			    </ul>

			    <ul class="uk-slider-nav uk-dotnav d-flex d-md-none"></ul>

			    <div class="__group_buttons mt-3">
			    	<a class="btn-performance alter  d-none d-md-flex"  href="#modal-equipo" uk-toggle>
			    		<span>
			    			Ver todo el equipo
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
<div id="modal-equipo" class="uk-modal-full" uk-modal>
    <div class="uk-modal-dialog">
        <div class="container position-relative">
        	<div class="__fly_button hambuerguer moder_ uk-modal-close-full uk-close-large">
				<i class="ico-times"></i>
			</div>
		</div>

		<div class="__conten_scroll__ position-relative">
			<div class="container">
		        <div class="__content_modal pt-5" >

		        	<div class="__group_title">
						<div class="content__">
		            		<div>
		            			<div class="__title__">
			            			<span class="_top">
			            				Equipo
			            			</span>
			            			<h1 class="center">
			            				Dispuestos a crecer junto <br> a tu proyecto
			            			</h1>
			            		</div>
		            		</div>
		            	</div>
					</div>


		            <div class="row __row_c">

		            	<?php foreach ($equipo  as $key => $value): ?>
		            		<div class="col-12 col-md-3">
			            		 <div class="__content_slider equipo" href="#modal-equipo-<?php echo $key ?>" uk-toggle>
				                	<div class="_picture_l">
				                		<img src="<?php echo $value['imagen'] ?>" alt="">
				                	</div>
				                	<div class="_bottom_det">
				                		<div class="_full">
				                			<span class="_nombre">
				                				<?php echo $value['nombre'] ?>
				                			</span>
				                			<div class="_cargo">
				                				<?php echo $value['cargo'] ?>
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


<!-- Modal Equipo -->
<?php foreach ($equipo  as $key => $value): ?>
	<div id="modal-equipo-<?php echo $key ?>" class="uk-modal-full casos_exito equipo_detalle p-0" uk-modal="stack: true">
		<div class="uk-modal-dialog h-100">
	        <div class="container position-relative">
				<div class="__fly_button hambuerguer moder_ uk-modal-close-full uk-close-large">
					<i class="ico-times"></i>
				</div>
	        </div>
			
			<div class="__conten_scroll__ position-relative d-block d-md-flex justify-content-center align-items-center">
				<div class="container">
			       <div class="container __conta">
			       		
			       		<div class="__content___build">
			        	
				        	  <div class="__content_separate uk-position-relative">
					            	<div class="picture__">
					            		<div class="content__picture">
					            			<div class="__pic">
					            				<img src="<?php echo $value['imagen'] ?>" alt="">
					            			</div>
					            		</div>
					            	</div>
					            	<div class="content__">
					            		<div>
					            			<div class="__title__">
						            			<span class="_top">
						            				Equipo
						            			</span>
						            			<h1 class="center">
						            				<?php jump_words($value['nombre']); ?>
						            			</h1>
						            			<div class="_cargo">
					                				<?php echo $value['cargo'] ?>
					                			</div>
						            		</div>
						            		<div class="_detalle__e">
						            			<?php echo $value['detalle'] ?>
						            		</div>
					            		</div>
					            	</div>
					          </div>

				        </div>

			       </div>

			    </div>

			</div>

	    </div>
	</div>
<?php endforeach ?>     