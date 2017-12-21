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
		if (count($styles) > 4) {
			return view('admin.styles.index')->withStyles($styles);
		} else {
			return redirect()->route('admin.dashboard');
		}
	}

	public function store(Request $request)
	{
		$styles = Style::all();
		Style::truncate();
		$styleArray = $request->all();
		$styleArrayKeys = array_keys($styleArray);
		for ($i = 0; $i <= sizeof($styleArray)-1; $i++) {
			if ($styleArrayKeys[$i] !== "_token") {
				$currentStyle = $styleArray[$styleArrayKeys[$i]];
				$allStyles = [];
				$newStyle = new Style();
				$newStyle->value = '#'.$currentStyle;

				if (strpos($styleArrayKeys[$i], 'nav') !== false) {
					$newStyle->selector = '.customNavbar';
				} else if (strpos($styleArrayKeys[$i], 'body') !== false) {
					$newStyle->selector = '.customBody';
				} else if (strpos($styleArrayKeys[$i], 'footer') !== false) {
					$newStyle->selector = '.customFooter';
				} else if (strpos($styleArrayKeys[$i], 'admin') !== false) {
					$newStyle->selector = '.customAdmin';
				} else {
					$newStyle->selector = 'you fucked up';
				}

				if (strpos($styleArrayKeys[$i], 'BGColor') !== false) {
					$newStyle->property = 'background-color';
				} else if (strpos($styleArrayKeys[$i], 'HoverFontColor') !== false) {
					$newStyle->property = 'color';
					$newStyle->selector = $newStyle->selector . " a:hover";
				} else if (strpos($styleArrayKeys[$i], 'FontColor') !== false) {
					$newStyle->property = 'color';
					$newStyle->selector = $newStyle->selector . ", " . $newStyle->selector . " a";
				} else if (strpos($styleArrayKeys[$i], 'HoverColor') !== false) {
					$newStyle->property = 'background-color';
					$newStyle->selector = $newStyle->selector . " a:hover";
				} else {
					$newStyle->property = 'you fucked up';
				}


				array_push($allStyles, $newStyle);

				$newStyle->save();
			}
		}
		return redirect()->route('styles.index');
// customAdmin, customBody, customFooter, customNavbar
	}
	public function css()
	{
		  $styles = Style::all();
		  return view('admin.styles.css')->withStyles($styles);

	}
}
