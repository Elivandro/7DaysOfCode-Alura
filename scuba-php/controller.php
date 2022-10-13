<?php

function do_register()
{
    render_view('register');
}

function do_login()
{
    render_view('login');
}

function do_change_password()
{
    render_view('change_password');
}

function do_forget_password()
{
    render_view('forget_password');
}

function do_forget()
{
    render_view('forger_password');
}

function do_not_found()
{
    http_response_code(404);
    render_view('not_found');
}