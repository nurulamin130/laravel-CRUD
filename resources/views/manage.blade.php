
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
                           <table class="table table-bordered table-striped table-hover">
                               <tr>
                                   <th>SL</th>
                                   <th>Nmae</th>
                                   <th>Email</th>
                                   <th>Phone</th>
                                   <th>Address</th>
                                   <th>Action</th>
                               </tr>
                               @foreach($students as $student)
                               <tr>
                                   <td>{{$loop->iteration}}</td>
                                   <td>{{$student->name}}</td>
                                   <td>{{$student->email}}</td>
                                   <td>{{$student->phone}}</td>
                                   <td>{{$student->address}}</td>
                                   <td>
                                       <a href="{{route('edit',['id'=>$student->id])}}" class="btn btn-primary btn-sm">edit</a>
                                       <a href="{{route('delete',['id'=>$student->id])}}" class="btn btn-danger btn-sm">delete</a>

                                   </td>
                               </tr>
                               @endforeach

                           </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
