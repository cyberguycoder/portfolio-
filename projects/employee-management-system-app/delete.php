<?php
require 'db.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if ($id > 0) {
    $stmt = $conn->prepare('DELETE FROM employees WHERE id = ?');
    $stmt->bind_param('i', $id);
    $stmt->execute();
}

header('Location: index.php?message=' . urlencode('Employee deleted successfully.'));
exit;
