@extends('manager.layouts.app')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Students</h6>
                </div>

                 <div class="form-group row">
                  <a href="{{action('Manager\StudentController@create')}}" class="btn btn-primary">Add new</a>
                </div>
                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>Card code</th>
                        <th>location</th>
                        <th>Parent email</th>
                        <th>Gender</th>
                        <th>created on</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($students as $student)
                      <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->card_code}}</td>
                        <td>{{$student->location}}</td>
                        <td>{{$student->parent_email}}</td>
                        <td>{{$student->gender}}</td>
                        <td>{{$student->created_at}}</td>
                        <td><a href="{{route('student.edit',['id'=>$student->id])}}" class = "btn btn-info">Edit</a></td>
                        <td><a href="{{route('student.destroy',['id'=>$student->id])}}" class = "btn btn-danger">Delete</a></td>

        
                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
