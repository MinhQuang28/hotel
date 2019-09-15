 <table class="table table-hover">
    <tbody>
        @foreach ($bill as $val)
            {{-- expr --}}
        
        <tr>
            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3> {{ date('d', strtotime($val->check_in)) }}</h3><p>{{ date('M', strtotime($val->check_in)) }}</p></div></td>
            <td class="dash-list-text booking-list-detail">
               <h3>{{ $val->hotel_name }}</h3>
               <ul class="list-unstyled booking-info">
                   <li><span>Booking Date:</span> {{ date('d M,Y', strtotime($val->check_in)) }}</li>
                   <li><span>Booking Details:</span> {{ $val->so_luong }} Room</li>
                   <li><span>Client:</span>{{ $val->name }}<span class="line">|</span>{{ $val->email }}<span class="line">|</span>{{ $val->phone }}</li>
               </ul>
               @if($val->status==0)
               <button class="btn btn-orange">Waiting</button>
               @elseif($val->status==4)
               <button class="btn btn-danger">unpaid</button>
               @else
                <button class="btn btn-success">paid</button>
               @endif
           </td>
             @if($val->status==0)
             

                <td class="dash-list-btn"> <button 
                   data-toggle="modal" data-target="#booking_check{{ $val->bill_id }}" class="btn btn-orange">Cancel</button><a href="{{ route('view_info',[$val->bill_id]) }}" class="btn">View more</a></td>
                    <div id="booking_check{{ $val->bill_id }}" class="modal custom-modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h3 class="modal-title">Warning</h3>
            </div><!-- end modal-header -->

            <div class="modal-body">
               <div class="alert alert-warning" role="alert">
                are you confirm your order cancellation?
              </div>

              <a href="{{ route('cancel_booking',[$val->bill_id]) }}" class="btn btn-orange">Comfrim</a>

          </div><!-- end modal-bpdy -->
      </div><!-- end modal-content -->
  </div><!-- end modal-dialog -->
</div><!-- end edit-profile -->
               @else
         <td class="dash-list-btn"><input type="" name="" hidden="" ></input><a href="{{ route('view_info',[$val->bill_id]) }}" class="btn">View more</a></td>
           @endif
       </tr>
       @endforeach
</tbody>
</table>