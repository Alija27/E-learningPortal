<?php

unset($_SESSION['user']['login']);
/* $_SESSION['user']['user_id'] = $user['userid'];
$_SESSION['user']['user_name'] = $user['username']; */
unset($_SESSION['user']['user_id']);
unset($_SESSION['user']['email']);
header("location: $base_url../?r=Login");
/* redirect('dashboard');
 */