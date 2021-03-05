<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignaturesController extends Controller
{
    /*
     _ Display the GuestBook homepage.
     _
     _ @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('signatures.index');
    }
    
    /*
	 _ Display the GuestBook form page.
	 _
	 _ @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function create()
	{
	    return view('signatures.sign');
	}
}
