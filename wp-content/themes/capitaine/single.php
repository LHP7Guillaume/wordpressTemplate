<?php get_header(); ?>

<h1>Single</h1>

<!-- Main -->
<div id="main">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<!-- Post -->
			<article class="post" style="width:80rem; margin:auto;">
				<header>
					<div class="title">
						<h2><a href="#"><?php the_title(); ?></h2>
						<p><?php the_category(); ?></p>
					</div>
					<div class="meta">
						<time class="published"><?php the_time('j F Y à H:i'); ?></time>
						<span class="name"><?php the_author(); ?></span>
					</div>
				</header>
				<span class="image featured mb-4" style="width:50rem; height:auto; margin:auto;"><img src="<?= get_the_post_thumbnail_url(); ?>" alt="" /></span>

				<div class="myImage" >
					<?php the_content() ?>
				</div>

				<footer>
					<ul class="stats">
						<li><a href="blog-2">Retour Blog</a></li>

						<li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
					</ul>
				</footer>
			</article>

	<?php endwhile;
	endif; ?>


</div>


<?php get_footer(); ?>