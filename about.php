<?php
include('header.php');
?>
 <style>
            /* ABOUT CIRCLE DESIGN */

            /* ABOUT CIRCLE DESIGN */

            .about-circle-wrapper {
                position: relative;
                width: 100%;
                height: 420px;
            }

            /* Base circle */

            .circle-img {
                position: absolute;
                border-radius: 50%;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            }

            .circle-img img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            /* Circle sizes - EXACT DESIGN */

            .circle-big {
                width: 282px;
                height: 282px;
                left: 40px;
                top: 0;
                z-index: 2;
            }

            .circle-medium {
                width: 218px;
                height: 218px;
                left: 229px;
                top: 7px;
                z-index: 3;
            }

            .circle-small {
                width: 206px;
                height: 206px;
                left: 260px;
                bottom: -52px;
                z-index: 1;
            }


            /* Responsive */

            @media (max-width:992px) {

                .about-circle-wrapper {
                    height: 340px;
                }

                .circle-big {
                    width: 220px;
                    height: 220px;
                    left: 10px;
                }

                .circle-medium {
                    width: 170px;
                    height: 170px;
                    left: 150px;
                }

                .circle-small {
                    width: 150px;
                    height: 150px;
                    left: 190px;
                    bottom: -5px;
                }

            }

            @media (max-width:576px) {

                .about-circle-wrapper {
                    height: 260px;
                }

                .circle-big {
                    width: 170px;
                    height: 170px;
                    left: 0;
                }

                .circle-medium {
                    width: 130px;
                    height: 130px;
                    left: 110px;
                }

                .circle-small {
                    width: 110px;
                    height: 110px;
                    left: 140px;
                }

            }
        </style>
        <!-- About Start -->
        <!-- About Start -->
        <div class="container-fluid about py-5" id="maincontent">
            <div class="container py-5">

                <div class="row align-items-center g-5">

                    <!-- Left Content -->
                    <div class="col-xl-6 wow fadeInLeft" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">

                        <div class="about-content">

                            <h5 class="text-secondary text-uppercase mb-3">About Office of Relief Commissioner</h5>

                            <h2 class="display-5 mb-4">
                                About Office of Relief Commissioner
                            </h2>

                            <p class="mb-4" style="text-align: justify;">
                                The office of Relief Commissioner is nodal for effective management, response & relief, rehabilitation and reconstruction in case of both natural and human induced disasters in the State. Office of Relief Commissioner is also responsible for legislation and policy making with regard to disaster management. It also plays and important role in mainstreaming disaster risk reduction in development plans of concerned departments. Office of Relief Commissioner along with Uttar State Disaster Management Authority is responsible to build a safe and disaster-resilient Uttar Pradesh by developing a, proactive, multi-disaster and technology-driven strategy for disaster management. This will be achieved through strengthening ongoing efforts in building culture of prevention, mitigation and preparedness in state through collective efforts of the government with special focus on most vulnerable communities.
                            </p>

                            <div class="row mb-4">

                                <div class="col-md-6">
                                    <p><i class="fas fa-check text-secondary me-2"></i> Disaster Management Support</p>
                                    <p><i class="fas fa-check text-secondary me-2"></i> Emergency Response</p>
                                </div>

                                <div class="col-md-6">
                                    <p><i class="fas fa-check text-secondary me-2"></i> Citizen Assistance</p>
                                    <p><i class="fas fa-check text-secondary me-2"></i> Government Coordination</p>
                                </div>

                            </div>

                            <a href="#" class="btn btn-secondary py-3 px-5">
                                Read More
                            </a>

                        </div>

                    </div>


                    <!-- Right Image Section -->
                    <div class="col-xl-6 wow fadeInLeft" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;">

                        <div class="about-circle-wrapper">

                            <div class="circle-img circle-big">
                                <img src="img/2.jpg" alt="">
                            </div>

                            <div class="circle-img circle-medium">
                                <img src="img/about-2.jpg" alt="">
                            </div>

                            <div class="circle-img circle-small">
                                <img src="img/about-3.jpg" alt="">
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- About End -->

<?php
include('footer.php');
?>