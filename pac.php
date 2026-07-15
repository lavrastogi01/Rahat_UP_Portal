<?php
include('header.php');
?>
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">PAC</h4>
    <!-- <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">PAC</li>
    </ol> -->
  </div>
</div>
<!-- Header End -->


<style>
   

    h2{
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 15px;
    }

    .table-container{
        width: 100%;
        overflow-x: auto;
    }

    table{
        width: 100%;
        border-collapse: collapse;
        border: 1px solid #cfcfcf;
    }

    th, td{
        border: 1px solid #cfcfcf;
        padding: 12px;
        vertical-align: middle;
        font-size: 15px;
    }

    tr:nth-child(even){
        background-color: #f8f8f8;
    }

    .btn-view{
        background-color: #0b5ed7;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
    }

    .btn-view:hover{
        background-color: #084298;
    }

    .btn-view:focus{
        outline: 3px solid #ffbf47;
    }

    /* GIGW Accessibility focus */
    a, button{
        outline-offset: 2px;
    }
</style>
</head>

<body>



<div class="container">
<div class="table-container mt-5 mb-5">
  <h2>पी. ए. सी. सहायता</h2>
<table role="table" aria-label="PAC Assistance Table">

    <tbody>
        <tr>
            <td>PAC Work Status</td>
            <td>
                सूचना एवं बाढ़ के सम्बन्ध में प्रदेश पी. ए. सी. के द्वारा किये जाने वाले कार्य की स्थिति / कार्ययोजना
            </td>
            <td>
                <button class="btn-view" aria-label="PAC Work Status View">View</button>
            </td>
        </tr>

        <tr>
            <td>PAC Relief Instruments Status</td>
            <td>
                पी. ए. सी. वाहिनियों के बाढ़ राहत उपकरणों की अवधारणात्मक स्थिति (12) बाढ़ राहत कंपनियाँ
            </td>
            <td>
                <button class="btn-view" aria-label="PAC Relief Instruments Status View">View</button>
            </td>
        </tr>
    </tbody>

</table>
</div>
</div>



<?php
include('footer.php');
?>