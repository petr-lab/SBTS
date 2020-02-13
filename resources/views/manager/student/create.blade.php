<!-- create.blade.php -->
@extends('manager.layouts.app')

@section('content')

<div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Form Student</h6>
                </div>
                <div class="card-body">
                  <form class="justify-content-center" method="post"  action="{{route('student.store')}}"  id="contact_form">
                     {{ csrf_field() }}
                    
                    <div class="form-group">
                      <label for="exampleInputPassword1">Names</label>
                      <input name="name" type="text" class="form-control"  placeholder="student names">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Card code</label>
                      <input name="card_code" type="number" class="form-control"  placeholder="Enter code code">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Location</label>
                      <input name="location" type="text" class="form-control"  placeholder="location : District,sector,cell,street">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputPassword1">Parent Email</label>
                      <input name="parent_email" type="email" class="form-control"  placeholder="parent email">
                    </div>

                     <div class="form-group">
                      <label >Gender</label>
                          <select name="gender" class="form-control">
                            <option value="">---- select Gender  -----</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                          </select>
                        </div>
                  
 
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
  

<!-- </div> -->

@endsection
