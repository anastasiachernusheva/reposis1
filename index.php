<?php
session_start();
include 'temp/head.php';
include 'temp/header.php';
include 'temp/database.php';
  if($_SESSION['role']=="Клиент"){
  include 'temp/navclient.php'; 
  }
 elseif($_SESSION['role']=="Менеджер"){
    include 'temp/navmenedg.php'; 
      }
        else{
        include 'temp/nav.php';
      }

?>
<!--==========================================
=           Основной контент страницы           =
===========================================-->
  <section class="sect">
        <div class="container">
        <div class="row">
            <div class="col-lg-12" >
            <div class="row row-cols-1 row-cols-md-4 g-4">
            <?php
            $sql ="SELECT * FROM tovar";
            $result= $mysqli->query($sql);
            foreach($result as $row) {
       
              echo' <div class="col">
               <div class="card">
              <div class="card-body">
              <h5 class="card-title">'.$row['name_tovar'].'</h5>
                <p class="card-text">Цена за шт:'.$row['price'].'</p>
                <a href="addzakaz.php?id_tovar='.$row['id_tovar'].'" class="btn btn-dark">Заказать</a>
              </div>
            </div>
            </div>';
              }
            ?>
            </div>
            </div>
        </div>
      
    </div><!-- Container End -->
</section>
<?php include 'temp/footer.php';?>