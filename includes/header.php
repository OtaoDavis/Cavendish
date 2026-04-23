<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="<?= htmlspecialchars($metaDescription ?? '') ?>"
    />
    <title><?= htmlspecialchars($pageTitle ?? 'Cavendish Africa') ?></title>

    <!-- Universal Styles -->
    <link rel="stylesheet" href="css/style.css" />

    <!-- Page-Specific Styles -->
    <?php if (!empty($extraCSS)): ?>
      <?php foreach ($extraCSS as $css): ?>
        <link rel="stylesheet" href="<?= $css ?>" />
      <?php endforeach; ?>
    <?php endif; ?>

    <!-- Favicons -->
    <link rel="icon" href="images/favicon.ico" sizes="any" />
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="images/apple-touch-icon.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="images/favicon-32x32.png"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="images/favicon-16x16.png"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,400;0,700;1,400&family=Playfair+Display:wght@400;700&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- SwiperJS CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- SwiperJS Script -->
    <script
      src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"
      defer
    ></script>

    <?php if (!empty($extraHead)) echo $extraHead; ?>
  </head>

  <body class="bg-gray-50">
    <!-- OVERLAY LOADER -->
    <div id="aeh-loader" class="aeh-loader-overlay">
      <div class="loader-content">
        <img
          src="images/logo.png"
          alt="Cavendish Africa"
          class="loader-logo-pulse"
        />
      </div>
    </div>

    <!-- Dynamic Progress Nav -->
    <nav class="sticky-nav">
      <div class="nav-container">
        <a href="index.php" class="logo">
          <img
            src="images/logo.png"
            alt="Africa Education Holdings"
            class="logo-img"
          />
        </a>
        <button class="hamburger" aria-label="Toggle menu">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
        <div class="nav-links">
          <a href="purpose.php">Our Purpose</a>
          <a href="cabs.php">Business School</a>
          <a href="network.php">Network</a>
          <a href="team.php">Leadership</a>
          <a href="partnerships.php" class="nav-btn">Partner With Us</a>
        </div>
      </div>
    </nav>
