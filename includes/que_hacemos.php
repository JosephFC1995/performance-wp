<?php $que_hacemos = get_field('que_hacemos', $__id_from_page) ?>

<div class="que_hacemos position-relative" id="que_hacemos">
	<div class="__trama quienes_somos_trama">
		<img src="<?php echo get_template_directory_uri() . '/assets/trama-quehacemos.png' ?>" alt="">
	</div>
	<div class="container">
		
		<div class="contennt_pro_e">
				
			<div class="content-tabs--e conte-filter_items">
                <ul class="uk-subnav uk-subnav-pill tabs_mayor mb-5" uk-switcher="animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium">
                	<?php foreach ($que_hacemos  as $key => $value): ?>
	                    <li class="col-animate_state_filter_links_2 animate_init_fadeOut animate__state">
	                        <a href="#">
	                            <?php echo $value['titulo_tab'] ?>
	                        </a>
	                    </li>
                   <?php endforeach ?>
                </ul>
                <ul class="uk-switcher uk-margin uk_tabs_contenes col-animate_state_content_tabs animate_init_fadeOut animate__state">
                	<!-- Fachada -->
                	<?php foreach ($que_hacemos  as $key => $value): ?>
		                <li class="__slider_custom_c">
		                     <div class="__content_separate uk-position-relative">
				            	<div class="content__">
				            		<div>
				            			<div class="__title__">
					            			<span class="_top">
					            				<?php echo $value['titulo'] ?>
					            			</span>
					            			<h1 class="center">
					            				<?php jump_words($value['titulo_medio']); ?>
					            			</h1>
					            		</div>
					            		<div class="_detalle__e">
					            			<?php echo $value['detalle'] ?>
					            		</div>
				            		</div>
				            	</div>
				            	<div class="picture__">
				            		<div class="content__picture">
				            			<div class="__pic">
				            				<img src="<?php echo $value['imagen'] ?>" alt="">
				            			</div>
				            		</div>
				            	</div>
				            </div>
		                </li>
                	<?php endforeach ?>
					<!-- Fin fachada -->
                </ul>

            </div>

		</div>

	</div>
</div>