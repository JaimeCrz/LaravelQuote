<?php

namespace Tests\Integration\models;

use App\Quote;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class QuoteTest extends TestCase
{
    /** @test */
    function it_fetches_most_viewed_quotes()
    {
        factory(Quote::class, 5)->create();
        factory(Quote::class)->create(['views' => 100]);
        $mostViewed = factory(Quote::class)->create(['views' => 200]);

        $quotes = Quote::mostViewed();

        $this->assertEquals($mostViewed->id, $quotes->first()->id);
    }
}