<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use LaravelQRCode\Facades\QRCode;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generate(Request $request){
        $request->validate([
            "text"=>"required|min:1"
        ]);
        $tempQR= uniqid().".png";
        $png = QRCode::text($request->text)->setSize(15)->setOutfile("storage/temp/".$tempQR)->png();
        return view("pages/generate",compact('tempQR'));
    }
}
