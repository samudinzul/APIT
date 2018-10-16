<?php
// Set new file name

$upload =$_FILES["file"]["tmp_name"];
$upload2 =$_FILES["file2"]["tmp_name"];
$upload3 =$_FILES["file3"]["tmp_name"];
$upload4 =$_FILES["file4"]["tmp_name"];
$upload5 =$_FILES["file5"]["tmp_name"];
$upload6 =$_FILES["file6"]["tmp_name"];


//change this value if change website
$db = mysqli_connect('localhost', 'id3227606_invive2', 'invive2', 'id3227606_invive2');

// upload file
if(is_uploaded_file($upload)){

move_uploaded_file($upload, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload).'.jpg');
$filename = basename($upload).".jpg";
$query ="UPDATE apit SET link1='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}

else if(is_uploaded_file($upload2)){

move_uploaded_file($upload2, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload2).'.jpg');
$filename = basename($upload2).".jpg";
$query ="UPDATE apit SET link2='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}

else if(is_uploaded_file($upload3)){

move_uploaded_file($upload3, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload3).'.jpg');
$filename = basename($upload3).".jpg";
$query ="UPDATE apit SET link3='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}

else if(is_uploaded_file($upload4)){

move_uploaded_file($upload4, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload4).'.jpg');
$filename = basename($upload4).".jpg";
$query ="UPDATE apit SET link4='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}
else if(is_uploaded_file($upload5)){

move_uploaded_file($upload5, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload5).'.jpg');
$filename = basename($upload5).".jpg";
$query ="UPDATE apit SET link5='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}
else if(is_uploaded_file($upload6)){

move_uploaded_file($upload6, '/storage/ssd2/606/3227606/public_html/img/'.basename($upload6).'.jpg');
$filename = basename($upload6).".jpg";
$query ="UPDATE apit SET link6='$filename' ORDER BY id DESC LIMIT 1";
mysqli_query($db, $query);
}

	


?>