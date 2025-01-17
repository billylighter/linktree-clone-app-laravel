<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLinksController extends Controller
{
    public function __invoke(User $user)
    {
        $user = $user->load('links');
        $url =  url('/');;;
        return view('user.links', compact('user', 'url'));
    }
}
