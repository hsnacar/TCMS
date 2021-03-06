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

            <button type="button" onclick="window.location.href =\'' . dirname($_SERVER['SCRIPT_NAME']) . '/content/\'" class="btn btn-outline-danger">
                <i class="bi bi-dash-circle"></i>
                ' . $lang['articlesCancel'] . '
            </button>
        </div>
    </div>
</div>
';

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '
<div class="row bg-white flex-grow-1">
    <div class="col-9 pageBodyArea" style="background-color: #FFFFE9 !important; display: flex;">
    <form method="post" style="align-items: stretch; display: flex;
    flex-direction:column;" class="w-100 m-0 p-0">
        <input type="text" class="form-control w-100" placeholder="' . $lang['articleTitle'] . '"
            aria-label="' . $lang['articleTitle'] . '">
            <textarea style="align-items: stretch;" class="flex-grow-1 form-control w-100 mt-2" placeholder="' . $lang['articleBody'] . '"
            aria-label="' . $lang['articleBody'] . '"></textarea>
        </form>
    </div>
    <div class="col-3 newArticleOptions">

    <div class="form-check form-switch mb-3">
    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
    <label class="form-check-label" for="flexSwitchCheckDefault">' . $lang['publish'] . '</label>
  </div>
  

        <select class="form-select" aria-label="' . $lang['articleSelectCategory'] . '">
            <option selected>' . $lang['articleSelectCategory'] . '</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
</div>
';
