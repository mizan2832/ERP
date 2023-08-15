<table class="table table-bordered buyer_table">
    <thead>
      <tr>
        <th>SL</th>
        <th>Name</th>
        <th>Party Type</th>
        <th>Email</th>
        <th>Team</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <div class="search">
          <tr>
              <td><input type="text" class="form-control" id="serial"></td>
              <td><input type="text" class="form-control" id="full_name_input"></td>
              <td><input type="text" class="form-control" id="partyType_input"></td>
              <td><input type="text" class="form-control" id="email_input"></td>
              <td><input type="text" class="form-control" id="team_input"></td>
              <td><input type="text" class="form-control" id="status_input"></td>
          </tr>
      </div>

      @php
          $i=1;
      @endphp
      @foreach ($buyers as $b)
            <tr>
              <td>{{$i++}}</td>
              <td>{{$b->full_name}}</td>
              <td>{{$b->party_type}}</td>
              <td>{{$b->email}}</td>
              <td>{{$b->team}}</td>
              <td>{{$b->status}}</td>
            </tr>
      @endforeach
      {{-- <div class="">
        {!! $buyers->links() !!}
      </div> --}}
    </tbody>
  </table>
