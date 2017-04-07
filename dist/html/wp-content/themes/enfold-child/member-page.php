<?php
/*
Template Name: Member Page
*/

$id = pods_v('last', 'url');
$pod = pods('team_member', $id);

add_filter( 'wp_title', function($title) use($pod) {
	return $pod->field('member_name');
}, 100);

get_header();


?>
<style>
	/* Styles for member profile pages */

	.profile-container {
		display: flex;
	}

	.profile-sidebar {
		flex: 0 0 auto;
	}

	.profile-body {
		display: flex;
		flex-direction: column;
		flex-grow: 1;
	}

	.profile-header {
		display: flex;
	}

	.profile-buffer {
		flex: 1 0 auto;
	}

	.profile-image {
		padding: 15px 5px 0 15px;
	}

	.short-info {
		vertical-align: top;
		padding: 15px 0 5px 15px;
	}

	.profile-education {
		white-space: pre-wrap;
	}

	.bio {
		padding: 0 15px 15px 15px;
	}
</style>

<div class="profile-container">
	<div class="profile-sidebar">
		<?php dynamic_sidebar('people'); ?>
	</div>
	<div class="profile-body">
		<div class="profile-header">
			<div class="profile-buffer"></div>
			<div class="profile-image">
				<img src="<?php echo $pod->field('picture')['guid']; ?>" />
			</div>
			<div class="short-info">
				<a href="<?php if ($pod->field('website')) { echo $pod->field('website'); } ?>"><h3><?php echo $pod->field('member_name'); ?></h3><?php if ($pod->field('website')) { echo '</a>'; } ?>
				<?php 
				if ($pod->field('position')) {
					echo $pod->field('position').'<br />';
				}
				if ($pod->field('email')) {
					echo $pod->field('email').'<br />';
				}
				if ($pod->field('phone')) {
					echo $pod->field('phone').'<br />';
				}
				if ($pod->field('education')) {
					echo '<div class="profile-education">'.$pod->field('education').'</div>';
				}
				?>
			</div>
			<div class="profile-buffer"></div>
		</div>
		<div class="bio">
			<?php 
			if ($pod->field('bio')) {
				echo $pod->field('bio').'<br />';
			}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>