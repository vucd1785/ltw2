<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Http\Models\Students;

class StudentsController extends Controller
{
    public function index() {
		$obj = new Students();
		$data = $obj::all();
		
		return view('hao.index', ['data' => $data]);
	}
}
