<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Login sayfasını göstermek için index metodunu tanımlıyoruz
    public function index()
    {
        return view('login'); // resources/views/login.blade.php dosyasını döndür
    }
}
