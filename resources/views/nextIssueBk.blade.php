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
        .button-container{
            text-align: center;
        }

        /* dropdown button style */
        .dropdown-toggle.fixed-width {
            min-width: 250px; 
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
                    <div class="dropdown float-right" id="dropbtn">
                        <button type="button" class="btn dropdown-toggle fixed-width" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Select Book Accession
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#" onclick="showForm('singleItem', 'Single Item')">Single Item</a>
                            <a class="dropdown-item" href="#" onclick="showForm('range', 'Range of Accession Number')">Range of Accession Number</a>
                        </div>
                    </div>
                    <hr>
                    <div id="singleItemForm" style="display: none;">
                        <!-- Single Item Form -->
                        <h3>Create Single Item</h3>
                        <hr>
                        <form>
                            <div class="form-group row">
                                <label for="barcode" class="col-md-2 col-form-label">Item Barcode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="bcode" name="bcode" placeholder="Item Barcode"
                                        required>
                                </div>
                                <label for="accession" class="col-md-2 col-form-label">Accession Number</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="accession" name="accession" placeholder="Accession Number">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hlibrary" class="col-md-2 col-form-label">Holding Library</label>
                                <input type="text" class="form-control col-md-4" id="hlibrary" name="hlibrary" placeholder="Holding Library" required>
                            </div>
                            <div class="form-group row">
                                <label for="cno" class="col-md-2 col-form-label">Classification No</label>
                                <input type="text" class="form-control col-md-3" id="cno" name="cno" placeholder="Classification No" required>
                                <label for="bno" class="col-md-2 col-form-label">Book No</label>
                                <input type="text" class="form-control col-md-3" id="bno" name="bno" placeholder="Book No" required>
                            </div>
                            <div class="form-group row">
                                <label for="callno" class="col-md-2 col-form-label">Call No</label>
                                <input type="text" class="form-control col-md-3" id="callno" name="callno" placeholder="Call No" required>
                                <label for="copyno" class="col-md-2 col-form-label">Copy Number</label>
                                <input type="text" class="form-control col-md-3" id="copyno" name="copyno" placeholder="Copy Number" required>
                            </div>
                            <div class="form-group row">
                                <label for="ppform" class="col-md-4 col-form-label">Physical/Presentation Form</label>
                                <input type="text" class="form-control col-md-4" id="ppform" name="ppform" required/>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-md-2 col-form-label">Location</label>
                                <input type="text" class="form-control col-md-4" id="location" name="location" placeholder="Location" required>
                            </div>
                            <hr>
                            <div class="button-container">
                                <button disabled="disabled" >more>></button>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="price" class="col-md-2 col-form-label">Price(Without Discount)</label>
                                <input type="number" class="form-control col-md-3" id="price" name="price" placeholder="Enter Price" required>
                                <label for="discount" class="col-md-2 col-form-label">Discount</label>
                                <input type="number" class="form-control col-md-3" id="discount" name="discount" placeholder="Enter Discount" required>
                            </div>
                            <div class="form-group row">
                                <label for="idate" class="col-md-2 col-form-label">Invoice Date</label>
                                <input type="date" class="form-control col-md-3" id="idate" name="idate" required>
                                <label for="ino" class="col-md-2 col-form-label">Invoice No</label>
                                <input type="number" class="form-control col-md-3" id="ino" name="ino" placeholder="Invoice No" required>
                            </div>
                            <div class="form-group row">
                                <label for="acq" class="col-md-2 col-form-label">ACQ Mode</label>
                                <input type="text" class="form-control col-md-3" id="acq" name="acq" placeholder="ACQ Mode" required>
                                <label for="vendor" class="col-md-2 col-form-label">Vendor</label>
                                <input type="text" class="form-control col-md-3" id="vendor" name="vendor" placeholder="Vendor" required>
                            </div>
                            <div class="form-group row">
                                <label for="acqdept" class="col-md-2 col-form-label">Acq for Department</label>
                                <input type="text" class="form-control col-md-4" id="acqdept" name="acqdept" placeholder="Acq for Department" required>
                            </div>
                            <div class="form-group row">
                                <label for="budget" class="col-md-2 col-form-label">Budget ID</label>
                                <input type="text" class="form-control col-md-4" id="budget" name="budget" placeholder="Budget ID" required>
                            </div>
                            <div class="form-group row" style="padding-left: 350px;">
                                <div class="col-md-2">
                                    <button type="submit" id="submit" class="btn">Submit</a>
                                </div>
                                <div class="col-md-2 ml-3">
                                    <button type="reset" id="reset" class="btn">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <div id="rangeForm" style="display: none;">

                        <!-- Range Form -->
                        <h3>Create A Range of Accession Number</h3>
                        <form>
                            <div class="form-group row">
                                <label for="aseries" class="col-md-2 col-form-label">Accession Series</label>
                                <input type="text" class="form-control col-md-4" id="aseries" name="aseries" placeholder="Accession Series" required>
                            </div>
                            <div class="form-group row">
                                <label for="fbarcode" class="col-md-2 col-form-label">From Item Barcode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="fbcode" name="fbcode" placeholder="From Item Barcode"
                                        required>
                                </div>
                                <label for="tbarcode" class="col-md-2 col-form-label">To Item Barcode</label>
                                <div class="col-md-3">
                                    <input type="text" class="form-control" id="tbarcode" name="tbarcode" placeholder="To Item Barcode">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="hlibrary" class="col-md-2 col-form-label">Holding Library</label>
                                <input type="text" class="form-control col-md-4" id="hlibrary" name="hlibrary" placeholder="Holding Library" required>
                                <label for="ncopies" class="col-md-2 col-form-label">Number of Copies</label>
                                <input type="text" class="form-control col-md-3" id="ncopies" name="ncopies" placeholder="Number of Copies" required>
                            </div>
                            <div class="form-group row">
                                <label for="cno" class="col-md-2 col-form-label">Classification No</label>
                                <input type="text" class="form-control col-md-3" id="cno" name="cno" placeholder="Classification No" required>
                                <label for="bno" class="col-md-2 col-form-label">Book No</label>
                                <input type="text" class="form-control col-md-3" id="bno" name="bno" placeholder="Book No" required>
                            </div>
                            <div class="form-group row">
                                <label for="callno" class="col-md-2 col-form-label">Call No</label>
                                <input type="text" class="form-control col-md-3" id="callno" name="callno" placeholder="Call No" required>
                                <label for="copyno" class="col-md-2 col-form-label">Copy Number</label>
                                <input type="text" class="form-control col-md-3" id="copyno" name="copyno" placeholder="Copy Number" required>
                            </div>
                            <div class="form-group row">
                                <label for="ppform" class="col-md-4 col-form-label">Physical/Presentation Form</label>
                                <input type="text" class="form-control col-md-4" id="ppform" name="ppform" required/>
                            </div>
                            <div class="form-group row">
                                <label for="location" class="col-md-2 col-form-label">Location</label>
                                <input type="text" class="form-control col-md-4" id="location" name="location" placeholder="Location" required>
                            </div>
                            <hr>
                            <div class="button-container">
                                <button disabled="disabled" >more>></button>
                            </div>
                            <hr>
                            <div class="form-group row">
                                <label for="price" class="col-md-2 col-form-label">Price(Without Discount)</label>
                                <input type="number" class="form-control col-md-3" id="price" name="price" placeholder="Enter Price" required>
                                <label for="discount" class="col-md-2 col-form-label">Discount</label>
                                <input type="number" class="form-control col-md-3" id="discount" name="discount" placeholder="Enter Discount" required>
                            </div>
                            <div class="form-group row">
                                <label for="idate" class="col-md-2 col-form-label">Invoice Date</label>
                                <input type="date" class="form-control col-md-3" id="idate" name="idate" required>
                                <label for="ino" class="col-md-2 col-form-label">Invoice No</label>
                                <input type="number" class="form-control col-md-3" id="ino" name="ino" placeholder="Invoice No" required>
                            </div>
                            <div class="form-group row">
                                <label for="acq" class="col-md-2 col-form-label">ACQ Mode</label>
                                <input type="text" class="form-control col-md-3" id="acq" name="acq" placeholder="ACQ Mode" required>
                                <label for="vendor" class="col-md-2 col-form-label">Vendor</label>
                                <input type="text" class="form-control col-md-3" id="vendor" name="vendor" placeholder="Vendor" required>
                            </div>
                            <div class="form-group row">
                                <label for="acqdept" class="col-md-2 col-form-label">Acq for Department</label>
                                <input type="text" class="form-control col-md-4" id="acqdept" name="acqdept" placeholder="Acq for Department" required>
                            </div>
                            <div class="form-group row">
                                <label for="budget" class="col-md-2 col-form-label">Budget ID</label>
                                <input type="text" class="form-control col-md-4" id="budget" name="budget" placeholder="Budget ID" required>
                            </div>
                            <div class="form-group row" style="padding-left: 350px;">
                                <div class="col-md-2">
                                    <button type="submit" id="submit" class="btn">Submit</a>
                                </div>
                                <div class="col-md-2 ml-3">
                                    <button type="reset" id="reset" class="btn">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    
                    <script>
                        function showForm(formType, selectedText) {
                            // Hide all forms first
                            document.getElementById('singleItemForm').style.display = 'none';
                            document.getElementById('rangeForm').style.display = 'none';
                    
                            // Show the selected form
                            document.getElementById(formType + 'Form').style.display = 'block';
                    
                            // Update the button text with the selected text
                            document.getElementById('dropdownMenuButton').textContent = selectedText;
                        }
                    </script>
                    
                </form>
            </div>
            @include('footer')
        </div>
    </div>
</body>

</html>