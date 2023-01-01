@php
        $settings = App\Models\Settings::find(1);
      //   $blocked = App\Models\User::whereStatus('blocked')->get();
        // $blockedusers = App\Models\User::whereStatus(1)->count();
        // $activeusers = App\Models\User::whereStatus(0)->count();
        // $totalticket = App\Models\Ticket::count();
        // $openticket = App\Models\Ticket::whereStatus(0)->count();
        // $closedticket = App\Models\Ticket::whereStatus(1)->count();        
        // $totalreview = App\Models\Review::count();
        // $pubreview = App\Models\Review::whereStatus(1)->count();
        // $unpubreview = App\Models\Review::whereStatus(0)->count();  

        // $pending_card = App\Models\Sellcard::whereStatus(0)->latest()->get();
        // $publised_review = App\Models\Review::whereStatus(1)->latest()->get();
        // $unpublished_review = App\Models\Review::whereStatus(0)->latest()->get();

@endphp
{{-- {{ $deposits }} --}}
@extends('admin.admin_master')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a>
        <a class="breadcrumb-item" href="/Settings/logo">Settings</a>
        <span class="breadcrumb-item active">Deposits</span>
      </nav>

      <div class="sl-pagebody">
            <p>for responsiveness Please use a transparent logo of 300X79 pixel</p>


        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0">Header logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('heder.store') }}" enctype="multipart/form-data" method="post">
                              @csrf
                              <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFileLang" name="header_logo" lang="en" required="">
                                    <label class="custom-file-label" for="customFileLang">Choose Media</label>
                                </div>
                            </div>              
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">Change Header Logo </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                            {{-- <img class="img-fluid" src="https://theunlimited.unicsofttech.xyz/oldasset/images/logo-dark.png"> --}}
                            <img width="300" height="79" src="{{ url('/') }}/assets/img/{{ $settings->header_logo }}" class="img-fluid attachment-full size-full wp-image-40" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8   mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-white">Footer Logo</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('footerlogo.store') }}" enctype="multipart/form-data" method="post">
                        @csrf
                        <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-inpdut" id="customFileLang" name="footer_logo" required="">
                                    {{-- <label class="custom-file-label" for="customFileLang">Choose Media</label> --}}
                                </div>
                            </div>              
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">Change footer Logo</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                              <img width="300" height="79" src="{{ url('/') }}/assets/img/{{ $settings->footer_logo }}" class="img-fluid attachment-full size-full wp-image-40" alt="footer image" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title text-white">Favicon</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('favicon.store') }}" enctype="multipart/form-data" method="post">
                              @csrf
                                                <div class="form-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-isnput" id="customFileLsangw" name="favicon" lang="en" required="">
                                    {{-- <label class="custom-file-label" for="customFileLang">Choose Media</label> --}}
                                </div>
                            </div>              
                            <div class="text-right">
                                <button type="submit" class="btn btn-success btn-sm">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="card-img-actions d-inline-block mb-3">
                              <img width="300" height="79" src="{{ url('/') }}/assets/img/{{ $settings->favicon }}" class="img-fluid attachment-full size-full wp-image-40" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </div>




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection