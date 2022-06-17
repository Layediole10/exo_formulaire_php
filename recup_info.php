<?php
// definition des variables (constantes) de connexion de la base
// define('BD_SERVER', '127.0.0.1');
// define('BD_USERNAME', 'root');
// define('BD_PASS', '');
// define('BD_NAME', 'mybd');


// // $db_connect = mysqli_connect(BD_SERVER, BD_USERNAME, BD_PASS, BD_NAME);

// // data source name (dsn)
// $dsn = "mysql:dbname=".BD_NAME.";host=".BD_SERVER;

// try{ 
//     // les options
    // $options = [
    //     // definir un mode de fetch par defaut...
    // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // // PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAME utf8',
    // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    // PDO::ATTR_EMULATE_PREPARES => false
    // ];

//     // intanciation....PDO(php data object)   
//     $pdo = new PDO($dsn, BD_USERNAME, BD_PASS, $options);

    

//     // echo 'connecté!';
// }catch (PDOException $e){
//      die ("ERREUR: ".$e->getMessage());
// }

$sql = "INSERT INTO `client`(`prenom`, `email`) VALUES ('$_POST[username]', '$_POST[email]')";

$res = $pdo->query($sql);
$res->fetchAll();

// echo "<pre>";
// print_r($res);
// echo "</pre>";

// echo "<hr/>";



echo "<pre>";
print_r($_POST);
echo "</pre>";

$date1=date_create($_POST['date'][0]);
$date2=date_create($_POST['date'][1]);
 $diff=date_diff($date1,$date2);

 

 echo "<pre>";
 echo ($diff->format("%a"));
 echo "</pre>";

//  echo "<pre>";
//  print_r($_COOKIE);
//  echo "</pre>";


// $choice = $_POST['choice']['0'];
// echo $choice;

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";


/* NOTES: 
-->isset(): Détermine si une variable est déclarée et est différente de null


*/


// $folder_File:le répertoire où le fichier va être placé
$folder_File = "uploads/";

// $path_file:le chemin du fichier à télécharger;
// basename():Retourne le nom de la composante finale d'un chemin;
// $path_file = $folder_File . basename($_FILES["cv"]["name"]);

// // Check if file already exists
// if (file_exists($path_file)) {
//     echo "Sorry, file already exists.";
//   }else{

//     // move_uploaded_file(): Déplace un fichier téléchargé
//     move_uploaded_file($_FILES["cv"]["tmp_name"], $path_file);

//     echo "The file ". htmlspecialchars( basename( $_FILES["cv"]["name"])). " has been uploaded.";

//   }








?>


