<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<link href="css/index.css" type="text/css" rel="stylesheet">
<link href="css/shownews.css" type="text/css" rel="stylesheet">
<link rel="stylesheets" href="css/login.css" type="text/css">
</head>
<body>

<div class="header">
<div class="heading">
<h1>NEWSs</h1>
</div>

<div class="menubar">
<a href="index.php">Home</a>
<a href="PostNews.html">Upload</a>
<select class="categories">
<option>Select Category</option>
<option>Politics</option>
<option>Science</option>
<option>Technology</option>
<option>Cinema</option>
<option>Wheather</option>
<option>Sports</option>
</select>
<a href="about.html">About Us</a>
<a href="AdminLogin.html" class="admin">Login</a>
<a href="howtouse.html">How to use</a>
<a href="contact.html">Contact</a>
</div>
</div>

<div class="data">


<?php

$id=$_POST["id"];

$conn = new mysqli("localhost", "root", "12345", "myDB");
$que = "SELECT * FROM news WHERE idnews=".$id.";";
$result = $conn->query($que);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $id =  $row["idnews"];
    $title = $row["title"];
    $image = $row["imageurl"];
    $description = $row["description"];
    $author = $row["writer"];
    
    echo "<div class=p1>
            <div class=p2>
                <img src=images/".$image.">
            </div>
        <div class=p3>";
    echo "<div class=title>".$title."</div>
            <div class=description>" .$description."</div><div class=author> ".$author."</div>";
    echo "</div></div></div>";

}

?>

</div>

<br><br><br>
</body>
</html>