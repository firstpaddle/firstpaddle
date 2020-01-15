<?php
//use \Exception as Exception;
$name       = @trim(stripslashes($_POST['name'])); 
$email       = @trim(stripslashes($_POST['email'])); 
//$subject    = @trim(stripslashes($_POST['subject'])); 
$message    = @trim(stripslashes($_POST['message'])); 
//$to   		= 'realayush99@gmail.com';//replace with your email

//$headers   = array();
//$headers[] = "MIME-Version: 1.0";
//$headers[] = "Content-type: text/plain; charset=iso-8859-1";
//$headers[] = "From: {$name} <{$from}>";
//$headers[] = "Reply-To: <{$from}>";
//$headers[] = "Subject: {$subject}";
//$headers[] = "X-Mailer: PHP/".phpversion();

//mail($to, $subject, $message, $headers);

//$filename="contact_data.json";
//$file = fopen( $filename, 'a+' );
try
{

$object = new stdClass();
$object->name = $name;
$object->email= $email;
$object->message= $message;
$array_data[] = $object;
//$array_data=(object)['name'=>$name,'email'=>$email,'subject'=>$subject);
//fwrite( $file,"apple"); 
//echo $name.$message.$subject."hello";

//print_r($array_data);

$inp = file_get_contents('contact_us.json');

if(!json_decode($inp))
{
	$inp="[]";
//if(json_decode($inp)!="array")
//{
//$inp=array();
//}
}
$tempArray = json_decode($inp);
array_push($tempArray, $object);
$jsonData = json_encode($tempArray);
file_put_contents('contact_us.json',$jsonData);
echo "hello";
echo $jsonData;
}

catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
exit();
//catch(\Exception $e)
//{
//	print_r($e->getMessage());
//}
die;
