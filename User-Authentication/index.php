<?php
include('db_connect.php');

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $postData = [
        'firstName' => $_POST['firstName']
    ];

    $ref_table = "contacts";
    $postRef = $database->getReference($ref_table)->push($postData);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="first_name">First Name:</label>
    <input type="text" name="firstName" id="first_name" placeholder="First Name" required>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
