<?php get_header(); ?>

<div class="content-and-sidebar-wrapper">

  <div role="main" class="posts-wrapper">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="post">

        <h2 class="post-heading">
          <a class="link link_size_big" href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php the_content('Read more'); ?>

      </article>

    <?php endwhile; ?>

      <div class="pagination">
        <?php
          /* Pagination */
          global $wp_query;
          $big = 999999999; // need an unlikely integer
          echo paginate_links( array(
          'base'     => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
          'format'   => '?paged=%#%',
          'current'  => max( 1, get_query_var('paged') ),
          'total'    => $wp_query->max_num_pages
          ) );
        ?>
      </div>

    <?php else : ?>

      <h2 style="color: var(--text-main);">Not Found</h2>
      <p style="color: var(--text-main);">Sorry, but you are looking for something that isn't here.</p>

    <?php endif; ?>

  </div>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
