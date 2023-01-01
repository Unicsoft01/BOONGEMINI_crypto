<div id="modal_contact" class="modal fade" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Contact information - {{ $settings->email }}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
            </button>
            </div>
            

                  <form action="{{ route('Contact.update') }}" method="post">
                        @csrf
                        @method('GET')
                        <div class="modal-body pd-20">
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Address:</label>
                              <input class="form-control" value="{{ $settings->address }}"  type="text" name="address">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Phone:</label>
                              <input class="form-control" placeholder="Phone" value="{{ $settings->phone }}" type="text" name="phone" required>
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Email:</label>
                              <input class="form-control" placeholder="email" value="{{ $settings->email }}" type="text" name="email" required>
                              </div><!-- col -->
                        </div>
                              
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Save Changes</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                        </div>
                  </form>

            </div>
      </div><!-- modal-dialog -->
</div>