@php
        $plans = App\Models\Plans::get();
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

@extends('admin.admin_master')
@section('main_contents')
<div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">Admin Dashboard</a>
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">Plans</span>
      </nav>

      <div class="sl-pagebody">




        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Table of available plans</h6>
          {{-- <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p> --}}

{{-- 
id	
name	
min	
max	
roi	
perperref	
grow	
type	 --}}
          
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-30p">Plan</th>
                  <th class="wd-25p">Min. Dep</th>
                  <th class="wd-25p">Max. Dep</th>
                  <th class="wd-5p" title="Return on Investment">ROI</th>
                  <th class="wd-5p"">% per Ref.</th>
                  <th class="wd-5p">Ready</th>
                  <th class="wd-5p"> </th>
                </tr>
              </thead>
              <tbody>

                  @foreach ($plans as $key => $plan)
                  <tr>

                        <td>{{ ucfirst($plan->name )}}</td>
                        <td>${{ number_format($plan->min) }}</td>
                        <td>${{ $plan->max }}</td>
                        <td>{{ ucfirst($plan->roi) }}%</td>
                        <td>{{ $plan->perperref }}%</td>
                        <td>{{ $plan->grow }} days</td>
                        <td>
                              <a href="{{ route('Plans.edit', $plan->id )}}" class="btn btn-indigo rounded-20 btn-sm btn-small btn-w-md">Edit</a>

                              <form style="display: inline;" method="POST" action="{{ route('Plans.destroy', $plan->id) }}">
                                @csrf 
                                @method('DELETE')
                          <button type="submit" class="btn btn-danger rounded-20 btn-sm btn-small btn-w-mfd">Delete</button></form>
                             
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