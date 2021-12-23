<?php
    /* Template Name: Galeria_template */
?>

<?php get_header();?>

<section >
    <div class="banner">
        <img src="http://detailing.test/wp-content/uploads/2021/10/pexels-maria-geller-2127037-scaled.jpg" alt="">
    </div>
</section>
<section style="background-color:#1a1a1a">
<?php $images = get_field('galeria'); ?>

<?php if($images):?>
  <div class="galeria_single_cennik">
    <div class="row">

      <?php foreach($images as $image): ?>

        <div class=" col-md-3 col-sm-6">

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