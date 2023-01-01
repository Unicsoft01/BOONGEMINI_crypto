
@extends('admin.admin_master')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">Admin Dashboard</a>
        <a class="breadcrumb-item" href="{{ route('Plans.index') }}">Plans</a>
        <span class="breadcrumb-item active">{{ $plan->name }} Plan</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Table of available plans</h6>
          {{-- <p class="mg-b-20 mg-sm-b-30">{{ $plan }}</p> --}}

          <form action="{{ route('Plans.update', $plan->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="modal-body pd-20">
            <div class="row">
                  <div class="col-sm-12 col-md-6">
                  <label for="name">Minimum Deposit:</label>
                  <input class="form-control" value="{{ $plan->min }}" name="min" type="text">
                  {{-- <input class="form-control" value="{{ Auth::User()->id }}"  type="hidden" name="user_id"> --}}
                  </div><!-- col -->
                  <div class="col-sm-12 col-md-6">
                  <label for="name">Maximum Deposit:</label>
                  <input class="form-control" value="{{ $plan->max }}" name="max" type="text">
                  </div><!-- col -->
            </div>
            <div class="row">
                  <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                  <label for="name" class="mg-t-10 mg-lg-t-0">Plam name:</label>
                  <input class="form-control" value="{{ $plan->name }}" placeholder="Name of Plan" type="text" name="name" required>
                  </div><!-- col -->
            </div>

            <div class="row">
                  <div class="col-sm-12 col-md-4 ">
                        <label for="name">Commision on Referrals:</label>
                        <input class="form-control" value="{{ $plan->perperref }}" type="text" name="perperref" required>
                  </div><!-- col -->
                  <div class="col-sm-12 col-md-4">
                        <label for="name">Return on investment</label>
                        <input class="form-control" value="{{ $plan->roi }}" type="text" name="roi" required>
                  </div><!-- col -->
                  <div class="col-sm-12 col-md-4">
                        <label for="name">Maturity [days]:</label>
                        <input class="form-control" value="{{ $plan->grow }}" type="text" name="grow" required>
                  </div><!-- col -->
            </div>
                  
           


            </div><!-- modal-body -->
            <div class="modal-footer">
            <button type="submit" class="btn btn-info pd-x-20">Update Plan</button>
            <a type="button" href="{{ route('Plans.index') }}" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</a>
            </div>
      </form>
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection