<?php $quienes_somos = get_field('quienes_somos', $__id_from_page) ?>

<div class="quienes_somos position-relative" id="quienes_somos">
	<div class="__trama quienes_somos_trama">
		<img src="<?php echo get_template_directory_uri() . '/assets/trama-quehacemos.png' ?>" alt="">
	</div>
	<div class="container">
		<div class="slider__show h-100">
			<div class="uk-position-relative uk-visible-toggle uk-light h-100" tabindex="-1" uk-slideshow="animation: fade; autoplay: true; autoplay-interval: 3000">

			    <ul class="uk-slideshow-items h-100">
			    	<?php foreach ($quienes_somos  as $key => $quie): ?>
			    		<?php if ($key == 0) {
			    			$titulo = $quie['titulo'];
			    			$medio = $quie['titulo_medio'];
			    			$detalle = $quie['detalle'];
			    		} ?>
				        <li>
				            <div class="__content_separate uk-position-relative">
				            	<div class="content__">
				            		<div>
				            			<div class="__title__">
					            			<span class="_top">
					            				<?php echo $titulo ?>
					            			</span>
					            			<h1 class="center">
					            				<?php jump_words($medio); ?>
					            			</h1>
					            		</div>
					            		<div class="_detalle__e">
					            			<?php echo $detalle ?>
					            		</div>
				            		</div>
				            	</div>
				            	<div class="picture__">
				            		<div class="content__picture">
				            			<div class="__pic">
				            				<img src="<?php echo $quie['imagen'] ?>" alt="">
				            			</div>
				            		</div>
				            	</div>
				            </div>
				        </li>
			        <?php endforeach ?>
			    </ul>

			  <div class="__conten_arrows">
				  	 <div class="content__arrow">
					   	<a class="uk-position-small arrows prev" href="#" uk-slideshow-item="previous">
					   		<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
							  <defs>
							    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
							  </defs>
							  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
							</svg>
					   	</a>
					    <a class=" uk-position-small arrows next" href="#" uk-slideshow-item="next">
					    	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12">
							  <defs>
							    <path id="ico-arrow-a" d="M8.705,6.705 C8.31551495,7.09448505 8.31517069,7.72585884 8.70423077,8.11576839 L12.58,12 L12.58,12 L8.70423077,15.8842316 C8.31517069,16.2741412 8.31551495,16.905515 8.705,17.295 C9.09436075,17.6843607 9.72563925,17.6843607 10.115,17.295 L15.41,12 L15.41,12 L10.115,6.705 C9.72563925,6.31563925 9.09436075,6.31563925 8.705,6.705 Z"/>
							  </defs>
							  <use fill-opacity=".7" fill-rule="evenodd" transform="translate(-8 -6)" xlink:href="#ico-arrow-a"/>
							</svg>
					    </a>
				   </div>
			  </div>
				<ul class="uk-slideshow-nav uk-dotnav"></ul>
			</div>
		</div>
	</div>
</div>