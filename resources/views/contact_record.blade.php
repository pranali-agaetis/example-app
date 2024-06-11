<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Contact Form Records </title>
  </head>
  <body>
    <div class="container">
        <h1 class="text-center">Contact Form Records</h1>
         
          <form method="get" action="">
       
            <div class="form-group row">
                <div class="col-md-6">
                <input type="search" name="search" id="search" placeholder="Search By Name,Email,Mobile No"
                class="form-control">
                </div>
                <div class="col-md-2">
                <button class="btn btn-primary">Search</button>
                </button>
                </div>
            </form>
       
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email ID</th>
      <th scope="col">Mobile No</th>
      <th scope="col">Address</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($contacts as $records)
    <tr>
      <td>{{$records->id}}</th>
      <td>{{$records->name}}</td>
      <td>{{$records->email}}</td>
      <td>{{$records->mobile}}</td>
      <td>{{$records->address}}</td>
    </tr>
    @endforeach
  
  </tbody>
</table>
    </div>
</body>
</html>