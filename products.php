<?php
include 'includes/navbar.php';
include 'db_connect.php';
$message = "";

// --- ADD PRODUCT ---
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_product'])) {
    $name = trim($_POST['name']);
    $description = trim($_POST['description']);
    $price = $_POST['price'] === '' ? 0 : (float) $_POST['price'];
    $quantity = $_POST['quantity'] === '' ? 0 : (int) $_POST['quantity'];

    $stmt = $conn->prepare("INSERT INTO products (name, description, price, quantity) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssdi", $name, $description, $price, $quantity);
        if ($stmt->execute()) {
            $stmt->close();
            header("Location: products.php?success=1");
            exit();
        } else {
            $message = "❌ Insert failed: " . htmlspecialchars($stmt->error);
            $stmt->close();
        }
    } else {
        $message = "❌ Prepare failed: " . htmlspecialchars($conn->error);
    }
}

// --- DELETE PRODUCT & REORDER IDS ---
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM products WHERE id = $id");
    $conn->query("SET @count = 0");
    $conn->query("UPDATE products SET id = @count:=@count+1 ORDER BY id ASC");
    $conn->query("ALTER TABLE products AUTO_INCREMENT = 1");
    header("Location: products.php?deleted=1");
    exit();
}

// --- FETCH PRODUCTS ---
$result = $conn->query("SELECT * FROM products ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | Robisearch</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 40px;
        }
        .table th {
            background-color: #0d6efd;
            color: white;
            text-align: center;
        }
        .table td {
            vertical-align: middle;
            text-align: center;
        }
        .btn-add {
            background-color: #198754;
            color: white;
        }
        .btn-add:hover {
            background-color: #157347;
        }
        .card {
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        footer {
            text-align: center;
            padding: 20px;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center text-primary fw-bold mb-4">Robisearch Product Management</h2>

    <!-- Success Messages -->
    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success text-center">✅ Product added successfully!</div>
    <?php elseif (isset($_GET['deleted'])): ?>
        <div class="alert alert-danger text-center">🗑️ Product deleted successfully!</div>
    <?php elseif ($message): ?>
        <div class="alert alert-info text-center"><?php echo $message; ?></div>
    <?php endif; ?>

    <!-- Add Product Button -->
    <div class="text-end mb-3">
        <button class="btn btn-add" data-bs-toggle="collapse" data-bs-target="#addForm">➕ Add New Product</button>
    </div>

    <!-- Collapsible Add Product Form -->
    <div class="collapse" id="addForm">
        <div class="card card-body mb-4">
            <form method="POST">
                <input type="hidden" name="add_product" value="1">
                <div class="row g-3">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Product Name" required>
                    </div>
                    <div class="col-md-3">
                        <input type="text" name="description" class="form-control" placeholder="Description" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="price" class="form-control" placeholder="Price (Ksh)" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" name="quantity" class="form-control" placeholder="Quantity" required>
                    </div>
                    <div class="col-md-2 text-end">
                        <button type="submit" class="btn btn-success w-100">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Product Table -->
    <div class="card">
        <div class="card-body p-0">
            <table class="table table-striped table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Product</th>
                        <th>Description</th>
                        <th>Price (Ksh)</th>
                        <th>Quantity</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0): ?>
                        <?php while ($row = $result->fetch_assoc()): ?>
                            <tr>
                                <td><?php echo $row['id']; ?></td>
                                <td><?php echo htmlspecialchars($row['name']); ?></td>
                                <td><?php echo htmlspecialchars($row['description']); ?></td>
                                <td><?php echo $row['price']; ?></td>
                                <td><?php echo $row['quantity']; ?></td>
                                <td>
                                    <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="products.php?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr><td colspan="6" class="text-center text-muted">No products found.</td></tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<footer class="mt-5">
    <p>&copy; <?php echo date("Y"); ?> Robisearch Technologies | All rights reserved.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const alerts = document.querySelectorAll(".alert");
    alerts.forEach(alert => {
        setTimeout(() => {
            alert.style.transition = "opacity 0.5s, transform 0.5s";
            alert.style.opacity = "0";
            alert.style.transform = "translateY(-10px)";
            setTimeout(() => alert.remove(), 500);
        }, 500);
    });
});
</script>

</body>
</html>
