<?php

namespace App\Http\Controllers\React;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReactAppController extends Controller
{
    public function renderApp()
{
    return view('users.user-view-react'); // user-view-react.blade.php renders our react application
}
}
