<?php
include('header.php');
?>

<style>

/* Wrapper */
.gigw-form-wrapper{
    max-width:600px;
    margin:40px auto;
    font-family: Arial, sans-serif;
}

/* Card */
.gigw-form-box{
    border:1px solid #ccc;
    border-radius:6px;
    background:#fff;
}

/* Header */
.gigw-form-header{
    background:#0056b3;
    color:#fff;
    padding:12px;
    text-align:center;
    font-size:18px;
    font-weight:bold;
}

/* Body */
.gigw-form-body{
    padding:20px;
}

/* Form Group */
.gigw-form-group{
    margin-bottom:18px;
}

/* Label */
.gigw-form-group label{
    display:block;
    margin-bottom:6px;
    font-weight:600;
}

/* Input */
.gigw-form-control{
    width:100%;
    padding:10px;
    border:1px solid #999;
    border-radius:4px;
    font-size:14px;
}

/* Focus */
.gigw-form-control:focus{
    border-color:#0056b3;
    outline:none;
}

/* Button */
.gigw-btn{
    width:100%;
    padding:10px;
    background:#0056b3;
    color:#fff;
    border:none;
    border-radius:4px;
    font-size:15px;
    cursor:pointer;
}

.gigw-btn:hover{
    background:#003f80;
}

/* Small text */
.gigw-note{
    font-size:12px;
    color:#555;
    margin-top:5px;
}

/* Responsive */
@media(max-width:480px){
    .gigw-form-header{
        font-size:16px;
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
<div class="gigw-form-wrapper">

    <div class="gigw-form-box">

        <div class="gigw-form-header">
            राहत आवेदन की स्थिति देखें
        </div>

        <div class="gigw-form-body">

            <form>

                <!-- Application Number -->
                <div class="gigw-form-group">
                    <label for="appNo">आवेदन संख्या *</label>
                    <input type="text" id="appNo" name="appNo" class="gigw-form-control" required>
                </div>

                <!-- Mobile Number -->
                <div class="gigw-form-group">
                    <label for="mobile">मोबाइल नंबर *</label>
                    <input type="tel" id="mobile" name="mobile" class="gigw-form-control" maxlength="10" required>
                    <div class="gigw-note">10 अंकों का मोबाइल नंबर दर्ज करें</div>
                </div>

                <!-- Button -->
                <button type="submit" class="gigw-btn">
                    OTP भेजें
                </button>

            </form>

        </div>

    </div>

</div>
<?php
include('footer.php');
?>