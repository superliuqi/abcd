<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function pull()
    {
        exec('cd /data/wwwroot/default/abcd && git pull 2>&1', $log, $status);
        print_r($log);
    }

    public function tt123()
    {
        echo 'abcdefg124';
    }

    public function test()
    {
        
    }
}
