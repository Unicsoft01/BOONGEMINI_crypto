@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">BoonGemini</a>
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">My Profile</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Profile</h5>
          {{-- <p>DataTables is a plug-in for the jQuery Javascript library.</p> --}}
        </div><!-- sl-page-title -->

        <div class="col-12 col-md-8 mx-auto  mg-t-30 mg-md-t-0">
            <div class="card bd-0">
              <div class="card-header card-header-default bg-info justify-content-between">
                <h6 class="mg-b-0 tx-14 tx-white tx-normal">{{ __('Profile Information') }}</h6>
               
              </div><!-- card-header -->
              <div class="card-body bg-gray-200">
                <p class="mg-b-0">{{ __("Update your account's profile information and email address.") }}.</p>
              </div><!-- card-body -->

              <div class="card pd-20 pd-sm-40">

                <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                    @csrf
                </form>
            
                <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
                    @csrf
                    @method('patch')
                <div class="row">
                    <div class="col-12 col-md-6">
                      <input class="form-control" placeholder="You current fullname" id="name" name="name" type="text" value="{{ Auth::User()->name }}" required autofocus autocomplete="name" >
                    <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />
                    </div><!-- col -->
                    <div class="col-12 col-md-6 mg-t-10">
                      <input class="form-control" placeholder="You current email" id="email" name="email" type="email" value="{{ Auth::User()->email }}" required autocomplete="email">
                    <x-input-error class="mt-2" :messages="$errors->get('email')" />
                    </div><!-- col -->
                    <input type="submit" class="btn btn-primary btn-md mg-t-20" value="{{ __('Save') }}">
                 
                </div><!-- row -->
                </form>
    
              </div>



      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection

