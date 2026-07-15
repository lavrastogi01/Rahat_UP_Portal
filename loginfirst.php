<?php include('header.php'); ?>


  
<head>
    <meta charset="utf-8">
    <title>Rahat Commissioner - Dynamic Portals</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }

        /* ==========================================================================
           1. HERO BANNER SLIDER (3D CUBE / SMOOTH TRANSITION STYLE)
        ========================================================================== */
        .hero-banner {
            width: 100%;
            height: 420px;
            background-size: cover;
            background-position: center;
            position: relative;
            z-index: 1;
            /* Placeholder Background Gradient - Replace with your actual top banner image */
            background-image: linear-gradient(90deg, #0b3c7b 0%, #002f77 50%, #ffffff 100%);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        /* Slide controls (Left/Right Arrows simulated like original) */
        .slider-arrow-left {
            position: absolute;
            left: 25px;
            top: 50%;
            transform: translateY(-50%);
            color: rgba(255,255,255,0.6);
            font-size: 2.5rem;
            cursor: pointer;
            transition: color 0.3s;
            z-index: 10;
        }
        .slider-arrow-left:hover {
            color: #ffffff;
        }

        /* ==========================================================================
           2. DYNAMIC LOGIN TILES SECTION (GRID ARCHITECTURE)
        ========================================================================== */
        .portal-grid-section {
            padding: 40px 20px;
        }

        .portal-card {
            position: relative;
            border-radius: 12px;
            overflow: hidden;
            min-height: 240px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            border: none;
            box-shadow: 0 8px 25px rgba(15, 23, 42, 0.08);
            transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s;
        }

        .portal-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(0, 47, 119, 0.15);
        }

        /* Dark Dynamic Overlay to protect typography readability */
        .portal-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.65); /* Keeps text perfectly visible */
            z-index: 1;
            transition: background 0.3s;
        }
        .portal-card:hover::before {
            background: rgba(0, 0, 0, 0.72);
        }

        /* Inside Contents Layer positioning */
        .portal-content {
            position: relative;
            z-index: 5;
            color: #ffffff;
            width: 100%;
        }

        .portal-title {
            font-size: 1.6rem;
            font-weight: 700;
            margin-bottom: 12px;
            letter-spacing: 0.5px;
        }

        .portal-desc {
            font-size: 0.88rem;
            font-weight: 400;
            color: #cbd5e1;
            line-height: 1.5;
            margin-bottom: 20px;
            max-width: 550px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Standard Green Action Login Button */
        .portal-btn {
            background-color: #00a826;
            color: #ffffff !important;
            font-weight: 600;
            font-size: 0.92rem;
            padding: 10px 28px;
            border-radius: 6px;
            border: 2px solid #009420;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
            box-shadow: 0 4px 10px rgba(0, 168, 38, 0.3);
        }

        .portal-btn:hover {
            background-color: #00cf21;
            border-color: #00b31c;
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(0, 168, 38, 0.4);
        }

        /* Unique backgrounds for each grid item like original snapshot */
        .bg-relief { background: url('img/relief-bg.jpg') center/cover no-repeat #4c1112; }
        .bg-flood { background: url('img/flood-bg.jpg') center/cover no-repeat #14231c; }
        .bg-boat { background: url('img/boat-bg.jpg') center/cover no-repeat #1c233a; }
        .bg-snake { background: url('img/snake-bg.jpg') center/cover no-repeat #0a0a0c; }
        .bg-old { background: url('img/old-bg.jpg') center/cover no-repeat #5c4424; }

    </style>
</head>

<body>

    <div class="container-fluid p-0">
        <div class="hero-banner">
            <div class="slider-arrow-left">
                <i class="fa-solid fa-chevron-left"></i>
            </div>
            
            </div>
    </div>

    <div class="container portal-grid-section">
        <div class="row g-4 justify-content-center">

            <div class="col-xl-6 col-md-6 col-12">
                <div class="portal-card bg-relief">
                    <div class="portal-content">
                        <h3 class="portal-title">Relief Portal (New)</h3>
                        <p class="portal-desc">Provides alerts, resources, and updates for disaster preparedness and relief across Uttar Pradesh.</p>
                        <a href="loginsecco.php" class="portal-btn">Login to Portal</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="portal-card bg-flood">
                    <div class="portal-content">
                        <h3 class="portal-title">Flood Management Portal</h3>
                        <p class="portal-desc">Monitors water levels and issues flood warnings to support timely evacuation and response.</p>
                        <a href="loginsecco.php" class="portal-btn">Login to Portal</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="portal-card bg-boat">
                    <div class="portal-content">
                        <h3 class="portal-title">Boat Management Portal</h3>
                        <p class="portal-desc">Manages rescue boats and crew deployment for relief operations in flood-affected areas.</p>
                        <a href="loginsecco.php" class="portal-btn">Login to Portal</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="portal-card bg-snake">
                    <div class="portal-content">
                        <h3 class="portal-title">Snakebite</h3>
                        <p class="portal-desc">Snakebite Mitigation Management System</p>
                        <a href="loginsecco.php" class="portal-btn">Login to Portal</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 col-12">
                <div class="portal-card bg-old">
                    <div class="portal-content">
                        <h3 class="portal-title">Login to Old Portal</h3>
                        <p class="portal-desc">Provides alerts, resources, and updates for disaster preparedness and relief across Uttar Pradesh.</p>
                        <a href="loginsecco.php" class="portal-btn" style="background-color: #3b8216; border-color: #2d660f;">Login to Old Portal</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>



<?php include('footer.php'); ?>