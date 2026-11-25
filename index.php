<?php 
	include('header.php');
?>

<!-- =========================
     HERO SLIDER SECTION
============================== -->
<section class="hero-slider-section">
  <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">

      <!-- SLIDE 1 -->
      <div class="carousel-item active">
        <div class="hero-slide-item" style="background-image: url('images/slide_01.jpg');">
          <div class="hero-slide-overlay"></div>
          <div class="container position-relative z-2">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="hero-badge">
                  <i class="fa-solid fa-tooth"></i> Welcome to Sampreeth Dental Clinic
                </span>
                <h1 class="hero-title">It is quite simple!</h1>
                <h2 class="hero-subtitle">You choose convenient time!</h2>
                <p class="hero-desc">
                  We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious.
                </p>
                <div class="d-flex flex-wrap gap-3">
                  <button type="button" class="btn btn-dental-primary px-4 py-3" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
                  </button>
                  <a href="services.php" class="btn btn-dental-white px-4 py-3">
                    <i class="fa-solid fa-stethoscope me-2"></i> Explore Treatments
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 2 -->
      <div class="carousel-item">
        <div class="hero-slide-item" style="background-image: url('images/slide_02.jpg');">
          <div class="hero-slide-overlay"></div>
          <div class="container position-relative z-2">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="hero-badge">
                  <i class="fa-solid fa-child-reaching"></i> Healthy Kids Care
                </span>
                <h1 class="hero-title">Our Concern</h1>
                <h2 class="hero-subtitle">Discount for children Rs. 99 /-</h2>
                <p class="hero-desc">
                  We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious.
                </p>
                <div class="d-flex flex-wrap gap-3">
                  <button type="button" class="btn btn-dental-primary px-4 py-3" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
                  </button>
                  <a href="services.php#child" class="btn btn-dental-white px-4 py-3">
                    <i class="fa-solid fa-child me-2"></i> Child Dental Care
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- SLIDE 3 -->
      <div class="carousel-item">
        <div class="hero-slide-item" style="background-image: url('images/slide_03.jpg');">
          <div class="hero-slide-overlay"></div>
          <div class="container position-relative z-2">
            <div class="row">
              <div class="col-lg-8 col-xl-7">
                <span class="hero-badge">
                  <i class="fa-solid fa-wand-magic-sparkles"></i> A Beautiful Smile Is Our Task!
                </span>
                <h1 class="hero-title">Dental Services</h1>
                <h2 class="hero-subtitle">Healthy teeth - healthy body</h2>
                <p class="hero-desc">
                  We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious.
                </p>
                <div class="d-flex flex-wrap gap-3">
                  <button type="button" class="btn btn-dental-primary px-4 py-3" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                    <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
                  </button>
                  <a href="about.php" class="btn btn-dental-white px-4 py-3">
                    <i class="fa-solid fa-hospital me-2"></i> About Our Clinic
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev" aria-label="Previous">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next" aria-label="Next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
    </button>
  </div>
</section>

<!-- =========================
     QUICK SERVICES STRIP
============================== -->
<section class="features-strip">
  <div class="container">
    <div class="row g-3">
      
      <!-- QUICK SERVICE 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-card-quick">
          <div class="feature-icon-box">
            <i class="fa-solid fa-sparkles"></i>
          </div>
          <h3>Teeth Whitening</h3>
          <p>Tooth whitening can be a very effective way of lightening the natural colour of your teeth without removing any of the tooth surface.</p>
          <a href="services.php#whitening" class="small fw-bold text-primary mt-3 d-inline-block">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
      </div>

      <!-- QUICK SERVICE 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-card-quick">
          <div class="feature-icon-box">
            <i class="fa-solid fa-screwdriver"></i>
          </div>
          <h3>Implants</h3>
          <p>Dental implants may be an option for people who have lost a tooth or teeth due to periodontal disease, an injury, or some other reason.</p>
          <a href="services.php#implants" class="small fw-bold text-primary mt-3 d-inline-block">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
      </div>

      <!-- QUICK SERVICE 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-card-quick">
          <div class="feature-icon-box">
            <i class="fa-solid fa-tooth"></i>
          </div>
          <h3>Extractions</h3>
          <p>In orthodontics if the teeth are crowded, sound teeth may be extracted to create space so the rest of the teeth can be straightened.</p>
          <a href="services.php#extraction" class="small fw-bold text-primary mt-3 d-inline-block">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
      </div>

      <!-- QUICK SERVICE 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="feature-card-quick">
          <div class="feature-icon-box">
            <i class="fa-solid fa-shield-virus"></i>
          </div>
          <h3>Gum Disease</h3>
          <p>Plaque is the primary cause of gum disease. However, other factors can contribute to periodontal disease.</p>
          <a href="services.php#cleaning" class="small fw-bold text-primary mt-3 d-inline-block">Learn More <i class="fa-solid fa-arrow-right ms-1"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     ABOUT SECTION
============================== -->
<section class="section-padding bg-light" id="about">
  <div class="container">
    <div class="row align-items-center g-5">
      
      <!-- ABOUT TEXT -->
      <div class="col-lg-6">
        <span class="section-tag"><i class="fa-solid fa-hospital me-1"></i> Who We Are</span>
        <h2 class="section-title">ABOUT OUR CLINIC</h2>
        <div class="about-badge">
          <i class="fa-solid fa-certificate"></i> Certified & Highly Rated Dental Practice in Vijayawada
        </div>
        <p class="lead text-muted" style="font-size: 16px;">
          We provide team-based, comprehensive dental care for children and adults, including patients of all ages who are anxious or have an underlying developmental or medical condition that may add complexity to the management of their oral health.
        </p>

        <ul class="checklist-styled">
          <li>General Dentistry - preventative and restorative dental care.</li>
          <li>Specialized dental care to straighten crooked teeth in children and adults.</li>
          <li>Treat diseases of the gums and the placement of dental implants.</li>
        </ul>

        <p class="text-secondary mb-4">
          We are committed to helping you maintain your oral health as an integral part of your overall health and wellness.
        </p>

        <div class="d-flex flex-wrap gap-3">
          <a href="about.php" class="btn btn-dental-primary">
            Read More About Us <i class="fa-solid fa-arrow-right ms-1"></i>
          </a>
          <button type="button" class="btn btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fa-solid fa-calendar-check me-1"></i> Book Consultation
          </button>
        </div>
      </div>

      <!-- ABOUT IMAGE FRAME -->
      <div class="col-lg-6">
        <div class="about-img-frame">
          <img src="images/about-bg.jpg" alt="Sampreeth Dental Clinic Vijayawada" class="w-100 h-100 object-fit-cover" style="min-height: 420px;">
          <div class="about-experience-badge">
            <div class="badge-icon">
              <i class="fa-solid fa-award"></i>
            </div>
            <div>
              <div class="fw-bold fs-5 text-white">Advanced Dental Care</div>
              <div class="small text-white-50">State-of-the-Art Sterilization & Modern Infrastructure</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     MEET OUR DOCTORS
============================== -->
<section class="section-padding bg-white" id="doctors">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-user-doctor me-1"></i> Expert Care</span>
      <h2 class="section-title">MEET OUR DOCTORS</h2>
      <p class="section-subtitle">
        All staff members of Dental Clinic are licensed professionals. Our staff consists of licensed general dentists, hygienists, dental assistants, an endodontist, a periodontist, and an oral surgeon.
      </p>
    </div>

    <div class="row g-4 justify-content-center">
      
      <!-- DOCTOR 1: Dr Nadella Koteswara Rao -->
      <div class="col-lg-5 col-md-6">
        <div class="doctor-card">
          <div class="doctor-img-wrap">
            <img src="images/doctor01.jpg" alt="Dr Nadella Koteswara Rao - Oral & Maxillofacial Surgeon">
            <div class="doctor-socials">
              <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" title="Skype"><i class="fa-brands fa-skype"></i></a>
            </div>
          </div>
          <div class="doctor-body">
            <h3 class="doctor-name">Dr Nadella Koteswara Rao</h3>
            <span class="doctor-position">Oral & Maxillofacial Surgeon</span>
            
            <div class="doctor-timings">
              <div class="doctor-timings-title">
                <i class="fa-solid fa-clock text-primary"></i> Consultation Hours
              </div>
              <div class="d-flex justify-content-between text-muted mt-1">
                <span>Mon - Sat:</span>
                <span class="fw-semibold text-dark">10:00 AM - 9:00 PM</span>
              </div>
              <div class="d-flex justify-content-between text-muted">
                <span>Sunday:</span>
                <span class="fw-semibold text-dark">10:00 AM - 1:00 PM</span>
              </div>
            </div>

            <button type="button" class="btn btn-dental-primary btn-book" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-doctor-name="Dr Nadella Koteswara Rao">
              <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
            </button>
          </div>
        </div>
      </div>

      <!-- DOCTOR 2: Dr Nadella Neelima -->
      <div class="col-lg-5 col-md-6">
        <div class="doctor-card">
          <div class="doctor-img-wrap">
            <img src="images/doctor02.jpg" alt="Dr Nadella Neelima - Dental Surgeon">
            <div class="doctor-socials">
              <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
              <a href="#" title="Skype"><i class="fa-brands fa-skype"></i></a>
            </div>
          </div>
          <div class="doctor-body">
            <h3 class="doctor-name">Dr Nadella Neelima</h3>
            <span class="doctor-position">Dental Surgeon</span>
            
            <div class="doctor-timings">
              <div class="doctor-timings-title">
                <i class="fa-solid fa-clock text-primary"></i> Consultation Hours
              </div>
              <div class="d-flex justify-content-between text-muted mt-1">
                <span>Mon - Sat:</span>
                <span class="fw-semibold text-dark">10:00 AM - 9:00 PM</span>
              </div>
              <div class="d-flex justify-content-between text-muted">
                <span>Sunday:</span>
                <span class="fw-semibold text-dark">10:00 AM - 1:00 PM</span>
              </div>
            </div>

            <button type="button" class="btn btn-dental-primary btn-book" data-bs-toggle="modal" data-bs-target="#appointmentModal" data-doctor-name="Dr Nadella Neelima">
              <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment
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
<section class="section-padding bg-light" id="certificates">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-certificate me-1"></i> Qualifications & Training</span>
      <h2 class="section-title">Certificates of completion</h2>
      <p class="section-subtitle">
        Accredited continuing education and clinical specializations achieved by our senior doctors. Click any certificate to view in high resolution.
      </p>
    </div>

    <div class="row g-3 justify-content-center">
      
      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_Neelima_0001.jpg" data-bs-lightbox data-caption="Dr. Nadella Neelima Certificate of Completion" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_Neelima_0001.jpg" alt="Dr. Neelima Certificate">
            </div>
            <div class="small fw-semibold text-dark">Dr. Neelima - Certificate</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_Neelima_0002.jpg" data-bs-lightbox data-caption="Dr. Nadella Neelima Dental Certification" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_Neelima_0002.jpg" alt="Dr. Neelima Certification">
            </div>
            <div class="small fw-semibold text-dark">Dr. Neelima - Certification</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/koteswara_rao_002.jpg" data-bs-lightbox data-caption="Dr. Nadella Koteswara Rao Maxillofacial Surgical Accreditation" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/koteswara_rao_002.jpg" alt="Dr. Koteswara Rao Accreditation">
            </div>
            <div class="small fw-semibold text-dark">Dr. Koteswara Rao - Surgical</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/koteswara_rao_003.jpg" data-bs-lightbox data-caption="Dr. Nadella Koteswara Rao Implant & Surgical Qualification" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/koteswara_rao_003.jpg" alt="Dr. Koteswara Rao Certificate">
            </div>
            <div class="small fw-semibold text-dark">Dr. Koteswara Rao - Implants</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_NKR_page-0001.jpg" data-bs-lightbox data-caption="Dr. NKR Page 1 - Clinical Certification" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_NKR_page-0001.jpg" alt="Dr NKR Page 1">
            </div>
            <div class="small fw-semibold text-dark">Dr. NKR - Certification 1</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_NKR_page-0002.jpg" data-bs-lightbox data-caption="Dr. NKR Page 2 - Specialty Certification" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_NKR_page-0002.jpg" alt="Dr NKR Page 2">
            </div>
            <div class="small fw-semibold text-dark">Dr. NKR - Certification 2</div>
          </div>
        </a>
      </div>

      <div class="col-6 col-md-4 col-lg-3">
        <a href="images/Dr_NKR_page-0003.jpg" data-bs-lightbox data-caption="Dr. NKR Page 3 - Specialist Diploma" class="d-block text-decoration-none">
          <div class="cert-card">
            <div class="cert-thumbnail">
              <img src="images/Dr_NKR_page-0003.jpg" alt="Dr NKR Page 3">
            </div>
            <div class="small fw-semibold text-dark">Dr. NKR - Certification 3</div>
          </div>
        </a>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     SUCCESS STORIES (BEFORE & AFTER)
============================== -->
<section class="section-padding bg-white" id="stories">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-camera-rotate me-1"></i> Real Results</span>
      <h2 class="section-title">SUCCESS STORIES</h2>
      <p class="section-subtitle">Happy patients stories & real clinical transformation cases</p>
    </div>

    <div class="row g-4">
      
      <!-- STORY 1 -->
      <div class="col-lg-6">
        <div class="story-card h-100">
          <div class="row g-3">
            <div class="col-md-6 d-flex flex-column">
              <div class="quote-icon-bubble">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="small text-muted flex-grow-1" style="line-height: 1.6;">
                "My visits to Dental clinic is always more than just a pleasant experience! I had my cleaning done by Arnie Alban and she did an absolutely impeccable job!! She meticulously and patiently removed the most stubborn stains without causing any discomfort! If you are seeking perfection, then I highly recommend Arnie!"
              </p>
              <div class="small border-top pt-2">
                <strong>Treatments:</strong> Teeth whitening, Teeth cleaning
              </div>
            </div>
            <div class="col-md-6">
              <div class="ba-image-container">
                <div class="ba-frame">
                  <img src="images/story/stories01.jpg" alt="Before Treatment">
                  <span class="ba-label ba-label-before">Before</span>
                </div>
                <div class="ba-frame">
                  <img src="images/story/stories1.jpg" alt="After Treatment">
                  <span class="ba-label ba-label-after">After</span>
                </div>
              </div>
              <p class="text-muted small mt-2 mb-0" style="font-size: 12px;">
                Tooth whitening can be a very effective way of lightening the natural colour of your teeth without removing any of the tooth surface.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- STORY 2 -->
      <div class="col-lg-6">
        <div class="story-card h-100">
          <div class="row g-3">
            <div class="col-md-6 d-flex flex-column">
              <div class="quote-icon-bubble">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="small text-muted flex-grow-1" style="line-height: 1.6;">
                "I just recently had my braces taken off and to my amazement, underneath was the most beautiful smile I ever could have dreamed possible. I just wanted to thank you for giving me so much to smile about!"
              </p>
              <div class="small border-top pt-2">
                <strong>Treatments:</strong> Orthodontic treatment, Bite correction
              </div>
            </div>
            <div class="col-md-6">
              <div class="ba-image-container">
                <div class="ba-frame">
                  <img src="images/story/stories02.jpg" alt="Before Treatment">
                  <span class="ba-label ba-label-before">Before</span>
                </div>
                <div class="ba-frame">
                  <img src="images/story/stories2.jpg" alt="After Treatment">
                  <span class="ba-label ba-label-after">After</span>
                </div>
              </div>
              <p class="text-muted small mt-2 mb-0" style="font-size: 12px;">
                Orthodontics can give you the straight teeth and proper bite that will help you chew better, smile more often, and keep your teeth longer.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- STORY 3 -->
      <div class="col-lg-6">
        <div class="story-card h-100">
          <div class="row g-3">
            <div class="col-md-6 d-flex flex-column">
              <div class="quote-icon-bubble">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="small text-muted flex-grow-1" style="line-height: 1.6;">
                "My visits to Dental clinic is always more than just a pleasant experience! I had my cleaning done and they did an absolutely impeccable job! Removed the most stubborn stains without causing any discomfort!"
              </p>
              <div class="small border-top pt-2">
                <strong>Treatments:</strong> Teeth whitening, Scale and polish
              </div>
            </div>
            <div class="col-md-6">
              <div class="ba-image-container">
                <div class="ba-frame">
                  <img src="images/story/stories03.jpg" alt="Before Treatment">
                  <span class="ba-label ba-label-before">Before</span>
                </div>
                <div class="ba-frame">
                  <img src="images/story/stories3.jpg" alt="After Treatment">
                  <span class="ba-label ba-label-after">After</span>
                </div>
              </div>
              <p class="text-muted small mt-2 mb-0" style="font-size: 12px;">
                Tooth whitening can be a very effective way of lightening the natural colour of your teeth without removing any of the tooth surface.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- STORY 4 -->
      <div class="col-lg-6">
        <div class="story-card h-100">
          <div class="row g-3">
            <div class="col-md-6 d-flex flex-column">
              <div class="quote-icon-bubble">
                <i class="fa-solid fa-quote-left"></i>
              </div>
              <div class="star-rating">
                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
              </div>
              <p class="small text-muted flex-grow-1" style="line-height: 1.6;">
                "Underneath was the most beautiful smile I ever could have dreamed possible. I just wanted to thank you for giving me so much to smile about! Highly professional team."
              </p>
              <div class="small border-top pt-2">
                <strong>Treatments:</strong> Orthodontics, Smile alignment
              </div>
            </div>
            <div class="col-md-6">
              <div class="ba-image-container">
                <div class="ba-frame">
                  <img src="images/story/stories04.jpg" alt="Before Treatment">
                  <span class="ba-label ba-label-before">Before</span>
                </div>
                <div class="ba-frame">
                  <img src="images/story/stories4.jpg" alt="After Treatment">
                  <span class="ba-label ba-label-after">After</span>
                </div>
              </div>
              <p class="text-muted small mt-2 mb-0" style="font-size: 12px;">
                Orthodontics can give you the straight teeth and proper bite that will help you chew better and smile more often.
              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     TESTIMONIALS
============================== -->
<section class="section-padding bg-light" id="testimonials">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-comments me-1"></i> Patient Feedback</span>
      <h2 class="section-title">TESTIMONIALS</h2>
      <p class="section-subtitle">
        Many of our patients are our friends now, and they recommend our Dental clinic to their friends and come with their children and senior parents to us. We are very proud that you entrust the health of your relatives to us!
      </p>
    </div>

    <div class="row g-4">
      
      <!-- REVIEW 1 -->
      <div class="col-lg-3 col-md-6">
        <div class="testimonial-card">
          <div class="star-rating">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">
            "This was my first dental treatment in many years and Dr. Callahan made me feel relaxed and calm. It was completely painless and issue free. I thoroughly recommend both Dr. Callahan and Dental clinic. Excellent caring staff!"
          </p>
          <div class="testimonial-author">
            <img src="img/per.jpg" alt="Patient" class="testimonial-avatar">
            <div>
              <div class="fw-bold small text-dark">Verified Patient</div>
              <div class="text-primary small" style="font-size: 12px;">Comprehensive Cleaning</div>
            </div>
          </div>
        </div>
      </div>

      <!-- REVIEW 2 -->
      <div class="col-lg-3 col-md-6">
        <div class="testimonial-card">
          <div class="star-rating">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">
            "I would like to say a big thank you to all the team at Dental Clinic, from the charming and efficient reception staff to all the dental team. A truly first class outfit that are the epitome of professionalism. Satisfied with the service."
          </p>
          <div class="testimonial-author">
            <img src="img/per.jpg" alt="Patient" class="testimonial-avatar">
            <div>
              <div class="fw-bold small text-dark">Verified Patient</div>
              <div class="text-primary small" style="font-size: 12px;">General Dentistry</div>
            </div>
          </div>
        </div>
      </div>

      <!-- REVIEW 3 -->
      <div class="col-lg-3 col-md-6">
        <div class="testimonial-card">
          <div class="star-rating">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">
            "I'm new to Dental Clinic and I have got to say that I am rather impressed with their team's professionalism. I booked online through their website, and I immediately got a call from their receptionist, confirming my appointment."
          </p>
          <div class="testimonial-author">
            <img src="img/per.jpg" alt="Patient" class="testimonial-avatar">
            <div>
              <div class="fw-bold small text-dark">Verified Patient</div>
              <div class="text-primary small" style="font-size: 12px;">Teeth Whitening</div>
            </div>
          </div>
        </div>
      </div>

      <!-- REVIEW 4 -->
      <div class="col-lg-3 col-md-6">
        <div class="testimonial-card">
          <div class="star-rating">
            <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
          </div>
          <p class="testimonial-text">
            "Hands down the best dental clinic I've been to. You'll pay a little more than other clinics but you'll get it right the first time. From the reception down to the dentists; simply awesome! Great customer service. Very satisfied."
          </p>
          <div class="testimonial-author">
            <img src="img/per.jpg" alt="Patient" class="testimonial-avatar">
            <div>
              <div class="fw-bold small text-dark">Verified Patient</div>
              <div class="text-primary small" style="font-size: 12px;">Crown, Root Canal</div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     TOP TIPS FROM DOCTORS & FAQ
============================== -->
<section class="section-padding bg-white" id="tipsfaq">
  <div class="container">
    <div class="row g-5">
      
      <!-- TOP TIPS FROM DOCTORS -->
      <div class="col-lg-7">
        <span class="section-tag"><i class="fa-solid fa-lightbulb me-1"></i> Doctor Advice</span>
        <h2 class="section-title">TOP TIPS FROM DOCTORS</h2>
        
        <ul class="nav nav-pills nav-pills-dental mb-4" id="tips-tab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-tips1-tab" data-bs-toggle="pill" data-bs-target="#pills-tips1" type="button" role="tab" aria-selected="true">Teeth whitening</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-tips2-tab" data-bs-toggle="pill" data-bs-target="#pills-tips2" type="button" role="tab" aria-selected="false">Oral exams</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-tips3-tab" data-bs-toggle="pill" data-bs-target="#pills-tips3" type="button" role="tab" aria-selected="false">Fillings & bridges</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-tips4-tab" data-bs-toggle="pill" data-bs-target="#pills-tips4" type="button" role="tab" aria-selected="false">Root canals</button>
          </li>
        </ul>

        <div class="tab-content bg-light p-4 rounded-4 border" id="tips-tabContent">
          
          <div class="tab-pane fade show active" id="pills-tips1" role="tabpanel" aria-labelledby="pills-tips1-tab">
            <p class="text-muted">
              Tooth whitening (termed tooth bleaching when utilizing bleach), is either restoration of natural tooth shade or whitening beyond natural tooth shade, depending on the definition used.
            </p>
            <p class="text-muted">
              Restoration of the underlying, natural tooth shade is possible by simply removing surface (extrinsic) stains (e.g. from tea, coffee, red wine and tobacco) and calculus (tartar). This is achieved by having the teeth cleaned by a dental professional (commonly termed "scale and polish").
            </p>
            <div class="d-flex align-items-center gap-3 pt-3 border-top">
              <img src="img/per.jpg" alt="Doctor" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
              <div>
                <div class="fw-bold small text-dark">Senior Dental Surgeon</div>
                <div class="text-muted small">Specialist in Oral Hygiene & Whitening</div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips2" role="tabpanel" aria-labelledby="pills-tips2-tab">
            <p class="text-muted">
              Routine oral examinations allow our dentists to detect early signs of decay, gum disease, and tooth damage before they become painful or expensive to treat. Regular 6-month checkups safeguard your overall wellness.
            </p>
            <div class="d-flex align-items-center gap-3 pt-3 border-top">
              <img src="img/per.jpg" alt="Doctor" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
              <div>
                <div class="fw-bold small text-dark">Senior Dental Surgeon</div>
                <div class="text-muted small">Specialist in Preventive Care</div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips3" role="tabpanel" aria-labelledby="pills-tips3-tab">
            <p class="text-muted">
              Tooth-colored composite fillings bond directly to natural tooth structure and restore aesthetics seamlessly. For missing teeth, dental bridges or implants maintain tooth alignment and prevent jaw bone resorption.
            </p>
            <div class="d-flex align-items-center gap-3 pt-3 border-top">
              <img src="img/per.jpg" alt="Doctor" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
              <div>
                <div class="fw-bold small text-dark">Senior Dental Surgeon</div>
                <div class="text-muted small">Restorative Dentistry Specialist</div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="pills-tips4" role="tabpanel" aria-labelledby="pills-tips4-tab">
            <p class="text-muted">
              Root canal treatment saves severely infected or broken teeth that would otherwise need extraction. Modern rotary instruments and localized anesthetics make the procedure virtually pain-free.
            </p>
            <div class="d-flex align-items-center gap-3 pt-3 border-top">
              <img src="img/per.jpg" alt="Doctor" class="rounded-circle" style="width: 48px; height: 48px; object-fit: cover;">
              <div>
                <div class="fw-bold small text-dark">Senior Dental Surgeon</div>
                <div class="text-muted small">Endodontic Specialist</div>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- FAQ ACCORDION -->
      <div class="col-lg-5">
        <span class="section-tag"><i class="fa-solid fa-circle-question me-1"></i> Got Questions?</span>
        <h2 class="section-title">FAQ</h2>

        <div class="accordion accordion-dental" id="faqAccordion">
          
          <!-- FAQ 1 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fa-solid fa-heart-pulse text-primary me-2"></i> Surgical implant placements
              </button>
            </h3>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Dental implant placement is no longer performed only by oral surgeons and periodontists; general dentists are also increasingly providing difficult surgical implant services. Dental implants may be used to replace single teeth, replace multiple teeth, or provide abutments for complete dentures or partials. This topic focuses on the placement of single-tooth dental implants.
              </div>
            </div>
          </div>

          <!-- FAQ 2 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa-solid fa-sparkles text-primary me-2"></i> Teeth whitening
              </button>
            </h3>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Dental whitening is a straightforward process. Whitening products contain one of two tooth whiteners (hydrogen peroxide or carbamide peroxide) that break down stains into smaller pieces, giving your teeth a visibly brighter, sparkling appearance safely.
              </div>
            </div>
          </div>

          <!-- FAQ 3 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fa-solid fa-pump-medical text-primary me-2"></i> Teeth cleaning
              </button>
            </h3>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Teeth cleaning is part of oral hygiene and involves the removal of dental plaque from teeth with the intention of preventing cavities and gingivitis. Professional ultrasonic scaling removes hardened tartar that routine brushing cannot reach.
              </div>
            </div>
          </div>

          <!-- FAQ 4 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFour">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <i class="fa-solid fa-x-ray text-primary me-2"></i> X-rays
              </button>
            </h3>
            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Digital dental X-rays provide high-definition imaging of root health, bone density, and hidden interdental cavities with minimal radiation exposure, ensuring an exact diagnosis before any dental procedure.
              </div>
            </div>
          </div>

          <!-- FAQ 5 -->
          <div class="accordion-item">
            <h3 class="accordion-header" id="headingFive">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <i class="fa-solid fa-crown text-primary me-2"></i> Crowns
              </button>
            </h3>
            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
              <div class="accordion-body">
                Dental crowns provide protective caps placed over damaged, heavily filled, or root-canal treated teeth. They restore normal masticatory function, structural strength, and natural smile appearance.
              </div>
            </div>
          </div>

        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     CALL TO ACTION BANNER
============================== -->
<section class="section-padding-sm text-white" style="background: linear-gradient(135deg, var(--primary-deep) 0%, var(--primary-dark) 100%);">
  <div class="container">
    <div class="row align-items-center justify-content-between g-4">
      <div class="col-lg-8">
        <h3 class="fw-bold text-white mb-2 fs-2">Ready to Smile with Confidence?</h3>
        <p class="text-light-subtle mb-0 fs-6">
          Schedule your dental examination today at Sampreeth Dental Clinic, Patamata, Vijayawada. Same-day appointments available for emergencies!
        </p>
      </div>
      <div class="col-lg-4 text-lg-end">
        <div class="d-flex flex-wrap gap-2 justify-content-lg-end">
          <a href="tel:+917995605888" class="btn btn-dental-white">
            <i class="fa-solid fa-phone me-1"></i> +91 79956 05888
          </a>
          <button type="button" class="btn btn-dental-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fa-solid fa-calendar-check me-1"></i> Book Appointment
          </button>
        </div>
      </div>
    </div>
  </div>
</section>

<?php 
	include('footer.php');
?>
