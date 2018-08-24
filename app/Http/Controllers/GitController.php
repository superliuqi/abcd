<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function pull()
    {
        exec('cd /data/wwwroot/default/abcd && git pull');
    }

    public function tt()
    {
        echo 1234567;
    }
}
