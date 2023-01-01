@php
      //   $reviews = App\Models\Review::latest()->get();
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
        <a class="breadcrumb-item" href="/admin/dashboard">Home</a>
        {{-- <a class="breadcrumb-item" href="index.html">Tables</a> --}}
        <span class="breadcrumb-item active">Customers Review</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title"></div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Reviews</h6>
          <p class="mg-b-20 mg-sm-b-30">Searching, ordering and paging are included to making data retrival easy. use the search bar to get anythin fast</p>

          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p text-center">Clients</th>
                  <th class="wd-10p text-center">Role</th>
                  <th class="wd-20p text-center">Review</th>
                  <th class="wd-15p text-center">Status date</th>
                  <th class="wd-15p text-center">Modified</th>
                  <th class="wd-10p text-center">#</th>
                </tr>
              </thead>
              <tbody>
                  @foreach (App\Models\Review::latest()->get() as $review)
                <tr>
                  <td>{{ $review->name }}</td>
                  <td>{{ $review->occupation }}</td>
                  <td>{{ Str::limit($review->review, 30) }}</td>
                        @if ($review->status == '0')
                        <td class="text-success text-center" title="Everyone can see it posted">Public</td>
                        @else
                        <td class="text-danger text-center" title="Only you can see it">Hidden</td>
                        @endif
                  <td>{!! date('D, d-M-y', strtotime($review->updated_at)) !!}</td>
                  <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                              @if ($review->status == '0')
                              <a href="{{ route('Review.show', $review->id) }}" type="button" class="btn btn-danger"><i class="fa fa-close"></i></a>
                              @else
                              <a href="{{ route('Review.show', $review->id) }}" type="button" class="btn btn-success"><i class="fa fa-check"></i></a>
                              @endif
                              
                              <a data-toggle="modal" data-target="#modal_edit_review{{$review->id}}" type="button"  href="#" class="btn btn-primary"><i class="fa fa-book""></i></a>
                              @include('edit_review')

                              <form method="POST" action="{{ route('Review.destroy', $review->id) }}">
                                    @csrf @method('DELETE')
                              <button type="submit" class="btn btn-danger pd-x-25m"><i class="fa fa-trash"></i></button></form>
                            </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->

$review->review


      </div><!-- sl-pagebody -->
      @include('footer')
     
    </div><!-- sl-mainpanel -->
@endsection