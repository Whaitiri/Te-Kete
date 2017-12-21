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


	}

	public function css()
	{
		  $styles = Style::all();
		  return view('admin.styling.css')->withStyles($styles);

	}
}
