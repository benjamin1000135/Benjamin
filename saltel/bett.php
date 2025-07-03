<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>DollarBet Dashboard</title>
  <style>
   <style>
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f9f9f9;
    display: flex;
    color: #333;
  }

  /* Sidebar */
  .sidebar {
    width: 200px;
    background-color: #ffffff;
    color: #333;
    height: 100vh;
    position: fixed;
    top: 0;
    left: 0;
    padding: 20px 10px;
    border-right: 1px solid #ddd;
    transition: width 0.3s;
    overflow: hidden;
  }

  .sidebar.collapsed {
    width: 60px;
  }

  .sidebar .logo {
    font-size: 22px;
    font-weight: bold;
    color: #007bff;
    margin-bottom: 30px;
    cursor: pointer;
    white-space: nowrap;
    padding-left: 50px;
    width: 50px;
  }

  .sidebar ul {
    list-style: none;
  }

  .sidebar ul li {
    padding: 12px 10px;
    margin-bottom: 10px;
    cursor: pointer;
    transition: background 0.3s;
    display: flex;
    align-items: center;
    gap: 10px;
    border-radius: 5px;
  }

  .sidebar ul li:hover {
    background-color: #f0f0f0;
  }

  .sidebar.collapsed ul li span {
    display: none;
  }

  .main-wrapper {
    margin-left: 200px;
    flex: 1;
    display: flex;
    flex-direction: column;
    transition: margin-left 0.3s;
  }

  .main-wrapper.collapsed {
    margin-left: 60px;
  }

  /* Header */
  header {
    background-color: #007bff;
    color: white;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
  }

  .top-right {
    display: flex;
    align-items: center;
    gap: 15px;
  }

  .top-right button {
    background-color: #28a745;
    border: none;
    padding: 8px 16px;
    font-weight: bold;
    color: white;
    cursor: pointer;
    border-radius: 4px;
  }

  /* Navbar */
  nav {
    background-color: #e9f0ff;
    color: #007bff;
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 10px 0;
  }

  nav a {
    margin: 0 15px;
    color: #007bff;
    text-decoration: none;
    font-weight: bold;
  }

  nav a:hover {
    text-decoration: underline;
  }

  /* Page Layout */
  .container {
    display: flex;
    padding: 20px;
    gap: 20px;
    flex-wrap: wrap;
  }

  .main {
    flex: 3;
    min-width: 300px;
  }

  .right-panel {
    flex: 1;
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    min-width: 280px;
    border: 1px solid #ddd;
  }

  /* Boosted Matches */
  .boosted {
    background-color: white;
    padding: 20px;
    border-radius: 8px;
    border: 1px solid #ddd;
  }

  .boosted h3 {
    margin-bottom: 15px;
    color: #007bff;
  }

  .match {
    border-top: 1px solid #ccc;
    padding: 15px 0;
  }

  .match h4 {
    margin: 5px 0;
  }

  .odds {
    display: flex;
    gap: 10px;
    margin-top: 10px;
  }

  .odds button {
    flex: 1;
    padding: 10px;
    border: 1px solid #007bff;
    background-color: #e6f0ff;
    cursor: pointer;
    font-weight: bold;
    transition: background-color 0.3s;
    border-radius: 4px;
  }

  .odds button:hover {
    background-color: #cce5ff;
  }

  /* Right Panel Content */
  .betslip-input {
    display: flex;
    flex-direction: column;
    margin-top: 10px;
  }

  .betslip-input input {
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
  }

  .betslip-input button {
    padding: 10px;
    background-color: #007bff;
    border: none;
    font-weight: bold;
    color: white;
    cursor: pointer;
    border-radius: 4px;
  }

  .betslip-empty {
    text-align: center;
    margin-top: 30px;
  }

  .betslip-empty button {
    margin-top: 10px;
    background-color: #28a745;
    border: none;
    padding: 8px 16px;
    cursor: pointer;
    font-weight: bold;
    color: white;
    border-radius: 4px;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .sidebar {
      position: relative;
      width: 100%;
      height: auto;
      border-right: none;
      border-bottom: 1px solid #ddd;
    }

    .main-wrapper {
      margin-left: 0;
    }

    .container {
      flex-direction: column;
    }
  }

  h2 {
    padding-left: 170px;
  }

</style>

</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar" id="sidebar">
    <div class="logo" id="toggleSidebar">☰ <span>DollarBet</span></div>
    <ul>
      <li>🏠 <span>Home</span></li>
      <li>📺 <span>Live Now</span></li>
      <li>⚽ <span>Sports</span></li>
      <li>🎮 <span>Virtual Games</span></li>
      <li>✈️ <span>Aviator</span></li>
      <li>❓ <span>Help</span></li>
      <li>⚙️ <span>Settings</span></li>
    </ul>
  </div>

  <!-- Main Content -->
  <div class="main-wrapper" id="mainWrapper">
    <!-- Header -->
    <header>
      <div> <h2>Welcome to reach on your wishes</h2></div>
      <div class="top-right">
        <span>0.00 RWF</span>
        <button>DEPOSIT</button>
        <button>WITHDRAW</button>
        <span>ACCOUNT</span>
      </div>
    </header>

    <!-- Navigation -->
    <nav>
      <a href="#">🏆 Sports</a>
      <a href="#">📺 Live Now</a>
      <a href="#">🎰 Casino</a>
      <a href="#">🎮 Virtuals</a>
      <a href="#">✈️ Aviator</a>
      <a href="#">✈️ JetX</a>
    </nav>

    <!-- Content Area -->
    <div class="container">
      <!-- Main Section -->
      <div class="main">
        <div class="boosted">
          <h3>⬆ Boosted</h3>

          <div class="match">
            <p><strong>6:15 PM Sun 11/05</strong></p>
            <h4>Fc Barcelon vs Real Madrid</h4>
            <p>Football / Spain / Lalig</p>
            <div class="odds">
              <button>5.00</button>
              <button>5.00</button>
              <button>1.63</button>
            </div>
          </div>

          <div class="match">
            <p><strong>5:30 PM Sun 11/05</strong></p>
            <h4>Liverpool vs Arsenal</h4>
            <p>Football / England / Premier League</p>
            <div class="odds">
              <button> 2.10</button>
              <button> 3.30</button>
              <button> 2.90</button>
            </div>
          </div>
        </div>
      </div>

      <!-- Right Panel -->
      <div class="right-panel">
        <h4>Booking Code</h4>
        <div class="betslip-input">
          <input type="text" placeholder="Enter booking code">
          <button>LOAD BETSLIP</button>
        </div>

        <div class="betslip-empty">
          <p><strong>Betslip is empty</strong></p>
          <img src="https://cdn-icons-png.flaticon.com/512/3555/3555396.png" alt="empty" width="100">
          <p><button>LEARN HOW TO BET</button></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    const toggleBtn = document.getElementById("toggleSidebar");
    const sidebar = document.getElementById("sidebar");
    const mainWrapper = document.getElementById("mainWrapper");

    toggleBtn.addEventListener("click", () => {
      sidebar.classList.toggle("collapsed");
      mainWrapper.classList.toggle("collapsed");
    });
  </script>
  
</body>
</html>
