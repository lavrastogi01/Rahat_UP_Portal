<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Rahat</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- New Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    </head>
<style>
    .logo-wrapper{
    display:flex;
    align-items:center;
    gap:12px;
}

.site-logo{
    height:80px;
    width:80px;
}

.logo-content{
    line-height:1.2;
}

.logo-hindi{
    font-size:18px;
    font-weight:700;
    color:#000;
}

.logo-english{
    font-size:14px;
    color:#444;
}

/* Tablet */
@media (max-width:992px){

.site-logo{
    height:65px;
    width:65px;
}

.logo-hindi{
    font-size:16px;
}

.logo-english{
    font-size:13px;
}

}

/* Mobile */
@media (max-width:576px){

.site-logo{
    height:50px;
    width:50px;
}

.logo-hindi{
    font-size:13px;
}

.logo-english{
    font-size:11px;
}

}
</style>
    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Topbar Start -->
        <div class="container-fluid topbar d-none d-xl-block w-100">
            <div class="row gx-0 align-items-center" style="height: 45px;">
                <div class="col-lg-3 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                        <!-- <a href="#" class="text-muted me-4"><i class="fas fa-map-marker-alt text-secondary me-2"></i>Find A Location</a> -->
                        <!-- <a href="#" class="text-muted me-4"><i class="fas fa-phone-alt text-secondary me-2"></i>Skip To Main Content</a> -->
                        <a href="#" class="text-muted me-0"><i class="fas fa-clock text-secondary me-2"></i><span id="currentDateTime"></span></a>
                        
                    </div>
                </div>

                <div class="col-lg-3 text-center text-lg-start mb-lg-0">
                    <div class="d-flex flex-wrap">
                          <a href="#maincontent" class="text-muted me-4"><i class="fa fa-fast-forward text-secondary me-2"></i>Skip To Main Content</a>
                    </div>
                </div>

               
                <div class="col-lg-6 text-center text-lg-end">
                    <div class="d-flex align-items-center justify-content-end">
                        <!-- <a href="#" class="text-muted me-3"><i class="fas fa-clock text-secondary me-2"></i>Mon - Sat 8:00 - 17:30, Sunday - CLOSED</a> -->
                         <a href="#" class="btn btn-primary btn-square border border-white me-3" id="increase">A+</a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3" id="reset">A</a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3" id="decrease">A-</a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn btn-primary btn-square border border-white me-3"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->


        <!-- Navbar & Hero Start -->
        <div class="container-fluid sticky-top px-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-light py-3 px-4">
                <a href="index.html" class="navbar-brand p-0 d-flex align-items-center logo-wrapper">

    <img src="img/UPLOGO-new.png" alt="Logo" class="site-logo">

    <div class="logo-content">
        <div class="logo-hindi">राहत आयुक्त कार्यालय, उ.प्र. सरकार</div>
        <div class="logo-english">Office of Relief Commissioner, Govt Of Uttar Pradesh</div>
    </div>

</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto pt-2 pt-lg-0">
                        <a href="index.html" class="nav-item nav-link active">Home</a>
                        <!-- <a href="about.html" class="nav-item nav-link">About</a> -->
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">Introduction (Functions & Objectives)</a>
                                <a href="#" class="dropdown-item">Organization Structure</a>
                                <a href="#" class="dropdown-item">Commissioner's Message</a>
                                <a href="#" class="dropdown-item">Who's who</a>
                                <a href="#" class="dropdown-item">Citizen Charter</a>     
                            </div>
                        </div>
                        
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">NGO's Corner</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">NGO's Registration</a>
                                <a href="#" class="dropdown-item">Role of NGO in Disaster Management</a>       
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">Media</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">Photo Gallery</a>
                                <a href="#" class="dropdown-item">Notices / News & Updates</a>       
                            </div>
                        </div>

                         <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">COVID-19</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">DONATE TO UTTAR PRADESH COVID CARE FUND</a>
                                <a href="#" class="dropdown-item">COVID-19</a>   
                                 <a href="#" class="dropdown-item">G.O. regarding assistance of Rs. 50,000 to Covid Deceased</a>     
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">G.O. & D.D.M.P</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">Government Orders Ex Budget Release</a>
                                <a href="#" class="dropdown-item">बाढ की स्थिति (लॉग इन)</a>  
                                <a href="#" class="dropdown-item">District Disaster Management Plan</a>       
                            </div>
                        </div>

                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">G.O. & D.D.M.P</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">Government Orders Ex Budget Release</a>
                                <a href="#" class="dropdown-item">बाढ की स्थिति (लॉग इन)</a>  
                                <a href="#" class="dropdown-item">District Disaster Management Plan</a>       
                            </div>
                        </div> -->

                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown">G.O. & D.D.M.P</a>
                            <div class="dropdown-menu m-lg-0">
                                <a href="#" class="dropdown-item">Government Orders Ex Budget Release</a>
                                <a href="#" class="dropdown-item">बाढ की स्थिति (लॉग इन)</a>  
                                <a href="#" class="dropdown-item">District Disaster Management Plan</a>       
                            </div>
                        </div> -->
                        <!-- <a href="service.html" class="nav-item nav-link">Services</a> -->
                        <a href="contact.html" class="nav-item nav-link">Track Application</a>
                    </div>
                    <div class="d-flex align-items-center flex-nowrap pt-3  pt-lg-0 ms-lg-2">
                        <a href="#" class="btn btn-secondary py-2 px-4 flex-wrap flex-sm-shrink-0">Login</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Carousel Start -->
        <!-- <div class="container-fluid overflow-hidden px-0">
            <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">
                    <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active" aria-current="true" aria-label="First slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="1" aria-label="Second slide"></li>
                    <li data-bs-target="#carouselId" data-bs-slide-to="2" aria-label="Third slide"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="First slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Construction Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Second slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Construction Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel-3.jpg" class="img-fluid w-100" alt="Third slide"/>
                        <div class="carousel-caption">
                            <p class="text-uppercase text-secondary fs-4 mb-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1s" style="animation-delay: 1s;">Construction Business</p>
                            <h1 class="display-1 text-capitalize text-white mb-4 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.3s" style="animation-delay: 1.3s;">We build somethings new and consistent.</h1>
                            <p class="mb-5 fs-5 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.5s;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="d-flex justify-content-center">
                                <a class="btn btn-primary d-flex py-3 px-5 me-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Apply Now</a>
                                <a class="btn btn-secondary d-inline-block py-3 px-5 ms-2 flex-shrink-0 fadeInUp animate__animated" data-animation="fadeInUp" data-delay="1.5s" style="animation-delay: 1.7s;" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon btn-lg-square fadeInLeft animate__animated" aria-hidden="true" data-animation="fadeInLeft" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-left fa-2x"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                    <span class="carousel-control-next-icon btn-lg-square fadeInRight animate__animated" aria-hidden="true" data-animation="fadeInRight" data-delay="1.1s" style="animation-delay: 1.3s;"><i class="fas fa-chevron-right fa-2x"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> -->
        <!-- Carousel End -->
<style>

    
    .main-section {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 60px;
      align-items: flex-start;
      /* background: #000; */
      padding: 30px 40px;
      border-radius: 12px;
      overflow: hidden;
    }

    .logo-area {
      flex: 0 0 160px;
      /* text-align: center; */
      min-width: 160px;
    }

    .logo-placeholder {
      width: 160px;
      height: 160px;
      background: #fff;
      border: 2px solid #555;
      border-radius: 87px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 14px;
      color: #aaa;
      margin-bottom: 15px;
    }

    .left-text {
        width: 437px;
      /* text-align: center; */
      margin-top: 10px;
    }

    .sub-head {
          font-size: 3.1rem;
    font-style: normal;
    font-weight: 700;
    line-height: 120%;
      
      margin-bottom: 8px;
    }

    .main-head {
      font-size: 1.8rem;
      font-weight: bold;
      margin-bottom: 10px;
      font-style: normal;
    font-weight: 700;
    line-height: 120%;
    color:#fff !important;
    }

    /* .body-text {
      font-size: 1rem;
      color: #aaa;
    } */

    .content-area {
      flex: 1;
      max-width: 540px;
      min-width: 340px;
      background: #D1D1D1;
      border-radius: 10px;
      padding: 20px;
      border: 1px solid #222;
    }

    .tabs {
      display: flex;
      margin-bottom: 20px;
      border-bottom: 1px solid #444;
    }

    .tab {
      padding: 12px 28px;
      cursor: pointer;
      font-weight: bold;
      color: #000;
      transition: all 0.3s;
      user-select: none;
    }

    .tab.active,
    .tab:hover {
      color: #fff;
      background: #1a1a1a;
      /* border-radius: 8px 8px 0 0; */
    }

    .tab:first-child {
      background: #2a2a5a;
      color: white;
      /* border-radius: 8px 8px 0 0; */
    }

    .tab-content {
      display: none;
      max-height: 300px;           /* ← yahan se control hota hai kitna ooncha rahega */
      overflow-y: auto;            /* ← scrollbar yahin se aata hai */
      padding-right: 8px;          /* scrollbar ke liye thoda space */
    }

    .tab-content.active {
      display: block;
    }

    /* Scrollbar styling (modern look) */
    .tab-content::-webkit-scrollbar {
      width: 6px;
    }

    .tab-content::-webkit-scrollbar-track {
      background: #111;
      border-radius: 10px;
    }

    .tab-content::-webkit-scrollbar-thumb {
      background: #555;
      border-radius: 10px;
    }

    .tab-content::-webkit-scrollbar-thumb:hover {
      background: #777;
    }

    .announcement-card {
      background: #1a1a1a;
      padding: 18px;
      margin-bottom: 15px;
      border-radius: 8px;
      border-left: 4px solid #3a3a8a;
    }

    .date {
      font-size: 0.9rem;
      color: #888;
      margin-bottom: 8px;
    }

    .desc {
      font-size: 1rem;
      line-height: 1.5;
      margin-bottom: 10px;
    }

    .meta {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 0.9rem;
      color: #aaa;
    }

    .doc-type {
      background: #333;
      padding: 4px 10px;
      border-radius: 4px;
    }

    .link-icon {
      width: 20px;
      height: 20px;
      background: #555;
      border-radius: 50%;
      display: inline-block;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
    }

    .view-all {
      display: inline-block;
      margin: 20px auto 0;
      padding: 10px 24px;
      background: #2a2a5a;
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      transition: all 0.3s;
      border: 1px solid #3a3a8a;
    }

    .view-all:hover {
      background: #3a3a8a;
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(58, 58, 138, 0.4);
    }

    /* Responsive */
    @media (max-width: 1100px) {
      .main-section {
        justify-content: center;
        gap: 40px;
      }
    }

    @media (max-width: 1024px) {
      .main-section {
        flex-direction: column;
        align-items: center;
        gap: 40px;
      }
      .content-area {
        max-width: 100%;
      }
    }

    @media (max-width: 768px) {
      .main-section {
        padding: 20px;
      }
      .tab-content {
        max-height: 400px; /* mobile pe thoda chhota */
      }
    }

    
  </style>
</head>
<body>

<div class="container-fluid" style="background-image: 
    linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
    url('img/2.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 550px;
  color: white;
  padding: 40px;
  position: relative;">
  <div class="main-section container">

    <!-- Left -->
    <div class="logo-area wow fadeInLeft" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
      <div class="logo-placeholder"><img src="img/UPLOGO-new.png" style="height:160px;width: 160px;"></div>
      <div class="left-text">
        <div class="sub-head">आपदाओं का सामना करेंगे मिलकर </div>
        <h2 class="main-head">आपकी सहायता को हम हैं तत्पर  </h2>
        <p class="body-text" style="  font-weight: 600; line-height: 120%;">आपदा प्रबंधन हेतु जानकारी तथा सहायता के लिये राहत हेल्पलाइन नंo 1070 डायल करें</p>
      </div>
    </div>

    <!-- Right - ab scrollable + better button -->
    <div class="content-area wow fadeInRight" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight">
      <div class="tabs">
        <div class="tab active" data-tab="new">What's new</div>
        <div class="tab" data-tab="important">Important information</div>
      </div>

      <div class="tab-content active" id="new">
        <!-- yahan zyada cards daal kar test kar sakte ho -->
        <div class="announcement-card"><p class="desc">New feature: Dark mode toggle added.</p><div class="meta"><span class="doc-type">Feature</span><span class="link-icon">🔗</span></div></div>
        <div class="announcement-card"><p class="desc">Security patch released for all users.</p><div class="meta"><span class="doc-type">Security</span><span class="link-icon">🔗</span></div></div>
        <div class="announcement-card"><p class="desc">UI refresh in dashboard section.</p><div class="meta"><span class="doc-type">Update</span><span class="link-icon">🔗</span></div></div>
        <div class="announcement-card"><p class="desc">New analytics tools now live.</p><div class="meta"><span class="doc-type">Feature</span><span class="link-icon">🔗</span></div></div>
        <div class="announcement-card"><p class="desc">Maintenance completed successfully.</p><div class="meta"><span class="doc-type">Maintenance</span><span class="link-icon">🔗</span></div></div>
        <!-- <div class="announcement-card"><div class="date">10/02/2026</div><p class="desc">Policy update regarding data privacy.</p><div class="meta"><span class="doc-type">Policy</span><span class="link-icon">🔗</span></div></div> -->
        <a href="#" class="view-all">View All</a>
      </div>

      <div class="tab-content" id="important">
        <div class="announcement-card"><div class="date">05/03/2026</div><p class="desc">Upcoming scheduled downtime notice.</p><div class="meta"><span class="doc-type">Alert</span><span class="link-icon">🔗</span></div></div>
        <!-- aur cards... -->
        <a href="#" class="view-all">View All</a>
      </div>
    </div>

  </div>
</div>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const tabs = document.querySelectorAll('.tab');
    const contents = document.querySelectorAll('.tab-content');

    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        tabs.forEach(t => t.classList.remove('active'));
        contents.forEach(c => c.classList.remove('active'));
        tab.classList.add('active');
        document.getElementById(tab.getAttribute('data-tab')).classList.add('active');
      });
    });
  });
</script>

<!-- lates new css -->
 <style>
    /* LATEST NEWS BAR */

.latest-news-bar{
width:100%;
background:#ff5e15;
padding:10px 0;
}

.latest-news-container{
display:flex;
align-items:center;
max-width:1200px;
margin:auto;
padding:0 15px;
}

.latest-label{
font-weight:600;
font-size:20px;
display:flex;
align-items:center;
gap:8px;
white-space:nowrap;
}

.latest-divider{
width:1px;
height:25px;
background:#000;
margin:0 20px;
}

.latest-marquee{
flex:1;
font-size:18px;
overflow:hidden;
}

.latest-marquee marquee{
cursor:pointer;
}

/* Responsive */

@media (max-width:768px){

.latest-label{
font-size:16px;
}

.latest-marquee{
font-size:15px;
}

.latest-divider{
margin:0 10px;
}

}
 </style>
<!-- Latest News Bar START -->

<div class="latest-news-bar">
    
    <div class="latest-news-container">

        <div class="latest-label" style="color:#fff;">
             LATEST
        </div>

        <div class="latest-divider"></div>

        <div class="latest-marquee" style="color:white;">

            <marquee behavior="scroll" direction="left" scrollamount="6"
            onmouseover="this.stop();"
            onmouseout="this.start();">

            << Description of Latest Updates 1 goes here >> &nbsp;&nbsp;&nbsp;&nbsp;
            << Description of Latest Updates 2 goes here >> &nbsp;&nbsp;&nbsp;&nbsp;
            << Description of Latest Updates 3 goes here >>

            </marquee>

        </div>

    </div>

</div>

<!-- Latest News Bar END -->
        <style>
/* Circle Styles */
.circle {
  position: absolute;
  border-radius: 50%;
  overflow: hidden;
  box-shadow: 0 4px 12px rgba(0,0,0,0.2);
}
.circle img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

/* Sizes */
.circle-lg { width: 280px; height: 280px; top: 0; left: 0; }
.circle-md { width: 220px; height: 220px; top: 20px; right: 0; }
.circle-sm { width: 120px; height: 120px; bottom: 0; left: 50%; transform: translateX(-50%); }

/* Responsive */
@media (max-width: 768px) {
  .about-item-image { min-height: 200px; }
  .circle-lg { width: 180px; height: 180px; }
  .circle-md { width: 140px; height: 140px; }
  .circle-sm { width: 80px; height: 80px; }
}
</style>

        <!-- About Start -->
        <!-- <div class="container-fluid about py-5">
            <div class="container py-5">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                        <div class="about-item-image d-flex">
                            <img src="img/about.jpg" class="img-1 img-fluid w-50"  alt="">
                            <img src="img/about-3.jpg" class="img-2 img-fluid w-50"  alt="">
                            <div class="about-item-image-content">
                                <img src="img/UPLOGO-new.png" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                        <div class="about-item-content">
                            <p class="text-uppercase text-secondary fs-5 mb-0">WE ARE CONSTRUCTION COMPANY</p>
                            <h2 class="display-4 text-capitalize mb-3">Making your vision come true at the basics.</h2>
                            <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
                            </p>
                            <div class="pb-4 mb-4 border-bottom">
                                <div class="row g-4">
                                    <div class="col-lg-4">
                                        <div class="about-item-content-img">
                                            <img src="img/about-2.jpg" class="img-fluid w-100" alt="">
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="d-flex mb-4">
                                            <div class="text-secondary">
                                                <i class="fas fa-user-shield fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Building quality standards</h4>
                                        </div>
                                        <div class="d-flex">
                                            <div class="text-secondary">
                                                <i class="fas fa-users-cog fa-3x"></i>
                                            </div>
                                            <h4 class="ms-3">Certified engineer’s team</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row gy-0 gx-4 justify-content-between pb-4">
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> 100% Satisfaction</p>
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Trained Emploies</p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-dark"><i class="fas fa-check text-secondary me-1"></i> Annual Pass Programs</p>
                                    <p class="text-dark mb-0"><i class="fas fa-check text-secondary me-1"></i> Flexible and cost effective</p>
                                </div>
                            </div>
                            <a class="btn btn-secondary d-inline-block py-3 px-5 me-2 flex-shrink-0 wow fadeInUp" data-wow-delay="0.1s" href="#">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- About End -->
<style>
    /* ABOUT CIRCLE DESIGN */

/* ABOUT CIRCLE DESIGN */

.about-circle-wrapper{
position:relative;
width:100%;
height:420px;
}

/* Base circle */

.circle-img{
position:absolute;
border-radius:50%;
overflow:hidden;
box-shadow:0 10px 30px rgba(0,0,0,0.2);
}

.circle-img img{
width:100%;
height:100%;
object-fit:cover;
}

/* Circle sizes - EXACT DESIGN */

.circle-big{
width:282px;
height:282px;
left:40px;
top:0;
z-index:2;
}

.circle-medium{
width:218px;
height:218px;
left:229px;
top:7px;
z-index:3;
}

.circle-small{
width:206px;
height:206px;
left:260px;
bottom:-52px;
z-index:1;
}


/* Responsive */

@media (max-width:992px){

.about-circle-wrapper{
height:340px;
}

.circle-big{
width:220px;
height:220px;
left:10px;
}

.circle-medium{
width:170px;
height:170px;
left:150px;
}

.circle-small{
width:150px;
height:150px;
left:190px;
bottom:-5px;
}

}

@media (max-width:576px){

.about-circle-wrapper{
height:260px;
}

.circle-big{
width:170px;
height:170px;
left:0;
}

.circle-medium{
width:130px;
height:130px;
left:110px;
}

.circle-small{
width:110px;
height:110px;
left:140px;
}

}
</style>
        <!-- About Start -->
<!-- About Start -->
<div class="container-fluid about py-5" id="maincontent">
<div class="container py-5">

<div class="row align-items-center g-5">

<!-- Left Content -->
<div class="col-xl-6 wow fadeInLeft"  style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">

<div class="about-content">

<h5 class="text-secondary text-uppercase mb-3">About Office of Relief Commissioner</h5>

<h2 class="display-5 mb-4">
About Office of Relief Commissioner
</h2>

<p class="mb-4" style="text-align: justify;">
The office of Relief Commissioner is nodal for effective management, response & relief, rehabilitation and reconstruction in case of both natural and human induced disasters in the State. Office of Relief Commissioner is also responsible for legislation and policy making with regard to disaster management. It also plays and important role in mainstreaming disaster risk reduction in development plans of concerned departments. Office of Relief Commissioner along with Uttar State Disaster Management Authority is responsible to build a safe and disaster-resilient Uttar Pradesh by developing a, proactive, multi-disaster and technology-driven strategy for disaster management. This will be achieved through strengthening ongoing efforts in building culture of prevention, mitigation and preparedness in state through collective efforts of the government with special focus on most vulnerable communities.
</p>

<div class="row mb-4">

<div class="col-md-6" >
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
<div class="col-xl-6 wow fadeInLeft" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInRight;" >

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


<!-- slider start -->
<div class="disaster-wrapper wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">

<button class="dis-nav prev">&#10094;</button>

<div class="disaster-slider">
<div class="dis-track">

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/2204/2204349.png">
<p>नाव दुर्घटना</p>
</div>

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/1779/1779940.png">
<p>बादल फटना</p>
</div>

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/414/414927.png">
<p>चक्रवात</p>
</div>

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/2913/2913465.png">
<p>डूबने के कारण मृत्यु</p>
</div>

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/684/684908.png">
<p>बोरवेल में गिरना</p>
</div>

<div class="dis-item">
<img src="https://cdn-icons-png.flaticon.com/512/619/619034.png">
<p>अग्निकांड</p>
</div>

</div>
</div>

<button class="dis-nav next">&#10095;</button>

</div>



<style>

.disaster-wrapper{
background:#25548a;
padding:40px 60px;
position:relative;
overflow:hidden;
}

.disaster-slider{
overflow:hidden;
width:100%;
}

.dis-track{
display:flex;
transition:transform .5s ease;
}

.dis-item{
flex:0 0 16.66%;
text-align:center;
color:#fff;
}

.dis-item img{
width:60px;
margin-bottom:10px;
filter:brightness(0) invert(1);
}

.dis-item p{
font-size:18px;
margin:0;
}

.dis-nav{
position:absolute;
top:50%;
transform:translateY(-50%);
width:36px;
height:36px;
border-radius:50%;
border:none;
cursor:pointer;
background:#fff;
font-size:18px;
}

.prev{left:15px;}
.next{right:15px;}


/* responsive */

@media(max-width:992px){

.dis-item{
flex:0 0 33.33%;
}

}

@media(max-width:600px){

.dis-item{
flex:0 0 50%;
}

}

</style>



<script>

document.addEventListener("DOMContentLoaded",function(){

const track=document.querySelector(".dis-track");
let items=document.querySelectorAll(".dis-item");

const next=document.querySelector(".next");
const prev=document.querySelector(".prev");

/* clone items for infinite loop */

items.forEach(item=>{
let clone=item.cloneNode(true);
track.appendChild(clone);
});

items=document.querySelectorAll(".dis-item");

let index=0;

function slide(){

const width=items[0].offsetWidth;

track.style.transform="translateX(-"+(index*width)+"px)";

}

/* next */

next.onclick=function(){

index++;

slide();

}

/* prev */

prev.onclick=function(){

index--;

if(index<0){

index=items.length/2;

}

slide();

}

/* auto slide */

setInterval(()=>{

index++;

if(index>=items.length/2){

index=0;

track.style.transition="none";

slide();

setTimeout(()=>{

track.style.transition="transform .5s ease";

},50);

}

slide();

},2500);

});

</script>
 <!-- slider end -->

 <!-- ============Our Minister Start -->
<section class="container-fluid ministers-section py-5">
    <div class="container py-5 wow fadeInUp" data-wow-delay="0.2s" style=" visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">

        <div class="text-center mb-5">
            <h2 class="minister-title wow fadeInUp" data-wow-delay="0.4s" style=" visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">Our Ministers</h2>
        </div>

        <div class="minister-box">

            <div class="row align-items-center">

                <!-- Prime Minister -->
                <div class="col-lg-6 text-center minister-left wow fadeInLeft" data-wow-delay="0.2s" style=" visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">

                    <img src="img/Prime_Minister_Narendra_Modi.png" class="pm-img" alt="Narendra Modi">

                    <p class="pm-post" >Hon’ble Prime Minister</p>
                    <h4 class="pm-name" style="color:white">Shri Narendra Modi</h4>

                    <div class="social-icons">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>

                </div>

                <!-- Other Ministers -->
                <div class="col-lg-6 minister-right">

    <!-- Minister 1 -->
    <div class="minister-row wow fadeInRight" data-wow-delay="0.2s" style=" visibility: visible; animation-delay: 0.2s; animation-name: fadeInRight;">
        <img src="img/Ashwini-Vaishnaw1.avif" class="minister-img-lg" style="background-color: #fff;">

        <div class="minister-info">
            <p class="minister-post">Minister of Railways</p>
            <h5 class="minister-name">Shri Ashwini Vaishnaw</h5>
        </div>
    </div>

    <!-- Minister 2 -->
    <div class="minister-row wow fadeInRight" data-wow-delay="0.2s" style=" visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
        <img src="img/CM_YogisirM.png" class="minister-img-sm" style="background-color: #fff;">

        <div class="minister-info">
            <p class="minister-post">Chief minister</p>
            <h5 class="minister-name">Shri Yogi Adityanath</h5>
        </div>
    </div>

    <!-- Minister 3 -->
    <div class="minister-row wow fadeInRight" data-wow-delay="0.2s" style=" visibility: visible; animation-delay: 0.4s; animation-name: fadeInRight;">
        <img src="img/images.jfif" class="minister-img-sm">

        <div class="minister-info">
            <p class="minister-post">Minister of Defence</p>
            <h5 class="minister-name"> Shri Rajnath Singh</h5>
        </div>
    </div>

</div>

            </div>

        </div>

    </div>
</section>

 <!-- ============Our Minister End===================== -->
        <!-- Features Start -->
        <!-- <div class="container-fluid feature bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">WHy US</p>
                    <h2 class="display-4 text-capitalize mb-3">Why Choose Us</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                                <i class="fas fa-city text-primary fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4">Expert Engineer</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                                <i class="fas fa-funnel-dollar text-primary fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4">Free Estimates</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="feature-item text-center border p-5">
                            <div class="feature-img bg-secondary d-inline-flex p-4">
                                <i class="fas fa-tools text-primary fa-5x"></i>
                            </div>
                            <a href="#" class="h4 d-block my-4">Quality Materials</a>
                            <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod voluptatem provident incidunt obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Features End -->

    <!-- ===========================Our Gallery Start===================== -->

<div class="container-fluid" style="background-color: #f2f3f5 !important;padding: 60px 0 80px 0;">
     <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <!-- <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p> -->
                    <h2 class="display-4 text-capitalize mb-3">Our Gallery</h2>
                </div>
<div id="sync-wrapper-v5" style="background-color: #f2f3f5 !important;">
    <button class="nav-arrow prev-v5">❮</button>
    <button class="nav-arrow next-v5">❯</button>

    <div class="swiper mySwiperV5 wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
        <div class="swiper-wrapper">
            
            <div class="swiper-slide">
                <div class="grid-layout">
                    <div class="top-row">
                        <div class="card-ui w-618">
                            <div class="img-box"><h2>IMAGE</h2><img src="img/n.avif"></p></div>
                            <div class="footer-ui"><span><i class="fa fa-map-marker"></i> New Delhi</span><span>🖼️ +12 ➔</span></div>
                        </div>
                        <div class="card-ui w-558">
                            <div class="img-box"><img src="img/carousel-3.jpg"></div>
                            <div class="footer-ui"><span><i class="fa fa-map-marker"></i> Old Delhi</span><span><i class="fa fa-image"></i> +10 ➔</span></div>
                        </div>
                    </div>
                    <div class="bottom-row">
                        <div class="card-ui"><div class="img-box"><img src="img/blog-2.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Ghaziabad</span><span><i class="fa fa-image"></i> +12 ➔</span></div></div>
                        <div class="card-ui"><div class="img-box"><img src="img/blog-2.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Ghaziabad</span><span><i class="fa fa-image"></i> +12 ➔</span></div></div>
                        <div class="card-ui"><div class="img-box"><img src="img/blog-2.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Ghaziabad</span><span><i class="fa fa-image"></i> +12 ➔</span></div></div>
                        
                        <!-- <div class="card-ui"><div class="img-box"><h2>IMAGE</h2><p>386 × 332</p></div><div class="footer-ui"><span>📍 Ghaziabad</span><span>🖼️ +12 ➔</span></div></div> -->
                    </div>
                </div>
            </div>

            <div class="swiper-slide">
                <div class="grid-layout">
                    <div class="top-row">
                        <div class="card-ui w-618">
                            <div class="img-box"><img src="img/footer-img.jpg"></div>
                            <div class="footer-ui"><span><i class="fa fa-map-marker"></i> Sector 62</span><span>🖼️ +8 ➔</span></div>
                        </div>
                        <div class="card-ui w-558">
                            <div class="img-box"><img src="img/footer-img.jpg"></div>
                            <div class="footer-ui"><span><i class="fa fa-map-marker"></i> Cyber City</span><span><i class="fa fa-image"></i> +15 ➔</span></div>
                        </div>
                    </div>
                    <div class="bottom-row">
                        <div class="card-ui"><div class="img-box"><img src="img/2.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Meerut</span><span><i class="fa fa-image"></i> +5 ➔</span></div></div>
                        <div class="card-ui"><div class="img-box"><img src="img/footer-img.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Aligarh</span><span><i class="fa fa-image"></i> +9 ➔</span></div></div>
                        <div class="card-ui"><div class="img-box"><img src="img/footer-img.jpg"></div><div class="footer-ui"><span><i class="fa fa-map-marker"></i> Agra</span><span><i class="fa fa-image"></i> +20 ➔</span></div></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
</div>

<!-- =====================Our Gallery End==================== -->



<!-- =================Social Media Start================= -->
  <div class="container-fluid py-5" >
<section id="rahat-social-section">
    <div class="rs-grid">
        
        <div class="rs-box wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="rs-header">Tweets post from Rahat</div>
            <div class="rs-content">
                <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" class="" title="X Post" src="https://platform.twitter.com/embed/Tweet.html?dnt=false&amp;embedId=twitter-widget-0&amp;features=eyJ0ZndfdGltZWxpbmVfbGlzdCI6eyJidWNrZXQiOltdLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X2ZvbGxvd2VyX2NvdW50X3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9iYWNrZW5kIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19yZWZzcmNfc2Vzc2lvbiI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfZm9zbnJfc29mdF9pbnRlcnZlbnRpb25zX2VuYWJsZWQiOnsiYnVja2V0Ijoib24iLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X21peGVkX21lZGlhXzE1ODk3Ijp7ImJ1Y2tldCI6InRyZWF0bWVudCIsInZlcnNpb24iOm51bGx9LCJ0ZndfZXhwZXJpbWVudHNfY29va2llX2V4cGlyYXRpb24iOnsiYnVja2V0IjoxMjA5NjAwLCJ2ZXJzaW9uIjpudWxsfSwidGZ3X3Nob3dfYmlyZHdhdGNoX3Bpdm90c19lbmFibGVkIjp7ImJ1Y2tldCI6Im9uIiwidmVyc2lvbiI6bnVsbH0sInRmd19kdXBsaWNhdGVfc2NyaWJlc190b19zZXR0aW5ncyI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdXNlX3Byb2ZpbGVfaW1hZ2Vfc2hhcGVfZW5hYmxlZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9LCJ0ZndfdmlkZW9faGxzX2R5bmFtaWNfbWFuaWZlc3RzXzE1MDgyIjp7ImJ1Y2tldCI6InRydWVfYml0cmF0ZSIsInZlcnNpb24iOm51bGx9LCJ0ZndfbGVnYWN5X3RpbWVsaW5lX3N1bnNldCI6eyJidWNrZXQiOnRydWUsInZlcnNpb24iOm51bGx9LCJ0ZndfdHdlZXRfZWRpdF9mcm9udGVuZCI6eyJidWNrZXQiOiJvbiIsInZlcnNpb24iOm51bGx9fQ%3D%3D&amp;frame=false&amp;hideCard=false&amp;hideThread=false&amp;id=1996556681564873094&amp;lang=en&amp;origin=https%3A%2F%2Frahat.up.nic.in%2F&amp;sessionId=102690ee956227df5f4e4f7f4992be872ea29c42&amp;theme=light&amp;widgetsVersion=2615f7e52b7e0%3A1702314776716&amp;width=550px" style="position: static; visibility: visible; width: 378px; height: 748px; display: block; flex-grow: 1;" data-tweet-id="1996556681564873094"></iframe>
            </div>
        </div>

        <div class="rs-box wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="rs-header">Instagram post from Rahat</div>
            <div class="rs-content">
                <blockquote 
    class="instagram-media"
    data-instgrm-permalink="https://www.instagram.com/rahat_up/"
    data-instgrm-version="14"
    style="width:100%;">
  </blockquote>
                <!-- <blockquote class="instagram-media" data-instgrm-permalink="https://www.instagram.com/rahat_up/" data-instgrm-version="14" style="width:100%; margin:0;"></blockquote> -->
                <script async src="https://www.instagram.com/embed.js"></script>
            </div>
        </div>

        <div class="rs-box wow fadeInUp" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
            <div class="rs-header">Facebook post from Rahat</div>
            <div class="rs-content">
                <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fuprahat.aayukt.7&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&app_id=" 
                    style="width: 100%; height:100%; border:none;" scrolling="yes">
                </iframe>
            </div>
        </div>

    </div>
    
</section>
</div>


<!-- =================Soical Media End================= -->

<!-- =================Counter Section Start============== -->



<section class="stats-section">
<div class="container">
<div class="row g-4">

<div class="col-lg-3 col-md-6">
<div class="stat-box">
<div class="icon"><i class="fas fa-users"></i></div>
<h2 class="counter">155.5</h2>
<p>Million Beneficiaries</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-box">
<div class="icon"><i class="fas fa-briefcase"></i></div>
<h2 class="counter">500</h2>
<p>Projects Completed</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-box">
<div class="icon"><i class="fas fa-building"></i></div>
<h2 class="counter">798</h2>
<p>District Offices</p>
</div>
</div>

<div class="col-lg-3 col-md-6">
<div class="stat-box">
<div class="icon"><i class="fas fa-handshake"></i></div>
<h2 class="counter">798</h2>
<p>Partner Organizations</p>
</div>
</div>

</div>
</div>
</section>

<!-- <div style="height:100vh; background-color: #f5f5b5"></div>
<div style="height:100vh; background-color: #a5a5a5"></div>
<div class="wrapper">
  <p class="counter">155.5</p>
  <p class="counter">500</p>
  <p class="counter">798</p>
</div> -->

<!-- =================Counter Section  End=============== -->



        <!-- Services Start -->
        <div class="container-fluid service py-5">
            <div class="container py-5">
                <!-- <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">Our Services</p>
                    <h2 class="display-4 text-capitalize mb-3">our service is creative, & decent</h2>
                </div> -->
                <div class="ns-wrapper">

                <div class="ns-flex">

  <!-- LEFT -->
  <div class="ns-news">
    <div class="ns-title">📰 News / Events (What's New)</div>

    <div class="ns-scroll">

      <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">Immediate action to be taken for enforcement of Model Code of Conduct after announcement of General Elections to Legislative Assemblies of the States of Assam, Kerala, Tamil Nadu and West Bengal and UT of Puducherry, 2026 - regarding enforcement of Model Code of Conduct 
</div>
          <div class="ns-file">(6.45 MB, 19 Jan 2026)</div>
        </div>
      </div>

      <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">Scheme Guidelines 2025-26 enforcement of Model Code of Conduct </div>
          <div class="ns-file">(1.31 MB, 09 Jan 2026)</div>
        </div>
      </div>

      <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">Waste Pickers under NAMASTE</div>
          <div class="ns-file">(712 KB, 15 Dec 2025)</div>
        </div>
      </div>

      <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">National Sanitation Ecosystem</div>
          <div class="ns-file">(829 KB, 15 Dec 2025)</div>
        </div>
      </div>

       <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">National Sanitation Ecosystem</div>
          <div class="ns-file">(829 KB, 15 Dec 2025)</div>
        </div>
      </div>

       <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">National Sanitation Ecosystem</div>
          <div class="ns-file">(829 KB, 15 Dec 2025)</div>
        </div>
      </div>

       <div class="ns-item">
        <div class="ns-dot"></div>
        <div>
          <div class="ns-text">National Sanitation Ecosystem</div>
          <div class="ns-file">(829 KB, 15 Dec 2025)</div>
        </div>
      </div>

    </div>

    <button class="ns-btn">View All</button>
  </div>

  <!-- RIGHT -->
  <div class="ns-scheme">
    <div class="ns-scheme-title">📊 Major Schemes</div>

    <div class="ns-grid">

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
        <div class="ns-card-text">e-ANUDAAN</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/4320/4320337.png">
        <div class="ns-card-text">Nasha Mukt Bharat</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1995/1995574.png">
        <div class="ns-card-text">PM-AJAY</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png">
        <div class="ns-card-text">Senior Citizens Welfare</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921822.png">
        <div class="ns-card-text">Scholarship Scheme</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png">
        <div class="ns-card-text">SMILE Portal</div>
      </div>
      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/1946/1946429.png">
        <div class="ns-card-text">Senior Citizens Welfare</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/2921/2921822.png">
        <div class="ns-card-text">Scholarship Scheme</div>
      </div>

      <div class="ns-card">
        <img src="https://cdn-icons-png.flaticon.com/512/3135/3135768.png">
        <div class="ns-card-text">SMILE Portal</div>
      </div>

    </div>
  </div>

</div>
</div>
            </div>
        </div>
        <!-- Services End -->


        <!-- Blog Start -->
        <!-- <div class="container-fluid blog bg-light py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <p class="text-uppercase text-secondary fs-5 mb-0">News & Blog</p>
                    <h2 class="display-4 text-capitalize mb-3">Our latest news post and articles?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-1.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-2.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="blog-item h-100">
                            <div class="blog-img">
                                <img src="img/blog-3.jpg" class="img-fluid w-100" alt="">
                            </div>
                            <div class="blog-content p-4">
                                <div class="d-flex justify-content-between mb-3">
                                    <p class="mb-0"><i class="fa fa-calendar-check text-secondary me-1"></i> 26 April 2025</p>
                                    <p class="mb-0"><i class="fa fa-user text-secondary me-1"></i> Admin</p>
                                </div>
                                <a href="#" class="h4 d-block mb-4">Emerging Tech Trends What to in the Next Decade</a>
                                <a class="btn btn-secondary py-2 px-4" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Blog End -->


        <!-- Footer Start -->
        <div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <div class="footer-item">
                                <h4 class="text-white mb-4">Newsletter</h4>
                                <p class="mb-3">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit.</p>
                                <!-- <div class="position-relative mx-auto">
                                    <input class="form-control w-100 py-3 ps-4 pe-5" type="text" placeholder="Enter your email">
                                    <button type="button" class="btn btn-secondary position-absolute top-0 end-0 py-2 mt-2 me-2">SignUp</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Explore</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Home</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Services</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Citizen's Corner</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ's</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> e Pass</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>RTI</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Our Services</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Contact Us</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Feedback</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i>PAC </a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> SOP</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Login</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Track Application</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Design Build</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-3">
                        <div class="footer-item d-flex flex-column">
                            <h4 class="text-white mb-4">Contact Info</h4>
                            <a href=""><i class="fa fa-map-marker-alt me-2"></i> 123 Street, New York, USA</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-envelope me-2"></i> info@example.com</a>
                            <a href=""><i class="fas fa-phone me-2"></i> +012 345 67890</a>
                            <a href="" class="mb-3"><i class="fas fa-print me-2"></i> +012 345 67890</a>
                            <div class="footer-btn d-flex align-items-center">
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-facebook-f text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-twitter text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-2" href=""><i class="fab fa-instagram text-white"></i></a>
                                <a class="btn btn-secondary btn-md-square me-0" href=""><i class="fab fa-linkedin-in text-white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        
        <!-- Copyright Start -->
        <div class="container-fluid copyright py-4">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-md-6 text-center text-md-start mb-md-0">
                        <span class="text-body"><a href="#" class="border-bottom text-white">Copyright © UpRahat 2026 </a></span>
                    </div>
                    <div class="col-md-6 text-center text-md-end text-body">
                        
                        Designed By <a class="border-bottom text-white" href="https://techsseract.com/">CMP Techsseract LLP</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Copyright End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-secondary btn-lg-square back-to-top"><i class="fa fa-arrow-up"></i></a>   

        
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
     <script src="js/custom.js"></script>
    </body>

</html>