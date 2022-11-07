<?php
include "server.php";

    if(isset($_POST['find'])) {
        $found = $_POST['item-find'];
    
        $find = "SELECT * FROM yourtable WHERE itemname = '$found' LIMIT 1";
        $result = mysqli_query($con, $find);
        $resultcheck = mysqli_num_rows($result);


    while($row = $result->fetch_array()) {
        $itemfound = $row['itemname'];
    }

}
?>

<html>
<head>
    <title>Find item</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="add-section">
<a id="find-site" href="index.php"><i class='bx bx-plus'></i> Add</a>
<form action="" method="POST">
<input name="item-find" placeholder="Find item">
<button name="find" type="submit">Find</button>
<p class="item-name"><?= $itemfound ?></p>
</form>
</section>
</body>
</html>