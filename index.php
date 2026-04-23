<?php
$pageTitle = 'Home | Cavendish Africa';
$metaDescription = 'Cavendish Africa is reimagining higher education across Africa. Discover our university network in Uganda and Zambia, innovative learning model, and pathways to employment and entrepreneurship.';
$extraCSS = ['css/home.css'];
include 'includes/header.php';
?>

<section class="hero-split" id="heroSection">
  <!-- LEFT: Text -->
  <div class="hero-text-box">
    <h1>
      Building Africa's <br />Next Generation <br />
      <span class="italic">of Business Leaders.</span>
    </h1>
    <p class="hero-desc">
      Insights, education, and executive training to address Africa's youth
      employment and entrepreneurship challenges.
    </p>
    <div class="hero-actions">
      <a href="insights.php" class="btn-solid">Explore Insights</a>
      <a href="cabs.php" class="pillar-link">View Programmes <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>

  <!-- RIGHT: Video -->
  <div class="hero-video-box" id="heroVideoBox">
    <!-- Left-edge gradient -->
    <div class="hero-gradient-overlay"></div>

    <video id="heroVideo" src="video/placeholder.mp4" muted loop playsinline autoplay poster="images/tie.webp"></video>

    <!-- Play hint shown in default state -->
    <div class="video-play-hint">
      <div class="play-circle">
        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <polygon points="5,3 19,12 5,21" />
        </svg>
      </div>
      <span class="play-label">Watch Story</span>
    </div>

    <!-- Close button shown in expanded state -->
    <button class="hero-close-btn" id="videoCloseBtn" aria-label="Close video">
      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
        <line x1="18" y1="6" x2="6" y2="18" />
        <line x1="6" y1="6" x2="18" y2="18" />
      </svg>
    </button>
  </div>
  <!-- /.hero-video-box -->
</section>
<!-- /.hero-split -->

<!-- VISION STRIP: INSTITUTIONAL QUOTE -->

<section class="vision-strip section-light-back">
  <div class="container">
    <div class="vision-content">
      <h2 class="institutional-quote">
        Cavendish Africa is an education company that operates universities
        using a distinctive academic framework—preparing students for
        <em>employment, entrepreneurship, and leadership</em> in Africa and
        beyond.
      </h2>
    </div>
  </div>
</section>

<!-- VISION STRIP: INSTITUTIONAL QUOTE END -->

<!-- PROBLEM SECTION -->
<section class="problem-section">
  <div class="container">
    <div class="problem-header">
      <h2>
        Africa's Defining <span class="italic">Opportunity</span>—and
        Challenge
      </h2>
      <p class="problem-intro">
        Africa has the youngest population in the world, yet millions of
        young people remain unemployed or underemployed. Bridging this gap
        requires more than education—it requires actionable insights and
        practical executive training.
      </p>
    </div>

    <div class="stats-grid">
      <!-- MAIN ANCHOR CARD -->
      <div class="stat-card main-card">
        <div class="stat-content">
          <i class="fa-solid fa-users-rays ghost-icon"></i>
          <span class="stat-number">70%</span>
          <p class="stat-label text-green">
            Of Sub-Saharan Africa is under the age of 30
          </p>
        </div>
      </div>

      <!-- SUPPORTING STATS -->
      <div class="glance-card border-blue">
        <i class="fa-solid fa-briefcase card-icon"></i>
        <span class="stat-number-small">3x</span>
        <p class="stat-label-small">
          Youth unemployment rate vs. adults in many regions
        </p>
      </div>

      <div class="glance-card border-blue">
        <i class="fa-solid fa-lightbulb card-icon"></i>
        <span class="stat-number-small">87%</span>
        <p class="stat-label-small">
          Of African CEOs cite skills shortage as a barrier to growth
        </p>
      </div>

      <div class="glance-card border-green">
        <i class="fa-solid fa-chart-line card-icon"></i>
        <span class="stat-number-small">25M</span>
        <p class="stat-label-small">
          New jobs needed annually to keep pace with population growth
        </p>
      </div>

      <div class="glance-card border-green">
        <i class="fa-solid fa-seedling card-icon"></i>
        <span class="stat-number-small">$47B</span>
        <p class="stat-label-small">
          Africa's untapped economic potential from investing in its youth
        </p>
      </div>
    </div>
  </div>
</section>
<!-- PROBLEM SECTION END  -->

<!-- HERO: EDITORIAL ASYMMETRY -->
<header class="hero-editorial">
  <div class="hero-grid">
    <div class="hero-text">
      <p class="blue-tag">BUILDING MORE THAN A UNIVERSITY</p>
      <h1>Unlocking Africa's <br /><em>Vast Potential.</em></h1>
      <p class="hero-lead">
        Africa's future will be shaped by the talent, creativity, and
        leadership of its youth. Expanding access to high-quality education
        that empowers students to make a difference is at the heart of
        Cavendish Africa's purpose.
      </p>
      <div class="cta-wrap">
        <a href="purpose.php" class="btn-solid">Our Purpose</a>
      </div>
    </div>
    <div class="hero-image-stack">
      <div class="img-large">
        <img src="images/cz4.JPG" alt="African Students" loading="lazy" />
      </div>
      <div class="floating-stat">
        <span class="stat-num" style="color: white">14,500+</span>
        <p>Students Enrolled</p>
      </div>
    </div>
  </div>
</header>

<!-- REIMAGINING EDUCATION -->
<section id="solution" class="pillar-deep-dive section-white">
  <div class="container">
    <!-- Section Header -->
    <div class="section-header-center">
      <h2>Reimagining Education</h2>
      <p class="section-intro-text">
        High-quality, globally relevant education is one of the most
        powerful forces for Africa's innovation, sustainable development,
        and global competitiveness. Yet across the continent, social and
        economic realities often create a difficult balance between access,
        quality, and impact.
      </p>
    </div>

    <!-- Making High-Quality Education Accessible -->
    <div class="pillar-row">
      <div class="p-content">
        <h3>Making High-Quality Education Accessible</h3>
        <p class="pillar-body-sm">
          Delivering high-quality education at price points students can
          afford is one of the core challenges in Africa. Cavendish Africa's
          universities continually refine their operating models to deliver
          high quality education efficiently while maintaining strong
          academic standards and meaningful student support.
        </p>
        <a href="purpose.php#identity" class="pillar-link">Explore our Philosophy <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="p-image-column">
        <div class="image-offset-wrapper">
          <div class="image-offset-bg bg-blue"></div>
          <img src="images/edu.jpg" alt="Making High-Quality Education Accessible" loading="lazy" />
        </div>
      </div>
    </div>

    <!-- Education Connected to Africa's Real Challenges -->
    <div class="pillar-row reverse">
      <div class="p-content">
        <h3>Education Connected to Africa's Real Challenges</h3>
        <p class="pillar-body-sm">
          Africa's social, economic, and leadership challenges remind us
          that education must do more than transmit knowledge—it must
          prepare students to solve real problems. Our universities
          emphasize problem-centered learning that encourages students to
          apply knowledge to solving real social, economic, and
          technological challenges across Africa.
        </p>
        <a href="purpose.php#problem-centered" class="pillar-link">See our Methodology <i
            class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="p-image-column">
        <div class="image-offset-wrapper">
          <div class="image-offset-bg bg-green"></div>
          <img src="images/appre.JPG" alt="Education Connected to Africa's Real Challenges" loading="lazy" />
        </div>
      </div>
    </div>

    <!-- Educating the Whole Person -->
    <div class="pillar-row">
      <div class="p-content">
        <h3>Educating the Whole Person</h3>
        <p class="pillar-body-sm">
          Our students come from diverse social and economic backgrounds,
          often shaped by challenges that influence their confidence,
          outlook, and opportunities. Our universities therefore focus not
          only on academic knowledge, but also on developing confidence,
          values, leadership, and personal responsibility so that graduates
          are prepared to realize their potential and contribute
          meaningfully to their communities and society.
        </p>
        <a href="purpose.php#holistic" class="pillar-link">See our Approach <i class="fa-solid fa-arrow-right"></i></a>
      </div>
      <div class="p-image-column">
        <div class="image-offset-wrapper">
          <div class="image-offset-bg bg-blue"></div>
          <img src="images/pic1.jpg" alt="Educating the Whole Person" loading="lazy" />
        </div>
      </div>
    </div>
  </div>
</section>

<!-- AFRICA EDUCATION HOLDINGS AT A GLANCE -->
<section class="at-a-glance">
  <div class="container">
    <div class="glance-header">
      <div class="eyebrow-wrap">
        <div class="accent-line"></div>
        <p class="blue-tag">Scale & Impact</p>
      </div>
      <h2>Cavendish Africa at a <em>Glance.</em></h2>
    </div>

    <div class="glance-grid">
      <!-- Large Focus Stat -->
      <div class="glance-card high-impact">
        <span class="stat-num">25,000+</span>
        <p class="stat-label">Graduands Since 2014</p>
        <div class="card-bg-icon">
          <i class="fa-solid fa-user-graduate"></i>
        </div>
      </div>

      <!-- Medium Stats -->
      <div class="glance-card">
        <span class="stat-num">02</span>
        <p class="stat-label">Premier Institutions</p>
      </div>

      <div class="glance-card border-green">
        <span class="stat-num">06</span>
        <p class="stat-label">Regional Campuses</p>
      </div>

      <!-- Small Detail Stats -->
      <div class="glance-card">
        <span class="stat-num">50+</span>
        <p class="stat-label">Nationalities Represented</p>
      </div>

      <div class="glance-card border-green">
        <span class="stat-num">80+</span>
        <p class="stat-label">Degree Courses</p>
      </div>
    </div>
    <div style="text-align: right; margin-top: 30px;">
      <a href="impact.php" class="pillar-link">See Our Impact <i class="fa-solid fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- OUR UNIVERSITY NETWORK: VIEWPORT-FITTING PORTFOLIO -->
<section id="network" class="university-network-slider">
  <div class="container">
    <div class="section-header-between">
      <div class="header-left">
        <p class="blue-tag">OUR UNIVERSITY NETWORK</p>
        <h2 class="institutional-heading">
          A Pan-African <em>Academic Alliance.</em>
        </h2>
      </div>
      <div class="swiper-nav-group">
        <div class="uni-prev"><i class="fa-solid fa-chevron-left"></i></div>
        <div class="uni-fraction"></div>
        <div class="uni-next">
          <i class="fa-solid fa-chevron-right"></i>
        </div>
      </div>
    </div>
  </div>

  <div class="swiper university-portfolio-swiper">
    <div class="swiper-wrapper">
      <!-- Slide 01: Uganda -->
      <div class="swiper-slide">
        <div class="network-asset-grid">
          <div class="asset-visual">
            <img src="images/cz3.jpg" alt="CUU Uganda" class="asset-img" loading="lazy" />
            <div class="asset-geo-label">UGANDA</div>
          </div>
          <div class="asset-details">
            <div class="details-inner">
              <p class="asset-eyebrow">FLAGSHIP: LAW SCHOOL</p>
              <h3 class="asset-title">
                Cavendish University <br />Uganda (CUU)
              </h3>

              <div class="asset-stats-grid">
                <div class="a-stat">
                  <p>Founded</p>
                  <span>2008</span>
                </div>
                <div class="a-stat">
                  <p>Students</p>
                  <span>4,700</span>
                </div>
                <div class="a-stat">
                  <p>Nationalities</p>
                  <span>41</span>
                </div>
                <div class="a-stat">
                  <p>Campuses</p>
                  <span>03</span>
                </div>
              </div>

              <div class="faculties-wrap">
                <h4>Core Faculties</h4>
                <ul class="faculty-list">
                  <li>Science & Technology</li>
                  <li>Business & Management</li>
                  <li>Socio-Economic Sciences</li>
                  <li>Law</li>
                </ul>
              </div>

              <div class="asset-mission-box">
                <p>
                  <strong>Mission:</strong> To transform and inspire
                  students to reach their full potential in employment,
                  entrepreneurship, and ethical leadership.
                </p>
              </div>

              <a href="https://www.cavendish.ac.ug/admissions/admission-requirements/" class="btn-text-reveal"
                target="_blank">Enroll Today <i class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 02: Zambia -->
      <div class="swiper-slide">
        <div class="network-asset-grid">
          <div class="asset-visual">
            <img src="images/cz1.JPG" alt="CUZ Zambia" class="asset-img" loading="lazy" />
            <div class="asset-geo-label">ZAMBIA</div>
          </div>
          <div class="asset-details">
            <div class="details-inner">
              <p class="asset-eyebrow">FLAGSHIP: MEDICAL SCHOOL</p>
              <h3 class="asset-title">
                Cavendish University <br />Zambia (CUZ)
              </h3>

              <div class="asset-stats-grid">
                <div class="a-stat">
                  <p>Founded</p>
                  <span>2004</span>
                </div>
                <div class="a-stat">
                  <p>Students</p>
                  <span>7,300</span>
                </div>
                <div class="a-stat">
                  <p>Nationalities</p>
                  <span>32</span>
                </div>
                <div class="a-stat">
                  <p>Campuses</p>
                  <span>02</span>
                </div>
              </div>

              <div class="faculties-wrap">
                <h4>Core Faculties</h4>
                <ul class="faculty-list">
                  <li>Medicine & Health Sciences</li>
                  <li>Law</li>
                  <li>Arts & Social Sciences</li>
                  <li>Business & Management</li>
                </ul>
              </div>

              <div class="asset-mission-box">
                <p>
                  <strong>Mission:</strong> To increase access to
                  high-quality education that transforms students into
                  responsible, employable, and entrepreneurial citizens.
                </p>
              </div>

              <a href="https://www.cavendishza.org/admissions/" class="btn-text-reveal" target="_blank">Enroll Today <i
                  class="fa-solid fa-arrow-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- THE Cavendish Africa IMPACT SECTION -->
<section class="aeh-impact" id="impact">
  <div class="container">
    <div class="impact-grid">
      <!-- Left Side: Immersive Visual -->
      <div class="impact-visual">
        <div class="visual-wrapper">
          <div class="visual-accent-border"></div>
          <img src="images/potential2.JPG" alt="Cavendish Africa Students in the Field" class="impact-img"
            loading="lazy" />
          <div class="visual-overlay-content">
            <h2 class="overlay-text">IMPACT <br />AT SCALE.</h2>
          </div>
        </div>
      </div>

      <!-- Right Side: Content -->
      <div class="impact-text-area">
        <p class="green-tag">THE ALLIANCE IN ACTION</p>
        <h2 class="impact-heading">
          Creating Paths To <em>Gainful Employment.</em>
        </h2>

        <div class="impact-description">
          <p>
            Across Africa, many young people graduate into economies where
            employment opportunities remain limited. Preparing students for
            success therefore requires more than academic education—it
            requires connecting learning to real pathways for employment and
            entrepreneurship.
          </p>

          <p>
            Cavendish Africa's universities are developing programs that
            help students access the global remote work economy and
            entrepreneurs grow their businesses with the support of
            students.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Cavendish Africa INSIGHTS & NEWS SECTION -->
<section class="aeh-news-room section-white">
  <div class="container">
    <!-- Section Header -->
    <div class="news-header">
      <h2>Cavendish Africa <em>News</em></h2>
      <a href="news.php" class="btn-outline-news">Visit Cavendish Africa Newsroom</a>
    </div>

    <div class="news-grid" id="homeNewsContainer">
      <!-- Loader while fetching data -->
      <p class="loader-text">Loading latest insights...</p>
    </div>
  </div>
</section>

<!-- THE CONTACT SECTION: START THE DIALOGUE -->
<section id="contact" class="aeh-contact section-slate">
  <div class="container">
    <div class="contact-split-grid">
      <!-- Left Side: Continental Context -->
      <div class="contact-context">
        <p class="blue-tag">STRATEGIC PARTNERSHIP</p>
        <h2 class="contact-title">Start the <em>Dialogue.</em></h2>
        <p class="contact-lead">
          Expanding access to high-quality education and opportunity for
          Africa's youth requires collaboration. Cavendish Africa works with
          education and business organizations, and partners who share our
          commitment to preparing students for meaningful careers and
          leadership.
        </p>

        <p class="contact-lead">
          If you are interested in partnering with us to strengthen
          education and expand opportunities across Africa, we would welcome
          the conversation.
        </p>

        <div class="direct-contact">
          <p class="contact-method">
            <span>General Inquiries:</span> info@maarifaeducation.com
          </p>
          <p class="contact-method">
            <span>Network Development:</span> (+254) 708 021 483
          </p>
        </div>
      </div>

      <!-- Right Side: The Minimalist Form -->
      <div class="contact-form-wrapper">
        <div class="form-decorative-element"></div>
        <form class="aeh-premium-form">
          <div class="form-row split">
            <div class="field-group">
              <label>Full Name</label>
              <input type="text" placeholder="e.g. Jean-Pierre Mensah" required />
            </div>
            <div class="field-group">
              <label>Phone Number</label>
              <input type="text" placeholder="+000 000 000 000" required />
            </div>
          </div>

          <div class="form-row split">
            <div class="field-group">
              <label>Organization</label>
              <input type="text" placeholder="Institutional / Private Equity" required />
            </div>
            <div class="field-group">
              <label>Email Address</label>
              <input type="email" placeholder="name@company.com" required />
            </div>
          </div>

          <div class="field-group">
            <label>Nature of Inquiry</label>
            <select>
              <option>Network Partnership</option>
              <option>Investment Inquiry</option>
              <option>University Collaboration</option>
              <option>Other</option>
            </select>
          </div>

          <div class="field-group">
            <label>Message</label>
            <textarea rows="4" placeholder="How can we align our missions?"></textarea>
          </div>

          <button type="submit" class="btn-initiate">
            Initiate Dialogue <i class="fa-solid fa-paper-plane"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="js/news-data.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", async () => {
    // 1. Fetch the news list from Contentful (Function in news-data.js)
    const news = await getNewsList();
    const container = document.getElementById("homeNewsContainer");

    if (!news || news.length === 0) {
      container.innerHTML = "<p>No recent news available.</p>";
      return;
    }

    // 2. Separate the latest article from the rest
    const featured = news[0];
    const sidebarArticles = news.slice(1, 4); // Get the next 3

    // 3. Build the HTML Structure
    let sidebarHTML = "";
    sidebarArticles.forEach((item) => {
      sidebarHTML += `
                <article class="sidebar-item">
                    <div class="sidebar-text">
                        <p class="category-tag green">${item.category}</p>
                        <h4><a href="article.php?slug=${item.id}">${item.title}</a></h4>
                        <p class="news-date">${item.date}</p>
                    </div>
                    <div class="sidebar-thumb">
                        <img src="${item.image}" alt="${item.title}" onerror="this.style.display='none'; this.parentElement.innerHTML='<div class=\\'thumb-icon\\'><i class=\\'fa-solid fa-book-open\\'></i></div>'">
                    </div>
                </article>
            `;
    });

    container.innerHTML = `
            <!-- Main Featured Story (Latest) -->
            <div class="news-featured">
                <div class="news-img-wrap">
                    <img src="${featured.image}" alt="${featured.title}" onerror="this.style.display='none';">
                </div>
                <div class="news-content">
                    <p class="category-tag blue">${featured.category}</p>
                    <h3>
                        <a href="article.php?slug=${featured.id}">${featured.title}</a>
                    </h3>
                    <p class="news-snippet">${featured.summary}</p>
                    <p class="news-date">${featured.date}</p>
                </div>
            </div>

            <!-- Sidebar Stories (Next 3) -->
            <div class="news-sidebar">
                ${sidebarHTML}
            </div>
        `;
  });
</script>