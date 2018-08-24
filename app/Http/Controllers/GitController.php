<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GitController extends Controller
{
    public function pull()
    {
        file_put_contents('./hello.txt','hello',FILE_APPEND);
        exec('cd /data/wwwroot/default/abcd && git pull');
    }
}
