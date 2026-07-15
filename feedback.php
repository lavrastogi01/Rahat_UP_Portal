<?php
include('header.php');
?>
<style>
    .feedback-box {
    background: #fff;
    padding: 30px;
    border-radius: 8px;
    border: 1px solid #ddd;
    box-shadow: 0 2px 8px rgba(0,0,0,0.05);
}

/* Title */
.form-title {
    font-weight: 700;
    margin-bottom: 10px;
}

.form-desc {
    color: #555;
    margin-bottom: 10px;
}

.mandatory-note {
    font-size: 14px;
    margin-bottom: 20px;
}
.mandatory-note span {
    color: red;
}

/* Form */
.form-group {
    margin-bottom: 20px;
}

label {
    font-weight: 600;
    margin-bottom: 6px;
}

label span {
    color: red;
}

/* Inputs */
.form-control {
    border-radius: 6px;
    border: 1px solid #ccc;
    padding: 10px;
    transition: 0.3s;
}

.form-control:focus {
    border-color: #1f5f99;
    box-shadow: 0 0 5px rgba(31,95,153,0.3);
}

/* Captcha */
.captcha-box {
    margin-top: 20px;
}

.captcha-row {
    display: flex;
    gap: 10px;
    flex-wrap: wrap;
}

.captcha-code {
    background: #eee;
    padding: 10px 15px;
    font-weight: bold;
    letter-spacing: 2px;
    border-radius: 4px;
}

.btn-refresh {
    background: #17a2b8;
    color: #fff;
    border: none;
    padding: 8px 15px;
    border-radius: 4px;
}

/* Submit Button */
.btn-submit {
    background: #1f5f99;
    color: #fff;
    padding: 10px 30px;
    border-radius: 6px;
    border: none;
    font-weight: 600;
}

.btn-submit:hover {
    background: #0b57d0;
}

/* Responsive */
@media (max-width: 768px) {
    .captcha-row {
        flex-direction: column;
    }
}
</style>
<div class="container my-5">
    <div class="feedback-box">

        <h2 class="form-title">Feedback</h2>
        <p class="form-desc">
            We welcome your feedback and suggestions to improve the portal.
        </p>

        <p class="mandatory-note">
            Fields marked <span>*</span> are mandatory.
        </p>

        <form>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Name <span>*</span></label>
                    <input type="text" class="form-control" required>
                </div>

                <div class="col-md-6 form-group">
                    <label>Email <span>*</span></label>
                    <input type="email" class="form-control" required>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 form-group">
                    <label>Organisation</label>
                    <input type="text" class="form-control">
                </div>

                <div class="col-md-6 form-group">
                    <label>Complaint Type</label>
                    <select class="form-control">
                        <option>Funds related</option>
                        <option>Technical issue</option>
                        <option>General feedback</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Your Suggestion / Feedback <span>*</span></label>
                <textarea class="form-control" rows="5" required></textarea>
            </div>

            <!-- Captcha -->
            <div class="captcha-box">
                <label>Enter Captcha <span>*</span></label>
                <div class="captcha-row">
                    <span class="captcha-code">l0eSa</span>
                    <button type="button" class="btn-refresh">Refresh</button>
                    <input type="text" class="form-control" placeholder="Enter captcha" required>
                </div>
            </div>

            <div class="text-center mt-4">
                <button type="submit" class="btn-submit">Submit</button>
            </div>

        </form>

    </div>
</div>
<?php
include('footer.php');
?>