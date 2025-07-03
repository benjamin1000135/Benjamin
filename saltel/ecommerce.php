<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Grocery Organic Shop</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background-color: #f6f6f6;
      color: #333;
    }

    header {
      background-color: #fff;
      padding: 20px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      flex-wrap: wrap;
    }

    .logo {
      font-size: 24px;
      font-weight: bold;
      color: green;
      display: flex;
      align-items: center;
    }

    .logo img {
      height: 50px;
      margin-right: 10px;
    }

    nav a {
      margin: 0 10px;
      text-decoration: none;
      color: #333;
      font-size: 16px;
    }

    .hero {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 40px 20px;
      background-color: #fff;
      flex-wrap: wrap;
    }

    .hero-text {
      flex: 1;
      min-width: 300px;
      margin-right: 20px;
    }

    .hero-text h1 {
      font-size: 32px;
    }

    .hero-text h1 span {
      color: green;
    }

    .hero-text p {
      margin: 20px 0;
      color: #666;
    }

    .hero-text button {
      padding: 10px 20px;
      background-color: green;
      color: white;
      border: none;
      cursor: pointer;
      font-size: 16px;
      margin-right: 10px;
    }

    .hero-text button:hover {
      background-color: darkgreen;
      transition: background-color 0.3s ease;
    }

    .hero img {
      flex: 1;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
      margin-top: 20px;
    }

    .features {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
      padding: 40px 20px;
      background-color: #f1f1f1;
    }

    .feature-box {
      background-image: url(lmn5.png);
      background-size: cover;
      background-position: center;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      width: 100%;
      max-width: 300px;
      margin: 10px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }

    .feature-box img {
      width: 100%;
      height: auto;
      max-height: 100px;
      object-fit: contain;
      margin-bottom: 15px;
    }

    .feature-box h3 {
      margin-bottom: 10px;
      color:black;
    }

    .feature-box p {
     color:rgb(15, 15, 16);
    }

    .feature-box button {
      margin-top: 10px;
      background-color: green;
      color: white;
      padding: 8px 15px;
      border: none;
      cursor: pointer;
    }

    .feature-box button:hover {
      background-color: darkgreen;
      transition: background-color 0.3s ease;
    }

    @media (max-width: 768px) {
      .hero {
        flex-direction: column;
      }

      header {
        flex-direction: column;
        align-items: flex-start;
      }

      nav {
        margin-top: 10px;
        display: flex;
        flex-direction: column;
        gap: 10px;
      }
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="https://cdn-icons-png.flaticon.com/512/2909/2909767.png" alt="Fruit Basket Icon">
      FRUITS STORE
    </div>
    <nav>
      <a href="#">Home</a>
      <a href="#">Features</a>
      <a href="#">Products</a>
      <a href="#">Categories</a>
      <a href="#">Review</a>
      <a href="#">Blogs</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-text">
      <h1>Fresh And <span>Organic</span> Products For You</h1>
      <p> Healthly and yummy food for fresh morning braekfast Eat Dailyfor good health and mind Order now and get 20% off on your firtst order </p>
      <button>See More</button>
      <button>View product</button>
      <button>Order now</button>
      <button>View  Order</button>
    </div>
    <img src="2.jpg" alt="Grocery basket with vegetables">
  </section>

  <section class="features">
    <div class="feature-box">
      <img src="https://cdn-icons-png.flaticon.com/512/2331/2331970.png" alt="Fast Delivery Icon">
      <h3>Fast Delivery</h3>
      <p>Groceries delivered to your doorstep swiftly by our trained delivery riders.</p>
      <button>Read More</button>
    </div>

    <div class="feature-box">
      <img src="https://cdn-icons-png.flaticon.com/512/10371/10371807.png" alt="Mobile Money Payment Icon">
      <h3>Easy Payments</h3>
      <p>Seamless transactions with support for MoMo, Mangram, cards, wallets, and COD.</p>
      <button>Read More</button>
    </div>

    <div class="feature-box">
      <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png" alt="Quality Assurance Icon">
      <h3>Quality Assurance</h3>
      <p>Strict quality control for freshness and customer satisfaction guaranteed.</p>
      <button>Read More</button>
    </div>
  </section>
</body>
</html>
