<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormField;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::all();
        return view('forms.index', compact('forms'));
    }

    public function create()
    {
        return view('forms.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'fields.*.label' => 'required|string|max:255',
            'fields.*.name' => 'required|string|max:255',
            'fields.*.type' => 'required|string|max:255',
        ]);
    

        $form = Form::create($request->all());

        foreach ($request->fields as $field) {
            $form->fields()->create($field);
        }

        return redirect()->route('forms.index');
    }

    public function show(Form $form)
    {
        //dd($form);
        return view('forms.show', compact('form'));
    }

    public function edit(Form $form)
    {
        return view('forms.edit', compact('form'));
    }

    public function update(Request $request, Form $form)
    {
        $form->update($request->all());

        $form->fields()->delete();
        foreach ($request->fields as $field) {
            $form->fields()->create($field);
        }

        return redirect()->route('forms.index');
    }

    public function destroy(Form $form)
    {
        $form->delete();
        return redirect()->route('forms.index');
    }
}
