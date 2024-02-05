<?php 

function homeservices_files() {

    // website css
    wp_enqueue_style( 'website-css1', get_theme_file_uri('./css/style.css') );
    wp_enqueue_style( 'website-css2', get_theme_file_uri('./css/bootstrap.css') );
    wp_enqueue_style( 'website-css3', get_theme_file_uri('./css/font-awesome.min.css') );
    wp_enqueue_style( 'website-css4', get_theme_file_uri('./css/responsive.css') );
    wp_enqueue_style( 'website-css5', get_theme_file_uri('./css/style.css.map') );
    wp_enqueue_style( 'website-css6', get_theme_file_uri('./css/style.scss') );
    wp_enqueue_style( 'website-css', get_stylesheet_uri() );


    // website fonts


    // website javascript
    wp_enqueue_script( 'my-js-loading-through-this1', get_theme_file_uri('./js/custom.js'), array('jquery'), 1.0, false );
    wp_enqueue_script( 'my-js-loading-through-this2', get_theme_file_uri('./js/bootstrap.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-loading-through-this3', get_theme_file_uri('./js/jquery-3.4.1.min.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-4', ('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-5', ('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'), array('jquery'), 1.0, true );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

}
add_action('wp_enqueue_scripts', 'homeservices_files');


function homeservices_features(){
    
    register_nav_menu('myheadermenu', 'Header Menu');
    add_theme_support('title-tag');
    add_theme_support('post_thumbnails');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
};


add_action('after_setup_theme', 'homeservices_features');



function add_theme_menu() {
    add_menu_page(
        'Theme Settings', // Home Services
        'Theme Settings', // Menu title
        'manage_options', // Capability (who can access)
        'theme-settings', // Menu slug
        'theme_settings_page', // Callback function to display content
        'dashicons-admin-generic', // Icon (optional)
        25 // Menu position (optional)
    );
}

function theme_settings_page() {

    // For top Menu Part

    if (isset($_POST['update_top_menu'])) {
        // Save and update settings
        update_option('phone_number', sanitize_text_field($_POST['phone_number']));
        update_option('email_address', sanitize_email($_POST['email_address']));
        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    echo '<div class="wrap">';
    echo '<h2>1: Top Menu</h2>';
    echo '<form method="post" action="">';

    // Display current values
    $phone_number = get_option('phone_number');
    $email_address = get_option('email_address');

    echo '<label style="background-color:green; padding:1vh; color:white;" for="phone_number">Phone Number:</label>';
    echo '<input style="margin-left:10px;" type="tel" name="phone_number" value="' . esc_attr($phone_number) . '" />';

    echo '<label for="email_address" style="margin-left:10px; background-color:green; padding:1vh; color:white;">Email Address:</label>';
    echo '<input style="margin-left:10px;" type="email" name="email_address" value="' . esc_attr($email_address) . '" />';

    echo '<input style="margin-left:2vh;" type="submit" name="update_top_menu" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';


    // For Header Part
    if (isset($_POST['update_header_heading'])) {
        // Save and update settings
        update_option('header_heading', sanitize_text_field($_POST['header_heading']));
        update_option('header_content', sanitize_text_field($_POST['header_content']));
        update_option('header_button', sanitize_text_field($_POST['header_button']));
        update_option('header_image', esc_url_raw($_POST['header_image'])); 
        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    echo '<div class="wrap"> ';
    echo '<h2>2: Header Part</h2>';
    echo '<form method="post" action="">';

    // Display current values
    $header_heading = get_option('header_heading');
    $header_content = get_option('header_content');
    $header_button = get_option('header_button');
    $header_image = get_option('header_image');

    echo '<label style="background-color:green; padding:1vh; color:white;" for="header_heading">Header Heading:</label>';
    echo '<input style="margin-left:10px;" type="text" name="header_heading" value="' . esc_attr($header_heading) . '" /> <br>';

    echo '<label for="header_content" style="position:relative; top:-50vh; background-color:green; padding:1vh; color:white;">Header Content:</label>';
    echo '<textarea name="header_content" rows="15" style="width:80%; margin-top:20px; margin-left:10px;  padding:1vh;">' . esc_textarea($header_content) . '</textarea> <br>';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="header_button">Header Button:</label>';
    echo '<input style="margin-left:10px;" type="text" name="header_button" value="' . esc_attr($header_button) . '" /> <br>';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="header_image">Header Image:</label>';
    echo '<input type="text" name="header_image" class="meta-image" value="' . esc_url($header_image) . '" />';
    echo '<input type="button" class="button image-upload" value="Browse Files" /> <br>';

    echo '<input type="submit" name="update_header_heading" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';


    
    // For Icons Part 
      if (isset($_POST['update_icons'])) {
        // Save and update settings
        update_option('first_icon', esc_url_raw($_POST['first_icon'])); 
        update_option('first_text', sanitize_text_field($_POST['first_text']));
        update_option('second_icon', esc_url_raw($_POST['second_icon'])); 
        update_option('second_text', sanitize_text_field($_POST['second_text']));
        update_option('third_icon', esc_url_raw($_POST['third_icon'])); 
        update_option('third_text', sanitize_text_field($_POST['third_text']));


        echo '<div class="updated"><p>Settings saved.</p></div>';
    }

    echo '<div class="wrap"> ';
    echo '<h2>3: Icons Section</h2>';
    echo '<form method="post" action="">';

    $first_icon = get_option('first_icon');
    $first_text = get_option('first_text');
    $second_icon = get_option('second_icon');
    $second_text = get_option('second_text');
    $third_icon = get_option('third_icon');
    $third_text = get_option('third_text');

    
    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="first_icon">First Icon:</label>';
    echo '<input type="text" id="first-icon" name="first_icon" class="meta-image1" value="' . esc_url($first_icon) . '" />';
    echo '<input type="button" class="button image-upload1" value="Browse Files" /> ';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="first_text">First Text:</label>';
    echo '<input style="margin-left:10px;" type="text" name="first_text" value="' . esc_attr($first_text) . '" /> <br>';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="second_icon">Secod Icon:</label>';
    echo '<input type="text" id="second-icon" name="second_icon" class="meta-image2" value="' . esc_url($second_icon) . '" />';
    echo '<input type="button" class="button image-upload2" value="Browse Files" />';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="second_text">Second Text:</label>';
    echo '<input style="margin-left:10px;" type="text" name="second_text" value="' . esc_attr($second_text) . '" /> <br>';


    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="third_icon">Third icon:</label>';
    echo '<input type="text" id="third-icon" name="third_icon" class="meta-image3" value="' . esc_url($third_icon) . '" />';
    echo '<input type="button" class="button image-upload3" value="Browse Files" /> ';

    echo '<label style="margin-left:10px; background-color:green; padding:1vh; color:white;" for="third_text">Third Text:</label>';
    echo '<input style="margin-left:10px;" type="text" name="third_text" value="' . esc_attr($third_text) . '" /> <br>';


    echo '<input type="submit" name="update_icons" class="button-primary" value="Update Settings" />';
    echo '</form>';
    echo '</div>';
}


add_action('admin_menu', 'add_theme_menu');


// / image uploading logic 



function enqueue_custom_scripts() {
    if (isset($_GET['page']) && $_GET['page'] === 'theme-settings') {
        wp_enqueue_media();
        wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
    }
}
add_action('admin_enqueue_scripts', 'enqueue_custom_scripts');



















function custom_post_type_slider() {
    $labels = array(
        'name' => 'Slider'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'), // Add 'thumbnail' to the array
        // Other arguments for your custom post type
    );
    add_theme_support('post-thumbnails');
    register_post_type('slides', $args);
}
add_action('init', 'custom_post_type_slider');

add_action('wp_ajax_nopriv_load_next_slide', 'load_next_slide');
add_action('wp_ajax_load_next_slide', 'load_next_slide');



function load_next_slide() {
    $slides = new WP_Query(array(
        'post_type' => 'slides',
        'posts_per_page' => 1,
        'offset' => 1, // Offset by 1 to get the next post
    ));

    while ($slides->have_posts()) {
        $slides->the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <?php the_post_thumbnail('full');
    }

    wp_reset_postdata();
    die(); // Important: always include die() at the end to terminate the script
}







// Include the customizer section for the footer
function custom_footer_customize_register($wp_customize) {
    // Add a section for the footer
    $wp_customize->add_section('custom_footer_section', array(
        'title'    => __('Footer', 'your-child-theme'),
        'priority' => 130,
    ));

    // Add setting and control for the address
    $wp_customize->add_setting('footer_address', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_address', array(
        'label'    => __('Address', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_address',
        'type'     => 'text',
    ));

    // Add setting and control for the phone
    $wp_customize->add_setting('footer_phone', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_phone', array(
        'label'    => __('Phone', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_phone',
        'type'     => 'text',
    ));

    // Add setting and control for the email
    $wp_customize->add_setting('footer_email', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_email', array(
        'label'    => __('Email', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_email',
        'type'     => 'text',
    ));


    // Add settings and controls for each social media platform
    $social_profiles = array('facebook', 'twitter', 'youtube', 'linkedin');

    foreach ($social_profiles as $profile) {
        $wp_customize->add_setting("social_profile_{$profile}_link", array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("social_profile_{$profile}_link", array(
            'label'    => ucfirst($profile) . ' ' . __('Link', 'your-child-theme'),
            'section'  => 'custom_footer_section',
            'settings' => "social_profile_{$profile}_link",
            'type'     => 'text',
        ));
    }
     // Add setting and control for the phone
     $wp_customize->add_setting('copyright_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('copyright_text', array(
        'label'    => __('Copyright Text', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'copyright_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'custom_footer_customize_register');
