<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12">

        @if(session('status'))
        <h4 class="alert alert-success">{{session('status')}}</h4>
        @endif

            <div class="card">
                <div class="card-header">
                    <h4>
                        laravel crud working
                        <a href="{{url('unistudent/create')}}" class="btn btn-primary btn-sm">add student</a>
                    </h4>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thread>
                            <tr>
                                <th>ID</th>
                                <th>name</th>
                                <th>section</th>
                                <th>course</th>
                                <th>email</th>
                                <th>show</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thread>
                        <tbody>
                            @foreach($unistudent as $item)
                            <tr>
                                <td> {{$item->id}} </td>
                                <td> {{$item->name}} </td>
                                <td> {{$item->section}} </td>
                                <td> {{$item->course}} </td>
                                <td> {{$item->email}} </td>
                                <td>
                                    <a href=" {{'unistudent/'.$item->id}} " class="btn btn-sm btn-success">show</a>
                                </td>
                                <td>
                                    <a href=" {{'unistudent/'.$item->id.'/edit'}} " class="btn btn-sm btn-primary">edit</a>
                                </td>
                                <td>
                                    <form action="{{url('unistudent',$item->id)}}" method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

