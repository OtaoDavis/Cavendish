<?php
$pageTitle = 'Newsroom | Cavendish Africa';
$metaDescription = 'Stay updated with the latest news, insights, and stories from Cavendish Africa and our university network across Uganda and Zambia.';
$extraCSS = ['css/news.css'];
include 'includes/header.php';
?>

    <header class="news-simple-hero">
      <div class="container hero-flex-layout">
        <!-- Left Side: Title & Tag -->
        <div class="hero-title-area">
          <p class="green-tag">INSIGHTS & UPDATES</p>
          <h1>Cavendish Africa <em>Newsroom.</em></h1>
        </div>

        <!-- Right Side: The Filter Strip -->
        <div class="hero-filter-strip">
          <div class="filter-inner">
            <label>Filter By Topic</label>
            <div class="select-container">
              <select id="topicFilter">
                <option value="all">All Insights</option>
                <!-- Categories populated by JS -->
              </select>
              <i class="fa-solid fa-chevron-down"></i>
            </div>
            <p id="articleCount">Showing all stories</p>
          </div>
        </div>
      </div>
    </header>

    <section class="news-feed-section">
      <div class="container" id="newsGrid">
        <!-- Content injected here -->
        <p class="loader-text">Fetching latest insights...</p>
      </div>
    </section>

<?php include 'includes/footer.php'; ?>

    <script src="js/news-data.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", async () => {
        const news = await getNewsList();
        const grid = document.getElementById("newsGrid");

        if (news.length === 0) {
          grid.innerHTML = "<p>No articles found.</p>";
          return;
        }

        grid.innerHTML = news
          .map(
            (item) => `
        <article class="news-listing-row">
            <div class="n-text">
                <p class="green-tag">${item.category}</p>
                <h3><a href="article.php?slug=${item.id}">${item.title}</a></h3>
                <p class="n-summary">${item.summary}</p>
                <div class="n-footer">
                    <span class="n-date">${item.date}</span>
                    <a href="article.php?slug=${item.id}" class="pillar-link">
                        Read Story <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            
            <div class="n-visual">
                <div class="image-offset-wrapper">
                    <div class="image-offset-bg bg-blue"></div>
                    <div class="img-container">
                        <img src="${item.image}" alt="${item.title}" onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <div class="placeholder-icon" style="display:none;"><i class="fa-solid fa-book-open"></i></div>
                    </div>
                </div>
            </div>
        </article>
    `,
          )
          .join("");
      });
    </script>
