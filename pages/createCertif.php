<?php 
    include "body/topbar.php";
    //Numéro du cerficat
    if (isset($_POST['enreg'])) {
        if(not_empty(['name_men','name_wom','date_men','date_wom','lieu_wom','lieu_men','witnesses_1','witnesses_2','bourgmestre'])){
            extract($_POST);
            CreateCertifica($name_men,$name_wom,$date_men,$date_wom,$lieu_men,$lieu_wom,$witnesses_1,$witnesses_2,$bourgmestre);
        }else{
?>
    <div class="alert alert-danger mt-5">
        <p class="text-center mt-5 p-1">Veuillez remplir tous les champs</p>
    </div>
<?php
        }
    }

?>

<main class="main-content  mt-0">
    <section>
        <form method="POST" action="">
            <div class="page-header mb-5">
                <div class="container mt-5">
                    <div class="row">
                        <div class="card-header mt-5">
                            <h4 class="font-weight-bolder text-center">EECM</h4>
                        </div>
                        <div class="col-6">
                            <h4 class="font-weight-bolder text-center">HOMME</h4>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="name_men" placeholder="Entrer le nom complet du marié">
                            </div>
                        </div>
                        <div class="col-6">
                            <h4 class="font-weight-bolder text-center ">FEMME</h4>
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="name_wom" placeholder="Entrer le nom complet de la mariée">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="date" class="form-control" name="date_men" placeholder="Date de naissance">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="date" class="form-control" name="date_wom" placeholder="Date de naissance">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="lieu_men" placeholder="Lieu de naissance">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="lieu_wom" placeholder="Lieu de naissance">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="witnesses_1" placeholder="Nom complet du témoin 1">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="witnesses_2" placeholder="Nom complet du témoin 2">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="input-group input-group-outline mb-3">
                                <input type="text" class="form-control" name="bourgmestre" placeholder="Nom complet du bourgmestre">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center">
                                <button type="submit" name="enreg" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Enregistrer certificat</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>       
        </form>
    </section>
  </main>