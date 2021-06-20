<?php
    include "Views/template/header.php" ;
?>
    <!-- MAIN -->
    <main>
      <section class="container">
        <p class="h4 mt-2">LIVRES <a href="book.php?action=add" class="btn btn-success btn-lg">Ajouter</a> </p>
        <div class="row">
          <?php foreach ($books as $book) : ?>
            <div class="col-4 d-flex align-self-stretch">
              <div class="card shadow-sm mb-4">
                <img src="<?php echo $book->getImg_livre() ?>" class="card-img-top" alt="Logo Livre" style="height:15rem">
                <div class="card-body d-flex flex-column">
                  <h5 class="card-title">
                  <!-- <span><?php echo $book->getIsbn() ?> -->
                  </span> <?php echo $book->getTitre_livre() ?></h5>
                  <p class="mb-1"><?php echo $book->getResume() ?></p>
                  <div class="mt-auto">
                    <div class="card-footer m-auto text-center">
                      <a class="btn btn-primary" href="book.php?action=update&isbn=<?php echo $book->getIsbn() ?>">Modifier</a>
                      <a class="btn btn-danger"  href="book.php?action=delete&isbn=<?php echo $book->getIsbn() ?>">Supprimer</a>
                    </div>      
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </section>
    </main>

<?php include "Views/template/footer.php" ?>