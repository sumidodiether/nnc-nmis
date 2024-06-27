@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'LGU Profile',
'activePage' => 'LGUPROFILE',
'activeNav' => '',
])

@section('content')
<div class="panel-header panel-header-sm">
</div>
<div class="content" style="margin:30px">
    <div class="row">
    <div style="display:flex;align-items:center">
            <a href="{{route('BSLGUprofile.create')}}" class="btn btn-primary">Create data</a>
            <p style="margin-bottom:0px;margin-left:25px; font-weight:900;font-size:25px">MELLPI PRO FORM B: BARANGAY
                PROFILE SHEET</p>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="colspan=1">#</th>
                    <th scope="col">Date Monitoring </th>
                    <th scope="col">Period CoveredA</th>
                    <th scope="col">Period CoveredB</th>
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
                    <td>{{$lguProfile->periodCoveredb}}</td>
                    <td>{{$lguProfile->status}}</td>
                    <td class="d-flex">
                        <a href="{{route('BSLGUprofile.edit', $lguProfile->id)}}" class="btn btn-primary">edit</a>
                        <form action="{{ route('BSLGUprofile.destroy', $lguProfile->id) }}" method="POST"
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
@endsection