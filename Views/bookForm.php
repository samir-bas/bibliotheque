<?php 
include "Template/header.php" ;

?>

  <!-- MAIN -->
  <main>
    <h2 class="text-center mt-3">
        <?php  echo ($action==="add") ? "Création d'un Nouveau livre" :  "Modification d'un livre :" ?></h2>
    <div class="container ">
      <div class="row" >
        <!-- <div class="col-md-6 offset-3"> -->
        <div class="col-6 offset-3">
          <form action="" method="POST" class="mt-3 p-3 border border-primary rounded">

            <div class="form-group">
              <label for="titre_livre" class="form-label mt-1">Titre :</label>
              <input type="text" id="titre_livre" name="titre_livre" class="form-control" 
                value="<?php if ($action==="update") echo $book->getTitre_livre() ?>" autofocus autocomplete="off">
            </div>

            <div class="form-group">
              <label for="category_id" class="form-label mt-1">Catégorie :</label>
              <select class="form-select" name="category_id" id="category_id">
                <?php $selected = '';
                  foreach($categories as $category) :
                    if ($action==="update") {
                        $selected = ($category->getId() == $book->getCategory_id()) ? 'selected' : '' ;
                    }
                    echo '<option value="' . $category->getId() . '" ' . $selected . '>' . $category->getLibelle() . '</option>';
                  endforeach; 
                ?>
              </select>
            </div>  

            <div class="form-group">
              <label for="auteur" class="form-label mt-1">Auteur :</label>
              <input class="form-control" name="auteur" id="auteur"
              value="<?php if ($action==="update") echo $book->getAuteur() ?>" autofocus autocomplete="off">
            </div>      

            <!-- <div class="form-group">
              <label for="category_id" class="form-label mt-1">Auteur :</label>
              <select class="form-select" name="author_id" id="author_id">
                <?php foreach($authors as $author) :
                  $selected = ($author->getId() == $book->getAuthor_id()) ? 'selected' : '' ;
                  echo '<option value="' . $author->getId() . '" ' . $selected . '>' . $author->getNomAuteur() . '</option>';
                  endforeach; 
                ?>
              </select>
            </div>       -->

            <!-- Mis exprès car erreur dans AuthorModel -->
            <input type="hidden" id="author_id" name="author_id" value="1">

            <div class="form-group">
              <label for="nb_pages" class="form-label mt-1">Nombre de pages :</label>
              <input type="number" id="nb_pages" name="nb_pages" class="form-control" 
                value="<?php if ($action==="update") echo $book->getNb_pages() ?>" autofocus autocomplete="off">
            </div>  

            <div class="form-group">
              <label for="customer_id" class="form-label mt-1">N° Emprunteur :</label>
              <input type="number" id="customer_id" name="customer_id" class="form-control" 
                value="<?php echo ($action==="update") ?  $book->getCustomer_id() : 0 ?>" autofocus autocomplete="off">
            </div>  

            <div class="form-group">
              <label for="resume" class="form-label mt-1">Résumé :</label>
              <textarea class="form-control" id="resume" name="resume" rows="3"><?php if ($action==="update") echo $book->getResume() ?></textarea>
            </div>

            <input type="hidden" id="img_livre" name="img_livre" value="<?php if ($action==="update") echo $book->getImg_livre() ?> ?>">

            <input type="hidden" id="isbn" name="isbn" value="<?php echo ($action === "add") ? $isbn : $book->getIsbn() ?>">

            <div class="text-center my-2">
                <button type="submit" name="validateForm" class="btn btn-primary w-25">Enregistrer</button>
                <a class="btn btn-primary w-25" href="bookList.php">Annuler</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>

  <?php include "Template/footer.php" ?>