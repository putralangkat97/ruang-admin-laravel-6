@extends('layouts.master')

@section('title', 'Alerts')
@section('title-2', 'Alerts')
@section('title-3', 'Alerts')

@section('content')
    {{-- Alerts Basic --}}
    <div class="row mb-3">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Alerts Basic</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert—check it out!</div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert—check it out!
                    </div>
                </div>
            </div>
        </div>

        {{-- Alerts with Dismissing --}}
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Alerts with Dismissing</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple primary alert—check it out!
                    </div>
                    <div class="alert alert-secondary alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple secondary alert—check it out!
                    </div>
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple info alert—check it out!
                    </div>
                    <div class="alert alert-light alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple light alert—check it out!
                    </div>
                    <div class="alert alert-dark alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        A simple dark alert—check it out!
                    </div>
                </div>
            </div>
        </div>

        <!-- Alerts with Icon -->
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Alert with icon</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-check"></i><b> Success!</b></h6>
                        A simple success alert—check it out!
                    </div>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-ban"></i><b> Stop!</b></h6>
                        A simple danger alert—check it out!
                    </div>
                    <div class="alert alert-warning alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-exclamation-triangle"></i><b> Warning!</b></h6>
                        A simple warning alert—check it out!
                    </div>
                    <div class="alert alert-info alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h6><i class="fas fa-info"></i><b> Warning!</b></h6>
                        A simple info alert—check it out!
                    </div>
                </div>
            </div>

            {{-- Additional Content --}}
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Additional Content</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-success" role="alert">
                        <h4 class="alert-heading">Well done!</h4>
                        <p>
                            Aww yeah, you successfully read this important alert message. This example
                            text is going to run a bit longer so that you can see how spacing within an
                            alert works with this kind of content.
                        </p>
                        <hr>
                        <p class="mb-0">
                            Whenever you need to, be sure to use margin utilities to keep things nice
                            and tidy.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Alert with link</h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-primary" role="alert">
                        A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-secondary" role="alert">
                        A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-success" role="alert">
                        A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-danger" role="alert">
                        A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-warning" role="alert">
                        A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                        you like.
                    </div>
                    <div class="alert alert-info" role="alert">
                        A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                        like.
                    </div>
                    <div class="alert alert-light" role="alert">
                        A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                        like.
                    </div>
                    <div class="alert alert-dark" role="alert">
                        A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                        like.
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection