<?php
include('header.php');
?>
<style>
    .section-title {
  font-weight: 600;
  border-left: 5px solid #A61C22;
  padding-left: 10px;
  margin-bottom: 20px;
}

/* Table Design */
.custom-table table {
  border-radius: 10px;
  overflow: hidden;
  background: #fff;
}

.custom-table thead {
  background: #A61C22;
  color: #fff;
}

.custom-table th {
  font-weight: 500;
}

.custom-table td {
  vertical-align: middle;
}

/* Zebra Effect */
.custom-table tbody tr:nth-child(even) {
  background: #f8f9fa;
}

/* Hover */
.custom-table tbody tr:hover {
  background: #ffe6d5;
  transition: 0.3s;
}

/* Mobile View */
@media (max-width: 768px) {

  .custom-table table,
  .custom-table thead,
  .custom-table tbody,
  .custom-table th,
  .custom-table td,
  .custom-table tr {
    display: block;
    width: 100%;
  }

  .custom-table thead {
    display: none;
  }

  .custom-table tr {
    background: #fff;
    margin-bottom: 15px;
    padding: 10px;
    border-radius: 10px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
  }

  .custom-table td {
    text-align: left;
    padding: 8px 10px;
    position: relative;
  }

  .custom-table td::before {
    content: attr(data-label);
    font-weight: 600;
    display: block;
    color: #A61C22;
    margin-bottom: 3px;
  }
}
</style>
<!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Who's who</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-secondary">Who's who</li>
                </ol>    
            </div>
        </div>
 <!-- Header End -->

 <div class="container my-5">

  <!-- SECTION 1 -->
  <h4 class="section-title">राजस्व (राहत) विभाग में कार्यरत अधिकारियों की सूची</h4>

  <div class="table-responsive custom-table">
    <table class="table">
      <thead>
        <tr>
          <th>क्रम</th>
          <th>अधिकारी का नाम</th>
          <th>पदनाम</th>
          <th>फोन नं</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>श्रीमती अपर्णा यू०</td>
          <td>प्रमुख सचिव, राजस्व विभाग</td>
          <td>0522-2238668</td>
        </tr>

        <tr>
          <td>2</td>
          <td>डॉ. हृषिकेश भास्कर यशोद</td>
          <td>राहत आयुक्त</td>
          <td>0522-2238200</td>
        </tr>

        <tr>
          <td>3</td>
          <td>श्री राम केवल</td>
          <td>सचिव</td>
          <td>-</td>
        </tr>

        <tr>
          <td>4</td>
          <td>राहत कंट्रोल रूम</td>
          <td>राहत आयुक्त कार्यालय</td>
          <td>0522-2235083</td>
        </tr>
      </tbody>
    </table>
  </div>


  <!-- SECTION 2 -->
  <h4 class="section-title mt-5">राहत आयुक्त कार्यालय में कार्यरत अधिकारियों की सूची</h4>

  <div class="table-responsive custom-table">
    <table class="table">
      <thead>
        <tr>
          <th>क्रम</th>
          <th>अधिकारी का नाम</th>
          <th>पदनाम</th>
          <th>फोन नं</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>डॉ. हृषिकेश भास्कर यशोद</td>
          <td>राहत आयुक्त</td>
          <td>9454441070</td>
        </tr>

        <tr>
          <td>2</td>
          <td>श्री सन्तोष कुमार</td>
          <td>वरिष्ठ वित्त एवं लेखाधिकारी</td>
          <td>9454440827</td>
        </tr>

        <tr>
          <td>3</td>
          <td>श्री शैलेन्द्र नाथ मिश्र</td>
          <td>प्रशासनिक अधिकारी</td>
          <td>9415357570</td>
        </tr>

        <tr>
          <td>4</td>
          <td>श्री अमित कुमार</td>
          <td>ओएसडी</td>
          <td>8851145365</td>
        </tr>
      </tbody>
    </table>
  </div>

</div>

<?php
include('footer.php');
?>