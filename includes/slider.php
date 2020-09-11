<?php $slider = get_field('slider', $__id_from_page) ?>

<div class="slider_page" id="slider_page">
	<div class="__content_slider h-100">
		<div class="columnas__two h-100">
			<!-- <div class="left_column__ h-100 d-none d-md-flex">
				<div class="caption__contactar">
					<h1>
						<?php jump_words('Una_agencia_innmobiliaria distinta_pensada_para_crecer junto_a_ti.'); ?>
					</h1>
					<div class="__group_buttons">
						<a href="#contacto" uk-scroll class="btn-performance">
							<span>
								Contactar 
							</span>
						</a>
					</div>
				</div>
				<a class="__more_conten" href="#quienes_somos" uk-scroll>
					<span>
						<span class="__text">
							Cononcenos
						</span>
					   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
						  <defs>
						    <path id="arrow-downç-a" d="M7.295,0.705 C6.9055372,1.0944628 6.90525458,1.72581956 7.29436856,2.11563087 L12.17,7 L12.17,7 L1,7 C0.44771525,7 -6.76353751e-17,7.44771525 0,8 C6.76353751e-17,8.55228475 0.44771525,9 1,9 L12.17,9 L12.17,9 L7.29436856,13.8843691 C6.90525458,14.2741804 6.9055372,14.9055372 7.295,15.295 C7.68436075,15.6843607 8.31563925,15.6843607 8.705,15.295 L16,8 L16,8 L8.705,0.705 C8.31563925,0.315639251 7.68436075,0.315639251 7.295,0.705 Z"/>
						  </defs>
						  <use fill="#CA423B" fill-rule="evenodd" opacity=".288" transform="rotate(90 8 8)" xlink:href="#arrow-downç-a"/>
						</svg>

					</span>
				</a>
			</div> -->
			<div class="right_column__ h-100">
				<div class="slider__show h-100">
					<div class="uk-position-relative uk-visible-toggle uk-light h-100" tabindex="-1" uk-slideshow="min-height: 100vh; max-height: 100vh; animation: fade; autoplay: true; autoplay-interval: 4500">

					    <ul class="uk-slideshow-items h-100 __content_slider_in">
					    	<?php foreach ($slider  as $key => $sli): ?>
					    	
					        <li>
					        	<div class="___content___kl">
					        		<div class="__left__ d-none d-md-flex">
						        		<div class="container position-relative">
											<div class="caption__contactar">
												<h1>
													<?php jump_words($sli['titulo']); ?>
												</h1>
												<div class="__group_buttons">
													<a href="#contacto" uk-scroll class="btn-performance">
														<span>
															Contactar 
														</span>
													</a>
												</div>
											</div>
										</div>
										<a class="__more_conten" href="#quienes_somos" uk-scroll>
											<span>
												<span class="__text">
													Cononcenos
												</span>
											   <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
												  <defs>
												    <path id="arrow-downç-a" d="M7.295,0.705 C6.9055372,1.0944628 6.90525458,1.72581956 7.29436856,2.11563087 L12.17,7 L12.17,7 L1,7 C0.44771525,7 -6.76353751e-17,7.44771525 0,8 C6.76353751e-17,8.55228475 0.44771525,9 1,9 L12.17,9 L12.17,9 L7.29436856,13.8843691 C6.90525458,14.2741804 6.9055372,14.9055372 7.295,15.295 C7.68436075,15.6843607 8.31563925,15.6843607 8.705,15.295 L16,8 L16,8 L8.705,0.705 C8.31563925,0.315639251 7.68436075,0.315639251 7.295,0.705 Z"/>
												  </defs>
												  <use fill="#CA423B" fill-rule="evenodd" opacity=".288" transform="rotate(90 8 8)" xlink:href="#arrow-downç-a"/>
												</svg>

											</span>
										</a>
						        	</div>
						            <div class="__right__">
					            		<img src="<?php echo $sli['imagen'] ?>" alt="" uk-cover />
							            <div class="__overl d-md-none"></div>
							            <div class="caption__contactar d-block d-md-none">
											<h1>
												<?php jump_words($sli['titulo']); ?>
											</h1>
											<div class="__group_buttons">
												<a href="#contacto" uk-scroll class="btn-performance white">
													<span>
														Contactar
													</span>
												</a>
											</div>
										</div>
										<a class="__more_conten d-block d-md-none" href="#quienes_somos" uk-scroll>
											<span>
												<span class="__text">
													Cononcenos
												</span>
											    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
												  <defs>
												    <path id="arrow-downç-a" d="M7.295,0.705 C6.9055372,1.0944628 6.90525458,1.72581956 7.29436856,2.11563087 L12.17,7 L12.17,7 L1,7 C0.44771525,7 -6.76353751e-17,7.44771525 0,8 C6.76353751e-17,8.55228475 0.44771525,9 1,9 L12.17,9 L12.17,9 L7.29436856,13.8843691 C6.90525458,14.2741804 6.9055372,14.9055372 7.295,15.295 C7.68436075,15.6843607 8.31563925,15.6843607 8.705,15.295 L16,8 L16,8 L8.705,0.705 C8.31563925,0.315639251 7.68436075,0.315639251 7.295,0.705 Z"/>
												  </defs>
												  <use fill="#CA423B" fill-rule="evenodd" opacity=".288" transform="rotate(90 8 8)" xlink:href="#arrow-downç-a"/>
												</svg>
											</span>
										</a>
						            </div>
					        	</div>
					        </li>

					        <?php endforeach ?>
					       
					    </ul>

					   <div class="__group_arrow_slider__">
						   	 <a class="uk-position-center-left uk-position-small arrows prev d-none d-md-flex" href="#" uk-slideshow-item="previous">
						    	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
								  <defs>
								    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
								  </defs>
								  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
								</svg>

						    </a>
						    <a class="uk-position-center-right uk-position-small arrows next d-none d-md-flex" href="#" uk-slideshow-item="next">
						    	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
								  <defs>
								    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
								  </defs>
								  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
								</svg>
						    </a>
					   </div>
						
						<div class="__triangle__content d-none d-md-block">
							<div class="triangle">
								
							</div>
						</div>
						<ul class="uk-slideshow-nav uk-dotnav"></ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>