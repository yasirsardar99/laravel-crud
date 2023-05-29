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
                            add student section
                            <a href="{{url('unistudent')}}" class="btn btn-primary btn-sm">back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('unistudent')}}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="">student name</label>
                                <input type="text" name="name" class="form-control" placeholder="enter your name">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Section</label>
                                <input type="text" name="section" class="form-control" placeholder="enter your section">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">course</label>
                                <input type="text" name="course" class="form-control" placeholder="enter your course">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">email</label>
                                <input type="text" name="email" class="form-control" placeholder="enter your email">
                            </div>
                            
                            <label><strong>IN WHICH FEILD YOU WISH TO APPLY: </strong></label><br>
                            <div class="form-group mb-3 d-flex justify-content-between">
                                
                                <label><input type="checkbox" name="category[]" value="intern">INTERN</label>
                                <label><input type="checkbox" name="category[]" value="junior dev"> JUNIOR SOFTWARE DEV</label>
                                <label><input type="checkbox" name="category[]" value="senior dev"> SENIOR DEVELOPER</label>
                                <label><input type="checkbox" name="category[]" value="manager">MANAGER</label>
                                <label><input type="checkbox" name="category[]" value="ptoject head"> PROJECT HEAD</label>
                            </div> 

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>