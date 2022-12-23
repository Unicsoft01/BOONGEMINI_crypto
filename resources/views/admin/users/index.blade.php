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
        <a class="breadcrumb-item" href="/">Admin Dashboard</a>
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">Registered Users</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Clients Table</h6>
          {{-- <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> --}}

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30p">Full name</th>
                  <th class="wd-30p">Email</th>
                  <th class="wd-25p">Phone</th>
                  <th class="wd-5p">Status</th>
                  <th class="wd-5p"">Reg. Date</th>
                  <th class="wd-5p"></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                  <tr>
                        <td>{{ ucfirst($user->name )}}</td>
                        <td>{{ ucfirst($user->email) }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ ucfirst($user->status) }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                              @if ($user->status == "active")
                              <a href="{{ route('User.block', $user->id )}}" class="btn btn-danger rounded-20 btn-sm btn-small btn-w-md">Block</a>
                              @else
                              <a href="{{ route('User.activate', $user->id )}}" class="btn btn-success rounded-20 btn-sm btn-small btn-w-md">Unblock</a>
                              @endif
                        </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection