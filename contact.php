<?php
include('header.php');
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">Contact Us</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">Contact Us</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

 <!-- Contact Start -->
        <div class="container-fluid contact bg-light py-5">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.2s">
                        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
                            <p class="text-uppercase text-secondary fs-5 mb-0">Let’s Connect</p>
                            <h2 class="display-4 text-capitalize mb-3">Send Your Message</h2>
                            <h4 class="lh-base mb-0">For official communication and assistance, please use the contact details provided below.</h4>
                        </div>
                        <form>
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="phone" class="form-control" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" class="form-control" id="project" placeholder="Project">
                                        <label for="project">Your Project</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating border border-secondary">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating border border-secondary">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.4s">
                        <div class="contact-map h-100 w-100">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14238.77805978422!2d80.950449!3d26.849667!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1775023274801!5m2!1sen!2sin" width="600" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-100 w-100"></iframe>
                            <!-- <iframe class="h-100 w-100" 
                            style="height: 500px;" src="https://maps.app.goo.gl/CGLqkzbLW6PcVGs96" 
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
  
    <style>
        :root {
            --gov-dark-blue: #002e5b;
            --gov-light-blue: #f0f5ff;
            --accent-orange: #ff9933;
            --border-gray: #d1d9e6;
            --text-main: #333;
        }

       

        .main-wrapper {
            max-width: 1200px;
            margin: 40px auto;
            display: grid;
            grid-template-columns: 350px 1fr; /* Sidebar + Content Area */
            gap: 30px;
        }

        /* --- Sidebar & Quick Cards --- */
        .sidebar { display: flex; flex-direction: column; gap: 20px; }

        .quick-card {
            background: #fff;
            border-radius: 12px;
            border-top: 6px solid var(--gov-dark-blue);
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
            padding: 20px;
        }

        .quick-card.emergency { border-top-color: var(--accent-orange); }

        .card-title {
            font-size: 1.1rem;
            color: var(--gov-dark-blue);
            font-weight: 700;
            margin-bottom: 15px;
            border-bottom: 2px solid var(--gov-light-blue);
            padding-bottom: 8px;
            text-transform: uppercase;
        }

        .info-group { margin-bottom: 10px; font-size: 0.95rem; }
        .info-label { display: block; color: #666; font-weight: 600; font-size: 0.8rem; }
        .info-value { display: block; color: var(--text-main); font-weight: 700; text-decoration: none; }
        .info-value:hover { color: var(--accent-orange); }

        .map-frame {
            width: 100%;
            height: 250px;
            border-radius: 12px;
            border: 2px solid #fff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* --- Directory Table --- */
        .directory-panel {
            background: #fff;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.08);
        }

        .panel-header {
            color: var(--gov-dark-blue);
            margin-bottom: 20px;
            border-left: 5px solid var(--accent-orange);
            padding-left: 15px;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
        }

        .custom-table th {
            background-color: var(--gov-dark-blue);
            color: white;
            padding: 15px;
            text-align: left;
            font-weight: 600;
        }

        .custom-table td {
            padding: 15px;
            border-bottom: 1px solid var(--border-gray);
            vertical-align: top;
        }

        .custom-table tr:hover { background-color: var(--gov-light-blue); }

        .desig { font-size: 0.85rem; color: #555; display: block; margin-top: 5px; }
        .email-link { color: #d35400; font-weight: 600; text-decoration: none; }

        /* --- Responsive View --- */
        @media (max-width: 992px) {
            .main-wrapper { grid-template-columns: 1fr; margin: 10px; }
            .sidebar { order: 2; }
            .directory-panel { order: 1; }
        }

        @media (max-width: 600px) {
            /* Table to Cards for Mobile */
            .custom-table thead { display: none; }
            .custom-table td {
                display: block;
                padding: 10px 15px;
                text-align: right;
                border-bottom: none;
            }
            .custom-table tr { 
                display: block; 
                border: 1px solid var(--border-gray); 
                margin-bottom: 15px; 
                border-radius: 8px;
            }
            .custom-table td::before {
                content: attr(data-label);
                float: left;
                font-weight: 700;
                color: var(--gov-dark-blue);
            }
        }
    </style>


<div class="main-wrapper">
    
    <!-- Left Section: Side Info -->
    <aside class="sidebar">
        <!-- Control Room Card -->
        <div class="quick-card">
            <div class="card-title">State Control Room</div>
            <div class="info-group">
                <span class="info-label">Phone</span>
                <a href="tel:05222237515" class="info-value">0522-2237515</a>
                <a href="tel:05222235121" class="info-value">2235121</a>
            </div>
            <div class="info-group">
                <span class="info-label">Fax</span>
                <span class="info-value">2238084, 2236305</span>
            </div>
        </div>

        <!-- Helpline Card -->
        <div class="quick-card emergency">
            <div class="card-title">Helpline Numbers</div>
            <div class="info-group">
                <span class="info-label">Control Room Delhi</span>
                <span class="info-value">011-1078</span>
            </div>
            <div class="info-group">
                <span class="info-label">State Helpline (Toll Free)</span>
                <a href="tel:1070" class="info-value">1070</a>
            </div>
            <div class="info-group">
                <span class="info-label">District Helpline (Toll Free)</span>
                <a href="tel:1077" class="info-value">1077</a>
            </div>
        </div>

       
    </aside>

    <!-- Right Section: Table Directory -->
    <main class="directory-panel">
        <h2 class="panel-header">Contact Directory</h2>
        <table class="custom-table">
            <thead>
                <tr>
                    <th style="width: 50px;">SN</th>
                    <th>Name & Designation</th>
                    <th>Phone No</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="SN">1</td>
                    <td data-label="Name">
                        <strong>Dr. Hrishikesh Bhaskar Yashod</strong>
                        <span class="desig">Relief Commissioner, Shastri Bhawan, Lucknow</span>
                    </td>
                    <td data-label="Phone">0522-2238200, 9454441070</td>
                    <td data-label="Email"><span class="email-link">rahat[at]nic[dot]in</span></td>
                </tr>
                <tr>
                    <td data-label="SN">2</td>
                    <td data-label="Name">
                        <strong>Dr. Manoj Kumar</strong>
                        <span class="desig">OSD</span>
                    </td>
                    <td data-label="Phone">9984666000</td>
                    <td data-label="Email">-</td>
                </tr>
                <tr>
                    <td data-label="SN">3</td>
                    <td data-label="Name">State Helpline No. (Toll Free)</td>
                    <td data-label="Phone">1070</td>
                    <td data-label="Email">-</td>
                </tr>
                <tr>
                    <td data-label="SN">4</td>
                    <td data-label="Name">State Control Room (Landline)</td>
                    <td data-label="Phone">9454441081</td>
                    <td data-label="Email">-</td>
                </tr>
                <tr>
                    <td data-label="SN">5</td>
                    <td data-label="Name">District Helpline No. (Toll Free)</td>
                    <td data-label="Phone">1077</td>
                    <td data-label="Email">-</td>
                </tr>
            </tbody>
        </table>
    </main>

</div>



<?php
include('footer.php');
?>