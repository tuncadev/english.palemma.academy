<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class LocaleController extends Controller
{
  public function setLocale($lang)
  {
      Session::put('locale', $lang);
      App::setLocale($lang);
      return redirect()->back();
  }
}
