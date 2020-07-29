<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\SoloLearnScraping;

class SoloLearnScrapingTest extends TestCase
{
    public function test_returns_is_array()
    {   
        $url = "https://www.sololearn.com/Profile/6700255";
        
        $scrapy = new SoloLearnScraping();
        $all_courses = $scrapy->getAllCourses($url);

        $this->assertIsArray($all_courses);
    }

    public function test_get_specific_course()
    {
        $url = "https://www.sololearn.com/Profile/6700255";

        $scrapy = new SoloLearnScraping();

        $course = $scrapy->getAllCourses($url);

        $this->assertContains('PHP Tutorial', $course[4]);
    }
}
