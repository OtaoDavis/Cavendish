<!-- START: Footer Section -->
    <footer class="site-footer">
      <div class="container mx-auto px-6 py-12">
        <div class="footer-grid">
          
          <!-- Column 1: Logo and About -->
          <div class="footer-col">
            <img
              src="<?php echo get_template_directory_uri(); ?>/assets/images/logo_trans.png"
              alt="Cavendish Africa Logo"
              class="footer-logo mb-4"
            />
            <p class="text-gray-400">
              Expanding access to transformative education and opportunity to
              unlock Africa’s potential
            </p>
          </div>

          <!-- Column 2: Quick Links -->
          <div class="footer-col">
            <h3 class="footer-title">Quick Links</h3>
            <ul class="footer-links">
              <li><a href="<?php echo home_url('/our-purpose'); ?>">Our Purpose</a></li>
              <li><a href="<?php echo home_url('/cavendish-business-school'); ?>">Business School</a></li>
              <li><a href="<?php echo home_url('/cavendish-network'); ?>">Our Universities</a></li>
            </ul>
          </div>

          <!-- Column 3: Contact Us -->
          <div class="footer-col">
            <h3 class="footer-title">Contact Us</h3>
            <ul class="contact-info">
              <li class="contact-item">
                <i class="fa-solid fa-envelope"></i>
                <span style="text-transform: none">info@maarifaeducation.com</span>
              </li>
              <li class="contact-item">
                <i class="fa-solid fa-phone"></i>
                <span>(+254) 708 021 483</span>
              </li>
              <li class="contact-item">
                <i class="fa-solid fa-map-marker-alt"></i>
                <span>Nairobi, Kenya</span>
              </li>
            </ul>
          </div>

          <!-- Column 4: Network Development -->
          <div class="footer-col">
            <h3 class="footer-title">Network Development</h3>
            <p class="text-gray-400">
              Cavendish Africa welcomes partners who are committed to expanding
              access to education and opportunity in Africa.
            </p>
          </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="footer-bottom">
          <p class="copyright-text">
            &copy; <span id="copyright-year"><?php echo date('Y'); ?></span> Cavendish Africa. All Rights Reserved.
          </p>
          <div class="social-links">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!-- END: Footer Section -->

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

            <button type="submit" class="btn-initiate">Send Message</button>
          </form>
        </div>
      </div>
    </div>

    <!-- UNIVERSAL VIDEO MODAL (Required for Testimonials) -->
    <div id="videoModal" class="aeh-video-modal">
      <div class="modal-overlay" onclick="closeVideoModal()"></div>
      <div class="modal-container">
        <button class="modal-close" onclick="closeVideoModal()">&times;</button>

        <!-- For YouTube Videos -->
        <iframe id="videoPlayer" src="" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display: none"></iframe>

        <!-- For Local Videos -->
        <video id="localVideoPlayer" controls playsinline style="display: none; width: 100%; max-height: 80vh">
          <source src="" type="video/mp4" />
        </video>
      </div>
    </div>

    <?php wp_footer(); ?>
  </body>
</html>