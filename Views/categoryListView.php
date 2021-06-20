<?php
    include "Views/template/header.php" ;
?>
    <!-- MAIN -->
    <main>
      <section class="container">
        <p class="h4 mt-2">Catégories <a href="category.php?action=add" class="btn btn-success">Ajouter</a> </p>
        <div class="row">
             <!-- Table-striped : permet d'avoir une couleur différente pour les lignes pairs et impairs
                table-hover : permet de voir la ligne séléctionné lors du passage de la souris sur la ligne
                table-bordered : Bordure pour les lignes et colonnes
             -->
             <table class="table table-striped table-hover table-bordered mt-3">
                <thead class="text-center align-middle"> <!--Aligne middle : vertical center on the cell -->
                    <tr>
                        <th scope="col" class="col-9">Catégorie</th>
                        <th scope="col" class="col-3">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach($categories as $category) : ?>
                        <tr>
                            <td><?php echo $category->getLibelle() ?></td>
                            <td>
                                <div class="text-center">
                                    <a class="btn btn-primary" href="category.php?action=update&id=<?php echo $category->getId() ?>">Modifier</a>
                                    <a class="btn btn-danger" href="category.php?action=delete&id=<?php echo $category->getId() ?>">Supprimer</a></td>
                                </div>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </section>
    </main>

<?php include "Views/template/footer.php" ?>