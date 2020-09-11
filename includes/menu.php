<?php $general = get_field('general', $__id_from_page) ?>

<div class="menu" id="menu">
	<div class="container">
		<div class="__content_menu">
			<div class="_separate__menu">
				<div class="_left__">
					<img src="<?php echo get_template_directory_uri() . '/assets/LOGOPERFORM-red.png'; ?>" alt="" class="logo desktop d-none d-md-block">
					<img src="<?php echo get_template_directory_uri() . '/assets/LOGOPERFORM_FOOTER.png'; ?>" alt="" class="logo mobile d-block d-md-none">
				</div>
				<div class="_rigth__">
					<div class="__fly_button hambuerguer __menu__ a" id="_menu_floating">
						<span>
							<div></div>
							<div></div>
							<div></div>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="__menu___fixed__" id="menu__fixed" uk-sticky="top: 300; animation: uk-animation-slide-top; cls-active: stiky">
	<div class="container">
		<div class="__content_menu">
			<div class="_separate__menu">
				<div class="_left__">
					<img src="<?php echo get_template_directory_uri() . '/assets/logo-performance-red.png'; ?>" alt="" class="logo desktop d-md-block">
				</div>
				<div class="_rigth__">
					<div class="__button_fixed hambuerguer __menu__ ___fxx" id="_menu_floating">
						<span>
							<div></div>
							<div></div>
							<div></div>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="__menu_floating__" id="menu__performance">
	<div class="container position-relative">
		<div class="__content_menu">
			<div class="_separate__menu">
				<div class="_left__">
					<img src="<?php echo get_template_directory_uri() . '/assets/LOGOPERFORM-white.png'; ?>" alt="" class="logo desktop d-none d-md-block">
					<img src="<?php echo get_template_directory_uri() . '/assets/LOGOPERFORM_FOOTER.png'; ?>" alt="" class="logo mobile d-block d-md-none">
				</div>
				<div class="_rigth__">
					<div class="__fly_button hambuerguer __menu__ a d-none" id="_menu_floating__close">
						<i class="ico-times"></i>
					</div>
					<div class="__fly_button hambuerguer __menu__ b d-none" id="_menu_floating__close_fixed">
						<i class="ico-times"></i>
					</div>
				</div>
			</div>
		</div>

		<div class="__content_links__">
			<ul class="__link_menu__con">
				<li>
					<a href="#slider_page" uk-scroll>
						<span>
							Inicio
						</span>
					</a>
				</li>
				<li>
					<a href="#quienes_somos" uk-scroll>
						<span>
							Quienes somos
						</span>
					</a>
				</li>
				<li>
					<a href="#que_hacemos" uk-scroll>
						<span>
							Qué hacemos
						</span>
					</a>
				</li>
				<li>
					<a href="#casos_exito" uk-scroll>
						<span>
							Caso de éxito
						</span>
					</a>
				</li>
				<li>
					<a href="#contacto" uk-scroll>
						<span>
							Contacto
						</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="_floating_menu__con">
			<div class="__con">
				<span class="top">
					Contáctenos
				</span>
				<span class="middle">
					<?php echo $general['telefono']; ?>
				</span>
				<span class="bottom">
					<?php echo $general['ubicacion']; ?>
				</span>
			</div>
		</div>

		<div class="redes__ d-block d-md-none">
			<div class="_four_more">
				<div class="__redes">
					<?php foreach ($general['redes_sociales']  as $key => $value): ?>
						<?php if ($value['icono'] == 'ico-whatsapp'): ?>
							<div class="_red" >
								<a href="<?php echo $value['link'] ?>" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
									  <path fill="#FFF" fill-rule="evenodd" d="M23,11.2041282 C23,17.391561 17.9450549,22.4075064 11.7081227,22.4075064 C9.72889425,22.4075064 7.86966446,21.9012619 6.25118205,21.0147716 L0,23 L2.03772785,16.9873154 C1.01023902,15.2998337 0.418495451,13.3183552 0.418495451,11.2033782 C0.419245443,5.01594548 5.47269051,0 11.7096227,0 C17.9458049,0.0014999837 23,5.01669547 23,11.2041282 Z M11.4992492,2 C6.26100173,2 2,6.26206402 2,11.501513 C2,13.5803472 2.67251322,15.5048575 3.809631,17.0707915 L2.62372599,20.5983039 L6.27301089,19.429527 C7.77415647,20.4220417 9.57027716,21 11.4992492,21 C16.7374967,21 21,16.7386925 21,11.4992435 C21.0015007,6.26206402 16.7382473,2 11.4992492,2 Z M16.9602035,13.3947015 C16.8912668,13.2858074 16.710858,13.2194614 16.4409781,13.0867692 C16.1718316,12.9540771 14.8392997,12.3158568 14.5921542,12.2293185 C14.3428087,12.1406167 14.1623998,12.0959052 13.981991,12.3605683 C13.8037823,12.6252314 13.2845568,13.2194614 13.1254157,13.396865 C12.9677413,13.5735474 12.8100669,13.5959032 12.5394537,13.4653745 C12.2688404,13.3312401 11.396131,13.0543174 10.3620803,12.1550397 C9.55757427,11.4540791 9.01414765,10.5908592 8.85720662,10.3261961 C8.6980655,10.0622541 8.8410725,9.91946584 8.97527908,9.78821602 C9.096285,9.6692258 9.24589233,9.47956259 9.38156564,9.32451472 C9.51723896,9.17090916 9.56197448,9.06201508 9.6521789,8.88533263 C9.74091658,8.70865017 9.69618105,8.55504461 9.62944445,8.42163133 C9.56197448,8.28893921 9.02148134,6.99086404 8.79487024,6.46225899 C8.56972588,5.93437509 8.34458151,6.02163459 8.18617375,6.02163459 C8.02849936,6.02163459 7.84809053,6 7.66768169,6 C7.48727285,6 7.19392515,6.06418261 6.94677971,6.32884571 C6.69963427,6.59350881 6,7.2317291 6,8.53124657 C6,9.83220634 6.96878079,11.0862912 7.1044541,11.2622525 C7.24086078,11.4374926 8.97747918,14.1915754 11.7283473,15.2487855 C14.4806821,16.3052745 14.4806821,15.9526307 14.9764397,15.9079193 C15.4736641,15.8632078 16.5781182,15.269699 16.8025292,14.6538344 C17.0284069,14.0350853 17.0284069,13.5050379 16.9602035,13.3947015 Z"/>
									</svg>
								</a>
							</div>
						<?php elseif ($value['icono'] == 'ico-instagram'): ?>
						<div class="_red">
							<a href="<?php echo $value['link'] ?>" target="_blank">
								<svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23">
								  <path fill="#FFF" fill-rule="evenodd" d="M15.8125,0 C19.7814375,0 23,3.2185625 23,7.1875 L23,7.1875 L23,15.8125 C23,19.7814375 19.7814375,23 15.8125,23 L15.8125,23 L7.1875,23 C3.2185625,23 0,19.7814375 0,15.8125 L0,15.8125 L0,7.1875 C0,3.2185625 3.2185625,0 7.1875,0 L7.1875,0 Z M15.8125,2.15625 L7.1875,2.15625 C4.413125,2.15625 2.15625,4.413125 2.15625,7.1875 L2.15625,7.1875 L2.15625,15.8125 C2.15625,18.586875 4.413125,20.84375 7.1875,20.84375 L7.1875,20.84375 L15.8125,20.84375 C18.586875,20.84375 20.84375,18.586875 20.84375,15.8125 L20.84375,15.8125 L20.84375,7.1875 C20.84375,4.413125 18.586875,2.15625 15.8125,2.15625 L15.8125,2.15625 Z M10.925,5.75 C14.1004375,5.75 16.675,8.3245625 16.675,11.5 C16.675,14.6754375 14.1004375,17.25 10.925,17.25 C7.7495625,17.25 5.175,14.6754375 5.175,11.5 C5.175,8.3245625 7.7495625,5.75 10.925,5.75 Z M10.925,7.90625 C8.944125,7.90625 7.33125,9.5176875 7.33125,11.5 C7.33125,13.480875 8.944125,15.09375 10.925,15.09375 C12.905875,15.09375 14.51875,13.480875 14.51875,11.5 C14.51875,9.5176875 12.905875,7.90625 10.925,7.90625 Z M17.5375,4.6 C18.0138456,4.6 18.4,4.9861544 18.4,5.4625 C18.4,5.9388456 18.0138456,6.325 17.5375,6.325 C17.0611544,6.325 16.675,5.9388456 16.675,5.4625 C16.675,4.9861544 17.0611544,4.6 17.5375,4.6 Z"/>
								</svg>

							</a>
						</div>
						<?php elseif ($value['icono'] == 'facebook-ico'): ?>
							<div class="_red">
								<a href="<?php echo $value['link'] ?>" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="12" height="24" viewBox="0 0 12 24">
									  <g fill="none" fill-rule="evenodd" transform="translate(-7)">
									    <rect width="22.957" height="24" x=".835"/>
									    <path fill="#FFF" d="M14.2695652,8.25 L14.2695652,5.25 C14.2695652,4.422 14.9123478,3.75 15.7043478,3.75 L17.1391304,3.75 L17.1391304,0 L14.2695652,0 C11.8921304,0 9.96521739,2.0145 9.96521739,4.5 L9.96521739,8.25 L7.09565217,8.25 L7.09565217,12 L9.96521739,12 L9.96521739,24 L14.2695652,24 L14.2695652,12 L17.1391304,12 L18.573913,8.25 L14.2695652,8.25 Z"/>
									  </g>
									</svg>

								</a>
							</div>
						<?php elseif ($value['icono'] == 'linkedin'): ?>
							<div class="_red">
								<a href="<?php echo $value['link'] ?>" target="_blank">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
									  <path fill="#FFF" fill-rule="evenodd" d="M5.24571429,6.99428571 L5.24571429,23.3142857 L1.64313008e-14,23.3142857 L1.64313008e-14,6.99428571 L5.24571429,6.99428571 Z M12.3027366,6.99428571 L12.3027366,10.114373 C12.9496021,9.24496208 14.912453,6.99428571 18.0073184,6.99428571 C18.3693257,6.99428571 18.6779221,7.0343439 18.959813,7.09072208 C19.0325112,7.10259117 19.1037257,7.1159439 19.1749403,7.1322639 C19.2342857,7.1485839 19.2876966,7.16787117 19.3440748,7.18567481 C21.6244239,7.78061299 23.3142857,9.83544935 23.3142857,12.301253 L23.3142857,12.301253 L23.3142857,23.3142857 L18.0073184,23.3142857 L18.0073184,23.3142857 L18.0073184,12.9288312 C16.3144894,8.82509299 12.3027366,14.4124675 12.3027366,14.4124675 L12.3027366,14.4124675 L12.3027366,23.3142857 L6.99428571,23.3142857 L6.99428571,6.99428571 L12.3027366,6.99428571 Z M2.62285714,1.64313008e-14 C4.07142114,1.64313008e-14 5.24571429,1.17429314 5.24571429,2.62285714 C5.24571429,4.07142114 4.07142114,5.24571429 2.62285714,5.24571429 C1.17429314,5.24571429 1.64313008e-14,4.07142114 1.64313008e-14,2.62285714 C1.64313008e-14,1.17429314 1.17429314,1.64313008e-14 2.62285714,1.64313008e-14 Z"/>
									</svg>

								</a>
							</div>
						<?php endif; ?>

					 <?php endforeach ?>
				</div>
				<div class="__copyrate">
					<span>
						Todos los derechos reservados
					</span>
				</div>
			</div>
		</div>
		</div>
	</div>
</div>

<div class="__whatsapp _ico">
	<a href="#" target="_blank">
		<svg xmlns="http://www.w3.org/2000/svg" width="57" height="57" viewBox="0 0 57 57">
		  <g fill="none">
		    <path fill="#E5E5E5" d="M1.21812791,57 C0.896663878,57 0.583935285,56.8734512 0.352009555,56.6399231 C0.0462691988,56.3320312 -0.0716591253,55.8849792 0.0432118802,55.4670639 L3.76494417,41.9354782 C1.44786992,37.7637177 0.226219283,33.0444488 0.227966258,28.2538604 C0.234517863,12.6744461 12.9681623,0 28.6142009,0 C36.2031106,0.00304413398 43.3338467,2.94628146 48.6934731,8.28655246 C54.052226,13.6272583 57.0021826,20.7266006 57,28.2764741 C56.9930104,43.8563232 44.259366,56.5316391 28.6142009,56.5316391 C28.6142009,56.5316391 28.6024081,56.5316391 28.6019713,56.5316391 C24.0320283,56.5298996 19.5013945,55.4209671 15.4673704,53.3205185 L1.52692558,56.9604263 C1.42472104,56.9869537 1.3207693,57 1.21812791,57 Z"/>
		    <path fill="#FFF" d="M1,56 L4.81425617,42.1344606 C2.46146871,38.0763064 1.22391038,33.4729629 1.22563942,28.7568808 C1.23169099,14.0032034 13.2925904,2 28.1130331,2 C35.3049636,2.00301212 42.0555573,4.7896314 47.1320106,9.84737115 C52.2080318,14.905111 55.0025882,21.6281097 55,28.7783958 C54.9935108,43.531643 42.9308824,55.5365675 28.1130331,55.5365675 C28.1121687,55.5365675 28.1134654,55.5365675 28.1130331,55.5365675 L28.1013622,55.5365675 C23.6015427,55.5348462 19.1803945,54.4113344 15.2533186,52.2792006 L1,56 Z M15.9133785,47.4353196 L16.7299164,47.9168246 C20.1603263,49.9435351 24.0934539,51.0154111 28.1043879,51.0175626 L28.1130331,51.0175626 C40.42983,51.0175626 50.454788,41.0397788 50.4599766,28.7766746 C50.4621364,22.8338088 48.1400394,17.2455098 43.9207562,13.0419143 C39.7010408,8.83831896 34.0907472,6.52201696 28.1212461,6.51943522 C15.7945073,6.51943522 5.76998154,16.4959281 5.76522477,28.758602 C5.76349762,32.9609065 6.94443007,37.0530543 9.18180427,40.5944188 L9.71348328,41.4360846 L7.45536063,49.6427558 L15.9133785,47.4353196 Z"/>
		    <path fill="#64B161" d="M2,55 L5.74390112,41.390615 C3.43401215,37.4078498 2.2197383,32.8891787 2.22105675,28.2611391 C2.22676992,13.780743 14.0649509,2 28.6103077,2 C35.6700597,2.00306235 42.2960482,4.73815108 47.2775153,9.70217091 C52.260301,14.6661907 55.0026349,21.2646142 55,28.2817005 C54.9938454,42.7625341 43.155225,54.5445894 28.611626,54.5445894 C28.6103077,54.5445894 28.6120655,54.5445894 28.611626,54.5445894 L28.5997603,54.5445894 C24.1834599,54.5428395 19.8436285,53.4395295 15.9894189,51.3484028 L2,55 Z"/>
		    <g fill="#FFF" transform="translate(1 1)">
		      <path d="M0.100611871,54.9000016 L3.97746514,40.829046 C1.58606526,36.7107707 0.328196922,32.0392293 0.329954335,27.2532791 C0.336105225,12.2810277 12.5949403,0.0999983841 27.6586065,0.0999983841 C34.9685663,0.103055132 41.8299463,2.93095783 46.9897111,8.06362736 C52.1490366,13.196297 54.9894555,20.0188961 54.9868212,27.2751127 C54.9802291,42.2469274 42.7196367,54.4297034 27.6586065,54.4297034 C27.6577279,54.4297034 27.6590458,54.4297034 27.6586065,54.4297034 L27.646744,54.4297034 C23.0730764,54.4279566 18.5793712,53.2878001 14.5878467,51.124079 L0.100611871,54.9000016 Z M15.2587391,46.2084366 L16.0886775,46.697075 C19.5753851,48.753811 23.5730605,49.8415667 27.6498194,49.84375 L27.6586065,49.84375 C40.1775387,49.84375 50.3670198,39.7181466 50.3722935,27.273366 C50.3744888,21.2424575 48.014283,15.5713685 43.7257557,11.3054973 C39.436789,7.03962618 33.734423,4.68900846 27.6669542,4.68638847 C15.137917,4.68638847 4.94887526,14.8106818 4.94404041,27.2550258 C4.94228493,31.5195868 6.14259807,35.6723593 8.4166906,39.2661887 L8.95709518,40.1203236 L6.66191369,48.4485756 L15.2587391,46.2084366 Z"/>
		      <path d="M20.8284206,15.9014942 C20.3170134,14.7713812 19.7783662,14.7486741 19.2915628,14.7290237 C18.8935088,14.7119935 18.4378995,14.7128592 17.9831688,14.7128592 C17.5279988,14.7128592 16.7881279,14.8831698 16.1624888,15.5621984 C15.5364103,16.2412268 13.7719676,17.8831221 13.7719676,21.2223704 C13.7719676,24.5620554 16.2191654,27.7886417 16.5605429,28.2419096 C16.9019204,28.6947409 21.2844692,35.7662442 28.2249328,38.4867251 C33.993202,40.7478245 35.1667145,40.2980501 36.4188714,40.1849514 C37.6710283,40.0718528 40.4587248,38.5430561 41.0276873,36.9583651 C41.5970891,35.3736741 41.5970891,34.015617 41.4261806,33.7313422 C41.2552722,33.4488139 40.8001022,33.2789475 40.1173473,32.9396516 C39.4345923,32.6003557 36.077494,30.9580237 35.4514155,30.7318264 C34.8253371,30.5051924 34.3701671,30.3925305 33.9149971,31.0719957 C33.4593878,31.7505876 32.1518724,33.2789475 31.753379,33.7313422 C31.3548857,34.1850467 30.9563922,34.2418144 30.2736372,33.9020817 C29.5908822,33.5619124 27.3914797,32.8457666 24.7826,30.5335763 C22.7527879,28.7349149 21.3820057,26.5131161 20.9835123,25.8336509 C20.5854583,25.1550591 20.9769219,24.8196933 21.2835906,24.4489567 C21.8358576,23.7812818 22.7624536,22.5808642 22.9900387,22.1284696 C23.2176236,21.6752016 23.1038311,21.279138 22.9333621,20.9394055 C22.7624536,20.6001096 21.4351674,17.243831 20.8284206,15.9014942 Z"/>
		    </g>
		  </g>
		</svg>

	</a>
</div>