<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="<?php echo dirname($_SERVER['SCRIPT_NAME']) .'/'. ADMIN_TEMPLATES; ?>/default/css/style.css">
    <?php echo adminPageBuild::$htmlHead; ?>
</head>

<body>
    <div class="d-inline-block h-100 w-100">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-4 col-sm-4 col-md-3 col-lg-2 col-xl-2 col-xxl-1 bg-dark">
                    <div class="d-flex align-items-start">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>">
                                    <i class="bi bi-house"></i>
                                    <?php echo $lang['homepage']; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/content/">
                                    <i class="bi bi-file-text"></i>
                                    <?php echo $lang['articles']; ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/category/">
                                    <i class="bi bi-folder"></i>
                                    <?php echo $lang['categories']; ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/member/">
                                    <i class="bi bi-people"></i>
                                    <?php echo $lang['members']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex align-items-end fixed-bottom">
                        <ul class="nav flex-column">

                            <li class="nav-item">
                                <a class="nav-link text-white" href="<?php echo dirname($_SERVER['SCRIPT_NAME']); ?>/setting/">
                                    <i class="bi bi-gear"></i>
                                    <?php echo $lang['settings']; ?>

                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" target="_blank" href="<?php echo $_SERVER['REQUEST_URI']; ?>">
                                    <i class="bi bi-box-arrow-in-up-right"></i>
                                    <?php echo $lang['website']; ?>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="">
                                    <i class="bi bi-box-arrow-left pe-2"></i>
                                    <?php echo $lang['logout']; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-8 col-sm-8 col-md-9 col-lg-10 col-xl-10 col-xxl-11 h-100 d-flex flex-column">
                    <?php echo adminPageBuild::$htmlBody; ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>