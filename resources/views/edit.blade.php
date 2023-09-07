
@extends('master')

@section('title')
    create new student
@endsection

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-2">
                    <div class="card">
                        <div class="card-header">Student Create Form</div>
                        <div class="card-body">
                            <form action="{{route('update')}}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Name</label>
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email</label>
                                    <input type="email" name="email" value="{{$student->email}}" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">phone</label>
                                    <input type="text" name="phone" value="{{$student->phone}}" class="form-control" >
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Address</label>
                                    <textarea type="text" name="address" class="form-control" >{{$student->id}}</textarea>
                                </div>


                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
