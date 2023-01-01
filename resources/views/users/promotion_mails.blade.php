@php
  $tickets = App\Models\Tickets::whereUser_id(Auth::User()->id)->latest()->limit(4)->get();
@endphp
@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        {{-- <a class="breadcrumb-item" href="/">Tables</a> --}}
        <span class="breadcrumb-item active">Promotional mails</span>
      </nav>

      <div class="sl-pagebody">
            <div class="sl-page-title">

                  <div class="card pd-20 pd-sm-40 text-center">
                  No Promotional email at the moment, Please check back later
                  </div><!-- card -->
            </div><!-- sl-pagebody -->
      </div><!-- sl-pagebody -->
      @include('footer')
</div><!-- sl-mainpanel -->
@endsection