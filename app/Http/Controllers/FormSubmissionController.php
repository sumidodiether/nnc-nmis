<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormSubmission;
use Illuminate\Http\Request;

class FormSubmissionController extends Controller
{
    public function store(Request $request, Form $form)
    {
        //dd($request);
        $rules = [];
        foreach ($form->fields as $field) {
            $rules[$field->name] = 'required';
        }
        $request->validate($rules);

        $data = $request->except('_token');

        FormSubmission::create([
            'form_id' => $form->id,
            'data' => json_encode($data),
        ]);

        return redirect()->back()->with('success', 'Form submitted successfully.');
    }
}
