<div id="modal_support_ticket" class="modal fade" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">New Ticket</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
            </button>
            </div>
                  <form action="{{ route('Ticket.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body pd-20">
                        <div class="row">
                              <div class="col-sm-12 col-md-6">
                              <label for="name">Username:</label>
                              <input class="form-control" value="{{ Auth::User()->name }}" readonly="" type="text">
                              <input class="form-control" value="{{ Auth::User()->id }}"  type="hidden" name="user_id">
                              </div><!-- col -->
                              <div class="col-sm-12 col-md-6">
                              <label for="name">email:</label>
                              <input class="form-control" value="{{ Auth::User()->email }}" readonly="" type="text">
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Subject:</label>
                              <input class="form-control" autofocus placeholder="Title of ticket" type="text" name="subject" required>
                              </div><!-- col -->
                        </div>
      
                        <div class="row">
                              <div class="col-sm-12 col-md-4 ">
                                    <label for="name">Department:</label>
                                    <select class="form-control" name="department" required="">
                                          <option value="sales" selected>Sales</option>
                                          <option value="tech">Technical</option>
                                          <option value="abuse">Abuse</option>
                                    </select>
                              </div><!-- col -->
                              <div class="col-sm-12 col-md-4">
                                    <label for="name">Related Service:</label>
                                    <input class="form-control" value="Not available" readonly="" type="text">
                              </div><!-- col -->
                              <div class="col-sm-12 col-md-4">
                                    <label for="name">Priority:</label>
                                    <select class="form-control" name="priority" required="">
                                          <option value="low" selected>Low</option>
                                          <option value="medium">medium</option>
                                          <option value="high">High</option>
                                    </select>
                              </div><!-- col -->
                        </div>
                              
                        <div class="row">
                              <div class="col-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Subject:</label>
                              <textarea class="form-control" placeholder="Message" required="" name="message"></textarea>
                              </div><!-- col -->
                        </div>                              
                        <div class="row">
                              <div class="col-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Attachment: <small class="text-danger">[Optional]</small></label>
                             <input type="file" class="form-control" name="attachment">
                              </div><!-- col -->
                        </div>
            

                        </div><!-- modal-body -->
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Submit Ticket</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                        </div>
                  </form>

            </div>
      </div><!-- modal-dialog -->
</div>