/**
 * AEH GLOBAL SCRIPT
 * Version: Institutional Premium
 */

document.addEventListener("DOMContentLoaded", () => {
  // --- 1. DEFINITIONS & LOADER ---
  const preloader = document.getElementById("aeh-loader");
  let loaderDismissed = false;
  const hideLoader = () => {
    if (!preloader || loaderDismissed) return;
    loaderDismissed = true;
    preloader.classList.add("loader-finished");
    document.body.classList.remove("content-hidden");
  };
  setTimeout(hideLoader, 800);
  setTimeout(hideLoader, 4000);

  // --- 2. AUTOMATIC ACTIVE NAV LINK LOGIC ---
  const navLinks = document.querySelectorAll(".nav-links > a");
  const normalizePath = (path) => (path ? path.replace(/\/+$/, "") : "");
  const currentPath = normalizePath(window.location.pathname.toLowerCase());

  navLinks.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (!linkHref || linkHref === "#") return;
    if (currentPath.includes(linkHref.toLowerCase().replace(".html", ""))) {
      link.classList.add("active-link");
    }
  });

  // --- 3. GLOBAL REDIRECTION & HAMBURGER ---
  const allLinks = document.querySelectorAll("a");
  allLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      const destination = link.getAttribute("href");
      if (
        destination &&
        !destination.startsWith("#") &&
        !destination.startsWith("http") &&
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

  const hamburgerBtn = document.querySelector(".hamburger");
  const navLinksEl = document.querySelector(".nav-links");
  if (hamburgerBtn && navLinksEl) {
    hamburgerBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      document.body.classList.toggle("nav-open");
    });
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

  // --- 4. SWIPERS ---
  if (typeof Swiper !== "undefined") {
    if (document.querySelector(".hero-swiper-main")) {
      new Swiper(".hero-swiper-main", {
        effect: "fade",
        speed: 1500,
        loop: true,
        autoplay: { delay: 6000 },
        fadeEffect: { crossFade: true },
        navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" },
        pagination: { el: ".hero-pagination-fraction", type: "fraction" },
      });
    }

    if (document.querySelector(".portfolio-swiper")) {
      new Swiper(".portfolio-swiper", {
        loop: true,
        speed: 1200,
        grabCursor: true,
        autoplay: {
          delay: 5000,
          disableOnInteraction: false,
          pauseOnMouseEnter: true,
        },
        navigation: { nextEl: ".port-next", prevEl: ".port-prev" },
        pagination: {
          el: ".port-pagination",
          type: "fraction",
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
    }

    if (document.querySelector(".testimonial-swiper")) {
      new Swiper(".testimonial-swiper", {
        loop: true,
        speed: 1200,
        spaceBetween: 30,
        autoplay: { delay: 5000 },
        navigation: { nextEl: ".test-next", prevEl: ".test-prev" },
        pagination: {
          el: ".test-pagination-dots",
          clickable: true,
          type: "bullets",
        },
      });
    }

    if (document.querySelector(".partners-swiper")) {
      new Swiper(".partners-swiper", {
        loop: true,
        slidesPerView: "auto",
        spaceBetween: 0,
        speed: 10000,
        allowTouchMove: false,
        freeMode: true,
        autoplay: { delay: 0 },
      });
    }

    const beliefSwipers = document.querySelectorAll(".belief-story-swiper");
    beliefSwipers.forEach((sliderEl) => {
      const totalSlides = sliderEl.querySelectorAll(".swiper-slide").length;
      const prevEl = sliderEl.querySelector(".b-prev");
      const nextEl = sliderEl.querySelector(".b-next");

      const sliderConfig = {
        speed: 900,
        spaceBetween: 24,
        autoHeight: true,
        loop: totalSlides > 1,
      };

      if (prevEl && nextEl) {
        sliderConfig.navigation = { prevEl, nextEl };
      }

      if (totalSlides > 1) {
        sliderConfig.autoplay = {
          delay: 6500,
          disableOnInteraction: false,
        };
      }

      new Swiper(sliderEl, sliderConfig);
    });
  }

  // --- 5. CINEMATIC JOURNEY: HORIZONTAL SCROLL LOCK ---
  const journeyWrap = document.getElementById("journeySection");
  const ribbonFlow = document.getElementById("ribbonFlow");
  const ribbonProgress = document.getElementById("ribbonProgress");
  const scrollHint = document.querySelector(".ribbon-scroll-hint");

  if (journeyWrap && ribbonFlow) {
    window.addEventListener(
      "scroll",
      () => {
        const rect = journeyWrap.getBoundingClientRect();

        // scrollDist = how many px of the section have scrolled past the top of the viewport
        const scrollDist = -rect.top;
        const viewHeight = window.innerHeight;

        // ── Phase 1: Background + visibility toggle ──────────────────────────────
        // Swap to dark once the user has scrolled 20% of a viewport height into the section.
        if (scrollDist > viewHeight * 0.2) {
          journeyWrap.classList.add("bg-dark");
        } else {
          journeyWrap.classList.remove("bg-dark");
        }

        // ── Phase 2: Horizontal ribbon movement ──────────────────────────────────
        const ribbonStart = viewHeight;
        const ribbonRange = viewHeight * 2;

        const ribbonPhase = Math.min(
          Math.max((scrollDist - ribbonStart) / ribbonRange, 0),
          1,
        );

        const leftPad = window.innerWidth * 0.08;
        const maxScroll = ribbonFlow.scrollWidth - window.innerWidth + leftPad;

        if (maxScroll > 0) {
          ribbonFlow.style.transform = `translateX(-${ribbonPhase * maxScroll}px)`;
        }

        // ── Phase 3: Progress bar + hint ──────────────────────────────────────────
        if (ribbonProgress) {
          ribbonProgress.style.width = `${ribbonPhase * 100}%`;
        }
        if (scrollHint) {
          if (ribbonPhase >= 0.95) {
            scrollHint.classList.add("hidden");
          } else {
            scrollHint.classList.remove("hidden");
          }
        }
      },
      { passive: true },
    );
  }

  // --- 6. MODALS & REVEALS ---
  const partnerModal = document.getElementById("partnerModal");
  const openModalBtn = document.getElementById("openPartnerModal");
  const openModalBtnFinal = document.getElementById("openPartnerModalFinal");
  const closeModalBtn = document.getElementById("closePartnerModal");
  const modalOverlay = document.getElementById("closeModalOverlay");

  const toggleModal = (show) => {
    if (partnerModal) {
      partnerModal.classList.toggle("active", show);
      document.body.style.overflow = show ? "hidden" : "auto";
    }
  };
  if (openModalBtn)
    openModalBtn.addEventListener("click", () => toggleModal(true));
  if (openModalBtnFinal)
    openModalBtnFinal.addEventListener("click", (e) => {
      e.preventDefault();
      toggleModal(true);
    });
  if (closeModalBtn)
    closeModalBtn.addEventListener("click", () => toggleModal(false));
  if (modalOverlay)
    modalOverlay.addEventListener("click", () => toggleModal(false));

  const revealItems = document.querySelectorAll(
    ".proof-reveal-item, .founder-card, .multiplier-card",
  );
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("revealed");
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.1 },
  );
  revealItems.forEach((item) => observer.observe(item));
});

// --- GLOBAL FUNCTIONS ---
function openVideoModal(videoSource) {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoPlayer");
  const localVideo = document.getElementById("localVideoPlayer");
  if (!modal || !iframe || !localVideo) return;

  const isLocal =
    videoSource.includes(".") || videoSource.startsWith("videos/");
  if (isLocal) {
    iframe.style.display = "none";
    localVideo.style.display = "block";
    localVideo.src = videoSource;
    localVideo.play();
  } else {
    localVideo.style.display = "none";
    iframe.style.display = "block";
    iframe.src = `https://www.youtube.com/embed/${videoSource}?autoplay=1&rel=0`; // FIXED TYPO HERE
  }
  modal.classList.add("active");
  document.body.style.overflow = "hidden";
}

function closeVideoModal() {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoPlayer");
  const localVideo = document.getElementById("localVideoPlayer");
  if (modal && iframe && localVideo) {
    modal.classList.remove("active");
    iframe.src = "";
    localVideo.pause();
    document.body.style.overflow = "auto";
  }
}
