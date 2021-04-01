<?php

namespace App\Services;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
class LessonService
{

    const SYMBOLS = ['+','-','×','÷'];

    /**
     * 
     */
    public function getStart()
    {
        // 問題リスト
        $dispList = [];
        $testCount = 10; // 作成問題数

        // 問題数の数だけ生成
        for ($i = 0; $i < $testCount; $i++) {
            $test = $this->getLesson1();

            $dispList[] = $test;
        }

        return $dispList;
    }

    /**
     * 
     */
    public function getLesson1()
    {
        // 問題リスト
        $dispList = [];

        // 足し算の場合、2桁数字 OK
        // 引き算の場合、整数のみとする 1番目は20未満OK
        // 掛け算の場合、片方1～10 (両方2桁はNG)
        // 割り算の場合、割り切れる事

        $symbol1 = Arr::random(self::SYMBOLS);

        $disp1 = null;
        $disp2 = null;
        $disp3 = null;
        $disp4 = null;

        switch ($symbol1) {
            case '+':
                $number1 = rand(2, 20);
                $number2 = rand(2, 20);
        
                $disp1 = $number1;
                $disp2 = $symbol1;
                $disp3 = $number2;
                $disp4 = $number1 + $number2;
                break;
            case '-':
                $work1 = rand(2, 20);
                $work2 = rand(2, 20);
                if ($work1 >= $work2) {
                    $number1 = $work1;
                    $number2 = $work2;
                } else {
                    $number1 = $work2;
                    $number2 = $work1;
                }
                $disp1 = $number1;
                $disp2 = $symbol1;
                $disp3 = $number2;
                $disp4 = $number1 - $number2;
                break;
            case '×':
                $number1 = rand(2, 9);
                if (strlen($number1) < 2) {
                    $number2 = rand(2, 9);
                } else {
                    $number2 = rand(2, 9);
                }
                $disp1 = $number1;
                $disp2 = $symbol1;
                $disp3 = $number2;
                $disp4 = $number1 * $number2;
                break;
            case '÷':
                $number1 = rand(1, 9);
                if (strlen($number1) < 2) {
                    $number2 = rand(2, 9);
                } else {
                    $number2 = rand(2, 9);
                }

                $disp1 = $number1 * $number2;
                $disp2 = $symbol1;
                $disp3 = $number2;
                $disp4 = $number1;
                break;
            
            default:
                # code...
                break;
        }

        $dispList = [
            $disp1,
            $disp2,
            $disp3,
            $disp4,
        ];

        return $dispList;
    }
}
