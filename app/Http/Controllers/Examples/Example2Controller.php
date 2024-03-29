<?php

namespace App\Http\Controllers\Examples;

// use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Models\Author;

class Example2Controller extends Controller
{
    public function show()
    {
        Gate::authorize('example2.view');

        return Response::json(Author::user()->toArray(), 200);
    }
}
