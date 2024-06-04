 <?php 
    require_once('../template/header.php');
    
    
    require_once('config/connexionBD.php');
    
    if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT promotion.*, produit.nom_produit 
    FROM promotion 
    INNER JOIN produit ON promotion.id_produit = produit.id WHERE id_promotion=:id" ;
    $stmt = $bdd->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    $promotions = $stmt->fetch(PDO::FETCH_OBJ);
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){

       
        //2
        if(isset($_POST['pourcentage_reduction']) &&!empty($_POST['pourcentage_reduction']))
          $pourcentage_reduction=$_POST['pourcentage_reduction'];
        //3
        if(isset($_POST['date_debut']) &&!empty($_POST['date_debut']))
          $date_debut=$_POST['date_debut'];
        //4
        if(isset($_POST['date_fin']) &&!empty($_POST['date_fin']))
          $date_fin=$_POST['date_fin'];

         $sql_change="UPDATE promotion  SET pourcentage_reduction=:pourcentage_reduction ,date_debut=:date_debut,date_fin=:date_fin WHERE id_promotion=:id";
         $stmt = $bdd->prepare($sql_change);
         $stmt->bindParam(':id', $id, PDO::PARAM_INT);
         $stmt->bindParam(':pourcentage_reduction', $pourcentage_reduction, PDO::PARAM_STR);
         $stmt->bindParam(':date_debut', $date_debut, PDO::PARAM_STR);
         $stmt->bindParam(':date_fin', $date_fin, PDO::PARAM_STR);
         
         if ($stmt->execute()){
            echo '<div class="success-message">
                <p>modification effectuée avec succès!</p>
              </div>';
         }else{
            echo '<div class="error-message">
            <p>Erreur lors de l\'ajout. Veuillez réessayer.</p>
          </div>';
            

         }

    }


    
    ?>



<form role="form" action="<?php echo $_SERVER['PHP_SELF']."?id=".$_GET['id']; ?>" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="form-group col-xs-6">
                <label for="nom">Nom du produit</label>
                <input type="text" class="form-control" id="nom" name="nomProduit" value="<?php echo $promotions->nom_produit ?? ''; ?>" disabled />
            </div>
            <div class="form-group col-xs-6">
            <label for="pourcentage_reduction">Pourcentage de réduction</label>
             <input type="text" name="pourcentage_reduction" class="form-control" id="pourcentage_reduction" value="<?php echo $promotions->pourcentage_reduction ?? ''; ?>" required>
            </div>
            <div class="form-group col-xs-6">
            <label for="date_debut">date de début</label>
             <input type="text" name="date_debut" class="form-control" id="date_debut"  value="<?php echo $promotions->date_debut ?? ''; ?>" required>
            </div>
            <div class="form-group col-xs-6">
            <label for="date_fin">date de fin</label>
             <input type="text" name="date_fin" class="form-control" id="date_fin" value="<?php echo $promotions->date_fin ?? ''; ?>" required>
            </div>
            </div>
            <div class="form-actions clearfix">
            <a href="promotion.php" class="btn btn-danger">
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
    </html>
