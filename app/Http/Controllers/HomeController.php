<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;
use App\User;

class HomeController extends Controller {

	public function space()
  {
    return view('articles.home');
  }
	public function errorer()
	{
		return view('errors.loginerror');
	}
  public function register()
  {
    return view('articles.registration');
  }
  public function regisdata()
  {
		$error = false;
    $input = Request::all();
		if ($input['password'] == $input['confirmpassword']){
			$input['created_at'] = Carbon::now();
			$input['updated_at'] = Carbon::now();
			User::create($input);
	    return redirect('/');
		}
		else {
			$error = 'Password did not match';
			return view('articles.registration', compact('error'));
		}
  }
	public function authdata()
	{
		/*$dayta = User::all();

		//echo "<script> alert(' " . print_r($dayta) . "')</script>";
		$error = false;
    $input = Request::all();
		echo "<script> alert(' " . print_r($input) . "')</script>";
		if ($input['authuser'] == $dayta['username']){
			if ($input['authpassword'] == $dayta['password']){
				$loggedin = 'log in successfull';
				return redirect('/');
			}
			else {
				$error = 'Username or Password did not match';
				return view('articles.home', compact('error'));
				return redirect('/');
			}
		}
		else {
			$error = 'Username or Password did not match';
			return view('articles.home', compact('error'));
			return redirect('/');
		}*/
	}

}
