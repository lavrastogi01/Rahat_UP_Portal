<?php
include('header.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;900&display=swap" rel="stylesheet">

<style>
    /* ==========================================================================
       MOGRT KINETIC TEXT ENGINE & RESPONSIVE GRID CSS
    ========================================================================== */
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f4f6f9;
        overflow-x: hidden;
    }

    /* Kinetic Container Base Frame */
    .about-item-image.kinetic-master-frame {
        position: relative;
        overflow: hidden;
        border-radius: 24px;
        box-shadow: 0 15px 40px rgba(15, 23, 42, 0.15);
        background: #0b1329; /* Dark back drop for kinetic layer contrast */
        cursor: pointer;
        width: 100%;
        display: flex;
    }

    /* Core Images Layer handling transitions */
    .kinetic-master-frame img {
        transition: transform 0.7s cubic-bezier(0.25, 1, 0.5, 1), opacity 0.5s ease;
    }

    /* Kinetic Typography MOGRT Layout Overlay */
    .kinetic-text-matrix-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        z-index: 5;
        opacity: 0;
        pointer-events: none;
        transition: opacity 0.4s ease-in-out;
        padding: 15px;
        background: rgba(166, 28, 34, 0.92); /* Rich Crimson Tech Overlay Layer */
        box-sizing: border-box;
    }

    /* Title Block 1: Kinetic Stroke Outline Text Styling */
    .kinetic-title-stroke {
        font-size: calc(1.8rem + 1.5vw); /* Highly responsive auto-scale typography */
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 2px;
        line-height: 1;
        color: transparent;
        -webkit-text-stroke: 1.5px rgba(255, 255, 255, 0.7);
        transform: translateX(-60px);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        text-align: center;
        width: 100%;
    }

    /* Title Block 2: Solid Bold Technical Text */
    .kinetic-title-solid {
        font-size: calc(2.2rem + 1.8vw);
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: #ffda6a;
        line-height: 1;
        margin: 4px 0;
        transform: scale(0.6);
        transition: transform 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
        text-align: center;
        width: 100%;
    }

    /* Title Block 3: Subtitle Capsule */
    .kinetic-sub-pill {
        font-size: calc(0.7rem + 0.3vw);
        font-weight: 600;
        letter-spacing: 5px;
        text-transform: uppercase;
        color: #ffffff;
        border: 1px solid rgba(255, 255, 255, 0.3);
        padding: 6px 16px;
        border-radius: 50px;
        background: rgba(255, 255, 255, 0.05);
        transform: translateY(35px);
        transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
        text-align: center;
        margin-top: 10px;
    }

    /* ==========================================================================
       HOVER TRIGGERS (MOGRT RENDERING REPLICA ENGINE)
    ========================================================================== */
    .kinetic-master-frame:hover img {
        transform: scale(0.92) rotate(-1.5deg);
        opacity: 0.12; /* Fades out image layers to highlight typography */
    }

    .kinetic-master-frame:hover .kinetic-text-matrix-overlay {
        opacity: 1;
    }

    .kinetic-master-frame:hover .kinetic-title-stroke {
        transform: translateX(0);
    }

    .kinetic-master-frame:hover .kinetic-title-solid {
        transform: scale(1);
    }

    .kinetic-master-frame:hover .kinetic-sub-pill {
        transform: translateY(0);
    }

    /* Responsive Mobile Optimization Fixes */
    @media (max-width: 576px) {
        .kinetic-text-matrix-overlay { padding: 10px; }
        .kinetic-sub-pill { letter-spacing: 2px; padding: 4px 10px; }
    }
</style>

        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Introduction and Objective</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Introduction and Objective</li>
                </ol>    
            </div>
        </div>
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-xl-6 col-12 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="about-item-image kinetic-master-frame">
                            <img src="img/about.jpg" class="img-1 img-fluid w-50" alt="About Image 1">
                            <img src="img/abt1.png" class="img-2 img-fluid w-50" alt="About Image 2">
                            <div class="about-item-image-content">
                                <img src="img/aboutrahat1.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="About Image Main">
                            </div>
                            
                            <div class="kinetic-text-matrix-overlay">
                                <div class="kinetic-title-stroke">Mainstream</div>
                                <div class="kinetic-title-solid">MITIGATION</div>
                                <div class="kinetic-sub-pill">PREPAREDNESS</div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item-content">
                            <p class="text-uppercase text-secondary fs-5 mb-0">Building a Disaster-Resilient Uttar Pradesh</p>
                            <h2 class="display-4 text-capitalize mb-3">Introduction and Objective</h2>
                            <p class="mb-4 fs-5" style="text-align:justify;">The office of Relief Commissioner is nodal for effective management, response & relief, rehabilitation and reconstruction in case of both natural and human induced disasters in the State. Office of Relief Commissioner is also responsible for legislation and policy making with regard to disaster management. It also plays and important role in mainstreaming disaster risk reduction in development plans of concerned departments. Office of Relief Commissioner along with Uttar Pradesh State Disaster Management Authority is responsible to build a safe and disaster-resilient Uttar Pradesh by developing a holistic, proactive, multi-disaster and technology-driven strategy for disaster management. This will be achieved through strengthening ongoing efforts in building culture of prevention, mitigation and preparedness in state through collective efforts of the government with special focus on most vulnerable communities. 
                            </p>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    
                    <div class="col-xl-6 col-12 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-item-content">
                            <p class="text-uppercase text-secondary fs-5 mb-0">Strengthening Disaster Preparedness in Uttar Pradesh</p>
                            <h2 class="display-4 text-capitalize mb-3">Our Key Objectives (Relief Commissioner, UP)</h2>
                            <p class="mb-4 fs-5" style="text-align:justify;">To further strengthen institutional structure of disaster management in the state. To undertake effective measures for reducing the impact of natural and man-made disaster. To provide prompt & effective rescue operations and transparent relief distribution to affected people. Uttar Pradesh is prone to multiple-hazards which include flood, drought, storms, fire, hailstorms, earthquake and lightning of high severity, 40 of the total 75 districts in the state are prone to floods. Areas in western Uttar Pradesh that were historically not flood prone have also started experiencing flooding in recent years. Districts of Terai belt are also prone to earthquake as they fall in seismic zone IV. U.P. is also prone to drought. Bundelkhand& Vindhya region of state is more prone to drought condition. State also faces extreme heat and cold wave conditions in peak summer and winter conditions respectively. Lightening and high speed winds in parts of the state have also added further distress in the state. These recurring calamities result in substantial annual losses and minimize developmental gains.
                            </p>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                        </div>
                    </div>
                    
                    <div class="col-xl-6 col-12 wow fadeInRight" data-wow-delay="0.2s">
                        <div class="about-item-image d-flex kinetic-master-frame">
                            <img src="img/about.jpg" class="img-1 img-fluid w-50" alt="About Image 1">
                            <img src="img/abt1.png" class="img-2 img-fluid w-50" alt="About Image 2">
                            <div class="about-item-image-content">
                                <img src="img/aboutrahat1.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="About Image Main">
                            </div>
                            
                            <div class="kinetic-text-matrix-overlay">
                                <div class="kinetic-title-stroke">Emergency</div>
                                <div class="kinetic-title-solid">RESPONSE</div>
                                <div class="kinetic-sub-pill">SAFETY FIRST</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <?php
include('footer.php');
?>