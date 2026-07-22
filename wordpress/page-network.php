<?php
/* Template Name: Front Page */
get_header();
?>

<main class="network-portal">
      <!-- LEFT SIDEBAR -->
      <aside class="portal-sidebar">
        <div class="sidebar-header">
          <p class="green-tag">Our Universities</p>
        </div>
        <nav class="portal-nav">
          <button class="portal-link active" data-target="zambia">
            <span class="factor-num">01.</span>
            <div class="factor-content">
              <h4>Zambia Portfolio</h4>
              <p>Cavendish University Zambia</p>
            </div>
          </button>
          <button class="portal-link" data-target="uganda">
            <span class="factor-num">02.</span>
            <div class="factor-content">
              <h4>Uganda Portfolio</h4>
              <p>Cavendish University Uganda</p>
            </div>
          </button>
          <button class="portal-link" data-target="standard">
            <span class="factor-num">03.</span>
            <div class="factor-content">
              <h4>The Cavendish Standard</h4>
              <p>Network Governance</p>
            </div>
          </button>
        </nav>
      </aside>

      <!-- RIGHT STAGE -->
      <div class="portal-stage">
        <!-- ZAMBIA SECTION -->
        <section id="zambia" class="asset-view active">
          <div class="asset-header" data-watermark="Zambia">
            <p class="green-tag">SOUTHERN AFRICA HUB</p>
            <h2 class="asset-display-title">
              Cavendish University <br /><em>Zambia.</em>
            </h2>
          </div>

          <div class="glance-50-50">
            <div class="map-visual">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cuz-map.svg" alt="Zambia" class="portal-map" />
            </div>
            <div class="glance-facts">
              <h3>University at a Glance</h3>
              <div class="glance-line"></div>
              <ul class="portal-facts-list">
                <li><strong>Location:</strong> Lusaka, Zambia</li>
                <li><strong>Founded:</strong> 2004</li>
                <li><strong>Nationalities:</strong> 32</li>
                <li><strong>Student Body:</strong> 7,300+</li>
                <li>
                  <strong>Core Focus:</strong> Medicine and Health Sciences,
                  Business, Technology, and Law
                </li>
              </ul>
            </div>
          </div>

          <div class="portal-faculties-area" id="zambia-faculties">
            <div class="faculties-header">
              <p class="blue-tag">ACADEMICS</p>
              <h3>Faculties & <em>Programs.</em></h3>
            </div>
            <div class="faculties-interactive-wrapper">
              <ul class="faculty-tabs">
                <li class="faculty-tab active" data-target="med-zm">
                  Medicine & Health Sciences
                </li>
                <li class="faculty-tab" data-target="bus-zm">
                  Business and IT
                </li>
                <li class="faculty-tab" data-target="law-zm">Law</li>
                <li class="faculty-tab" data-target="arts-zm">
                  Arts & Social Sciences
                </li>
              </ul>
              <div class="faculty-display-panel">
                <div id="med-zm" class="faculty-programs active">
                  <h4>Medicine & Health Sciences</h4>
                  <ul class="program-list">
                    <li>
                      Bachelor of Medicine and Bachelor of Surgery (MBChB)
                    </li>
                    <li>Bachelor of Science in Nursing & Midwifery</li>
                    <li>Bachelor of Science in Public Health</li>
                    <li>Diploma in Clinical Medicine</li>
                  </ul>
                  <a
                    href="https://www.cavendishza.org/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="bus-zm" class="faculty-programs">
                  <h4>Business and IT</h4>
                  <ul class="program-list">
                    <li>Bachelor of Science in Information Technology</li>
                    <li>Master of Business Administration (MBA)</li>
                    <li>Bachelor of Business Administration</li>
                    <li>Bachelor of Science in Accounting and Finance</li>
                  </ul>
                  <a
                    href="https://www.cavendishza.org/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="law-zm" class="faculty-programs">
                  <h4>Law</h4>
                  <ul class="program-list">
                    <li>Bachelor of Laws (LLB)</li>
                    <li>Diploma in Law</li>
                    <li>Certificate in Paralegal Studies</li>
                  </ul>
                  <a
                    href="https://www.cavendishza.org/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="arts-zm" class="faculty-programs">
                  <h4>Arts & Social Sciences</h4>
                  <ul class="program-list">
                    <li>Bachelor of Arts in Social Work</li>
                    <li>Bachelor of Arts in Development Studies</li>
                    <li>Bachelor of Mass Communication and Public Relations</li>
                  </ul>
                  <a
                    href="https://www.cavendishza.org/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="high-contrast-context">
            <div class="context-card bg-green">
              <h4>Pioneering Access and Impact</h4>
              <p>
                As Zambia’s first private university, CUZ helped pioneer access
                to higher education and continues to broaden opportunities for
                learners across the country.
              </p>
            </div>
            <div class="context-card bg-blue">
              <h4>Academic Excellence</h4>
              <p>
                CUZ is recognized for academic excellence across a range of
                disciplines, with its School of Medicine earning a strong
                reputation for preparing healthcare professionals who serve
                communities in Zambia and beyond.
              </p>
            </div>
          </div>

          <div class="institutional-leadership-area">
            <div class="lead-header">
              <p class="blue-tag">GOVERNANCE</p>
              <h2 class="section-main-title">University <em>Leadership</em></h2>
            </div>
            <div class="leadership-grid">
              <div class="team-card">
                <div class="team-card-visual">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/philip-vc.jpg"
                    alt="Prof. Justice Phillip Musonda"
                  />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Vice Chancellor</p>
                  <h3 class="team-member-name">
                    Prof. Justice Phillip Musonda
                  </h3>
                  <p class="team-member-bio">
                    Professor Justice Phillip Musonda is a retired Zambia
                    Supreme Court Justice, esteemed legal scholar, and authority
                    in constitutional law. As Acting Vice Chancellor of
                    Cavendish University Zambia, he brings decades of judicial
                    and academic leadership.
                  </p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/rachel-dvc.jpg"
                    alt="Dr. Rachel Milomba Velu"
                  />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Deputy Vice Chancellor</p>
                  <h3 class="team-member-name">Dr. Rachel Milomba Velu</h3>
                  <p class="team-member-bio">
                    Dr. Rachel Milomba Velu (PhD, MSc, MBChB, BSc) is Acting
                    Deputy Vice Chancellor – Academic Affairs, a physician,
                    epidemiologist, and accomplished researcher whose work in
                    infectious diseases and public health has advanced
                    healthcare and medical education.
                  </p>
                </div>
              </div>
              <div class="team-card">
                <div class="team-card-visual">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Reggie.jpg" alt="Mr. Reginald Rainey" />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Executive Director</p>
                  <h3 class="team-member-name">Mr. Reginald Rainey</h3>
                  <p class="team-member-bio">
                    Reginald Rainey is a higher education executive advancing
                    digital innovation, remote workforce development, and global
                    partnerships, leveraging over 25 years of experience to
                    expand opportunities for African talent worldwide.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- UGANDA SECTION -->
        <section id="uganda" class="asset-view">
          <div class="asset-header" data-watermark="Uganda">
            <p class="green-tag">EAST AFRICA HUB</p>
            <h2 class="asset-display-title">
              Cavendish University <br /><em>Uganda.</em>
            </h2>
          </div>

          <div class="glance-50-50">
            <div class="map-visual">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/cuu-map.svg" alt="Uganda" class="portal-map" />
            </div>
            <div class="glance-facts">
              <h3>University at a Glance</h3>
              <div class="glance-line"></div>
              <ul class="portal-facts-list">
                <li><strong>Location:</strong> Kampala, Uganda</li>
                <li><strong>Founded:</strong> 2008</li>
                <li><strong>Nationalities:</strong> 41</li>
                <li><strong>Student Body:</strong> 4,700+</li>
                <li>
                  <strong>Core Focus:</strong> Law, Business, Science and
                  Technology and Health Sciences
                </li>
              </ul>
            </div>
          </div>

          <div class="portal-faculties-area" id="uganda-faculties">
            <div class="faculties-header">
              <p class="blue-tag">ACADEMICS</p>
              <h3>Faculties & <em>Programs.</em></h3>
            </div>
            <div class="faculties-interactive-wrapper">
              <ul class="faculty-tabs">
                <li class="faculty-tab active" data-target="law-ug">Law</li>
                <li class="faculty-tab" data-target="bus-ug">
                  Business & Management
                </li>
                <li class="faculty-tab" data-target="sci-ug">
                  Science & Technology
                </li>
                <li class="faculty-tab" data-target="soc-ug">
                  Socio-Economic Sciences
                </li>
              </ul>
              <div class="faculty-display-panel">
                <div id="law-ug" class="faculty-programs active">
                  <h4>Law</h4>
                  <ul class="program-list">
                    <li>Bachelor of Laws</li>
                    <li>Diploma in Law</li>
                    <li>Master of Laws (Commercial Law)</li>
                  </ul>
                  <a
                    href="https://www.cavendish.ac.ug/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="bus-ug" class="faculty-programs">
                  <h4>Business & Management</h4>
                  <ul class="program-list">
                    <li>Bachelor of Business Administration</li>
                    <li>Bachelor of Science in Accounting & Finance</li>
                    <li>Master of Business Administration (MBA)</li>
                  </ul>
                  <a
                    href="https://www.cavendish.ac.ug/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="sci-ug" class="faculty-programs">
                  <h4>Science & Technology</h4>
                  <ul class="program-list">
                    <li>Bachelor of Information Technology</li>
                    <li>Bachelor of Computer Science</li>
                    <li>Bachelor of Public Health</li>
                  </ul>
                  <a
                    href="https://www.cavendish.ac.ug/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
                <div id="soc-ug" class="faculty-programs">
                  <h4>Socio-Economic Sciences</h4>
                  <ul class="program-list">
                    <li>Bachelor of Arts in International Relations</li>
                    <li>Bachelor of Arts in Public Administration</li>
                    <li>Bachelor of Arts in Mass Communication</li>
                  </ul>
                  <a
                    href="https://www.cavendish.ac.ug/admissions/"
                    class="pillar-link"
                    target="_blank"
                    >Enroll Today <i class="fa-solid fa-arrow-right"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>

          <div class="high-contrast-context">
            <div class="context-card bg-blue">
              <h4>Access and Opportunity</h4>
              <p>
                One of the most diverse universities in the region, Cavendish
                University Uganda has expanded access to higher education for
                learners from across Africa, including refugees and students
                from underserved and conflict-affected communities.
              </p>
            </div>
            <div class="context-card bg-green">
              <h4>Academic Excellence</h4>
              <p>
                CUU is recognized for academic excellence across a range of
                disciplines, with its School of Law earning a strong reputation
                for legal education and leadership in national and regional moot
                court competitions.
              </p>
            </div>
          </div>

          <div class="institutional-leadership-area">
            <div class="lead-header">
              <p class="blue-tag">GOVERNANCE</p>
              <h2 class="section-main-title">University <em>Leadership</em></h2>
            </div>
            <div class="leadership-grid">
              <div class="team-card">
                <div class="team-card-visual">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/chancellor-cuu.jpg"
                    alt="H.E. Dr. Goodluck Jonathan"
                  />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Chancellor</p>
                  <h3 class="team-member-name">Dr. Goodluck Jonathan</h3>
                  <p class="team-member-bio">
                    Dr. Goodluck Jonathan, former President of Nigeria, is a
                    distinguished scholar and former academic lecturer with a
                    PhD in Zoology. As Chancellor of Cavendish University
                    Uganda, he oversees the strategic and ethical direction of
                    CUU’s academic mission.
                  </p>
                </div>
              </div>

              <div class="team-card">
                <div class="team-card-visual">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/vice-chancellor-cuu.jpg"
                    alt="Dr. Olive Sabiiti"
                  />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Vice Chancellor</p>
                  <h3 class="team-member-name">Dr. Olive Sabiiti</h3>
                  <p class="team-member-bio">
                    Dr. Olive Sabiiti is a distinguished legal scholar and
                    Commonwealth Scholar with a PhD from the University of
                    Manchester. As Vice Chancellor of Cavendish University
                    Uganda, she provides expert academic and administrative
                    leadership.
                  </p>
                </div>
              </div>

              <div class="team-card">
                <div class="team-card-visual">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/executive-director-cuu.jpg"
                    alt="Mr. David Mutabanura"
                  />
                </div>
                <div class="team-card-info">
                  <p class="team-member-title">Executive Director</p>
                  <h3 class="team-member-name">Mr. David Mutabanura</h3>
                  <p class="team-member-bio">
                    Mr. David Mutabanura is an operational strategist with over
                    20 years of commercial experience. As Executive Director of
                    Cavendish University Uganda, he directs the financial and
                    administrative functions of CUU with system-wide rigour.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </section>

        <!-- THE CAVENDISH STANDARD SECTION -->
        <section id="standard" class="asset-view">
          <div class="asset-header" data-watermark="Standard">
            <p class="blue-tag">NETWORK GOVERNANCE</p>
            <h2 class="asset-display-title">
              The framework of <br /><em>Standardized Quality.</em>
            </h2>
          </div>
          <div class="standards-full-card bg-navy">
            <div class="s-grid">
              <div class="s-pillar">
                <h5>Governance</h5>
                <p>
                  Centralized financial oversight and strategic management
                  ensuring institutional stability and long-term growth.
                </p>
              </div>
              <div class="s-pillar">
                <h5>Pedagogy</h5>
                <p>
                  A modernized, student-centered curriculum designed for market
                  relevance and practical problem-solving.
                </p>
              </div>
              <div class="s-pillar">
                <h5>Reach</h5>
                <p>
                  A borderless Pan-African academic alliance facilitating
                  faculty exchange and global student opportunities.
                </p>
              </div>
            </div>
          </div>

          <!-- SECTION: STRATEGIC PARTNERSHIPS (WIDE NARRATIVE) -->
          <section class="strategic-partnerships">
            <div class="container">
              <div class="strategic-grid">
                <div class="strategic-left">
                  <p class="blue-tag">Collaboration</p>
                  <h2 class="strategic-headline">
                    Strategic <em>Partnerships.</em>
                  </h2>
                </div>
                <div class="strategic-right">
                  <div class="strategic-text">
                    <p>
                      Expanding opportunity for Africa's youth and entrepreneurs
                      requires collaboration. Cavendish Africa works with
                      education institutions, employers, businesses,
                      foundations, investors, and other partners who share our
                      commitment to transformative education, employment,
                      entrepreneurship and leadership development.
                    </p>
                    <p>
                      If you are interested in partnering with us to strengthen
                      education, expand opportunity, and support Africa's next
                      generation of leaders and entrepreneurs, we would welcome
                      a conversation.
                    </p>
                  </div>
                  <button class="btn-solid" id="openPartnerModal">
                    Initiate Dialogue <i class="fa-solid fa-paper-plane"></i>
                  </button>
                </div>
              </div>
            </div>
          </section>
        </section>
      </div>
    </main>

    <!-- THE PARTNERSHIP MODAL -->
    <div id="partnerModal" class="aeh-modal">
      <div class="modal-overlay" id="closeModalOverlay"></div>
      <div class="modal-content-wrapper">
        <button class="modal-close-btn" id="closePartnerModal">&times;</button>

        <div class="contact-form-wrapper">
          <div class="form-decorative-element"></div>
          <h3 class="modal-form-title">Partner With Us</h3>
          <form class="aeh-premium-form">
            <div class="form-row split">
              <div class="field-group">
                <label>Full Name</label>
                <input
                  type="text"
                  placeholder="e.g. Jean-Pierre Mensah"
                  required
                />
              </div>
              <div class="field-group">
                <label>Phone Number</label>
                <input type="text" placeholder="+000 000 000 000" required />
              </div>
            </div>

            <div class="form-row split">
              <div class="field-group">
                <label>Organization</label>
                <input
                  type="text"
                  placeholder="Institutional / Private Equity"
                  required
                />
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
              <textarea
                rows="4"
                placeholder="How can we align our missions?"
              ></textarea>
            </div>

            <button type="submit" class="btn-initiate">Send Message</button>
          </form>
        </div>
      </div>
    </div>

    <!-- SECTION: GLOBAL NEWSLETTER STRIP -->
    <section class="global-newsletter-horizon">
      <!-- Subtle background watermark -->
      <div class="horizon-ghost-text">Updates</div>

      <div class="container relative-z">
        <div class="horizon-flex">
          <div class="horizon-text">
            <div class="horizon-accent-line"></div>
            <p>
              You can sign up for our newsletter to receive updates on the
              programs we offer.
            </p>
          </div>

          <div class="horizon-action">
            <!-- THE MORPHING LINK -->
            <button
              class="newsletter-morph-link"
              onclick="openNewsletterModal()"
            >
              <span class="link-label">Subscribe Now</span>
              <div class="icon-circle">
                <i class="fa-solid fa-envelope-open-text icon-default"></i>
                <i class="fa-solid fa-arrow-right icon-hover"></i>
              </div>
              <div class="expanding-underline"></div>
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- NEWSLETTER MODAL -->
    <div id="newsletterModal" class="aeh-modal">
      <div class="modal-overlay" onclick="closeNewsletterModal()"></div>
      <div class="modal-content-wrapper newsletter-small">
        <button class="modal-close-btn" onclick="closeNewsletterModal()">
          &times;
        </button>
        <div class="contact-form-wrapper">
          <h3 class="modal-form-title">Stay Informed</h3>
          <p class="muted-p">
            Join our community of entrepreneurs and receive the latest insights
            and program updates.
          </p>
          <form class="aeh-premium-form">
            <div class="field-group">
              <label>Email Address</label>
              <input type="email" placeholder="name@company.com" required />
            </div>
            <button type="submit" class="btn-initiate">Sign Up</button>
          </form>
        </div>
      </div>
    </div>

<?php get_footer(); ?>
