<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="mb-8">
        <h2 class="text-xl font-bold mb-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="prose">
            <?php the_excerpt(); ?>
        </div>
    </article>
<?php endwhile; endif; ?>

<?php get_footer(); ?>