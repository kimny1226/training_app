<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class LessonService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LessonService';
    }
}
