<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translate extends Model
{

    protected $fillable = ['en', 'ru'];

    public function make($sentence)
    {
        $result = [];
        foreach ($sentence as $word) {
            $translatedWord = self::where('en', $word)->first();
            $translatedWord = $translatedWord ? $translatedWord->ru : '<span style="color: orange">'.$word.'</span>';
            $result []= $translatedWord;
        }

        return implode(' ', $result);
    }

}
