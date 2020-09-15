<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{

    public function tabung(Request $request) {
        $jari_jari = $request->input('jari_jari');
        $tinggi = $request->input('tinggi');
        $phi = 22/7;

        $volume = $phi * $jari_jari * $jari_jari * $tinggi;

        echo "Tabung yang memiliki Jari - Jari : $jari_jari <br> dan Tinggi: $tinggi<br>";
		echo "Maka memiliki Volume: $volume";
    }

    public function bola(Request $request) {
        $jari_jari = $request->input('jari_jari');
        $phi = 22/7;

        $volume = 4/3 * $phi * $jari_jari * $jari_jari * $jari_jari;

        echo "Bola yang memiliki Jari - Jari : $jari_jari<br>";
		echo "Maka memiliki Volume: $volume";
    }

    public function kerucut(Request $request) {
        $luasAlas = $request->input('luasAlas');
        $tinggi = $request->input('tinggi');

        $volume = 1/3 * $luasAlas * $tinggi;

        echo "Kerucut yang memiliki Luas Alas : $luasAlas <br> dan Tinggi: $tinggi<br>";
		echo "Maka memiliki Volume: $volume";

    }
}
