@extends('layouts.master')

@section('title', 'Charts')
@section('title-2', 'Charts')
@section('title-3', 'Charts')

@section('content')
    <div class="row mb-3">
        {{-- Area Charts --}}
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="myAreaChart"></canvas>
                    </div>
                    <hr>
                    Styling for the area chart can be found in the
                    <code>/js/demo/chart-area-demo.js</code> file.
                </div>
            </div>
        </div>

        {{-- Bar Chart --}}
        <div class="col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Bar Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-bar">
                        <canvas id="myBarChart"></canvas>
                    </div>
                    <hr>
                    Styling for the bar chart can be found in the <code>/js/demo/chart-bar-demo.js</code> file.
                </div>
            </div>
        </div>

        {{-- Donut Chart --}}
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Donut Chart</h6>
                </div>
                <div class="card-body">
                    <div class="chart-pie pt-4">
                        <canvas id="myPieChart"></canvas>
                    </div>
                    <hr>
                    Styling for the donut chart can be found in the <code>/js/demo/chart-pie-demo.js</code> file.
                </div>
            </div>
        </div>
    </div>
    {{--Row--}}

    {{-- Documentation Link --}}
    <div class="row">
        <div class="col-lg-12">
            <p class="mb-4">Chart.js is a third party plugin that is used to generate the charts in this theme. The
            charts below have been customized - for further customization options, please visit the <a
                target="_blank" href="https://www.chartjs.org/docs/latest/">official Chart.js documentation</a>.</p>
        </div>
    </div>
@endsection

@push('js')
    {{-- Page level plugins --}}
    <script src="{{ asset('dist/vendor/chart.js/Chart.min.js') }}"></script>
    {{-- Page level custom scripts --}}
    <script src="{{ asset('dist/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dist/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('dist/js/demo/chart-bar-demo.js') }}"></script>
@endpush