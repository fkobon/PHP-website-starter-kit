<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{

		// Adds meta tags to the view for SEO. If not provided, it will
		// default to the settings in .env file or returns nothing.
		$data['title'] = 'Homepage';
		$metaDescription = 'This is the homepage description';
		$data['metaTags'] = [
			['name' => 'description', 'content' => $metaDescription],
			['property' => 'og:title', 'content' => $data['title']],
			['property' => 'og:description', 'content' => $metaDescription],
			['name' => 'twitter:title', 'content' => $data['title']],
			['name'=> 'twitter:description', 'content' => $metaDescription]
		];


		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
