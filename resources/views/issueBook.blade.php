<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIET LIBRARY</title>
    @include('boot')
    <style>
        #submit {
            background-color: rgb(111, 56, 195);
            border: none;
            color: white;
            width: 140%;
            height: 100%;
        }
    
        #reset {
            background-color: red;
            border: none;
            color: white;
            width: 140%;
            height: 100%;
        }

        
    </style>
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
                    <hr>
                    <div class="form-group row">
                        <label for="author" class="col-md-2 col-form-label">Author Name</label>
                        <input type="text" class="form-control col-md-3" id="author" name="author" placeholder="Author Name" required>
                        <label for="isbn" class="col-md-2 col-form-label">ISBN Number</label>
                        <input type="text" class="form-control col-md-3" id="isbn" name="isbn" placeholder="ISBN Number" required>
                    </div>
                    <div class="form-group row">
                        <label for="edition" class="col-md-2 col-form-label">Edition</label>
                        <input type="text" class="form-control col-md-3" id="edition" name="edition" placeholder="Edition" required>
                        <label for="pages" class="col-md-2 col-form-label">Pages/Extent</label>
                        <input type="text" class="form-control col-md-3" id="pages" name="pages" placeholder="Pages/Extent" required>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Book Publisher</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="pub_name" name="pub_name" placeholder="Publisher Name"
                                required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="pub_place" name="pub_place" placeholder="Place of Publication">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="pub_year" name="pub_year" placeholder="Year of Publication" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="subject" class="col-md-2 col-form-label">Subject Name</label>
                        <input type="text" class="form-control col-md-4" id="subject" name="subject" placeholder="Subject Name" required>
                    </div>
                    <label for="name" class="col-form-label">DEWEY DECIMAL CLASSIFICATION_0</label><hr>
                    <div class="form-group row">
                        <label for="cno" class="col-md-3 col-form-label">Classification Number</label>
                        <input type="text" class="form-control col-md-3" id="cno" name="cno" placeholder="Classification Number" required>
                        <label for="ino" class="col-md-2 col-form-label">Item Number</label>
                        <input type="text" class="form-control col-md-3" id="ino" name="ino" placeholder="Item Number" required>
                    </div>
                    <div class="form-group row">
                        <label for="location" class="col-md-2 col-form-label">Location</label>
                        <input type="text" class="form-control col-md-4" id="location" name="location" placeholder="Location" required>
                    </div>
                    <div class="form-group row">
                        <label for="gnotes" class="col-md-2 col-form-label">General Note</label>
                        {{-- <input type="text" class="form-control col-md-4" id="gnotes" name="gnotes" placeholder="General Notes" required> --}}
                        <textarea name="gnotes" id="gnotes" placeholder="General note" cols="30" rows="4" style="width: 300px;"></textarea>
                    </div>
                    <hr>
                    <div class="form-group row" style="padding-left: 350px;">
                        <div class="col-md-2">
                            <a href="{{ route('nextIssueBk') }}" id="submit" class="btn">Next</a>
                        </div>
                        <div class="col-md-2 ml-3">
                            <button type="reset" id="reset" class="btn">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
</body>

</html>