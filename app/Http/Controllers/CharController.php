<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CharController extends Controller
{

    public static $character;
    // private $data = ['ь', 'и', 'ей'];
    public static function char($a, $b, $c)
    {
        $data = [$a, $b, $c];
        dump($data);
        $count = User::find(Auth::user()->id)->tasks->count();
        // $count = User::count();

        $count = substr($count, -1);

        if ($count == 1) {
            self::$character = $data[0];
        }
        if ($count > 1 && $count < 5) {
            self::$character  = $data[1];
        }
        if ($count >= 5 || $count == 0) {
            self::$character  = $data[2];
        }
        $ch = self::$character;
        return $ch;
    }
}
