
      @php
          $i=1;
      @endphp
      @foreach ($buyers as $b)
            <tr onclick="fetchBuyer({{ $b->id }})">
              <td>{{$i++}}</td>
              <td>{{$b->full_name}}</td>
              <td>{{$b->party_type}}</td>
              <td>{{$b->email}}</td>
              <td>{{$b->team}}</td>
              <td>{{$b->status}}</td>
            </tr>
      @endforeach

