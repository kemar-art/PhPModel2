


<?php 
$title= "Index";
require_once "includes/header.php"; 
require_once "db/conn.php";

$results = $crud->getSpecialties();
?>


<h1 class="text-center">Register for IT Confrence</h1>
<form method="post" action="success.php" enctype="multipart/form-data">
    <div class="form-group">
        <div>
            <label for="firstname">First Name</label>
            <input required type="text" class="form-control" id="firstname" name="firstname">
        </div>
        <br/>
        <div class="form-group">
            <label for="lastname">Last Name</label>
            <input required type="text" class="form-control" id="lastname" name="lastname">
        </div>
        <br/>
        <div class="form-group">
            <label for="dob">Date Of Birth</label>
            <input type="text" class="form-control" id="dob" name="dob">
        </div>
    </div>
    <br/>
    <div class="form-group">
            <label for="specialty">Area Of Expertise</label>
            <select class="form-select" id="specialty" name="specialty">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['specialty_id'] ?>"><?php echo $r['name']; ?></option>
                <?php }?>
            </select>
    </div>
    <br/>
    <div class="form-group">
                <label for="email">Email address</label>
                <input required type="email" class="form-control" id="email"  name="email" aria-describedby="emailHelp" >
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <br/>
    <div class="form-groupform-group">
                <label for="phone">Contact Number</label>
                <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp" >
                <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
    </div>
    <br/>
    <div class="form-group">
        <input type="file" accept="image/*" class="form-control"  id="avatar" name="avatar"/>
        <small id="avatar" class="form-text text-danger">File Upload is Optional</small>
    </div>
    <br/>
    <button type="submit" name="submit" class="btn btn-primary btn-block w100">Submit</button>
</form>

<br/>
<br/>
<br/>
<br/>



<?php require_once"includes/footer.php"; ?>