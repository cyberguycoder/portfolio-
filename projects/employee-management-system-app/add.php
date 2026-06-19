<?php
require 'db.php';
$error = '';
$name = '';
$email = '';
$phone = '';
$position = '';
$salary = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $position = trim($_POST['position'] ?? '');
    $salary = trim($_POST['salary'] ?? '');

    if ($name === '' || $email === '' || $phone === '' || $position === '' || $salary === '') {
        $error = 'All fields are required.';
    } else {
        $stmt = $conn->prepare('INSERT INTO employees (name, email, phone, position, salary) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('ssssd', $name, $email, $phone, $position, $salary);
        $stmt->execute();

        header('Location: index.php?message=' . urlencode('Employee added successfully.'));
        exit;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Employee</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-W9UyjH+RnUqR3uD8WilqjuW8vGqOKw4Qr+2F0mJkUpb6nI858e7jGC4uX8y8e3sE" crossorigin="anonymous">
  <style>
    body { background: #0d1117; color: #c9d1d9; }
    .card { background: #161b22; border-color: #30363d; }
    .btn-primary { background: #238636; border: none; }
    .btn-primary:hover { background: #2ea043; }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between align-items-start gap-3 mb-4">
      <div>
        <h1 class="h3 mb-1">Add New Employee</h1>
        <p class="text-muted mb-0">Enter new employee details to save them in the system.</p>
      </div>
      <a href="index.php" class="btn btn-outline-light">Back to Dashboard</a>
    </div>
    <div class="card shadow-sm">
      <div class="card-body">
        <?php if ($error): ?>
          <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
        <form method="post" novalidate>
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control form-control-lg" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control form-control-lg" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control form-control-lg" value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Position</label>
              <input type="text" name="position" class="form-control form-control-lg" value="<?php echo htmlspecialchars($position, ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Salary</label>
              <input type="number" name="salary" step="0.01" min="0" class="form-control form-control-lg" value="<?php echo htmlspecialchars($salary, ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Save Employee</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-4E7bvf7pE+G1Bql2u7nQoBD0nYF1KGcOBB0VB0j0f9Lx8aDlWHNUQm1uYVmJcX0m" crossorigin="anonymous"></script>
</body>
</html>
