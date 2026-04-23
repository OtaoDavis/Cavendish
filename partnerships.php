<?php
$pageTitle = 'Partner With Us | Africa Education Holdings';
$metaDescription = 'Partner with Africa Education Holdings to transform education in Africa. Explore university partnerships, K-12 school collaborations, and business engagement opportunities across our network.';
$extraCSS = ['css/partners.css'];
$extraHead = '<script src="js/script.js" defer></script>';
include 'includes/header.php';
?>

    <!-- START: Partnerships Hero Section -->
    <section class="relative partnerships-hero-section">
      <div
        class="absolute inset-0 bg-cover bg-center"
        style="
          background-image: url(&quot;https://images.unsplash.com/photo-1521791136064-7986c2920216?q=80&w=1920&auto-format&fit=crop&quot;);
        "
      ></div>
      <div class="absolute inset-0 bg-black bg-opacity-50"></div>
      <div
        class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white p-6"
      >
        <h1 class="text-4xl md:text-6xl font-bold mb-4 text-white">
          Partner With Us
        </h1>
        <p class="text-lg md:text-xl max-w-3xl">
          Together, we can transform Africa into an economic and intellectual
          powerhouse.
        </p>
      </div>
    </section>
    <!-- END: Partnerships Hero Section -->

    <main>
      <!-- Section 1: Universities -->
      <section class="partnership-type-section">
        <div class="partnership-grid">
          <div class="partnership-text">
            <h2>Universities</h2>
            <p>
              We collaborate with tertiary institutions in various capacities to
              foster growth, innovation, and academic excellence.
            </p>
            <ul>
              <li>Interested in exploring an investment in your university?</li>
              <li>
                Looking for ways we can help you grow or improve your
                institution?
              </li>
              <li>
                Seeking collaboration on specific projects or disciplines of
                study?
              </li>
            </ul>
            <a
              href="#contact"
              class="partnership-contact-btn"
              data-subject="University Partnership Inquiry"
              >Contact Us</a
            >
          </div>
          <div class="partnership-image">
            <img src="images/pic2.jpg" alt="University campus" />
          </div>
        </div>
      </section>

      <!-- Section 2: K-12 Schools -->
      <section class="partnership-type-section bg-white">
        <div class="partnership-grid">
          <div class="partnership-image">
            <img src="images/k-12.webp" alt="Children in a classroom" />
          </div>
          <div class="partnership-text">
            <h2>K-12 Schools</h2>
            <p>
              We partner with K-12 schools through our university education
              programs to improve the quality of teaching and enhance learning
              outcomes, building a strong foundation for the next generation of
              leaders.
            </p>
            <a
              href="#contact"
              class="partnership-contact-btn"
              data-subject="K-12 School Partnership Inquiry"
              >Contact Us</a
            >
          </div>
        </div>
      </section>

      <!-- Section 3: Entrepreneurs & Businesses -->
      <section class="partnership-type-section">
        <div class="partnership-grid">
          <div class="partnership-text">
            <h2>Entrepreneurs, Businesses & Organizations</h2>
            <p>
              We believe in the power of collaboration to drive innovation and
              solve real-world problems.
            </p>
            <ul>
              <li>
                Partner with us on projects for our students to solve real
                challenges for your business.
              </li>
              <li>
                Collaborate on community projects to create a lasting social
                impact.
              </li>
            </ul>
            <a
              href="#contact"
              class="partnership-contact-btn"
              data-subject="Business/Entrepreneur Partnership Inquiry"
              >Contact Us</a
            >
          </div>
          <div class="partnership-image">
            <img
              src="images/biz.jpg"
              alt="Business professionals collaborating"
            />
          </div>
        </div>
      </section>

      <!-- Contact Form Section -->
      <section class="contact-section" id="contact">
        <div class="container mx-auto px-6">
          <div class="contact-header">
            <h2 class="contact-main-title">Let's Start a Conversation</h2>
            <p class="contact-intro">
              Select a partnership type above or fill out the form below. Our
              dedicated professionals are ready to address your needs.
            </p>
          </div>

          <form class="contact-form" id="contact-form">
            <div class="form-grid">
              <div class="form-group">
                <label for="name" class="form-label">Your Name</label>
                <input type="text" id="name" name="name" placeholder="John Doe" class="form-input" required />
              </div>
              <div class="form-group">
                <label for="email" class="form-label">Your Email</label>
                <input type="email" id="email" name="email" placeholder="john.doe@example.com" class="form-input" required />
              </div>
              <div class="form-group">
                <label for="phone" class="form-label">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="+000 000 000 000" class="form-input" />
              </div>
              <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <select id="subject" name="subject" class="form-select" required>
                  <option value="" disabled selected>Please select an inquiry type...</option>
                  <option value="University Partnership Inquiry">University Partnership Inquiry</option>
                  <option value="K-12 School Partnership Inquiry">K-12 School Partnership Inquiry</option>
                  <option value="Business/Entrepreneur Partnership Inquiry">Business/Entrepreneur Partnership Inquiry</option>
                  <option value="General Inquiry">General Inquiry</option>
                </select>
              </div>
              <div class="form-group full-width">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" name="message" rows="6" placeholder="Tell us more about your partnership idea..." class="form-textarea" required></textarea>
              </div>
            </div>
            <div class="button-wrapper">
              <button type="submit" class="submit-button">Send Message</button>
            </div>
          </form>
        </div>
      </section>
    </main>

<?php include 'includes/footer.php'; ?>

    <script>
      document.addEventListener("DOMContentLoaded", function () {
        const contactButtons = document.querySelectorAll(
          ".partnership-contact-btn",
        );
        const subjectField = document.getElementById("subject");
        const contactSection = document.getElementById("contact");

        contactButtons.forEach((button) => {
          button.addEventListener("click", function (e) {
            e.preventDefault();
            if (subjectField) {
              subjectField.value = this.dataset.subject;
            }
            if (contactSection) {
              contactSection.scrollIntoView({
                behavior: "smooth",
                block: "start",
              });
            }
          });
        });
      });
    </script>
