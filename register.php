   <!-- the register.php allows the register.html page to collect the POST request and capture the data in the database. this code includes security considerations to prevent SQL injection, string cleaning and security checks -->
<?php
// Start a session
session_start();

// Include database configuration file
include 'config.php';

// Check if form is submitted
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['user_type'])) {
    
    // Clean input data to prevent sql injection
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($conn, $_POST['confirm_password']);
    $user_type = mysqli_real_escape_string($conn, $_POST['user_type']);
    
    // Check if password and confirm password match
    if ($password != $confirm_password) {
        $_SESSION['error'] = "Passwords do not match!";
        header("Location: register.php");
        exit();
    }
    
    // Check if username or email already exists
    $sql = "SELECT * FROM users WHERE username='$username' OR email='$email'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $_SESSION['error'] = "Username or email already exists!";
        header("Location: register.php");
        exit();
    }
    
    // Upload profile picture
    $image_name = $_FILES['image']['name'];
    $image_tmp_name = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_type = $_FILES['image']['type'];
    $image_error = $_FILES['image']['error'];
    
    // Check if file is uploaded successfully
    if ($image_error === 0) {
        
        // Check if file size is less than 1MB
        if ($image_size <= 1000000) {
            
            // Generate a unique name for the uploaded file
            $image_new_name = uniqid('', true) . '.' . pathinfo($image_name, PATHINFO_EXTENSION);
            
            // Define target directory
            $target_dir = "uploads/";
            $target_file = $target_dir . $image_new_name;
            
            // Upload file to target directory
            if (move_uploaded_file($image_tmp_name, $target_file)) {
                
                // Insert user data into database
                $sql = "INSERT INTO users (username, email, password, user_type, profile_picture) VALUES ('$username', '$email', '$password', '$user_type', '$image_new_name')";
                
                if (mysqli_query($conn, $sql)) {
                    $_SESSION['success'] = "Registration successful!";
                    header("Location: login.php");
                    exit();
                } else {
                    $_SESSION['error'] = "Error: " . mysqli_error($conn);
                    header("Location: register.html");
                    exit();
                }
                
            } else {
                $_SESSION['error'] = "Error uploading file!";
                header("Location: register.html");
                exit();
            }
            
        } else {
            $_SESSION['error'] = "File size should be less than 1MB!";
            header("Location: register.html");
            exit();
        }
        
    } else {
        $_SESSION['error'] = "Error uploading file!";
        header("Location: register.html");
        exit();
    }
    
} else {
$_SESSION['error'] = "All fields are required!";
header("Location: register.html");
exit();
}