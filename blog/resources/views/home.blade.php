<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>CRUD</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>
        <form action="test" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
          <div class="form-group">
            <label for="exampleInputName">Name</label>
            <input type="text" name="nam" class="form-control" id="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if(count($data)>0)
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
                @foreach($data as $result)
                <tr>
                    <td>{{$result->id}}</td>
                    <td>{{$result->name}}</td>
                    <td>{{$result->email}}</td>
                    <td>
                        <a href="{{URL::to('/edit',$result->id)}}">Edit </a> ||
                        <a href="{{URL::to('/delete',$result->id) }}">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
            
        </table>
        
    </div>
    @endif
    </body>
</html>
