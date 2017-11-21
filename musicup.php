<!DOCTYPE html>
<html>
<head>
<title>Feel The Music | Contact Us</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body id="page5">
<div class="tail-cont">
  <div class="tail-top-left"></div>
  <div class="tail-top">
    <div class="container">
      <!-- header -->
      <div id="header">
        <div class="logo"><a href="#"><img src="images/logo.jpg" alt="" /></a></div>
        <ul class="site-nav">
          <li><a href="index.html">Home</a></li>
          <li><a href="about-us.html">About Us</a></li>
 <li><a href="musicup.php" class="act">Give Music</a></li>
          <li><a href="music.html">Music Articles</a></li>
          <li><a href="contact-us.html" class="act">Contact Us</a></li>
        </ul>
      </div>
      <!-- content -->
      <div id="content">
        <div class="indent">
          <h2>Give the world your creation</h2>
          <form method="post" action="musicup.php" enctype="multipart/form-data">
<div>
<input type="file" name="title" size="2000000">
</div>
<div>
<textarea name="text" cols="40" rows="4" placeholder="Enterid"></textarea>
</div>
<div>
<input type="submit" name="upload" value="Upload mp3">
</div>
</form>
<?php
$msg="";
if(isset($_POST['upload']))
{
	$target="upload/".basename($_FILES['title']['name']);
	
	$db=mysqli_connect("localhost","root","","audiolibdb");
	
	$title=$_FILES['title']['name'];
        $text=$_POST['text'];
	
	$sql="INSERT INTO audios(id,title) VALUES ('$text','$title')";
	mysqli_query($db,$sql);
	
	if(move_uploaded_file($_FILES['title']['tmp_name'],"upload/"))
	{
		$msg="Mp3 uploaded successfully";
	}else
	{
			$msg="There was a problem uploading the song";
	}
}
?>
        </div>
      </div>
    </div>
  </div>
  <div class="tail-bottom png">
    <!-- footer -->
    <div id="footer">
      <div class="container">
        <div class="indent">
          <div class="fleft">Copyright - Pvr Industries</div>
          <div class="fright">Designed by: Pranay Raut</div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
