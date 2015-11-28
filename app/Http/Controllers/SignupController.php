<?php  namespace App\Http\Controllers;
/**
 * Created by PhpStorm.
 * User: mchivuku
 * Date: 4/19/15
 * Time: 4:32 PM
 */

class SignupController extends Controller {

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

        return view('signup',array('title'=>'Sign-up'));
    }
}
