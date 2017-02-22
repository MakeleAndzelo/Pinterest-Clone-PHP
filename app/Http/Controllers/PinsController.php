<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;
use Auth;
use Storage;

class PinsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth')->except(['index', 'show']);
	}

	public function index()
	{
		$pins = Pin::orderBy("created_at DESC")->get();
		return view("pins.index", compact('pins'));
	}

	public function show(Pin $pin)
	{
		return view("pins.show", compact('pin'));
	}

	public function create()
	{
		return view("pins.create");
	}

	public function store(Request $request)
	{
/*		$this->validate($request, [
			'name' => 'required|min:3',
			'description' => 'required|min:20',
			'image' => 'mimes:jpg,png,bmp|required'
		]);*/
		$pin = Auth::user()->pins()->create($request->all());
		$image = Storage::disk('local')->put('images', $request->file('image'));
		$pin->image_path = $image;
		$pin->save();
		return redirect(action('PinsController@show', $pin->id));
	}

	public function edit(Pin $pin)
	{
		return view("pins.edit", compact('pin'));
	}

	public function update(Request $request, Pin $pin)
	{
		$pin->update($request->all());
		return redirect(action("PinsController@show", $pin->id));
	}

	public function destroy(Pin $pin)
	{
		$pin->delete();
		Storage::delete($pin->image_path);
		return redirect(action("PinsController@index"));
	}

	public function upvote(Pin $pin)
	{
		$pin->like();
		return redirect()->back();
	}

	public function downvote(Pin $pin)
	{
		$pin->unlike();
		return redirect()->back();
	}
}
