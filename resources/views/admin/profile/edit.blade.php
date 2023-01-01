
@extends('admin.admin_master')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">Admin Dashboard</a>
        {{-- <a class="breadcrumb-item" href="{{ route('Plans.index') }}">Plans</a> --}}
        <span class="breadcrumb-item active">Admin Profile</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title text-white">Admin Profile</h6>
          {{-- <p class="mg-b-20 mg-sm-b-30">{{ $plan }}</p> --}}

          <form action="{{ route('admin.update') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-body pd-20">
            <div class="row">
                  <div class="col-sm-12 col-md-6">
                  <label for="name">Full Name:</label>
                  <input class="form-control" placeholder="You current fullname" id="name" name="name" type="text" value="{{ Auth::User()->name }}" required autofocus autocomplete="name" >
                  <x-input-error class="mt-2 text-danger" :messages="$errors->get('name')" />
                  {{-- <input class="form-control" value=""  type="hidden" name="user_id"> --}}
                  </div><!-- col -->
                  <div class="col-sm-12 col-md-6">
                  <label for="name">Email:</label>
                  <input class="form-control"  placeholder="You current email" id="email" name="email" type="email" value="{{ Auth::User()->email }}" required autocomplete="email">
                  <x-input-error class="mt-2" :messages="$errors->get('email')" />
                  </div><!-- col -->
            </div>


            
                  
           


            </div><!-- modal-body -->
            <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20 btn-md">Update</button>
            {{-- <a type="button" href="{{ route('Plans.index') }}" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</a> --}}
            </div>
      </form>
        </div><!-- card -->

         <div class="card pd-20 pd-sm-40">
          @include('admin.profile.partials.update-password-form')
         </div>




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection
                
             