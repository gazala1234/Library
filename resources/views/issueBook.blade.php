<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIET LIBRARY</title>
    @include('boot')
</head>

<body>
    <div class="wrapper">
        @include('sidebar')
        <div class="main-panel">
            @include('header')
            <div class="container" style="padding-left: 50px;">
                <form action="" method="post">
                    @csrf
                    <center>
                        <h4>ISSUE BOOK</h4>
                    </center>
                    <hr>
                    <div class="form-group row">
                        <label for="title" class="col-md-2 col-form-label">Title</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Title"
                                required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="stitle" name="stitle" placeholder="Sub Title">
                        </div>
                    </div>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
</body>

</html>