<?php include('header.php'); ?>
<style>

/* Table Styling */

.custom-table {
    width: 100%;
    border-collapse: collapse;
    border: 2px solid #000;
}

.custom-table thead {
    background-color: #1f5f99;
    color: #fff;
}

.custom-table th,
.custom-table td {
    padding: 12px;
    border: 1px solid #000;
    text-align: left;
}

.custom-table th {
    font-weight: bold;
}

/* Link Styling */
.custom-table a {
    color: #0b57d0;
    text-decoration: none;
    font-weight: 600;
}

.custom-table a:hover {
    text-decoration: underline;
}

/* PDF Icon */
.pdf-icon {
    width: 28px;
}

/* DataTables UI fix */
.dataTables_wrapper .dataTables_length,
.dataTables_wrapper .dataTables_filter {
    margin-bottom: 10px;
}

.dataTables_wrapper .dataTables_filter input {
    border: 1px solid #ccc;
    padding: 5px;
}

/* Responsive */
.table-responsive {
    overflow-x: auto;
}

/* Mobile */
@media (max-width: 768px) {
    .custom-table th,
    .custom-table td {
        padding: 8px;
        font-size: 14px;
    }
}
.dataTables_wrapper .dataTables_filter {
    float: right;
    text-align: right;
}

.dataTables_wrapper .dataTables_length {
    float: left;
}

.dataTables_wrapper .dataTables_paginate {
    float: right;
    margin-top: 10px;
}

.dataTables_wrapper .dataTables_info {
    float: left;
    margin-top: 10px;
}
/* Pagination Container */
.dataTables_wrapper .dataTables_paginate {
    margin-top: 15px;
    text-align: right;
}

/* Pagination Buttons */
.dataTables_wrapper .dataTables_paginate .paginate_button {
    display: inline-block;
    padding: 6px 12px;
    margin: 2px;
    border: 1px solid #ccc;
    background-color: #fff;
    color: #333 !important;
    cursor: pointer;
    border-radius: 4px;
    font-size: 14px;
}

/* Active Page */
.dataTables_wrapper .dataTables_paginate .paginate_button.current {
    background-color: #1f5f99;
    color: #fff !important;
    border: 1px solid #1f5f99;
}

/* Hover Effect */
.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background-color: #0b57d0;
    color: #fff !important;
}

/* Disabled Buttons */
.dataTables_wrapper .dataTables_paginate .paginate_button.disabled {
    color: #999 !important;
    cursor: not-allowed;
    background-color: #f5f5f5;
}

/* Info text */
.dataTables_wrapper .dataTables_info {
    margin-top: 15px;
    font-size: 14px;
}

/* Length + Search alignment */
.dataTables_wrapper .dataTables_length {
    float: left;
}

.dataTables_wrapper .dataTables_filter {
    float: right;
}

/* Mobile Fix */
@media (max-width: 768px) {
    .dataTables_wrapper .dataTables_length,
    .dataTables_wrapper .dataTables_filter,
    .dataTables_wrapper .dataTables_info,
    .dataTables_wrapper .dataTables_paginate {
        float: none;
        text-align: center;
        display: block;
        margin: 10px 0;
    }
}
</style>

<!-- Header -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5">
    <h4 class="text-white display-4 mb-4">News & Updates</h4>
  </div>
</div>
<div class="container-fluid" style="margin: 50px 0;">
<div class="table-responsive container">
<table id="myTable" class="custom-table display">
    <thead>
        <tr>
            <th scope="col">क्रमसं</th>
            <th scope="col">दिनांक और समय</th>
            <th scope="col">विवरण</th>
            <th scope="col">डाउनलोड</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>04-07-2024</td>
            <td><a href="#">Terms of Reference (ToR) for Hiring a Weather Officer</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>

        <tr>
            <td>2</td>
            <td>04-07-2024</td>
            <td><a href="#">Expression of Interest (EOI) for Implementation of Innovation</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>

        <tr>
            <td>3</td>
            <td>04-07-2024</td>
            <td><a href="#">Selection of Agency for Emerging Technologies</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>

        <tr>
            <td>4</td>
            <td>04-07-2024</td>
            <td><a href="#">Internship Program at SEOC Office</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>

        <tr>
            <td>5</td>
            <td>04-07-2024</td>
            <td><a href="#">Utilization and Guideline of SDMF</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>

        <tr>
            <td>6</td>
            <td>02-07-2025</td>
            <td><a href="#">राहत आयुक्त कार्यालय के कार्यों हेतु निविदा आमंत्रण</a></td>
            <td><img src="https://cdn-icons-png.flaticon.com/512/337/337946.png" class="pdf-icon" alt="PDF Download"></td>
        </tr>
    </tbody>
</table>
</div>
</div>
<!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script> -->

<script>
jQuery(document).ready(function($){

    if (!$.fn.DataTable.isDataTable('#myTable')) {

        $('#myTable').DataTable({
            "pageLength": 10,
            "lengthMenu": [10, 25, 50, 100],
            "paging": true,
            "searching": true,
            "ordering": false,
            "language": {
                "search": "Search:",
                "lengthMenu": "Show _MENU_ entries",
                "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                "paginate": {
                    "previous": "Previous",
                    "next": "Next"
                }
            }
        });

    }

});
</script>


<?php include('footer.php'); ?>