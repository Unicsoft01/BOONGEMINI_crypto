@php
  $withdrawals = App\Models\Withdrawal::whereUser_id(Auth::User()->id)->get();
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

          {{-- <button class="btn btn-indigo btn-sm">Withdraw</button> --}}
          <div class="card pd-20 pd-sm-40">
          @if (count($withdrawals)>0)
          <h6 class="card-body-title">Your Withdrawal Histories</h6>
          <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-35p">Transactions</th>
                  <th class="wd-30p">Amount</th>
                  {{-- <th class="wd-25p">Due Date</th> --}}
                  <th class="wd-5p">Status</th>
                  <th class="wd-10p""></th>
                  {{-- <th class="wd-5p"">status</th> --}}
                  {{-- <th class="wd-5p"> </th> --}}
                </tr>
              </thead>
              <tbody>
{{-- 
user_id
plan_id
              on_ref
              on_roi
              invested
status
remark
created_at --}}
                  @foreach ($withdrawals as $withdraw)
                  @if ($withdraw->on_roi)
                  <tr>
                    <td>Return on Investment &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle d-inline-block d-md-none text-success"></i></td>
                    <td>{{ $withdraw->on_roi }}</td>

                    @if ($withdraw->status == "pending")
                      <td class="text-danger">Not available</td>
                    @else
                    <td class="text-indigo">Available</td>
                    @endif


                    @if ($withdraw->status == "pending")
                    <td>
                      {{-- <form action="{{ route('Deposit.update', $withdraw->id) }}" method="post">
                      @csrf
                      @method('PATCH') --}}
                      <span class="btn btn-secondary disabled rounded-20 btn-sm btn-small">withdraw</span>
                    {{-- </form> --}}
                    </td>
                    @else
                    <td>Comfirmed</td>
                    @endif
                  </tr>
                  @endif
                  @if ($withdraw->invested)
                  <tr>
                    <td>Principal amount &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle d-inline-block d-md-none text-success"></i></td>
                    <td>{{ $withdraw->invested }}</td>

                    @if ($withdraw->status == "pending")
                      <td class="text-danger">Not available</td>
                    @else
                    <td class="text-indigo">Available</td>
                    @endif


                    @if ($withdraw->status == "pending")
                    <td>
                      {{-- <form action="{{ route('Deposit.update', $withdraw->id) }}" method="post">
                      @csrf
                      @method('PATCH') --}}
                      <span class="btn btn-secondary disabled rounded-20 btn-sm btn-small">withdraw</span>
                    {{-- </form> --}}
                    </td>
                    @else
                    <td>Comfirmed</td>
                    @endif
                  </tr>
                  @endif
                  
                  @if ($withdraw->on_ref)
                  <tr>
                    <td>Commission on Ref. &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-plus-circle d-inline-block d-md-none text-success"></i></td>
                    <td>{{ $withdraw->on_ref }}</td>

                    @if ($withdraw->status == "pending")
                      <td class="text-danger">Not available</td>
                    @else
                    <td class="text-indigo">Available</td>
                    @endif


                    @if ($withdraw->status == "pending")
                    <td>
                      {{-- <form action="{{ route('Deposit.update', $withdraw->id) }}" method="post">
                      @csrf
                      @method('PATCH') --}}
                      <span class="btn btn-secondary disabled rounded-20 btn-sm btn-small">withdraw</span>
                    {{-- </form> --}}
                    </td>
                    @else
                    <td>Comfirmed</td>
                    @endif
                  </tr>
                  @endif
                  
                  @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
          @else
            <h4 class="text-center">
              No withdrawals at this time, Make some deposit, start a plan!!
            </h4>
            @endif
        </div><!-- card -->




      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection