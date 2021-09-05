<?php

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '
<div class="row">
    <div class="col-12 pageTitle">
        <h5 class="d-inline">' . $lang['articles'] . '</h5>
        <div class="contentButtons d-inline float-end">

        <button type="button" class="btn btn-success" onclick="window.location.href =\'' . dirname($_SERVER['SCRIPT_NAME']) . '/content/new/\'">
        <i class="bi bi-plus-circle"></i>
        ' . $lang['new'] . '
        </button>
        
        <button type="button" class="btn btn-outline-primary publishButton">
        <i class="bi bi-check-circle"></i>
        ' . $lang['publish'] . '
        </button>
        
        <button type="button" class="btn btn-outline-secondary unpublishButton">
        <i class="bi bi-x-circle"></i>
        ' . $lang['unpublish'] . '
        </button>
        
        <button type="button" class="btn btn-outline-danger deleteButton">
        <i class="bi bi-dash-circle"></i>
        ' . $lang['delete'] . '
        </button>
        </div>
    </div>
</div>
';


