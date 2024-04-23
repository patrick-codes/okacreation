<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Customer Details</h2>
                        <a href="create.php" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add New Customer Measurements</a>
                    </div>
                    <?php
                    // Include config file
                    require_once "config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM customers";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo '<table class="table table-bordered table-striped">';
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Contact</th>";
                                        echo "<th>Across Back</th>";
                                        echo "<th>Sleeve Length(S/L)</th>";
                                        echo "<th>Around Arm</th>";
                                        echo "<th>Burst/Chest</th>";
                                        echo "<th>Stomach</th>";
                                        echo "<th>Waist</th>";
                                        echo "<th>Hips</th>";
                                        echo "<th>Thighs</th>";
                                        echo "<th>Knee</th>";
                                        echo "<th>Knee Calf</th>";
                                        echo "<th>Calf</th>";
                                        echo "<th>Bass Calf</th>";
                                        echo "<th>Trouser Length</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['id'] . "</td>";
                                        echo "<td>" . $row['name'] . "</td>";
                                        echo "<td>" . $row['contact'] . "</td>";
                                        echo "<td>" . $row['ab'] . "</td>";
                                        echo "<td>" . $row['sl'] . "</td>";
                                        echo "<td>" . $row['aa'] . "</td>";
                                        echo "<td>" . $row['wr'] . "</td>";
                                        echo "<td>" . $row['bc'] . "</td>";
                                        echo "<td>" . $row['st'] . "</td>";
                                        echo "<td>" . $row['wa'] . "</td>";
                                        echo "<td>" . $row['hi'] . "</td>";
                                        echo "<td>" . $row['th'] . "</td>";
                                        echo "<td>" . $row['wk'] . "</td>";
                                        echo "<td>" . $row['kn'] . "</td>";
                                        echo "<td>" . $row['knc'] . "</td>";
                                        echo "<td>" . $row['ca'] . "</td>";
                                        echo "<td>" . $row['ba'] . "</td>";
                                        echo "<td>" . $row['tl'] . "</td>";
                                        
                                        echo "<td>";
                                            echo '<a href="read.php?id='. $row['id'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>';
                                            echo '<a href="update.php?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>';
                                            echo '<a href="delete.php?id='. $row['id'] .'" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>';
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo '<div class="alert alert-danger"><em>No records were found.</em></div>';
                        }
                    } else{
                        echo "Oops! Something went wrong. Please try again later.";
                    }
 
                    // Close connection
                    mysqli_close($link);
                    ?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
