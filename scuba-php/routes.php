<?php
$page = $_GET['page']??'login';

switch($page){
    case 'login':
        do_login();
        break;
    case 'register':
        do_register();
        break;
    case 'change-password':
        do_change_password();
        break;
    case 'forget-password':
        do_forget_password();
        break;
    default:
        do_not_found();
        break;
}