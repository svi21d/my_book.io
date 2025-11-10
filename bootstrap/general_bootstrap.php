
    <!--Подключаем голову-->
    <?php
        require_once "../шапка_подвал/head.php";
    ?>
<div class="d-flex flex-column min-vh-100">
    <!--Подключаем шапку-->
    <?php
        require_once "../шапка_подвал/header.php";
    ?>

    <!--основная часть (контент)-->
    <div class="container-fluid pt-4 mb-4">
        <div class="row">
            <!--Делаем разделение страницы на 2-е части-->
            <!--1 часть aside-->
            <div class="col-xxl-2 col-xl-2 col-l-2 col-m-12">
                .......
            </div>
            <!--2-я часть контент-->
            <div class="col-xxl-10 col-xl-10 col-l-10 col-m-12">
                <!--данный d-flex для того-->
                <div class="row">
                    <!--d-flex для того, чтобы сделать картинку по центру-->
                    <div class="d-flex justify-content-center p-3 col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                        <a href="../bootstrap/typography.php" class="rad">
                            <img src="../img/typography.jpg" class="rad element card_shadow" alt="..."
                                 style="height:210px; width: 350px ">
                        </a>
                    </div>

                    <div class="d-flex justify-content-center p-3 col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                        <a href="../bootstrap/container.php" class="rad">
                            <img src="../img/container.jpg" class="rad element card_shadow" alt="..."
                                 style="height:210px; width: 350px ">
                        </a>
                    </div>

                    <div class="d-flex justify-content-center p-3 col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                        <a href="../bootstrap/button.php" class="rad rounded-3">
                            <img src="../img/button.jpg" class="rad element card_shadow" alt="..."
                                 style="height:210px; width: 350px ">
                        </a>
                    </div>

                    <div class="d-flex justify-content-center p-3 col-xxl-4 col-xl-6 col-lg-6 col-md-6">
                        <a href="../bootstrap/flex.php" class="rad rounded-3">
                            <img src="../img/flex.jpg" class="rad element card_shadow" alt="..."
                                 style="height:210px; width: 350px ">
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>


        <!--Подключаем footer-->
        <?php
        require_once "../шапка_подвал/footer.php";
        ?>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

