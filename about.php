<?php 
	include('header.php');
?>

<!-- =========================
     PAGE BANNER
============================== -->
<section class="page-banner">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="breadcrumb-custom">
          <a href="index.php"><i class="fa-solid fa-house me-1"></i> Home</a>
          <i class="fa-solid fa-angle-right" style="font-size: 10px;"></i>
          <span>About Us</span>
        </div>
        <h1>About Sampreeth Dental Clinic</h1>
        <p>Providing trusted, patient-centric, world-class dental healthcare in Vijayawada, Andhra Pradesh.</p>
      </div>
      <div class="col-lg-4 text-lg-end d-none d-lg-block">
        <button type="button" class="btn btn-dental-white" data-bs-toggle="modal" data-bs-target="#appointmentModal">
          <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
        </button>
      </div>
    </div>
  </div>
</section>

<!-- =========================
     ABOUT OUR CLINIC SECTION
============================== -->
<section class="section-padding bg-white">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- ABOUT TEXT -->
      <div class="col-lg-6">
        <span class="section-tag"><i class="fa-solid fa-hospital me-1"></i> Our Mission & Care</span>
        <h2 class="section-title">ABOUT OUR CLINIC</h2>
        <div class="about-badge mb-3">
          <i class="fa-solid fa-shield-halved"></i> Comprehensive & Anxiety-Free Dentistry
        </div>
        
        <p class="lead text-muted" style="font-size: 16px; line-height: 1.75;">
          We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious or have an underlying developmental or medical condition that may add complexity to the management of their oral health.
        </p>

        <ul class="checklist-styled">
          <li><strong>General Dentistry</strong> - preventative and restorative dental care.</li>
          <li><strong>Specialized Orthodontics</strong> - specialized dental care to straighten crooked teeth in children and adults.</li>
          <li><strong>Periodontal & Surgical Care</strong> - treat diseases of the gums and the placement of dental implants.</li>
        </ul>

        <p class="text-secondary mb-4" style="line-height: 1.7;">
          We are committed to helping you maintain your oral health as an integral part of your overall health and wellness. Our experienced clinical team utilizes modern diagnostics, gentle techniques, and strict hospital-grade sterilization protocols to guarantee comfortable visits.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <button type="button" class="btn btn-dental-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fa-solid fa-calendar-check me-1"></i> Schedule Consultation
          </button>
          <a href="contact.php" class="btn btn-dental-outline">
            <i class="fa-solid fa-location-dot me-1"></i> Visit Our Clinic
          </a>
        </div>
      </div>

      <!-- ABOUT IMAGE -->
      <div class="col-lg-6">
        <div class="about-img-frame">
          <img src="images/about-bg.jpg" alt="Sampreeth Dental Clinic" class="w-100 object-fit-cover" style="min-height: 440px;">
          <div class="about-experience-badge">
            <div class="badge-icon">
              <i class="fa-solid fa-award"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-white">Sampreeth Dental Clinic</div>
              <div class="small text-white-50">Committed to Healthier Smiles & Brighter Lives</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     OUR SENIOR DOCTORS
============================== -->
<section class="section-padding bg-light">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-user-doctor me-1"></i> Meet The Specialists</span>
      <h2 class="section-title">OUR DOCTOR PROFILES</h2>
      <p class="section-subtitle">
        Led by distinguished dental specialists committed to clinical excellence, patient comfort, and ethical medical care.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- DOCTOR 1 -->
      <div class="col-lg-5 col-md-6">
        <div class="doctor-card">
          <div class="doctor-img-wrap">
            <img src="images/doctor01.jpg" alt="Dr Nadella Koteswara Rao">
            <div class="doctor-socials">
              <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" title="Skype"><i class="fa-brands fa-skype"></i></a>
            </div>
          </div>
          <div class="doctor-body">
            <h3 class="doctor-name">Dr Nadella Koteswara Rao</h3>
            <span class="doctor-position">Oral & Maxillofacial Surgeon</span>
            <p class="small text-muted mb-3">
              Specialized in oral & maxillofacial surgery, dental implantology, complex extractions, and facial bone trauma reconstruction.
            </p>
            <div class="doctor-timings">
              <div class="doctor-timings-title">
                <i class="fa-solid fa-clock text-primary"></i> Consultation Hours:
              </div>
              <div class="d-flex justify-content-between text-muted mt-1 small">
                <span>Mon - Sat:</span>
                <span class="fw-semibold text-dark">10:00 AM - 9:00 PM</span>
              </div>
              <div class="d-flex justify-content-between text-muted small">
                <span>Sunday:</span>
                <span class="fw-semibold text-dark">10:00 AM - 1:00 PM</span>
              </div>
            </div>
            <button type="button" class="btn btn-dental-primary btn-book" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-doctor-name="Dr Nadella Koteswara Rao">
              <i class="fa-solid fa-calendar-check me-2"></i> Book Consultation
            </button>
          </div>
        </div>
      </div>

      <!-- DOCTOR 2 -->
      <div class="col-lg-5 col-md-6">
        <div class="doctor-card">
          <div class="doctor-img-wrap">
            <img src="images/doctor02.jpg" alt="Dr Nadella Neelima">
            <div class="doctor-socials">
              <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" title="Skype"><i class="fa-brands fa-skype"></i></a>
            </div>
          </div>
          <div class="doctor-body">
            <h3 class="doctor-name">Dr Nadella Neelima</h3>
            <span class="doctor-position">Dental Surgeon</span>
            <p class="small text-muted mb-3">
              Specialized in smile makeovers, cosmetic teeth whitening, root canal treatments, pediatric dentistry, and restorative procedures.
            </p>
            <div class="doctor-timings">
              <div class="doctor-timings-title">
                <i class="fa-solid fa-clock text-primary"></i> Consultation Hours:
              </div>
              <div class="d-flex justify-content-between text-muted mt-1 small">
                <span>Mon - Sat:</span>
                <span class="fw-semibold text-dark">10:00 AM - 9:00 PM</span>
              </div>
              <div class="d-flex justify-content-between text-muted small">
                <span>Sunday:</span>
                <span class="fw-semibold text-dark">10:00 AM - 1:00 PM</span>
              </div>
            </div>
            <button type="button" class="btn btn-dental-primary btn-book" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-doctor-name="Dr Nadella Neelima">
              <i class="fa-solid fa-calendar-check me-2"></i> Book Consultation
            </button>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     CERTIFICATES OF COMPLETION
============================== -->
<section class="section-padding bg-white" id="certs">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-award me-1"></i> Verified Accreditations</span>
      <h2 class="section-title">Certificates of completion</h2>
      <p class="section-subtitle">
        Ongoing clinical qualifications and surgical certifications verifying our dedication to the highest standards of international dental healthcare.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/koteswara_rao_002.jpg" data-bs-lightbox data-caption="Dr. Nadella Koteswara Rao Certificate of Completion" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/koteswara_rao_002.jpg" alt="Dr Nadella Koteswara Rao Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. Koteswara Rao - Surgical</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/koteswara_rao_003.jpg" data-bs-lightbox data-caption="Dr. Nadella Koteswara Rao Implantology Certificate" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/koteswara_rao_003.jpg" alt="Dr Nadella Koteswara Rao Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. Koteswara Rao - Implants</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_Neelima_0001.jpg" data-bs-lightbox data-caption="Dr. Nadella Neelima Professional Certificate" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_Neelima_0001.jpg" alt="Dr Nadella Neelima Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. Neelima - Professional</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_Neelima_0002.jpg" data-bs-lightbox data-caption="Dr. Nadella Neelima Dental Certification" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_Neelima_0002.jpg" alt="Dr Nadella Neelima Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. Neelima - Dental Certification</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_NKR_page-0001.jpg" data-bs-lightbox data-caption="Dr. NKR Page 001 - Specialized Training" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_NKR_page-0001.jpg" alt="Dr NKR Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. NKR - Specialized Training</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_NKR_page-0002.jpg" data-bs-lightbox data-caption="Dr. NKR Page 002 - Advanced Workshop" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_NKR_page-0002.jpg" alt="Dr NKR Certificate">
            </div>
            <div class="fw-semibold small text-dark">Dr. NKR - Advanced Workshop</div>
            <div class="text-primary small" style="font-size: 11px;">Click to view <i class="fa-solid fa-up-right-from-square ms-1"></i></div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<?php 
	include('footer.php');
?>
