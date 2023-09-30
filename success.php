<?php 
$title= "success";
require_once"includes/header.php"; ?>

<h1 class="text-center text-success">You Have Been Registered!</h1>



<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' . $_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty'];  ?>    
            </h6>
            <p class="card-text">
                Date Of Birth: <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress: <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number: <?php echo $_POST['phone'];  ?>
            </p>
    
        </div>
    </div>
<?php 
/*
if(isset($_POST['submit'])){
    //extract values from the $_POST array
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $contact = $_POST['phone'];
    $specialty = $_POST['specialty'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination = "$target_dir$contact.$ext";
    move_uploaded_file($orig_file,$destination);

    //Call function to insert and track if success or not
    $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email,$contact,$specialty,$destination);
    $specialtyName = $crud->getSpecialtyById($specialty);
    
    if($isSuccess){
        SendEmail::SendMail($email, 'Welcome to IT Conference 2019', 'You have successfully registerted for this year\'s IT Conference');
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';
    }

}*/
?>

<?php require_once"includes/footer.php"; ?>