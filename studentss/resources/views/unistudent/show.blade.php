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
                           SHOW STUDENT SECTION
                        <a href="{{url('unistudent')}}" class="btn btn-primary btn-sm">back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <label for="">STUDENT NAME</label>
                    <h4>{{$unistudent->name}}</h4>

                    <label for="">STUDENT SECTION</label>
                    <h4>{{$unistudent->section}}</h4>

                    <label for="">STUDENT COURSE</label>
                    <h4>{{$unistudent->course}}</h4>

                    <label for="">STUDENT EMAIL</label>
                    <h4>{{$unistudent->email}}</h4>

               

            </div>
        </div>
      </div>
   </div>
</div>
</body>
</html>