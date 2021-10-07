<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\UserSubscribed;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\NewsletterRequest;

class NewsletterController extends Controller
{
    public function index()
    {
        return view('app');
    }

    public function store(NewsletterRequest $request)
    {

        DB::table('newsletters')->insert([
            'email' => $request->email,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        event(new UserSubscribed($request->email));
        smilify('success', 'Successfully subscribed');
        return back();
    }
}
