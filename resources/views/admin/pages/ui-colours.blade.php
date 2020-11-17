@extends('layouts.master')

@section('title', 'UI Colours')
@section('title-2', 'UI Colours')
@section('title-3', 'UI Colours')

@section('content')
    <div class="row mb-3">
        <!-- General Colors-->
        <div class="col-lg-6">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">General Colors</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-primary text-white">
                                <div class="card-body">
                                    Primary
                                    <div class="text-white-50 small">#6777EF</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    Success
                                    <div class="text-white-50 small">#66bb6a</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-info text-white">
                                <div class="card-body">
                                    Info
                                    <div class="text-white-50 small">#3abaf4</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    Warning
                                    <div class="text-white-50 small">#ffa426</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    Danger
                                    <div class="text-white-50 small">#fc544b</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-secondary text-white">
                                <div class="card-body">
                                    Secondary
                                    <div class="text-white-50 small">#757575</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Background Gradient Utilities --}}
        <div class="col-lg-6">
            <div class="card sm mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Background Gradient Utilities</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-primary text-white">
                                <div class="card-body">
                                    Gradient Primary
                                    <div class="text-white-50 small">.bg-gradient-primary</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-success text-white">
                                <div class="card-body">
                                    Gradient Success
                                    <div class="text-white-50 small">.bg-gradient-success</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-info text-white">
                                <div class="card-body">
                                    Gradient Info
                                    <div class="text-white-50 small">.bg-gradient-info</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-warning text-white">
                                <div class="card-body">
                                    Gradient Warning
                                    <div class="text-white-50 small">.bg-gradient-warning</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-danger text-white">
                                <div class="card-body">
                                    Gradient Danger
                                    <div class="text-white-50 small">.bg-gradient-danger</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="card bg-gradient-secondary text-white">
                                <div class="card-body">
                                    Gradient Secondary
                                    <div class="text-white-50 small">.bg-gradient-secondary</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection