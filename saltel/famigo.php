<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FarmConnect Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Segoe UI', sans-serif;
    }
    .sidebar {
      height: 100vh;
      background-color: #198754;
      padding-top: 20px;
      color: white;
      position: fixed;
      top: 0;
      left: 0;
      width: 250px;
      transition: all 0.3s;
    }
    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
    }
    .sidebar a:hover {
      background-color: #145c32;
    }
    .header {
      background-color: #fff;
      padding: 15px;
      border-bottom: 1px solid #dee2e6;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    .content {
      padding: 20px;
      margin-left: 250px;
      transition: margin-left 0.3s;
    }
    .card {
      box-shadow: 0 0 8px rgba(0,0,0,0.1);
    }
    .top-right-section {
      position: absolute;
      top: 10px;
      right: 10px;
      z-index: 1050;
      text-align: center;
    }
    .top-right-section .product {
      margin-bottom: 15px;
    }
    .top-right-section img {
      width: 60px;
      height: 60px;
      object-fit: cover;
    }
    .top-right-section h2 {
      margin-bottom: 20px;
      font-size: 1.5rem;
      text-align: center;
    }

    @media (max-width: 768px) {
      .sidebar {
        width: 200px;
      }
      .content {
        margin-left: 0;
      }
      .top-right-section {
        right: 5px;
      }
      .sidebar-collapsed {
        width: 0;
        display: none;
      }
      .content-collapsed {
        margin-left: 0;
      }
    }
  </style>
</head>
<body>
<div class="container-fluid">
  <div class="row">
    <!-- Sidebar -->
    <div class="col-md-2 sidebar" id="sidebar">
      <h4 class="text-center mb-4">🌱 FarmConnect</h4>
      <a href="#">🏠 Dashboard</a>
      <a href="#">➕ Add Product</a>
      <a href="#">📦 View Products</a>
      <a href="#">🛒 Orders</a>
      <a href="#">⚙️ Settings</a>
      <a href="#">🚪 Logout</a>
    </div>

    <!-- Main content -->
    <div class="col-md-10">
      <div class="header d-flex justify-content-between align-items-center">
        <!-- Hamburger Menu for Small Screens -->
        <button class="btn btn-outline-success d-md-none" id="toggleSidebarBtn">
          ☰
        </button>
        <h4>Dashboard</h4>
      </div>

      <div class="content" id="content">
        <div class="row">
          <!-- Card 1 -->
          <div class="col-md-4 mb-4">
            <div class="card p-3">
              <h5>Total Products</h5>
              <p class="fs-4">12</p>
            </div>
          </div>
          <!-- Card 2 -->
          <div class="col-md-4 mb-4">
            <div class="card p-3">
              <h5>Orders Received</h5>
              <p class="fs-4">5</p>
            </div>
          </div>
          <!-- Card 3 -->
          <div class="col-md-4 mb-4">
            <div class="card p-3">
              <h5>Revenue</h5>
              <p class="fs-4 text-success">$245.00</p>
            </div>
          </div>
        </div>

        <!-- Table -->
        <div class="card p-3">
          <h5 class="mb-3">Latest Products</h5>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Product</th>
                <th>Type</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Location</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tomatoes</td>
                <td>Vegetable</td>
                <td>$2.50</td>
                <td>100 kg</td>
                <td>Nyabihu</td>
              </tr>
              <tr>
                <td>Bananas</td>
                <td>Fruit</td>
                <td>$1.20</td>
                <td>50 kg</td>
                <td>Musanze</td>
              </tr>
              <tr>
                <td>Milk</td>
                <td>Dairy</td>
                <td>$0.80</td>
                <td>30 L</td>
                <td>Kigali</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div> <!-- End content -->
    </div> <!-- End main column -->
  </div>
</div>

<!-- Top-right section with multiple circular images stacked vertically -->
<div class="top-right-section">
    <h2>Farmer's Profiles</h2>
  <div class="product">
    <img src="mbn.jpg" alt="Product 1" class="rounded-circle mb-1">
    <br>
    <button class="btn btn-success btn-sm">View Product</button>
  </div>
  <div class="product">
    <img src="mtbz.jpg" alt="Product 2" class="rounded-circle mb-1">
    <br>
    <button class="btn btn-success btn-sm">View Product</button>
  </div>
  <div class="product">
    <img src="rsn.jpg" alt="Product 3" class="rounded-circle mb-1">
    <br>
    <button class="btn btn-success btn-sm">View Product</button>
  </div>

  <div class="product">
    <img src="bd.jpg" alt="Product 4" class="rounded-circle mb-1">
    <br>
    <button class="btn btn-success btn-sm">View Product</button>
  </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Sidebar Toggle Script -->
<script>
  document.getElementById('toggleSidebarBtn').addEventListener('click', function() {
    var sidebar = document.getElementById('sidebar');
    var content = document.getElementById('content');
    
    sidebar.classList.toggle('sidebar-collapsed');
    content.classList.toggle('content-collapsed');
  });
</script>

</body>
</html>
