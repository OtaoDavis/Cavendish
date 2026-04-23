<?php
$pageTitle = 'University Network | Cavendish Africa';
$metaDescription = "Explore the AEH university network: Cavendish University Uganda and Cavendish University Zambia. Discover faculties, programs, leadership, and campus details across our pan-African academic alliance.";
$extraCSS = ['css/network.css'];
include 'includes/header.php';
?>

    <!-- THE PORTAL WRAPPER -->
    <main class="network-portal">
      <!-- LEFT SIDEBAR: NAVIGATION -->
      <aside class="portal-sidebar">
        <div class="sidebar-header">
          <p class="green-tag">Our Universities</p>
        </div>

        <nav class="portal-nav">
          <button class="portal-link active" data-target="uganda">
            <span class="factor-num">01.</span>
            <div class="factor-content">
              <h4>Uganda Portfolio</h4>
              <p>Cavendish University Uganda</p>
            </div>
          </button>

          <button class="portal-link" data-target="zambia">
            <span class="factor-num">02.</span>
            <div class="factor-content">
              <h4>Zambia Portfolio</h4>
              <p>Cavendish University Zambia</p>
            </div>
          </button>

          <button class="portal-link" data-target="standard">
            <span class="factor-num">03.</span>
            <div class="factor-content">
              <h4>The AEH Standard</h4>
              <p>Network Governance</p>
            </div>
          </button>
        </nav>
      </aside>

      <!-- RIGHT SIDE: THE CONTENT STAGE -->
      <div class="portal-stage">
        <!-- UGANDA SECTION -->
        <section id="uganda" class="asset-view active">
          <div class="asset-header">
            <p class="green-tag">EAST AFRICA HUB</p>
            <h2 class="asset-display-title">
              Cavendish University <br /><em>Uganda.</em>
            </h2>
          </div>

          <div class="glance-50-50">
            <div class="map-visual">
              <img src="images/cuu-map.svg" alt="Uganda" class="portal-map" />
            </div>
            <div class="glance-facts">
              <h3>University at a Glance</h3>
              <div class="glance-line"></div>
              <ul class="portal-facts-list">
                <li><strong>Location:</strong> Kampala, Uganda</li>
                <li><strong>Founded:</strong> 2008</li>
                <li><strong>Nationalities:</strong> 41</li>
                <li><strong>Student Body:</strong> 4,700+</li>
                <li><strong>Flagship:</strong> Faculty of Law</li>
                <li><strong>Core Focus:</strong> Ethical Leadership and Innovation</li>
              </ul>
            </div>
          </div>

          <!-- UGANDA FACULTIES -->
          <div class="portal-faculties-area">
            <div class="faculties-header">
              <p class="blue-tag">ACADEMICS</p>
              <h3>Faculties & <em>Programs.</em></h3>
            </div>

            <div class="faculties-interactive-wrapper">
              <ul class="faculty-tabs">
                <li class="faculty-tab active" data-target="law-ug">Faculty of Law</li>
                <li class="faculty-tab" data-target="bus-ug">Business & Management</li>
                <li class="faculty-tab" data-target="sci-ug">Science & Technology</li>
                <li class="faculty-tab" data-target="soc-ug">Socio-Economic Sciences</li>
                <li class="faculty-tab" data-target="pg-ug">Post Graduate Studies</li>
              </ul>

              <div class="faculty-display-panel">
                <div id="law-ug" class="faculty-programs active">
                  <h4>Law Programs</h4>
                  <ul class="program-list">
                    <li>Bachelor of Laws</li>
                    <li>Diploma in Law</li>
                    <li>Master of Laws (Commercial Law)</li>
                  </ul>
                  <a href="https://www.cavendish.ac.ug/faculties/faculty-of-law/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="bus-ug" class="faculty-programs">
                  <h4>Business & Management</h4>
                  <ul class="program-list">
                    <li>Master of Business Administration (MBA)</li>
                    <li>Bachelor of Business Administration</li>
                    <li>Bachelor of Procurement & Logistics Management</li>
                    <li>Bachelor of Arts in Economics</li>
                  </ul>
                  <a href="https://www.cavendish.ac.ug/faculties/faculty-of-business-and-management/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="sci-ug" class="faculty-programs">
                  <h4>Science & Technology</h4>
                  <ul class="program-list">
                    <li>Bachelor of Science in Computer Science</li>
                    <li>Bachelor of Information Technology</li>
                    <li>Bachelor of Science in Public Health</li>
                    <li>Bachelor of Environmental Health Science</li>
                  </ul>
                  <a href="https://www.cavendish.ac.ug/faculties/faculty-of-science-and-technology/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="soc-ug" class="faculty-programs">
                  <h4>Socio-Economic Sciences</h4>
                  <ul class="program-list">
                    <li>Bachelor of Arts in International Relations & Diplomacy</li>
                    <li>Bachelor of Arts in Journalism & Communication Studies</li>
                    <li>Bachelor of Social Work & Social Administration</li>
                    <li>Master of Arts in Public Administration and Management</li>
                  </ul>
                  <a href="https://www.cavendish.ac.ug/faculties/faculty-of-socio-economic-sciences/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="pg-ug" class="faculty-programs">
                  <h4>Post Graduate Studies</h4>
                  <ul class="program-list scrollable-list">
                    <li>Master of Information Technology</li>
                    <li>Master of Education in Educational Management</li>
                    <li>Master of Security Studies</li>
                    <li>Master of Science in Project Management</li>
                    <li>Master of Arts in International Relations</li>
                    <li>Master of Laws (LLM)</li>
                    <li>Master of Public Health</li>
                    <li>MBA – Accounting & Finance</li>
                    <li>MBA – Entrepreneurship</li>
                  </ul>
                  <a href="https://www.cavendish.ac.ug/faculties/school-of-post-graduate-studies-and-research" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="high-contrast-context">
            <div class="context-card bg-blue">
              <h4>Market Position</h4>
              <p>Ranked for high graduate employability through digital learning infrastructure.</p>
            </div>
            <div class="context-card bg-green">
              <h4>Strategic Impact</h4>
              <p>produces ethical leaders reshaping the socio-economic landscapes of East Africa.</p>
            </div>
          </div>

          <!-- UGANDA LEADERSHIP -->
          <div class="institutional-leadership-area">
            <div class="lead-header">
              <p class="blue-tag">GOVERNANCE</p>
              <h2 class="section-main-title">University <em>Leadership</em></h2>
            </div>
            <div class="leadership-grid">
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/chancellor-cuu.jpg" alt="H.E. Dr. Goodluck Jonathan" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Chancellor</p>
                  <h3 class="team-member-name">Dr. Goodluck Jonathan</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">A distinguished scholar and former academic lecturer holding a PhD in Zoology. Dr. Jonathan oversees the strategic and ethical direction of CUU's academic mission.</p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/vice-chancellor-cuu.jpg" alt="Dr. Olive Sabiiti" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Vice Chancellor</p>
                  <h3 class="team-member-name">Dr. Olive Sabiiti</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">A distinguished legal scholar and Commonwealth Scholar with a PhD from the University of Manchester. Dr. Sabiiti provides expert academic and administrative leadership to CUU.</p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/executive-director-cuu.jpg" alt="Mr. David Mutabanura" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Executive Director</p>
                  <h3 class="team-member-name">Mr. David Mutabanura</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">An operational strategist with over 20 years of commercial experience. Mr. Mutabanura directs the financial and administrative functions of CUU with institutional rigor.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- ZAMBIA SECTION -->
        <section id="zambia" class="asset-view">
          <div class="asset-header">
            <p class="green-tag">SOUTHERN AFRICA HUB</p>
            <h2 class="asset-display-title">
              Cavendish University <br /><em>Zambia.</em>
            </h2>
          </div>

          <div class="glance-50-50">
            <div class="map-visual">
              <img src="images/cuz-map.svg" alt="Zambia" class="portal-map" />
            </div>
            <div class="glance-facts">
              <h3>University at a Glance</h3>
              <div class="glance-line"></div>
              <ul class="portal-facts-list">
                <li><strong>Location:</strong> Lusaka, Zambia</li>
                <li><strong>Founded:</strong> 2004</li>
                <li><strong>Nationalities:</strong> 32</li>
                <li><strong>Student Body:</strong> 7,300+</li>
                <li><strong>Flagship:</strong> School of Medicine and Health Sciences</li>
                <li><strong>Core Focus:</strong> Employability and Entrepreneurship</li>
              </ul>
            </div>
          </div>

          <!-- ZAMBIA FACULTIES -->
          <div class="portal-faculties-area">
            <div class="faculties-header">
              <p class="blue-tag">ACADEMICS</p>
              <h3>Faculties & <em>Programs.</em></h3>
            </div>
            <div class="faculties-interactive-wrapper">
              <ul class="faculty-tabs">
                <li class="faculty-tab active" data-target="med-zm">Medicine & Health Sciences</li>
                <li class="faculty-tab" data-target="bus-zm">Business & Management</li>
                <li class="faculty-tab" data-target="law-zm">School of Law</li>
                <li class="faculty-tab" data-target="arts-zm">Arts & Social Sciences</li>
              </ul>
              <div class="faculty-display-panel">
                <div id="med-zm" class="faculty-programs active">
                  <h4>Medicine & Health Sciences</h4>
                  <ul class="program-list">
                    <li>Bachelor of Medicine and Bachelor of Surgery (MBChB)</li>
                    <li>Bachelor of Science in Nursing & Midwifery</li>
                    <li>Bachelor of Science in Public Health</li>
                    <li>Diploma in Clinical Medicine</li>
                  </ul>
                  <a href="https://www.cavendishza.org/faculties-schools/school-of-medicine/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="bus-zm" class="faculty-programs">
                  <h4>Business & Management Studies</h4>
                  <ul class="program-list">
                    <li>Master of Business Administration (MBA)</li>
                    <li>Bachelor of Business Administration</li>
                    <li>Bachelor of Science in Accounting and Finance</li>
                    <li>Bachelor of Project Management</li>
                  </ul>
                  <a href="https://www.cavendishza.org/faculties-schools/school-of-business-and-information-technology-school-of-b-i-t/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="law-zm" class="faculty-programs">
                  <h4>School of Law</h4>
                  <ul class="program-list">
                    <li>Bachelor of Laws (LLB)</li>
                    <li>Diploma in Law</li>
                    <li>Certificate in Paralegal Studies</li>
                  </ul>
                  <a href="https://www.cavendishza.org/faculties-schools/school-of-law/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
                <div id="arts-zm" class="faculty-programs">
                  <h4>Arts, Education & Social Sciences</h4>
                  <ul class="program-list">
                    <li>Bachelor of Arts in Social Work</li>
                    <li>Bachelor of Arts in Development Studies</li>
                    <li>Bachelor of Mass Communication and Public Relations</li>
                    <li>Bachelor of Education in Early Childhood Education</li>
                  </ul>
                  <a href="https://www.cavendishza.org/faculties-schools/school-of-arts-education-and-social-sciences/" class="pillar-link" target="_blank">Official Faculty Page <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="high-contrast-context">
            <div class="context-card bg-green">
              <h4>Medical Excellence</h4>
              <p>CUZ operates a prestigious medical school, ensuring day-one readiness for clinicians.</p>
            </div>
            <div class="context-card bg-blue">
              <h4>Economic Engine</h4>
              <p>Produces highly employable graduates for Africa's booming healthcare sectors.</p>
            </div>
          </div>

          <!-- ZAMBIA LEADERSHIP -->
          <div class="institutional-leadership-area">
            <div class="lead-header">
              <p class="blue-tag">GOVERNANCE</p>
              <h2 class="section-main-title">University <em>Leadership</em></h2>
            </div>
            <div class="leadership-grid">
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/vice-chancellor-cuz.jpg" alt="Prof. Welani Chilengwe" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Vice Chancellor</p>
                  <h3 class="team-member-name">Prof. Welani Chilengwe</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">A seasoned academic leader and retired military officer, Prof. Chilengwe drives the delivery of market-relevant education while advancing CUZ as a premier Tier 1 institution through global partnerships.</p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/oscar.jpg" alt="Mr. Oscar Correia" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Deputy Vice Chancellor</p>
                  <h3 class="team-member-name">Mr. Oscar Correia</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">An expert in academic operations and digital transformation with an MBA from Warwick Business School. Mr. Correia leads the integration of innovative technology and systems into the institutional model.</p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="images/Reggie.jpg" alt="Mr. Reginald Rainey" style="object-position: center 15%" />
                  <div class="visual-overlay"></div>
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Executive Director</p>
                  <h3 class="team-member-name">Mr. Reginald Rainey</h3>
                  <div class="title-line"></div>
                  <p class="team-member-bio">An executive leader with over 25 years of expertise in university operations. Mr. Rainey directs the strategic functions of CUZ, focusing on digital innovation and global partnerships to empower youth.</p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- STANDARDS SECTION -->
        <section id="standard" class="asset-view">
          <div class="asset-header">
            <p class="blue-tag">NETWORK GOVERNANCE</p>
            <h2 class="asset-display-title">
              The framework of <br /><em>Standardized Quality.</em>
            </h2>
          </div>
          <div class="standards-full-card bg-navy">
            <div class="s-grid">
              <div class="s-pillar">
                <h5>Governance</h5>
                <p>Centralized financial oversight ensuring institutional stability.</p>
              </div>
              <div class="s-pillar">
                <h5>Pedagogy</h5>
                <p>Modernized, student-centered curriculum for market relevance.</p>
              </div>
              <div class="s-pillar">
                <h5>Reach</h5>
                <p>Borderless Pan-African academic and faculty exchange.</p>
              </div>
            </div>
          </div>

          <!-- THE CONTACT SECTION -->
          <section id="contact" class="aeh-contact section-slate">
            <div class="container">
              <div class="contact-split-grid">
                <div class="contact-context">
                  <p class="blue-tag">STRATEGIC PARTNERSHIP</p>
                  <h2 class="contact-title">Start the <em>Dialogue.</em></h2>
                  <p class="contact-lead">
                    Expanding access to high-quality education and opportunity
                    for Africa's youth requires collaboration. Cavendish Africa
                    works with education and business organizations, and
                    partners who share our commitment to preparing students for
                    meaningful careers and leadership.
                  </p>
                  <p class="contact-lead">
                    If you are interested in partnering with us to strengthen
                    education and expand opportunities across Africa, we would
                    welcome the conversation.
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
        </section>
      </div>
    </main>

<?php include 'includes/footer.php'; ?>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const preloader = document.getElementById("aeh-loader");

        const hideLoader = () => {
          setTimeout(() => {
            if (preloader) preloader.classList.add("loader-finished");
            document.body.classList.remove("content-hidden");
          }, 1000);
        };

        if (document.readyState === "complete") {
          hideLoader();
        } else {
          window.addEventListener("load", hideLoader);
        }

        // Portal Switcher Logic
        const portalLinks = document.querySelectorAll(".portal-link");
        const assetViews = document.querySelectorAll(".asset-view");

        portalLinks.forEach((button) => {
          button.addEventListener("click", () => {
            const targetId = button.dataset.target;
            portalLinks.forEach((btn) => btn.classList.remove("active"));
            button.classList.add("active");
            assetViews.forEach((section) => section.classList.remove("active"));
            const targetSection = document.getElementById(targetId);
            if (targetSection) {
              targetSection.classList.add("active");
            }
            window.scrollTo({ top: 0, behavior: "smooth" });
          });
        });

        // Interactive Faculty Tabs Logic
        const facultyTabs = document.querySelectorAll(".faculty-tab");

        facultyTabs.forEach((tab) => {
          tab.addEventListener("click", function () {
            const wrapper = this.closest(".faculties-interactive-wrapper");
            const targetId = this.dataset.target;
            const targetContent = document.getElementById(targetId);

            wrapper.querySelectorAll(".faculty-tab").forEach((t) => t.classList.remove("active"));
            wrapper.querySelectorAll(".faculty-programs").forEach((p) => p.classList.remove("active"));

            this.classList.add("active");
            if (targetContent) {
              targetContent.classList.add("active");
            }
          });
        });

        // Hash-based navigation
        if (window.location.hash) {
          const hash = window.location.hash.substring(1);
          const targetButton = document.querySelector(`[data-target="${hash}"]`);
          if (targetButton) {
            targetButton.click();
          }
        }
      });
    </script>
