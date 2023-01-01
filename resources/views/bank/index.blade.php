@php
  $bank = App\Models\Bank::whereUser_id(Auth::User()->id)->orderBy('id', 'DESC')->paginate(4);
@endphp

@extends('user_template')

@section('content')
<div class="content-wrapper">
  <div class="container-fuss">
    <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card-body">
          <a data-toggle="modal" data-target="#modal-formx" href="" class="btn btn-sm btn-neutral"><i class="fa fa-plus"></i> {{__('Add account')}}</a>
          <div class="modal fade" id="modal-formx" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-body p-0">
                  <div class="card border-0 mb-0">
                    <div class="card-header">
                      <h3 class="mb-0">{{__('Add Account')}}</h3>
                    </div>
                    <div class="card-body">
                      <form role="form" action="{{route('user.create.bank')}}" method="post"> 
                      @csrf
                        <div class="form-group row">
                          <label class="col-form-label col-lg-2">{{__('Bank')}}</label>
                          <div class="col-lg-10">
                            <input type="text" name="name" class="form-control">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-form-label col-lg-2">{{__('Acct Name')}}</label>
                          <div class="col-lg-10">
                            <input type="text" name="acct_name" class="form-control" required>
                          </div>
                        </div>                                             
                       
                        
                        <div class="form-group row">
                          <label class="col-form-label col-lg-2">{{__('Account No')}}</label>
                          <div class="col-lg-10">
                            <input type="number" name="acct_no" class="form-control" required>
                          </div>
                        </div>
                        <div class="text-right">
                          <button type="submit" class="btn btn-success btn-sm">{{__('Save')}}</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      @foreach($bank as $k=>$val)
        <div class="col-md-4">
            <div class="card">
              <!-- Card body -->
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <!-- Title -->
                    <h5 class="h4 mb-0 text-dark">{{$val->name}}</h5>
                  </div>
                  <div class="col-4 text-right">
                    <a data-toggle="modal" data-target="#modal-form{{$val->id}}" href="#" title="Edit account" class="btn btn-sm btn-neutral"><span class="btn-inner--icon"><i class="fa fa-edit"></i></span></a>
                    <a href="{{url('/')}}/user/bank/delete/{{$val->id}}" title="Delete account" class="btn btn-sm btn-neutral"><span class="btn-inner--icon"><i class="fa fa-trash"></i></span></a>
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <p class="text-sm text-dark mb-0">{{__('Account')}}: {{$val->acct_no}}</p>
                    <p class="text-sm text-dark mb-0">{{__('Account name')}}: {{$val->acct_name}}</p>
                    
                    <p class="text-sm text-dark mb-0">Created: {{date("j M, Y h:i:A", strtotime($val->created_at))}}</p>
                    <p class="text-sm text-dark mb-0">Updated: {{date("j M, Y h:i:A", strtotime($val->updated_at))}}</p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="modal-form{{$val->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-body p-0">
                <div class="card border-0 mb-0">
                  <div class="card-header">
                    <h3 class="mb-0">{{__('Edit Bank')}}</h3>
                  </div>
                  <div class="card-body">
                    <form role="form" action="{{url('user/edit_bank')}}" method="post"> 
                    @csrf
                      <div class="form-group row">
                        <label class="col-form-label col-lg-2">{{__('Bank')}}</label>
                          <div class="col-lg-10">
                            <input type="text" name="name" placeholder="Bank name" class="form-control" value="{{$val['name']}}">
                          </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Acct Name')}}</label>
                            <div class="col-lg-10">
                          <input type="text" name="acct_name" placeholder="Account name" class="form-control" value="{{$val['acct_name']}}">
                        </div>
                      </div> 
                      
                                     
                      <div class="form-group row">
                            <label class="col-form-label col-lg-2">{{__('Account No')}}</label>
                            <div class="col-lg-10">
                          <input type="number" name="acct_no" placeholder="Account number" class="form-control" value="{{$val['acct_no']}}">
                          <input type="hidden" name="id" value="{{$val['id']}}">
                        </div>
                      </div>
                      <div class="text-right">
                        <button type="submit" class="btn btn-success btn-sm">{{__('Update Acount')}}</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-md-12">
      {{ $bank->links() }}
      </div>
    </div>
  </section>
</div>
</div>
@stop