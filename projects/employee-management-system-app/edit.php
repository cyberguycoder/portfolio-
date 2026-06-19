<?php
require 'db.php';
$error = '';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $position = trim($_POST['position'] ?? '');
    $salary = trim($_POST['salary'] ?? '');

    if ($id <= 0 || $name === '' || $email === '' || $phone === '' || $position === '' || $salary === '') {
        $error = 'All fields are required.';
    } else {
        $stmt = $conn->prepare('UPDATE employees SET name = ?, email = ?, phone = ?, position = ?, salary = ? WHERE id = ?');
        $stmt->bind_param('sssdii', $name, $email, $phone, $position, $salary, $id);
        $stmt->execute();

        header('Location: index.php?message=' . urlencode('Employee updated successfully.'));
        exit;
    }
}

$stmt = $conn->prepare('SELECT id, name, email, phone, position, salary FROM employees WHERE id = ?');
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$employee = $result->fetch_assoc();

if (!$employee) {
    header('Location: index.php?message=' . urlencode('Employee not found.'));
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Employee</title>
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
        <h1 class="h3 mb-1">Edit Employee</h1>
        <p class="text-muted mb-0">Update the employee details below.</p>
      </div>
      <a href="index.php" class="btn btn-outline-light">Back to Dashboard</a>
    </div>
    <div class="card shadow-sm">
      <div class="card-body">
        <?php if ($error): ?>
          <div class="alert alert-danger" role="alert"><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
        <form method="post" novalidate>
          <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
          <div class="row g-3">
            <div class="col-md-6">
              <label class="form-label">Name</label>
              <input type="text" name="name" class="form-control form-control-lg" value="<?php echo htmlspecialchars($employee['name'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control form-control-lg" value="<?php echo htmlspecialchars($employee['email'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Phone</label>
              <input type="text" name="phone" class="form-control form-control-lg" value="<?php echo htmlspecialchars($employee['phone'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-6">
              <label class="form-label">Position</label>
              <input type="text" name="position" class="form-control form-control-lg" value="<?php echo htmlspecialchars($employee['position'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
            <div class="col-md-4">
              <label class="form-label">Salary</label>
              <input type="number" name="salary" step="0.01" min="0" class="form-control form-control-lg" value="<?php echo htmlspecialchars($employee['salary'], ENT_QUOTES, 'UTF-8'); ?>" required>
            </div>
          </div>
          <div class="mt-4">
            <button type="submit" class="btn btn-primary btn-lg">Update Employee</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-4E7bvf7pE+G1Bql2u7nQoBD0nYF1KGcOBB0VB0j0f9Lx8aDlWHNUQm1uYVmJcX0m" crossorigin="anonymous"></script>
</body>
</html>
