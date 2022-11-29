<?php
include "model/DbModel.php";
checkadmin();
if (isset($_POST)) {
    include "view/managecourse.php";
    return;
}
