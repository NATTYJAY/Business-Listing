<?php 
public function check()

{

$last_session_id = session_id();

if(!empty($_SESSION['page_view_count']) && $_SESSION['page_view_count'] % 3 == 0)

{

adodb_session_regenerate_id();

}

$new_session_id = session_id();

$last_access = time();

if (empty($_SESSION['hash']) || empty($_SESSION['last_access']))

{

$_SESSION['last_access'] = $last_access;

$_SESSION['hash'] = md5($_SERVER['HTTP_USER_AGENT'] . ':' . $_SERVER['REMOTE_ADDR'] . ':' . $last_access . ':' . $new_session_id);

$_SESSION['page_view_count'] = 1;

}

else

{

if($_SESSION['hash'] == md5($_SERVER['HTTP_USER_AGENT'] . ':' . $_SERVER['REMOTE_ADDR'] . ':' . $_SESSION['last_access'] . ':' . $last_session_id))

{

$_SESSION['last_access'] = $last_access;

$_SESSION['hash'] = md5($_SERVER['HTTP_USER_AGENT'] . ':' . $_SERVER['REMOTE_ADDR'] . ':' . $last_access . ':' . $new_session_id) ;

$_SESSION['page_view_count']++;

}

else

{

$this->destroy();

}

}

}
?>