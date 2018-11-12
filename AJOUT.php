<?php
$name_file=(uniqid("").".jpg");
$tmp_file=$_FILES['file']['tmp_name'];
$local="sandwish+cin/";
move_uploaded_file($tmp_file,$local.$name_file);
