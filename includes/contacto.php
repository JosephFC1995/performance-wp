<?php $contacto = get_field('contacto', $__id_from_page) ?>


<div class="contacto" id="contacto" style="background-image: url(<?php echo ($contacto['imagen_mapa']) ? $contacto['imagen_mapa'] : ''; ?>);">
	<div class="container">
		<div class="__content_contacto">	
			<div class="__group_title">
				<div class="content__">
            		<div>
            			<div class="__title__">
	            			<h1 class="center">
	            				¡construyamos algo <br>
	            				Increíble juntos!
	            			</h1>
	            		</div>
            		</div>
            	</div>
			</div>

			<div class="__form_content_">
				<div class="form_custom position-relative">
	                <div class="loading_e_sp contacto_f_l">
	                    <div class="lds-ellipsis">
	                        <div>
	                        </div>
	                        <div>
	                        </div>
	                        <div>
	                        </div>
	                        <div>
	                        </div>
	                    </div>
	                </div>
	                <div class="form_content">
	                    <form action="" class="form_action_contact" novalidate name="form_contacto" id="form_contacto">
	                        <div class="row">
	                            <div class="col-md-12">
	                                <div class="field">
	                                    <input id="nombres" name="nombres" placeholder=" " required="" type="text">
	                                       
	                                    </input>
	                                     <label data_form="form_action_contact" for="nombres">
	                                            Nombres completo *
	                                        </label>
	                                </div>
	                            </div>

	                            <div class="col-md-12">
	                                <div class="field">
	                                    <input id="apellidos" name="apellidos" placeholder=" " required="" type="text">
	                                       
	                                    </input>
	                                     <label data_form="form_action_contact" for="apellidos">
	                                            Apellidos *
	                                        </label>
	                                </div>
	                            </div>
	                            <div class="col-md-12">
	                                <div class="field">
	                                    <input id="correo" name="correo" placeholder=" " required="" type="email">
	                                        
	                                    </input>
	                                    <label data_form="form_action_contact" for="correo">
	                                            Correo *
	                                        </label>
	                                </div>
	                            </div>
	                            <div class="col-md-12">
	                                <div class="field">
	                                    <input id="telefono" maxlength="10" name="telefono" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="javascript: return event.keyCode == 69 ? false : true" placeholder=" " required="" type="number">
	                                        
	                                    </input>
	                                    <label data_form="form_action_contact" for="telefono">
	                                            Celular *
	                                        </label>
	                                </div>
	                            </div>

	                             <?php wp_nonce_field('ajax-contactar-nonce', 'security');?>

                               
                                <div class="col-md-6">
                                	<div class="__group_buttons mt-3">
	                                    <button  class="btn-performance alter" type="submit">
	                                        Enviar
	                                    </button>
								    </div>
                                </div>
	                        </div>
	                    </form>
	                </div>
	            </div>
	            
			</div>

		</div>

	</div>

	<div class="__picture_contacto d-block d-md-none mt-3">
    	<img src="<?php echo ($contacto['imagen_mapa']) ? $contacto['imagen_mapa'] : ''; ?>" alt="">
    </div>

</div>