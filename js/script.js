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

  // --- CABS HERO MESSAGE ROTATION ---
  const cabsHeroSlides = document.querySelectorAll(".cabs-hero-slide");
  const cabsHeroBackgrounds = document.querySelectorAll(".cabs-hero-bg");
  if (cabsHeroSlides.length > 1) {
    let activeCabsHeroSlide = 0;

    const showCabsHeroSlide = (index) => {
      cabsHeroSlides.forEach((slide, slideIndex) => {
        const isActive = slideIndex === index;
        slide.classList.toggle("is-active", isActive);
        slide.setAttribute("aria-hidden", String(!isActive));
        slide.inert = !isActive;
      });

      cabsHeroBackgrounds.forEach((background, backgroundIndex) => {
        background.classList.toggle("is-active", backgroundIndex === index);
      });
    };

    window.setInterval(() => {
      activeCabsHeroSlide =
        (activeCabsHeroSlide + 1) % cabsHeroSlides.length;
      showCabsHeroSlide(activeCabsHeroSlide);
    }, 7000);
  }

  // --- 5. CINEMATIC JOURNEY: HORIZONTAL SCROLL LOCK ---
  // --- CINEMATIC JOURNEY: SCROLL, BACKGROUND & PAGING LOGIC ---
  const journeyWrap = document.getElementById("journeySection");
  const masteryBlock = document.getElementById("masteryMovement");
  const masteryFill = document.querySelector(".mastery-slider-fill");

  if (journeyWrap && masteryBlock) {
    const updateJourneyState = () => {
      const rect = journeyWrap.getBoundingClientRect();
      const scrollDist = -rect.top;
      const wrapHeight = journeyWrap.offsetHeight;
      const viewHeight = window.innerHeight;
      const totalScrollArea = Math.max(1, wrapHeight - viewHeight);
      const rawSectionProgress = scrollDist / totalScrollArea;
      const sectionProgress = Math.max(0, Math.min(1, rawSectionProgress));

      // 1. Background & Helix/Mastery Toggle
      // Trigger dark mode and helix fade a little earlier on the shorter track
      if (sectionProgress > 0.2) {
        journeyWrap.classList.add("bg-dark");
      } else {
        journeyWrap.classList.remove("bg-dark");
      }

      // 2. Mastery Grid Paging Logic
      // Switch to set 2 once the viewer is well into the journey section.
      const onSecondPage = sectionProgress > 0.58;

      if (onSecondPage) {
        masteryBlock.classList.add("show-second-page");
      } else {
        masteryBlock.classList.remove("show-second-page");
      }

      // 3. Update the vertical slider fill
      if (masteryFill) {
        // Simple toggle for the two pages
        masteryFill.style.transform = onSecondPage
          ? "translateY(100%)"
          : "translateY(0%)";
      }
    };

    window.addEventListener("scroll", updateJourneyState, { passive: true });
    window.addEventListener("resize", updateJourneyState);
    updateJourneyState();
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

  // Allow deep-link opening of the partner modal from other pages.
  if (window.location.hash === "#partner-modal") {
    toggleModal(true);
    if (window.history && window.history.replaceState) {
      window.history.replaceState(null, "", window.location.pathname);
    }
  }

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

function openApplicationModal() {
  const modal = document.getElementById("applicationModal");
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

function closeApplicationModal() {
  const modal = document.getElementById("applicationModal");
  if (modal) {
    modal.classList.remove("active");
    document.body.style.overflow = "auto";
  }
}

function openScholarshipModal() {
  const modal = document.getElementById("scholarshipModal");
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

function closeScholarshipModal() {
  const modal = document.getElementById("scholarshipModal");
  if (modal) {
    modal.classList.remove("active");
    document.body.style.overflow = "auto";
  }
}

// Newsletter Modal Logic
function openNewsletterModal() {
  const modal = document.getElementById("newsletterModal");
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

function closeNewsletterModal() {
  const modal = document.getElementById("newsletterModal");
  if (modal) {
    modal.classList.remove("active");
    document.body.style.overflow = "auto";
  }
}

function openPurposeContactModal() {
  const modal = document.getElementById("purposeContactModal");
  if (modal) {
    modal.classList.add("active");
    document.body.style.overflow = "hidden";
  }
}

function closePurposeContactModal() {
  const modal = document.getElementById("purposeContactModal");
  if (modal) {
    modal.classList.remove("active");
    document.body.style.overflow = "auto";
  }
}

// mastery modal js

const masteryData = {
  1: {
    title: "Become the Leader Your Business Needs",
    why: "Every business eventually reaches the point where its growth is limited by the growth of its founder. Becoming a better entrepreneur begins with becoming a better leader. This first part lays the foundation for everything that follows in the CABS journey.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>the leadership principles that matter the most at every stage of building and growing a business.</li>
        <li>the mindset, habits and leadership skills that enable entrepreneurs to build and scale successful businesses.</li>
        <li>Practical frameworks for leading yourself and your team and managing your business with confidence</li>
      </ul>`,
    explore:
      "You will assess your current leadership, identify the habits and behaviors that matter most for business success, and explore strategies and frameworks to become the leader your business needs today and in the future.",
    walkaway: `<strong>Signature Deliverable:</strong>
      <p><em>Your Personal Leadership Development Plan</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A personal leadership assessment.</li>
        <li>A clear understanding of your leadership strengths and development opportunities.</li>
        <li>Practical leadership habits you can begin implementing immediately.</li>
      </ul>`,
  },
  2: {
    title: "Build Something People Want",
    why: "Successful businesses create products and services that customers value and are willing to pay for. Sustainable growth starts with understanding your customers’ needs and continuously improving your products and services to meet their evolving needs.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>How to better understand your customers' needs, challenges, and buying decisions.</li>
        <li>The principles of creating products and services that customers truly value.</li>
        <li>Practical approaches for testing ideas, gathering feedback, and continuously improving what you offer.</li>
      </ul>`,
    explore:
      "Explore how your customers experience your products and services, identify opportunities to create greater value, and develop practical strategies to strengthen your value proposition and competitive advantage.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Customer Value Creation Plan</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A clear understanding of your target customers.</li>
        <li>A refined value proposition.</li>
        <li>A plan for improving your products and services.</li>
        <li>Practical methods for gathering and using customer feedback.</li>
      </ul>`,
  },
  3: {
    title: "Find and Keep Customers",
    why: "Creating products and services that customers value is essential. However, sustainable business growth depends on your ability to communicate that value, attract new customers and build lasting relationships that keep them coming back.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>Practical sales and marketing principles for attracting and retaining customers.</li>
        <li>How to identify your ideal customers and clearly communicate the value your business offers.</li>
        <li>Strategies for building a predictable customer acquisition process and creating lasting customer relationships.</li>
      </ul>`,
    explore:
      "Explore how customers discover, evaluate, purchase, and experience your products and services. Assess your current sales and marketing activities, identify opportunities for improvement, and develop practical strategies to attract more customers and grow your business.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Sales &amp; Marketing Growth Plan</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A clearer understanding of your ideal customer.</li>
        <li>A practical customer acquisition strategy.</li>
        <li>A customer retention plan to strengthen loyalty and encourage repeat business.</li>
        <li>A sales and marketing action plan you can begin implementing immediately.</li>
      </ul>`,
  },
  4: {
    title: "Manage Your Business Finances",
    why: "If you are consistently growing your customer base, you are on the right path. Building a sustainable business, however, requires more than growth. It requires understanding how your business makes money and knowing the financial numbers that matter most. With that understanding, you can make better decisions, improve profitability and cash flow, and invest confidently in the future growth of your business.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>How to evaluate and strengthen your business model to improve profitability</li>
        <li>How to assess the financial health of your business.</li>
        <li>The financial statements and key performance indicators (KPIs) every entrepreneur should understand.</li>
        <li>How to use financial information to make better decisions about pricing, costs, cash flow, profitability, and growth.</li>
      </ul>`,
    explore:
      "Explore the financial health of your business, understand how money flows through it, identify the financial drivers that have the greatest impact on financial performance and develop practical approaches for improving profitability, managing cash flow, and making more informed business decisions.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Financial Management Dashboard</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A clear understanding of your business model and financial performance.</li>
        <li>A practical financial management dashboard with the KPIs you should monitor regularly.</li>
        <li>A framework for making better financial decisions.</li>
        <li>An action plan for improving your business's financial performance.</li>
      </ul>`,
  },
  5: {
    title: "Compete Differently",
    why: 'Most businesses try to compete by being better than their competitors without realizing that "better" is defined by the customer. Competing on the same dimensions as everyone else often leads to price competition and shrinking profits. To build a scalable and sustainable business, you should not try to be everything to everyone. Instead, choose the customer segment you want to serve, the problem you want to solve, and create unique value that competitors find difficult to match.',
    learn: `<p>You will learn:</p>
      <ul>
        <li>The principles of building a sustainable competitive advantage through strategic positioning and a unique value chain.</li>
        <li>How to define your ideal customer segment and position your business to stand out in a competitive market.</li>
        <li>How to grow your customer base by delivering unique value that competitors find difficult to match.</li>
        <li>How to make strategic choices that strengthen long-term growth and profitability.</li>
      </ul>`,
    explore:
      "Explore your market, competitors, and target customers to identify opportunities for differentiation. Assess your current competitive position and evaluate how to better define your target customer, strengthen your market position, and create unique value rather than competing on price alone.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Competitive Strategy Blueprint</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A clear understanding of your strengths, weaknesses, opportunities, and threats.</li>
        <li>A practical strategy for strengthening your market position and differentiation.</li>
        <li>A practical strategy for building a sustainable competitive advantage.</li>
        <li>An action plan for creating long-term competitive advantage. Top of Form</li>
      </ul>
      <p>Bottom of Form</p>`,
  },
  6: {
    title: "Build a Great Team",
    why: '"If you want to go fast, go alone. If you want to go far, go together" As your business grows, your ability to attract, develop, and lead great people will determine whether you build a business that depends on you or an enduring company that thrives beyond you.\n\nMany entrepreneurs struggle to build high-performing teams because they hire reactively, fail to define clear roles and expectations, or spend too little time developing their people and culture. As a result, they become overwhelmed by day-to-day operations, limiting the growth of their business.\n\nBuilding a great team requires more than hiring talented people. It requires creating a shared purpose, defining clear roles and accountability, developing leaders, and fostering a culture where people can do their best work.',
    learn: `<p>You will learn:</p>
      <ul>
        <li>How to hire the right people for your business.</li>
        <li>How to define clear roles, responsibilities, and accountability.</li>
        <li>How to build a high-performing organizational culture.</li>
        <li>How to motivate, develop, and retain talented employees.</li>
        <li>How to delegate effectively and develop future leaders.</li>
        <li>How to build and lead a team capable of sustaining long-term business growth.</li>
      </ul>`,
    explore:
      "Explore your current team structure, leadership approach, and organizational culture to identify opportunities for improvement. Assess whether you have the right people in the right roles, evaluate your hiring and performance management practices, and develop strategies to build a stronger, more engaged, and higher-performing team.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Team and Culture Blueprint</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A clear organizational structure aligned with your business strategy.</li>
        <li>Well-defined roles, responsibilities, and accountability.</li>
        <li>A practical hiring and talent development strategy.</li>
        <li>An action plan for building a high-performing organizational culture.</li>
      </ul>`,
  },
  7: {
    title: "Build Systems",
    why: "As a successful business grows, its biggest constraint often shifts from customer demand to its ability to deliver consistent value.\n\nMany businesses struggle to transition from an owner-dependent business to a scalable and sustainable company because they rely on people rather than well-designed systems. As the business grows, processes become inconsistent, communication breaks down, mistakes increase, and the founder becomes a bottleneck.\n\nBuilding effective systems allows your business to operate more efficiently, deliver consistent value to customers, improve quality, reduce costs, and continue growing without becoming overly dependent on any one individual.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>How to identify the core systems every growing business needs.</li>
        <li>How to design, standardize and continuously improve business systems and processes.</li>
        <li>How to improve efficiency, quality, and consistency across your business.</li>
        <li>How to build systems that support growth while reducing dependence on the founder.</li>
      </ul>`,
    explore:
      "Explore how work flows through your business from serving customers to delivering products or services. Identify bottlenecks, inefficiencies, and areas of unnecessary complexity. Assess the effectiveness of your current business processes and develop practical systems that improve productivity, consistency, and scalability.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Business Operating System</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A map of your core business processes.</li>
        <li>A plan for improving operational efficiency.</li>
        <li>A framework for continuously improving your systems and processes as your business grows.</li>
      </ul>`,
  },
  8: {
    title: "Leverage Technology for Scale",
    why: "Technology is transforming how businesses operate, compete, and grow. It enables businesses to reach more customers, improve productivity, make better decisions, and deliver greater value at lower cost.\n\nHowever, choosing and implementing the right technology system can be challenging, particularly in today’s rapidly evolving digital landscape and emergence of artificial intelligence (AI). It requires a practical framework for evaluating which technologies will strengthen your competitive advantage, improve your business performance, and create greater value for your customers.\n\nTechnology is no longer a preserve for large companies. Businesses of every size can now leverage affordable digital tools and AI to compete more effectively. Every entrepreneur therefore needs to understand how to use technology strategically to enhance sales and marketing, improve operations, enhance decision making, reduce costs and deliver greater value to its customers.",
    learn: `<p>You will learn:</p>
      <ul>
        <li>How to evaluate and prioritize technology investments that deliver the greatest business impact.</li>
        <li>How to use digital tools to improve productivity, efficiency, and collaboration.</li>
        <li>How to leverage data and analytics to make better business decisions.</li>
        <li>How to use artificial intelligence (AI) to improve customer service, marketing, operations, and decision-making.</li>
      </ul>`,
    explore:
      "Explore how technology supports every part of your business—from marketing and sales to operations, finance, customer service, and decision-making. Assess your current use of technology, identify opportunities for automation and innovation, and develop a practical roadmap for adopting technology that improves efficiency, customer value, and long-term growth.",
    walkaway: `<strong>Signature Deliverable</strong>
      <p><em>Your Technology Roadmap</em></p>
      <p>You will also leave with:</p>
      <ul>
        <li>A technology and digital maturity assessment of your business.</li>
        <li>A practical AI adoption strategy.</li>
        <li>A roadmap for using technology to improve productivity, customer value, and business growth.</li>
      </ul>`,
  },
};

function openMasteryModal(id) {
  const data = masteryData[id];
  if (!data) return;

  const modal = document.getElementById("masteryModal");
  if (modal && modal.parentElement !== document.body) {
    document.body.appendChild(modal);
  }

  document.getElementById("m-modal-num").innerText = id < 10 ? `0${id}` : id;
  document.getElementById("m-modal-title").innerText = data.title;
  document.getElementById("m-modal-why").innerText = data.why;
  document.getElementById("m-modal-learn").innerHTML = data.learn;
  document.getElementById("m-modal-explore").innerText = data.explore;
  document.getElementById("m-modal-walkaway").innerHTML = data.walkaway;

  modal.classList.add("active");
  document.body.style.overflow = "hidden";
}

function closeMasteryModal() {
  document.getElementById("masteryModal").classList.remove("active");
  document.body.style.overflow = "auto";
}
