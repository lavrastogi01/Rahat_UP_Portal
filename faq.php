<?php
include('header.php');
?>

<style>
       
:root {
            --primary-color: #1a5a96; /* Official Blue */
            --secondary-color: #f8f9fa;
            --text-dark: #212529;
            --accent-color: #e67e22;
            --border-color: #dee2e6;
        }
        .container-faq {
            max-width: 1100px;
            margin: 0 auto;
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
            border: 1px solid var(--border-color);
            margin: 50px auto; 
        }

        header {
            background: var(--primary-color);
            color: white;
            padding: 20px;
            text-align: center;
        }

        header h1 {
            /* background: var(--primary-color); */
            color: white;
            padding: 20px;
            text-align: center;
        }

        /* Unique Tab Logic */
        .wrapper {
            display: flex;
            min-height: 500px;
        }

        input[type="radio"] { display: none; }

        .tab-menu {
            width: 30%;
            background: var(--secondary-color);
            border-right: 1px solid var(--border-color);
            display: flex;
            flex-direction: column;
        }

        .tab-menu label {
            padding: 20px;
            cursor: pointer;
            font-weight: 600;
            border-bottom: 1px solid var(--border-color);
            transition: 0.3s;
            display: flex;
            align-items: center;
        }

        .tab-menu label:hover { background: #e9ecef; }

        /* Icon styling */
        .tab-menu label::before {
            content: "•";
            margin-right: 10px;
            color: var(--primary-color);
            font-size: 20px;
        }

        /* Content Area */
        .tab-content {
            width: 70%;
            padding: 30px;
            display: none;
            animation: fadeIn 0.5s ease;
        }

        /* Show content when radio is checked */
        #tab1:checked ~ .wrapper label[for="tab1"],
        #tab2:checked ~ .wrapper label[for="tab2"] {
            background: #fff;
            color: var(--primary-color);
            border-left: 5px solid var(--primary-color);
            box-shadow: -2px 0 5px rgba(0,0,0,0.05);
        }

        #tab1:checked ~ .wrapper #content1,
        #tab2:checked ~ .wrapper #content2 {
            display: block;
        }

        /* List Styling */
        .resource-list {
            list-style: none;
            padding: 0;
        }

        .resource-item {
            padding: 12px 15px;
            margin-bottom: 10px;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 4px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
            color: var(--text-dark);
            transition: transform 0.2s;
        }

        .resource-item:hover {
            transform: translateX(5px);
            border-color: var(--primary-color);
            background: #f1f8ff;
        }

        .date-badge {
            font-size: 0.8rem;
            color: #6c757d;
            background: #e9ecef;
            padding: 2px 8px;
            border-radius: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .wrapper { flex-direction: column; }
            .tab-menu { width: 100%; flex-direction: row; }
            .tab-menu label { flex: 1; text-align: center; font-size: 14px; padding: 15px 5px; justify-content: center; }
            .tab-content { width: 100%; padding: 15px; }
            .tab-menu label::before { display: none; }
        }
    </style>


<div class="container container-faq">
    <header>
        <h1 style="margin:0; font-size: 1.5rem;">Frequently Asked Questions (FAQ's)</h1>
    </header>

    <!-- Radio Controls -->
    <input type="radio" id="tab1" name="nav" checked>
    <input type="radio" id="tab2" name="nav">

    <div class="wrapper">
        <!-- Sidebar Navigation -->
        <nav class="tab-menu" role="tablist">
            <label for="tab1" role="tab">आपदा प्रबंधन (Disaster Mgmt)</label>
            <label for="tab2" role="tab">कोविड-19 जागरूकता (Covid-19)</label>
        </nav>

        <!-- Content 1: Disaster Management -->
        <main class="tab-content" id="content1" role="tabpanel">
            <h2 style="color: var(--primary-color);">FAQs: आपदा प्रबंधन</h2>
            <div class="resource-list">
                <a href="#" class="resource-item">What is hazard? <span>&rarr;</span></a>
                <a href="#" class="resource-item">How would you define vulnerability? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is Risk? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is disaster risk? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is disaster? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is disaster prevention? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What does disaster mitigation mean? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is disaster preparedness? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is resilience? <span>&rarr;</span></a>
                <a href="#" class="resource-item">What is Disaster Management? <span>&rarr;</span></a>
            </div>
        </main>

        <!-- Content 2: Covid Awareness -->
        <main class="tab-content" id="content2" role="tabpanel">
            <h2 style="color: var(--primary-color);">Covid-19 जागरूकता</h2>
            <div class="resource-list">
                <a href="#" class="resource-item">
                    What is Novel Coronavirus? 
                    <span class="date-badge">2020-04-01</span>
                </a>
                <a href="#" class="resource-item">
                    How to use the handrub? 
                    <span class="date-badge">2020-04-01</span>
                </a>
                <a href="#" class="resource-item">
                    When to get tested for COVID-19 (English)
                    <span class="date-badge">2020-03-26</span>
                </a>
                <a href="#" class="resource-item">
                    Do's and Don't Poster (Hindi)
                    <span class="date-badge">2020-03-26</span>
                </a>
                <a href="#" class="resource-item">
                    Role of Frontline Workers (English)
                    <span class="date-badge">2020-03-26</span>
                </a>
                <a href="#" class="resource-item">
                    KIDS, VAAYU & CORONA : Comic Book
                    <span class="date-badge">2020-03-26</span>
                </a>
            </div>
        </main>
    </div>
</div>



<?php
include('footer.php');
?>