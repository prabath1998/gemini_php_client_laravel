<?php

namespace App\Http\Controllers;

use Gemini;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $apiKey = getenv('GEMINI_API_KEY');
        $client = Gemini::client($apiKey);

        $result = $client->geminiPro()->generateContent('What are the major updates of laravel 11?');

        $response = $result->text();

        return response()->json($response);

    }
}
