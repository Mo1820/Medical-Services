<?php
require_once("../config.php");
require_once("includes/header.php");

?>




  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All  Services</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?=BURLA."/Services/view.php"?>" class="btn btn-primary"></a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Cities</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?=BURLA."/cities/view.php"?>" class="btn btn-primary"></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?=BURLA."/orders/view.php"?>" class="btn btn-primary"></a>
      </div>
    </div>
  </div>


  <div class="col-sm-6 mt-5">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">All Orders This Day</h5>
        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
        <a href="<?= BURLA."/orders/order_today.php"?>" class="btn btn-primary"></a>
      </div>
    </div>
  </div>



 


























<?=
require_once("includes/footer.php");
?>