<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;
class adminController extends Controller
{
	public function showadminPage(){
   return view('admin');
    }

    public function store(Request $Request){
    	$section_name=$Request->input('section_name');
    	DB::table('books')->insert(['section_name'=>$section_name]);
    	return redirect('admin');
    }
}
