@extends('layouts.app')
@section('content')
<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
  <a class="btn-link btn btn-primary" role="button" href="{{ route('share.create')  }}">Create Shares</a>
  <br>
  <br>
  <table id="myTable" class="table table-striped">
    <thead>
        <tr>
          <td>Ticket</td>
          <td>Name</td>
          <td>Department</td>
          <td>Priority</td>
          <td>Edit</td>
          <td>Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($shares as $share)
        <tr>
            
            <td>{{$share->share_ticket}}</td>
            <td>{{$share->share_name}}</td>
            <td>{{$share->share_department}}</td>
            <td>{{$share->share_priority}}</td>           
            <td><a href="{{ route('share.edit',$share->id)}}" class="btn btn-primary">Edit</a></td>
            <td>
                <form action="{{ route('share.destroy', $share->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
  </table>
<div>
@endsection