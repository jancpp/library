<?php

namespace Tests\Unit;

use App\Book;
use PHPUnit\Framework\TestResult;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_id_is_recorded()
    {
        Book::create([
            'title' => 'My title',
            'author_id' => 1,
        ]);

        $this->assertCount(1, Book::all());
    }
}
