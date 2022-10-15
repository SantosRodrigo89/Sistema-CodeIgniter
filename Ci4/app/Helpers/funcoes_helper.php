<?php

function mDebug($dados)
{
    echo "<pre>";
        print_r($dados);
    echo "</pre>";
    die();
}
