<?php

class Model{

   
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'fujitsu_exam';
    private $conn;

    function __construct(){
        $this->conn = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        if($this->conn->connect_error){
            echo 'Connection failed';
        } else {
            return $this->conn;
        }
    } // constructor end
    
    

    //function for add employee
        public function insertEmployee($post)
        {
         
            $fname = $post['fname'];
            $position = $post['position'];
            $dept= $post['dept'];
            $status = $post['status'];
            if(empty($fname) && empty($position) && empty($dept) && empty($status))
            {
                header("location:index.php?msg=Required all Fields");
                
            } else {
            $sql = "INSERT INTO employee_info (emp_fname,emp_position,emp_department,emp_status) 
            VALUES ('$fname','$position','$dept','$status')";
            $result = $this->conn->query($sql);
            if($result)
            {
                header("location:index.php?msg1=Employee Data Inserted");
            } else {
                echo "Error".$sql."<br>".$this->conn->error;
            }
             }

        }// insert employee details  function ended

            public function deleteRecord($delid){

                $sql = "DELETE FROM employee_info WHERE emp_id = '$delid'";
                $result = $this->conn->query($sql);

                if($result)
                {
                    header("location:index.php?msg1=Employee Data Deleted Successfully");
                } else {
                    echo "Error".$sql."<br>".$this->conn->error;
                }


            }// end of dleete record
     

            //function for edit employee
            public function updateEmployee($post)
            {
             
                $fname = $post['fname'];
                $position = $post['position'];
                $dept= $post['dept'];
                $status = $post['status'];
                $id = $post['hidden'];  
                if(empty($fname) && empty($position) && empty($dept) && empty($status))
                {
                    header("location:index.php?msg=Required all Fields");
                    
                } else {
                $sql = "UPDATE  employee_info set emp_fname = '$fname', emp_position ='$position', emp_department = '$dept',emp_status = '$status' where emp_id = '$id'";
                $result = $this->conn->query($sql);
                if($result)
                {
                    header("location:index.php?msg2=Employee Data Updated Successfully");
                } else {
                    echo "Error".$sql."<br>".$this->conn->error;
                }
                 }
    
            }// insert employee details  function ended



        public function displayRecord()
        {
            $sql = "SELECT * FROM employee_info ";
            $result = $this->conn->query($sql);
            if($result->num_rows>0){
                while($row = $result->fetch_assoc()){
                        $data[] = $row;
                }//while ended
                return $data;
            }// if ended
        }// display function record ended

        public function displayRecordById($editId)
        {
            $sql = "SELECT * FROM employee_info where emp_id = '$editId'";
            $result = $this->conn->query($sql);
            if($result->num_rows==1)
            {
                $row = $result->fetch_assoc();
                return $row;
            }//if close
        }

} // class close

?>