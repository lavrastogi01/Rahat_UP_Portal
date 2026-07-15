<?php include('header.php'); ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f6f9;
        overflow-x: hidden;
    }

    .charter-section {
        padding: 60px 0;
    }

    /* MAIN DISPLAY CONTAINER MATRIX */
    .charter-box {
        max-width: 1140px;
        margin: auto;
        background: #fff;
        border-radius: 20px;
        padding: 40px;
        box-shadow: 0 15px 40px rgba(15, 23, 42, 0.06);
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.03);
    }

    /* PREMIUM BRANDING GRADIENT BAR */
    .charter-box::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 6px;
        background: linear-gradient(90deg, #002f77 0%, #A61C22 100%);
        border-radius: 20px 20px 0 0;
    }

    .charter-title {
        font-size: 26px;
        font-weight: 700;
        margin-bottom: 25px;
        color: #002f77;
        position: relative;
    }

    /* KINETIC SCROLLING TEXT EFFECTS */
    .charter-content p {
        font-size: 15px;
        line-height: 1.8;
        text-align: justify;
        color: #334155;
        margin-bottom: 20px;
        font-weight: 500;
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
    }

    .charter-content p:hover:not(.img-holder-p) {
        transform: translateX(6px);
        color: #000000;
    }

    /* IMAGE MATRIX WRAPPER & HOVER ANIMATION */
    .gallery-tech-holder {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 25px 0;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        background: #0b1329;
        position: relative;
    }

    .gallery-tech-holder img {
        width: 100%;
        max-height: 480px;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.4s ease;
    }

    .gallery-tech-holder:hover img {
        transform: scale(1.04) rotate(0.5deg);
        opacity: 0.9;
    }

    /* ==========================================================================
       RESPONSIVE ENGINES (MOBILE OPTIMIZATION)
    ========================================================================== */
    @media (max-width: 768px) {
        .charter-section {
            padding: 35px 0;
        }

        .charter-box {
            padding: 25px 20px;
            border-radius: 0px; /* Seamless flow on mobile viewport */
        }

        .charter-title {
            font-size: 20px;
            text-align: center;
        }

        .charter-content p {
            font-size: 14px;
            line-height: 1.7;
        }
    }
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Role of NGO’S in Disaster Management</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">Role of NGO’S in Disaster Management</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<section class="charter-section px-3">
  <div class="container p-0">

    <div class="charter-box">
      <!-- Section Title Header -->
      <h2 class="charter-title wow fadeInDown" data-wow-delay="0.2s">
        <i class="fa-solid fa-hands-holding-child me-2" style="color: #A61C22;"></i> Role of NGO’S in Disaster Management
      </h2>

      <!-- Content Grid with Cascade Delayed Scroll Animation -->
      <div class="charter-content">
        <p class="wow fadeInRight" data-wow-delay="0.3s"> 
            NGOs are organizations registered under various Indian laws such as the Societies Registration Act, 1860, Section 25(1) of Companies Act, 1956 meant for non-profit companies, or State-specific Public Charitable Trust Acts. NGOs work on a variety of areas like humanitarian assistance, sectorial development interventions and sustainable development. NGOs play important roles in different stages of the Disaster Management Cycle.
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.4s">
            Volunteerism and social service has deep roots in India, since time immemorial, even though it received special significance during the freedom struggle through the Gandhian concept of Shramdaan, implying the offering of free labor for some noble cause like rural development, construction of social assets and public infrastructure and amenities, etc.
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.5s">
            In post-Independent India, the Non-Governmental Organizations (NGOs) have been providing support in critical sectors like health, education, water supply and sanitation, shelter and infrastructure, restoration of livelihoods, food security and nutrition, environment, etc.
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.6s">
            Given India’s multi-hazard risk and vulnerability to natural and man-made disasters, NGOs have been playing a significant role in providing humanitarian assistance to disaster-affected people in most of the severe disasters like the Latur earthquake in 1993, Orissa super cyclone in 1999, Bhuj earthquake in 2001, Indian Ocean tsunami in 2004, Kashmir earthquake in 2005, Barmer floods in 2006, Kosi floods in 2008, cyclones Aila and Laila and the more recent cloud burst in Leh in August 2010, apart from participating in providing relief to disaster affected communities in various other localized disasters.
        </p>
        
        <!-- Upgraded Responsive Image Container Matrix Component -->
        <p class="img-holder-p wow fadeInUp" data-wow-delay="0.2s"> 
           <span class="gallery-tech-holder mx-auto">
               <img src="img/ngo.jpg" class="img-fluid" alt="NGO Disaster Management Support Blueprint">
           </span>
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.7s">
            In the recent past, the role of NGOs in disaster management (DM) has started changing from providing post-disaster relief to strengthening pre-disaster preparedness and mitigation through capacity building, public awareness campaigns, mock exercises, workshops and conferences, etc.
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.8s">
            NGOs have also started to collaborate with corporate entities in Public-Private Partnership (PPP) projects and Corporate Social Responsibility (CSR) initiatives in the field of DM at State, District and Sub-district levels. Till recently, the work of NGOs in the field of DM has been mostly sporadic, reactive, responsive and driven by local level compulsions in the geographic areas where they are implementing development projects and very often they faced enormous challenges in coordinating with the government machinery and even among NGOs themselves.
        </p>
        
        <p class="wow fadeInRight" data-wow-delay="0.9s">
            In line with its mandate as envisaged in the Disaster Management Act 2005 (DM Act 2005), the National Disaster Management Authority (NDMA) has circulated National Disaster Management Guidelines on Role of NGOs in Disaster Management defining the role of NGOs in disaster management.
        </p>
      </div>

    </div>

  </div>
</section>

<?php include('footer.php'); ?>