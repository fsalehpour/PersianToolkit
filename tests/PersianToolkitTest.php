<?php
/**
 * Created by PhpStorm.
 * User: Faramarz Salehpour
 */


use PersianToolkit\PersianToolkit;
use PHPUnit\Framework\TestCase;

class PersianToolkitTest extends TestCase
{
    /**
     * @test
     */
    public function it_returns_a_string_with_converted_chars()
    {
        $arabic = 'ابپتثجچحخدذرزژسشصضطظعغفقكگلمنوهي';
        $persian = 'ابپتثجچحخدذرزژسشصضطظعغفقکگلمنوهی';
        $this->assertEquals($persian, PersianToolkit::arabic2Persian($arabic));
    }
}
