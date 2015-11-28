<?php namespace App\Http\Controllers;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{


        return view('home',array('title'=>'IndieMMA - Home'));
	}

    public function about()
    {

        \View::share('title', 'Contact');

        return view('about',array('title'=>'IndieMMA - About'));
    }

    public function contact()
    {

        \View::share('title', 'Contact');

        return view('contact',array('title'=>'IndieMMA - Contact'));
    }

}
