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
          <span>Treatments</span>
        </div>
        <h1>Our Dental Treatments & Services</h1>
        <p>Comprehensive, gentle, and modern dental solutions provided by qualified dental surgeons in Vijayawada.</p>
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
     SERVICES / TREATMENTS GRID
============================== -->
<section class="section-padding bg-light">
  <div class="container">
    <div class="section-header">
      <span class="section-tag"><i class="fa-solid fa-stethoscope me-1"></i> Clinical Specializations</span>
      <h2 class="section-title">ALL DENTAL TREATMENTS</h2>
      <p class="section-subtitle">
        From routine preventive care and teeth whitening to advanced maxillofacial surgery and full-mouth rehabilitation.
      </p>
    </div>

    <!-- TREATMENTS GRID -->
    <div class="row g-4">
      
      <!-- 1. TEETH WHITENING -->
      <div class="col-lg-4 col-md-6" id="whitening">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image 1.jpg" alt="Teeth Whitening">
            <span class="service-tag-badge"><i class="fa-solid fa-sparkles me-1"></i> Teeth Whitening</span>
          </div>
          <div class="service-detail-body">
            <h3>Teeth Whitening</h3>
            <p>
              Your teeth may become discolored due to various foods, drinks, tobacco products, aging, trauma, or certain medications. Dental whitening (bleaching) is one of the primary treatments used to address these discolorations.Dental whitening is a straightforward process. Whitening products contain one of two tooth whiteners (hydrogen peroxide or carbamide peroxide). These bleaching agents break down stains into smaller pieces, making the colors less concentrated and giving your teeth a brighter appearance.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Aesthetic Care</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 2. SIMPLE EXTRACTION OF TEETH -->
      <div class="col-lg-4 col-md-6" id="extraction">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image 2.jpg" alt="Simple Extraction of Teeth">
            <span class="service-tag-badge"><i class="fa-solid fa-tooth me-1"></i> Tooth Extraction</span>
          </div>
          <div class="service-detail-body">
            <h3>Simple Extraction of Teeth</h3>
            <p>
              A dental extraction (also referred to as tooth extraction, exodontia, exodontics, or informally, tooth pulling) is the removal of teeth from the dental alveolus (socket) in the alveolar bone. Extractions are performed for a wide variety of reasons, but most commonly to remove teeth which have become unrestorable through tooth decay, periodontal disease, or dental trauma, especially when they are associated with toothache. Sometimes impacted wisdom teeth (wisdom teeth that are stuck and unable to grow normally into the mouth) cause recurrent infections of the gum (pericoronitis), and may be removed when other conservative treatments have failed (cleaning, antibiotics and operculectomy).
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Pain Relief</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 3. SURGICAL REMOVAL OF IMPACTED TEETH -->
      <div class="col-lg-4 col-md-6" id="impacted">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image3.jpg" alt="Surgical removal of Impacted teeth">
            <span class="service-tag-badge"><i class="fa-solid fa-syringe me-1"></i> Oral Surgery</span>
          </div>
          <div class="service-detail-body">
            <h3>Surgical Removal of Impacted Teeth</h3>
            <p>
              Impacted wisdom teeth is a condition where the third molars (wisdom teeth) are prevented from erupting into the mouth.[1] This can be caused by a physical barrier, such as other teeth, or when the tooth is angled away from a vertical position.[2] Completely unerupted wisdom teeth usually result in no symptoms, although they can sometimes develop cysts or neoplasms. Partially erupted wisdom teeth or wisdom teeth that are not erupted but are exposed to oral bacteria through deep periodontal pocket, can develop cavities or pericoronitis.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Specialist Surgery</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 4. REMOVAL OF CYSTS & TUMOURS -->
      <div class="col-lg-4 col-md-6" id="cysts">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image 4.jpg" alt="Removal of Cysts and Tumours">
            <span class="service-tag-badge"><i class="fa-solid fa-shield-virus me-1"></i> Maxillofacial Pathology</span>
          </div>
          <div class="service-detail-body">
            <h3>Removal of Cysts & Tumours</h3>
            <p>
              A dentigerous cyst, also known as a follicular cyst, is an epithelial-lined developmental cyst formed by accumulation of fluid between the reduced enamel epithelium and the crown of an unerupted tooth.[2][3][4] It is formed when there is an alteration in the reduced enamel epithelium and encloses the crown of an unerupted tooth at the cemento-enamel junction. Fluid is accumulated between reduced enamel epithelium and the crown of an unerupted tooth.Dentigerous cysts are the second[5] most prevalent type of odontogenic cysts after radicular cyst. Seventy percent of the cases occur in the mandible. Dentigerous cysts are usually painless. The patient usually comes with a concern of delayed tooth eruption or facial swelling.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Expert Diagnosis</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 5. FRACTURE JAW BONES -->
      <div class="col-lg-4 col-md-6" id="fracture">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image5.jpg" alt="Fracture jaw Bones">
            <span class="service-tag-badge"><i class="fa-solid fa-bone me-1"></i> Trauma Surgery</span>
          </div>
          <div class="service-detail-body">
            <h3>Fracture Jaw Bones</h3>
            <p>
              Mandibular fracture, also known as fracture of the jaw, is a break through the mandibular bone. In about 60% of cases the break occurs in two places.[1] It may result in a decreased ability to fully open the mouth.[1] Often the teeth will not feel properly aligned or there may be bleeding of the gums.[1] Mandibular fractures occur most commonly among males in their 30s.[1]Mandibular fractures are typically the result of trauma.[1] This can include a fall onto the chin or a hit from the side.[1] Rarely they may be due to osteonecrosis or tumors in the bone.[1] The most common area of fracture is at the condyle (36%), body (21%), angle (20%) and symphysis (14%).[1] Rarely the fracture may occur at the ramus (3%) or coronoid process (2%). While a diagnosis can occasionally be made with plain X-ray, modern CT scans are more accurate.[1]
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Maxillofacial Trauma</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 6. COSMETIC PROCEDURES -->
      <div class="col-lg-4 col-md-6" id="cosmetic">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image6.jpg" alt="Cosmetic Procedures">
            <span class="service-tag-badge"><i class="fa-solid fa-wand-magic-sparkles me-1"></i> Cosmetic Care</span>
          </div>
          <div class="service-detail-body">
            <h3>Cosmetic Procedures</h3>
            <p>
              Cosmetic dentistry is generally used to refer to any dental work that improves the appearance (though not necessarily the functionality) of teeth, gums and/or bite. It primarily focuses on improvement in dental aesthetics in color, position, shape, size, alignment and overall smile appearance.[1] Many dentists refer to themselves as "cosmetic dentists" regardless of their specific education, specialty, training, and experience in this field. This has been considered unethical with a predominant objective of marketing to patients.[2] The American Dental Association does not recognize cosmetic dentistry as a formal specialty area of dentistry.[3]
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Smile Makeover</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 7. IMPLANTS -->
      <div class="col-lg-4 col-md-6" id="implants">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image7.jpg" alt="Dental Implants">
            <span class="service-tag-badge"><i class="fa-solid fa-screwdriver me-1"></i> Implantology</span>
          </div>
          <div class="service-detail-body">
            <h3>Dental Implants</h3>
            <p>
              A dental implant is a prosthesis that interfaces with the bone of the jaw or skull to support a dental prosthesis such as a crown, bridge, denture, or facial prosthesis or to act as an orthodontic anchor. The basis for modern dental implants is a biological process called osseointegration, in which materials such as titanium or zirconia form an intimate bond to the bone.The implant fixture is first placed so that it is likely to osseointegrate, then a dental prosthetic is added. A variable amount of healing time is required for osseointegration before either the dental prosthetic is attached to the implant or an abutment is placed which will hold a dental crown.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Permanent Replacement</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 8. REMOVABLE DENTURES AND FIXED TEETH -->
      <div class="col-lg-4 col-md-6" id="dentures">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image8.jpg" alt="Removable Dentures and Fixed Teeth">
            <span class="service-tag-badge"><i class="fa-solid fa-teeth-open me-1"></i> Prosthodontics</span>
          </div>
          <div class="service-detail-body">
            <h3>Removable Dentures and Fixed Teeth</h3>
            <p>
              Dentures (also known as false teeth) are prosthetic devices constructed to replace missing teeth, supported by the surrounding soft and hard tissues of the oral cavity. Conventional dentures are removable (removable partial denture or complete denture). However, there are many denture designs, some of which rely on bonding or clasping onto teeth or dental implants (fixed prosthodontics). There are two main categories of dentures, the distinction being whether they fit onto the mandibular arch or on the maxillary arch.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Full Function</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 9. ROOT CANAL TREATMENT -->
      <div class="col-lg-4 col-md-6" id="rootcanal">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image9.jpg" alt="Root Canal Treatment">
            <span class="service-tag-badge"><i class="fa-solid fa-heart-pulse me-1"></i> Endodontics</span>
          </div>
          <div class="service-detail-body">
            <h3>Root Canal Treatment</h3>
            <p>
              Root canal treatment (also known as endodontic therapy, endodontic treatment, root canal therapy) is a treatment sequence for the infected pulp of a tooth which is intended to result in the elimination of infection and the protection of the decontaminated tooth from future microbial invasion.Root canals, and their associated pulp chamber, are the physical hollows within a tooth that are naturally inhabited by blood vessels.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Tooth Preservation</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 10. CLEANING AND FLAP SURGERY -->
      <div class="col-lg-4 col-md-6" id="cleaning">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image10.jpg" alt="Cleaning and Flap Surgery">
            <span class="service-tag-badge"><i class="fa-solid fa-pump-medical me-1"></i> Periodontics</span>
          </div>
          <div class="service-detail-body">
            <h3>Cleaning and Flap Surgery</h3>
            <p>
              Flap surgery is sometimes performed to remove tartar deposits in deep pockets make it easier for you or your dental professional to keep the area clean. This common surgery involves lifting back the gums and removing the tartar.
              Teeth cleaning is part of oral hygiene and involves the removal of dental plaque from teeth with the intention of preventing cavities gingivitis. People routinely clean their own teeth by brushing and interdental cleaning, and dental hygienists can remove hardened deposits not removed by routine cleaning.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Gum Health</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 11. CORRECTION OF IRREGULARLY PLACED TEETH USING BRACES -->
      <div class="col-lg-4 col-md-6" id="braces">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image11.jpg" alt="Correction of Irregularly placed teeth using braces">
            <span class="service-tag-badge"><i class="fa-solid fa-teeth me-1"></i> Orthodontics</span>
          </div>
          <div class="service-detail-body">
            <h3>Correction of Irregularly Placed Teeth Using Braces</h3>
            <p>
              Dental braces (also known as braces, orthodontic cases, or cases) are devices used in orthodontics that align and straighten teeth and help position them with regard to a person's bite, while also aiming to improve dental health. They are often used to correct underbites, as well as malocclusions, overbites, open bites, gaps, deep bites, cross bites, crooked teeth, and various other flaws of the teeth and jaw. Braces can be either cosmetic or structural. Dental braces are often used in conjunction with other orthodontic appliances to help widen the palate or jaws and to otherwise assist in shaping the teeth and jaws.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Perfect Alignment</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

      <!-- 12. TREATMENT FOR CHILD TEETH -->
      <div class="col-lg-4 col-md-6" id="child">
        <div class="service-detail-card">
          <div class="service-detail-img">
            <img src="images/image12.jpg" alt="Treatment for child teeth">
            <span class="service-tag-badge"><i class="fa-solid fa-child-reaching me-1"></i> Pediatric Dentistry</span>
          </div>
          <div class="service-detail-body">
            <h3>Treatment for Child Teeth</h3>
            <p>
              Deciduous teeth or primary teeth, also informally known as baby teeth, tothlings, milk teeth, or temporary teeth,[1] are the first set of teeth in the growth and development of humans and other diphyodonts, which include most mammals but not elephants, kangaroos, or manatees, which are polyphyodonts. Deciduous teeth develop during the embryonic stage of development and erupt (break through the gums and become visible in the mouth) during infancy. They are usually lost and replaced by permanent teeth, but in the absence of their permanent replacements, they can remain functional for many years into adulthood.
            </p>
            <div class="card-footer-action">
              <span class="text-primary fw-bold small"><i class="fa-solid fa-circle-check me-1"></i> Gentle Kid Care</span>
              <button type="button" class="btn btn-sm btn-dental-outline" data-bs-toggle="modal" data-bs-target="#appointmentModal">
                Book Consultation
              </button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- =========================
     BOTTOM CONSULTATION CTA
============================== -->
<section class="section-padding-sm text-white" style="background: linear-gradient(135deg, var(--primary-deep) 0%, var(--primary-dark) 100%);">
  <div class="container text-center">
    <h3 class="fw-bold text-white mb-2 fs-2">Need Clinical Advice on Which Treatment is Right for You?</h3>
    <p class="text-light-subtle mb-4 mx-auto" style="max-width: 650px;">
      Book a personalized consultation with Dr. Nadella Koteswara Rao or Dr. Nadella Neelima to receive an accurate oral diagnosis and tailored treatment plan.
    </p>
    <div class="d-inline-flex flex-wrap gap-3 justify-content-center">
      <button type="button" class="btn btn-dental-primary px-4 py-2" data-bs-toggle="modal" data-bs-target="#appointmentModal">
        <i class="fa-solid fa-calendar-check me-2"></i> Book Appointment Now
      </button>
      <a href="tel:+917995605888" class="btn btn-dental-white px-4 py-2">
        <i class="fa-solid fa-phone me-2"></i> Call +91 79956 05888
      </a>
    </div>
  </div>
</section>

<?php 
	include('footer.php');
?>
