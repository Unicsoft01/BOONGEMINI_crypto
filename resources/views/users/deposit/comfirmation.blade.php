@php
//   $deposit = App\Models\Deposits::whereTrans_id($id)->get();
//   echo $deposit->plan_id;
  $plan = $plan[0];
  $deposit = $deposit[0];
@endphp

@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        <span class="breadcrumb-item">Order</span>
        <span class="breadcrumb-item active">Comfirmation</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title">
        <div class="row row-sm mg-t-20">
              {{-- <p class="mg-b-20 mg-sm-b-30"></p> --}}
              <div class="col-12 mg-t-10 mg-md-t-0">
                  <div class="card bd-0">
                    <div class="card-header card-header-default justify-content-between">
                      <h6 class="mg-b-0 tx-14 tx-white tx-normal">Order Comfirmation for {{ $plan->name }} plan</h6>
                    </div><!-- card-header -->
                    <div class="card-body bg-gray-200">
                        <div class="table-wrapper">
                              <table id="" class="table display responsive nowrap">
                                <thead>
                                  <tr>
                                    <th class="wd-40p text-center">Key</th>
                                    <th class="wd-60p text-center">Values</th>
                                  </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      <td>{{ "Plan" }}</td>
                                      <td>{{ ucfirst($plan->name) }}</td>
                                    </tr>
                                    <tr>
                                      <td>{{ "Profit" }}</td>
                                      <td>{{ ucfirst($plan->roi) }}% for {{ ucfirst($plan->grow) }} days</td>
                                    </tr>
                                    <tr>
                                      <td>{{ "Principal Return" }}</td>
                                      <td> Yes</td>
                                    </tr>
                                    <tr>
                                      <td>{{ "Principal withdrawal" }}</td>
                                      <td> Not available</td>
                                    </tr>
                                    <tr>
                                      <td>{{ "Com. on Ref." }}</td>
                                      <td>  {{ ucfirst($plan->perperref) }}%</td>
                                    </tr>
                                </tbody>
                              </table>
                            </div><!-- table-wrapper -->
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div>
                <div class="col-12 mg-t-10 mg-md-t-0">
                    <div class="card bd-0">
                      <div class="card-header card-header-default justify-content-between">
                        <h6 class="mg-b-0 tx-14 tx-white tx-normal">Deposit Comfirmation</h6>
                      </div><!-- card-header -->
                      <div class="card-body bg-gray-200">
                        <p class="text-dark">please choose your prefered method and send us evidence once done</p>
                        <div class="table-wrapper">
                                <table id="datatable1" class="table display responsive nowrap">
                                  <thead>
                                    <tr>
                                      <th class="wd-30p text-center">Key</th>
                                      <th class="wd-30p text-center">Values</th>
                                      <th class="wd-40p text-center">address</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                        <td>{{ "Deposit" }}</td>
                                        <td>${{ number_format($deposit->amount) }}</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>{{ "pay Via Eth" }}</td>
                                        <td>Send Eth to the address here</td>
                                        <td><button class="btn btn-indigo btn-sm">eth.wajiuemepekdleiemedue</button></td>
                                      </tr>
                                      <tr>
                                        <td>{{ "Pay via BTC" }}</td>
                                        <td> Send btc to the address here</td>
                                        <td><button class="btn btn-indigo btn-sm">btc.ahjdmejuejdkdideieujejehe</button></td>
                                    </tr>
                                      <tr>
                                        <td>{{ "Trans. ID" }}</td>
                                        <td> {{ $deposit->trans_id }}</td>
                                        <td></td>
                                      </tr>
                                      <tr>
                                        <td>{{ "Status" }}</td>
                                        <td>  {{ ucfirst($deposit->status) }}</td>
                                    </tr>
                                  </tbody>
                                </table>
                                <form action="{{ route('Deposit.completeTrans', $deposit->trans_id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                  <div class="row">
                                    <div class="col-sm-12">
                                    <label for="name" class="text-dark">Evidence of payment[$]: <small class="text-danger">*</small></label>
                                    <input class="form-control" type="file" required name="evidence">
                                    </div>
                                  
                              </div>
                                <button type="submit" class="btn btn-success btn-md">Submit evidence</button>
                              </form>
                              </div><!-- table-wrapper -->
                      </div><!-- card-body -->
                    </div><!-- card -->
                  </div>


         
        </div><!-- row -->
      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
@endsection