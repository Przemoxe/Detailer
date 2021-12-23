<?php 
  
    function theme_customizer_function($wp_customize){
        $wp_customize->add_section('stopka', array(
            'title' => "Stopka",
            'priority' => 2,
            'description' => __('Edycja stopki'),
        ));
        //nr_kontaktowy

        $wp_customize->add_setting('nr_kontaktowy', array(
            'default' => ''
        ));
        $wp_customize ->add_control('nr_kontaktowy', array(
            'label' => 'Numer kontaktowy',
            'section' => 'stopka'
        ));

        // godziny 
        $wp_customize->add_setting('open_hours', array(
            'default' => '',
        ));
        $wp_customize ->add_control('open_hours', array(
            'label' => 'Godziny otwarcia',
            'section' => 'stopka',
            'type' => 'textarea'
        ));

        // Adres
        $wp_customize->add_setting('adress', array(
            'default' => '',
        ));
        $wp_customize ->add_control('adress', array(
            'label' => 'Twój adres',
            'section' => 'stopka',
            'type' => 'textarea'
        ));

        
        // email 
        $wp_customize->add_setting('email', array(
            'default' => '',
        ));
        $wp_customize ->add_control('email', array(
            'label' => 'Twój e-mail',
            'section' => 'stopka',
        ));

        // map
        $wp_customize->add_setting('map', array(
            'default' => '',
        ));
        $wp_customize ->add_control('map', array(
            'label' => 'Wejdz na www.google.pl/maps - wyszukaj lokalizację, klikasz udostępnij -> kliknij w sekcję "umieszczanie mapy" ->   kopiujesz cały link(kopiuj HMTL) i wklej poniżej. Aby zapisać zmiany kliknij przycisk Opublikuj znajdujący się na samej górze nad wszystkimi formularzami.',
            'section' => 'stopka',
            'type' => 'textarea'
        ));

}
  add_action('customize_register','theme_customizer_function');
?>