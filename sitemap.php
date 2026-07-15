<?php
include('header.php');
?>
<style>
    /* Wrapper */
    .menu-wrapper {
        max-width: 1200px;
        margin: 40px auto;
        background: #e6e6e6;
        border-radius: 20px;
        border: 2px solid #1100c8;
        padding: 40px;
    }

    /* Grid */
    .menu-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
    }

    /* Section Title */
    .menu-title {
        font-size: 24px;
        font-weight: bold;
        color: #000;
        margin-bottom: 15px;
        border-bottom: 1px solid #bbb;
        padding-bottom: 10px;
    }

    /* Tree Menu */
    .tree ul {
        list-style: none;
        padding-left: 20px;
        position: relative;
    }

    .tree ul::before {
        content: "";
        position: absolute;
        top: 0;
        left: 8px;
        border-left: 2px dotted #777;
        height: 100%;
    }

    /* List Item */
    .tree li {
        position: relative;
        margin: 10px 0;
        padding-left: 25px;
    }

    /* Horizontal line */
    .tree li::before {
        content: "";
        position: absolute;
        top: 12px;
        left: 8px;
        width: 15px;
        border-top: 2px dotted #777;
    }

    /* Link style */
    .tree a {
        display: inline-block;
        background: #f2f2f2;
        padding: 5px 12px;
        border-radius: 15px;
        border: 1px solid #ccc;
        text-decoration: none;
        color: #000;
        font-size: 14px;
        transition: 0.3s;
    }

    .tree a:hover {
        background: #dcedc8;
        border-color: #66bb6a;
    }

    /* Responsive */
    @media(max-width: 768px) {
        .menu-grid {
            grid-template-columns: 1fr;
        }

        .menu-wrapper {
            padding: 20px;
        }
    }
</style>

</head>

<body>

    <div class="menu-wrapper">
        <div class="menu-grid">

            <!-- LEFT -->
            <div>
                <div class="menu-title">Primary Menu</div>

                <div class="tree">
                    <ul>
                        <li><a href="index.php">Home</a></li>

                        <li>
                            <a href="about.php">About Us</a>
                            <ul>
                                <li><a href="#">Introduction (Functions & Objectives)</a></li>
                                <li><a href="#">Organization Structure</a></li>
                                <li><a href="#">Commissioner's Message</a></li>
                                <li><a href="#"> Who's who</a></li>

                                <li><a href="#"> Citizen Charter</a></li>

                            </ul>
                            <a href="about.php">NGO's Corner</a>
                            <ul>
                                <li><a href="#">NGO's Registration</a></li>
                                <li><a href="#">Role of NGO in Disaster Management</a></li>

                            </ul>

                            <a href="about.php">Media</a>
                            <ul>
                                <li><a href="#">Photo Gallery</a></li>
                                <li><a href="#">Notices / News & Updates</a></li>
                            </ul>
                             <a href="about.php">COVID-19</a>
                            <ul>
                                <li><a href="#">DONATE TO UTTAR PRADESH COVID CARE FUND</a></li>
                                <li><a href="#">COVID-19</a></li>
                                <li><a href="#"> G.O. regarding assistance of Rs. 50,000 to Covid Deceased</a></li>
                            </ul>

                             <a href="about.php">G.O. & D.D.M.P</a>
                            <ul>
                                <li><a href="#">Government Orders Ex Budget Release</a></li>
                                <li><a href="#">बाढ की स्थिति (लॉग इन)</a></li>
                                <li><a href="#"> District Disaster Management Plan</a></li>
                            </ul>

                             <a href="about.php">Citizen's Corner</a>
                            <ul>
                                <li><a href="#">Citizen's Corner</a></li>
                                <li><a href="#">FAQ's</a></li>
                                <li><a href="#"> e Pass</a></li>
                            </ul>

                             <a href="about.php">Contact</a>
                            <ul>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Feedback</a></li>
                                <li><a href="#"> PAC</a></li>
                                <li><a href="#"> SOP</a></li>
                            </ul>
                        </li>
                        <li><a href="index.php">Login</a></li>
                        <li><a href="index.php">Track Application</a></li>
                    </ul>
                </div>
            </div>

            <!-- RIGHT -->
            <div>

                <div class="menu-title">Important Links</div>
                <div class="tree">
                    <ul>
                        <li><a href="#">Ministry of Home Affairs (DM Division)</a></li>
                        <li><a href="https://www.ndma.gov.in/">National Disaster Management Authority(NDMA)</a></li>
                        <li><a href="https://nidm.gov.in/">National Institute of Disaster Management(NIDM)</a></li>
                        <li><a href="https://www.ndrf.gov.in/">NDRF -INDIA</a></li>
                        <li><a href="https://www.nrsc.gov.in/nrscnew/">National Remote Sensing Centre</a></li>
                        <li><a href="https://bhuvan-app1.nrsc.gov.in/bhuvandisaster/#flood">Bhuvan - Disaster Management Support Services</a></li>
                        <li><a href="https://www.moha.gov.np/">Govt of Nepal Disaster Website</a></li>
                        <li><a href="http://www.hydrology.gov.np/#/?_k=i0cjms">Nepal Webiste For Department of Hydrology and Meteorology</a></li>
                        <li><a href="https://upsdma.up.nic.in/">Uttar Pradesh Disaster Management Authority</a></li>
                        <li><a href="http://www.rsacup.org.in/">Remote Sensing Application Centre, Uttar Pradesh</a></li>
                        <li><a href="https://idup.gov.in/en">Irrigation Department, GoUP</a></li>
                        <li><a href="https://www.india.gov.in/">Citizen Online Services</a></li>
                        <li><a href="#">UPGOV</a></li>
                        <li><a href="#">Revenue Dept , GoUP</a></li>
                        <li><a href="#">Shasanadesh, GoUP</a></li>
                        <li><a href="#">Jansunwai (IGRS)</a></li>
                        <li><a href="#">DARPAN (CM Dashboard)</a></li>
                        <li><a href="#">Program Implementation Department Govt. of UP</a></li>
                         
                        <li><a href="#">Central Water Commission (Flood Forecast)</a></li>
                        <li><a href="#">India Meteorological Department</a></li>
                        <li><a href="#">National Disaster Management Information System (NDMIS)</a></li>
                        <li><a href="#">India Disaster Resource Network (IDRN)</a></li>
                        <li><a href="#">Flood Management Information System (FMISC), UP</a></li>
                        

                    </ul>
                </div>

                <div class="menu-title" style="margin-top:30px;">Information</div>
                <div class="tree">
                    <ul>
                        <li><a href="index.php">Right to Information</a></li>
    
                    </ul>
                </div>

            </div>

        </div>
    </div>
    <?php
    include('footer.php');
    ?>