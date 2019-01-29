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
        {!! Form::model($editShare, ['route' => ['share.update', $editShare->id], 'method' => 'PUT']) !!}
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
            {{ Form::label('ticketquery_id','PRIORITY') }}
            {{ Form::select('ticketquery_id',$queryData,NULL, ['class' => 'js-example-basic-single form-control','id' => 'ticketquery_id','name' => 'ticketquery_id']) }}
         </div>
         <br>   
          <button type="submit" class="btn btn-primary">Add</button>
       {!! Form::close() !!}
  </div>
</div>
@endsection