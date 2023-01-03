<?php

  session_start();
  try{
    include_once("./connect.php");
    if(isset($_POST["login_button"])){
      if($_POST["username"] == "" or $_POST["password"] == ""){

        echo ("<script LANGUAGE='JavaScript'>
              window.alert('Username and Password can not be empty.');
              window.location.href='../index.php';
              </script>");

      }

      else{

        $username=$_POST["username"];
        $password=$_POST["password"];
        $query=$pdo->prepare("SELECT * FROM users WHERE username=? AND password=? ");
        $query->execute(array($username,$password));
        $control=$query->fetch();
        $id=$control['id'];
        if($username == 'admin' and $password == 'admin'){
          $_SESSION["admin"]="admin";
          header("Location:../dashboard.php");
        }
        echo ("<script LANGUAGE='JavaScript'>
        window.alert('Username and Password is wrong.');
        window.location.href='../index.php';
        </script>");
      }
    }
  }
 
  catch(PDOException $e){
    echo $e->getMessage("Connection failed");
  }
