<?php
include "server.php";


if(isset($_POST['submit'])) {
    $itemname = $_POST['add-item'];

    $sql = "INSERT INTO yourtable (itemname) VALUES ('$itemname')";
    mysqli_query($con, $sql);
}
?>

<html>
<head>
<title>PHP | Project</title>
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
</head>
<body>
<section class="add-section">
<a id="find-site" href="find.php"><i class='bx bx-search-alt-2'></i> Find</a>
<form action="" method="POST">
<input name="add-item" placeholder="Add item">
<button name="submit" type="submit">Add</button>
</form>
</section>
<script src="main.js"></script>
</body> 
</html>