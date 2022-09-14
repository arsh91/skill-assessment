<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Employees;

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
        return view('employees.index', compact('Employees'));
    }

    public function create()
    {
        return view('employees.create');
    }
    
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
  
        $input = $request->all();
        $Employees = Employees::create($input);
        return redirect('/employees')->with('completed', 'Employee has been saved!');
    }

    public function show($id)
    {
        $Employees = Employees::findOrFail($id);
        return view('employees.show',compact('Employees'));
    }

    public function edit($id)
    {
       
        $Employees = Employees::findOrFail($id);
        return view('employees.edit',compact('Employees'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required'
        ]);
  
        $Employees = Employees::findOrFail($id);
		$Employees->firstname = $request->firstname;
        $Employees->lastname = $request->lastname;
        $Employees->company = $request->company;
        $Employees->email = $request->email;
        $Employees->phone = $request->phone;
        $Employees->save();
        
        return redirect('/employees')->with('completed', 'Employees has been updated');
    }
    
    public function destroy($id)
    {
		$Employees = Employees::findOrFail($id);
        $Employees->delete();
        return redirect()->route('employees.index');
    }

}
?>