<?php
  // Determine current active page for navigation highlight
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Specialized dental care to straighten crooked teeth in children and adults. Treat diseases of the gums and the placement of dental implants.">
<meta name="keywords" content="Sampreeth Dental Clinic, Vijayawada Dental Clinic, Top 10 Dental Doctors in Vijayawada, Most Rated Dental Doctor in vijayawada">
<meta name="author" content="Sampreeth Dental Clinic">

<!-- SITE TITLE -->
<title>Sampreeth Dental Clinic | Vijayawada, Andhra Pradesh</title>

<!-- FAVICON -->
<link rel="shortcut icon" href="images/favicon.ico">

<!-- GOOGLE FONTS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<!-- FONT AWESOME 6 & BOOTSTRAP ICONS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<!-- BOOTSTRAP 5.3 CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- MODERN DENTAL CLINIC STYLESHEET -->
<link rel="stylesheet" type="text/css" href="css/modern-dental.css">

<!-- ==========================================================================
     NAVIGATION BAR MOUSEOVER & HOVER EFFECTS
     ========================================================================== -->
<style>
/* 1. Main Nav Link Mouseover Effects */
.dental-navbar .navbar-nav .nav-link {
  position: relative;
  font-weight: 600;
  font-size: 14px;
  letter-spacing: 0.02em;
  color: #0f2744 !important;
  padding: 10px 18px !important;
  border-radius: 8px;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  overflow: visible;
}

/* Animated sliding underline indicator */
.dental-navbar .navbar-nav .nav-link::after {
  content: '';
  position: absolute;
  bottom: 2px;
  left: 18px;
  right: 18px;
  height: 2.5px;
  background: linear-gradient(90deg, #0284c7 0%, #0d9488 100%);
  border-radius: 4px;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), opacity 0.3s ease;
  opacity: 0;
}

/* Nav Link Hover State */
.dental-navbar .navbar-nav .nav-link:hover {
  color: #0284c7 !important;
  background-color: rgba(2, 132, 199, 0.07);
  transform: translateY(-2px);
}

.dental-navbar .navbar-nav .nav-link:hover::after,
.dental-navbar .navbar-nav .nav-link.active::after {
  transform: scaleX(1);
  opacity: 1;
}

.dental-navbar .navbar-nav .nav-link.active {
  color: #0284c7 !important;
  background-color: rgba(2, 132, 199, 0.08);
}

/* 2. Desktop Dropdown Menu on Mouseover (Hover) */
@media (min-width: 992px) {
  .dental-navbar .navbar-nav .nav-item.dropdown {
    position: relative;
  }

  .dental-navbar .navbar-nav .nav-item.dropdown .dropdown-menu {
    display: block;
    opacity: 0;
    visibility: hidden;
    transform: translateY(14px);
    transition: opacity 0.25s cubic-bezier(0.16, 1, 0.3, 1), transform 0.25s cubic-bezier(0.16, 1, 0.3, 1), visibility 0.25s;
    pointer-events: none;
    margin-top: 0;
    border: 1px solid rgba(2, 132, 199, 0.15);
    box-shadow: 0 14px 38px -4px rgba(15, 39, 68, 0.16);
    border-radius: 12px;
    padding: 10px;
    background: #ffffff;
    min-width: 280px;
  }

  /* Show dropdown smoothly on mouseover */
  .dental-navbar .navbar-nav .nav-item.dropdown:hover .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
    pointer-events: auto;
  }

  /* Rotate dropdown arrow indicator on hover */
  .dental-navbar .navbar-nav .nav-item.dropdown:hover .dropdown-toggle::after {
    transform: rotate(180deg);
  }
}

.dental-navbar .dropdown-toggle::after {
  transition: transform 0.3s ease;
  vertical-align: middle;
}

/* 3. Dropdown Item Mouseover Effects */
.dental-navbar .dropdown-item {
  font-size: 13.5px;
  font-weight: 500;
  padding: 9px 14px;
  border-radius: 8px;
  color: #1e293b;
  border-left: 3px solid transparent;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  display: flex;
  align-items: center;
}

.dental-navbar .dropdown-item i {
  transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), color 0.25s ease;
}

/* Dropdown item hover */
.dental-navbar .dropdown-item:hover {
  background: linear-gradient(90deg, rgba(2, 132, 199, 0.1) 0%, rgba(2, 132, 199, 0.02) 100%);
  color: #0284c7 !important;
  border-left: 3px solid #0284c7;
  transform: translateX(6px);
  padding-left: 16px;
}

.dental-navbar .dropdown-item:hover i {
  transform: scale(1.25) rotate(-6deg);
  color: #0284c7 !important;
}

/* 4. Brand Logo Mouseover Effect */
.dental-navbar .navbar-brand {
  transition: transform 0.3s ease;
}

.dental-navbar .navbar-brand:hover {
  transform: scale(1.03);
}

.dental-navbar .navbar-brand-logo {
  transition: filter 0.3s ease, transform 0.3s ease;
}

.dental-navbar .navbar-brand:hover .navbar-brand-logo {
  filter: drop-shadow(0 4px 12px rgba(2, 132, 199, 0.25));
}

/* 5. Header Phone Widget Styling & Mouseover Effect */
.header-cta-phone {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  padding: 6px 14px 6px 8px;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 50px;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
}

.header-cta-phone:hover {
  background: #ffffff;
  border-color: #0284c7;
  box-shadow: 0 4px 16px rgba(2, 132, 199, 0.16);
  transform: translateY(-2px);
}

.header-cta-phone .phone-icon {
  width: 38px;
  height: 38px;
  border-radius: 50%;
  background: rgba(2, 132, 199, 0.12);
  color: #0284c7;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 15px;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
}

.header-cta-phone:hover .phone-icon {
  background: #0284c7;
  color: #ffffff !important;
  transform: scale(1.1) rotate(-10deg);
  box-shadow: 0 4px 12px rgba(2, 132, 199, 0.35);
}

.header-cta-phone .phone-label {
  font-size: 10.5px;
  text-transform: uppercase;
  color: #64748b;
  font-weight: 700;
  letter-spacing: 0.05em;
  line-height: 1.1;
  margin-bottom: 2px;
}

.header-cta-phone .phone-number {
  font-family: 'Outfit', sans-serif;
  font-size: 14.5px;
  font-weight: 800;
  color: #0f2744;
  line-height: 1.2;
  letter-spacing: 0.01em;
  transition: color 0.25s ease;
}

.header-cta-phone:hover .phone-number {
  color: #0284c7 !important;
}

/* 6. "Book Appointment" Header CTA Button Styling & Mouseover Effect */
.dental-navbar .btn-dental-primary {
  background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
  color: #ffffff !important;
  font-weight: 700;
  font-size: 13.5px;
  letter-spacing: 0.04em;
  padding: 10px 22px;
  border-radius: 50px;
  border: none;
  box-shadow: 0 4px 14px rgba(2, 132, 199, 0.32);
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  white-space: nowrap;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  text-transform: uppercase;
  height: 44px;
}

.dental-navbar .btn-dental-primary:hover {
  background: linear-gradient(135deg, #0369a1 0%, #075985 100%);
  box-shadow: 0 6px 22px rgba(2, 132, 199, 0.48);
  transform: translateY(-2px);
}

.dental-navbar .btn-dental-primary:active {
  transform: translateY(0);
  box-shadow: 0 2px 8px rgba(2, 132, 199, 0.3);
}

.dental-navbar .btn-dental-primary i {
  font-size: 14px;
  transition: transform 0.3s ease;
}

.dental-navbar .btn-dental-primary:hover i {
  transform: scale(1.2) rotate(-8deg);
}

/* Mobile drawer phone card */
.header-cta-phone-mobile {
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 10px 14px;
  background: #f8fafc;
  border: 1px solid #e2e8f0;
  border-radius: 12px;
  text-decoration: none;
}
.header-cta-phone-mobile .phone-icon-mobile {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  background: rgba(2, 132, 199, 0.12);
  color: #0284c7;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 16px;
}
.header-cta-phone-mobile .phone-label-mobile {
  font-size: 11px;
  text-transform: uppercase;
  color: #64748b;
  font-weight: 700;
}
.header-cta-phone-mobile .phone-number-mobile {
  font-family: 'Outfit', sans-serif;
  font-size: 15px;
  font-weight: 800;
  color: #0f2744;
}

/* 7. Mobile Toggle Button Mouseover Effect */
.navbar-toggler {
  transition: transform 0.25s ease, background-color 0.25s ease;
  border-radius: 8px;
}

.navbar-toggler:hover {
  transform: scale(1.08);
  background-color: rgba(2, 132, 199, 0.08);
}
</style>
</head>

<body>

<!-- =========================
     TOP INFO BAR
============================== -->
<div class="dental-topbar d-none d-lg-block">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-8">
        <div class="d-flex align-items-center gap-4 flex-wrap">
          <span class="dental-topbar-item">
            <i class="fa-solid fa-location-dot"></i>
            <span>#57-6-2, Venkata Sai Enclave, Opp: Sri Chaitanya High School, Patamata, Vijayawada</span>
			<i class="fa-solid fa-clock"></i>
			<span>Mon-Sat: 10AM - 1PM & 4:30PM - 9PM | Sun: 10AM - 1PM</span>
          </span>
          <!--<span class="dental-topbar-item">
            <i class="fa-solid fa-clock"></i>
            <span>Mon-Sat: 10AM - 1PM & 4:30PM - 9PM | Sun: 10AM - 1PM</span>
          </span> -->
        </div>
      </div>
      <div class="col-lg-4 text-end">
        <div class="d-inline-flex align-items-center gap-3">
          <a href="mailto:drnadellaneelima@gmail.com" class="dental-topbar-item">
            <i class="fa-solid fa-envelope"></i>
            <span>drnadellaneelima@gmail.com</span>
          </a>
          <div class="topbar-social">
            <a href="#" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" title="Google"><i class="fa-brands fa-google"></i></a>
            <a href="#" title="Twitter"><i class="fa-brands fa-twitter"></i></a>
            <a href="#" title="Skype"><i class="fa-brands fa-skype"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- =========================
     END TOP INFO BAR
============================== -->

<!-- =========================
     MAIN NAVBAR
============================== -->
<nav class="navbar navbar-expand-lg sticky-top dental-navbar">
  <div class="container">
    <!-- LOGO -->
    <a class="navbar-brand d-flex align-items-center" href="index.php">
      <img src="images/sampreeth-logo.png" alt="Sampreeth Dental Clinic" class="navbar-brand-logo">
    </a>

    <!-- MOBILE TOGGLE BUTTON -->
    <button class="navbar-toggler border-0 p-2 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
      <i class="fa-solid fa-bars-staggered fs-3 text-primary"></i>
    </button>

    <!-- NAVIGATION MENU -->
    <div class="collapse navbar-collapse" id="navbarMain">
      <ul class="navbar-nav ms-auto align-items-lg-center">
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'index.php' || $currentPage == '') ? 'active' : ''; ?>" href="index.php">
            <i class="fa-solid fa-house d-lg-none me-2"></i>HOME
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'about.php') ? 'active' : ''; ?>" href="about.php">
            <i class="fa-solid fa-circle-info d-lg-none me-2"></i>ABOUT US
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo ($currentPage == 'services.php') ? 'active' : ''; ?>" href="services.php" id="treatmentsDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-tooth d-lg-none me-2"></i>TREATMENTS
          </a>
          <ul class="dropdown-menu shadow-sm" aria-labelledby="treatmentsDropdown">
            <li><a class="dropdown-item" href="services.php#whitening"><i class="fa-solid fa-sparkles text-primary me-2"></i>Teeth Whitening</a></li>
            <li><a class="dropdown-item" href="services.php#extraction"><i class="fa-solid fa-tooth text-primary me-2"></i>Simple Extraction of Teeth</a></li>
            <li><a class="dropdown-item" href="services.php#impacted"><i class="fa-solid fa-syringe text-primary me-2"></i>Surgical Removal of Impacted Teeth</a></li>
            <li><a class="dropdown-item" href="services.php#cysts"><i class="fa-solid fa-shield-virus text-primary me-2"></i>Removal of Cysts & Tumours</a></li>
            <li><a class="dropdown-item" href="services.php#fracture"><i class="fa-solid fa-bone text-primary me-2"></i>Fracture Jaw Bones</a></li>
            <li><a class="dropdown-item" href="services.php#cosmetic"><i class="fa-solid fa-wand-magic-sparkles text-primary me-2"></i>Cosmetic Procedures</a></li>
            <li><a class="dropdown-item" href="services.php#implants"><i class="fa-solid fa-screwdriver text-primary me-2"></i>Dental Implants</a></li>
            <li><a class="dropdown-item" href="services.php#dentures"><i class="fa-solid fa-teeth-open text-primary me-2"></i>Removable Dentures & Fixed Teeth</a></li>
            <li><a class="dropdown-item" href="services.php#rootcanal"><i class="fa-solid fa-heart-pulse text-primary me-2"></i>Root Canal Treatments</a></li>
            <li><a class="dropdown-item" href="services.php#cleaning"><i class="fa-solid fa-pump-medical text-primary me-2"></i>Cleaning & Flap Surgeries</a></li>
            <li><a class="dropdown-item" href="services.php#braces"><i class="fa-solid fa-teeth text-primary me-2"></i>Correction Using Braces</a></li>
            <li><a class="dropdown-item" href="services.php#child"><i class="fa-solid fa-child-reaching text-primary me-2"></i>Treatment for Child Teeth</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-primary fw-bold" href="services.php"><i class="fa-solid fa-arrow-right me-2"></i>View All 12 Treatments</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'gallery.php') ? 'active' : ''; ?>" href="gallery.php">
            <i class="fa-solid fa-images d-lg-none me-2"></i>GALLERY
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($currentPage == 'contact.php') ? 'active' : ''; ?>" href="contact.php">
            <i class="fa-solid fa-phone d-lg-none me-2"></i>CONTACT US
          </a>
        </li>
      </ul>

      <!-- HEADER CALL & APPOINTMENT CTA (DESKTOP) -->
      <div class="d-none d-lg-flex align-items-center gap-2 gap-xl-3 ms-lg-3">
        <a href="tel:+917995605888" class="header-cta-phone">
          <div class="phone-icon">
            <i class="fa-solid fa-phone-volume"></i>
          </div>
          <div>
            <div class="phone-label">Call For Appointment</div>
            <div class="phone-number">+91 79956 05888</div>
          </div>
        </a>
        <button type="button" class="btn btn-dental-primary" data-bs-toggle="modal" data-bs-target="#appointmentModal">
          <i class="fa-solid fa-calendar-check me-2"></i>
          <span>BOOK APPOINTMENT</span>
        </button>
      </div>

      <!-- HEADER CALL & APPOINTMENT CTA (MOBILE MENU) -->
      <div class="d-lg-none pt-3 mt-3 border-top">
        <div class="d-flex flex-column gap-2">
          <a href="tel:+917995605888" class="header-cta-phone-mobile">
            <div class="phone-icon-mobile">
              <i class="fa-solid fa-phone-volume"></i>
            </div>
            <div>
              <div class="phone-label-mobile">Call For Appointment</div>
              <div class="phone-number-mobile">+91 79956 05888</div>
            </div>
          </a>
          <button type="button" class="btn btn-dental-primary w-100" data-bs-toggle="modal" data-bs-target="#appointmentModal">
            <i class="fa-solid fa-calendar-check me-2"></i>
            <span>BOOK APPOINTMENT</span>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>
<!-- =========================
     END MAIN NAVBAR
============================== -->
