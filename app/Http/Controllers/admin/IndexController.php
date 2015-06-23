<?php namespace App\Http\Controllers\admin;

use App\Page;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class IndexController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function index()
	{

		$pages = Page::where("slug", "index")->first();;
		$page_items =  $pages->page_items->first();


		if ($page_items->content != null) {
			//if save
			//$page_items->content = serialize((object) ["foo" => "bar", "bar" => "foo"]);

			//if get
			$content = unserialize($page_items->content);

			//if set
			// $content->logo = (object) ["title" => "deccostore", "image_name" => "logo-decco.png"];
			// $page_items->content = serialize($content);


			// $page_items->save();




		} else {
			$page_items->content = serialize((object) ["logo" => (object) ["title" => "deccostore", "image_name" => "logo-decco.png"]]);
			$content = unserialize($page_items->content);
			$page_items->save();

		}
	        return view('admin.index', ['content' => $content]);


	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
