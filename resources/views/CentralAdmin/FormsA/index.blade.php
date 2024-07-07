@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'Form Builder',
'activePage' => 'forms2',
'activeNav' => '',
])

@section('content')
 
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__("Form Management")}}</h5>
                    <div class="content" style="margin:30px">
                            @if(session('status'))
                                <div class="row alert alert-success">{{session('status')}}</div>
                                <br>
                            @endif
                        <div class="row row-12" style="display:flex">
                            <div style="display:flex;align-items:center">
                                <a href="{{route('formsb.create')}}" class="btn btn-primary">Create Form</a> 
                            </div>
                        
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th scope="colspan=1">Id</th>
                                        <th scope="col">Form name</th>
                                        <th scope="col">Date Created</th>
                                        <th scope="col">Last Update</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    @foreach($forms as $forms)
                                    <tr>
                                        <th scope="rowspan=1">{{$forms->id}}</th>
                                        <td>{{$forms->formname}}</td>
                                        <td>{{$forms->datecreated}}</td>
                                        <td>{{$forms->lastupdate}}</td>
                                        <td>{{$forms->status}}</td>
                                        <td class="d-flex">
                                            <a href="{{route('formsb.formIndex', $forms->id)}}" style="margin-right: 10px"
                                                class="btn btn-primary">View Form</a>

                                            <a href="{{route('formsb.edit', $forms->id)}}" style="margin-right: 10px"
                                                class="btn btn-primary">Edit</a>

                                            <form action="{{ route('formsb.destroy', $forms->id) }}"
                                                method="POST"
                                                onsubmit="return confirm('Are you sure you want to delete data?');">

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>


                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection