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
        {!! Form::open(['route' => 'share.store','method' => 'POST']) !!}
          @csrf
      	<div class="form-group">
              @csrf
              {{ Form::label('share_ticket','TICKETS') }}
              {{ Form::text('share_ticket',null,['class'=>'form-control','id'=>'share_ticket']) }} 
          </div>
          <div class="form-group">
              {{ Form::label('share_name','NAME') }}
              {{ Form::text('share_name',null,['class'=>'form-control','id'=>'share_name']) }}
          </div>
          <div class="form-group">
              {{ Form::label('share_department','DEPARTMENT') }}
              {{ Form::text('share_department',null,['class'=>'form-control','id'=>'share_department']) }}
          </div>
         <div class="form-group">
            {{ Form::label('desig_id','PRIORITY') }}
            <select type="text" id="ticketquery_id" name="ticketquery_id" class="form-control">
              <option value="" disabled selected>Choose your option</option>    
              @foreach( App\TicketQuries::all() as $query )
                    <option value="{{ $query['ticketquery_code'] }}">{{ $query['ticketquery_desc'] }}</option>
              @endforeach
            </select>
         </div>
         <br>   
          <button type="submit" class="btn btn-primary">Add</button>
       {!! Form::close() !!}
  </div>
</div>
@endsection