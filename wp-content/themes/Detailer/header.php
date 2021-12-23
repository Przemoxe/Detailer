<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body>
    
<header >
    <div class="container-fluid d-none d-xl-flex   menu_container flex-column justify-content-center  m-0"  >
        <div class="row d-flex justify-content-center  m-0" style="height:100%;">
            <div class="col-9 d-flex justify-content-between" style="position:relative;">
                    <img src="http://detailing.test/wp-content/uploads/2021/10/—Pngtree—simulation-luxury-car-illustration_4484878.png" alt="" style="width:10vh; height:100%;">
                    <?php 
                        wp_nav_menu(array(
                            'theme_location' => 'headerMenuLocation',
                            // theme_menu sprawdź robi podobno tak jak w menu admin a theme location alfabetycznie
                            'menu_class' => 'top-bar'
                        ));
                    ?>
                    <div class="text-white d-flex align-items-center">
                        Zapytaj Nas<i class="fa fa-info-circle fa-lg px-3" aria-hidden="true"> </i>
                    </div>
            </div>
        </div>
    </div>
    

    <div class="container-fluid d-xl-none burger_mobile">
        <div class="row h-100 w-100 d-flex justify-content-center ">
            <div class="px-3 px-md-0 col-md-9 d-flex justify-content-between align-items-center">
                <img src="http://detailing.test/wp-content/uploads/2021/10/—Pngtree—simulation-luxury-car-illustration_4484878.png" alt="" style="width:10vh; height:100%;">
                <i class="fa fa-bars" aria-hidden="true"></i>
                <i class="fa fa-angle-left off pe-3" aria-hidden="true"></i>
            </div>
        </div>
        <div class="naw_mobile">
            
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'headerMenuLocation',
                    'menu_class' => 'top-bar_mobile',
                    'depth' => 1
                ));
            ?>
        </div>
    </div>
    


</header>
  
</section>