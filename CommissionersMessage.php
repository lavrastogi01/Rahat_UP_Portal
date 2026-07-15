<?php
include('header.php');
?> 
<style>
    .relief-section {
        background: #f4f8ff;
    }

    /* PROFILE CARD - MODERN KINETIC HOVER CONFIG */
    .profile-card {
        background: #fff;
        padding: 25px;
        border-radius: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.06);
        transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.4s ease;
    }

    .profile-card:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 20px 40px rgba(27, 54, 93, 0.12);
    }

    .profile-card img {
        border-radius: 15px;
        transition: transform 0.5s ease;
    }
    
    .profile-card:hover img {
        transform: scale(1.03);
    }

    /* TITLE CSS WITH ANIMATION COMPATIBILITY */
    .main-title {
        font-weight: 700;
        position: relative;
        color: #1B365D;
    }

    .main-title::after {
        content: '';
        width: 60px;
        height: 3px;
        background: #ff6600;
        position: absolute;
        bottom: -8px;
        left: 0;
    }

    /* ABOUT BOX GLASSMORPHISM SLIDE STYLE */
    .about-box {
        background: #ffffff;
        padding: 24px;
        border-left: 5px solid #ff6600;
        border-radius: 8px;
        margin-top: 25px;
        text-align: justify;
        box-shadow: 0 5px 15px rgba(0,0,0,0.02);
    }

    /* OBJECTIVES CAPSLOCK DESIGN */
    .sub-title {
        font-weight: 600;
        color: #1B365D;
        line-height: 1.4;
    }

    .obj-list-container {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .obj-card {
        background: #fff;
        padding: 16px 20px;
        border-radius: 12px;
        font-size: 15px;
        font-weight: 500;
        color: #333;
        box-shadow: 0 4px 15px rgba(0,0,0,0.04);
        transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
        display: flex;
        align-items: center;
        gap: 12px;
        border-left: 3px solid transparent;
    }

    .obj-card i {
        color: #ff6600;
        transition: color 0.3s ease;
    }

    .obj-card:hover {
        background: #ff6600;
        color: #fff;
        border-left-color: #1B365D;
        transform: translateX(5px);
    }

    .obj-card:hover i {
        color: #fff;
    }

    /* HAZARD BOX HIGH ATTRACTIVE GRID */
    .hazard-box {
        background: linear-gradient(135deg, #1B365D 0%, #2a2a5a 100%);
        color: #f8fafc;
        padding: 25px;
        text-align: justify;
        border-radius: 16px;
        border-right: 5px solid #ff6600;
        box-shadow: 0 10px 25px rgba(27, 54, 93, 0.15);
    }

    /* RESPONSIVE ENGINES */
    @media (max-width: 768px) {
        .main-title {
            text-align: center;
        }
        .main-title::after {
            left: 50%;
            transform: translateX(-50%);
        }
        .hazard-box {
            text-align: center;
        }
    }
</style>

<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Relief Commissioner Message</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Relief Commissioner Message</li>
                </ol>    
            </div>
        </div>
<!-- Header End -->

<div class="container-fluid relief-section py-5">
  <div class="container py-3">
    <div class="row g-5 align-items-start">

      <!-- LEFT PROFILE (WITH TRANSLATION MOTION) -->
      <div class="col-lg-4 text-center wow fadeInLeft" data-wow-delay="0.2s">
        <div class="profile-card">
          <img src="img/pn_cm.jpeg" class="img-fluid w-100" alt="Dr. Hrishikesh Bhaskar Yashod">
          <h5 class="mt-3 font-weight-700" style="color: #1B365D;">Dr. Hrishikesh Bhaskar Yashod</h5>
          <span class="text-muted fw-medium text-uppercase small" style="letter-spacing: 1px;">Relief Commissioner</span>
        </div>
      </div>

      <!-- RIGHT CONTENT (WITH TIMED CASCADE NOTIFICATIONS LOOP) -->
      <div class="col-lg-8">

        <h2 class="main-title wow fadeInDown" data-wow-delay="0.2s">Relief Commissioner Message</h2>

        <!-- ABOUT BOX (FADE SLIDE IN) -->
        <div class="about-box wow fadeInRight" data-wow-delay="0.4s">
          <p class="mb-0" style="line-height: 1.6; color: #4a5568;">
           The office of Relief Commissioner is nodal for effective management, response & relief, rehabilitation and reconstruction in case of both natural and human induced disasters in the State. Office of Relief Commissioner is also responsible for legislation and policy making with regard to disaster management. It also plays and important role in mainstreaming disaster risk reduction in development plans of concerned departments. Office of Relief Commissioner along with Uttar Pradesh State Disaster Management Authority is responsible to build a safe and disaster-resilient Uttar Pradesh by developing a holistic, proactive, multi-disaster and technology-driven strategy for disaster management. This will be achieved through strengthening ongoing efforts in building culture of prevention, mitigation and preparedness in state through collective efforts of the government with special focus on most vulnerable communities.
          </p>
        </div>

        <!-- OBJECTIVES TRACK FRAME -->
        <h4 class="sub-title mt-4 mb-3 wow fadeInRight" data-wow-delay="0.5s">Objectives of Office of Relief Commissioner, Government of Uttar Pradesh:</h4>

        <div class="row g-3">
            <div class="col-12 wow fadeInRight" data-wow-delay="0.6s">
                <div class="obj-card">
                    <i class="fas fa-shield-alt"></i>
                    <span>To further strengthen institutional structure of disaster management in the state.</span>
                </div>
            </div>
            <div class="col-12 wow fadeInRight" data-wow-delay="0.7s">
                <div class="obj-card">
                    <i class="fas fa-chart-line"></i>
                    <span>To undertake effective measures for reducing the impact of natural and man-made disaster.</span>
                </div>
            </div>
            <div class="col-12 wow fadeInRight" data-wow-delay="0.8s">
                <div class="obj-card">
                    <i class="fas fa-hands-helping"></i>
                    <span>To provide prompt & effective rescue operations and transparent relief distribution to affected people.</span>
                </div>
            </div>
        </div>

        <!-- MULTI-HAZARD ANALYTICS CARD -->
        <div class="hazard-box mt-4 wow fadeInUp" data-wow-delay="0.9s">
          <p class="mb-0" style="line-height: 1.6;">
            Uttar Pradesh is prone to multiple-hazards which include flood, drought, storms, fire, hailstorms, earthquake and lightning of high severity, 40 of the total 75 districts in the state are prone to floods. Areas in western Uttar Pradesh that were historically not flood prone have also started experiencing flooding in recent years. Districts of Terai belt are also prone to earthquake as they fall in seismic zone IV. U.P. is also prone to drought. Bundelkhand & Vindhya region of state is more prone to drought condition. State also faces extreme heat and cold wave conditions in peak summer and winter conditions respectively. Lightning and high speed winds in parts of the state have also added further distress in the state. These recurring calamities result in substantial annual losses and minimize developmental gains.
          </p>
        </div>

      </div>

    </div>
  </div>
</div>

<?php
include('footer.php');
?>