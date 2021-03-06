@extends('admin.admin_master')

@section('admin')

<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<div class="py-7">
<div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <h3 class="card-header">Edit contact</h3>
              <div class="card-body">
                <form method="post" action="{{ route('contact.edit', $contactvalue->id)}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">address</label>
                      <input type="text" class="form-control" value="{{$contactvalue->address}}" name="address" placeholder="Address">
                      @error('address')
                          <div class="alert alert-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">email</label>
                        <input type="email" class="form-control" value="{{$contactvalue->email}}" name="email" placeholder="Email">
                        @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlInput1">phone no</label>
                        <input type="text" class="form-control" value="{{$contactvalue->phoneno}}" name="phoneno" placeholder="Phone No">
                        @error('phoneno')
                            <div class="alert alert-danger">{{$message}}</div>
                        @enderror
                      </div>

                    <br>
                    <button type="submit" name="submit" class="btn btn-primary">Edit Contact</button>

                  </form>
              </div>
            </div>
          </div>

        </div>
    </div>
</div>

@endsection
