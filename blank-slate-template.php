<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>

<?php while (have_posts()): the_post(); ?>
<?php echo eval('?>'.get_the_content().'<?php '); ?>
<?php endwhile; ?>

<?php wp_footer(); ?>
</body>
</html>
