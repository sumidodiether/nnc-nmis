@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'MELLPI PRO For LGU Profile',
'activePage' => 'LGUPROFILE',
'activeNav' => '',
])

@section('content')
<div class="content" style="margin-top:50px;padding:2%">
    <div class="card"  style="border-radius:10px;">
        <div class="card-header">
            <h5 class="title">{{__("List of LGU Profile Sheet (Barangay)")}}</h5>
            <div class="content" style="margin:30px">


                <div class="row">
                    <a href="{{route('BSLGUprofile.create')}}" class="btn btn-primary">Create data</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="colspan=1">Id</th>
                                <th scope="col">Date Monitoring </th>
                                <th scope="col">Period Covered</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>


                            @foreach($lguProfile as $lguProfile)
                            <tr>
                                <th scope="rowspan=1">{{$lguProfile->id}}</th>
                                <td>{{$lguProfile->dateMonitoring}}</td>
                                <td>{{$lguProfile->periodCovereda}}</td>
                                <td>{{$lguProfile->status}}</td>
                                <td class="d-flex">
                                    <a href="{{route('BSLGUprofile.edit', $lguProfile->id)}}" class="btn btn-primary">  <i class="now-ui-icons text_align-center"></i>Edit</a>
                                    <form action="{{ route('BSLGUprofile.destroy', $lguProfile->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete data?');">
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
@endsection