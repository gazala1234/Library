<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIET LIBRARY</title>
    @include('boot')
    <style>
        #searchbtn {
            background-color: rgb(111, 56, 195);
            border: none;
            color: white;
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
                        <h4>SEARCH BOOK</h4>
                    </center>
                    <hr>
                    <div class="form-group row">
                        <label for="search" class="col-md-3 col-form-label">Search For</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="search" name="search" required>
                        </div>
                        <label for="as" class="col-md-2 col-form-label">As</label>
                        <div class="col-md-3">
                            <select class="form-control" id="as" name="as" required>
                                <option value="">Select Option</option>
                                <option value="">Accession Number</option>
                                <option value="">Author</option>
                                <option value="">Subject</option>
                                <option value="">Title</option>
                            </select>
                        </div>
                    </div>    
                    <center>
                        <div class="col-md-2">
                            <button type="submit" id="searchbtn" class="btn">Search</button>
                        </div>
                    </center>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Select books</th>
                                    <th>Book</th>
                                    <th>Library ID</th>
                                    <th>Main Author</th>
                                    <th>Full Title</th>
                                    <th>E-Resource</th>
                                    <th>Type</th>
                                    <th>Year</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><input type="checkbox"></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm">View</button>
                                        <button type="button" class="btn btn-success btn-sm">Update</button>
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                </form>
            </div>
            @include('footer')
        </div>
    </div>
</body>

</html>