<?php 
class crud{
    private $db;

    function __construct($conn){
        $this->db = $conn;
    }

    public function insertAttendees($fname, $lname, $dob, $email,$contact,$specialty){
        try {
            // define sql statement to be executed
            $sql = "INSERT INTO attendee (firstname,lastname,dateofbirth,emailadress,contactnumber,specialty_id) VALUES (:fname,:lname,:dob,:email,:contact,:specialty)";
            //prepare the sql statement for execution
            $stmt = $this->db->prepare($sql);
            // bind all placeholders to the actual values
            $stmt->bindparam(':fname',$fname);
            $stmt->bindparam(':lname',$lname);
            $stmt->bindparam(':dob',$dob);
            $stmt->bindparam(':email',$email);
            $stmt->bindparam(':contact',$contact);
            $stmt->bindparam(':specialty',$specialty);
            //$stmt->bindparam(':avatar_path',$avatar_path);

            $stmt->execute();
            return true;
    
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getAttendees(){
        try{
            $sql = "SELECT * FROM `attendee` a inner join specialties s on a.specialty_id = s.specialty_id";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
       }
       
    }

    public function getSpecialties(){
        try{
            $sql = "SELECT * FROM `specialties`";
            $result = $this->db->query($sql);
            return $result;
        }catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
        
    }

    
}
?>