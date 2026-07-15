<?php include('header.php'); ?>

<style>

/* TABLE WRAPPER */
.news-table-wrapper {
  /* max-width: 1000px; */
  margin: auto;
  overflow-x: auto;
}

/* TABLE */
.news-table {
  width: 100%;
  border-collapse: collapse;
  background: #fff;
}

/* HEADER */
.news-table thead {
  background: #ff5e15;
  color: #fff;
}

.news-table th {
  padding: 12px;
  text-align: left;
  font-size: 14px;
}

/* BODY */
.news-table td {
  padding: 12px;
  border: 1px solid #180b0b;
  font-size: 14px;
}

/* ROW HOVER */
.news-table tbody tr:hover {
  background: #f9fbff;
}

/* LINK */
.news-link {
  color: #333;
  text-decoration: none;
}

.news-link:hover {
  color: #ff5e15;
}

/* BADGE */
.news-badge {
  background: #ff5e15;
  color: #fff;
  padding: 4px 10px;
  font-size: 11px;
  border-radius: 20px;
}

/* DATE */
.news-date {
  font-size: 12px;
  color: #666;
}

/* PAGINATION */
.pagination .page-link {
  border-radius: 6px;
  margin: 0 3px;
}

.pagination .active .page-link {
  background: #ff5e15;
  border-color: #ff5e15;
}

/* MOBILE */
@media (max-width: 576px) {
  .news-table th, .news-table td {
    font-size: 12px;
    padding: 8px;
  }
}

</style>

<!-- Header -->
<div class="container-fluid bg-breadcrumb">
  <div class="container text-center py-5">
    <h4 class="text-white display-4 mb-4">News & Updates</h4>
  </div>
</div>

<section class="container my-4">

<h2 class="mb-3 text-primary fw-bold">Official Documents & Action Plans</h2>

<div class="news-table-wrapper">

<table class="news-table" role="table" aria-label="News and Updates Table">

  <thead>
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Title</th>
      <th scope="col">Date</th>
      <th scope="col">Status</th>
    </tr>
  </thead>

  <tbody id="newsTableBody">

    <!-- ROW -->
    <tr class="news-row">
      <td>1</td>
      <td>
        <a href="#" class="news-link">
          मुख्यमंत्री का पीड़ित सहायता कोष - कोविड केयर फण्ड नियमावली 2020
        </a>
      </td>
      <td class="news-date">25 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>

    <tr class="news-row">
      <td>2</td>
      <td>
        <a href="#" class="news-link">
          Shravasti District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">12 Jan 2025</td>
      <td>-</td>
    </tr>

    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>

    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>


    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>

    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>

    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>
    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>
    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>
    <tr class="news-row">
      <td>3</td>
      <td>
        <a href="#" class="news-link">
          Balrampur District Flood Action Plan 2019-20
        </a>
      </td>
      <td class="news-date">20 Mar 2026</td>
      <td><span class="news-badge">NEW</span></td>
    </tr>

  </tbody>

</table>

</div>

<!-- PAGINATION -->
<nav class="mt-4" aria-label="Pagination Navigation">
  <ul class="pagination justify-content-center" id="pagination"></ul>
</nav>

</section>

<script>
document.addEventListener("DOMContentLoaded", function () {

    const rowsPerPage = 5;
    const rows = document.querySelectorAll(".news-row");
    const pagination = document.getElementById("pagination");

    let currentPage = 1;

    function showPage(page) {
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        if (page < 1) page = 1;
        if (page > totalPages) page = totalPages;

        currentPage = page;

        const start = (page - 1) * rowsPerPage;
        const end = start + rowsPerPage;

        rows.forEach((row, index) => {
            row.style.display = (index >= start && index < end) ? "" : "none";
        });

        updatePagination();
    }

    function updatePagination() {
        pagination.innerHTML = "";
        const totalPages = Math.ceil(rows.length / rowsPerPage);

        // PREV
        let prev = document.createElement("li");
        prev.className = "page-item " + (currentPage === 1 ? "disabled" : "");
        prev.innerHTML = `<a class="page-link" href="#" aria-label="Previous">Previous</a>`;
        prev.onclick = (e) => { e.preventDefault(); showPage(currentPage - 1); };
        pagination.appendChild(prev);

        // NUMBERS
        for (let i = 1; i <= totalPages; i++) {
            let li = document.createElement("li");
            li.className = "page-item " + (i === currentPage ? "active" : "");
            li.innerHTML = `<a class="page-link" href="#">${i}</a>`;
            li.onclick = (e) => { e.preventDefault(); showPage(i); };
            pagination.appendChild(li);
        }

        // NEXT
        let next = document.createElement("li");
        next.className = "page-item " + (currentPage === totalPages ? "disabled" : "");
        next.innerHTML = `<a class="page-link" href="#" aria-label="Next">Next</a>`;
        next.onclick = (e) => { e.preventDefault(); showPage(currentPage + 1); };
        pagination.appendChild(next);
    }

    showPage(1);
});
</script>

<?php include('footer.php'); ?>