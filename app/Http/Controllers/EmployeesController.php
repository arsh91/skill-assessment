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
        return view('Employees.index', compact('Employees'));
    }

    public function create()
    {
        return view('Employees.create');
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
        $Companies = Employees::create($input);
        return redirect('/companies')->with('completed', 'Company has been saved!');
    }

    public function show($id)
    {
        $Companies = Companies::findOrFail($id);
        return view('companies.show',compact('Companies'));
    }

    public function edit($id)
    {
       
        $Companies = Companies::findOrFail($id);
        return view('companies.edit',compact('Companies'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);
  
        $Companies = Companies::findOrFail($id);
		$Companies->name = $request->name;
        $Companies->email = $request->email;
        $Companies->website = $request->website;
        
        $logo_name="";
        if($request->hasFile('logo')){
            $logo = $request->file('logo');
            $name = date('m-d-Y_his');
			$name = trim(preg_replace('/\s\s+/', ' ', str_replace("\n", " ", $name)));
            $logo_name = $name . '.' . $logo->getClientOriginalName();
            $path = storage_path().'/app/public/logo';
            $uplaod = $logo->move($path,$logo_name);
            $Companies->logo = $logo_name;
        }
        $Companies->save();
        
        return redirect('/companies')->with('completed', 'Company has been updated');
    }
    
    public function destroy($id)
    {
		$Companies = Companies::findOrFail($id);
        $Companies->delete();

        return redirect()->route('companies.index');
    }

}
?>