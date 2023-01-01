<div id="modal_new_plan" class="modal fade" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Create A new Plan</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
            </button>
            </div>
            

                  <form action="{{ route('Plans.store') }}" method="post">
                        @csrf
                        <div class="modal-body pd-20">
                        <div class="row">
                              <div class="col-sm-12">
                              <label for="name">Plan:</label>
                              <input class="form-control" autofocus placeholder="name of Plan" type="text" name="name">
                              </div>
                             
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Min. Deposit($):</label>
                              <input class="form-control" placeholder="Minimum Deposit($)" type="text" name="min" required>
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Max. Deposit($):</label>
                              <input class="form-control" placeholder="maximum Deposit($)" type="text" name="max" required>
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">On Ref.(%):</label>
                              <input class="form-control" placeholder="Commision on ref(%)" type="text" name="perperref" required>
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">ROI:</label>
                              <input class="form-control" placeholder="Return On Investment %" type="text" name="roi" required>
                              </div><!-- col -->
                        </div>
                        <div class="row">
                              <div class="col-sm-12 mg-t-10 mg-lg-t-0">
                              <label for="name" class="mg-t-10 mg-lg-t-0">Days:</label>
                              <input class="form-control" placeholder="Investment Ready days" type="text" name="grow" required>
                              </div><!-- col -->
                        </div>

                              
                        </div><!-- modal-body -->
                        <div class="modal-footer">
                        <button type="submit" class="btn btn-info pd-x-20">Create plan</button>
                        <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Cancel</button>
                        </div>
                  </form>

            </div>
      </div><!-- modal-dialog -->
</div>