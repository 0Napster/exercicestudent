<?php namespace student\Http\Controllers;

class HomeController extends Controller {


	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		return view('front.index');
	}

}
