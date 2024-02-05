<?php  get_header();

?>

    <!-- slider section -->
    <section class="slider_section ">
      <div class="container ">
        <div class="row">
          <div class="col-md-6 ">
            <div class="detail-box">
              <h1>
              <?php
                $header_heading = get_option('header_heading');
                echo esc_html($header_heading);
                ?>
               </h1>
              <p>
              <?php
                $header_content = get_option('header_content');
                echo esc_html($header_content);
                ?>              
                </p>
              <a href="">
              <?php
                $header_button = get_option('header_button');
                echo esc_html($header_button);
                ?> 
              </a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="img-box">
              <img src="<?php 
              $header_image = get_option('header_image');
              echo  esc_url($header_image) . '" alt="Header Image">';
              ?>" alt="">
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- feature section -->
  <section class="feature_section">
    <div class="container">
      <div class="feature_container">
        <div class="box">
          <div class="img-box">
          <img width="100px" height="100px" src="<?php 
              $first_icon = get_option('first_icon');
              echo  esc_url($first_icon) . '" alt="icon">';
              ?>
          </div>
          <h5 class="name">
          <?php
                $first_text = get_option('first_text');
                echo esc_html($first_text);
                ?> 
          </h5>
        </div>
        <div class="box active">
          <div class="img-box">
          <img width="100px" height="100px" src="<?php 
              $second_icon = get_option('second_icon');
              echo  esc_url($second_icon) . '" alt="icon">';
              ?>
          </div>
          <h5 class="name">
          <?php
                $second_text = get_option('second_text');
                echo esc_html($second_text);
                ?> 
          </h5>
        </div>
        <div class="box">
          <div class="img-box">
          <img width="100px" height="100px" src="<?php 
              $third_icon = get_option('third_icon');
              echo  esc_url($third_icon) . '" alt="icon">';
              ?>
          <h5 class="name">
          <?php
                $third_text = get_option('third_text');
                echo esc_html($third_text);
                ?> 
          </h5>
        </div>
      </div>
    </div>
  </section>

  <!-- end feature section -->

  <!-- about section -->

  <section class="about_section layout_padding-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-md-6">
          <div class="detail-box">
            <h2>
              About us
            </h2>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomisedThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-lg-7 col-md-6">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('./images/about-img.jpg') ?>" alt="">
          </div>
        </div>
      </div>
    </div> 
   

  </section>

  <!-- end about section -->


  <!-- professional section -->

  <section class="professional_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="<?php echo get_theme_file_uri('./images/professional-img.png') ?> " alt="">
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="detail-box">
            <h2>
              We Provide Professional <br>
              Home Services.
            </h2>
            <p>
              randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All randomised words which don't look even slightly
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end professional section -->

  <!-- service section -->

  <section class="service_section layout_padding">
    <div class="container ">
      <div class="heading_container heading_center">
        <h2> Our Services </h2>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?php echo get_theme_file_uri('./images/s1.png') ?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Maintenance
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?php echo get_theme_file_uri('./images/s2.png ') ?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Electrical
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 mx-auto">
          <div class="box ">
            <div class="img-box">
              <img src="<?php echo get_theme_file_uri('./images/s3.png'); ?>" alt="" />
            </div>
            <div class="detail-box">
              <h5>
                Plumbing
              </h5>
              <p>
                when looking at its layout. The point of using Lorem Ipsum is
                that it has a more-or-less normal
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btn-box">
        <a href="">
          View More
        </a>
      </div>
    </div>
  </section>

  <!-- end service section -->

  <!-- client section -->

  <section class="client_section">
    <!-- <div class="container">
      <div class="heading_container heading_center">
        <h2>
          What Our Clients Say
        </h2>
      </div>
      <div class="carousel-wrap layout_padding2-top ">
        <div class="owl-carousel">
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="<?php echo get_theme_file_uri('./images/client-1.jpg'); ?>" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="<?php echo get_theme_file_uri('./images/client-2.jpg ') ?>" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="<?php echo get_theme_file_uri('./images/client-1.jpg') ?>" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="client_id">
                <div class="img-box">
                  <img src="<?php echo get_theme_file_uri( './images/client-2.jpg' ); ?>" alt="">
                </div>
                <div class="client_detail">
                  <div class="client_info">
                    <h6>
                      Jorch morik
                    </h6>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="client_text">
                <p>
                  chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->

    <?php
    $slides = new WP_Query(array(
        'post_type' => 'slides',
        'posts_per_page' => -1, // Display all posts
    ));

    while ($slides->have_posts()) {
        $slides->the_post();
        ?>
        <div class="slide">
            <h1><?php the_title(); ?></h1>
            <div id="slider_div">
                <?php the_post_thumbnail('full'); ?>
            </div>
        </div>
        <?php
    }

    wp_reset_postdata();
    ?>
</div>
<script>
  // Wait for the DOM to be ready
document.addEventListener('DOMContentLoaded', function () {
    var slides = document.querySelectorAll('.slide');
    var currentIndex = 0;

    function showSlide(index) {
        slides.forEach(function (slide, i) {
            slide.style.display = i === index ? 'block' : 'none';
        });
    }

    // Function to switch to the next slide
    function switchToNextSlide() {
        currentIndex = (currentIndex + 1) % slides.length;
        showSlide(currentIndex);
    }

    // Switch to the next slide every 5 seconds
    setInterval(switchToNextSlide, 5000);

    // Initial display
    showSlide(currentIndex);
});
</script>
  </section>

  <!-- end client section -->

  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Contact Us
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="">
            <div>
              <input type="text" placeholder="Name" />
            </div>
            <div>
              <input type="text" placeholder="Phone Number" />
            </div>
            <div>
              <input type="email" placeholder="Email" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="d-flex ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap" style="width:100%;height:100%;"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <h4>
        Get In Touch
      </h4>
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <div class="info_items">
            <div class="row">
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <p>
                    <p style="color:red;"><?php echo get_theme_mod('footer_copyright_text', ''); ?></p>
                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box ">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <p>
                    <p style="color:red;"><?php echo get_theme_mod('footer_phone', ''); ?></p>

                    </p>
                  </div>
                </a>
              </div>
              <div class="col-md-4">
                <a href="">
                  <div class="item ">
                    <div class="img-box">
                      <i class="fa fa-envelope" aria-hidden="true"></i>
                    </div>
                    <p>
                    <p style="color:red;"><?php echo get_theme_mod('footer_email', ''); ?></p>
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="social-box">
      <h4>
        Follow Us
      </h4>
      <div class="box">
        <a href="<?php echo get_theme_mod('social_profile_facebook_link', ''); ?>">
        Facebook
        </a>
        <a href="<?php echo get_theme_mod('social_profile_twitter_link', ''); ?>">
          Twitter
        </a>
        <a href="<?php echo get_theme_mod('social_profile_youtube_link', ''); ?>">
          Youtube
        </a>
        <a href="<?php echo get_theme_mod('social_profile_linkedin_link', ''); ?>">
        Linkedin
      </a>
      </div>
    </div>
  </section>



 <?php  get_footer(); ?>