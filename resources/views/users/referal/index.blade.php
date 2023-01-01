@php
  $ref_link = App\Models\ReferralLinks::whereUser_id(Auth::User()->id)->limit(1)->get();
@endphp
@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        {{-- <a class="breadcrumb-item" href="/Deposit/index">Deposit</a> --}}
        <span class="breadcrumb-item active">Referrals</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

          <div class="card pd-20 pd-sm-40">
          <b class="">Your link: {{ url('/') }}/Ref/{{ $ref_link[0]->link }}</b>
            <h6 class="card-body-title">referrals and Commission (%)</h6>
          <p class="mg-b-20 mg-sm-b-30 text-center">No referrals at this time</p>
{{-- 
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30p">Tran. ID</th>
                  <th class="wd-30p">Plan</th>
                  <th class="wd-25p">Modified</th>
                  <th class="wd-5p">Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($deposits as $deposit)
                  <tr>
                        <td>{{ ucfirst($deposit->trans_id) }}</td>
                        <td>{{ App\Models\plans::find($deposit->plan_id)->name }}</td>
                        <td>{{ $deposit->created_at }}</td>
                        @if ( $deposit->evidence == "waiting")
                        <td class="text-danger">
                              Waiting for Evidence of Payment
                        </td>
                        @else
                              @if ( $deposit->status == "pending")
                              <td class="text-danger">
                                    pending
                              </td>
                              @else
                              <td class="text-danger">
                                    verified.
                              </td>
                        @endif
                        @endif

     
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper --> --}}
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection