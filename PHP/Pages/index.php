<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>NEWss</title>
<link href="css/index.css" type="text/css" rel="stylesheet">
<link rel="stylesheets" href="css/login.css" type="text/css">
</head>
<body>

<div class="header">
<div class="heading">
<h1>NEWSs</h1>
</div>

<div class="menubar">
<a href="#home">Home</a>
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

echo "<script src=shownews.js></script>";
$conn = new mysqli("localhost", "root", "12345", "myDB");
$que = "SELECT * FROM news;";
$result = $conn->query($que);

if ($result->num_rows > 0) {
    echo "<div class='cards'>"; 
    while($row = $result->fetch_assoc()) {
		$image = "'images/".$row["imageurl"]."'";
		//$id = "'" .$row["idnews"]."'";
		//echo "<br>$id $image $title $desc $writer<br>";
    	//echo "<img onClick=setUrl(" .$id .','."'". $image."',encodeURIComponent('".$title."'),encodeURIComponent('".$desc."'),encodeURIComponent('".$writer."')); src=" .$row["imageurl"]. " width=380 height=250 name=".$row["idnews"].">".$row["title"];
    	echo "<div class=container>
                <form action=shownews.php method=post>
                <button type=submit name=id value=".$row["idnews"].">
                <img height=200px src=" .$image ." name=".$row["idnews"].">
                <div class='bottom'><p class='title'><b> ".$row["title"]."</b></p></div>
                </button>
              </form></div>";
    }
    echo "</div>";
} else {
    echo "<div class=body>
<div class=login id=login><p>No articles yet</p></div></div>";
}

$conn->close();
?>
</div>

<br><br><br>

</body>
</html>