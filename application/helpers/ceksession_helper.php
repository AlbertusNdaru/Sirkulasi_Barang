<?php

function checksession()
{
    if (isset($_SESSION['Admin']))
    {
        return true;
    }
    else
    {
        redirect('Admin');
    }
}
