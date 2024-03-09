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
        }
    
        #reset {
            background-color: red;
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
                        <h4>NEW PATRON</h4>
                    </center>
                    <hr>
                    <div class="form-group row">
                        <label for="utype" class="col-md-2 col-form-label">User Type</label>
                        <div class="col-md-3">
                            <select class="form-control" id="utype" name="utype" required>
                                <option value="">Select User Type</option>
                                <option value="">User 1</option>
                                <option value="">User 2</option>
                                <option value="">User 3</option>
                            </select>
                        </div>
                        <label for="ptype" class="col-md-2 col-form-label">Patron Type</label>
                        <div class="col-md-3">
                            <select class="form-control" id="ptype" name="ptype" required>
                                <option value="">Select Patron Type</option>
                                <option value="">patron 1</option>
                                <option value="">patron 2</option>
                                <option value="">patron 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="photo" name="photo" accept="image/*" onchange="updateFileName()">
                                <label class="custom-file-label" for="photo" id="photo-label">Select Photo</label>
                            </div>
                        </div>
                    </div>
                    
                    <script>
                        function updateFileName() {
                            var input = document.getElementById('photo');
                            var label = document.getElementById('photo-label');
                            var fileName = input.files[0].name;
                            label.innerHTML = fileName;
                        }
                    </script>
                    
                    <hr>
                    <div class="form-group row">
                        <label for="uid" class="col-md-2 col-form-label">User ID</label>
                        <input type="text" class="form-control col-md-3" id="uid" name="uid" required>
                    </div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Name</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="fname" name="fname" placeholder="First"
                                required>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="mname" name="mname" placeholder="Middle">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="lname" name="lname" placeholder="Last" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pcat" class="col-md-2 col-form-label">Patron Category</label>
                        <div class="col-md-3">
                            <select class="form-control" id="pcat" name="pcat" required>
                                <option value="">Select Patron Category</option>
                                <option value="">Category 1</option>
                                <option value="">Category 2</option>
                                <option value="">Category 3</option>
                            </select>
                        </div>
                        <label for="dept" class="col-md-2 col-form-label">Department</label>
                        <div class="col-md-3">
                            <select class="form-control" id="dept" name="dept" required>
                                <option value="">Select Department</option>
                                <option value="">Dept 1</option>
                                <option value="">Dept 2</option>
                                <option value="">Dept 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="year" class="col-md-2 col-form-label">Course Year</label>
                        <div class="col-md-3">
                            <select class="form-control" id="year" name="year" required>
                                <option value="">Select Year</option>
                                <option value="">Year 1</option>
                                <option value="">Year 2</option>
                                <option value="">Year 3</option>
                            </select>
                        </div>
                        <label for="subject" class="col-md-2 col-form-label">Subject Location</label>
                        <div class="col-md-3">
                            <select class="form-control" id="subject" name="subject" required>
                                <option value="">Select Subject Location</option>
                                <option value="">Location 1</option>
                                <option value="">Location 2</option>
                                <option value="">Location 3</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label">Address</label>
                        <input type="text" class="form-control col-md-3" id="address" name="address" required>
                        <label for="city" class="col-md-2 col-form-label">City</label>
                        <input type="text" class="form-control col-md-3" id="city" name="city" required>
                    </div>
                    <div class="form-group row">
                        <label for="state" class="col-md-2 col-form-label">State</label>
                        <input type="text" class="form-control col-md-3" id="state" name="state" required>
                        <label for="country" class="col-md-2 col-form-label">Country</label>
                        <input type="text" class="form-control col-md-3" id="country" name="country" required>
                    </div>
                    <div class="form-group row">
                        <label for="pin" class="col-md-2 col-form-label">Pincode</label>
                        <input type="number" class="form-control col-md-3" id="pin" name="pin" required>
                        <label for="phone" class="col-md-2 col-form-label">Phone</label>
                        <input type="number" class="form-control col-md-3" id="phone" name="phone" required>
                    </div>
                    <div class="form-group row">
                        <label for="fax" class="col-md-2 col-form-label">Fax</label>
                        <input type="text" class="form-control col-md-3" id="fax" name="fax" required>
                        <label for="mail" class="col-md-2 col-form-label">Email</label>
                        <input type="email" class="form-control col-md-3" id="mail" name="mail" required>
                    </div>
                    <div class="form-group row">
                        <label for="aadhar" class="col-md-2 col-form-label">Aadhar No</label>
                        <input type="number" class="form-control col-md-3" id="aadhar" name="aadhar" required>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="sdate" class="col-md-3 col-form-label">User Validity Starts On</label>
                        <div class="col-md-2">
                            <input type="date" class="form-control" id="sdate" name="sdate" required>
                        </div>
                        <label for="edate" class="col-md-2 col-form-label">Ends On</label>
                        <div class="col-md-2">
                            <input type="date" class="form-control" id="edate" name="edate" required>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn">More</a>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="checkbox" name="authentication" id="authentication" value="local">
                                <label class="form-check-label" for="authentication">Authentication in local DB</label>
                            </div>
                        </div>
                        <label for="logid" class="col-md-2 col-form-label">Login ID</label>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="logid" name="logid" required>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row" style="padding-left: 350px;">
                        <div class="col-md-2">
                            <button type="submit" id="submit" class="btn">Submit</button>
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