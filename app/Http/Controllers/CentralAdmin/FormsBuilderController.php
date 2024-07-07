<?php

namespace App\Http\Controllers\CentralAdmin;

use App\Http\Controllers\Controller;
use App\Models\FormBuilder;
use Illuminate\Http\Request;



class FormsBuilderController extends Controller
{
    public function index() {
        $forms = FormBuilder::get();
        return view('CentralAdmin.FormsA.index', ['forms' => $forms]);
    }

    public function formIndex(Request $request) {
 
        // $forms = FormBuilder::get($request->id);
        $forms = FormBuilder::where('id', $request->id)->get();
        
        return view('CentralAdmin.FormsA.indexForms', ['forms' => $forms]);
    }



    public function create() {
        
        return view('CentralAdmin.FormsA.createA');
    }

    // for Creating forms
    public function createForms() {
        
        return view('CentralAdmin.FormsA.createA');
    }

    public function store(Request $request) {
         
        $request->validate([
            'formname' =>  'required|string|max:255',
            'status' =>  'required|string|max:100',
            'datecreated' => 'required|date',
            'lastupdate' => 'required|date',
        ]);

        FormBuilder::create([
            'formname' =>  $request->formname,
            'status' =>  $request->status,
            'datecreated' => $request->datecreated,
            'lastupdate' => $request->lastupdate,
        ]);


        return redirect('CentralAdmin/formsb')->with('status','Form Created Successfully');
    }

    public function edit(Request $request){
    
        $forms = FormBuilder::find($request->id);
        return view('CentralAdmin.FormsA.editA', ['forms' => $forms]);

    }

    public function destroy(Request $request) {
        $FB = FormBuilder::find($request->id);
        $FB->delete();
        return redirect('CentralAdmin/formsb')->with('status','Form deleted Successfully');
    }
}
