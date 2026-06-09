/**
 * AEH GLOBAL SCRIPT
 * Version: Institutional Premium
 * Features: Loader, Page Transitions, Mobile Menu, Video Modal, Active Nav, Faculty Tabs, Problem Cards
 */

document.addEventListener("DOMContentLoaded", () => {
  // --- 0. DEFINITIONS ---
  const preloader = document.getElementById("aeh-loader");
  const btn = document.getElementById("menu-btn");
  const menu = document.getElementById("menu");

  // --- 1. LOADER HIDE LOGIC ---
  let loaderDismissed = false;
  const hideLoader = () => {
    if (!preloader || loaderDismissed) return;
    loaderDismissed = true;
    preloader.classList.add("loader-finished");
    document.body.classList.remove("content-hidden");
  };

  // Dismiss loader shortly after DOM is ready (no need to wait for all images/videos)
  setTimeout(hideLoader, 800);

  // Safety fallback in case setTimeout is delayed
  setTimeout(hideLoader, 4000);

  // --- 2. AUTOMATIC ACTIVE NAV LINK LOGIC ---
  const currentUrl = window.location.pathname.split("/").pop();
  const navLinks = document.querySelectorAll(".nav-links a");

  navLinks.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (currentUrl === linkHref) {
      link.classList.add("active-link");
    }
    // Home cases
    if (
      (currentUrl === "" || currentUrl === "index.html") &&
      linkHref === "index.html"
    ) {
      link.classList.add("active-link");
    }
  });

  // --- 3. GLOBAL REDIRECTION LOGIC (Page Transitions) ---
  const allLinks = document.querySelectorAll("a");
  allLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const destination = link.getAttribute("href");
      if (
        destination &&
        !destination.startsWith("#") &&
        !destination.startsWith("http") &&
        !destination.startsWith("mailto:") &&
        !destination.startsWith("tel:") &&
        link.target !== "_blank" &&
        !e.metaKey &&
        !e.ctrlKey
      ) {
        e.preventDefault();
        if (preloader) preloader.classList.remove("loader-finished");
        setTimeout(() => {
          window.location.href = destination;
        }, 500);
      }
    });
  });

  // --- 4. HAMBURGER MENU LOGIC ---
  const hamburgerBtn = document.querySelector(".hamburger");
  const navLinksEl = document.querySelector(".nav-links");

  if (hamburgerBtn && navLinksEl) {
    hamburgerBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      document.body.classList.toggle("nav-open");
    });

    // Close menu when a nav link is clicked
    navLinksEl.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        document.body.classList.remove("nav-open");
      });
    });

    // Close on outside click
    document.addEventListener("click", (e) => {
      if (
        document.body.classList.contains("nav-open") &&
        !navLinksEl.contains(e.target) &&
        !hamburgerBtn.contains(e.target)
      ) {
        document.body.classList.remove("nav-open");
      }
    });
  }

  // --- 5. INTERACTIVE FACULTY TABS (Network Page) ---
  const facultyTabs = document.querySelectorAll(".faculty-tab");
  facultyTabs.forEach((tab) => {
    tab.addEventListener("click", function () {
      const wrapper = this.closest(".faculties-interactive-wrapper");
      const targetId = this.dataset.target;
      const targetContent = document.getElementById(targetId);

      if (wrapper && targetContent) {
        wrapper
          .querySelectorAll(".faculty-tab")
          .forEach((t) => t.classList.remove("active"));
        wrapper
          .querySelectorAll(".faculty-programs")
          .forEach((p) => p.classList.remove("active"));
        this.classList.add("active");
        targetContent.classList.add("active");
      }
    });
  });

  // 3. Swipers
  // --- Hero Swiper Initialization ---
  const mainHeroSwiper = new Swiper(".hero-swiper-main", {
    effect: "fade",
    speed: 1500,
    loop: true,
    autoHeight: false, // Force slides to stay 100% height
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    fadeEffect: {
      crossFade: true,
    },
    navigation: {
      nextEl: ".hero-next",
      prevEl: ".hero-prev",
    },
    pagination: {
      /* Ensure this matches the class in your HTML */
      el: ".hero-pagination-fraction",
      type: "fraction",
      formatFractionCurrent: (n) => (n < 10 ? "0" + n : n),
      formatFractionTotal: (n) => (n < 10 ? "0" + n : n),
    },
  });

  const portfolioSwiper = new Swiper(".portfolio-swiper", {
    loop: true,
    speed: 1000,
    grabCursor: true,
    navigation: {
      nextEl: ".port-next",
      prevEl: ".port-prev",
    },
    pagination: {
      el: ".port-pagination",
      type: "fraction",
      formatFractionCurrent: (n) => (n < 10 ? "0" + n : n),
      formatFractionTotal: (n) => (n < 10 ? "0" + n : n),
      // This creates the "01 / 03" format
      renderFraction: function (currentClass, totalClass) {
        return (
          '<span class="' +
          currentClass +
          '"></span>' +
          " / " +
          '<span class="' +
          totalClass +
          '"></span>'
        );
      },
    },
  });

  const testimonialSwiper = new Swiper(".testimonial-swiper", {
    loop: true,
    speed: 1200,
    spaceBetween: 30,
    // AUTO SCROLL SETTINGS
    autoplay: {
      delay: 5000, // 5 seconds per slide
      disableOnInteraction: false, // Keeps scrolling even after user clicks
    },
    navigation: {
      nextEl: ".test-next",
      prevEl: ".test-prev",
    },
    pagination: {
      el: ".test-pagination-dots",
      clickable: true, // Allows users to click dots to skip
      type: "bullets",
    },
  });

  // 1. Partners Logo Loop (continuous slow crawl)
  const partnersSlidesCount = document.querySelectorAll(
    ".partners-swiper .swiper-slide",
  ).length;

  // Partners Logo Infinity Loop
  const partnersSwiper = new Swiper(".partners-swiper", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 0,
    speed: 10000, // 10 seconds for a full crawl (increase for slower, decrease for faster)
    allowTouchMove: false,
    freeMode: true,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
  });

  // 2. Partnership Modal Logic
  const partnerModal = document.getElementById("partnerModal");
  const openModalBtn = document.getElementById("openPartnerModal");
  const closeModalBtn = document.getElementById("closePartnerModal");
  const modalOverlay = document.getElementById("closeModalOverlay");

  if (openModalBtn && partnerModal) {
    openModalBtn.addEventListener("click", () => {
      partnerModal.classList.add("active");
      document.body.style.overflow = "hidden"; // Prevent background scroll
    });

    const closeModal = () => {
      partnerModal.classList.remove("active");
      document.body.style.overflow = "auto";
    };

    closeModalBtn.addEventListener("click", closeModal);
    modalOverlay.addEventListener("click", closeModal);

    // Close on Escape
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") closeModal();
    });
  }

  // --- 7. PORTAL SWITCHER (Network Page Sidebar) ---
  const portalLinks = document.querySelectorAll(".portal-link");
  const assetViews = document.querySelectorAll(".asset-view");
  portalLinks.forEach((button) => {
    button.addEventListener("click", () => {
      const targetId = button.dataset.target;
      portalLinks.forEach((btn) => btn.classList.remove("active"));
      button.classList.add("active");
      assetViews.forEach((section) => section.classList.remove("active"));
      const targetSection = document.getElementById(targetId);
      if (targetSection) targetSection.classList.add("active");
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  });
});

// --- 8. GLOBAL VIDEO MODAL FUNCTIONS ---
// Outside DOMContentLoaded for HTML 'onclick' support
/**
 * Opens the Video Modal dynamically
 * @param {string} videoID - The YouTube ID (e.g., 'JMLsHI8aV0g')
 */
function openVideoModal(videoSource) {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoPlayer");
  const localVideo = document.getElementById("localVideoPlayer");

  if (!modal) return;

  // Check if the source is a local file (ends in .mp4, .webm, etc.)
  const isLocal =
    videoSource.includes(".") || videoSource.startsWith("videos/");

  if (isLocal) {
    // Handle Local Video
    iframe.style.display = "none";
    iframe.src = "";

    localVideo.style.display = "block";
    localVideo.src = videoSource;
    localVideo.play();
  } else {
    // Handle YouTube Video
    localVideo.style.display = "none";
    localVideo.pause();

    iframe.style.display = "block";
    iframe.src = `https://www.youtube.com/embed/${videoSource}?autoplay=1&rel=0`;
  }

  modal.classList.add("active");
  document.body.style.overflow = "hidden"; // Lock scroll
}

function closeVideoModal() {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoPlayer");
  const localVideo = document.getElementById("localVideoPlayer");

  if (modal) {
    modal.classList.remove("active");
    // Stop YouTube
    iframe.src = "";
    // Stop Local
    localVideo.pause();
    localVideo.src = "";

    document.body.style.overflow = "auto"; // Unlock scroll
  }
}

const yearSpan = document.getElementById("copyright-year");
if (yearSpan) {
  // Check if the element exists
  yearSpan.textContent = new Date().getFullYear();
}

// HOME PAGE HERO JS
(function () {
  const section = document.getElementById("heroSection");
  const videoBox = document.getElementById("heroVideoBox");
  const video = document.getElementById("heroVideo");
  const closeBtn = document.getElementById("videoCloseBtn");

  // Guard: only run on pages that have the home hero elements
  if (!section || !videoBox || !video || !closeBtn) return;

  function expand() {
    section.classList.add("video-expanded");
    // Unmute and restart from beginning when expanding
    video.muted = false;
    video.currentTime = 0;
    video.play();
  }

  function collapse() {
    section.classList.remove("video-expanded");
    // Mute and keep looping as background after closing
    video.muted = true;
    video.play();
  }

  // Click anywhere on the video box to expand (but not the close button)
  videoBox.addEventListener("click", function (e) {
    if (section.classList.contains("video-expanded")) return; // already open
    expand();
  });

  // Close button collapses back
  closeBtn.addEventListener("click", function (e) {
    e.stopPropagation(); // don't re-trigger videoBox click
    collapse();
  });

  // Escape key also closes
  document.addEventListener("keydown", function (e) {
    if (e.key === "Escape" && section.classList.contains("video-expanded")) {
      collapse();
    }
  });
})();

(function () {
  // ── Video player ──────────────────────────────────────────────
  //
  //  Replace 'YOUR_YOUTUBE_VIDEO_ID' with your actual YouTube video ID.
  //  E.g. if your link is https://youtu.be/abc123XYZ, the ID is abc123XYZ
  //
  var YOUTUBE_VIDEO_ID = "YOUR_YOUTUBE_VIDEO_ID";

  var videoBox = document.getElementById("cabsVideoBox");
  var videoFrame = document.getElementById("cabsVideoIframe");

  if (videoBox && videoFrame) {
    videoBox.addEventListener("click", function () {
      // Guard: don't reload if already playing
      if (videoBox.classList.contains("playing")) return;

      if (!YOUTUBE_VIDEO_ID || YOUTUBE_VIDEO_ID === "YOUR_YOUTUBE_VIDEO_ID") {
        alert("Video coming soon — please check back shortly.");
        return;
      }

      // Set source only on user click → guarantees autoplay permission
      videoFrame.src =
        "https://www.youtube.com/embed/" +
        YOUTUBE_VIDEO_ID +
        "?autoplay=1&rel=0&modestbranding=1&playsinline=1";

      // Show the iframe, hide the thumbnail
      videoBox.classList.add("playing");
    });
  }

  // ── Hero video fallback ───────────────────────────────────────
  //  If the hero <video> can't play (e.g. slow connection), show
  //  the poster image gracefully — handled automatically by the
  //  browser via the poster="" attribute on the <video> tag.

  // ── FAQ Accordion ────────────────────────────────────────────
  var faqItems = document.querySelectorAll(".faq-item");
  faqItems.forEach(function (item) {
    var btn = item.querySelector(".faq-q");
    if (!btn) return;
    btn.addEventListener("click", function () {
      var isOpen = item.classList.contains("faq-open");
      // Close all others
      faqItems.forEach(function (other) {
        other.classList.remove("faq-open");
      });
      // Toggle current
      if (!isOpen) item.classList.add("faq-open");
    });
  });

  // ── Enrollment Form ──────────────────────────────────────────
  var enrollForm = document.getElementById("enrollForm");
  var enrollSuccess = document.getElementById("enrollSuccess");
  if (enrollForm && enrollSuccess) {
    enrollForm.addEventListener("submit", function (e) {
      e.preventDefault();
      // Basic validation already handled by required attrs
      enrollForm.style.display = "none";
      enrollSuccess.style.display = "flex";
    });
  }

  // ── Scroll Reveal ────────────────────────────────────────────
  var revealEls = document.querySelectorAll(
    ".founder-card, .multiplier-card, .founder-explainer-text, .founder-explainer-visual, .enroll-info, .enroll-form-wrap, .faq-item",
  );
  if ("IntersectionObserver" in window) {
    var revealObs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add("revealed");
            revealObs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.1 },
    );
    revealEls.forEach(function (el, i) {
      el.classList.add("reveal-ready");
      el.style.transitionDelay = (i % 4) * 80 + "ms";
      revealObs.observe(el);
    });
  }
})();
