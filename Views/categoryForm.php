<?php 
include "Template/header.php" ;

?>

  <!-- MAIN -->
  <main>
    <h2 class="text-center mt-3">
        <?php  echo ($action==="add") ? "Création d'une Nouvelle catégorie" :  "Modification d'une catégorie :" ?></h2>
    <div class="container ">
      <div class="row" >
        <!-- <div class="col-md-6 offset-3"> -->
        <div class="col-6 offset-3">
          <form action="" method="POST" class="mt-3  p-3 border border-primary rounded">

            <div class="form-group">
              <label for="libelle" class="form-label mt-1">Catégorie :</label>
              <input type="text" id="libelle" name="libelle" class="form-control" 
                value="<?php if ($action==="update") echo $category->getLibelle() ?>" autofocus autocomplete="off">
            </div>
            <input type="hidden" id="id" name="id" value="<?php echo ($action === "add") ? $id : $category->getId() ?>">

            <div class="text-center">
                <button type="submit" name="validateForm" class="btn btn-primary my-5 w-25">Enregistrer</button>
                <a class="btn btn-primary my-5 w-25" href="categoryList.php">Annuler</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include "Template/footer.php" ?>