<?php

// set error reporting level
if (version_compare(phpversion(), "5.3.0", ">=") == 1)
  error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
else
  error_reporting(E_ALL & ~E_NOTICE);


require_once('inc/db.inc.php');
require_once('inc/login.inc.php');
require_once('inc/ajx_chat.inc.php');

if ($_REQUEST['action'] == 'get_last_messages') {
    $sChatMessages = $GLOBALS['AjaxChat']->getMessages(true);

    require_once('inc/Services_JSON.php');
    $oJson = new Services_JSON();
    echo $oJson->encode(array('messages' => $sChatMessages));
    exit;
}

// draw login box
echo $GLOBALS['oSimpleLoginSystem']->getLoginBox();

// draw exta necessary files
echo '<link type="text/css" rel="stylesheet" href="templates/css/styles.css" />';
echo '<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>';
echo '<script type="text/javascript" src="js/main.js"></script>';

// draw chat messages
$sChatMessages = $GLOBALS['AjaxChat']->getMessages();

// draw input form + accept inserted texts
$sChatInputForm = 'Need login before using';
if ($GLOBALS['bLoggedIn']) {
    $sChatInputForm = $GLOBALS['AjaxChat']->getInputForm();
    $GLOBALS['AjaxChat']->acceptMessages();
}

echo $sChatMessages . $sChatInputForm;

require_once('templates/footer.html');

?>