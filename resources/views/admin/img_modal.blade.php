<div id="modal_img{{$deposit->id}}" class="modal fade" aria-hidden="true" style="display: none;">
      <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content tx-size-sm">
            <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Image Preview {{ $deposit->evidence }}</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
            </button>
            </div>
            <img src="User_deposits/{{ $deposit->evidence }}" alt="">
            </div>
      </div><!-- modal-dialog -->
</div>