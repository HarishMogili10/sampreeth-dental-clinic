<!-- =========================
     FOOTER
============================== -->
<footer class="dental-footer">
  <div class="container">
    <div class="row g-4">
      
      <!-- FOOTER COLUMN 1: ABOUT CLINIC -->
      <div class="col-lg-4 col-md-6">
        <a href="index.php" class="d-inline-block mb-3">
          <img src="images/sampreeth-logo.png" alt="Sampreeth Dental Clinic" class="footer-logo bg-white p-2 rounded-2" style="max-height: 54px;">
        </a>
        <p class="text-light-subtle mb-4" style="font-size: 14px; line-height: 1.7;">
          We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious or have an underlying developmental or medical condition that may add complexity to the management of their oral health.
        </p>
        <div class="d-flex align-items-center gap-2">
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Google"><i class="fa-brands fa-google"></i></a>
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
          <a href="#" class="btn btn-sm btn-outline-light rounded-circle" style="width: 36px; height: 36px; display: inline-flex; align-items: center; justify-content: center;" title="Skype"><i class="fa-brands fa-skype"></i></a>
        </div>
      </div>

      <!-- FOOTER COLUMN 2: QUICK LINKS -->
      <div class="col-lg-2 col-md-6 col-sm-6">
        <h4 class="footer-title">Quick Links</h4>
        <ul class="footer-links">
          <li><a href="index.php"><i class="fa-solid fa-angle-right text-primary"></i> Home</a></li>
          <li><a href="about.php"><i class="fa-solid fa-angle-right text-primary"></i> About Us</a></li>
          <li><a href="services.php"><i class="fa-solid fa-angle-right text-primary"></i> Treatments</a></li>
          <li><a href="gallery.php"><i class="fa-solid fa-angle-right text-primary"></i> Gallery</a></li>
          <li><a href="contact.php"><i class="fa-solid fa-angle-right text-primary"></i> Contact Us</a></li>
          <li><a href="#appointmentModal" data-bs-toggle="modal"><i class="fa-solid fa-angle-right text-primary"></i> Book Appointment</a></li>
        </ul>
      </div>

      <!-- FOOTER COLUMN 3: TREATMENTS -->
      <div class="col-lg-3 col-md-6 col-sm-6">
        <h4 class="footer-title">Our Treatments</h4>
        <ul class="footer-links">
          <li><a href="services.php#whitening"><i class="fa-solid fa-angle-right text-primary"></i> Teeth Whitening</a></li>
          <li><a href="services.php#implants"><i class="fa-solid fa-angle-right text-primary"></i> Dental Implants</a></li>
          <li><a href="services.php#rootcanal"><i class="fa-solid fa-angle-right text-primary"></i> Root Canal Treatment</a></li>
          <li><a href="services.php#braces"><i class="fa-solid fa-angle-right text-primary"></i> Braces & Aligners</a></li>
          <li><a href="services.php#impacted"><i class="fa-solid fa-angle-right text-primary"></i> Impacted Teeth Surgery</a></li>
          <li><a href="services.php#cosmetic"><i class="fa-solid fa-angle-right text-primary"></i> Cosmetic Dentistry</a></li>
          <li><a href="services.php#child"><i class="fa-solid fa-angle-right text-primary"></i> Child Dental Care</a></li>
        </ul>
      </div>

      <!-- FOOTER COLUMN 4: CONTACT & OPENING HOURS -->
      <div class="col-lg-3 col-md-6">
        <h4 class="footer-title">Clinic Timings</h4>
        <table class="footer-timings-table mb-3">
          <tbody>
            <tr>
              <td class="day">Mon - Sat:</td>
              <td class="text-end">10:00 AM - 1:00 PM<br>4:30 PM - 9:00 PM</td>
            </tr>
            <tr>
              <td class="day">Sunday:</td>
              <td class="text-end">10:00 AM - 1:00 PM</td>
            </tr>
          </tbody>
        </table>

        <div class="d-flex flex-column gap-2 pt-2 border-top border-secondary border-opacity-25">
          <div class="d-flex align-items-center gap-2 text-light-subtle">
            <i class="fa-solid fa-phone text-primary"></i>
            <a href="tel:+917995605888" class="text-light-subtle fw-semibold">+91 79956 05888</a>
          </div>
          <div class="d-flex align-items-center gap-2 text-light-subtle">
            <i class="fa-solid fa-envelope text-primary"></i>
            <a href="mailto:drnadellaneelima@gmail.com" class="text-light-subtle">drnadellaneelima@gmail.com</a>
          </div>
          <div class="d-flex align-items-start gap-2 text-light-subtle" style="font-size: 13px;">
            <i class="fa-solid fa-location-dot text-primary mt-1"></i>
            <span>#57-6-2, Venkata Sai Enclave, Old Post Office Road, Opp: Sri Chaitanya School, Patamata, Vijayawada - 10</span>
          </div>
        </div>
      </div>

    </div>

    <!-- FOOTER BOTTOM COPYRIGHT -->
    <div class="footer-bottom text-center">
      <div class="row align-items-center">
        <div class="col-md-6 text-md-start mb-2 mb-md-0">
          Copyright &copy; <?php echo date('Y'); ?> <strong>SAMPREETH DENTAL CLINIC</strong>. All Rights Reserved.
        </div>
        <div class="col-md-6 text-md-end">
          Powered by <a href="https://sab-it.co" target="_blank" class="text-info text-decoration-none fw-semibold">SAB IT SERVICES</a>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- =========================
     END FOOTER
============================== -->

<!-- =========================
     MODAL: BOOK APPOINTMENT
============================== -->
<div class="modal fade" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content modal-content-dental">
      <div class="modal-header modal-header-dental">
        <div>
          <h4 class="modal-title fw-bold" id="appointmentModalLabel"><i class="fa-solid fa-calendar-check me-2"></i>Book Your Dental Appointment</h4>
          <p class="small text-white-50 mb-0">Fill out your details to schedule a consultation with our experienced dental surgeons.</p>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body modal-body-dental">
        <div class="row g-4">
          <!-- FORM COLUMN -->
          <div class="col-lg-7">
            <form class="dental-booking-form">
              <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Select Doctor</label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="fa-solid fa-user-doctor text-primary"></i></span>
                  <select id="modalDoctorSelect" class="form-select form-control-dental" name="form-doctor" required>
                    <option value="" disabled selected>-- Choose Doctor --</option>
                    <option value="Dr Nadella Koteswara Rao" selected>Dr Nadella Koteswara Rao (Oral & Maxillofacial Surgeon)</option>
                    <option value="Dr Nadella Neelima">Dr Nadella Neelima (Dental Surgeon)</option>
                    <option value="Dr Kiran Kumar Dodda">Dr Kiran Kumar Dodda</option>
                    <option value="Dr Srikanth Koya">Dr Srikanth Koya</option>
                    <option value="Dr Ravi Kiran V">Dr Ravi Kiran V</option>
                    <option value="Dr Satya Karthik M">Dr Satya Karthik M</option>
                    <option value="Dr Prasanna">Dr Prasanna</option>
                  </select>
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label class="form-label small fw-bold text-dark">Your Name *</label>
                  <input type="text" class="form-control form-control-dental" name="name" placeholder="Full name" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-bold text-dark">Phone Number *</label>
                  <input type="tel" class="form-control form-control-dental" name="phone" placeholder="e.g. 9876543210" required>
                </div>
              </div>

              <div class="row g-3 mb-3">
                <div class="col-md-6">
                  <label class="form-label small fw-bold text-dark">Preferred Date *</label>
                  <input type="date" class="form-control form-control-dental" name="date" required>
                </div>
                <div class="col-md-6">
                  <label class="form-label small fw-bold text-dark">Preferred Time *</label>
                  <select class="form-select form-control-dental" name="time" required>
                    <option value="10:00 AM">Morning (10:00 AM - 1:00 PM)</option>
                    <option value="05:00 PM" selected>Evening (4:30 PM - 9:00 PM)</option>
                  </select>
                </div>
              </div>

              <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Email Address (Optional)</label>
                <input type="email" class="form-control form-control-dental" name="email" placeholder="name@example.com">
              </div>

              <div class="mb-3">
                <label class="form-label small fw-bold text-dark">Dental Concern or Message</label>
                <textarea class="form-control form-control-dental" name="message" rows="3" placeholder="Tell us briefly about your symptoms or requirements..."></textarea>
              </div>

              <div class="d-flex align-items-center justify-content-between pt-2">
                <button type="button" class="btn btn-outline-secondary rounded-pill px-4" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-dental-primary px-4 py-2">
                  <i class="fa-solid fa-paper-plane me-1"></i> Submit Request
                </button>
              </div>
            </form>
          </div>

          <!-- DOCTOR PREVIEW COLUMN -->
          <div class="col-lg-5">
            <!-- Doctor 1: Dr Nadella Koteswara Rao -->
            <div id="doctorPreview1" class="p-3 bg-light rounded-3 border h-100">
              <div class="text-center mb-3">
                <img src="images/doctor01.jpg" alt="Dr Nadella Koteswara Rao" class="rounded-circle shadow-sm" style="width: 110px; height: 110px; object-fit: cover;">
                <h5 class="fw-bold mt-2 mb-0 text-dark">Dr Nadella Koteswara Rao</h5>
                <span class="badge bg-primary text-white mt-1">Oral & Maxillofacial Surgeon</span>
              </div>
              <div class="bg-white p-3 rounded-2 border small mb-3">
                <div class="fw-bold text-dark mb-2"><i class="fa-solid fa-clock text-primary me-2"></i>Consultation Timings:</div>
                <div class="d-flex justify-content-between py-1 border-bottom">
                  <span>Mon - Sat:</span>
                  <span class="fw-semibold">10:00 AM - 9:00 PM</span>
                </div>
                <div class="d-flex justify-content-between py-1">
                  <span>Sunday:</span>
                  <span class="fw-semibold">10:00 AM - 1:00 PM</span>
                </div>
              </div>
              <div class="small text-muted">
                <i class="fa-solid fa-circle-check text-success me-1"></i> Specialized in dental implants, cyst/tumour removal, and complex maxillofacial surgery.
              </div>
            </div>

            <!-- Doctor 2: Dr Nadella Neelima -->
            <div id="doctorPreview2" class="p-3 bg-light rounded-3 border h-100" style="display: none;">
              <div class="text-center mb-3">
                <img src="images/doctor02.jpg" alt="Dr Nadella Neelima" class="rounded-circle shadow-sm" style="width: 110px; height: 110px; object-fit: cover;">
                <h5 class="fw-bold mt-2 mb-0 text-dark">Dr Nadella Neelima</h5>
                <span class="badge bg-primary text-white mt-1">Dental Surgeon</span>
              </div>
              <div class="bg-white p-3 rounded-2 border small mb-3">
                <div class="fw-bold text-dark mb-2"><i class="fa-solid fa-clock text-primary me-2"></i>Consultation Timings:</div>
                <div class="d-flex justify-content-between py-1 border-bottom">
                  <span>Mon - Sat:</span>
                  <span class="fw-semibold">10:00 AM - 9:00 PM</span>
                </div>
                <div class="d-flex justify-content-between py-1">
                  <span>Sunday:</span>
                  <span class="fw-semibold">10:00 AM - 1:00 PM</span>
                </div>
              </div>
              <div class="small text-muted">
                <i class="fa-solid fa-circle-check text-success me-1"></i> Specialized in restorative dentistry, smile makeovers, root canal treatments, and pediatric dental care.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- =========================
     END MODAL: BOOK APPOINTMENT
============================== -->

<!-- =========================
     MODAL: IMAGE / CERTIFICATE LIGHTBOX
============================== -->
<div class="modal fade" id="imageLightboxModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content bg-transparent border-0">
      <div class="modal-body text-center p-0 position-relative">
        <button type="button" class="btn-close btn-close-white position-absolute top-0 end-0 m-3 z-3" data-bs-dismiss="modal" aria-label="Close"></button>
        <img id="lightboxModalImage" src="" alt="Enlarged View" class="img-fluid rounded-3 shadow-lg" style="max-height: 85vh; background: #fff;">
        <div id="lightboxModalCaption" class="text-white mt-2 small fw-semibold"></div>
      </div>
    </div>
  </div>
</div>

<!-- =========================
     SCROLL TO TOP BUTTON
============================== -->
<button id="scrollToTop" class="scroll-to-top-btn" title="Back to top" aria-label="Scroll to top">
  <i class="fa-solid fa-arrow-up"></i>
</button>

<!-- =========================
     MOBILE QUICK ACTIONS BAR
============================== -->
<div class="mobile-quick-actions">
  <a href="tel:+917995605888" class="btn btn-outline-primary d-inline-flex align-items-center">
    <i class="fa-solid fa-phone me-1"></i> Call Clinic
  </a>
  <a href="https://wa.me/917995605888?text=Hello%20Sampreeth%20Dental%20Clinic,%20I%20would%20like%20to%20inquire%20about%20a%20consultation" target="_blank" class="btn btn-success d-inline-flex align-items-center">
    <i class="fa-brands fa-whatsapp me-1"></i> WhatsApp
  </a>
  <button type="button" class="btn btn-dental-primary d-inline-flex align-items-center" data-bs-toggle="modal" data-bs-target="#appointmentModal">
    <i class="fa-solid fa-calendar-check me-1"></i> Book
  </button>
</div>

<!-- =========================
     SCRIPTS
============================== -->
<!-- BOOTSTRAP 5.3 BUNDLE JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- MODERN DENTAL CLINIC INTERACTIVE JS -->
<script src="js/modern-dental.js"></script>
</body>
</html>
