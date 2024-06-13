<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact Form </title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Update Contact Form</h1>
    <form method="POST" action="{{ url('update-contact/'.$contact->id)}}">
        @csrf
    <div class="form-group">
      
        <label for="exampleInputEmail1">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name"
        value="{{$contact->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email Id</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email Id"
        value="{{$contact->email}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Mobile No</label>
        <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile No"
        value="{{$contact->mobile}}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Address</label>
        <textarea class="form-control" id="address" name="address" rows="3">{{$contact->address}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Update</button>
    </form>
    </div>
   

   
  </body>
</html>