<nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm">
  <div class="container">
    
    <a class="navbar-brand fw-bold" href="index.php">
      <img src="images/logo.png" alt="Robisearch Logo" width="35" height="35" class="d-inline-block align-text-top me-40">
      Robisearch
    </a>

    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link px-3 <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active fw-bold' : ''; ?>" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active fw-bold' : ''; ?>" href="products.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link px-3 <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active fw-bold' : ''; ?>" href="contact.php">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<style>
  .navbar-nav .nav-link {
    color: #f8f9fa !important;
    transition: color 0.3s ease, background-color 0.3s ease;
    border-radius: 8px;
  }
  .navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.2);
    color: #fff !important;
  }
  .navbar-nav .nav-link.active {
    background-color: #0d6efd !important;
    color: #fff !important;
  }
</style>
