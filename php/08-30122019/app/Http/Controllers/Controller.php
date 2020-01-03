<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function testcontroller()
    {
        return "Tui test Controller- Từ web.php -> Routle-> Controller-> kích hoạt chức năng testcontroller";
    }

    
    function testcontroller2()
    {
        return view('welcome') ;
    }
}
