<?php namespace App\Http\Controllers\admin;

use Input;
use App\Page;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Request; // import to use Request method

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
			//$page_items->content = serialize((object) ["logo" => (object) ["title" => "deccostore", "image_name" => "logo-decco.png"]]);
			$page_items->content = serialize((object) [
				"logo" => (object) ["title" => "deccostore", "image_name" => "logo-decco.png"],
				"slides_show" => [
					(object) ["title" => "slide1", "image_name" => "slide-1.jpg"],
				 	(object) ["title" => "slide2", "image_name" => "slide-2.jpg"],
				 	(object) ["title" => "slide3", "image_name" => "slide-3.jpg"],
				 	(object) ["title" => "slide4", "image_name" => "slide-4.jpg"],
				 	(object) ["title" => "slide5", "image_name" => "slide-5.jpg"]
				 ]
			]);

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

		$pages = Page::where("slug", "index")->first();;
		$page_items =  $pages->page_items->first();
		$content = unserialize($page_items->content);

		// use Input method
		if (Input::file('uploadLogo')) {
			$file = Input::file('uploadLogo');

				# code...

			$content->logo = (object) ["title" => $file->getClientOriginalName(), "image_name" => "logo-decco.png"];
			$file->move(base_path() . '/public/images/', "logo-decco.png");
			// echo $file->getFilename();echo "<br>";
			// echo $file->getClientOriginalName();echo "<br>";
			// echo $file->getClientSize();echo "<br>";
			// echo $file->getClientMimeType();echo "<br>";
			// echo $file->guessClientExtension();echo "<br>";
			// echo $file->getRealPath();

		} else if(Input::file('uploadSlideShow')) {
			$slides_show = Input::file('uploadSlideShow');
			$arrays = [];
			foreach ($slides_show as $key=>$slide_show) {
				if($slide_show){

					$content->slides_show[$key]->title = $slide_show->getClientOriginalName();
					$content->slides_show[$key]->image_name = "slide-".$key.".".$slide_show->guessClientExtension();
					//$arr[$newkey] = $arr[$oldkey];
					//unset($page_items->content->slides_show[$key]);
					//array_push($array, (object) ["title" => $slide_show->getClientOriginalName(), "image_name" => "slide-".$key.$slide_show->guessClientExtension()]);
					$slide_show->move(base_path() . '/public/images/slides', "slide-".$key.".".$slide_show->guessClientExtension());
					//echo "key =>".$key;
					//echo "slide_show =>".$slide_show->guessClientExtension();
				}
			}

		}

		$page_items->content = serialize($content);
		$page_items->save();


		// use Request Method
		// $file = Request::file('fileUpload');
		// $extension = $file->getClientOriginalExtension();
		// $mimeType = $file->getClientMimeType();
		// $original_filename = $file->getClientOriginalName();
		// $filename = $file->getFilename().'.'.$extension;
 
 
		return view('admin.index', ['content' => $content]);
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
