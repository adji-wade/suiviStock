<?php
  include_once '../../header.php';
  include_once '../../bootstrap.php';
?>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add User</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-8 col-lg-8 col-md-12">
                <form action="http://localhost/mesProjets/suivistock/src/controller/user/userCtrl.php" class="tm-edit-product-form" method="POST">
                
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >PRENOM 
                    </label>
                    <input
                      id="name"
                      name="prenom"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >NOM
                    </label>
                    <input
                      id="name"
                      name="nom"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
               
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >EMAIL
                    </label>
                    <input
                      id="name"
                      name="email"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >PASSWORD
                    </label>
                    <input
                      id="name"
                      name="password"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >ETAT
                    </label>
                    <input
                      id="name"
                      name="etat"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  </div>
                  
                        
                  </div>
                  
           
              
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="btnaddU">Add USER Now</button>
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  include_once '../../footer.php';
?>