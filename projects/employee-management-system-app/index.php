<?php
require 'db.php';
$message = $_GET['message'] ?? '';

$stmt = $conn->prepare('SELECT id, name, email, phone, position, salary FROM employees ORDER BY id DESC');
$stmt->execute();
$result = $stmt->get_result();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Employee Management System</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-W9UyjH+RnUqR3uD8WilqjuW8vGqOKw4Qr+2F0mJkUpb6nI858e7jGC4uX8y8e3sE" crossorigin="anonymous">
  <style>
    body { background: #0d1117; color: #c9d1d9; }
    .card { background: #161b22; border-color: #30363d; }
    .table thead { color: #8b949e; }
    .btn-primary { background: #238636; border: none; }
    .btn-primary:hover { background: #2ea043; }
  </style>
</head>
<body>
  <div class="container py-5">
    <div class="d-flex flex-column flex-md-row align-items-start justify-content-between mb-4 gap-3">
      <div>
        <h1 class="h3 mb-1">Employee Management System</h1>
        <p class="text-muted mb-0">Manage your team quickly with a modern PHP/MySQL dashboard.</p>
      </div>
      <a href="add.php" class="btn btn-primary btn-lg">Add New Employee</a>
    </div>

    <?php if ($message): ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <?php endif; ?>

    <div class="card shadow-sm">
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table table-dark table-striped align-middle mb-0">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Position</th>
                <th>Salary</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php if ($result->num_rows === 0): ?>
                <tr>
                  <td colspan="7" class="text-center text-muted py-4">No employees found. Add a new employee to get started.</td>
                </tr>
              <?php else: ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                  <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo htmlspecialchars($row['name'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['email'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['phone'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td><?php echo htmlspecialchars($row['position'], ENT_QUOTES, 'UTF-8'); ?></td>
                    <td>$<?php echo number_format((float)$row['salary'], 2); ?></td>
                    <td class="text-end">
                      <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-light me-1">Edit</a>
                      <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this employee?');">Delete</a>
                    </td>
                  </tr>
                <?php endwhile; ?>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-4E7bvf7pE+G1Bql2u7nQoBD0nYF1KGcOBB0VB0j0f9Lx8aDlWHNUQm1uYVmJcX0m" crossorigin="anonymous"></script>
</body>
</html>
