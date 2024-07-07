@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Governance',
'activePage' => 'Governance',
'activeNav' => '',
])

@section('content')
<div class="row card" style="margin:20px;border-radius:20px">
    <h1>Create New Form</h1>
    <form action="{{ route('forms.store') }}" method="POST">
        @csrf
        <div>

            <div class="col form-group">
                <label for="exampleFormControlInput1">Form Name:</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <br>

            <div id="fields">
                <div class="col" style="border-left: 6px solid lightblue; padding-top:3px;padding-bottom:3px">
                    <div class="  form-group">
                        <label for="exampleFormControlInput1">Field Label:</label>
                        <input type="text" class="form-control" type="text" name="fields[0][label]" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Field Name:</label>
                        <input type="text" class="form-control" type="text" name="fields[0][name]" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Field Type:</label>
                        <input type="text" class="form-control" type="text" name="fields[0][type]" required>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <br>

        <button type="button" onclick="addField()" class="btn btn-primary">Add Field</button>
        <button type="submit" class="btn btn-warning">Create Form</button>
    </form>

</div>
<script>
    let fieldCount = 1;

    function addField() {
        const fieldsDiv = document.getElementById('fields');
        const newFieldDiv = document.createElement('div');

        newFieldDiv.innerHTML = `
                <br>
                <div>
                <div class="col" style="border-left: 6px solid lightblue; padding-top:3px;padding-bottom:3px">
                    <div class="  form-group">
                        <label for="exampleFormControlInput1">Field Label:</label>
                        <input type="text" class="form-control"  type="text" name="fields[${fieldCount}][label]"   required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Field Name:</label>
                        <input type="text" class="form-control"  type="text" name="fields[${fieldCount}][name]"   required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Field Type:</label>
                        <input type="text" class="form-control"  type="text" name="fields[${fieldCount}][type]"   required>
                    </div>
                </div>
            `;

        fieldsDiv.appendChild(newFieldDiv);
        fieldCount++;
    }
</script>
@endsection