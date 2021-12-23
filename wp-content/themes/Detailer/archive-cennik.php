
<?php get_header();?>

<section>
    <div class="banner">
        <img src="http://detailing.test/wp-content/uploads/2021/10/pexels-maria-geller-2127037-scaled.jpg" alt="">
    </div>
</section>

<section class="bg-dark">
    <div class="container-fluid py-5 text-light">
    <div class="row py-5 px-3 px-md-0 d-flex justify-content-center">
            <div class="col col-sm-9 d-flex flex-column align-items-center">
                <h2 >Lorem ipsum dolor sit.</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Rerum, esse.lorem5 Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, quas.</p>
            </div>
        </div>
    <?php 
      // wykonuj dopóki są posty
        while(have_posts()){  
          // wyswietl post 
          the_post(); ?>     

        <div class="row d-flex justify-content-center">
            <div class="col-md-9">
                <div class="p-2 px-3 my-3 d-flex justify-content-between align-items-center" style="background-color:#8a42d2">
                    <div class="row w-100">
                        <div class="col-xl-9">
                            <h3 class="mb-0" style="line-height:unset;">
                                <?php the_title(); ?>
                            </h3>
                        </div>
                        <div class="col-xl-3 d-flex justify-content-start justify-content-xl-end align-items-center">
                            
                        </div>
                    </div>
                </div>
                <div class="row d-flex ">
                    <div class="col-sm-10 ">
                        <ul>
                            <li class="pe-3">
                                <?php echo the_content(); ?>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-flex justify-content-sm-end justify-content-start  ps-sm-0 pe-sm-3 pe-md-4 text-nowrap" >
                        <ul>
                            <li>
                                <?php the_field('cena') ?> zł
                            </li>
                        </ul>
                    </div>
                    <div class="px-3 pe-xl-0 py-1 d-flex justify-content-sm-end">
                        <a href="<?php the_permalink() ?>" class="btn_readmore_2 my-3 my-xl-0">Zobacz jak to robimy</a>
                    </div>
                </div>
            </div>
        </div>


       <?php  }

      ?>
</section>



<?php get_footer();?>