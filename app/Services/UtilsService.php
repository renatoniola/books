<?php

namespace App\Services;

use Illuminate\Support\Str;

class UtilsService
{
    public static function generateSlug(int $id, string $title): string
    {
        $titleSlug = Str::slug($title);
        return "$id.$titleSlug";
    }
}
