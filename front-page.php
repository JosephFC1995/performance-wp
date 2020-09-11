<?php get_header();?>
	<?php $page = get_page_by_path( 'inicio','','page' ); ?>
	<?php $__id_from_page = $page->ID; ?>
	 <!-- <pre>
		<?php var_dump(get_field('general', $page->ID)) ?>
	</pre>  -->
	<?php include 'includes/menu.php'; ?>
	<?php include 'includes/slider.php'; ?>
	<?php include 'includes/quienes_somos.php'; ?>
	<?php include 'includes/que_hacemos.php'; ?>
	<?php include 'includes/nuestros_proyectos.php'; ?>
	<?php include 'includes/casos_exito.php'; ?>
	<?php include 'includes/equipo.php'; ?>
	<?php include 'includes/contacto.php'; ?>
<?php get_footer(); ?>