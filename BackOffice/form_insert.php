

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        
    .success-message {
        background-color: #dff0d8; 
        border: 1px solid #d0e9c6; 
        padding: 15px; 
        margin-bottom: 15px; 
        color: #3c763d; 
        border-radius: 4px; 
    }

    .error-message {
        background-color: #f2dede; 
        border: 1px solid #ebccd1; 
        padding: 15px; 
        margin-bottom: 15px; 
        color: #a94442; 
        border-radius: 4px; 
    }


        
    </style>
    
</head>

<?php
    require_once('../template/header.php');
    require_once('config/connexionBD.php');
    
    // une requette qui va ramener les catégories
    $sql_categorie="SELECT Nom FROM categorie ";
    $result = $bdd->query($sql_categorie);
    $categories = $result->fetchAll(PDO::FETCH_OBJ);

    // faire condition sur la méthode post
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        // initialiser les variables 
        $produit=$quantite=$categorie=$description=$prix_sans_tva=$taux_tva=$prix_final=$ingredients=$fileName=$file_dest="";
        //1
        if(isset($_POST['nomProduit']) &&!empty($_POST['nomProduit']))
          $produit=$_POST['nomProduit'];
        //2
        if(isset($_POST['description']) &&!empty($_POST['description']))
          $description=$_POST['description'];
        //3
        if(isset($_POST['ingredients']) &&!empty($_POST['ingredients']))
          $ingredients=$_POST['ingredients'];
        //4
        if (isset($_FILES["file"])&& !empty($_FILES["file"]) ) {
            $file_name=$_FILES['file']['name']; // le nom du fichier 
            $file_extension=strrchr($file_name,".");  // l'extension du fichier
            $extensions_autorisees=array('.jpeg','.jpg','.gif','.png'); // les extensions autorisées dans notre cas 
            $file_tmp_name=$_FILES['file']['tmp_name']; // le tmp c'est temporaire (repertoire temporaire)
            $file_dest='files/'.$file_name;  // le repertoire de destination

            if(in_array($file_extension,$extensions_autorisees)){

            if(move_uploaded_file($file_tmp_name,$file_dest)) {
                echo'Fichier envoyé avec succès';
            } else{
                echo" erreur survenue lors de l'envoi du ficheir";
                die; 
            }
             

            } else {
                echo 'seuls les photo sont autorisées';
                die;
            } 


            
         
        }
        //5
        if(isset($_POST['prix_final']) &&!empty($_POST['prix_final']))
          $prix_final=$_POST['prix_final'];
        //6
        if(isset($_POST['categorie']) &&!empty($_POST['categorie']))
          $categorie=$_POST['categorie'];
        //7
        if(isset($_POST['prix_sans_tva']) &&!empty($_POST['prix_sans_tva']))
          $prix_sans_tva=$_POST['prix_sans_tva'];
        //8
        if(isset($_POST['taux_tva']) &&!empty($_POST['taux_tva']))
          $taux_tva=$_POST['taux_tva'];
        //9
        if(isset($_POST['quantite']) &&!empty($_POST['quantite']))
          $quantite=$_POST['quantite'];
        
       $sql_matching="SELECT id FROM categorie WHERE  Nom='$categorie'";
       $result_matching = $bdd->query($sql_matching);
       $row = $result_matching->fetch(PDO::FETCH_ASSOC);
       if ($row && isset($row['id'])) {
        $id_categorie = $row['id'];
          } else {
        // Gérer le cas où la requête ne renvoie pas de résultat valide
        // Par exemple, afficher un message d'erreur ou effectuer une action par défaut
        echo "Aucun résultat trouvé pour la catégorie spécifiée.";
        // Ou vous pouvez décider de terminer l'exécution du script
        exit; // ou return; selon le contexte
          }


       
       //$sql = "INSERT into produit Set  nom_produit='$produit',quantite='$quantite',categorie_id='$id_categorie',description='$description',prix_sans_tva='$prix_sans_tva',taux_tva='$taux_tva',prix='$prix_final', ingredients='$ingredients',image='$file_dest' ";
       
        $sql="INSERT INTO produit Set nom_produit=:produit,description=:description,ingredients=:ingredients,image=:file,prix=:prix,categorie_id=:categorie_id,prix_sans_tva=:prix_sans_tva,taux_tva=:taux_tva,quantite=:quantite";

        $stmt = $bdd->prepare($sql);
        
        $stmt->bindParam(':produit', $produit, PDO::PARAM_STR);
        $stmt->bindParam(':description', $description, PDO::PARAM_STR);
        $stmt->bindParam(':ingredients', $ingredients, PDO::PARAM_STR);
        $stmt->bindParam(':file', $file_dest, PDO::PARAM_STR);
        $stmt->bindParam(':prix', $prix_final, PDO::PARAM_STR);
        $stmt->bindParam(':categorie_id', $id_categorie, PDO::PARAM_STR);
        $stmt->bindParam(':prix_sans_tva', $prix_sans_tva, PDO::PARAM_STR);
        $stmt->bindParam(':taux_tva', $taux_tva, PDO::PARAM_STR);
        $stmt->bindParam(':quantite', $quantite, PDO::PARAM_STR);
        
       if($stmt->execute() ) {
        echo '<div class="success-message">
                <p>Votre ajout a été effectué avec succès!</p>
              </div>';
    } else {
        echo '<div class="error-message">
                <p>Erreur lors de l\'ajout. Veuillez réessayer.</p>
              </div>';
    }
    
    }
?> 

    <h1>
        <span class="glyphicon glyphicon-plus"></span>
        Ajouter un Produit
    </h1>

    <form role="form" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-xs-6">
                <label for="nom">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nomProduit" />
            </div>
            <div class="form-group col-xs-6">
            <label for="quantite">Quantité</label>
             <input type="text" name="quantite" class="form-control" id="quantite" required>
            </div>
            <div class="form-group col-xs-6">
            <label for="categorie">Catégorie </label> 
            <select id="categorie" name="categorie" class="form-control" required>
            <?php 
                foreach($categories as $c) {
                    echo "<option >$c->Nom</option>";
                }
            ?>
             </select>
            
            </div>
           
        
        
            <div class="form-group col-xs-6">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" />
            </div>
            <div class="form-group col-xs-6">
                <label for="prix_sans_tva">Prix sans TVA</label>
                <input type="text" class="form-control" id="prix_sans_tva" name="prix_sans_tva"  placeholder="en Euros " />
            </div>
            <div class="form-group col-xs-6">
                <label for="taux_tva">taux de TVA</label>
                <input type="text" class="form-control" id="taux_tva" name="taux_tva" placeholder="en % "   />
            </div>

            <div class="form-group col-xs-6" >
                <label for="prix_final">Prix final </label>
                <input type="text" class="form-control" id="prix_final" name="prix_final"  />
            </div>
        
            <div class="form-group col-xs-6">
            <label for="ingredients">ingrédients</label>
             <input type="text" name="ingredients" class="form-control" id="ingredients" required>
            </div>
            
        
            <div class="form-group col-xs-6">
            <label for="file">image :</label>
             <input type="file" name="file" id="file" class="form-control" required>
            </div>
            </div>

            
        
        <div class="form-actions clearfix">
            <a href="list_Produits.php" class="btn btn-danger">
                <span class="glyphicon glyphicon-remove"></span>
                Annuler
            </a>
            <button type="submit" class="btn btn-success">
                <span class="glyphicon glyphicon-save"></span>
                Enregistrer
            </button>
        </div>
        
            
            
        </div>
    </form>


<?php
    require_once('../template/footer.php');
?>
<script>
    var prix = document.getElementById("prix_sans_tva");
    var tva = document.getElementById("taux_tva");
    var prixFinal = document.getElementById("prix_final");

    document.addEventListener("input", calculPrixFinal);

    function calculPrixFinal() {
        // Convertir les valeurs en nombres avant le calcul
        var prixValue = parseFloat(prix.value) ;
        var tvaValue = parseFloat(tva.value) ;

        // Calculer et afficher le prix final
        prixFinal.value = prixValue+((prixValue * tvaValue)/100);
    }
</script>
</html>