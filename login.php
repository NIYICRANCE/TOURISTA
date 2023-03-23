   <!-- users can login through the login.php form by checking if the user exists and which of the roles the user falls under-->
<?php
session_start();
include 'config.php';

if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username='$username' AND password='$password' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_id'] = $row['id'];
        $_SESSION['username'] = $row['username'];
        $_SESSION['role'] = $row['role'];

        if ($row['role'] == 'admin') {
            header("Location: admin_dashboard.php");
            exit();
        } elseif ($row['role'] == 'story_seeker') {
            header("Location: story_seeker.php");
            exit();
        } elseif ($row['role'] == 'storyteller') {
            header("Location: storyteller.php");
            exit();
        }
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
</head>
<body>
  <h1>Login</h1>
  <?php if(isset($error)): ?>
    <p><?php echo $error; ?></p>
  <?php endif; ?>
  <form action="" method="post">
    <label>Username</label><br>
    <input type="text" name="username" required><br>
    <label>Password</label><br>
    <input type="password" name="password" required><br>
    <input type="submit" name="submit" value="Login">
  </form>
</body>
</html>
