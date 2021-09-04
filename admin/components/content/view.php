<?php

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '<div class="pageTitle">';

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '<h4 class="d-inline">' . $lang['articles'] . '</h5>';

adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '<div class="contentButtons d-inline float-end">

<button type="button" class="btn btn-outline-success">
<i class="bi bi-plus-circle"></i>
' . $lang['new'] . '
</button>

<button type="button" class="btn btn-outline-primary">
<i class="bi bi-check-circle"></i>
' . $lang['publish'] . '
</button>

<button type="button" class="btn btn-outline-secondary">
<i class="bi bi-x-circle"></i>
' . $lang['unpublish'] . '
</button>

<button type="button" class="btn btn-outline-danger">
<i class="bi bi-dash-circle"></i>
' . $lang['delete'] . '
</button>

</div>';


adminPageBuild::$htmlBody = adminPageBuild::$htmlBody . '<div style="clear:both;"></div></div>';
