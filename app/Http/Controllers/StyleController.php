<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Style;
use Session;
use DB;
use Route;
use Response;

class StyleController extends Controller
{
	public function index()
	{
		$styles = Style::all();
		// if (count($styles) > 4) {
			return view('admin.styles.index')->withStyles($styles);
		// } else {
		// 	return redirect()->route('admin.dashboard');
		// }
	}

	public function store(Request $request)
	{
		$styles = Style::all();
		$styleArray = $request->all();
		$styleArrayKeys = array_keys($styleArray);
		for ($i = 0; $i <= sizeof($styleArray)-1; $i++) {
			if ($styleArrayKeys[$i] !== "_token") {
				$style = Style::where('slug', '=', $styleArrayKeys[$i])->firstOrFail();
				if ($style->value !== $styleArray[$styleArrayKeys[$i]]) {
					$style->value = '#'.$styleArray[$styleArrayKeys[$i]];
					$style->save();
				}
			}
		}
		return redirect()->route('styles.index');

	}
	public function css()
	{
			$styles = Style::all();
			$contents = View::make('css')->with('styles', $styles);
			$response = Response::make($contents, 200);
			$response->header('Content-Type', 'text/css');
			return $response;

	}
}
