<?php
include 'model/DbModel.php';

$id = $_GET['id'];
$subject = findId('subject', 'sid', $id);

include "view/viewpage.php";
