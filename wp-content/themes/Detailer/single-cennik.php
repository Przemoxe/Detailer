
<?php get_header();?>

<section>
    <div class="banner">
        <img src="http://detailing.test/wp-content/uploads/2021/10/pexels-maria-geller-2127037-scaled.jpg" alt="">
    </div>
</section>

<section class="bg-dark">
    <div class="container-fluid text-light">
        <div class="row pb-5">
            <div class="col d-flex flex-column align-items-center">
                
                <div class="container-btn px-5 py-5 d-flex justify-content-center">
                   <a href="http://detailing.test/cennik/" class="btn_readmore_2 my-3 my-xl-0">Powrtót do Cennika</a>
                </div>
            </div>
        </div>
    </div>
    
</section>
<section class="bg-dark">
    <div class="container-fluid pb-5 text-light">
        <div class="row ">
            <div class="col task-description d-flex flex-column align-items-center">
                <h2 class="pb-5 text-uppercase text-center"><?php the_title(); ?></h1>
                <p class="h3">Wykonanie:</p>
                <?php the_content(); ?> 
                <p>cena: <?php the_field('cena') ?> zł</p>
            </div>
        </div>
    </div>
</section>
<section>
    <?php $images = get_field('galeria_single_cennik'); ?>

      <?php if($images):?>
        <div class="galeria_single_cennik">
          <div class="row">

            <?php foreach($images as $image): ?>

              <div class=" col-md-4 col-sm-6">

                <a href="<?php echo $image['sizes']['large']; ?>" title="<?php echo $image['caption']; ?>">
                   <img src="<?php echo $image['url']; ?> " style="z-index:0;">
                </a>
                 
              </div>

            <?php endforeach; ?>

          </div>

        </div>

      <?php endif; ?>
</section>




<?php get_footer();?>