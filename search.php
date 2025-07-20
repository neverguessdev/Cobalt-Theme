<?php get_header(); ?>
<main>
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
        </article>
    <?php endwhile; else: ?>
        <p>No results found.</p>
    <?php endif; ?>
</main>
<?php get_footer(); ?>

