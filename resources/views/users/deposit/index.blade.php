@php
  $plans = App\Models\Plans::latest()->get();
@endphp
@extends('users.user_template')
@section('main_contents')
<div class="sl-mainpanel">
      <meta name="csrf-token" content="{{ csrf_token() }}" />

      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="/">BoonGemini</a>
        <span class="breadcrumb-item active">Deposits</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title">
        <div class="row row-sm mg-t-20">
          <div class="col-sm-12">
            <div class="card pd-20 pd-sm-25 mg-t-20">
              <h6 class="card-body-title tx-13">Current Balance $0</h6>
              {{-- <p class="mg-b-20 mg-sm-b-30"></p> --}}
              <form action="{{ route('Deposit.store') }}" method="post">
                  @csrf
                  <div class="modal-body pd-20">
                        <div class="row">
                              <div class="col-sm-12">
                                    <label for="plan">Select a plan:</label>
                                    <select id="plan" class="form-control" name="plan" required="">
                                          <option value="" selected>- - -select a plan- - -</option>
                                          @foreach ($plans as $plan)
                                          <option value="{{ $plan->id }}"
                                                data-price="{{ number_format(intval($plan->min)) }}"
                                                data-max="{{ $plan->max }}"
                                                data-roi="{{ $plan->roi }}"
                                                data-perref="{{ $plan->perperref }}"
                                                data-days="{{ $plan->grow }}"
                                                >{{ ucfirst($plan->name) }}</option>
                                          @endforeach
                                    </select>
                              </div><!-- col -->
                              
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">minimum Deposit:</label>
                              <input id="min" class="form-control" value="0" readonly type="text" name="min">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Max Deposit:</label>
                              <input id="max" class="form-control"  value="0" readonly type="text" name="max">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">ROI %:</label>
                              <input id="roi" class="form-control"  value="0" readonly type="text" name="roi">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Percent/Referrals:</label>
                              <input id="perperref" class="form-control"  value="0" readonly type="text" name="perperref">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">due in [Days]:</label>
                              <input id="grow" class="form-control"  value="0" readonly type="text" name="grow">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Deposit Amount [$]:</label>
                              <input placeholder="{{ intval($plan->max) }}" class="form-control" placeholder="your desired Deposit amount" type="number" required name="amount"> 
                              </div>
                             
                        </div>

                 
                        
                  </div><!-- modal-body -->
                  <div class="modal-footer">
                  <button type="submit" class="btn btn-info pd-x-20">Proceed</button>
                  <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                  </div>
            </form>

            </div><!-- card -->
          </div><!-- col-12 -->
         
        </div><!-- row -->
      </div><!-- sl-pagebody -->
      @include('footer')
    </div><!-- sl-mainpanel -->
    <script>
      let sel = document.getElementById('plan');
sel.addEventListener('click', function (e) {
    let mini = e.srcElement.selectedOptions["0"].dataset.price;
    let maxi = e.srcElement.selectedOptions["0"].dataset.max;
    let roi = e.srcElement.selectedOptions["0"].dataset.roi;
    let growt = e.srcElement.selectedOptions["0"].dataset.days;
    let perref = e.srcElement.selectedOptions["0"].dataset.perref;
    document.getElementById('min').value = mini;
    document.getElementById('max').value = maxi;
    document.getElementById('roi').value = roi;
    document.getElementById('grow').value = growt;
    document.getElementById('perperref').value = perref;
});
    </script>
@endsection