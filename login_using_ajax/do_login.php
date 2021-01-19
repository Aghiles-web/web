
<?php
    session_start();
if(isset($_POST['do_login'])){

    $host="localhost";
    $username="root";
    $password="";
    $databasename="ajax";
    $connect=mysql_connect($host,$username,$password);
    $db=mysql_select_db($databasename);

    $email=$_POST['email'];
    $pass=$_POST['password'];
    $select_data1=mysql_query("select * from students where email='$email' and password='$pass'");
    $select_data2=mysql_query("select * from students where user_name='$email' and password='$pass'");
 if($row=mysql_fetch_array($select_data1)){
    $_SESSION['name']=$row['name'];
    echo "1";
 }
 elseif($row=mysql_fetch_array($select_data2))
 {
     $_SESSION['name']=$row['name'];
     echo "1"; 
 }
 else{
     echo "0";
 }
    exit();
}
?>