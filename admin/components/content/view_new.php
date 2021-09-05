<?php

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '
<div class="row">
    <div class="col-12 pageTitle">
        <h5 class="d-inline">' . $lang['articlesNew'] . '</h5>
        <div class="contentButtons d-inline float-end">

            <button type="button" class="btn btn-success">
                <i class="bi bi-pencil-square"></i>
                ' . $lang['articlesSave'] . '
            </button>

            <button type="button" class="btn btn-outline-primary">
                <i class="bi bi-check-square"></i>
                ' . $lang['articlesSaveClose'] . '
            </button>

            <button type="button" class="btn btn-outline-danger">
                <i class="bi bi-dash-circle"></i>
                ' . $lang['articlesCancel'] . '
            </button>
        </div>
    </div>
</div>
';

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '
<div class="row bg-white flex-grow-1">
    <div class="col-9 pageBodyArea">
        <input type="text" class="form-control" placeholder="' . $lang['articleTitle'] . '"
            aria-label="' . $lang['articleTitle'] . '">
        <form method="post">
            <textarea></textarea>
        </form>
    </div>
    <div class="col-3 newArticleOptions">
        Category
    </div>
</div>
';
