<?php
include('header.php');
?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">District Disaster Management Plan</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">District Disaster Management Plan</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<style>

/* Wrapper (Scoped CSS) */
.ddmp-wrapper{
    max-width:1100px;
    margin:40px auto;
}

/* Table Box */
.ddmp-wrapper .ddmp-table-box{
    background:#fff;
    border:1px solid #ccc;
}

/* Table */
.ddmp-wrapper .ddmp-table{
    width:100%;
    border-collapse:collapse;
}

/* Header */
.ddmp-wrapper .ddmp-table thead{
    background:#000;
    color:#fff;
}

.ddmp-wrapper .ddmp-table th{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
    font-size:14px;
}

/* Body */
.ddmp-wrapper .ddmp-table td{
    padding:10px;
    border:1px solid #ccc;
    text-align:center;
    font-size:14px;
}

/* Hover (light, accessible) */
.ddmp-wrapper .ddmp-table tbody tr:hover{
    background:#f2f2f2;
}

/* Button (no bootstrap conflict) */
.ddmp-btn-custom{
    background:#004a99;
    color:#fff;
    padding:6px 12px;
    border-radius:3px;
    text-decoration:none;
    font-size:13px;
    display:inline-block;
}

.ddmp-btn-custom:hover{
    background:#003366;
}

/* Responsive (scroll instead of breaking layout) */
@media(max-width:768px){
    .ddmp-wrapper{
        overflow-x:auto;
    }
}

</style>

<div class="ddmp-wrapper">

<div class="ddmp-table-box">

<table class="ddmp-table" aria-label="District Disaster Management Plan Table">

<thead>
<tr>
<th>क्रo संo</th>
<th>जनपद का नाम</th>
<th>हेल्पलाइन नंबर</th>
<th>जिला आपदा प्रबंध योजना (DDMP)</th>
</tr>
</thead>

<tbody>

<tr>
<td>1</td>
<td>गोंडा</td>
<td>05262230125</td>
<td><a href="#" class="ddmp-btn-custom">गोंडा DDMP</a></td>
</tr>

<tr>
<td>2</td>
<td>लखनऊ</td>
<td>1070, 0522-2238203</td>
<td><a href="#" class="ddmp-btn-custom">लखनऊ DDMP</a></td>
</tr>

<tr>
<td>3</td>
<td>महाराजगंज</td>
<td>1070</td>
<td><a href="#" class="ddmp-btn-custom">महाराजगंज DDMP</a></td>
</tr>

<tr>
<td>4</td>
<td>मुजफ्फर नगर</td>
<td>1070, 0131-2436918 9412210080</td>
<td><a href="#" class="ddmp-btn-custom">मुजफ्फर नगर DDMP</a></td>
</tr>

<tr>
<td>5</td>
<td>शाहजहाँपुर</td>
<td>1077</td>
<td><a href="#" class="ddmp-btn-custom">शाहजहाँपुर DDMP</a></td>
</tr>

<tr>
<td>6</td>
<td>श्रावस्ती</td>
<td>9721939303</td>
<td><a href="#" class="ddmp-btn-custom">श्रावस्ती DDMP</a></td>
</tr>

</tbody>

</table>

</div>
</div>



<?php
include('footer.php');
?>