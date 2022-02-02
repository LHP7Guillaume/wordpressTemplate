<?php get_header(); ?>
<h1>Home</h1>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <body class="single is-preload">
            <div id="wrapper">


                <article class="post" style="width:80rem; margin:auto;">
                    <header>
                        <div class="title">
                            <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                            <p><?php the_category(); ?></p>
                        </div>
                        <div class="meta">
                            <time class="published" datetime=""><?php the_time('j F Y à H:i'); ?></time>
                            <span class="name"><?php the_author(); ?></span>
                        </div>
                    </header>
                    <a href="<?php the_permalink() ?>" class="image featured" style="width:50rem; height:auto; text-align:center"><img src="<?= get_the_post_thumbnail_url(); ?>" alt="" /></a>
                    <p><?php the_excerpt(); ?></p>
                    <footer>
                        <ul class="actions">
                            <li><a href="<?php the_permalink() ?>" class="button large">Lire la suite</a></li>
                        </ul>
                        <ul class="stats">


                            <li><a href="#" class="icon solid fa-comment"><?php comments_number(); ?></a></li>
                        </ul>
                    </footer>
                </article>

            </div>
            </div>
    <?php endwhile;
endif; ?>

    <div class="m-5 text-center">
        <?php wp_pagenavi(); ?>
    </div>
    <?php get_footer(); ?>