<?php get_header(); ?>
<?php $page_desc = apply_filters('the_content', get_the_content()); ?>
<main>


	<div class="container">

		<p><?php echo $page_desc; ?></p>

	</div>

</main>

<?php get_footer(); ?>