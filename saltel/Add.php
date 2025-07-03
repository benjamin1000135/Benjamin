<?php
$host = "localhost";
$user = "root";       // change this if needed
$pass = "";          
$db = "school_db";   

// Connect to database
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = trim($_POST['name']);
  $school = trim($_POST['school']);
  $amount = trim($_POST['amount']);

  if ($name && $school && $amount) {
    $stmt = $conn->prepare("INSERT INTO students (name, school, amount) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $school, $amount);
    $stmt->execute();
    $stmt->close();
  }
}

// Fetch all students
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Student Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
  <style>
    :root {
      --primary: #f05462;
      --white: #fff;
      --light-bg: #f4f9ff;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body {
      background: var(--light-bg);
      padding: 40px;
    }

    .container {
      max-width: 800px;
      margin: auto;
      background: var(--white);
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: var(--primary);
    }

    form {
      display: flex;
      flex-direction: column;
      margin-bottom: 40px;
    }

    input {
      padding: 12px;
      margin-bottom: 20px;
      border: 2px solid var(--primary);
      border-radius: 5px;
      font-size: 16px;
    }

    .submit-button {
      background: var(--primary);
      color: white;
      padding: 12px;
      border-radius: 5px;
      font-size: 16px;
      border: none;
      cursor: pointer;
      transition: 0.3s;
    }

    .submit-button:hover {
      background: white;
      color: var(--primary);
      border: 2px solid var(--primary);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 12px;
      border: 1px solid #ddd;
      text-align: left;
    }

    th {
      background-color: var(--primary);
      color: white;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    .empty {
      text-align: center;
      color: gray;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Add New Student</h2>
    <form method="POST" onsubmit="return validateForm()">
      <input type="text" id="name" name="name" placeholder="Name" required />
      <input type="text" id="school" name="school" placeholder="School" required />
      <input type="text" id="amount" name="amount" placeholder="Amount" required />
      <button type="submit" class="submit-button">Add</button>
    </form>

    <h2>Student Dashboard</h2>
    <?php if ($result && $result->num_rows > 0): ?>
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Name</th>
            <th>School</th>
            <th>Amount</th>
          </tr>
        </thead>
        <tbody>
          <?php while($row = $result->fetch_assoc()): ?>
            <tr>
              <td><?= htmlspecialchars($row['id']) ?></td>
              <td><?= htmlspecialchars($row['name']) ?></td>
              <td><?= htmlspecialchars($row['school']) ?></td>
              <td><?= htmlspecialchars($row['amount']) ?></td>
            </tr>
          <?php endwhile; ?>
        </tbody>
      </table>
    <?php else: ?>
      <div class="empty">No students added yet.</div>
    <?php endif; ?>
  </div>

  <script>
    function validateForm() {
      const name = document.getElementById("name").value.trim();
      const school = document.getElementById("school").value.trim();
      const amount = document.getElementById("amount").value.trim();

      if (!name || !school || !amount) {
        alert("Please fill in all fields.");
        return false;
      }

      return true;
    }
  </script>
</body>
</html>

<?php $conn->close(); ?>
