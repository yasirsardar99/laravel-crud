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
            <div class="card">
                <div class="card-header">
                    <h4>
                           Edit Student Information
                        <a href="{{url('unistudent')}}" class="btn btn-primary btn-sm float-end">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('unistudent/'.$unistudent->id)}}" method="POST">
                        @csrf
                    
                        @method('PUT')
                        <div class="form-group mb-3">
                            <label for="">student name</label>
                            <input type="text" name="name" class="form-control" value="{{$unistudent->name ?? ''}}" placeholder="enter your name">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Section</label>
                            <input type="text" name="section" class="form-control" value="{{$unistudent->section ?? ''}}" placeholder="enter your section">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">course</label>
                            <input type="text" name="course" class="form-control" value="{{$unistudent->course ?? ''}}" placeholder="enter your course">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">email</label>
                            <input type="text" name="email" class="form-control" value="{{$unistudent->email ?? ''}}" placeholder="enter your email">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    
                    </form>
               

            </div>
        </div>
      </div>
   </div>
</div>
</body>
</html>
