<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIET LIBRARY</title>
    @include('boot')
    <style>
       #show{
        margin-left: 30px;
       }
       #or{
        margin-left: 250px;
        margin-top: 5px;
       }
        /* checkout and reset button styling */
        #checkout {
            background-color: rgb(111, 56, 195);
            border: none;
            color: white;
            margin-top: 170%;
        }
        #reset {
            background-color: red;
            border: none;
            color: white;
            margin-top: 170%;
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
                        <div class="form-group row">
                            <label for="pid" class="col-md-2 col-form-label">Patron ID</label>
                            <input type="text" class="form-control col-md-5" id="pid" name="pid" required>
                            <button type="submit" id="show" class="btn col-md-1">Show</button><br>
                            <p id="or">OR</p>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pname" class="col-md-2 col-form-label">Patron Name</label>
                        <input type="text" class="form-control col-md-5" id="pname" name="pname" required>    
                    </div> 
                    <div class="form-group row">
                        <label for="card" class="col-md-2 col-form-label">Card</label>
                        <input type="text" class="form-control col-md-5" id="card" name="card" required>    
                    </div> 
                    <div class="form-group row">
                        <label for="pdetails" class="col-md-2 col-form-label">Patron Details</label>
                        <textarea class="form-control col-md-5" id="pdetails" name="pdetails" required></textarea>    
                    </div>
                    <hr>
                        <strong>Item being checkedout</strong> 
                        <div class="form-group row">
                            <div class="form-group row">
                                <label for="barcode" class="col-md-2 col-form-label">Barcode</label>
                                <input type="text" class="form-control col-md-5" id="barcode" name="barcode" required>
                                <button type="submit" id="show" class="btn col-md-1">Show</button><br>
                            </div>
                            <div class="form-group row">
                                <label for="remarks" class="col-md-2 col-form-label">Remarks</label>
                                <input type="text" class="form-control col-md-5" id="remarks" name="remarks" required>    
                            </div> 
                        </div>
                    <hr>
                        <strong>Other checkout parameters</strong> 
                        <div class="row">
                            <div class="col-md-12">
                                <input type="checkbox" name="cd" id="cd">
                                <label for="cd" class="col-form-label">Change checkout date</label>    
                            </div>
                        </div>                        
                        <div class="form-group row">
                            <label for="cdate" class="col-md-2 col-form-label">Checkout date</label>
                            <input type="date" class="form-control col-md-5" id="cdate" name="cdate" required>    
                        </div> 
                    <hr>
                    <strong>Item being checkedout in this transition</strong> 
                    <div class="table-responsive mt-3">
                        <table class="table table-striped table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Sl No</th>
                                    <th>Barcode</th>
                                    <th>Book Title</th>
                                    <th>Due date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <hr>
                    <div class="form-group row" style="padding-left: 350px;">
                        <div class="col-md-2">
                            <button type="submit" id="checkout" class="btn">Checkout</button>
                        </div>
                        <div class="col-md-2">
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