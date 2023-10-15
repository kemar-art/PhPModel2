


<?php 
$title= "Index";
require_once "includes/header.php"; 
require_once "db/conn.php";

$results = $crud->getSpecialties();
?>




<h1 class="text-center">Register for IT Confrence</h1>

<form method="post" caction="success.php" enctype="multipart/form-data">
    <div class="form-group row g-3">
        <div class="form-group mb-3 col-md-6">
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>

        <div class="form-group mb-3 col-md-6">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
    </div>
    <div class="form-group row g-3">
        <div class="form-group mb-3 col-md-6">
                <label for="dob">Date Of Birth</label>
                <input type="text" class="form-control" id="dob" name="dob">
            </div>

        <div class="form-group mb-3 col-md-6">
            <label for="specialty">Area Of Expertise</label>
            <select class="form-select" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                  <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>
        </div>
    </div>
    <div class="form-group row g-3">
        <div class="form-group mb-3 col-md-6">
            <label for="email">Email address</label>
            <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mb-3 col-md-6">
            <label for="phone">Contact Number</label>
            <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
    </div>
    <div class="form-group mb-3">
        <input type="file" accept="image/*" class="form-control"  id="avatar" name="avatar"/>
        <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
    </div>

    <div class="d-grid gap-2">
        <button type="submit" name="submit" class="btn btn-primary btn-block w100">Submit</button>
    </div>
    
</form>

<br/>
<br/>
<br/>
<br/>



<?php require_once"includes/footer.php"; ?>