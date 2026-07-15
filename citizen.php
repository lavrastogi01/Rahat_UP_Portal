<?php include('header.php'); ?>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>
.charter-section {
  /* background: linear-gradient(135deg, #eef2f7, #e3ecf7); */
  padding: 70px 0;
}

/* Tabs Container */
.tabs {
  max-width: 950px;
  margin: auto;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 15px;
  padding: 25px;
  backdrop-filter: blur(10px);
  box-shadow: 0 10px 35px rgba(0,0,0,0.1);
}

/* Hide radio buttons */
.tabs input {
  display: none;
}

/* Tab Labels */
.tabs label {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  padding: 12px 22px;
  margin: 5px 8px 5px 0;
  cursor: pointer;
  background: #e9eff8;
  border-radius: 30px;
  font-weight: 600;
  font-size: 14px;
  transition: all 0.3s ease;
}

/* Hover */
.tabs label:hover {
      background: linear-gradient(45deg, #ff5e15, #A61C22);
  /* background: linear-gradient(45deg, #007bff, #00c6ff); */
  color: #fff;
  transform: translateY(-2px);
}

/* Active tab */
#tab1:checked ~ label[for="tab1"],
#tab2:checked ~ label[for="tab2"],
#tab3:checked ~ label[for="tab3"] {

  background: linear-gradient(45deg, #ff5e15, #A61C22);
  /* background: linear-gradient(45deg, #007bff, #00c6ff); */
  color: #fff;
  box-shadow: 0 4px 15px rgba(0,123,255,0.4);
}

/* Content box */
.tab-content {
  display: none;
  margin-top: 25px;
  padding: 25px;
  border-radius: 12px;
  background: #ffffff;
  border-left: 5px solid #A61C22;
  animation: fadeSlide 0.4s ease;
}

/* Show active content */
#tab1:checked ~ #content1,
#tab2:checked ~ #content2,
#tab3:checked ~ #content3 {
  display: block;
}

/* Paragraph */
.tab-content p {
  font-size: 15px;
  line-height: 1.8;
  color: #444;
}

/* List style */
.tab-content ul {
  padding-left: 0;
  margin: 0;
}

.tab-content li {
  list-style: none;
  margin-bottom: 12px;
  padding: 10px 15px;
  background: #f4f8ff;
  border-radius: 8px;
  position: relative;
  transition: 0.3s;
}

/* Hover list */
.tab-content li:hover {
  background: #e6f0ff;
  transform: translateX(5px);
}

/* Custom bullet */
.tab-content li::before {
  content: "✔";
  margin-right: 10px;
  color: #007bff;
  font-weight: bold;
}

/* Animation */
@keyframes fadeSlide {
  from {
    opacity: 0;
    transform: translateY(15px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Mobile */
@media (max-width: 768px) {
  .tabs label {
    display: block;
    width: 100%;
    text-align: center;
  }

  .tab-content {
    padding: 15px;
  }
}
</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">Citizen Charter</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">Citizen Charter</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<section class="charter-section">
  <div class="container">

    <div class="tabs">

      <input type="radio" name="tabs" id="tab1" checked>
      <label for="tab1"><i class="fas fa-user"></i> Citizen Charter</label>

      <input type="radio" name="tabs" id="tab2">
      <label for="tab2"><i class="fas fa-bullseye"></i> Objectives</label>

      <input type="radio" name="tabs" id="tab3">
      <label for="tab3"><i class="fas fa-lightbulb"></i> Principles</label>

      <!-- Content -->
      <div class="tab-content" id="content1">
        <p>
            The main objective of the exercise to issue the Citizen's Charter of an organisation is to improve the quality of public services. This is done by letting people know the mandate of the concerned Ministry/ Department/ Organisation, how one can get in touch with its officials, what to expect by way of services and how to seek a remedy if something goes wrong. The Citizen's Charter does not by itself create new legal rights, but it surely helps in enforcing existing rights.
          <!-- The main objective of the exercise to issue the Citizen's Charter of an organisation is to improve the quality of public services. This helps people understand services, expectations, and grievance processes. -->
        </p>
      </div>

      <div class="tab-content" id="content2">
        <ul>
          <li>To develop administration that takes the citizens into total confidence.</li>
          <li>The basic objective of the Citizens’ Charter is to empower the citizen in relation to public service delivery.</li>
          <li>To ensure responsive, accountable, transparent and people friendly administration.</li>
        </ul>
      </div>

      <div class="tab-content" id="content3">
        <ul>
          <li>Quality: Improving the quality of services.</li>
          <li>Choice: Wherever possible.</li>
          <li>Standards: Specify what to expect and how to act if standards are not met.</li>
          <li>Value: For the tax payers’ money.</li>
          <li>Accountability: Individuals and Organizations.</li>
          <li>Transparency: Rules/ Procedures/ Schemes/Grievances</li>
        </ul>
      </div>

    </div>

  </div>
</section>

<?php include('footer.php'); ?>