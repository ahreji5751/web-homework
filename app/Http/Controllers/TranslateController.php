<?php

namespace App\Http\Controllers;

use App\Translate;

class TranslateController extends Controller
{
    public function index() {
        return view('layouts.translate');
    }

    public function show(Translate $translate) {
        $translation = $translate->make(explode(' ', request()->sentence));
        return redirect()->back()->with('translationResult', $translation);
    }

    public function create(Translate $translate) {
         $translate->create([
            'en' => request()->en,
            'ru' => request()->ru
        ]);
        return redirect()->back()->with('addingResult', 'Successfully added');
    }
}
