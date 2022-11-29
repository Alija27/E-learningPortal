<?php
include "model/DbModel.php";
checkadmin();

if (!empty($_GET['id'])) {
    delete('usertb', 'userid', $_GET['id']);
}

return header("Location: ?r=usermanage");
