<?php
$pageTitle = 'News | Cavendish Africa';
$metaDescription = 'Read the latest articles and insights from Cavendish Africa covering education innovation, community impact, and student success stories across Africa.';
$extraCSS = ['css/news.css'];
$extraHead = '<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>';
include 'includes/header.php';
?>

    <main id="articleApp">
      <header class="article-hero-navy">
        <div class="container">
          <p class="green-tag" id="artCategory">Loading Category...</p>
          <h1 id="artTitle">Loading Article...</h1>
          <p id="artDate" class="text-bright-tag"></p>
        </div>
      </header>

      <section class="article-body-section">
        <div class="container article-split-grid">
          <!-- LEFT SIDE: STICKY IMAGE -->
          <div class="art-visual-side">
            <div class="sticky-box">
              <div class="img-container">
                <img id="artImg" src="" alt="" style="display: none" />
                <div id="artIcon" class="placeholder-icon">
                  <i class="fa-solid fa-book-open"></i>
                </div>
              </div>
            </div>
          </div>

          <!-- RIGHT SIDE: SCROLLING CONTENT -->
          <div class="art-content-side">
            <div id="artContent" class="markdown-body">
              <!-- Contentful Body Injected Here -->
            </div>
            <a href="news.php" class="back-link"
              ><i class="fa-solid fa-arrow-left"></i> Back to Newsroom</a
            >
          </div>
        </div>
      </section>
    </main>

<?php include 'includes/footer.php'; ?>

    <script src="js/news-data.js"></script>
    <script>
      document.addEventListener("DOMContentLoaded", async () => {
        const params = new URLSearchParams(window.location.search);
        const slug = params.get("slug");

        if (!slug) {
          window.location.href = "news.php";
          return;
        }

        const article = await getArticleBySlug(slug);

        if (article) {
          document.title = `${article.title} | AEH News`;
          document.getElementById("artTitle").innerText = article.title;
          document.getElementById("artCategory").innerText = article.category;
          document.getElementById("artDate").innerText = article.date;

          if (typeof marked !== "undefined") {
            document.getElementById("artContent").innerHTML = marked.parse(
              article.content,
            );
          } else {
            document.getElementById("artContent").innerText = article.content;
          }

          const imgEl = document.getElementById("artImg");
          const iconEl = document.getElementById("artIcon");

          if (article.image && article.image !== "") {
            imgEl.src = article.image;
            imgEl.style.display = "block";
            iconEl.style.display = "none";
          } else {
            imgEl.style.display = "none";
            iconEl.style.display = "flex";
          }
        } else {
          document.getElementById("artTitle").innerText = "Article not found.";
        }
      });
    </script>
