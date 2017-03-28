<?php

/**
* 
*/
class PagesController
{
	
	public function home()
	{
		return view('index');
	}

	public function about()
	{
		$company = 'Laracasts';

		return view('about', ['company' => $company]);
	}

	public function aboutCulture()
	{
		$name = 'Laracasts';

		return view('about-culture');
	}


	public function contact()
	{
		return view('contact');
	}
}