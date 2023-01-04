<?php
    $pdo = new PDO("mysql:host=localhost;dbname=movieticketdb", "root", "");

  if(isset($_POST["submit"])){
    $moviename = $_POST["moviename"];
    $discription = $_POST["discription"];
    $relesedate = $_POST["relesedate"];
    $language = $_POST["language"];
    $ppticket = $_POST["ppticket"];
    $photo = $_POST["photo"];
    $category = $_POST["category"];
    
    $query=$pdo->prepare("INSERT INTO movies (Name,Discription,Relese_date,Language,Price_Per_T,Photo,Category)
                          VALUES (:moviename,:discription,:relesedate,:language,:ppticket,:photo,:category)");
    $data=$query->execute([':moviename'=>$moviename,':discription'=>$discription,':relesedate'=>$relesedate,':language'=>$language,':ppticket'=>$ppticket,':photo'=>$photo,':category'=>$category]);
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Submited Sucessfully');
    window.location.href='../pages/Movie_releted_pages/movie.php';
    </script>");

    }
    
 ?>