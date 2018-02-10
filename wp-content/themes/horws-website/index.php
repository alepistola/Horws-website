<?php get_header(); ?>

<header>
  <img src="<?php bloginfo('template_url'); ?>/images/all.jpg" alt="Mountains" style="opacity: 0.90;">
  <div class="name fancy-font">
        <a class="nope" href="<?php bloginfo('template_url'); ?>/index.php">Horws</a>
  </div>
  <div class="titles2">
    <h1>Hello! <span>I'm horws</span></h1>
    <h2>These are some photos taken during my travels</h2><br>
    <h2><a class="nope" href=#Canazei>Canazei</a> - <a class="nope" href=#Riviera-del-conero>Riviera del conero</a> - <a class="nope" href=#Roma>Roma</a><h2>
  </div>
  <div class="social">
    <a class="instagram" target="_blank" href="https://www.instagram.com/__horws/?hl=ithttps://www.instagram.com/__horws/?hl=it">Instagram</a>
    <a class="foto" href="<?php bloginfo('template_url'); ?>/photos.php">Foto</a>
    <a class="mail" href="#mail">Mail to</a>
  </div>
</header>

<!--MODALL-->
<div id="myModal" class="modal">
  <span class="close">Close</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
<!--MODAL -->

<!-- instagrammmmm -->
<section class="instagram-wrap">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if(have_posts()) : ?>
          <?php while(have_posts()) : the_post(); ?>
            <div class="instagram-content">
              <a class="titleLink" href="<?php the_permalink(); ?>">
                <h3 id="Canazei"><?php the_title(); ?></h3>
              </a>
              <span class="descrizione">
                <?php the_excerpt(); ?>
              </span>

              <div style="text-align: right; position: static; margin-right: 20px;">
                See more about <a href="#<?php the_title(); ?>"><?php the_title(); ?></a>
              </div>

              </div>
          <?php endwhile; ?>
        <?php else : ?>
          <p> <?php __('No post found'); ?></p>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
