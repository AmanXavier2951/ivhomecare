<?php
// Database connection (make sure you have included your database connection file)
include '../../config/database.php';

header('Content-Type: application/json'); // Set header to return JSON response

$response = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $heading = $_POST['heading'];
    $content = $_POST['content'];
    $description = $_POST['description'];

    // File upload handling
    $targetDir = "../../assets/blog/"; // Adjusted path to be consistent
    
    // Generate a unique filename
    $fileExtension = strtolower(pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION));
    $uniqueName = uniqid() . '.' . $fileExtension;
    $targetFile = $targetDir . $uniqueName;

    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is an actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check === false) {
        $response['status'] = 'error';
        $response['message'] = 'File is not an image.';
        echo json_encode($response);
        exit;
    }

    // Check if file size (5MB maximum)
    if ($_FILES["image"]["size"] > 5000000) {
        $response['status'] = 'error';
        $response['message'] = 'Sorry, your file is too large.';
        echo json_encode($response);
        exit;
    }

    // Allow certain file formats
    $allowedTypes = array("jpg", "png", "jpeg", "gif");
    if (!in_array($imageFileType, $allowedTypes)) {
        $response['status'] = 'error';
        $response['message'] = 'Sorry, only JPG, JPEG, PNG & GIF files are allowed.';
        echo json_encode($response);
        exit;
    }

    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO blogs (title, heading, description, images, content) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param('sssss', $title, $heading, $description, $uniqueName, $content); // Store the unique filename

        if ($stmt->execute()) {
            $response['status'] = 'success';
            $response['message'] = 'Blog post created successfully.';
        } else {
            $response['status'] = 'error';
            $response['message'] = 'Error: ' . $stmt->error;
        }

        $stmt->close();
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Sorry, there was an error uploading your file.';
    }

    $conn->close();

} else {
    $response['status'] = 'error';
    $response['message'] = 'Invalid request method.';
}

echo json_encode($response);
?>
