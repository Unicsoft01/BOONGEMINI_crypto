<div id="modal_new_ticket" class="modal fade" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Review</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
            </button>
            </div>
            

                  <form action="{{ route('Review.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Username:</label>
                              <input class="form-control" value="{{ Auth::User()->name }}"  type="text" name="name">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Review:</label>
                              <input class="form-control" autofocus placeholder="Review message" type="text" name="review" required>
                              </div><!-- col -->
                        </div>
      
                        <div class="row">
                              <div class="col-sm-12">
                                    <label for="occupation">occupation:</label>
                                    <select class="form-control" name="occupation" required="">
                                          <option value="customer" selected>Customer</option>
                                          <option value="marketer">Marketer</option>
                                          <option value="investor">investor</option>
                                          <option value="anonymous">Anonymous</option>
                                    </select>
                              </div><!-- col -->
                              
                        </div>     
                        <div class="row text-dark">
                              <div class="col-sm-12">
                                    <div class="mt-2">
                                          Customer Avatar:
                                    </div>
                                    <label for="avatar"></label>
                                   <input type="file" name="avatar">
                              </div><!-- col -->
                              
                        </div>
                              
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit Review</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                        </div>
                  </form>

            </div>
      </div><!-- modal-dialog -->
</div>