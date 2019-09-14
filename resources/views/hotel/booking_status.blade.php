 <table class="table table-hover">
    <tbody>
        @foreach ($bill as $val)
            {{-- expr --}}
        
        <tr>
            <td class="dash-list-icon booking-list-date"><div class="b-date"><h3> {{ date('d', strtotime($val->check_in)) }}</h3><p>{{ date('M', strtotime($val->check_in)) }}</p></div></td>
            <td class="dash-list-text booking-list-detail">
               <h3>Tom's Restaurant</h3>
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
           <td class="dash-list-btn"><button class="btn btn-orange">Cancel</button><button class="btn">View more</button></td>
       </tr>
       @endforeach
</tbody>
</table>