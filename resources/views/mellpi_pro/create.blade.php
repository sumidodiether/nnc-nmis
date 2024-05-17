@extends('layouts.app', [
'class' => 'sidebar-mini ',
'namePage' => 'Mellpi Pro',
'activePage' => 'mellpi_pro',
'activeNav' => '',
])

@section('content')

<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/joboy.css') }}">

<!-- Include jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Include local Parsley.js -->
<script src="{{ asset('assets/js/parsley.min.js') }}"></script>

<style>
.form-section {
    display: none;
}

.form-section.current {
    display: inline;
}

</style>

<div class="panel-header panel-header-sm"></div>
<div class="content">
    <div class="row-12">
        <div class="col flex">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">{{__(" MellPi Pro LGU Profile")}}</h5>
                </div>
                <div class="card-header row-6 d-inline-flex">
                    <form action="{{ route('mellpi_pro.upload') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" name="inputcsvfile" id="inputcsvfile" required>
                                <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary" style="margin:0px; margin-left:0px" id="checkData" type="submit">Check data</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-body">
                    <div id="fileContents"></div>
                    <br>
                </div>
                <div class="card-body">
                    <div class="nav nav-fill my-3">
                        <label class="nav-link shadow-sm step0 border ml-2 ">Step One</label>
                        <label class="nav-link shadow-sm step1 border ml-2 ">Step Two</label>
                        <label class="nav-link shadow-sm step2 border ml-2 ">Step Three</label>
                        <label class="nav-link shadow-sm step3 border ml-2 ">Step Four</label>
                    </div>
                    <form method="post" class="employee-form" action="{{ route('mellpi_pro.create') }}" autocomplete="off" enctype="multipart/form-data">
                        @csrf
                        @include('alerts.success')

                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Barangay")}}</label>
                                        <select class="form-control" name="barangay">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Municipality/City")}}</label>
                                        <select class="form-control" name="municipality">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Province")}}</label>
                                        <select class="form-control" name="province">
                                            <option selected>Open this select menu</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Income class")}}</label>
                                        <select class="form-control" name="income_class">
                                            <option selected>Open this select menu</option>
                                            <option value="1">1st</option>
                                            <option value="2">2nd</option>
                                            <option value="3">3rd</option>
                                            <option value="4">4th</option>
                                            <option value="5">5th</option>
                                            <option value="6">6th</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Date of monitoring")}}</label>
                                        <input type="date" name="date_monitoring" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__(" Period Covered")}}</label>
                                        <input type="text" name="period_covered" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Population 2022")}}</label>
                                        <input type="number" name="population" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Infants 0-6 months old 2022")}}</label>
                                        <input type="number" name="infants" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Pregnant women 2022")}}</label>
                                        <input type="number" name="pregnant_women" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Lactating women 2022")}}</label>
                                        <input type="number" name="lactating_women" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Other info 1")}}</label>
                                        <input type="text" name="info1" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Other info 2")}}</label>
                                        <input type="text" name="info2" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-section">
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Other info 3")}}</label>
                                        <input type="text" name="info3" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Other info 4")}}</label>
                                        <input type="text" name="info4" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-7 pr-1">
                                    <div class="form-group">
                                        <label>{{__("Other info 5")}}</label>
                                        <input type="text" name="info5" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-navigation">
                            <button type="button" class="previous btn btn-outline-primary btn-info float-left">&lt; Previous</button>
                            <button type="button" class="next btn btn-outline-primary btn-info float-right">Next &gt;</button>
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(function() {
    var $sections = $('.form-section');

    function navigateTo(index) {
        $sections.removeClass('current').eq(index).addClass('current');
        $('.form-navigation .previous').toggle(index > 0);
        var atTheEnd = index >= $sections.length - 1;
        $('.form-navigation .next').toggle(!atTheEnd);
        $('.form-navigation [type=submit]').toggle(atTheEnd);

        // Reset the styles for all step indicators
        $('.nav-link').css({
            'background-color': '',
            'color': ''
        });

        // Apply the active styles to the current step
        const step = document.querySelector('.step' + index);
        step.style.backgroundColor = "#64987e";
        step.style.color = "white";
    }

    function curIndex() {
        return $sections.index($sections.filter('.current'));
    }

    function validateSection(index) {
        var isValid = true;
        $sections.eq(index).find(':input[required]').each(function() {
            if (!this.value.trim()) {
                isValid = false;
                $(this).addClass('is-invalid');
            } else {
                $(this).removeClass('is-invalid');
            }
        });
        return isValid;
    }

    $('.form-navigation .previous').click(function() {
        navigateTo(curIndex() - 1);
    });

    $('.form-navigation .next').click(function() {
        if (validateSection(curIndex())) {
            navigateTo(curIndex() + 1);
        }
    });

    $sections.each(function(index, section) {
        $(section).find(':input').attr('data-group', 'block-' + index);
    });

    navigateTo(0);
});
</script>



@endsection

{{-- <script src="{{ asset('assets/js/joboy.js') }}"></script> --}}
