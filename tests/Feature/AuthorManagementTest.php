<?php

namespace Tests\Feature;

use App\Author;
use Carbon\Carbon;
use PHPUnit\Framework\TestResult;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorManagementTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_author_can_be_created()
    {
        $this->withoutExceptionHandling();

        $this->post('/author',[
            'name' => 'John Doe',
            'dob' => '01/01/1970',
        ]);

        $author = Author::all();

        $this->assertCount(1, $author);
        $this->assertInstanceOf(Carbon::class, $author->first()->dob);
        $this->assertEquals('1970/01/01', $author->first()->dob->format('Y/d/m'));
    }
}
