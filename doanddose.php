<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do's & Dont's - Office of Relief Commissioner</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8fafc;
            color: #334155;
            font-size: 14px;
        }

        /* Top Government Officials Header Line - Fully Responsive Grid */
        .top-officials-bar {
            background-color: #fff6f6;
            border-bottom: 1px solid #f0d5d5;
            padding: 10px 15px;
            font-size: 11px;
            font-weight: 600;
            color: #721c24;
        }
        .official-block {
            text-align: center;
            line-height: 1.4;
        }
        .official-title {
            color: #856404;
            font-size: 10px;
            text-transform: uppercase;
            display: block;
            margin-top: 2px;
        }

        /* Breadcrumb Navigation */
        .breadcrumb-nav {
            background: #ffffff;
            padding: 10px 20px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 12px;
        }
        .breadcrumb-nav a {
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 500;
        }
        .breadcrumb-nav a:hover {
            text-decoration: underline;
        }

        /* Title Component Box */
        .header-title-box {
            background-color: #2b6cb0;
            color: #ffffff;
            font-weight: 700;
            font-size: 22px;
            padding: 10px 24px;
            display: inline-block;
            border-top-right-radius: 20px;
            margin-bottom: 25px;
            box-shadow: 2px 4px 10px rgba(0,0,0,0.06);
        }

        /* Workspace Grid Split Setup */
        .workspace-card-wrapper {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.05);
            overflow: hidden;
            margin-bottom: 30px;
        }

        /* Left Side Category Navigation Menu */
        .category-sidebar {
            background-color: #f8fafc;
            border-right: 1px solid #e2e8f0;
            padding: 0;
        }

        .category-menu-item {
            display: block;
            padding: 14px 20px;
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 500;
            border-bottom: 1px solid #e2e8f0;
            transition: all 0.25s ease;
            cursor: pointer;
        }

        .category-menu-item:hover {
            background-color: #edf2f7;
            color: #2b6cb0;
            padding-left: 26px;
        }

        .category-menu-item.active {
            background-color: #e2e8f0;
            color: #000000;
            font-weight: 600;
            border-left: 4px solid #2b6cb0;
        }

        /* Right Side Details Panel Viewport */
        .content-display-pane {
            padding: 35px;
            min-height: 485px;
        }

        .section-sub-heading {
            font-size: 18px;
            font-weight: 600;
            color: #1a202c;
            border-bottom: 1px solid #e2e8f0;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .bullet-list-style {
            padding-left: 20px;
            margin-bottom: 0;
        }

        .bullet-list-style li {
            margin-bottom: 12px;
            line-height: 1.6;
            text-align: justify;
        }
        .bullet-list-style li:last-child {
            margin-bottom: 0;
        }

        /* Tab Contents Hide/Show classes */
        .disaster-content-block {
            display: none;
        }
        .disaster-content-block.active {
            display: block;
            animation: fadeInContent 0.4s ease;
        }

        @keyframes fadeInContent {
            from { opacity: 0; transform: translateY(8px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Mobile Devices Adaptive Tuning Engine */
        @media (max-width: 768px) {
            .top-officials-bar {
                padding: 12px 10px;
            }
            .official-block {
                margin-bottom: 8px;
            }
            .official-block:last-child {
                margin-bottom: 0;
            }
            .category-sidebar {
                border-right: none;
                border-bottom: 1px solid #e2e8f0;
                max-height: 250px;
                overflow-y: auto; /* मोबाइल पर मेनू स्क्रॉल हो जाएगा */
            }
            .content-display-pane {
                padding: 25px 15px;
            }
            .header-title-box {
                font-size: 18px;
                width: 100%;
                text-align: center;
                border-top-right-radius: 0px;
                padding: 12px 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid top-officials-bar">
        <div class="row align-items-center text-center">
            <div class="col-12 col-md-4 official-block">
                <div>Yogi Adityanath</div>
                <span class="official-title">Hon'ble Chief Minister</span>
            </div>
            <div class="col-12 col-md-4 official-block">
                <div>Shri P. Guruprasad</div>
                <span class="official-title">Principal Secretary, Revenue</span>
            </div>
            <div class="col-12 col-md-4 official-block">
                <div>Shri Bhanu Chandra Goswami</div>
                <span class="official-title">Relief Commissioner</span>
            </div>
        </div>
    </div>

    <div class="container-fluid breadcrumb-nav px-3 px-md-4">
        <a href="index.php">Home</a> &gt;&gt; <span class="text-muted">Back</span>
    </div>

    <div class="container py-4 px-2 px-md-3">
        
        <div class="header-title-box shadow-sm">
            Do's & Dont's
        </div>

        <div class="workspace-card-wrapper">
            <div class="row g-0">
                
                <div class="col-12 col-md-4 col-lg-3 category-sidebar">
                    <div class="category-menu-item active" data-target="thunderstorm">Thunderstorm & Lightning</div>
                    <div class="category-menu-item" data-target="flood">Flood</div>
                    <div class="category-menu-item" data-target="earthquake">Earthquake Safety Tip</div>
                    <div class="category-menu-item" data-target="fire">Fire</div>
                    <div class="category-menu-item" data-target="sunstroke">Sun Stroke/ Heat</div>
                    <div class="category-menu-item" data-target="terrorist">Terrorist Attack</div>
                    <div class="category-menu-item" data-target="corona">कोरोना वायरस</div>
                    <div class="category-menu-item" data-target="kids_corona">Kids, Vaayu & Corona (Comic Series)</div>
                </div>

                <div class="col-12 col-md-8 col-lg-9">
                    <div class="content-display-pane">

                        <div id="thunderstorm" class="disaster-content-block active">
                            <h4 class="section-sub-heading">If Outdoor -</h4>
                            <p class="text-muted mb-3">To avoid the exposure of lightning while outdoors, some tips to keep safe and reduce the risk are:-</p>
                            <ul class="bullet-list-style">
                                <li>Check the weather forecast before participating in outdoor activities. If the forecast calls for thunderstorms, postpone your trip or activity.</li>
                                <li>When thunder roars, go indoors - means go to a safe shelter immediately to avoid metal structures and constructions with metal sheeting. Safe shelters include pukka home, pukka building, or hard top vehicles with the windows rolled up.</li>
                            </ul>

                            <h4 class="section-sub-heading mt-4">If at home or Indoor</h4>
                            <p class="text-muted mb-3">Even though shelters like your homes, offices, shopping centers, etc. considered as safe during a lightning storm, a person may still be at risk. Here are some tips to keep safe and reduce the risk are as follows:-</p>
                            <ul class="bullet-list-style">
                                <li>Look for darkening skies and increased wind.</li>
                                <li>If you hear thunder, you are close enough to be struck by lightning. Remember the 30/30 Lightning Safety Rule: Go indoors if, after seeing lightning, you cannot count to 30 before hearing thunder. Stay indoors for 30 minutes after hearing the last clap of thunder.</li>
                                <li>Keep monitoring local media for updates and warning instructions by various modes of communication.</li>
                                <li>Stay indoors and avoid travel if possible.</li>
                            </ul>
                        </div>

                        <div id="flood" class="disaster-content-block">
                            <h4 class="section-sub-heading">Flood Safety Guidelines</h4>
                            <ul class="bullet-list-style">
                                <li>Turn off all electrical appliances and gas cylinders during a flood situation.</li>
                                <li>Do not drive or walk through moving water. Stay away from open drains, streams, and fallen power lines.</li>
                                <li>Drink boiled or chlorinated water to avoid water-borne diseases.</li>
                                <li>Move to higher ground or upper floors if water levels rise inside your area.</li>
                            </ul>
                        </div>

                        <div id="earthquake" class="disaster-content-block">
                            <h4 class="section-sub-heading">Earthquake Action Plan</h4>
                            <ul class="bullet-list-style">
                                <li><strong>DROP, COVER, and HOLD ON:</strong> Drop to your knees, cover your head and neck under a sturdy table or desk.</li>
                                <li>Stay indoors until the shaking stops and it is completely safe to exit.</li>
                                <li>If you are outdoors during tremors, move away from buildings, streetlights, and utility wires.</li>
                            </ul>
                        </div>

                        <div id="fire" class="disaster-content-block">
                            <h4 class="section-sub-heading">Fire Prevention & Safety</h4>
                            <ul class="bullet-list-style">
                                <li>In case of heavy smoke, crawl low under the smoke to your nearest secure exit gate.</li>
                                <li>Never use elevators or lifts during a building fire accident; always prefer safety staircases.</li>
                                <li>Call emergency services immediately and isolate gas connection leaks.</li>
                            </ul>
                        </div>

                        <div id="sunstroke" class="disaster-content-block">
                            <h4 class="section-sub-heading">Heat Wave & Sunstroke Protection</h4>
                            <ul class="bullet-list-style">
                                <li>Drink sufficient water and hydrating fluids like ORS or homemade drinks regularly, even if not thirsty.</li>
                                <li>Avoid going out in direct sunlight during peak noon hours (12 PM to 3 PM).</li>
                                <li>Wear lightweight, loose, and light-colored cotton clothes to keep body temperatures down.</li>
                            </ul>
                        </div>

                        <div id="terrorist" class="disaster-content-block">
                            <h4 class="section-sub-heading">Emergency Security Protocol</h4>
                            <ul class="bullet-list-style">
                                <li>Follow the standard safety guidelines: RUN if you can, HIDE if you can't, and FIGHT only as a last resort.</li>
                                <li>Keep your mobile phones completely silent to avoid sound detection by hostile elements.</li>
                                <li>Cooperate calmly with security enforcement forces and verify safe exit paths.</li>
                            </ul>
                        </div>

                        <div id="corona" class="disaster-content-block">
                            <h4 class="section-sub-heading">कोरोना वायरस से बचाव के उपाय</h4>
                            <ul class="bullet-list-style">
                                <li>नियमित रूप से अपने हाथों को साबुन और पानी से कम से कम 20 सेकंड तक धोएं या सैनिटाइज़र का उपयोग करें।</li>
                                <li>सार्वजनिक स्थानों पर अन्य व्यक्तियों से कम से कम 2 गज की सुरक्षित सामाजिक दूरी बनाए रखें।</li>
                                <li>भीड़भाड़ वाले क्षेत्रों में जाते समय हमेशा चेहरे पर मास्क का सही ढंग से उपयोग सुनिश्चित करें।</li>
                            </ul>
                        </div>

                        <div id="kids_corona" class="disaster-content-block">
                            <h4 class="section-sub-heading">Kids, Vaayu & Corona Awareness Series</h4>
                            <ul class="bullet-list-style">
                                <li>An interactive and illustrated educational comic series designed specifically for children's safety awareness.</li>
                                <li>Teaches young children healthy respiratory hygiene, immunity habits, and daily protection routines in a friendly manner.</li>
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuItems = document.querySelectorAll('.category-menu-item');
            const contentBlocks = document.querySelectorAll('.disaster-content-block');

            menuItems.forEach(item => {
                item.addEventListener('click', () => {
                    const targetId = item.getAttribute('data-target');

                    // Reset and deactivate previous states
                    menuItems.forEach(menu => menu.classList.remove('active'));
                    contentBlocks.forEach(block => block.classList.remove('active'));

                    // Activate current clicked item and matching content container block
                    item.classList.add('active');
                    const targetBlock = document.getElementById(targetId);
                    if (targetBlock) {
                        targetBlock.classList.add('active');
                    }
                });
            });
        });
    </script>
</body>
</html>

<?php
include('footer.php');
?>