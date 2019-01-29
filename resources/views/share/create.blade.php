@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="card uper">
  <div class="card-header">
    Add Share
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
        <form method="post" action="{{ route('share.store') }}">
      	<div class="form-group">
              @csrf
              <label for="name">Ticket:</label>
              <input type="text" class="form-control" name="share_ticket"/>
          </div>
          <div class="form-group">
              @csrf
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="share_name"/>
          </div>
          <div class="form-group">
              <label for="price">Department :</label>
              <input type="text" class="form-control" name="share_department"/>
          </div>
          <div class="form-group">
              <label for="price">Priority :</label>
              <input type="text" class="form-control" name="share_department"/>
          </div>        
          <button type="submit" class="btn btn-primary">Add</button>
      </form>
  </div>
</div>
@endsection