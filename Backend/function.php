<?php
include "config.php";
function registerUser($name, $email, $pass, $cpass) {
    global $conn; // Access the global $conn variable

    // Initialize an array to store messages
    $message = array();

    // Filter and sanitize input data
    $name = filter_var($name, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_STRING);
    $pass = md5($pass); // You should use a more secure password hashing method
    $cpass = md5($cpass); // You should use a more secure password hashing method

    // Check if the user with the same email exists
    $select = $conn->prepare("SELECT * FROM `users` WHERE email = ?");
    $select->execute([$email]);

    if ($select->rowCount() > 0) {
        $message[] = 'User email already exists!';
    } else {
        if ($pass != $cpass) {
            $message[] = 'Confirm password not matched!';
        } else {
            $insert = $conn->prepare("INSERT INTO `users` (username, email, password) VALUES (?,?,?)");
            $insert->execute([$name, $email, $pass]);

            if ($insert) {
                return true; // Registration was successful
            }
        }
    }

    // Registration was not successful
    return false;
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];

    // Handle messages or display them to the user as needed
}
?>

<?php
function showMessage($message, $type = 'success') {
    $messageClass = ($type === 'success') ? 'alert alert-success' : 'alert alert-danger';
    echo '<div class="' . $messageClass . '">' . $message . '</div>';
}
?>
<?php
function userLogin() {
    global $conn;
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $email = filter_var($email, FILTER_SANITIZE_STRING);
        $pass = md5($_POST['pass']);
        $pass = filter_var($pass, FILTER_SANITIZE_STRING);

        $sql = "SELECT * FROM `users` WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email, $pass]);
        $rowCount = $stmt->rowCount();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($rowCount > 0) {
            $_SESSION['user_id'] = $row['id'];
            return true; // Login successful
        } else {
            return false; // Login failed
        }
    }
}
//header('location: home.php?login=success');
?>
