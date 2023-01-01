<div id="modal_edit_review{{$review->id}}" class="modal fade" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-lg" role="document">
                  <div class="modal-content tx-size-sm">
                  <div class="modal-header pd-x-20">
                  <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Review By: {{ $review->name }}</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                  </button>
                  </div>
                  
      
                        <form action="{{ route('Review.update', $review->id) }}" method="post">
                              @csrf
                              @method('PUT')
                              <div class="modal-body pd-20">
                              <div class="row">
                                    <div class="col-sm-12">
                                    <label for="name">Username:</label>
                                    <input class="form-control" value="{{ $review->name }}"  type="text" name="name">
                                    </div>
                                   
                              </div>
                              <div class="row">
                                    <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                                    <label for="name" class="mg-t-10 mg-lg-t-0">Review:</label>
                                    <textarea class="form-control" autofocus name="review" required>{{ $review->review }}</textarea>
                                    </div><!-- col -->
                              </div>
            
                              <div class="row">
                                    <div class="col-sm-12">
                                          <label for="occupation">occupation:</label>
                                          <select class="form-control" name="occupation" required="">
                                                <option value="customer" selected>Customer</option>
                                                <option value="marketer">Marketer</option>
                                                <option value="anonymous">Anonymous</option>
                                          </select>
                                    </div><!-- col -->
                                    
                              </div>
                                    
                              </div><!-- modal-body -->
                              <div class="modal-footer">
                              <button type="submit" class="btn btn-info pd-x-20">Comfirm Edit</button>
                              <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                              </div>
                        </form>
      
                  </div>
            </div><!-- modal-dialog -->
      </div>