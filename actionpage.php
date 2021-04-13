<?php IF(isset($_POST['submit'])) {
  //created with a mobile because i do not have a laptop
  echo "regisration successful";
   }
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $dob= $_POST['dob'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   $confirm_password = $_POST['confirm_password'];

   $array_data =[
     '$first_name' => $first_name,
     '$last_name' => $last_name,
     '$password' => $password,
     '$username' => $username,
     '$dob'=> $dob,
     '$confirm_password' => $confirm_password
     ];
file_put_contents('files/'. 'edwin'. ".json", json_encode($array_data));
   
   
   
?>