@php
    $users = App\Models\User::get();
    $blocked = App\Models\User::whereStatus('blocked')->get();

    $tickets = App\Models\Tickets::latest()->limit(4)->get();
    $deposits = App\Models\Deposits::get();
    $totalticket = App\Models\Tickets::count();
    $openticket = App\Models\Tickets::whereStatus("open")->count();
    $invested = App\Models\Deposits::whereStatus("verified")->get();

        // $activeusers = App\Models\User::whereStatus(0)->count();
        // $openticket = App\Models\Ticket::whereStatus(0)->count();
        // $closedticket = App\Models\Ticket::whereStatus(1)->count();        
        // $totalreview = App\Models\Review::count();
        // $pubreview = App\Models\Review::whereStatus(1)->count();
        // $unpubreview = App\Models\Review::whereStatus(0)->count();  

        // $pending_card = App\Models\Sellcard::whereStatus(0)->latest()->get();
        // $publised_review = App\Models\Review::whereStatus(1)->latest()->get();
        // $unpublished_review = App\Models\Review::whereStatus(0)->latest()->get();

@endphp

@extends('admin.admin_master')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        {{-- <a class="breadcrumb-item" href="index.html">Starlight</a> --}}
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">Admin Dashboard</span>
      </nav>

      <div class="sl-pagebody">
        {{-- tabs --}}
        <div class="row row-sm">
          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20
            ">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Users</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ count($users) }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Active Users</span>
                  <h6 class="tx-white mg-b-0">{{ count($users)-count($blocked) }}</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Blocked Users</span>
                  <h6 class="tx-white mg-b-0">{{ count($blocked) }}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 bg-info">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Support tickets</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                {{-- <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span> --}}
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">{{ $totalticket }}</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Closed Tickets</span>
                  <h6 class="tx-white mg-b-0">{{ $totalticket - $openticket }}</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Opened tickets</span>
                  <h6 class="tx-white mg-b-0">{{ $openticket }}</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
         <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">Total Investments</h6>
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
        </div><!-- row -->




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="row row-sm mg-t-20">
          <div class="col-xl-8">

            <div class="card pd-20 pd-sm-25 mg-t-20">
              @if (count($deposits)-count($invested)>0)
              <h6 class="card-body-title tx-13  text-white">Pending Deposit/Withdrawal Transactions</h6>
              <!-- <p class="mg-b-20 mg-sm-b-30"></p> -->
              <div class="table-wrapper">
                <table id="datatable1" class="table display responsive nowrap">
                  <thead>
                    <tr>
                      <th class="wd-30p">Tran. Id</th>
                      <th class="wd-30p">Plan</th>
                      <th class="wd-25p">Deposit</th>
                      <th class="wd-5p">Modified</th>
                      <th class="wd-5p">Type</th>
                      <th class="wd-5p"> </th>
                    </tr>
                  </thead>
                  <tbody>
    
                      @foreach ($deposits as $deposit)
                      <tr>
                      @if ($deposit->status == "pending")

                      @php
                      $plan = App\Models\Plans::whereId($deposit->plan_id)->get();
                      @endphp
                                  <td>{{ ucfirst($deposit->trans_id )}}</td>
                            <td>{{ $plan[0]->name  }}</td>
                            <td>${{ number_format($deposit->amount) }}</td>
    
                            <td>{{ ucfirst($deposit->updated_at) }}</td>
                            <td class="text-success">{{ "Deposit" }}</td>
                            <td>
                              <form action="{{ route('Deposit.update', $deposit->id) }}" method="post">
                                @csrf
                                @method('PATCH')
                                <button type="submit" class="btn btn-indigo rounded-20 btn-sm btn-small">Comfirm Pmt</button>
                              </form>
                            </td>
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
                {{-- <button class="btn btn-sm btn-small btn--size-l-slim btn-primary" data-toggle="modal" data-target="#modal_support_ticket">Open New Ticket</button> --}}
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


        {{-- <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Responsive DataTable</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-20p">Position</th>
                  <th class="wd-15p">Start date</th>
                  <th class="wd-10p">Salary</th>
                  <th class="wd-25p">E-mail</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Tiger</td>
                  <td>Nixon</td>
                  <td>System Architect</td>
                  <td>2011/04/25</td>
                  <td>$320,800</td>
                  <td>t.nixon@datatables.net</td>
                </tr>
                <tr>
                  <td>Jonas</td>
                  <td>Alexander</td>
                  <td>Developer</td>
                  <td>2010/07/14</td>
                  <td>$86,500</td>
                  <td>j.alexander@datatables.net</td>
                </tr>
                <tr>
                  <td>Shad</td>
                  <td>Decker</td>
                  <td>Regional Director</td>
                  <td>2008/11/13</td>
                  <td>$183,000</td>
                  <td>s.decker@datatables.net</td>
                </tr>
                <tr>
                  <td>Michael</td>
                  <td>Bruce</td>
                  <td>Javascript Developer</td>
                  <td>2011/06/27</td>
                  <td>$183,000</td>
                  <td>m.bruce@datatables.net</td>
                </tr>
                <tr>
                  <td>Donna</td>
                  <td>Snider</td>
                  <td>Customer Support</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                  <td>d.snider@datatables.net</td>
                </tr>
              </tbody>
            </table>
          </div><!-- table-wrapper 
        </div><!-- card --> --}}




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection