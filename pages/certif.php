<?php
  include "body/topbar.php";
  $certificats = certificats();
  //var_dump($s);
  //die();
?>
</div>
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12 mt-5">
          <div class="card my-4 mt-5">
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0 responsive">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary">Numéro du certificat</th>
                      <th class="text-uppercase text-secondary ps-2">Nom du marié</th>
                      <th class="text-uppercase text-secondary ps-2">Nom de la mariée</th>
                      <th class="text-center text-uppercase text-secondary">Noms de témois</th>
                      <th class="text-center text-uppercase text-secondary">Bourgmestre</th>
                      <th class="text-center text-uppercase text-secondary">Date du mariage</th>
                      <th class="text-secondary"></th>
                    </tr>
                  </thead>
                  <tbody>
           <?php 
               foreach ($certificats as $certificat) {
           
           ?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?= $certificat->num_cert ?></h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $certificat->name_men ?></h6>
                        <p class="text-xs text-secondary mb-0">Né à <?= $certificat->lieu_men ?>, le <?= $certificat->date_men ?></p>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $certificat->name_wom ?></h6>
                        <p class="text-xs text-secondary mb-0">Né à <?= $certificat->lieu_wom ?>, le <?= $certificat->date_wom ?></p>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $certificat->witnesses_1 ?> & </h6>
                        <h6 class="mb-0 text-sm"><?= $certificat->witnesses_2 ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $certificat->bourgmestre ?></h6>
                      </td>
                      <td>
                        <h6 class="mb-0 text-sm"><?= $certificat->weddingdate ?></h6>
                      </td>
                      <td class="align-middle">
                        <a href="" class="btn btn-primary text-secondary font-weight-bold text-xs">
                          Plus de detail
                        </a>
                      </td>
                    </tr>
          <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>