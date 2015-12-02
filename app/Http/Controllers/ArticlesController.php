<?php namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Request;


class ArticlesController extends Controller {

	public function index()
	{
			// return \Auth::user()->username;
			$usrid = False;
			if (isset(\Auth::user()->username)) {
				$usrid = \Auth::user()->username;
			}

			if ($usrid) {
					$articles = Article::latest('published_at')->get();
					return view('articles.index', compact('articles'));
				}
			else
					return view('errors.503');

	}

	public function show($id)
	{

		$article = Article::findOrFail($id);

		return view('articles.show', compact('article'));

	}

	public function create()
	{
		return view('articles.create');
	}

	public function store()
	{
		$input = Request::all();
		$articles = Article::latest('published_at')->get()->first();
		#dd($articles['attributes']['id']);
		$ID = $articles['attributes']['id'];
		$IDplus = $ID+1;
		#dd($input);
		$file = Request::file('photo')->move("uploads", "image" + $IDplus . \Auth::user()->username);

		$input['published_at'] = Carbon::now();
		$input['username'] = \Auth::user()->username;
		Article::create($input);

		return redirect('articles');
	}
}
