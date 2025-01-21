<?php
include('db_connect.php');

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $postData = [
        'firstName' => $_POST['firstName'],
        'lastName' => $_POST['lastName']
    ];

    $ref_table = "contacts";
    $postRef = $database->getReference($ref_table)->push($postData);
}

?>

<!DOCTYPE html>
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
    <label for="last_name">Last Name:</label>
    <input type="text" name="lastName" id="last_name" placeholder="Last Name" required>
    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
