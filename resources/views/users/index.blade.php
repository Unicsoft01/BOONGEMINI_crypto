@php
  $tickets = App\Models\Tickets::whereUser_id(Auth::User()->id)->latest()->limit(4)->get();
  $deposits = App\Models\Deposits::whereUser_id(Auth::User()->id)->get();
  $invested = App\Models\Deposits::whereUser_id(Auth::User()->id)->whereStatus("verified")->get();
  $total_earning = App\Models\Roi::whereUser_id(Auth::User()->id)->where('status','!=',"completed")->get();

@endphp
@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">Dashboard</span>
      </nav>

      <div class="sl-pagebody">


        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Refererred Users</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2"><canvas width="59" height="50" style="display: inline-block; width: 59px; height: 50px; vertical-align: top;"></canvas></span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">0</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Active Users</span>
                  <h6 class="tx-white mg-b-0">0</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Total Earning</span>
                  <h6 class="tx-white mg-b-0">$0</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Investments</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2"><canvas width="59" height="50" style="display: inline-block; width: 59px; height: 50px; vertical-align: top;"></canvas></span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">
                  @if (count($deposits)>0)
                  ${{ number_format($invested->sum('amount')) }}
                  @else
                  $0
                  @endif
                </h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Tota Earnings</span>
                  <h6 class="tx-white mg-b-0">$0</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Widrawable</span>
                  <h6 class="tx-white mg-b-0">$0</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Earnings</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2"><canvas width="59" height="50" style="display: inline-block; width: 59px; height: 50px; vertical-align: top;"></canvas></span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">@if (count($total_earning)>0)
                  ${{ number_format($total_earning->sum('payout')) }}
                  @else
                  $0
                  @endif</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">on Ref.</span>
                  <h6 class="tx-white mg-b-0">$0</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Ret. on Investment</span>
                  <h6 class="tx-white mg-b-0">@if (count($total_earning)>0)
                    ${{ number_format($total_earning->sum('payout')) }}
                    @else
                    $0
                    @endif</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 text-white">Pending transactions</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2"><canvas width="59" height="50" style="display: inline-block; width: 59px; height: 50px; vertical-align: top;"></canvas></span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($deposits)-count($invested) }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">pending Widtraw</span>
                  <h6 class="tx-white mg-b-0">0</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Pending Deposits</span>
                  <h6 class="tx-white mg-b-0">{{ count($deposits)-count($invested) }}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div>
        <div class="sl-page-title">
        <div class="row row-sm mg-t-20">
          <div class="col-xl-8">

            <div class="card pd-20 pd-sm-25 mg-t-20">
                @if (count($deposits)-count($invested)>0)
                <h6 class="card-body-title tx-13  text-white">My Pending Transactions</h6>
              {{-- <p class="mg-b-20 mg-sm-b-30"></p> --}}
                <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-30p">Tran. Id</th>
                      <th class="wd-30p">Plan</th>
                      <th class="wd-25p">Amount</th>
                      <th class="wd-5p">Modified</th>
                      <th class="wd-5p"">Type</th>
                      {{-- <th class="wd-5p"> </th> --}}
                    </tr>
                  </thead>
                  <tbody>
    
                      @foreach ($deposits as $deposit)
                      <tr>
                        @if ($deposit->status == "pending")
                          
                        @php
                        $plan = App\Models\Plans::whereId($deposit->plan_id)->get();
                        @endphp
                          <td>{{ ucfirst($deposit->trans_id )}} &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus d-inline-block d-md-none text-success"></i></td>
                          <td>{{ $plan[0]->name  }}</td>
                          <td>${{ number_format($deposit->amount) }}</td>
  
                          <td>{{ ucfirst($deposit->updated_at) }}</td>
                          <td class="text-success">{{ "Deposit" }}</td>
                        @endif
                      </tr>
                      @endforeach
                  </tbody>
                </table>
              </div><!-- table-wrapper -->
              @else
                <h4 class="text-center">
                  All pending transactions will appear here
                </h4>
                @endif
            </div><!-- card -->

          </div><!-- col-8 -->
          <div class="col-xl-4 mg-t-20 mg-xl-t-0">

            <div class="card pd-20 pd-sm-25">
              <h6 class="card-body-title  text-white">All referred Users will appear here</h6>
              <p class="mg-b-20 mg-sm-b-30"></p>
              <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->

            <div class="card widget-messages mg-t-20">
              <div class="card-header  text-white">
                <small>Recent Support tickets</small>
                {{-- <a href=""><i class="icon ion-more"></i></a> --}}
                <button class="btn btn-sm btn-small btn--size-l-slim btn-primary" data-toggle="modal" data-target="#modal_support_ticket">Open New Ticket</button>
              </div><!-- card-header -->
              <div class="list-group list-group-flush">
                @if (count($tickets) > 0)
                  @foreach ($tickets as $ticket)
                  <a href="" class="list-group-item list-group-item-action media">
                    <small style="background: rgb(90, 90, 90);" class="text-white p-1">#{{ $ticket->ticket_id}}</small>
                   <div class="media-body">
                      <div class="msg-top">
                        <span title="{{ $ticket->subject }}">{{ ucfirst(Str::limit($ticket->subject, 100)) }}</span>
                        @if ($ticket->status == "open")
                        <span class="text-white" style="background: lightskyblue; padding: 1px 2px">Open</span>
                        @else
                        <span class="text-white" style="background: rgb(253, 194, 194); padding: 1px 2px">Closed</span>
                        @endif
                      </div>
                      <p class="msg-summary"><small>last updated {!! date('D, d-M-y h:i', strtotime($ticket->updated_at)) !!}</small></p>
                    </div><!-- media-body -->
                  </a><!-- list-group-item -->
                    
                  @endforeach
                @else
                <span class="text-center">
                  All your Queries will appear here
                </span>
                @endif
                
              </div><!-- list-group -->
              <div class="card-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-3"></i> Load more messages</a>
              </div><!-- card-footer -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection