    <?php
session_start();
include '../../config/database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = md5($_POST['password']); // Hash the password using md5

    // Check if the email exists
    $sql = "SELECT * FROM admin WHERE admin_email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo 'Admin not found';
    } else {
        // Check if the password matches
        $sql = "SELECT * FROM admin WHERE admin_email='$email' AND admin_password='$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $_SESSION['admin'] = $email;
            echo 'success';
        } else {
            echo 'Wrong Password';
        }
    }
}
?>
