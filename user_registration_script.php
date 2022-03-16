<?php
require 'connection.php';

session_start();

$name = mysqli_real_escape_string($con, $_POST['name']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";

if (!preg_match($regex_email, $email)) {
    echo "Incorrect email.";
?>

    <meta http-equiv="refresh" content="2;url=signup.php" />

<?php
}
$password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));

if (strlen($password) < 6) {
    echo "Password should have atleast 6 characters.";
?>

    <meta http-equiv="refresh" content="2;url=signup.php" />

<?php
}

$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);

$duplicate_user_query = "select id 
                        from users 
                        where email = '$email'";

$duplicate_user_result = mysqli_query($con, $duplicate_user_query) or die(mysqli_error($con));
$rows_fetched = mysqli_num_rows($duplicate_user_result);

if ($rows_fetched > 0) {
?>

    <script>
        window.alert("Email already exists!");
    </script>
    <meta http-equiv="refresh" content="1;url=signup.php" />

<?php
} else {
    $user_registration_query = "insert into users(name,email,password,contact,city,address) 
                                    values ('$name','$email','$password','$contact','$city','$address')";

    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    echo "User successfully registered";

    $_SESSION['email'] = $email;
    $_SESSION['id'] = mysqli_insert_id($con);
?>

    <meta http-equiv="refresh" content="3;url=index.php" />
<?php
}
?>