<?php get_header(); ?>

<div class="content-and-sidebar-wrapper">

  <div class="posts-wrapper">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <article class="post">

        <h1 class="post-heading">
          <?php the_title(); ?>
        </h1>

        <?php the_content(); ?>

      </article>

    <?php endwhile; ?>
    <?php endif; ?>


    <?php if (get_post_meta(get_the_ID(), '1', true)) { ?>
      <div class="you-can-download">
        Also, you can download <a class="you-can-download__link" href="//savesforgames.com<?php echo (get_post_meta(get_the_ID(), '1', true)) ?>" target="_blank" rel="nofollow noopener">savegame</a> for this game
      </div>
    <?php } else {} ?>

    <div class="google-ads-and-comments-wrapper">
      <!-- под новостью trainersforgames -->
			<ins class="adsbygoogle"
			     style="display:inline-block;width:468px;height:60px;"
			     data-ad-client="ca-pub-3398097190333973"
			     data-ad-slot="2007737938"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>

      <div class="social-network-like-buttons">
        <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
      </div>

      <div class="leave-a-comment">Comments:</div>
      <div class="fb-comments" data-href="<?php the_permalink() ?>" data-width="500" data-numposts="5" data-colorscheme="light"></div>
    </div>

    <div id="fb-root"></div>
    <script>
  	(function(d, s, id){
  	var js, fjs=d.getElementsByTagName(s)[0];
  	if (d.getElementById(id)) return;
  	js=d.createElement(s);
  	js.id=id;
  	js.async=true; js.src="//connect.facebook.net/en_US/all.js#xfbml=1&appId=204938163503477";
  	fjs.parentNode.insertBefore(js, fjs);
  	}
  	(document, 'script', 'facebook-jssdk'));
  	</script>

  </div>

  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
