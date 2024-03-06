<?php
require_once __DIR__ .'/utilities/header.php';

$currentid = $_GET['id'];



    
$sql = "DELETE FROM medicaments WHERE id = $currentid";
$result = $db->query($sql); 
  

header('Location: edit.php');






require_once __DIR__ . "/utilities/footer.php";