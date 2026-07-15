<?php include('header.php'); ?>

<style>
/* WRAPPER */
.gov-section {
  max-width: 1200px;
  margin: auto;
  padding: 50px 15px;
}

/* GRID */
.gov-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
  gap: 20px;
}

/* CARD */
.gov-card {
  background: #fff;
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 20px;
  text-align: center;
  box-shadow: 0 4px 10px rgba(0,0,0,0.05);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.gov-card:hover, .gov-card:focus {
  transform: translateY(-4px);
  box-shadow: 0 6px 14px rgba(0,0,0,0.1);
  outline: 3px solid #0056a3;
  outline-offset: 4px;
}

/* ICON */
.gov-card img {
  width: 48px;
  height: 48px;
  margin-bottom: 12px;
}

/* TITLE */
.gov-card h4 {
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 8px;
  color: #0056a3;
}

/* DESCRIPTION */
.gov-card p {
  font-size: 13px;
  color: #333;
}

/* MOBILE */
@media (max-width: 576px) {
  .gov-card {
    padding: 15px;
  }
  .gov-card h4 {
    font-size: 14px;
  }
}
</style>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">Track Application</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">Track Application</li>
    </ol>    
  </div>
</div>
<!-- Header End -->
<section class="gov-section">
  <h2 class="mb-4 text-primary fw-bold text-center">Disaster Management Information </h2>

  <div class="gov-grid">
    <!-- Card 1 -->
     <a href="doanddose.php" class="text-decoration-none d-block">
    <div class="gov-card" tabindex="0">
      
      <img src="img/do.png" alt="Safety Guidelines Icon">
      <h4>Do's and Don'ts </h4>
      <p>Official safety guidelines to follow during floods and emergencies.</p>
    </div>
    </a>

    <!-- Card 2 -->
    <div class="gov-card" tabindex="0">
      <img src="img/flood.png" alt="Flood Information Icon">
      <h4>Flood Related Information </h4>
      <p>Latest updates and resources on flood situations.</p>
    </div>

    <!-- Card 3 -->
    <div class="gov-card" tabindex="0">
      <img src="img/faq.png" alt="FAQ Icon">
      <h4>FAQs </h4>
      <p>Answers to common queries about disaster relief.</p>
    </div>

    <!-- Card 4 -->
    <div class="gov-card" tabindex="0">
      <img src="img/emergency.png" alt="Emergency Status Icon">
      <h4>Reported Emergency Status</h4>
      <p>Real-time status of emergencies reported across districts.</p>
    </div>

    <!-- Card 5 -->
    <div class="gov-card" tabindex="0">
      <img src="img/rainbasera.png" alt="Shelter Location Icon">
      <h4>Rain Basera Location </h4>
      <p>Find shelters and safe locations during heavy rains.</p>
    </div>
  </div>
</section>

<?php include('footer.php'); ?>
