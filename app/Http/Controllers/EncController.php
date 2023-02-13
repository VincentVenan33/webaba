<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class EncController extends Controller
{
    public function index(){
        echo $en = Crypt::encryptString('didikprabowo.com');
        echo "<br>";
        try {
            echo $de = Crypt::decryptString("sd");
        }catch (DecryptException $e) {
            return "Tidak ditemukan Data";
        }
    }
}