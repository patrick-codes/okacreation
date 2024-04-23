<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$name = "";
$contact = "";
$ab = "";
$sl = "";
$aa = "";
$wr = "";
$bc = "";
$st = "";
$wa = "";
$hi = "";
$th = "";
$wk = "";
$kn = "";
$knc = "";
$ca = "";
$ba = "";
$tl = "";
$name_err = "";
$address_err = "";
$salary_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validate name
    $input_name = trim($_POST["name"]);
    if(empty($input_name)){
        $name_err = "Please enter a name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid name.";
    } else{
        $name = $input_name;
    }
    
    // Validate Contact
    $input_contact = trim($_POST["contact"]);
    if(empty($input_contact)){
        $address_err = "Please enter contact";     
    } else{
        $contact = $input_contact;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_ab = trim($_POST["ab"]);
    if(empty($input_ab)){
        $input_ab = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_ab)){
        $input_ab = "Please enter a positive value.";
    } else{
        $ab = $input_ab;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_sl = trim($_POST["sl"]);
    if(empty($input_sl)){
        $input_sl = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_sl)){
        $input_sl = "Please enter a positive value.";
    } else{
        $sl = $input_sl;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_aa = trim($_POST["aa"]);
    if(empty($input_aa)){
        $input_aa = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_aa)){
        $input_aa = "Please enter a positive value.";
    } else{
        $aa = $input_aa;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_wr = trim($_POST["wr"]);
    if(empty($input_wr)){
        $input_wr = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_wr)){
        $input_wr = "Please enter a positive value.";
    } else{
        $wr = $input_wr;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_bc = trim($_POST["bc"]);
    if(empty($input_bc)){
        $input_bc = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_bc)){
        $input_bc = "Please enter a positive value.";
    } else{
        $bc = $input_bc;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_st = trim($_POST["st"]);
    if(empty($input_st)){
        $input_st = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_st)){
        $input_st = "Please enter a positive value.";
    } else{
        $st = $input_st;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_wa = trim($_POST["wa"]);
    if(empty($input_wa)){
        $input_wa = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_wa)){
        $input_wa = "Please enter a positive value.";
    } else{
        $wa = $input_wa;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_hi = trim($_POST["hi"]);
    if(empty($input_hi)){
        $input_hi = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_hi)){
        $input_hi = "Please enter a positive value.";
    } else{
        $hi = $input_hi;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_th = trim($_POST["th"]);
    if(empty($input_th)){
        $input_th = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_th)){
        $input_th = "Please enter a positive value.";
    } else{
        $th = $input_th;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_wk = trim($_POST["wk"]);
    if(empty($input_wk)){
        $input_wk = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_wk)){
        $input_wk = "Please enter a positive value.";
    } else{
        $wk = $input_wk;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_kn = trim($_POST["kn"]);
    if(empty($input_kn)){
        $input_kn = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_kn)){
        $input_kn = "Please enter a positive value.";
    } else{
        $kn = $input_kn;
    }

    // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_knc = trim($_POST["knc"]);
    if(empty($input_knc)){
        $input_knc = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_knc)){
        $input_knc = "Please enter a positive value.";
    } else{
        $knc = $input_knc;
    }

        // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_ca = trim($_POST["ca"]);
    if(empty($input_ca)){
        $input_ca = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_ca)){
        $input_ca = "Please enter a positive value.";
    } else{
        $ca = $input_ca;
    }

        // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_ba = trim($_POST["ba"]);
    if(empty($input_ba)){
        $input_ba = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_ba)){
        $input_ba = "Please enter a positive value.";
    } else{
        $ba = $input_ba;
    }
    

        // $salary - $ab....... $input_salary - $input_ab
    //Measurements Validation
    // Validate accrossback
    $input_tl = trim($_POST["tl"]);
    if(empty($input_tl)){
        $input_tl = "Please enter the the required measurement.";     
    } elseif(!ctype_digit($input_tl)){
        $input_tl = "Please enter a positive value.";
    } else{
        $tl = $input_tl;
    }
    



    
    // Check input errors before inserting in database
    if(empty($name_err) && empty($address_err) && empty($salary_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO customers (cusname, contact, acrossback, sleevelength, aroundarm, wrist, burstchest, stomach, waist, hips, thighs, waistknee, knee, kneecalf, calf, bass, trouserlength) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_name, $param_contact, $param_ab, $param_sl, $param_aa, $param_wr, $param_bc, $param_st, $param_wa, $param_hi, $param_th, $param_wk, $param_kn, $param_knc, $param_ca, $param_ba, $param_tl);
            
            //"sss",

            // Set parameters
            $param_name = $name;
            $param_contact = $contact;

            $param_ab = $ab;
            $param_sl = $sl;
            $param_aa = $aa;
            $param_wr = $wr;
            $param_bc = $bc;
            $param_st = $st;
            $param_wa = $wa;
            $param_hi = $hi;
            $param_th = $th;
            $param_wk = $wk;
            $param_kn = $kn;
            $param_knc = $knc;
            $param_ca = $ca;
            $param_ba = $ba;
            $param_tl = $tl;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: successPage.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Send Required Measurements</h2>
                    <p>Please fill this form and submit.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                            <label>NAME</label>
                            <input type="text" name="name" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $name; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>CONTACT</label>
                            <textarea name="contact" class="form-control <?php echo (!empty($address_err)) ? 'is-invalid' : ''; ?>"><?php echo $contact; ?></textarea>
                            <span class="invalid-feedback"><?php echo $address_err;?></span>
                        </div>
                        <div class="form-group">
                        <h6 style="color:green">Enter the required measurements below</h6>
                            <label>ACROSS BACK</label>
                            <input type="text" name="ab" class="form-control <?php echo (!empty($salary_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ab; ?>">
                            <span class="invalid-feedback"><?php echo $salary_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>SLEEVE LENGTH(SHORTS /LONG)</label>
                            <input type="text" name="sl" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $sl; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>AROUND ARM</label>
                            <input type="text" name="aa" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $aa; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>WRIST</label>
                            <input type="text" name="wr" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $wr; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>BURST /CHEST</label>
                            <input type="text" name="bc" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $bc; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>STOMACH</label>
                            <input type="text" name="st" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $st; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>WAIST</label>
                            <input type="text" name="wa" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $wa; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>HIPS</label>
                            <input type="text" name="hi" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $hi; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>THIGHS</label>
                            <input type="text" name="th" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $th; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>WAIST-KNEE</label>
                            <input type="text" name="wk" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $wk; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>KNEE</label>
                            <input type="text" name="kn" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $kn; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>KNEE-CALF</label>
                            <input type="text" name="knc" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $knc; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>CALF</label>
                            <input type="text" name="ca" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ca; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>BASS</label>
                            <input type="text" name="ba" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $ba; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>TROUSER LENGTH</label>
                            <input type="text" name="tl" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $tl; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="index.php" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>