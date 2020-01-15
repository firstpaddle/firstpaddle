<?php

name=$_POST['name'];
email=$_POST['email'];
message=$_POST['message'];

array_data=array(name=>$name,email=>$email,message=>$message);

$file=fs.read('contact_us.js',w);

fs.append(json_encode(array_data));

?>
