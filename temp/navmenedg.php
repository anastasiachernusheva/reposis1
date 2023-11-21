<?php
session_start();
$fio=$_SESSION['fio'];
?>
<div class="container mb-5">
            <div class="row">
                <div >
                   <nav class="navbar navbar-expand-lg navbar-dark  text-white bg-dark">
                    <div class="container-fluid">
                    <img src="images/logo.png" width='100' height='80' alt="">

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            </li>
                     
                            <li class="nav-item">
                            <a class="nav-link" href="index.php">Главная</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="zakaz.php"> Заказы</a>
                            </li>
                   <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="logout.php">Выйти </a>
                            </li>
                            <p><? echo $fio;?></p>
                        </ul>
                        </div>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
