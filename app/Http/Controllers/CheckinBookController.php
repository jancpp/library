<?php

namespace App\Http\Controllers;

use App\Book;
use App\Reservation;
use http\Client\Curl\User;
use Illuminate\Http\Request;

class CheckinBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Book $book)
    {
        try {
            $book->checkin(auth()->user());
        } catch (\Exception $e) {
            return response([], 404);
        }
    }
}
