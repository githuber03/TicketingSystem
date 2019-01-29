@extends('layouts.app')

@section('content')
<style>
  .uper {
    margin-top: 40px;

  }
   input[type='radio3']:checked{
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -2px;
        left: -1px;
        position: relative;
        background-color: #FF0000;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid white;
    }

</style>
<div class="card uper">
  <div class="card-header">
    Edit Share
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
      <form method="post" action="{{ route('share.update', $share->id) }}">
        @method('PATCH')
        @csrf
        <div class="form-group">
          <label for="name">Ticket:</label>
          <input type="text" class="form-control" name="share_ticket"required value={{ $share->share_ticket }} />
        </div>
        <div class="form-group">
          <label for="price">Name :</label>
          <input type="text" class="form-control" name="share_name"required value={{ $share->share_name }} />
        </div>
        <div class="form-group">
          <label for="quantity">Department:</label>
          <input type="text" class="form-control" name="share_department"required value={{ $share->share_department }} />
        </div>
        <div class="form-group">
          <label for="quantity">Priority:</label>
          <input type="text" class="form-control" name="share_priority"required value={{ $share->share_priority }} />
        </div>
      
        <button type="submit" class="btn btn-primary">Update</button>
      </form>
  </div>
</div>
@endsection