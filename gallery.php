<?php
include('header.php');
?>

<style>

/* WRAPPER */
.ngo-gallery-wrapper {
    max-width: 1200px;
    margin: 50px auto;
    padding: 10px;
}

/* GRID */
.ngo-gallery-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* CARD */
.ngo-gallery-card {
    background: #fff;
    border-radius: 18px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
    transition: all 0.4s ease;
    position: relative;
}

/* HOVER */
.ngo-gallery-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

/* BADGE */
.ngo-gallery-badge {
    position: absolute;
    top: 12px;
    left: 12px;
    background: linear-gradient(45deg, #ff5e15, #ff8c42);
    color: #fff;
    padding: 6px 12px;
    font-size: 12px;
    border-radius: 20px;
    z-index: 2;
    font-weight: 600;
}

/* IMAGE */
.ngo-gallery-img {
    position: relative;
    overflow: hidden;
}

.ngo-gallery-img img {
    width: 100%;
    height: 230px;
    object-fit: cover;
    transition: 0.5s;
}

/* ZOOM */
.ngo-gallery-card:hover img {
    transform: scale(1.08);
}

/* OVERLAY */
.ngo-gallery-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    padding: 12px;
    background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
    color: #fff;
    font-weight: 600;
    font-size: 14px;
}

/* CONTENT */
.ngo-gallery-content {
    padding: 14px;
    text-align: center;
    font-weight: 600;
    color: #333;
    letter-spacing: 0.5px;
}

/* PAGINATION */
.ngo-pagination {
    text-align: center;
    margin-top: 30px;
}

.ngo-pagination button {
    margin: 5px;
    padding: 8px 14px;
    border: 2px solid #070101;
    background: #eee;
    border-radius: 6px;
    cursor: pointer;
    transition: 0.3s;
}

.ngo-pagination button.active {
    background: #ff5e15;
    color: #fff;
}

.ngo-pagination button:hover {
    background: rgb(0 18 72 / 90%);
    color: #fff;
}
.ngo-pagination button:disabled {
    background: #ddd;
    cursor: not-allowed;
    color: #999;
}
/* RESPONSIVE */
@media (max-width: 992px) {
    .ngo-gallery-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .ngo-gallery-grid {
        grid-template-columns: 1fr;
    }
}

</style>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5" style="max-width: 900px;">
    <h4 class="text-white display-4 mb-4">Photo Gallery</h4>
    <ol class="breadcrumb d-flex justify-content-center mb-0">
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
      <li class="breadcrumb-item"><a href="#">Pages</a></li>
      <li class="breadcrumb-item active text-secondary">Photo Gallery</li>
    </ol>    
  </div>
</div>
<!-- Header End -->

<div class="ngo-gallery-wrapper">

    <div class="ngo-gallery-grid" id="galleryGrid">

        <!-- CARD 1 -->
        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Relief Distribution</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>

        <!-- CARD 2 -->
        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Relief Camp</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>

        <!-- CARD 3 -->
        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>

        <!-- ADD MORE CARDS SAME STRUCTURE -->
         <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>

        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>



        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>



        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>



        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>


        <div class="ngo-gallery-card">
            <div class="ngo-gallery-badge">बाराबंकी</div>
            <div class="ngo-gallery-img">
                <img src="img/ngo.jpg">
                <div class="ngo-gallery-overlay">Community Support</div>
            </div>
            <div class="ngo-gallery-content">RAMSANEHGHAT</div>
        </div>

    </div>

    <!-- PAGINATION -->
    <div class="ngo-pagination" id="pagination"></div>

</div>

<script>
const cardsPerPage = 6;
const cards = document.querySelectorAll(".ngo-gallery-card");
const pagination = document.getElementById("pagination");

let currentPage = 1;

function showPage(page) {
    const totalPages = Math.ceil(cards.length / cardsPerPage);

    // Limit page range
    if (page < 1) page = 1;
    if (page > totalPages) page = totalPages;

    currentPage = page;

    const start = (page - 1) * cardsPerPage;
    const end = start + cardsPerPage;

    cards.forEach((card, index) => {
        card.style.display = (index >= start && index < end) ? "block" : "none";
    });

    updatePagination();
}

function updatePagination() {
    pagination.innerHTML = "";
    const totalPages = Math.ceil(cards.length / cardsPerPage);

    // PREVIOUS BUTTON
    const prevBtn = document.createElement("button");
    prevBtn.innerText = "← Prev";
    prevBtn.disabled = currentPage === 1;
    prevBtn.onclick = () => showPage(currentPage - 1);
    pagination.appendChild(prevBtn);

    // PAGE NUMBERS
    for (let i = 1; i <= totalPages; i++) {
        const btn = document.createElement("button");
        btn.innerText = i;

        if (i === currentPage) {
            btn.classList.add("active");
        }

        btn.onclick = () => showPage(i);
        pagination.appendChild(btn);
    }

    // NEXT BUTTON
    const nextBtn = document.createElement("button");
    nextBtn.innerText = "Next →";
    nextBtn.disabled = currentPage === totalPages;
    nextBtn.onclick = () => showPage(currentPage + 1);
    pagination.appendChild(nextBtn);
}

// INIT
showPage(1);
</script>
<?php
include('footer.php');
?>