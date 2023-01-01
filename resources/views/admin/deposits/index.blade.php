@php
        $deposits = App\Models\Deposits::get();
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
        <a class="breadcrumb-item" href="/">Admin Dashboard</a>
        <a class="breadcrumb-item" href="/Users">Users</a>
        <span class="breadcrumb-item active">Deposits</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          @if (count($deposits)>0)
          <h6 class="card-body-title">Table of available plans</h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30p">Tran. Id</th>
                  <th class="wd-30p">Plan</th>
                  <th class="wd-25p">Deposit</th>
                  <th class="wd-5p">Modified</th>
                  <th class="wd-5p"">Evidence</th>
                  <th class="wd-5p"">status</th>
                  <th class="wd-5p"> </th>
                </tr>
              </thead>
              <tbody>

                  @foreach ($deposits as $deposit)
                  <tr>
                  @php
                  $plan = App\Models\Plans::whereId($deposit->plan_id)->get();
                  @endphp
                              <td>{{ ucfirst($deposit->trans_id )}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle d-inline-block d-md-none text-success"></i></td>
                        <td>{{ $plan[0]->name  }}</td>
                        <td>${{ number_format($deposit->amount) }}</td>

                        <td>{{ ucfirst($deposit->updated_at) }}</td>
                        @if ($deposit->evidence == "waiting")
                          <td class="text-danger">Waiting for evidence of Pmt</td>
                        @else
                        <td>
                          <a href="#" data-toggle="modal" data-target="#modal_img{{$deposit->id}}">
                            <img src="User_deposits/{{ $deposit->evidence }}" width="50" height="30" alt="not found">
                          </a>
                        </td>
                        @endif

                        @if ($deposit->status == "verified")
                        <td class="text-success">{{ $deposit->status }}</td>
                        @else
                        <td>{{ $deposit->status }}</td>
                        @endif

                        @if ($deposit->status == "pending" || $deposit->status == "waiting" )
                        <td>
                          <form action="{{ route('Deposit.update', $deposit->id) }}" method="post">
                          @csrf
                          @method('PATCH')
                          <button type="submit" class="btn btn-indigo rounded-20 btn-sm btn-small">Comfirm Pmt</button>
                        </form>
                        </td>
                        @else
                        <td>Comfirmed</td>
                        @endif
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
          @include('admin.img_modal')
          @else
            <h4 class="text-center">
              All User Deposits will appear here
            </h4>
            @endif
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection