<?php
    include "Views/template/header.php" ;
?>
    <!-- MAIN -->
    <main>
      <section class="container">
        <p class="h4 mt-2">Vos User <a href="" class="btn btn-success btn-lg">Ajouter</a> </p>
        <div class="row">
          <?php foreach ($customers as $customer) { ?>
          <div class="col-4">
            <div class="card">
              <div class="card-header font-weight-bold">
                <?php echo $customer->getNom_client() ?> <br>
                <span> <?php echo $customer->getDate_naissance() ?> </span>
              </div>
              <div class="card_body">
              </div>
            </div>
          </div>
          <?php } ?>
        </section>
    </main>

<?php include "Views/template/footer.php" ?>