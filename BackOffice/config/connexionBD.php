  <?php 
    
    $host = "localhost";
    $user = "root";  
    $password = "";
    $bdd_name = "basedonneessite";
    
    // étape connexion
    try {
        $bdd = new PDO("mysql:host=$host;dbname=$bdd_name", $user, $password);
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Erreur de connexion à la base de données : " . $e->getMessage();
    }

    ?>
    