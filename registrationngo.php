<?php
include('header.php');
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
body {
  font-family: 'Poppins', sans-serif;
  background: #f4f7fb;
  margin: 0;
}

/* Changed container framework to support absolute full screen spread */
.form-container-fullscreen {
  width: 100%;
  max-width: 100%;
  margin: 0;
  background: #fff;
  padding: 40px 40px;
  border-radius: 0px; /* Flush layout for pristine full screen alignment */
  box-shadow: 0 10px 30px rgba(15, 23, 42, 0.04);
}

/* Section Title with Corporate Branding Accent */
.form-title {
  font-size: 20px;
  font-weight: 700;
  margin-top: 25px;
  margin-bottom: 25px;
  color: #002f77;
  border-left: 5px solid #A61C22;
  padding-left: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
}

.form-group {
  margin-bottom: 22px;
}

label {
  font-weight: 600;
  font-size: 14px;
  margin-bottom: 6px;
  color: #334155;
}

input, select, textarea {
  padding: 11px 14px;
  border: 1px solid #cbd5e1;
  border-radius: 8px;
  font-size: 14px;
  color: #1e293b;
  transition: all 0.25s ease;
  background-color: #f8fafc;
}

input:focus, select:focus, textarea:focus {
  border-color: #002f77;
  background-color: #ffffff;
  box-shadow: 0 0 0 3px rgba(0, 47, 119, 0.12);
  outline: none;
}

/* Micro-Interaction Checkbox Frame Alignment */
.checkbox-group {
  display: flex;
  align-items: center;
  gap: 12px;
  height: 100%;
  padding-top: 28px; /* Balanced alignment relative to text inputs on grid */
}

.checkbox-group input[type="checkbox"] {
  width: 18px;
  height: 18px;
  cursor: pointer;
  accent-color: #A61C22;
}

.checkbox-group label {
  margin-bottom: 0;
  cursor: pointer;
}

/* Professional State-controlled CTA trigger */
.submit-btn {
  background: linear-gradient(135deg, #002f77 0%, #001f5c 100%);
  color: #fff;
  padding: 12px 45px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  font-weight: 600;
  font-size: 15px;
  transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  box-shadow: 0 4px 15px rgba(0, 47, 119, 0.2);
}

.submit-btn:hover {
  background: linear-gradient(135deg, #A61C22 0%, #bd242a 100%);
  box-shadow: 0 6px 20px rgba(166, 28, 34, 0.3);
  transform: translateY(-2px);
}

/* Responsive Scaling Overrides for Tablets/Mobile devices */
@media(max-width: 992px) {
  .form-container-fullscreen {
    padding: 30px 20px;
  }
}

@media(max-width: 768px) {
  .checkbox-group {
    padding-top: 5px;
    margin-bottom: 20px;
  }
}
</style>

<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">NGO Registration</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">NGO Registration</li>
    </ol>    
  </div>
</div>
<div class="container-fluid p-0">
  <div class="form-container-fullscreen">
    <form action="#" method="POST">

      <div class="form-title"><i class="fa-solid fa-sitemap me-2"></i> Organization Details</div>
      <div class="row">
        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>District*</label>
          <select class="form-control"><option>Select District</option></select>
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Computer Registration No</label>
          <input type="text" class="form-control" placeholder="Enter Registration Number">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Name of Organization*</label>
          <input type="text" class="form-control" placeholder="Enter Organization Name">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Nature of Organization*</label>
          <select class="form-control">
            <option>National</option>
            <option>State Level</option>
            <option>District Level</option>
          </select>
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Type of Organization*</label>
          <select class="form-control">
            <option>NGO</option>
            <option>Trust</option>
            <option>Society</option>
          </select>
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Year of Establishment</label>
          <input type="text" class="form-control" placeholder="YYYY">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Work Level*</label>
          <select class="form-control">
            <option>Block Level</option>
            <option>District Level</option>
            <option>State Level</option>
          </select>
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Area of Interest*</label>
          <select class="form-control">
            <option>Emergency Response</option>
            <option>Disaster Mitigation</option>
            <option>Community Relief</option>
          </select>
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Specialization*</label>
          <select class="form-control">
            <option>Construction</option>
            <option>Medical Aid</option>
            <option>Rescue & Search</option>
          </select>
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Man Power*</label>
          <input type="text" class="form-control" placeholder="Total Volunteers/Staff count">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Equipments</label>
          <input type="text" class="form-control" placeholder="Available rescue tools/vehicles">
        </div>

        <div class="col-xl-8 col-md-8 col-12 form-group">
          <label>Services Cost*</label>
          <input type="text" class="form-control" placeholder="Cost details if applicable">
        </div>

        <div class="col-xl-4 col-md-4 col-12 form-group">
          <div class="checkbox-group">
            <input type="checkbox" id="servicesPaid">
            <label for="servicesPaid">Are Services Paid?</label>
          </div>
        </div>

        <div class="col-lg-6 col-12 form-group">
          <label>Area of Operation</label>
          <textarea class="form-control" rows="3" placeholder="Describe regions or zones of operation..."></textarea>
        </div>

        <div class="col-lg-6 col-12 form-group">
          <label>Activities*</label>
          <textarea class="form-control" rows="3" placeholder="List ongoing or completed disaster support activities..."></textarea>
        </div>
      </div>

      <div class="form-title mt-4"><i class="fa-solid fa-map-location-dot me-2"></i> Address Details</div>
      <div class="row">
        <div class="col-md-6 col-12 form-group">
          <label>Address Line 1</label>
          <textarea class="form-control" rows="2" placeholder="House No., Building Name, Street..."></textarea>
        </div>

        <div class="col-md-6 col-12 form-group">
          <label>Address Line 2</label>
          <textarea class="form-control" rows="2" placeholder="Locality, Landmark, Area..."></textarea>
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>City*</label>
          <input type="text" class="form-control" placeholder="City">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>State*</label>
          <input type="text" class="form-control" placeholder="State">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Country*</label>
          <input type="text" class="form-control" placeholder="Country">
        </div>

        <div class="col-xl-3 col-md-6 col-12 form-group">
          <label>Zip Code/PIN*</label>
          <input type="text" class="form-control" placeholder="6-digit PIN code">
        </div>
      </div>

      <div class="form-title mt-4"><i class="fa-solid fa-user-tie me-2"></i> Contact Person Details</div>
      <div class="row">
        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Contact Person*</label>
          <input type="text" class="form-control" placeholder="Full Name">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Designation*</label>
          <input type="text" class="form-control" placeholder="Role inside Organization">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Email ID*</label>
          <input type="email" class="form-control" placeholder="example@domain.com">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Phone*</label>
          <input type="text" class="form-control" placeholder="Landline number">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Mobile*</label>
          <input type="text" class="form-control" placeholder="10-digit mobile number">
        </div>

        <div class="col-xl-4 col-md-6 col-12 form-group">
          <label>Fax*</label>
          <input type="text" class="form-control" placeholder="Fax number">
        </div>
      </div>

      <div class="text-center mt-4">
        <button type="submit" class="submit-btn"><i class="fa-solid fa-paper-plane me-2"></i> Register Organization</button>
      </div>

    </form>
  </div>
</div>

<?php
include('footer.php');
?>