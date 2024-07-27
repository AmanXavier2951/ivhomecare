<?php
include '../config/database.php';

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    // Prepare and execute the query
    $stmt = $conn->prepare("SELECT title, heading, description, images, content, created FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        ?>
<!DOCTYPE html>
<html>
<head>
    <title><?php echo htmlspecialchars($row['title']); ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="<?php echo htmlspecialchars($row['description']); ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="../style/layout.css">
    </style>
</head>
<body>
    <div class="container-fluid m-0 p-0">
        <?php include 'header.php'; ?>
        <div class="row m-0 mt-5 pt-5">
            <div class="col-md-8 offset-md-2">
                <h1><?php echo htmlspecialchars($row['heading']); ?></h1>
                <img src="../assets/blog/<?php echo htmlspecialchars($row['images']); ?>" class="img-fluid" alt="<?php echo htmlspecialchars($row['title']); ?>">
                <div class="blog-content mt-4">
                    <?php echo $row['content']; ?>
                </div>
            </div>
        </div>
        <?php include 'footer.php'; ?>
    </div>
</body>
</html>
        <?php
    } else {
        echo "No blog post found.";
    }
    $stmt->close();
} else {
    echo "No ID specified.";
}

$conn->close();
?>


