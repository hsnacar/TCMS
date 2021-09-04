<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <?php echo adminPageBuild::$htmlHead; ?>

</head>

<body>
    <div class="h-100 w-100 d-inline-block">
        <div class="d-flex h-100">
            <div class="bg-secondary h-100">
                <div class="d-flex align-items-start">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
                                <i class="bi bi-house"></i>
                                Anasayfa
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/content/">
                                <i class="bi bi-file-text"></i>
                                Makaleler
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/member/">
                                <i class="bi bi-people"></i>
                                Üyeler
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-end fixed-bottom">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/setting/">
                                <i class="bi bi-gear-fill pe-2"></i>
                                Ayarlar
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="">
                                <i class="bi bi-box-arrow-left pe-2"></i>
                                Çıkış
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="bg-light flex-grow-1">

                <?php echo adminPageBuild::$htmlBody; ?>

            </div>
        </div>
    </div>
</body>

</html>