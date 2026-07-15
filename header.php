<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rahat</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- new -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
</head>

<body>

    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <div id="google_translate_element" style="display:none;"></div>

    <!-- Complete Fixed Header Container (Topbar + Navbar Fixed Together) -->
    <header id="main-header" class="fixed-top bg-white shadow-sm">

        <!-- Topbar -->
        <div class="container-fluid topbar d-none d-xl-block w-100">
            <div class="row gx-0 align-items-center" style="height: 40px; padding: 0 20px;">
                <div class="col-lg-6 text-start d-flex align-items-center">
                    <span class="fw-bold me-1">उतर प्रदेश सरकार</span> | <span>Government of Uttar Pradesh</span>
                </div>

                <div class="col-lg-6 text-end d-flex align-items-center justify-content-end gap-2">
                    <a href="tel:1070" class="me-2"><i class="fas fa-phone-alt me-1"></i> 1070</a>
                    <!-- Click karne par header hide karne wala action link -->
                    <a href="javascript:void(0);" id="skip-to-content-btn" class="me-3">Skip to content</a>

                    <button class="btn-link-style fw-bold" id="increase">A<sup>+</sup></button>
                    <button class="btn-link-style fw-bold" id="reset">A</button>
                    <button class="btn-link-style fw-bold" id="decrease">A<sup>-</sup></button>

                    <span class="mx-2">|</span>
                    <i class="fas fa-globe me-1"></i>
                    <select class="lang-select" id="languageSwitcher">
                        <option value="en">English</option>
                        <option value="hi">हिंदी</option>
                    </select>
                    <a href="loginfirst.php" class="btn btn-primary py-1 px-4 shadow-sm"
                        style="background-color: #002f77; border: 1px solid #fff;">Login</a>
                </div>
            </div>
        </div>

        <!-- Navbar -->
        <div class="container-fluid px-0">
            <nav class="navbar navbar-expand-lg navbar-light px-3">
                <a href="index.php" class="navbar-brand p-0 d-flex align-items-center logo-wrapper">
                    <img src="img/rahatlogo.png" alt="Logo" class="site-logo">
                    <div class="logo-divider"></div>
                    <div class="logo-content">
                        <div class="logo-hindi">राहत आयुक्त कार्यालय उ.प्र. सरकार</div>
                        <div class="logo-english">Office of Relief Commissioner Govt Of Uttar Pradesh</div>
                    </div>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto pt-2 pt-lg-0 align-items-lg-center">
                        <!-- <a href="index.php" class="nav-item nav-link active">
                            <i class="fas fa-home me-2"></i>
                        </a> -->

                        <div class="nav-item dropdown">
                            <a href="about.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">About Us</a>
                            <div class="dropdown-menu m-lg-0 shadow-sm">
                                <a href="Introduction (Functions & Objectives).php" class="dropdown-item">Introduction
                                    (Functions & Objectives)</a>
                                <a href="Organization-Structure.php" class="dropdown-item">Organization Structure</a>
                                <a href="CommissionersMessage.php" class="dropdown-item">Commissioner's Message</a>
                                <a href="who.php" class="dropdown-item">Who's who</a>
                                <a href="citizen.php" class="dropdown-item">Citizen Charter</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">NGO's Corner</a>
                            <div class="dropdown-menu m-lg-0 shadow-sm">
                                <a href="registrationngo.php" class="dropdown-item">NGO's Registration</a>
                                <a href="ngo.php" class="dropdown-item">Role of NGO in Disaster Management</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">G.O. & D.D.M.P</a>
                            <div class="dropdown-menu m-lg-0 shadow-sm">
                                <a href="gov-order.php" class="dropdown-item">Government Orders Ex Budget Release</a>
                                <a href="#" class="dropdown-item">बाढ की स्थिति (लॉग इन)</a>
                                <a href="DDMA.php" class="dropdown-item">District Disaster Management Plan</a>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside">Citizen's Corner</a>
                            <div class="dropdown-menu m-lg-0 shadow-sm">
                                <a href="citizen_corner.php" class="dropdown-item">Citizen's Corner</a>
                                <a href="faq.php" class="dropdown-item">FAQ's</a>
                                <a href="#" class="dropdown-item">e Pass</a>
                            </div>
                        </div>

                        <a href="track_application.php" class="nav-item nav-link me-2">Track Application</a>
                    </div>

                    <!-- <div class="d-flex flex-column flex-lg-row align-items-lg-center gap-3 pt-3 pt-lg-0 ms-lg-3">
                        <div class="search-box-container">
                            <input type="text" placeholder="Search here...">
                            <i class="fas fa-search search-icon"></i>
                        </div>
                    </div> -->
                </div>
            </nav>
        </div>
    </header>

    <!-- Iske neeche aapka page ka content start hoga -->

</body>

<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<script>
    // for google translate
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({
            pageLanguage: 'en',
            includedLanguages: 'en,hi'
        }, 'google_translate_element');
    }

    setInterval(function () {
        const banner = document.querySelector('.goog-te-banner-frame');
        if (banner) {
            banner.style.display = 'none';
        }

        document.body.style.top = '0px';
    }, 500);

    document.querySelector('.lang-select').addEventListener('change', function () {

        var lang = this.value;

        var interval = setInterval(function () {

            var select = document.querySelector('.goog-te-combo');

            if (select) {
                select.value = lang;
                select.dispatchEvent(new Event('change'));
                clearInterval(interval);
            }

        }, 500);

    });
</script>

<script>
    $(document).ready(function () {
        // स्पिनर को लोडिंग के बाद हटाने का बेसिक लॉजिक
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 100);

        // Skip to Content par click karte hi Header hide (gayab) karne ka logic
        $('#skip-to-content-btn').click(function (e) {
            e.preventDefault();
            $('#main-header').fadeOut(300); // Header slide/fade hokar gayab ho jayega
            $('body').css('padding-top', '0px'); // Body ki padding remove ho jayegi taaki space khali na dikhe
        });

        // डिफ़ॉल्ट ज़ूम स्केल (1 = 100%)
        let currentScale = 1;

        // A+ दबाने पर पूरी साइट एक साथ ज़ूम इन होगी
        $('#increase').click(function (e) {
            e.preventDefault();
            if (currentScale < 1.15) {
                currentScale += 0.05; // हर क्लिक पर 5% बढ़ेगा
                triggerSiteZoom(currentScale);
            }
        });

        // A दबाने पर पूरी साइट वापस सामान्य आकार में आ जाएगी
        $('#reset').click(function (e) {
            e.preventDefault();
            currentScale = 1;
            triggerSiteZoom(currentScale);
        });

        // A- दबाने पर पूरी साइट ज़ूम आउट होगी
        $('#decrease').click(function (e) {
            e.preventDefault();
            if (currentScale > 0.85) {
                currentScale -= 0.05; // हर क्लिक पर 5% घटेगा
                triggerSiteZoom(currentScale);
            }
        });

        // ग्लोबल ज़ूम कंट्रोलर फंक्शन
        function triggerSiteZoom(scaleValue) {
            if (typeof document.body.style.zoom !== "undefined") {
                $('body').css('zoom', scaleValue);
            } else {
                // फ़ायरफ़ॉक्स ब्राउज़र के लिए कंपैटिबिलिटी बैकअप
                $('body').css('transform', 'scale(' + scaleValue + ')');
            }
        }
    });
</script>

</html>