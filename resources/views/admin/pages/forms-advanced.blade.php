@extends('layouts.master')

@section('title', 'Forms Advanced')
@section('title-2', 'Forms Advanced')
@section('title-3', 'Forms Advanced')

@push('css')
  {{-- Select2 --}}
  <link href="{{ asset('dist/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
  {{-- Bootstrap DatePicker --}}
  <link href="{{ asset('dist/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" >
  {{-- Bootstrap Touchspin --}}
  <link href="{{ asset('dist/vendor/bootstrap-touchspin/css/jquery.bootstrap-touchspin.css') }}" rel="stylesheet" >
  {{-- ClockPicker --}}
  <link href="{{ asset('dist/vendor/clock-picker/clockpicker.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="row">
        <div class="col-lg-6">
            {{-- Select2 --}}
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Select2</h6>
                </div>
                <div class="card-body">        
                    <p>Select2 is a jQuery based replacement for select boxes</p>          
                    <div class="form-group">
                        <label for="select2Single">Single Select Box</label>
                        <select class="select2-single form-control" name="state" id="select2Single">
                            <option value="">Select</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Jawa TImur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawaesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select2SinglePlaceholder">Single Select Box with Placeholder</label>
                        <select class="select2-single-placeholder form-control" name="state" id="select2SinglePlaceholder">
                            <option value="">Select</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau">Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat">Jawa Barat</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Jawa TImur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawaesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="select2Multiple">Multiple-Select Boxes (pillbox)</label>
                        <select class="select2-multiple form-control" name="states[]" multiple="multiple"
                            id="select2Multiple">
                            <option value="">Select</option>
                            <option value="Aceh">Aceh</option>
                            <option value="Sumatra Utara">Sumatra Utara</option>
                            <option value="Sumatra Barat">Sumatra Barat</option>
                            <option value="Riau">Riau</option>
                            <option value="Kepulauan Riau" selected>Kepulauan Riau</option>
                            <option value="Jambi">Jambi</option>
                            <option value="Bengkulu">Bengkulu</option>
                            <option value="Sumatra Selatan">Sumatra Selatan</option>
                            <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                            <option value="Lampung">Lampung</option>
                            <option value="Banten">Banten</option>
                            <option value="Jawa Barat" selected>Jawa Barat</option>
                            <option value="Jakarta">Jakarta</option>
                            <option value="Jawa Tengah">Jawa Tengah</option>
                            <option value="Yogyakarta">Yogyakarta</option>
                            <option value="Jawa TImur">Jawa Timur</option>
                            <option value="Bali">Bali</option>
                            <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                            <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                            <option value="Kalimantan Barat">Kalimantan Barat</option>
                            <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                            <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                            <option value="Kalimantan Timur">Kalimantan Timur</option>
                            <option value="Kalimantan Utara">Kalimantan Utara</option>
                            <option value="Gorontalo">Gorontalo</option>
                            <option value="Sulawaesi Barat">Sulawesi Barat</option>
                            <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                            <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                            <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                            <option value="Sulawesi Utara">Sulawesi Utara</option>
                            <option value="Maluku">Maluku</option>
                            <option value="Maluku Utara">Maluku Utara</option>
                            <option value="Papua Barat">Papua Barat</option>
                            <option value="Papua">Papua</option>
                        </select>
                    </div>
                    <p>For documentations Select2 you can visit <a href="https://select2.org/"
                    target="_blank">here.</a></p>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Date Picker</h6>
                </div>
                <div class="card-body">
                    <p>Simple and easy select a time for a text input using your mouse.</p>
                    <div class="form-group" id="simple-date1">
                    <label for="simpleDataInput">Simple Data Input</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="simpleDataInput">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date2">
                    <label for="oneYearView">One Year View</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="oneYearView">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date3">
                    <label for="decadeView">Decade View</label>
                        <div class="input-group date">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" class="form-control" value="01/06/2020" id="decadeView">
                        </div>
                    </div>
                    <div class="form-group" id="simple-date4">
                        <label for="dateRangePicker">Range Select</label>
                        <div class="input-daterange input-group">
                            <input type="text" class="input-sm form-control" name="start" />
                            <div class="input-group-prepend">
                                <span class="input-group-text">to</span>
                            </div>
                            <input type="text" class="input-sm form-control" name="end" />
                        </div>
                    </div>
                    <p>For documentations Bootstrap Datepicker you can visit <a href="https://github.com/uxsolutions/bootstrap-datepicker" target="_blank">here.</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-lg-6">
            <div class="card mb-4">
            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">TouchSpin</h6>
            </div>
            <div class="card-body">
                <p>A mobile and touch friendly input spinner component for Bootstrap 3. It supports the mousewheel and the up/down keys.</p>
                <div class="form-group">
                <label for="touchSpin1">Simpel TouchSpin</label>
                <input id="touchSpin1" type="text" class="form-control">
                </div>
                <div class="form-group">
                <label for="touchSpin2">TouchSpin with Prefix</label>
                <input id="touchSpin2" type="text" class="form-control">
                </div>
                <div class="form-group">
                <label for="touchSpin3">TouchSpin with Vertical Button</label>
                <input id="touchSpin3" type="text" class="form-control">
                </div>
                <p>For documentations TouchSpin you can visit <a href="https://github.com/istvan-ujjmeszaros/bootstrap-touchspin" target="_blank">here.</a></p>
            </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">ClockPicker</h6>
                </div>
                <div class="card-body">
                    <p>A clock-style timepicker for Bootstrap (or jQuery).</p>
                    <div class="form-group">
                        <label for="clockPicker1">Simple ClockPicker</label>
                        <div class="input-group clockpicker" id="clockPicker1">
                            <input type="text" class="form-control" value="06:30">                     
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            </div>                      
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="clockPicker2">Simple ClockPicker with Auto Close</label>
                        <div class="input-group clockpicker" id="clockPicker2">
                            <input type="text" class="form-control" value="12:30">                     
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-clock"></i></span>
                            </div>                      
                        </div>
                    </div>
                    <div class="form-group">
                    <label for="clockPicker2">ClockPicker with Auto Check Minutes</label>
                        <div class="input-group" id="clockPicker3">
                            <input class="form-control" placeholder="Now" value="">                     
                            <div class="input-group-append">
                                <button class="btn btn-primary" id="check-minutes">Check the Minutes</button>
                            </div>                      
                        </div>
                    </div>
                    <p>For documentations Clockpicker you can visit <a href="http://weareoutman.github.io/clockpicker/" target="_blank">here.</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- Select2 --}}
    <script src="{{ asset('dist/vendor/select2/dist/js/select2.min.js') }}"></script>
    {{-- Bootstrap Datepicker --}}
    <script src="{{ asset('dist/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    {{-- Bootstrap Touchspin --}}
    <script src="{{ asset('dist/vendor/bootstrap-touchspin/js/jquery.bootstrap-touchspin.js') }}"></script>
    {{-- ClockPicker --}}
    <script src="{{ asset('dist/vendor/clock-picker/clockpicker.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.select2-single').select2();

            // Select2 Single  with Placeholder
            $('.select2-single-placeholder').select2({
                placeholder: "Select a Province",
                allowClear: true
            });      

            // Select2 Multiple
            $('.select2-multiple').select2();

            // Bootstrap Date Picker
            $('#simple-date1 .input-group.date').datepicker({
                format: 'dd/mm/yyyy',
                todayBtn: 'linked',
                todayHighlight: true,
                autoclose: true,        
            });

            $('#simple-date2 .input-group.date').datepicker({
                startView: 1,
                format: 'dd/mm/yyyy',        
                autoclose: true,     
                todayHighlight: true,   
                todayBtn: 'linked',
            });

            $('#simple-date3 .input-group.date').datepicker({
                startView: 2,
                format: 'dd/mm/yyyy',        
                autoclose: true,     
                todayHighlight: true,   
                todayBtn: 'linked',
            });

            $('#simple-date4 .input-daterange').datepicker({        
                format: 'dd/mm/yyyy',        
                autoclose: true,     
                todayHighlight: true,   
                todayBtn: 'linked',
            });    

            // TouchSpin
            $('#touchSpin1').TouchSpin({
                min: 0,
                max: 100,                
                boostat: 5,
                maxboostedstep: 10,        
                initval: 0
            });

            $('#touchSpin2').TouchSpin({
                min:0,
                max: 100,
                decimals: 2,
                step: 0.1,
                postfix: '%',
                initval: 0,
                boostat: 5,
                maxboostedstep: 10
            });

            $('#touchSpin3').TouchSpin({
                min: 0,
                max: 100,
                initval: 0,
                boostat: 5,
                maxboostedstep: 10,
                verticalbuttons: true,
            });

            $('#clockPicker1').clockpicker({
                donetext: 'Done'
            });

            $('#clockPicker2').clockpicker({
                autoclose: true
            });

            let input = $('#clockPicker3').clockpicker({
                autoclose: true,
                'default': 'now',
                placement: 'top',
                align: 'left',
            });

            $('#check-minutes').click(function(e){        
                e.stopPropagation();
                input.clockpicker('show').clockpicker('toggleView', 'minutes');
            });
        });
    </script>
@endpush