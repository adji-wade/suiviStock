<?php

          include_once '../../header.php';
      
         require_once '../model/crud/produit/listProduct.php';
    ?>
<div class="container mt-5">
      <div class="row tm-content-row">
        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 tm-block-col">
          <div class="tm-bg-primary-dark tm-block tm-block-products">
            <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    
                    <th scope="col">REFERENCE</th>
                    <th scope="col">NOM</th>
                    <th scope="col">Quantite STOCK</th>
                    <th scope="col">User</th>
                   
                  </tr>
                </thead>
                <tbody>
                <?php 
                  foreach($produits as $p ){
                ?>
                      <tr>
                      <td><?=$p->getRef()?></td>
                      <td><?=$p->getNom()?></td>
                      <td><?=$p->getQtStock()?></td>
                      <td><?=$p->getid()->getPrenom()." ".$p->getid()->getNom()?></td>
                      </tr>
                                            <?php 
                                            }
                                            ?>
                </tbody>
              </table>
            </div>
            <!-- table container -->
            <a
              href="http://localhost/mesProjets/suivistock/src/view/addProduit.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
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