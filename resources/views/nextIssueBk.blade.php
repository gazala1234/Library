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
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Select Book Accession
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">Single Item</a>
                          <a class="dropdown-item" href="#">Range of Accession Number</a>
                          {{-- <a class="dropdown-item" href="#">Something else here</a> --}}
                        </div>
                      </div>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
</body>

</html>