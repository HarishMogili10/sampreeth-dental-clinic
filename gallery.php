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
          <span>Gallery</span>
        </div>
        <h1>Clinic Gallery & Facilities</h1>
        <p>Take a virtual tour of our modern dental operatories, hygienic sterilization rooms, and clinical case outcomes.</p>
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
     GALLERY SECTION
============================== -->
<section class="section-padding bg-light">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-images me-1"></i> Our Infrastructure & Cases</span>
      <h2 class="section-title">CLINIC TOUR & CASE GALLERY</h2>
      <p class="section-subtitle">
        We prioritize patient safety, international sterilization benchmarks, and state-of-the-art diagnostic technology at Sampreeth Dental Clinic.
      </p>
    </div>

    <!-- GALLERY FILTER PILLS -->
    <div class="gallery-filters">
      <button type="button" class="gallery-filter-btn active" data-filter="*">All Photos</button>
      <button type="button" class="gallery-filter-btn" data-filter=".facility">Clinic & Facilities</button>
      <button type="button" class="gallery-filter-btn" data-filter=".cases">Clinical Cases</button>
      <button type="button" class="gallery-filter-btn" data-filter=".cert">Certificates</button>
    </div>

    <!-- GALLERY GRID -->
    <div class="row g-4 justify-content-center" id="galleryGrid">
      
      <!-- Facility Items -->
      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery1.jpg" data-bs-lightbox data-caption="Modern Dental Treatment Operatory">
            <img src="images/gallery1.jpg" alt="Treatment Operatory">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Treatment Operatory Room</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery2.jpg" data-bs-lightbox data-caption="Dental Consultation & Patient Care Suite">
            <img src="images/gallery2.jpg" alt="Patient Suite">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Consultation & Patient Care Suite</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery3.jpg" data-bs-lightbox data-caption="Sterilization & Clean Air Zone">
            <img src="images/gallery3.jpg" alt="Sterilization Area">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Advanced Sterilization Zone</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery4.jpg" data-bs-lightbox data-caption="Modern Dental Equipment & Operatory Chair">
            <img src="images/gallery4.jpg" alt="Dental Equipment">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Ergonomic Dental Chair & Unit</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery5.jpg" data-bs-lightbox data-caption="Clinical Hygiene & Diagnostic Instruments">
            <img src="images/gallery5.jpg" alt="Instruments">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Diagnostic & Surgical Instruments</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item facility">
        <div class="gallery-card">
          <a href="images/gallery6.jpg" data-bs-lightbox data-caption="Reception & Patient Lounge">
            <img src="images/gallery6.jpg" alt="Reception Lounge">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Reception & Patient Waiting Lounge</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Case Items -->
      <div class="col-md-6 col-lg-4 gallery-grid-item cases">
        <div class="gallery-card">
          <a href="images/gallery7_a.jpg" data-bs-lightbox data-caption="Restorative Treatment Case Assessment">
            <img src="images/gallery7_a.jpg" alt="Restorative Case">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Restorative Smile Case</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item cases">
        <div class="gallery-card">
          <a href="images/gallery8_a.jpg" data-bs-lightbox data-caption="Orthodontic & Alignment Progress">
            <img src="images/gallery8_a.jpg" alt="Orthodontic Case">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Orthodontic Teeth Alignment</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item cases">
        <div class="gallery-card">
          <a href="images/gallery9_a.jpg" data-bs-lightbox data-caption="Cosmetic Whitening & Cleaning Outcome">
            <img src="images/gallery9_a.jpg" alt="Whitening Case">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Cosmetic Whitening Outcome</span>
            </div>
          </a>
        </div>
      </div>

      <!-- Certificate Items -->
      <div class="col-md-6 col-lg-4 gallery-grid-item cert">
        <div class="gallery-card">
          <a href="images/koteswara_rao_002.jpg" data-bs-lightbox data-caption="Dr. Nadella Koteswara Rao - Surgical Certification">
            <img src="images/koteswara_rao_002.jpg" alt="Surgical Certificate">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Dr. Koteswara Rao - Surgical Accreditation</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item cert">
        <div class="gallery-card">
          <a href="images/Dr_Neelima_0001.jpg" data-bs-lightbox data-caption="Dr. Nadella Neelima - Dental Certification">
            <img src="images/Dr_Neelima_0001.jpg" alt="Dental Certificate">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Dr. Neelima - Dental Certification</span>
            </div>
          </a>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 gallery-grid-item cert">
        <div class="gallery-card">
          <a href="images/Dr_NKR_page-0001.jpg" data-bs-lightbox data-caption="Dr. NKR - Continuing Medical Education">
            <img src="images/Dr_NKR_page-0001.jpg" alt="Medical Certificate">
            <div class="gallery-card-overlay">
              <span class="gallery-card-title"><i class="fa-solid fa-magnifying-glass-plus me-1"></i> Dr. NKR - Continuing Education</span>
            </div>
          </a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php 
	include('footer.php');
?>
