@extends('manager.layouts.app')
@section('content')
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-body">
                    <h2 class="title">Edit Student</h2>
  <form class="well form-horizontal" id="contact_form" method="POST" action="{{route('student.update')}}">
  {{csrf_field()}}

  <div class="form-group">
  <label>Names</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="name" value="{{$student->name}}">
    </div>

    <div class="form-group">
  <label>card code</label>
        <input type="number" class="form-control form-control-lg" id="lgFormGroupInput" name="card_code" value="{{$student->card_code}}">
    </div>

    <div class="form-group">
  <label>Location</label>
        <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" name="location" value="{{$student->location}}">
    </div>

    <div class="form-group">
  <label>Parent Email</label>
        <input type="email" class="form-control form-control-lg" id="lgFormGroupInput" name="parent_email" value="{{$student->parent_email}}">
    </div>



    <div class="form-group">
     <label >Gender</label>
        <select name="gender" class="form-control">
          <option value="{{$student->gender}}">{{$student->gender}}</option>
          <option value="Female">Female</option>
          <option value="Male">Male</option>
        </select>
    </div>

    <div class="form-group row">
      <div class="col-md-0"></div>
      <input type="hidden" name="id" value = "{{$student->id}}">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</div>
</div>
</div>
</div>

@endsection
