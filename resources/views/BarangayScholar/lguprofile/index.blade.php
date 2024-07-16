<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="{{ asset('assets') }}/js/joboy.js"></script>

@extends('layouts.BSapp', [
'class' => 'sidebar-mini ',
'namePage' => 'MELLPI PRO For LGU Profile',
'activePage' => 'LGUPROFILE',
'activeNav' => '',
])

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="content" style="margin-top:50px;padding:2%">
    <div class="card" style="border-radius:10px;">
        <div class="card-header">
            <h5 class="title">{{__("List of Mellpi Pro for LGU Profile Sheet (Barangay)")}}</h5>
            <div class="content" style="margin:30px">

                <!-- alerts -->
                @include('layouts.page_template.crud_alert_message')

                <div class="alert alert-success d-none" id="successAlert" role="alert">
                    Data deleted successfully!
                </div>
                <div class="row">
                    <a href="{{route('BSLGUprofile.create')}}" class="btn btn-primary">Create data</a>
                    <!-- <table class="table table-striped">
                        <thead> -->
                
                        <table class="table table-striped">
                        <thead style="background-color:#508D4E;">
                            <tr>
                                <th scope="col" style="font-weight:bold;font-size:16px!important;color:white">#</th>
                                <th scope="col" style="font-weight:bold;font-size:16px!important;color:white">Date Monitoring </th>
                                <th scope="col" style="font-weight:bold;font-size:16px!important;color:white">Period Covered</th>
                                <th scope="col" style="font-weight:bold;font-size:16px!important;color:white">Status</th>
                                <th scope="col" style="font-weight:bold;font-size:16px!important;color:white">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php $num = 1; ?>
                            @foreach($lguProfile as $lguProfile)
                            <tr>
                                <td>{{$num}}</td>
                                <td>{{$lguProfile->dateMonitoring}}</td>
                                <td>{{$lguProfile->periodCovereda}}</td>
                                <td><?php echo ($lguProfile->status) == 1 ? 'Pending..' : 'Draft' ?></td>
                                <td id="table-edit">
                                    <ul class="list-inline m-0">
                                       <li class="list-inline-item" >
                                        @if( $lguProfile->status == 1 )
                                       <button onclick="myFunction('{{ $lguProfile->id }}')" class="btn btn-info btn-sm rounded-0 btn-edit" type="button" data-toggle="tooltip" data-placement="top" title="View"><i class="fa fa-eye"></i></button>
                                       @elseif( $lguProfile->status == 2 )
                                       <button onclick="myFunction('{{ $lguProfile->id }}')" class="btn btn-warning btn-sm rounded-0 btn-edit" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></button>
                                       @endif
                                       </li>
                                       <li class="list-inline-item" >
                                       <button style=" display:<?php echo ( $lguProfile->status == 1 ? "none":"block" ) ?> " onclick="openModal('{{ $lguProfile->id }}')" class="btn btn-danger btn-sm rounded-0 btn-delete" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></button>
                                       </li>


                                    </ul>
                                    <!-- <a href="{{route('BSLGUprofile.edit', $lguProfile->id)}}" id="button-edit" class="btn btn-info">
                                        <img id="img-edit" src="{{ asset('assets') }}/img/edit.png">Edit</a> -->
                                       
                                    <!-- <form action="{{ route('BSLGUprofile.destroy', $lguProfile->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete data?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="align-items:center;padding-right:10px;padding-left:10px;padding-top:8px;padding-bottom:8px;margin-right:10px;font-size:12px;font-weight:bold" class="btn btn-primary">
                                            <img style="margin-bottom:3px;color:white;height:15px;width:15px;background-color:none!important;" src="{{ asset('assets') }}/img/delete.png">
                                            Delete</button>
                                    </form> -->
                                </td>


                            </tr>
                            <?php $num++; ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this data?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" onclick="confirmDelete()">Sure</button>
                </div>
            </div>
        </div>
    </div>

@endsection