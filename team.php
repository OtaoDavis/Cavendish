<?php
$pageTitle = 'Leadership | Africa Education Holdings';
$metaDescription = "Meet the leadership team behind Africa Education Holdings. With 80+ years of combined experience in tertiary education across the U.S. and Sub-Saharan Africa, our executives drive AEH's transformative mission.";
$extraCSS = ['css/team.css'];
include 'includes/header.php';
?>

    <header class="team-hero">
      <div class="container">
        <div class="hero-content-center">
          <p class="blue-tag">GOVERNANCE & STEWARDSHIP</p>
          <h1>The Human <br /><em>Architecture.</em></h1>
          <p class="hero-lead">
            Cavendish Africa is led by a dedicated team with a combined 80+
            years in tertiary education across the U.S. and Sub-Saharan Africa.
          </p>
        </div>
      </div>
    </header>

    <section class="leadership-carousel-section">
      <div class="container">
        <div class="section-header-between">
          <div class="header-text">
            <p class="green-tag">EXECUTIVE TEAM</p>
            <h2 class="institutional-title">Meet Our <em>Leadership.</em></h2>
          </div>
          <div class="swiper-controls">
            <div class="team-prev"><i class="fa-solid fa-arrow-left"></i></div>
            <div class="team-next"><i class="fa-solid fa-arrow-right"></i></div>
          </div>
        </div>

        <div class="swiper leadership-swiper">
          <div class="swiper-wrapper" id="team-wrapper">
            <!-- JS Populates this -->
          </div>
          <div class="swiper-pagination team-pagination"></div>
        </div>
      </div>
    </section>

    <!-- BIO MODAL -->
    <div id="teamModal" class="modal-overlay" onclick="closeTeamModal(event)">
      <div class="modal-card" onclick="event.stopPropagation()">
        <button class="close-btn" onclick="closeTeamModal(event)">
          &times;
        </button>
        <div class="modal-flex">
          <div class="modal-image-side">
            <img id="modalImg" src="" alt="Leader" />
            <div id="modalIconPlaceholder" class="modal-icon-placeholder">
              <i class="fa-solid fa-user-tie"></i>
            </div>
          </div>
          <div class="modal-content-side">
            <p class="blue-tag">EXECUTIVE LEADERSHIP</p>
            <h2 id="modalName">Name</h2>
            <h5 id="modalRole">Role</h5>
            <div class="modal-divider"></div>
            <div id="modalBio" class="bio-scroll-area"></div>
          </div>
        </div>
      </div>
    </div>

<?php include 'includes/footer.php'; ?>

    <script>
      const teamData = [
        {
          id: "peter",
          name: "Peter Kagunye",
          role: "Chief Executive Officer",
          img: "images/peter.jpg",
          linkedin: "#",
          bio: "<p>Peter has more than 17 years of experience serving as Chief Financial Officer and Investment Manager in the private equity industry in the U.S as well as extensive accounting and auditing experience as a licensed CPA.</p><p>As CFO for a Boston-based private equity firm specialising in providing acquisition and growth capital to lower middle market companies, he successfully led the firm's accounting, finance and human resource operations. In his previous role as a Finance Manager at Bain Capital, Peter developed expertise in developing finance and accounting reporting systems and managing financial audits. Additionally Peter brings his start-up and entrepreneurial experience as founder of a beverage company and a youth leadership organization to the team.</p>",
        },
        {
          id: "olubayi",
          name: "Prof. Olubayi Olubayi",
          role: "Chief Academic Officer",
          img: "images/olubayi.jpg",
          linkedin: "#",
          bio: '<p>Prof. O. Olubayi was born and raised in Kenya and educated at Rutgers. Prior to joining Africa Education Holdings, he was the Vice Chancellor/President of the International University of East Africa (IUEA) in Uganda. He is a scientist and an expert on bacteria, education, learning, leadership and social-entrepreneurship.</p><p>As an educator he taught at Middlesex College and at Rutgers University for 16 years. He has been an advisor and consultant to government officials in Kenya and South Africa, and UNDP on matters of literacy, education, biotechnology, sustainable development and global citizenship. He is the author of the book "Education for a Better World."</p>',
        },
        {
          id: "reginald",
          name: "Reginald Rainey",
          role: "Director of Operations",
          img: "images/Reggie.jpg",
          linkedin: "#",
          bio: "<p>Reggie spent 25 years building Strayer University, serving most recently as the Vice President of University Admissions, and previously as the Regional Vice President of Operations.</p><p>In his role as Vice President of University Admissions, Reggie created and led the University Admissions Department, guiding Strayer to record new enrolment. Additionally, Reggie managed 25 campuses in multiple regions, and was responsible for annual revenue in excess of US$100m and regulatory compliance at the state and federal level.</p>",
        },
        {
          id: "oscar",
          name: "Oscar Correia",
          role: "Director of Tech & Academic Ops",
          img: "images/oscar.jpg",
          linkedin: "#",
          bio: "<p>Oscar has more than 20 years' experience in Information Technology spanning various sectors including education, telecommunications, mobile financial services, IT outsourcing and product management.</p><p>His last assignment was leading one of the largest mobile money managed services as Vice President, Financial Services at MahindraComviva. Oscar has a degree in Electrical Engineering from the University of Nairobi, a Post Graduate Diploma in Telecommunications from Ashton University and an MBA from Warwick Business School.</p>",
        },
        {
          id: "anthony",
          name: "Anthony Bonnett",
          role: "Director of Real Estate",
          img: "images/anthony.jpg",
          linkedin: "#",
          bio: "<p>Anthony is a C-level executive in the Property Investment, Development, and Construction sectors. He has more than 20 years of experience in these areas covering Southern, West and East Africa in senior level roles from board member appointments to consultancy and advisory services.</p><p>Anthony has further served in senior consultancy and associate roles in London and South East England. He was previously Managing Director of JSE-listed Sable Homes in South Africa, COO of GSPDC in Nigeria and Regional Development Director in Kenya.</p>",
        },
        {
          id: "trizah",
          name: "Trizah Mungai",
          role: "Finance Manager",
          img: "images/trizah.jpg",
          linkedin: "#",
          bio: "<p>Trizah is a fully qualified finance and accounting professional with more than 16 years of experience in managing financial reporting, consolidation and financial analysis process of firms.</p><p>She is known for her commitment to achieving high levels of accuracy using ethical work standards, as well as strong organizational, analytical and interpersonal skills. Her passion is to leverage her analytical skills and cross-functional mindset to drive business integrity and performance.</p>",
        },
        {
          id: "sidney",
          name: "Sidney Dede",
          role: "Finance Manager",
          img: "images/sidney.jpeg",
          linkedin: "#",
          bio: "<p>Sidney embarked on his professional journey in France, serving as a Digital Transformation consultant at DXC Technology and Grant Thornton. He transitioned to Ecobank Côte d'Ivoire, where he held the role of Business Analyst for two years.</p><p>Sidney joined the team initially assuming the role of Analyst before progressing to his current position as Finance Manager. He is a graduate of SKEMA Business School, Paris, holding a master's degree in corporate financial management.</p>",
        },
      ];

      document.addEventListener("DOMContentLoaded", function () {
        const wrapper = document.getElementById("team-wrapper");
        const preloader = document.getElementById("aeh-loader");

        teamData.forEach((member) => {
          const slide = document.createElement("div");
          slide.className = "swiper-slide";
          slide.innerHTML = `
                    <div class="team-card" onclick="openTeamModal('${member.id}')">
                        <div class="team-card-image">
                            <img src="${member.img}" alt="${member.name}" 
                                 onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                            <div class="card-icon-placeholder" style="display:none;">
                                <i class="fa-solid fa-user-tie"></i>
                            </div>
                        </div>
                        <div class="team-card-info">
                            <p class="team-member-role">${member.role}</p>
                            <h3 class="team-member-name">${member.name}</h3>
                            <div class="card-footer-flex">
                                <span class="read-more-link">View Biography <i class="fa-solid fa-plus"></i></span>
                                <a href="${member.linkedin}" class="linkedin-card-link" onclick="event.stopPropagation()"><i class="fa-brands fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                `;
          wrapper.appendChild(slide);
        });

        new Swiper(".leadership-swiper", {
          slidesPerView: 1,
          spaceBetween: 30,
          loop: true,
          navigation: { nextEl: ".team-next", prevEl: ".team-prev" },
          breakpoints: {
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
            1400: { slidesPerView: 4 },
          },
        });

        setTimeout(() => {
          if (preloader) preloader.classList.add("loader-finished");
          document.body.classList.remove("content-hidden");
        }, 1000);
      });

      function openTeamModal(id) {
        const member = teamData.find((m) => m.id === id);
        const modal = document.getElementById("teamModal");
        document.getElementById("modalName").innerText = member.name;
        document.getElementById("modalRole").innerText = member.role;
        document.getElementById("modalBio").innerHTML = member.bio;
        const imgEl = document.getElementById("modalImg");
        const placeholder = document.getElementById("modalIconPlaceholder");
        imgEl.src = member.img;
        imgEl.onload = () => {
          imgEl.style.display = "block";
          placeholder.style.display = "none";
        };
        imgEl.onerror = () => {
          imgEl.style.display = "none";
          placeholder.style.display = "flex";
        };
        modal.classList.add("active");
        document.body.style.overflow = "hidden";
      }

      function closeTeamModal() {
        document.getElementById("teamModal").classList.remove("active");
        document.body.style.overflow = "auto";
      }
    </script>
