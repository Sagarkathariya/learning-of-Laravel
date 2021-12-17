@extends('welcome')
   @section('content')
   <!-- Content Row -->
   <div class="container my-5">
     
       <div class="row">
           <table class="table">
               <thead>
                   <tr>
                       <th scope="col">#</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Address</th>
                       <th scope="col">Action</th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($students as $student)
                   <tr>
                       <th scope="row">{{ ++$i }}</th>
                       <td>{{ $student->name }}</td>
                       <td>{{ $student->email }}</td>
                       <td>{{ $student->address }}</td>
                       <td>
                           <form action="" method="POST">
                               
                               <a class="btn btn-primary" href="">Edit</a>
                               @csrf
                               @method('DELETE')
                               <button type="submit" class="btn btn-danger">Delete</button>
                           </form>
                       </td>
                      
                   </tr>
                   @endforeach
               </tbody>
           </table>

       </div>

       {{ $students->links() }}
   </div>

   @endsection