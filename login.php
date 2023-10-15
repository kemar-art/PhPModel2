<?php
    $title = 'User Login'; 

    require_once 'includes/header.php'; 
    require_once 'db/conn.php'; 
    
    //If data was submitted via a form POST request, then...
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = strtolower(trim($_POST['username']));
        $password = $_POST['password'];
        $new_password = md5($password.$username);

        $result = $users->getUser($username,$new_password);
        if(!$result){
            echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
        }else{
            $_SESSION['username'] = $username;
            $_SESSION['userid'] = $result['id'];
            header("Location: viewrecords.php");
        }

    }
?>

<h1 class="text-center"><?php echo $title ?> </h1>
   
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="align-items-center justify-content-center w-50 mx-auto">
            <div class="mb-3 align-items-center">
                <llabel for="username">Username: * </label>
                <input ttype="text" name="username" class="form-control" id="username" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 align-items-center">
                <label for="password">Password: * </label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <input type="submit" value="Login" class="btn btn-primary btn-block"><br/>
        </div>
    </form>
    

<?php include_once 'includes/footer.php'?>