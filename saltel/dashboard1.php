<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    :root {
      --primary: #f05462;
      --light-bg: #f4f9ff;
      --white: #fff;
      --danger: #f05462;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      min-height: 100vh;
      background: var(--light-bg);
    }

    a {
      text-decoration: none;
    }

    li {
      list-style: none;
    }

    .btn {
      background: var(--primary);
      color: #fff;
      padding: 6px 14px;
      text-align: center;
      border-radius: 5px;
      border: none;
      cursor: pointer;
      font-weight: 500;
    }

    .btn:hover {
      color: var(--primary);
      background: #fff;
      border: 2px solid var(--primary);
    }

    .side-menu {
      position: fixed;
      background-color: var(--primary);
      width: 250px;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      padding-top: 20px;
      transition: width 0.3s;
      overflow: hidden;
    }

    .side-menu.collapsed {
      width: 70px;
    }

    .side-menu ul li {
      font-size: 18px;
      padding: 15px 30px;
      color: #fff;
      display: flex;
      align-items: center;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .side-menu ul li i {
      margin-right: 15px;
      min-width: 20px;
    }

    .side-menu ul li span {
      display: inline-block;
      transition: opacity 0.3s ease;
    }

    .side-menu.collapsed ul li span,
    .side-menu.collapsed .brand-name h1 {
      display: none;
    }

    .side-menu ul li:hover,
    .side-menu ul li.active:not(:first-child),
    .side-menu ul li:first-child:hover {
      background-color: #fff;
      color: var(--primary);
      padding-left:20px;
    }

    .brand-name {
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 10px;
      margin-bottom: 20px;
    }

    .brand-name i {
      font-size: 32px;
      color: #fff;
    }

    .brand-name h1 {
      color: white;
      font-size: 24px;
      transition: opacity 0.3s;
    }

    .container {
      margin-left: 250px;
      transition: margin-left 0.3s;
    }

    .container.collapsed {
      margin-left: 70px;
    }

    .header {
      height: 10vh;
      display: flex;
      align-items: center;
      padding: 0 20px;
      background-color: var(--white);
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }

    .nav {
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .dashboard1 h1 {
      cursor: pointer;
      font-size: 34px;
      color:black ; 
      padding-left:40px;
    }

    .search {
      position: absolute;
      left: 60%;
      transform: translateX(-50%);
      display: flex;
      align-items: center;
    }

    .search input {
      padding: 10px;
      border-radius: 5px;
      border: 2px solid var(--primary);
      font-size: 16px;
      width: 250px;
    }

    .search button {
      position: absolute;
      right: 10px;
      background: none;
      border: none;
      color: var(--primary);
      font-size: 20px;
      cursor: pointer;
    }

    .user {
      display: flex;
      align-items: center;
    }

    .user .btn {
      margin-right: 15px;
    }

    .user img {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-left: 15px;
    }

    .notification {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      position: relative;
      font-size: 20px;
      color: var(--primary);
      margin: 0 10px;
    }

    .notification::after {
      content: "6";
      position: absolute;
      top: -5px;
      right: -5px;
      background: red;
      color: white;
      width: 18px;
      height: 18px;
      font-size: 12px;
      border-radius: 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      padding: 20px;
    }

    .cards {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
    }

    .card {
      background: var(--white);
      flex: 1;
      min-width: 200px;
      height: 130px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card i {
      font-size: 40px;
      color: var(--primary);
    }

    .content-2 {
      margin-top: 30px;
      display: flex;
      gap: 30px;
      flex-wrap: wrap;
    }

    .recent-payments, .new-students {
      flex: 1;
      background: var(--white);
      padding: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      min-width: 300px;
    }

    .recent-payments {
      flex-basis: 65%;
    }

    .title {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 2px solid #999;
      padding-bottom: 10px;
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 10px;
      text-align: left;
      border-bottom: 1px solid #ddd;
      white-space: nowrap;
    }

    table tr:hover {
      background-color: #f9f9f9;
    }

    table tr img {
      width: 35px;
      height: 35px;
      border-radius: 50%;
    }

    table td:nth-child(3),
    table td:nth-child(4) {
      text-align: center;
    }

    @media screen and (max-width: 768px) {
      .side-menu {
        width: 70px;
      }

      .container {
        margin-left: 70px;
      }

      .cards {
        flex-direction: column;
      }

      .search {
        display: none;
      }

      .content-2 {
        flex-direction: column;
      }

      .recent-payments {
        width: 100%;
      }
    }
  </style>
</head>
<body>

  <div class="side-menu" id="sidebar">
    <div class="brand-name">
      <i class="fas fa-graduation-cap"></i>
      <h1>DOLLAR</h1>
    </div>
    <ul>
      <li><i class="fas fa-home"></i><span>Home</span></li>
      <li><i class="fas fa-user-graduate"></i> <span>Students</span></li>
      <li><i class="fas fa-chalkboard-teacher"></i> <span>Teachers</span></li>
      <li><i class="fas fa-school"></i> <span>Schools</span></li>
      <li><i class="fas fa-piggy-bank"></i> <span>Income</span></li>
      <li><i class="fas fa-question-circle"></i> <span>Help</span></li>
      <li><i class="fas fa-cog"></i> <span>Settings</span></li>
    </ul>
  </div>

  <div class="container" id="main-container">
    <div class="header">
      <div class="nav">
        <div class="dashboard1">
          <h1 onclick="toggleSidebar()">☰ Dashboard</h1>
        </div>
        <div class="search">
          <input type="text" placeholder="Search...">
          <button><i class="fas fa-search"></i></button>
        </div>
        <div class="user">
          <a href="Add.php" class="btn">Add New</a>
          <div class="notification"><i class="fas fa-bell"></i></div>
          <img src="mb.jpg" alt="User">
        </div>
      </div>
    </div>

    <div class="content">
      <div class="cards">
        <div class="card">
          <div>
            <h1>2194</h1>
            <h3>Students</h3>
          </div>
          <i class="fas fa-user-graduate"></i>
        </div>
        <div class="card">
          <div>
            <h1>53</h1>
            <h3>Teachers</h3>
          </div>
          <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="card">
          <div>
            <h1>5</h1>
            <h3>Schools</h3>
          </div>
          <i class="fas fa-school"></i>
        </div>
        <div class="card">
          <div>
            <h1>350000</h1>
            <h3>Income</h3>
          </div>
          <i class="fas fa-hand-holding-usd"></i>
        </div>
      </div>

      <div class="content-2">
        <div class="recent-payments">
          <div class="title">
            <h2>Recent Payments</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <tr>
              <th>Name</th>
              <th>School</th>
              <th>Amount</th>
              <th>Option</th>
            </tr>
            <tr>
              <td>RUKUNDO Kenndy</td>
              <td>College Maranth</td>
              <td>$120</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>
            <tr>
              <td>MANZI Benjamin</td>
              <td>Lycee de Nyanza</td>
              <td>$120</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>
            <tr>
              <td>MUTABAZI Benjamin</td>
              <td>Espany</td>
              <td>$150</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

            <tr>
              <td>UWASE Marie Aline</td>
              <td>Lycee de Nyanza</td>
              <td>$120</td>
              <td><a href="#" class="btn">View</a></td>
            </tr>

          </table>
        </div>

        <div class="new-students">
          <div class="title">
            <h2>New Students</h2>
            <a href="#" class="btn">View All</a>
          </div>
          <table>
            <tr>
              <th>Profile</th>
              <th>Name</th>
              <th>Option</th>
            </tr>
            <tr>
              <td><img src="rkd.jpg" alt="Profile"></td>
              <td>R.Kennedy</td>
              <td><a href="#" class="btn">Delete</a></td>
            </tr>
            <tr>
              <td><img src="mb.png" alt="Profile"></td>
              <td>M.benjamin</td>
              <td><a href="#" class="btn">Delete</a></td>
            </tr>

            <tr>
              <td><img src="mtbz1.jpg" alt="Profile"></td>
              <td>M.benjamin</td>
              <td><a href="#" class="btn">Delete</a></td>
            </tr>

          </table>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      const sidebar = document.getElementById('sidebar');
      const container = document.getElementById('main-container');
      sidebar.classList.toggle('collapsed');
      container.classList.toggle('collapsed');
    }
  </script>

</body>
</html>
