


<?php 
$title= "Index";
require_once"includes/header.php"; ?>


<h1 class="text-center">Register for IT Confrence</h1>
<form>
<div class="form-group">
    <div>
        <label for="firstname">First Name</label>
        <input required type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="form-group">
        <label for="lastname">Last Name</label>
        <input required type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="form-group">
        <label for="dob">Date Of Birth</label>
        <input type="text" class="form-control" id="dob" name="dob">
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>




<?php require_once"includes/footer.php"; ?>