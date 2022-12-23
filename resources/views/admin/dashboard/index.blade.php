@php
        $users = App\Models\User::get();
        $blocked = App\Models\User::whereStatus('blocked')->get();
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
            <div class="card pd-20 bg-primary">
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
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$4,625</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Opened Tickets</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Closed tickets</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-purple">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Month's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$11,908</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 bg-sl-primary">
              <div class="d-flex justify-content-between align-items-center mg-b-10">
                <h6 class="tx-11 tx-uppercase mg-b-0 tx-spacing-1 tx-white">This Year's Sales</h6>
                <a href="" class="tx-white-8 hover-white"><i class="icon ion-android-more-horizontal"></i></a>
              </div><!-- card-header -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="sparkline2">5,3,9,6,5,9,7,3,5,2</span>
                <h3 class="mg-b-0 tx-white tx-lato tx-bold">$91,239</h3>
              </div><!-- card-body -->
              <div class="d-flex align-items-center justify-content-between mg-t-15 bd-t bd-white-2 pd-t-10">
                <div>
                  <span class="tx-11 tx-white-6">Gross Sales</span>
                  <h6 class="tx-white mg-b-0">$2,210</h6>
                </div>
                <div>
                  <span class="tx-11 tx-white-6">Tax Return</span>
                  <h6 class="tx-white mg-b-0">$320</h6>
                </div>
              </div><!-- -->
            </div><!-- card -->
          </div><!-- col-3 -->
        </div><!-- row -->




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
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
          </div><!-- table-wrapper -->
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection