@php
  $deposits = App\Models\Deposits::whereUser_id(Auth::User()->id)->get();
@endphp
@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        <a class="breadcrumb-item" href="/Deposit/index">Deposit</a>
        <span class="breadcrumb-item active">History</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
            @if (count($deposits)>0)
            <h6 class="card-body-title">your Payments historyes</h6>
          {{-- <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> --}}

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30p">Tran. ID</th>
                  <th class="wd-30p">Plan</th>
                  <th class="wd-30p">Amount ($)</th>
                  <th class="wd-25p">Modified</th>
                  <th class="wd-5p">Status</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($deposits as $deposit)
                  <tr>
                        <td>{{ ucfirst($deposit->trans_id) }} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle d-inline-block d-md-none text-success"></i></td>
                        <td>{{ App\Models\Plans::find($deposit->plan_id)->name }}</td>
                        <td>{{ number_format($deposit->amount) }}</td>
                        <td>{{ $deposit->created_at }}</td>
                        @if ( $deposit->evidence == "waiting")
                        <td class="text-danger">
                              <a href="/Comfirmation/{{ $deposit->trans_id }}" class="btn btn-indigo btn-small btn-sm">Send Evidence</a>
                        </td>
                        @else
                              @if ( $deposit->status == "pending")
                              <td class="text-danger">
                                    pending
                              </td>
                              @else
                              <td class="text-success">
                                    Verified
                              </td>
                        @endif
                        @endif

     
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
          @else
          <h4 class="text-center">
            All Deposit transactions will appear here!
          </h4>
          @endif
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection