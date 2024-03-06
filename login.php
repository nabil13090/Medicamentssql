<?php 

require_once __DIR__ . '\fonction\database.fn.php';

session_start() ;


// Obtenez la connexion PDO en utilisant la fonction getPDOlink
$db = getPDOlink($config);

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Utilisez htmlspecialchars pour éviter les attaques XSS
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Utilisez des requêtes préparées pour éviter les attaques par injection SQL
    $query = "SELECT * FROM first_dbusers WHERE username = :username AND password = :password";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    // Récupérez le résultat
    $rows = $stmt->rowCount();

    session_start() ;

    if ($rows == 1) {
        $_SESSION['username'] = $username;
        header("Location: index.php");
        exit(); // Assurez-vous de terminer le script après la redirection
    } else {
        $message = 'Le nom est incorrect ou le mot de passe est incorrect';
    }
} else {
    $message = 'Veuillez fournir à la fois le nom d\'utilisateur et le mot de passe';
}



?>
<?php require_once __DIR__ ."/utilities/header.php"; ?>






<section class="d-flex justify-content-center py-5 m-auto">
<div class="col-md-4 mb-3 ">
    <div class="card px-3 bg-dark-subtle ">
    <h1>connexion</h1>
    <form method="post" name=login>
    <input type="text" name="username"  placeholder="Nom d'utilisateur" ><br>
    <input type="password" name="password"   placeholder="Mot de passe"><br>
    <input type="submit" value="Connexion" name=submit><br>
    <?php if (!empty($message)) {?>
    <p><?php echo $message; ?></p>
    <?php  }?>
</form>
</div>
</div> 
</section>
<?php include 'utilities/footer.php';?>
