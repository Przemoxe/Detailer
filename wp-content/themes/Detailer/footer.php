<?php wp_footer(); 

$nrTel =  get_theme_mod('nr_kontaktowy');
$openHours =  get_theme_mod('open_hours');
$adress =  get_theme_mod('adress');
$email =  get_theme_mod('email');
$map =  get_theme_mod('map');

?>


<footer>
    <div class="container-fluid text-light py-xl-5 pt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-9 col-xl-6  pb-5 px-xl-0 d-flex flex-column justify-content-around">
                <div class="row pb-5 pb-xl-0 ">
                     <div class="d-flex justify-content-center d-md-block">
                         <h1 class="text-center text-md-start">ZAPRASZAMY PONOWNIE</h1>
                     </div>
                </div>
                <div class="row info d-flex ">
                    <div class="col-md-6 col-xl-3 menu text-center text-md-start pe-1">
                        <h5>Menu</h5>
                        <?php 
                            wp_nav_menu(array(
                                'theme_location' => 'headerMenuLocation',
                                'container_class' => 'footer_container_menu',
                                'menu_class' => 'footer_menu',
                                'depth' => 1
                            ));
                        ?>
                    </div>
                    <div class="col-md-6 col-xl-3 text-center text-md-start pt-4 pt-sm-0">
                            <h5>Kontakt</h5>
                            <ul>
                                <?php if($nrTel){?>
                                    <a href="tel:<?php echo $nrTel ?>"><li class="m-0 fa fa-phone"><span class="ps-2"><?php echo $nrTel ?></span></li></a>
                                <?php } ?>
                                <?php if($email){?>
                                    <li class="m-0 fa fa-envelope"><span class="ps-2"><?php echo $email ?></span></li>
                                <?php } ?>
                            </ul>

                    </div>      
                    <div class="col-md-6 col-xl-3 text-center text-md-start pt-4 pt-sm-0">
                            <h5>Lokalizacja</h5>
                            <ul>
                                <?php if($adress){?>
                                    <li class="m-0 fa fa-map-marker"><span class="ps-2"><?php echo $adress ?></span></li>
                                <?php } ?>
                            </ul>

                    </div>   
                    <div class="col-md-6 col-xl-3 text-center text-md-start pt-4 pt-sm-0">
                            <h5>Godziny</h5>
                            <ul>
                                <?php if($openHours){?>
                                    <li class="m-0 fa fa-clock-o"><span class="ps-2"><?php echo $openHours ?></span></li>
                                <?php } ?>
                            </ul>

                    </div>                             
                </div>
            </div>
            <div class="col-xl-3 localization-map">
                <?php echo $map ?>
            </div>
        </div>
    </div>
</footer>
<section style="background-color:#1a1a1a; height:10vh;" class="d-none d-sm-flex flex-column justify-content-center">
    <div  class="text-white d-flex  justify-content-center align-items-center">
        © 2021 <span style="font-weight: 900;color:orange;padding-left:5px;padding-right:5px;"> Przmoxe Portfolio </span> • POWERED BY Przemyslaw Marszalek   
    </div>
    <div class="d-flex justify-content-center">
        <span style="color:#a0b9bd"> • All right reserved</span>
    </div>
</section>
<section style="background-color:#1a1a1a; height:10vh;" class="d-sm-none">
    <div  class="text-white d-flex justify-content-center">
        © 2021 <span style="font-weight: 900;color:orange;padding-left:5px;padding-right:5px;"> Przmoxe Portfolio </span> 
        <span style="color:#a0b9bd">
    </div>
    <div class="d-flex justify-content-center">
        <span style="color:white"> • POWERED BY Przemyslaw Marszalek   </span>
    </div>
    <div class="d-flex justify-content-center">
        <span style="color:#a0b9bd"> • All right reserved</span>
    </div>
</footer>

</body>
</html>