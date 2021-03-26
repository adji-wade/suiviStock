<?php
          include_once '../../header.php';
          require_once '../model/crud/user/listUser.php';
    ?>
<div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                  
                    <th scope="col">ID</th>
                    <th scope="col">PRENOM</th>
                    <th scope="col">NOM</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">PASSWORD</th>
                    <th scope="col">ETAT</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($users as $u ){
                ?>
                      <tr>
                      <td><?=$u->getId()?></td>
                      <td><?=$u->getPrenom()?></td>
                      <td><?=$u->getNom()?></td>
                      <td><?=$u->getEmail()?></td>
                      <td><?=$u->getPassword()?></td>
                      <td><?=$u->getEtat()?></td>
                      
                      </tr>
                                            <?php 
                                            }
                                            ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="http://localhost/mesProjets/suivistock/src/view/addUser.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new USER</a>
            <button class="btn btn-primary btn-block text-uppercase">
              Delete selected products
            </button>
          </div>
        </div>
        
      </div>
    </div>
    <?php
          include_once '../../footer.php';
    ?>