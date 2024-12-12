<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="mb-8">
        <a href="<?php the_permalink(); ?>">
            <h2 class="text-xl font-bold mb-2 text-blue-600 hover:text-blue-800"><?php the_title(); ?></h2>
            <div class="prose">
                <?php the_excerpt(); ?>
            </div>
        </a>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>