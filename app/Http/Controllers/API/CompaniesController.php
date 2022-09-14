<?php
namespace App\Http\Controllers\Api;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Companies;
use App\Http\Controllers\Controller;

class CompaniesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Companies = Companies::all();
        return response()->json([
            'status' => true,
            'Companies' => $Companies
        ]);
        }

        public function test()
        {
            
            return 'hello';
           
            }
    

}
?>