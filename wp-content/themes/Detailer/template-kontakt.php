<?php
    /* Template Name: Kontakt_template */
?>

<?php get_header();?>

<section>
    <div class="banner">
        <img src="http://detailing.test/wp-content/uploads/2021/10/pexels-maria-geller-2127037-scaled.jpg" alt="">
    </div>
</section>
<section class="bg-dark" >
    <div class="container-fluid ">
        <div class="contact py-5 row d-flex justify-content-center">
            <div class=" text-center col-9 d-flex justify-content-between flex-wrap text-white " >
                <div class="col-xl-3 square-contact" style="height:35vh;background-color:#8a42d2">
                    <div class=" px-4 d-flex flex-column align-items-center h-100 justify-content-center" >
                        <i class="fa fa-map-marker fa-3x pb-3" aria-hidden="true"></i>
                        <h4>NASZE STUDIO</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col-xl-3 square-contact" style="height:35vh;background-color:#8a42d2">
                    <div class=" px-4 d-flex flex-column align-items-center h-100 justify-content-center" >
                        <i class="fa fa-phone fa-3x pb-3" aria-hidden="true"></i>
                        <h4 >NUMER TELEFONU</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col-xl-3 square-contact" style="height:35vh;background-color:#8a42d2">
                    <div class=" px-4 d-flex flex-column align-items-center h-100 justify-content-center" >
                        <i class="fa fa-clock-o fa-3x pb-3" aria-hidden="true"></i>
                        <h4>GODZINY PRACY</h4>
                        <p >Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>
                <div class="col-xl-3 square-contact" style="height:35vh;background-color:#8a42d2">
                    <div class=" px-4 d-flex flex-column align-items-center h-100 justify-content-center" >
                        <i class="fa fa-envelope fa-3x pb-3" aria-hidden="true"></i>
                        <h4>EMAIL</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing.</p>
                    </div>
                </div>

            </div>
        </div>
        <div class="row d-flex justify-content-center" style="padding-bottom:6%;">
            <div class="col-md-9 d-flex contact-form-container">
                <div class="row">
                    <div class="col-12 col-xl-6">
                        <img src="http://detailing.test/wp-content/uploads/2021/10/pexels-andrea-piacquadio-3760263-scaled.jpg" alt="" style="height:100%; width:100%; object-fit:cover;">
                    </div>
                    <div class="col-12 col-xl-6 bg-dark text-white py-5 px-3 px-md-0 ps-xl-4" >
                        <h2 class="pb-4">FORMULARZ KONTAKTOWY</h2>
                        <?php echo do_shortcode('[contact-form-7 id="34" title="Formularz 1" html_id="contact-form-1234" html_class="form contact-form"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer();?>