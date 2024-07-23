<?php include 'header.php'; ?>
<body>
  <?php  include 'sidebar.php'; ?>
  <div id="main">
    <h2 class="mt-2">Admin Dashboard</h2>
    <p>Welcome <?php echo htmlspecialchars($admin['admin_name']); ?></p>
    <a class="btn btn-danger" href="logout.php">Logout</a>
  </div>
</body>
</html> 
