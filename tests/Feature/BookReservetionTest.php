<?php

namespace Tests\Feature;

use App\Book;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookReservetionTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function a_book_can_be_added_to_library()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/books', [
            'title'=> 'My book',
            'author' => 'John J. Johnson',
        ]);

        $response->assertOk();
        $this->assertCount(1, Book::all());
    }
}


?>
