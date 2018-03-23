<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Students;
use App\Http\Models\Sample;

class SampleController extends Controller
{
    public function index() {
		$obj = new Sample();
		$data = $obj::all();
		$obj = new Students();
		$data2 = $obj::all();

		return view('main', ['data' => $data],['data2' => $data2]);
	}
}
