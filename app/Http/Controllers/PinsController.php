<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pin;

class PinsController extends Controller
{
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
		$pin = Pin::create($request->all());
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
		return redirect(action("PinsController@index"));
	}
}
