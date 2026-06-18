<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <!-- Favicons -->
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" sizes="any" />
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-16x16.png" />

    <!-- LOCAL STYLESHEETS (Fixed Paths) -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <!-- SwiperJS CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- SwiperJS Script -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js" defer></script>

    <!-- CUSTOM JS ) -->
    <script src="<?php echo get_template_directory_uri(); ?>/js/script.js" defer></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50'); ?>>
    <?php wp_body_open(); ?>

    <!-- OVERLAY LOADER -->
    <div id="aeh-loader" class="aeh-loader-overlay">
      <div class="loader-content">
        <img
          src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
          alt="Cavendish Africa"
          class="loader-logo-pulse"
        />
      </div>
    </div>

    <!-- Dynamic Progress Nav -->
    <nav class="sticky-nav">
      <div class="nav-container">
        <a href="<?php echo home_url('/'); ?>" class="logo">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
            alt="Cavendish Africa"
            class="logo-img"
          />
        </a>
        
        <button class="hamburger" aria-label="Toggle menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>

        <div class="nav-links">
          <a href="<?php echo home_url('/our-purpose'); ?>">Purpose</a>
          <a href="<?php echo home_url('/cavendish-network'); ?>">Universities</a>
          <a href="<?php echo home_url('/cavendish-business-school'); ?>">Business School</a>
          <a href="<?php echo home_url('/team'); ?>">Team</a>
          
          <div class="nav-dropdown">
            <a href="#" class="nav-btn nav-btn-dropdown">
                Explore our programs <i class="fa-solid fa-chevron-down"></i>
            </a>
            <div class="nav-dropdown-menu">
              <a href="<?php echo home_url('/cavendish-network#zambia-faculties'); ?>">Cavendish Zambia</a>
              <a href="<?php echo home_url('/cavendish-network#uganda-faculties'); ?>">Cavendish Uganda</a>
              <a href="<?php echo home_url('/cavendish-business-school#enroll'); ?>">Cavendish Business</a>
            </div>
          </div>
        </div>
      </div>
    </nav>