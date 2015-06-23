<?php namespace App\Http\Controllers\admin\Authenticate;

use App\User;
use Input;
use Hash;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AuthenticateController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */


	public function getLogin()
	{
		//return view('admin.authenticate.login');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function postLogin()
	{

		$credential = Input::only('email','password');
		if(Auth::attemp($credential)) {
			echo 'login success';
		} else {
			echo 'Invalid credential';
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function getRegister()
	{
		return view('admin.authenticate.register');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function postRegister()
	{
		$user = new User;
		$user->name = Input::get('name');
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->save();

		return view('admin.authenticate.login');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/admin');
	}

}
