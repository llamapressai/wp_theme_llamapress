<?php get_header(); ?>

<article class="max-w-4xl mx-auto px-4 py-8">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-3xl font-bold mb-4"><?php the_title(); ?></h1>
        
        <div class="mb-4 text-gray-600">
            Posted on <?php the_date(); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="hover:text-blue-600"><?php the_author(); ?></a>
        </div>

        <?php if (has_post_thumbnail()): ?>
            <div class="mb-6">
                <?php the_post_thumbnail('large', ['class' => 'w-full h-auto rounded']); ?>
            </div>
        <?php endif; ?>

        <div class="prose max-w-none">
            <?php the_content(); ?>
        </div>

        <div class="mt-8 pt-4 border-t">
            <?php
                // Display previous/next post navigation
                the_post_navigation(array(
                    'prev_text' => '← Previous: %title',
                    'next_text' => 'Next: %title →',
                    'class' => 'flex justify-between text-blue-600 hover:text-blue-800'
                ));
            ?>
        </div>
    <?php endwhile; endif; ?>
</article>

<?php get_footer(); ?>