<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- head --}}
        @include('components.head')
    </head>

    <body id="page-top">
        <div id="wrapper">

            {{-- sidebar --}}
            @include('components.sidebar')
            
            <div id="content-wrapper" class="d-flex flex-column">
                <div id="content">
                    {{-- topbar --}}
                    @include('components.topbar')

                    {{-- container fluid --}}
                    <div class="container-fluid" id="container-wrapper">
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-gray-800">@yield('title-2')</h1>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">@yield('title-3')</li>
                            </ol>
                        </div>

                        {{-- Main content --}}
                        @yield('content')

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p>Do you like this template ? you can download from <a href="https://github.com/indrijunanda/RuangAdmin"
                                    class="btn btn-primary btn-sm" target="_blank"><i class="fab fa-fw fa-github"></i>&nbsp;GitHub</a></p>
                            </div>
                        </div>

                        {{-- Modal Logout --}}
                        @include('components.modal-logout')
                    </div>
                </div>

                {{-- Footer --}}
                @include('components.footer')
            </div>
        </div>

        {{-- Scroll to top --}}
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        @include('components.scripts') 
    </body>
</html>