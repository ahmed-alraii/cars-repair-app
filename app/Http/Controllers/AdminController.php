<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function showQrCodeForm()
    {
        return view('admin.qr_code');
    }

    public function generateQrCode(Request $request): RedirectResponse
    {
        $data = $request->only(['number']);
        $destinationPath = env('QR_CODE_IMAGE_PATH');
        $qrCodeImageName = 'code_' . $data["number"] . '_' . time() . '.png';
        $link = "http://osara-restaurants.test/restaurants_cards?table_number=".base64_encode($data["number"]);
        $qrCode  =  QrCode::format('png')->size(900)->generate($link);
        QrCode::format('png')->size(250)->generate($link , public_path($destinationPath . $qrCodeImageName) );
        Session::flash('qr_image' , $qrCodeImageName);
        return redirect()->back()->with( ['qr_code' => $qrCode]);
    }
}
