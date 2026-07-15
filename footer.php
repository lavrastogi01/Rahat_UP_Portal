<div class="container-fluid footer bg-dark py-5 wow fadeIn" data-wow-delay="0.1s" style="color: #cbd5e1;">
    <div class="container py-4">
        <div class="row g-4">

            <style>
                /* Modern UI Enhancements for Footer Cards */
                .footer-card {
                    background: rgba(255, 255, 255, 0.02);
                    border: 1px solid rgba(255, 255, 255, 0.05);
                    border-radius: 12px;
                    padding: 24px;
                    height: 100%;
                    transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1),
                        border-color 0.3s ease,
                        box-shadow 0.3s ease;
                }

                .footer-card:hover {
                    transform: translateY(-5px);
                    border-color: #ff5e15;
                    background: rgba(255, 255, 255, 0.04);
                    box-shadow: 0 10px 25px rgba(255, 94, 21, 0.1);
                }

                .footer-card h4 {
                    font-weight: 700;
                    letter-spacing: 0.5px;
                    border-bottom: 2px solid rgba(255, 255, 255, 0.05);
                    padding-bottom: 10px;
                    position: relative;
                }

                .footer-card h4::after {
                    content: '';
                    position: absolute;
                    width: 40px;
                    height: 2px;
                    background: #ff5e15;
                    bottom: -2px;
                    left: 0;
                    border-radius: 2px;
                }

                .footer-card a {
                    color: #cbd5e1;
                    text-decoration: none;
                    margin-bottom: 12px;
                    font-size: 0.92rem;
                    display: flex;
                    align-items: flex-start;
                    transition: all 0.2s ease;
                    line-height: 1.4;
                }

                .footer-card a i {
                    margin-top: 4px;
                    transition: transform 0.2s ease;
                }

                .footer-card a:hover {
                    color: #ff5e15 !important;
                }

                .footer-card a:hover i.fa-angle-right {
                    transform: translateX(4px);
                }

                /* Social Icon Apparatus Adjustments */
                .footer-btn .btn-square-custom {
                    width: 40px;
                    height: 40px;
                    display: inline-flex;
                    align-items: center;
                    justify-content: center;
                    background: rgba(255, 255, 255, 0.05);
                    border: 1px solid rgba(255, 255, 255, 0.1);
                    border-radius: 8px;
                    transition: all 0.3s ease;
                }

                .footer-btn .btn-square-custom:hover {
                    background: #ff5e15;
                    color: #ffffff !important;
                    transform: translateY(-3px) scale(1.05);
                    box-shadow: 0 5px 15px rgba(255, 94, 21, 0.4);
                }

                .copyright-bar {
                    background: #090a10;
                    border-top: 1px solid rgba(255, 255, 255, 0.05);
                    font-size: 0.9rem;
                }

                /* Smooth Responsive Resets */
                @media (max-width: 576px) {
                    .footer-card {
                        padding: 18px;
                    }

                    .copyright-bar .text-center {
                        text-align: center !important;
                    }
                }
            </style>

            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="footer-card">
                    <h4 class="text-white mb-4">Important Links</h4>
                    <div class="d-flex flex-column">
                        <a href="https://nidm.gov.in/"><i class="fas fa-angle-right me-2"></i>National Institute of
                            Disaster Management (NIDM)</a>
                        <a href="https://bhuvan-app1.nrsc.gov.in/bhuvandisaster/#flood"><i
                                class="fas fa-angle-right me-2"></i>Bhuvan - Disaster Management Services</a>
                        <a href="https://www.moha.gov.np/"><i class="fas fa-angle-right me-2"></i>Govt of Nepal Disaster
                            Website</a>
                        <a href="https://upsdma.up.nic.in/"><i class="fas fa-angle-right me-2"></i>Uttar Pradesh
                            Disaster Management Authority</a>
                        <a href="http://www.rsacup.org.in/"><i class="fas fa-angle-right me-2"></i>Remote Sensing
                            Application Centre, UP</a>
                        <a href="https://idup.gov.in/en"><i class="fas fa-angle-right me-2"></i>Irrigation Department,
                            GoUP</a>
                        <a href="https://www.india.gov.in/"><i class="fas fa-angle-right me-2"></i>Citizen Online
                            Services</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-lg-6 col-md-6 col-12">
                <div class="footer-card">
                    <h4 class="text-white mb-4">Explore</h4>
                    <div class="d-flex flex-column">
                        <a href="index.php"><i class="fas fa-angle-right me-2"></i> Home</a>
                        <a href="who.php"><i class="fas fa-angle-right me-2"></i> Who's who</a>
                        <a href="about.php"><i class="fas fa-angle-right me-2"></i> About Us</a>
                        <a href="citizen_corner.php"><i class="fas fa-angle-right me-2"></i> Citizen's Corner</a>
                        <a href="faq.php"><i class="fas fa-angle-right me-2"></i> FAQ's</a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> e Pass</a>
                        <a href="index.php"><i class="fas fa-angle-right me-2"></i> RTI</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="footer-card">
                    <h4 class="text-white mb-4">Our Services</h4>
                    <div class="d-flex flex-column">
                        <a href="contact.php"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                        <a href="feedback.php"><i class="fas fa-angle-right me-2"></i> Feedback</a>
                        <a href="pac.php"><i class="fas fa-angle-right me-2"></i> PAC </a>
                        <a href="#"><i class="fas fa-angle-right me-2"></i> SOP</a>
                        <a href="https://rahat.up.nic.in/core/"><i class="fas fa-angle-right me-2"></i> Login</a>
                        <a href="track_application.php"><i class="fas fa-angle-right me-2"></i> Track Application</a>
                        <a href="gallery.php"><i class="fas fa-angle-right me-2"></i> Photo Gallery</a>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6 col-md-6 col-12">
                <div class="footer-card">
                    <h4 class="text-white mb-4">Contact Info</h4>
                    <div class="d-flex flex-column">
                        <a href="#" style="cursor: default;"><i class="fa fa-map-marker-alt me-2 text-danger"></i>
                            Relief Commissioner, IInd Floor, Shastri Bhawan, Lucknow-226001</a>
                        <a href="mailto:rahat@nic.in"><i class="fas fa-envelope me-2 text-primary"></i>
                            rahat[at]nic[dot]in</a>
                        <a href="tel:0111078"><i class="fas fa-phone me-2 text-success"></i> Control Room Delhi:
                            011-1078</a>
                        <a href="tel:+01234567890"><i class="fas fa-phone me-2 text-success"></i> +012 345 67890</a>
                        <a href="tel:1070" class="mb-3 fw-bold text-warning"><i class="fas fa-headset me-2"></i> State
                            Helpline No. - 1070</a>

                        <div class="footer-btn d-flex align-items-center mt-2">
                            <a class="btn-square-custom me-2" href="https://www.facebook.com/UpRahatAyukt/"
                                target="_blank" aria-label="Facebook"><i class="fab fa-facebook-f text-white"></i></a>
                            <a class="btn-square-custom me-2" href="https://x.com/rahat_up/" target="_blank"
                                aria-label="Twitter"><i class="fab fa-twitter text-white"></i></a>
                            <a class="btn-square-custom me-0" href="https://www.instagram.com/rahat_up/" target="_blank"
                                aria-label="Instagram"><i class="fab fa-instagram text-white"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="container-fluid copyright-bar py-4">
    <div class="container">
        <div class="row g-3 align-items-center">
            <div class="col-md-6 text-center text-md-start text-white">
                <span Copyright © <a href="#"
                        class="text-decoration-none fw-medium">UpRahat 2026</a>. All Rights Reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class=" text-white">Designed By <a class="text-decoration-none fw-medium"
                        href="https://techsseract.com/" target="_blank">CMP Techsseract LLP</a></span>
            </div>
        </div>
    </div>
</div>
<a href="#" class="btn btn-secondary btn-lg-square back-to-top"
    style="position: fixed; bottom: 30px; right: 30px; z-index: 99; display: none; border-radius: 8px;"><i
        class="fa fa-arrow-up"></i></a>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/main.js"></script>
<script src="js/custom.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Back to top button dynamic triggers visibility scroll observer loop
        const backToTop = document.querySelector('.back-to-top');
        if (backToTop) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 300) {
                    backToTop.style.display = 'flex';
                    backToTop.style.alignItems = 'center';
                    backToTop.style.justifyContent = 'center';
                } else {
                    backToTop.style.display = 'none';
                }
            });
        }

        // Navigation Menu Active Link Switcher Logic Engine Block
        document.querySelectorAll(".navbar-nav .active").forEach(el => el.classList.remove("active"));
        let currentFile = window.location.pathname.split("/").pop() || "index.php";

        document.querySelectorAll(".navbar-nav a").forEach(link => {
            let href = link.getAttribute("href");
            if (href === currentFile) {
                link.classList.add("active");
                let navItem = link.closest(".nav-item");
                if (navItem) navItem.classList.add("active");

                let dropdown = link.closest(".dropdown");
                if (dropdown) {
                    dropdown.classList.add("active");
                    let toggle = dropdown.querySelector(".dropdown-toggle");
                    if (toggle) toggle.classList.add("active");
                }
            }
        });
    });
</script>