<?php

  if (isset($_POST['login'])) {
    if (not_empty(['email', 'pwd'])) {
      extract($_POST);
      if (is_admin($email,$pwd)) {
        $admin = get_admin_info($email);
        //on cree une session avec les infos de l'admin
        $_SESSION['id'] = $admin->id;
        $_SESSION['user_id'] = $admin->user_id;
        header('location:index.php?page=certif');
      }else{
?>
<div class="alert alert-primary alert-dismissible text-white mt-5 col-lg-4 col-md-8 col-12 mx-auto" role="alert">
      <span class="text-sm text-center mt-5">Identifiants non valide <a href="javascript:;" class="alert-link text-white"></a></span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
</div>
<?php
      }
    }else{
  ?>
<div class="alert alert-primary alert-dismissible text-white mt-5 col-lg-4 col-md-8 col-12 mx-auto" role="alert">
      <span class="text-sm text-center mt-5">Veuillez remplir tous les champs <a href="javascript:;" class="alert-link text-white"></a></span>
      <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
      </button>
</div>
  <?php
    }
  }
?>

</div>
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Se connecter</h4>
                </div>
              </div>
              <div class="card-body">
                <form role="form" method="post" class="text-start">
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                  </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="pwd" class="form-control">
                  </div>
                  <div class="text-center">
                    <button type="submit" name="login" class="btn bg-gradient-primary w-100 my-4 mb-2">Se connecter...</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>