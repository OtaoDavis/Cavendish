/**
 * AEH GLOBAL SCRIPT
 * Version: Institutional Premium
 */

document.addEventListener("DOMContentLoaded", () => {
  // --- 0. DEFINITIONS ---
  const preloader = document.getElementById("aeh-loader");

  // --- 1. LOADER HIDE LOGIC ---
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

  const normalizePath = (path) => {
    if (!path) return "";
    return path.replace(/\/+$/, "");
  };

  const getLastSegment = (path) => {
    const normalized = normalizePath(path);
    const segments = normalized.split("/").filter(Boolean);
    return segments.length ? segments[segments.length - 1].toLowerCase() : "";
  };

  const toNavKey = (pathOrSlug) => {
    const value = (pathOrSlug || "").toLowerCase();
    const aliases = {
      home: ["", "/", "index.html"],
      purpose: ["our-purpose", "purpose.html"],
      network: ["cavendish-network", "network.html"],
      business: ["cavendish-business-school", "cabs.html"],
      team: ["team", "team.html"],
    };

    for (const [key, values] of Object.entries(aliases)) {
      if (values.some((v) => value === v || value.endsWith(`/${v}`))) {
        return key;
      }
    }

    return getLastSegment(value);
  };

  const toNavKeyFromLabel = (label) => {
    const text = (label || "").trim().toLowerCase();
    if (text === "purpose") return "purpose";
    if (text === "universities") return "network";
    if (text === "business school") return "business";
    if (text === "team") return "team";
    return "";
  };

  const currentPath = normalizePath(window.location.pathname.toLowerCase());
  const currentKey = toNavKey(currentPath || getLastSegment(currentPath));

  navLinks.forEach((link) => {
    const linkHref = link.getAttribute("href");
    if (!linkHref || linkHref === "#") return;

    const linkUrl = new URL(linkHref, window.location.origin);
    const linkPath = normalizePath(linkUrl.pathname.toLowerCase());
    const linkKey =
      toNavKey(linkPath || getLastSegment(linkPath) || linkHref) ||
      toNavKeyFromLabel(link.textContent);

    if (currentKey === linkKey) {
      link.classList.add("active-link");
    }
  });

  // --- 3. GLOBAL REDIRECTION LOGIC ---
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

  // --- 4. HAMBURGER MENU LOGIC ---
  const hamburgerBtn = document.querySelector(".hamburger");
  const navLinksEl = document.querySelector(".nav-links");
  if (hamburgerBtn && navLinksEl) {
    hamburgerBtn.addEventListener("click", (e) => {
      e.stopPropagation();
      document.body.classList.toggle("nav-open");
    });

    navLinksEl.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        if (link.classList.contains("nav-btn-dropdown")) return;
        document.body.classList.remove("nav-open");
      });
    });

    const navDropdown = navLinksEl.querySelector(".nav-dropdown");
    const navDropdownToggle = navLinksEl.querySelector(".nav-btn-dropdown");

    if (navDropdown && navDropdownToggle) {
      navDropdownToggle.addEventListener("click", (e) => {
        if (window.matchMedia("(max-width: 768px)").matches) {
          e.preventDefault();
          navDropdown.classList.toggle("open");
        }
      });

      document.addEventListener("click", (e) => {
        if (!navDropdown.contains(e.target)) {
          navDropdown.classList.remove("open");
        }
      });

      window.addEventListener("resize", () => {
        if (window.matchMedia("(min-width: 769px)").matches) {
          navDropdown.classList.remove("open");
        }
      });
    }

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

  // --- 4.5 NETWORK PORTAL TABS (Network Page) ---
  const portalLinks = document.querySelectorAll(".portal-link");
  const assetViews = document.querySelectorAll(".asset-view");

  const activatePortalView = (targetId) => {
    if (!targetId) return;

    const targetView = document.getElementById(targetId);
    if (!targetView) return;

    portalLinks.forEach((item) => item.classList.remove("active"));
    assetViews.forEach((view) => view.classList.remove("active"));

    const activeLink = document.querySelector(
      `.portal-link[data-target="${targetId}"]`,
    );
    if (activeLink) activeLink.classList.add("active");
    targetView.classList.add("active");
  };

  if (portalLinks.length && assetViews.length) {
    portalLinks.forEach((link) => {
      link.addEventListener("click", () => {
        const targetId = link.dataset.target;
        activatePortalView(targetId);
      });
    });

    const openFromHash = () => {
      const hash = window.location.hash.replace("#", "");
      if (!hash) return;

      let sectionId = "";
      if (hash.startsWith("zambia")) sectionId = "zambia";
      if (hash.startsWith("uganda")) sectionId = "uganda";
      if (hash.startsWith("standard")) sectionId = "standard";

      if (sectionId) activatePortalView(sectionId);

      const targetEl = document.getElementById(hash);
      if (targetEl) {
        setTimeout(() => {
          targetEl.scrollIntoView({ behavior: "smooth", block: "start" });
        }, 80);
      }
    };

    openFromHash();
    window.addEventListener("hashchange", openFromHash);
  }

  const facultyWrappers = document.querySelectorAll(
    ".faculties-interactive-wrapper",
  );

  facultyWrappers.forEach((wrapper) => {
    const tabs = wrapper.querySelectorAll(".faculty-tab");
    const panels = wrapper.querySelectorAll(".faculty-programs");

    if (!tabs.length || !panels.length) return;

    tabs.forEach((tab) => {
      tab.addEventListener("click", () => {
        const targetId = tab.dataset.target;
        if (!targetId) return;

        const targetPanel = wrapper.querySelector(`#${targetId}`);
        if (!targetPanel) return;

        tabs.forEach((item) => item.classList.remove("active"));
        panels.forEach((panel) => panel.classList.remove("active"));

        tab.classList.add("active");
        targetPanel.classList.add("active");
      });
    });
  });

  // --- 5. SWIPER INITIALIZATIONS ---

  // Main Hero Swiper
  const mainHeroSwiper = new Swiper(".hero-swiper-main", {
    effect: "fade",
    speed: 1500,
    loop: true,
    autoplay: { delay: 6000, disableOnInteraction: false },
    fadeEffect: { crossFade: true },
    navigation: { nextEl: ".hero-next", prevEl: ".hero-prev" },
    pagination: { el: ".hero-pagination-fraction", type: "fraction" },
  });

  // Portfolio Swiper
  const portfolioSwiper = new Swiper(".portfolio-swiper", {
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

  // Home Page Testimonial Swiper
  const testimonialSwiper = new Swiper(".testimonial-swiper", {
    loop: true,
    speed: 1200,
    spaceBetween: 30,
    autoplay: { delay: 5000, disableOnInteraction: false },
    navigation: { nextEl: ".test-next", prevEl: ".test-prev" },
    pagination: {
      el: ".test-pagination-dots",
      clickable: true,
      type: "bullets",
    },
  });

  // NEW: Purpose Page Nested Belief Swipers
  document.querySelectorAll(".belief-story-swiper").forEach((swiperEl) => {
    const nextEl = swiperEl.querySelector(".b-next");
    const prevEl = swiperEl.querySelector(".b-prev");

    new Swiper(swiperEl, {
      speed: 800,
      loop: true,
      observer: true,
      observeParents: true,
      navigation: {
        nextEl,
        prevEl,
      },
    });
  });

  // --- 6. IMAGE FLASH GALLERY LOGIC (Purpose Page) ---
  const galleries = document.querySelectorAll(".flash-gallery");
  galleries.forEach((gallery) => {
    const images = gallery.querySelectorAll(".flash-img");
    if (images.length <= 1) return;

    let currentIndex = 0;
    setInterval(() => {
      images[currentIndex].classList.remove("active");
      currentIndex = (currentIndex + 1) % images.length;
      images[currentIndex].classList.add("active");
    }, 4000); // Change image every 4 seconds
  });

  // --- 7. PARTNERS LOGO LOOP ---
  const partnersSwiper = new Swiper(".partners-swiper", {
    loop: true,
    slidesPerView: "auto",
    spaceBetween: 0,
    speed: 10000,
    allowTouchMove: false,
    freeMode: true,
    autoplay: { delay: 0, disableOnInteraction: false },
  });

  // --- 8. MODAL LOGIC ---
  const partnerModal = document.getElementById("partnerModal");
  const openModalBtn = document.getElementById("openPartnerModal");
  const openModalBtnFinal = document.getElementById("openPartnerModalFinal");
  const closeModalBtn = document.getElementById("closePartnerModal");
  const modalOverlay = document.getElementById("closeModalOverlay");

  const toggleModal = (show) => {
    if (!partnerModal) return;
    partnerModal.classList.toggle("active", show);
    document.body.style.overflow = show ? "hidden" : "auto";
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

  // --- 9. SCROLL REVEAL (Intersection Observer) ---
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
}); // END DOMCONTENTLOADED

// --- GLOBAL FUNCTIONS (Outside DOMContentLoaded) ---
function openVideoModal(videoSource) {
  const modal = document.getElementById("videoModal");
  const iframe = document.getElementById("videoPlayer");
  const localVideo = document.getElementById("localVideoPlayer");
  if (!modal || !iframe || !localVideo) return;

  const isLocal =
    videoSource.includes(".") || videoSource.startsWith("videos/");
  if (isLocal) {
    iframe.style.display = "none";
    iframe.src = "";
    localVideo.style.display = "block";
    localVideo.src = videoSource;
    localVideo.play();
  } else {
    localVideo.style.display = "none";
    localVideo.pause();
    localVideo.removeAttribute("src");
    iframe.style.display = "block";
    iframe.src = `https://www.youtube.com/embed/${videoSource}?autoplay=1&rel=0`;
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
    localVideo.removeAttribute("src");
    localVideo.load();
    document.body.style.overflow = "auto";
  }
}
