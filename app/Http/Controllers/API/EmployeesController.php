<?php
namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Models\Employees;
use App\Http\Controllers\Controller;


class EmployeesController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Employees = Employees::all();
        return response()->json([
            'status' => true,
            'Employees' => $Employees
        ]);
        }
}
?>