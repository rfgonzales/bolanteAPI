<!DOCTYPE html>
<html>



<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Jquery DataTable | Bootstrap Based Admin Template - Material Design</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Pag wait jud dira. Okay?.</p>
        </div>
    </div>
    

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h1>
                    Gabby Document Management System
                    <br>
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h1>
            </div>
            
            <!-- Registered Users Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Registered Users
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact Number</th>
                                            <th>E-mail</th>
                                            <th>Controls</th>
                                            
                                        </tr>
                                        
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact Number</th>
                                            <th>E-mail</th>
                                            <th>Controls</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

$servername = "localhost";
$usernameY = "root";
$password = "";
$dbname = "gabby";

   

// Create connection

$conn = new mysqli($servername, $usernameY, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error);
    
} 

$sql = "SELECT `users`.`User_ID`, username, First_Name, Last_Name, Contact_Number, Email, account_type, `users`.`statuss`  from account_information LEFT JOIN users on account_information.User_ID = users.User_ID WHERE statuss='1'";

$result = $conn-> query($sql);

//echo "Error Message =". mysqli_error($conn);
if ($result->num_rows > 0){
    while ($row = $result-> fetch_assoc()){
        echo "<tr><td>". $row['User_ID'] ."</td><td>". $row['username'] . "</td><td>". $row['First_Name']. "</td><td>". $row['Last_Name']. "</td><td>". $row['Contact_Number']. "</td><td>". $row['Email']. "</td><td>".'<button type="button" class="btn bg-deep-purple btn-circle waves-effect waves-circle waves-float">
        <i class="material-icons">settings</i>
    </button>'. "</td></tr>";
            
    }

}

$conn-> close();
?>
                                    
                                        
                                            
                                    </tbody>
                                </table>    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Registered Users Table -->


             <!-- Verification Table -->
             <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                New Users for Verification
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact Number</th>
                                            <th>E-mail</th>
                                            <th>Controls</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>User ID</th>
                                            <th>Username</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Contact Number</th>
                                            <th>E-mail</th>
                                            <th>Controls</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php

$servername = "localhost";
$usernameY = "root";
$password = "";
$dbname = "gabby";

   

// Create connection

$conn = new mysqli($servername, $usernameY, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    
    die("Connection failed: " . $conn->connect_error); 
    
} 

$sql = "SELECT `users`.`User_ID`, username, First_Name, Last_Name, Contact_Number, Email, account_type, `users`.`statuss`  from account_information LEFT JOIN users on account_information.User_ID = users.User_ID WHERE statuss='3'";

$result = $conn-> query($sql);


if ($result->num_rows > 0){
    while ($row = $result-> fetch_assoc()){ 
        
        ?>
    <tr>
       
        <td><?php echo $row['User_ID']; ?></td>
        <td><?php echo $row['username'];  ?></td>
        <td><?php echo $row['First_Name']; ?></td>
        <td><?php echo $row['Last_Name']; ?></td>
        <td><?php echo $row['Contact_Number']; ?></td>
        <td><?php echo $row['Email']; ?></td>
        <form action='update-act-mgmt.php'><td><button data-role ="update" onclick="confirmMe()"  name='User_ID' value= "<?php echo $row['User_ID']; ?>" type="submit" class="btn bg-blue-grey waves-effect">Accept</button> </form>
        <button id = " <?php echo $id; ?>" type="submit" class="btn bg-blue-grey waves-effect">Reject</button></td>
    </tr>
    <?php

    }

}

$conn-> close();
?>


                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Verification Table -->
        </div>
    </section>
    
    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
    <script type='text/javascript'>
        function confirmMe()
        {
        var x = confirm("Are you sure you want to Accept");
        if (x ===true){
            return true;
        }else
        {
            return
        }
        }
    </script>

    <script type='text/javascript'>
     
        $(document).ready(function(){
            $('#update').click(function(){
                var User_ID = $('#User_ID').val();
                var username = $('#username').val();
                var First_Name = $('#First_Name').val();
                var Last_Name = $('#Last_Name').val();
                var Contact_Number = $('#Contact_Number').val();
                var Email = $('#Email').val();
            
                

                $.ajax({
                    url     : 'update-act-mgmt.php',
                    method  : 'GET',
                    data    :{User_ID : User_ID , username : username, First_Name : First_Name, Last_Name : Last_Name, Contact_Number : Contact_Number, Email : Email},
                    success : function(response){
                        console.log(response);
                    }


                })
            }
               
            }
        });
    </script>

   


</body>

</html>
