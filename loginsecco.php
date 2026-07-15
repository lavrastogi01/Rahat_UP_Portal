<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Rahat Commissioner - Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f6f9;
        }

        /* Isolated central wrapper section */
        .login-wrapper-section {
            min-height: calc(100vh - 180px); /* Adjusts height dynamically based on header/footer offsets */
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(rgba(244, 246, 249, 0.4), rgba(244, 246, 249, 0.4)), url('img/login-bg.jpg') center/cover no-repeat #f4f6f9;
            padding: 40px 20px;
            box-sizing: border-box;
        }

        /* Centered Premium Login Box Container matrix */
        .login-card {
            width: 100%;
            max-width: 420px;
            background: #ffffff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(15, 23, 42, 0.08);
            border: 1px solid rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
        }

        .portal-logo-wrapper {
            width: 110px;
            height: 110px;
            margin: 0 auto 15px auto;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .portal-logo-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .portal-main-heading {
            font-size: 26px;
            font-weight: 700;
            color: #002f77; /* Standard Government Portal Blue */
            margin-bottom: 25px;
            text-align: center;
            letter-spacing: 0.5px;
        }

        .form-label {
            font-weight: 600;
            font-size: 14px;
            color: #334155;
            margin-bottom: 6px;
        }

        /* Input Custom Blue & Crimson borders interactions */
        .input-group {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .form-control {
            padding: 11px 14px;
            border: 1px solid #cbd5e1;
            font-size: 14px;
            color: #1e293b;
            background-color: #ffffff;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #002f77;
            box-shadow: none;
            background-color: #ffffff;
        }

        .input-group-text {
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            color: #475569;
            padding: 0 16px;
            font-size: 14px;
            cursor: pointer;
        }

        .forgot-link {
            font-size: 13px;
            font-weight: 600;
            color: #A61C22; /* Theme Red */
            text-decoration: none;
            display: block;
            text-align: right;
            margin-top: 8px;
            transition: color 0.2s;
        }

        .forgot-link:hover {
            color: #bd242a;
            text-decoration: underline;
        }

        /* Captcha Wrapper Box Layout */
        .captcha-box {
            background-image: radial-gradient(circle, #cbd5e1 8%, transparent 11%);
            background-size: 5px 5px;
            background-color: #f8fafc;
            border: 1px solid #cbd5e1;
            font-weight: 700;
            font-size: 17px;
            letter-spacing: 2px;
            color: #000000;
            padding: 9px 12px;
            border-radius: 8px;
            user-select: none;
            display: inline-block;
            width: 100%;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.02);
        }

        .captcha-refresh-btn {
            color: #002f77;
            font-size: 18px;
            cursor: pointer;
            transition: transform 0.3s ease;
            display: inline-block;
            line-height: 44px; /* Perfectly centers vertically with fields */
        }

        .captcha-refresh-btn:hover {
            transform: rotate(180deg);
            color: #A61C22;
        }

        /* Login Action Button Trigger */
        .login-submit-btn {
            background: linear-gradient(135deg, #002f77 0%, #001f5c 100%);
            color: #ffffff;
            border: none;
            border-radius: 8px;
            padding: 12px;
            font-size: 16px;
            font-weight: 600;
            width: 100%;
            transition: all 0.25s ease;
            box-shadow: 0 4px 12px rgba(0, 47, 119, 0.2);
        }

        .login-submit-btn:hover {
            background: linear-gradient(135deg, #A61C22 0%, #bd242a 100%);
            box-shadow: 0 6px 15px rgba(166, 28, 34, 0.3);
            transform: translateY(-1px);
        }

        /* Mobile view structural corrections */
        @media (max-width: 576px) {
            .login-wrapper-section {
                padding: 20px 15px;
            }
            .login-card {
                padding: 30px 20px;
                box-shadow: 0 5px 20px rgba(0, 0, 0, 0.05);
            }
            .portal-main-heading {
                font-size: 22px;
            }
            .captcha-box {
                font-size: 15px;
                padding: 9px 6px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper-section">
   <div class="login-card">
    <div class="portal-logo-wrapper d-flex align-items-center justify-content-center mx-auto mb-3" style="width: 110px; height: 110px; overflow: hidden;">
        <img src="img/rahatlogo.png" 
             class="img-fluid h-100 w-100" 
             style="object-fit: contain;" 
             alt="Rahat Portal Logo"
             onerror="this.onerror=null; this.src='https://cdn-icons-png.flaticon.com/512/1041/1041890.png';">
    </div>

    <div class="portal-main-heading">राहत आयुक्त</div>

    <form action="#" method="POST" autocomplete="off">

        <div class="mb-3">
            <label class="form-label">Username</label>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter your Username" required>
                <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
            </div>
        </div>

        <div class="mb-2">
            <label class="form-label">Password</label>
            <div class="input-group">
                <input type="password" id="loginPassword" class="form-control" placeholder="Enter your Password" required>
                <span class="input-group-text" id="togglePasswordBtn"><i class="fa-solid fa-eye"></i></span>
            </div>
        </div>

        <div class="mb-4 text-end">
            <a href="#" class="forgot-link">Forgot Password</a>
        </div>

        <div class="mb-4">
            <div class="row g-2 align-items-center">
                <div class="col-5">
                    <input type="text" class="form-control" placeholder="Captcha" required>
                </div>
                <div class="col-5 text-center">
                    <div class="captcha-box text-center">!eJzgN</div>
                </div>
                <div class="col-2 text-center">
                    <i class="fa-solid fa-rotate-right captcha-refresh-btn" title="Refresh Captcha"></i>
                </div>
            </div>
        </div>

        <button type="submit" class="login-submit-btn">Login</button>

    </form>
</div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const togglePasswordBtn = document.getElementById('togglePasswordBtn');
        const passwordInput = document.getElementById('loginPassword');

        if (togglePasswordBtn && passwordInput) {
            togglePasswordBtn.addEventListener('click', () => {
                const currentType = passwordInput.getAttribute('type');
                if (currentType === 'password') {
                    passwordInput.setAttribute('type', 'text');
                    togglePasswordBtn.innerHTML = '<i class="fa-solid fa-eye-slash"></i>';
                } else {
                    passwordInput.setAttribute('type', 'password');
                    togglePasswordBtn.innerHTML = '<i class="fa-solid fa-eye"></i>';
                }
            });
        }
    });
</script>

</body>
</html>