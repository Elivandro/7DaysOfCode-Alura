<?php

function render_view($page)
{
    $content = file_get_contents(VIEW_FOLDER."$page.view");
    echo $content;
}