<?php
  include_once '../../header.php';
  include_once '../../bootstrap.php';
?>
<div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-6 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-8 col-lg-8 col-md-12 " >
                <form action="http://localhost/mesProjets/suivistock/src/controller/produit/produitCtrl.php" class="tm-edit-product-form" method="POST">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >REFERENCE
                    </label>
                    <input
                      id="name"
                      name="ref"
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
                      >Quantite Stock
                    </label>
                    <input
                      id="name"
                      name="qteS"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                  <label
                      for="name"
                      >User
                    </label>
                    <input
                      id="name"
                      name="user"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
               
                  <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block text-uppercase" name="btnaddP">Add Product Now</button>
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