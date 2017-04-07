<?php
/*
Template Name: Topic Page
*/

$url = split('/',$_SERVER['REQUEST_URI']);
$pod = pods((string) $url[1], (string) $url[2]."'");
$sidebar = $url[1];
add_filter( 'wp_title', function($title) use($pod) {
	return $pod->field('topic_title');
}, 100);
get_header();
?>

<title><?php echo $pod->field('topic_title'); ?></title>

<div class="topic-slider">
	<?php echo do_shortcode($pod->field('slide')); ?>
</div>
<div class="topic-body">
	<div class="topic-sidebar"><?php dynamic_sidebar($sidebar); ?></div>
	<div class="topic-text"><?php echo $pod->field('body'); ?></div>
	<div class="topic-images">
		<?php 
		if ($pod->field('images')) {
			echo do_shortcode($pod->field('images')); 
		}
		?>
	</div>
</div>
<div class="topic-cite">
	<?php 
		if ($pod->field('citations')) {
			echo do_shortcode($pod->field('citations')); 
		}
		?>
</div>

<?php get_footer(); ?>