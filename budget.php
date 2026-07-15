<?php
include('header.php');
?>

<!DOCTYPE html>
<html lang="hi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>आपदाओं में आवंटन/व्यय/लाभार्थियों की रिपोर्ट</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f6f9;
            color: #222;
            font-size: 13px;
        }

        /* Top Government Officials Header Line - Fully Responsive Grid */
        .top-officials-bar {
            background-color: #fff6f6;
            border-bottom: 1px solid #f0d5d5;
            padding: 10px 15px;
            font-size: 11px;
            font-weight: 600;
            color: #721c24;
        }
        .official-block {
            text-align: center;
            line-height: 1.4;
        }
        .official-title {
            color: #856404;
            font-size: 10px;
            text-transform: uppercase;
            display: block;
            margin-top: 2px;
        }

        /* Title Area */
        .report-main-title {
            font-size: 18px;
            font-weight: 700;
            color: #0b106d;
            text-align: center;
            margin-top: 20px;
            line-height: 1.4;
        }

        /* Government Layout Data Table Styling */
        .table-responsive-container {
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            overflow: hidden;
            margin-bottom: 25px;
        }

        .gov-report-table {
            width: 100%;
            margin-bottom: 0;
            border-collapse: collapse;
        }

        .gov-report-table th {
            background-color: #f8fafc;
            color: #000000;
            font-weight: 700;
            font-size: 12.5px;
            padding: 12px 10px;
            border-bottom: 2px solid #cbd5e1;
            border-right: 1px solid #e2e8f0;
            vertical-align: middle;
            white-space: nowrap;
        }

        .gov-report-table td {
            padding: 12px 10px;
            border-bottom: 1px solid #cbd5e1;
            border-right: 1px solid #e2e8f0;
            vertical-align: middle;
            color: #334155;
        }

        .gov-report-table tbody tr:nth-child(even) {
            background-color: #fdfdfd;
        }

        .total-summary-row {
            background-color: #fffbeb !important;
            font-weight: 700;
            color: #000000;
            border-top: 2px solid #cbd5e1;
        }

        /* Interactive Plus / Minus Collapse Buttons */
        .toggle-action-btn {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            border: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 13px;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .btn-plus-style {
            background-color: #28a745;
            color: #ffffff;
        }
        
        .btn-minus-style {
            background-color: #dc3545;
            color: #ffffff;
        }

        /* Inner Month Wise Nested Table Style */
        .nested-month-container {
            background-color: #ffffff;
            padding: 15px 15px 20px 30px !important;
            border-left: 4px solid #dc3545;
        }

        .nested-month-table {
            width: 100%;
            margin: 0;
            border: 1px solid #cbd5e1;
        }

        .nested-month-table th {
            background-color: #f1f5f9;
            color: #1e293b;
            font-size: 12px;
            font-weight: 700;
            padding: 8px 12px;
            border: 1px solid #cbd5e1;
        }

        .nested-month-table td {
            padding: 8px 12px;
            font-size: 12px;
            border: 1px solid #cbd5e1;
            background-color: #ffffff !important;
        }

        .hidden-nested-row {
            display: none;
        }

        /* Search box styling responsive adjustment */
        .search-box-alignment {
            max-width: 240px;
            width: 100%;
            font-size: 13px;
            padding: 6px 12px;
            border-radius: 6px;
            border: 1px solid #cbd5e1;
            outline: none;
        }
        .search-box-alignment:focus {
            border-color: #3b82f6;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
        }

        /* Media engine queries for phone display layout optimization */
        @media (max-width: 768px) {
            .top-officials-bar {
                padding: 12px 10px;
            }
            .official-block {
                margin-bottom: 8px;
            }
            .official-block:last-child {
                margin-bottom: 0;
            }
            .nested-month-container {
                padding: 10px !important;
            }
            .report-main-title {
                font-size: 15px;
            }
        }
    </style>
</head>
<body>

    <div class="container-fluid top-officials-bar">
        <div class="row text-center text-md-start">
            <div class="col-12 col-md-4 official-block mb-2 mb-md-0 text-center">
                <div>Yogi Adityanath</div>
                <span class="official-title">Hon'ble Chief Minister</span>
            </div>
            <div class="col-12 col-md-4 official-block mb-2 mb-md-0 text-center">
                <div>Shri P. Guruprasad</div>
                <span class="official-title">Principal Secretary, Revenue</span>
            </div>
            <div class="col-12 col-md-4 official-block text-center">
                <div>Shri Bhanu Chandra Goswami</div>
                <span class="official-title">Relief Commissioner</span>
            </div>
        </div>
    </div>

    <div class="container-fluid py-3 px-2 px-md-4">
        
        <h3 class="report-main-title">आपदाओं में आवंटन/व्यय/लाभार्थियों की रिपोर्ट</h3>

        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-stretch align-items-sm-center my-3 gap-3">
            <div class="d-flex align-items-center gap-2">
                <span class="fw-bold text-nowrap">वित्तीय वर्ष:</span>
                <select class="form-select form-select-sm" style="max-width: 150px; padding: 6px 12px; border-radius: 6px;">
                    <option value="2024-25" selected>2024-25</option>
                    <option value="2023-24">2023-24</option>
                </select>
            </div>
            <div class="d-flex align-items-center gap-2">
                <span class="text-muted small fw-medium">Search:</span>
                <input type="text" id="gridSearchInput" class="search-box-alignment" placeholder="यहाँ खोजें..." onkeyup="filterReportTable()">
            </div>
        </div>

        <div class="table-responsive-container">
            <div class="table-responsive">
                <table class="table gov-report-table align-middle" id="govReportTableSource">
                    <thead>
                        <tr>
                            <th style="width: 45px; text-align: center;">#</th>
                            <th style="width: 60px; text-align: center;">क्रम सं.</th>
                            <th>आपदा कोड</th>
                            <th>आपदा का नाम</th>
                            <th class="text-end">आपदा राहत प्रदान करने हेतु आवंटित कुल धनराशि</th>
                            <th class="text-end">आवंटित कुल धनराशि के सापेक्ष किया गया कुल व्यय</th>
                            <th class="text-end">शेष धनराशि</th>
                            <th class="text-end">कुल लाभार्थी</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="master-data-row">
                            <td class="text-center">
                                <button class="toggle-action-btn btn-plus-style" onclick="toggleNestedRowContainer(this, 'nestedRow1')">+</button>
                            </td>
                            <td class="text-center">1</td>
                            <td>224505800060242</td>
                            <td class="fw-semibold text-dark">बाढ़ आपदा राहत हेतु स्टेट डिजास्टर रिस्पॉन्स फण्ड से व्यय</td>
                            <td class="text-end">5886616939.00</td>
                            <td class="text-end">5206135783.00</td>
                            <td class="text-end">680481156</td>
                            <td class="text-end">1558984.00</td>
                        </tr>
                        
                        <tr id="nestedRow1" class="hidden-nested-row">
                            <td colspan="8" class="nested-month-container">
                                <div class="table-responsive">
                                    <table class="table nested-month-table align-middle">
                                        <thead>
                                            <tr>
                                                <th>माह</th>
                                                <th class="text-end">कुल आवंटित धनराशि</th>
                                                <th class="text-end">कुल व्यय धनराशि</th>
                                                <th class="text-end">कुल शेष धनराशि</th>
                                                <th class="text-end">कुल लाभार्थी</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr><td>April</td><td class="text-end">0.00</td><td class="text-end">0.00</td><td class="text-end">0.00</td><td class="text-end">0.00</td></tr>
                                            <tr><td>May</td><td class="text-end">1809445.00</td><td class="text-end">378600.00</td><td class="text-end">1430845.00</td><td class="text-end">72.00</td></tr>
                                            <tr><td>June</td><td class="text-end">105219805.00</td><td class="text-end">1956684.00</td><td class="text-end">103263121.00</td><td class="text-end">1196.00</td></tr>
                                            <tr><td>July</td><td class="text-end">1988118379.00</td><td class="text-end">539034099.00</td><td class="text-end">1449084280.00</td><td class="text-end">251671.00</td></tr>
                                            <tr><td>August</td><td class="text-end">649999435.00</td><td class="text-end">861927563.00</td><td class="text-end">-211928128.00</td><td class="text-end">154394.00</td></tr>
                                            <tr><td>September</td><td class="text-end">1155709989.00</td><td class="text-end">592920439.00</td><td class="text-end">562789550.00</td><td class="text-end">94430.00</td></tr>
                                            <tr><td>October</td><td class="text-end">1461002360.00</td><td class="text-end">1780517506.00</td><td class="text-end">-319515146.00</td><td class="text-end">805054.00</td></tr>
                                            <tr><td>November</td><td class="text-end">303781550.00</td><td class="text-end">809847808.00</td><td class="text-end">-506066258.00</td><td class="text-end">187133.00</td></tr>
                                            <tr><td>December</td><td class="text-end">139689903.00</td><td class="text-end">404387792.00</td><td class="text-end">-264697889.00</td><td class="text-end">48963.00</td></tr>
                                            <tr><td>January</td><td class="text-end">78381741.00</td><td class="text-end">146164618.00</td><td class="text-end">-67782877.00</td><td class="text-end">12697.00</td></tr>
                                            <tr><td>February</td><td class="text-end">55367.00</td><td class="text-end">6900674.00</td><td class="text-end">-6845307.00</td><td class="text-end">2694.00</td></tr>
                                            <tr><td>March</td><td class="text-end">2848965.00</td><td class="text-end">0.00</td><td class="text-end">2848965.00</td><td class="text-end">680.00</td></tr>
                                            <tr class="fw-bold" style="background-color: #f8fafc;">
                                                <td>कुल</td>
                                                <td class="text-end">5886616939.00</td>
                                                <td class="text-end">5206135783.00</td>
                                                <td class="text-end">680481156.00</td>
                                                <td class="text-end">1558984.00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </td>
                        </tr>

                        <tr class="master-data-row">
                            <td class="text-center"><button class="toggle-action-btn btn-plus-style" onclick="toggleNestedRowContainer(this, 'nestedRow2')">+</button></td>
                            <td class="text-center">2</td>
                            <td>224505800060942</td>
                            <td>राज्य सरकार द्वारा घोषित आपदाएं (09)</td>
                            <td class="text-end">2659384134.00</td>
                            <td class="text-end">2324474027.00</td>
                            <td class="text-end">334910107</td>
                            <td class="text-end">96652.00</td>
                        </tr>
                        <tr id="nestedRow2" class="hidden-nested-row"><td colspan="8" class="nested-month-container"><div class="p-2 text-muted text-center">No Monthly Breakup Logged.</div></td></tr>

                        <tr class="master-data-row">
                            <td class="text-center"><button class="toggle-action-btn btn-plus-style" onclick="toggleNestedRowContainer(this, 'nestedRow3')">+</button></td>
                            <td class="text-center">3</td>
                            <td>224505800061042</td>
                            <td>एस० डी० आर० एफ० पेमेन्ट</td>
                            <td class="text-end">1939512279.00</td>
                            <td class="text-end">1354101671.00</td>
                            <td class="text-end">585410608</td>
                            <td class="text-end">427.00</td>
                        </tr>
                        <tr id="nestedRow3" class="hidden-nested-row"><td colspan="8" class="nested-month-container"><div class="p-2 text-muted text-center">No Monthly Breakup Logged.</div></td></tr>

                        <tr class="master-data-row">
                            <td class="text-center"><button class="toggle-action-btn btn-plus-style" onclick="toggleNestedRowContainer(this, 'nestedRow4')">+</button></td>
                            <td class="text-center">4</td>
                            <td>224505800061142</td>
                            <td>एस० डी० आर० एफ० सामान्य व्यय</td>
                            <td class="text-end">1080057182.00</td>
                            <td class="text-end">38892763.00</td>
                            <td class="text-end">1041164419</td>
                            <td class="text-end">787.00</td>
                        </tr>
                        <tr id="nestedRow4" class="hidden-nested-row"><td colspan="8" class="nested-month-container"><div class="p-2 text-muted text-center">No Monthly Breakup Logged.</div></td></tr>

                        <tr class="master-data-row">
                            <td class="text-center"><button class="toggle-action-btn btn-plus-style" onclick="toggleNestedRowContainer(this, 'nestedRow5')">+</button></td>
                            <td class="text-center">5</td>
                            <td>224505800060842</td>
                            <td>शीतलहरी आपदा राहत हेतु स्टेट डिजास्टर रिस्पॉन्स फण्ड से व्यय</td>
                            <td class="text-end">522841323.00</td>
                            <td class="text-end">336471973.00</td>
                            <td class="text-end">186369350</td>
                            <td class="text-end">640.00</td>
                        </tr>
                        <tr id="nestedRow5" class="hidden-nested-row"><td colspan="8" class="nested-month-container"><div class="p-2 text-muted text-center">No Monthly Breakup Logged.</div></td></tr>

                        <tr class="total-summary-row">
                            <td></td>
                            <td class="text-center">कुल</td>
                            <td></td>
                            <td class="fw-bold">ग्रैंड टोटल (Grand Total)</td>
                            <td class="text-end">12918659064.00</td>
                            <td class="text-end">9795676717.00</td>
                            <td class="text-end">3122982347</td>
                            <td class="text-end">1801182.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            
            <div class="p-3 bg-light d-flex flex-column flex-sm-row justify-content-between align-items-center gap-2 border-top" style="font-size: 12px; color: #64748b;">
                <div>Showing 1 to 5 of 11 entries</div>
                <div class="btn-group btn-group-sm">
                    <button class="btn btn-outline-secondary btn-sm px-3" disabled>Previous</button>
                    <button class="btn btn-secondary btn-sm px-3 active">1</button>
                    <button class="btn btn-outline-secondary btn-sm px-3">Next</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // 1. Function to show/hide the monthly inner table row dynamically
        function toggleNestedRowContainer(buttonElement, targetRowId) {
            const nestedRow = document.getElementById(targetRowId);
            
            if (nestedRow.style.display === "table-row") {
                nestedRow.style.display = "none";
                buttonElement.innerText = "+";
                buttonElement.className = "toggle-action-btn btn-plus-style";
            } else {
                nestedRow.style.display = "table-row";
                buttonElement.innerText = "-";
                buttonElement.className = "toggle-action-btn btn-make-minus-style btn-minus-style";
            }
        }

        // 2. Client Side Live Search Filter Matrix Controller
        function filterReportTable() {
            const searchString = document.getElementById('gridSearchInput').value.toUpperCase();
            const tableRows = document.querySelectorAll('#govReportTableSource tbody .master-data-row');

            tableRows.forEach(row => {
                const combinedRowText = row.textContent || row.innerText;
                if (combinedRowText.toUpperCase().indexOf(searchString) > -1) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                    const nextSibling = row.nextElementSibling;
                    if(nextSibling && nextSibling.classList.contains('hidden-nested-row')) {
                        nextSibling.style.display = "none";
                        const targetBtn = row.querySelector('.toggle-action-btn');
                        if(targetBtn) {
                            targetBtn.innerText = "+";
                            targetBtn.className = "toggle-action-btn btn-plus-style";
                        }
                    }
                }
            });
        }
    </script>
</body>
</html>

<?php
include('footer.php');
?>