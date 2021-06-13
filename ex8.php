<html>
<body>
<center>
     <h2>Student Registration</h2>
    <form method="post">
        <table border="1">
            <tr>
                <td><label>First Name</label></td>
                <td><input type="text" name="fname" placeholder="First Name" required /></td>
            </tr>
            <tr>
                <td><label>Middle Name</label></td>
                <td><input type="text" name="mname"  placeholder="Middle Name" required/></td>
            </tr>
            <tr>
                <td><label>Last Name</label></td>
                <td><input type="text" name="lname"  placeholder="Last Name" required/></td>
            </tr>
            <tr>
                <td><label>Photo</label></td>
                <td><input type="file" name="sphoto"  placeholder="Photo" required/></td>
            </tr>
            <tr>
                <td><label>Father Name</label></td>
                <td><input type="text" name="fathern"  placeholder="Father Name" required/></td>
            </tr>
            <tr>
            <tr>
                <td><label>Address</label></td>
                <td><textarea name="addr" placeholder="Address" required></textarea></td>
            </tr>
            <tr>
                <td><label>Contact Number</label></td>
                <td><input type="number" name="phone"  placeholder="Contact Number" required/></td>
            </tr>
            <tr>
                <td><label>Email-Id</label></td>
                <td><input type="email" name="email"  placeholder="Email Id" required/></td>
            </tr>
            <tr>
                <td><label>Date of Birth</label></td>
                <td><input type="date" name="dob" required/></td>
            </tr>
            <tr>
                <td><label>Gender</label></td>
                <td><input type="radio" name="gender"  value="male" checked required/>Male
                    <input type="radio" name="gender"  value="female"/>Female</td>
            </tr>
            <tr>
                <td><label>Degree Percent</label></td>
                <td><input type="number" name="degree"  placeholder="Percentage in degree" required/></td>
            </tr>
            <tr>
                <td><label>Hobbies</label></td>
                <td>
                	<input type="checkbox" name="hobby"  value="sports" required/>Sports
                    <input type="checkbox" name="hobby"  value="music"/>Music
                    <input type="checkbox" name="hobby"  value="dance"/>Dance
                </td>
            </tr>
            <tr>
                <td><label>Institution Studied</label></td>
                <td><input type="text" name="colname"  placeholder="Collge Studied" required/></td>
            </tr>
            <tr>
                <td><label>Course Studied</label></td>
                <td>
                	<input type="radio" name="course"  value="BCA" checked required/>BCA
                    <input type="radio" name="course"  value="BSc"/>BSc
                    <input type="radio" name="course"  value="BCom"/>BCom
                    <input type="radio" name="course"  value="BE"/>B.E
                </td>
            </tr>
            <tr>
                <td><label>Course Offered</label></td>
                <td>
                	<select name="opt" required>
                		<option value="MCA">MCA</option>
	                    <option value="MBA">MBA</option>
	                    <option value="MTech">MTech</option>
	                    <option value="MSc">MSc</option>
                	</select>
                </td>
            </tr>
            <tr> 
               <td colspan="2"><center><input type="submit" name="submit" value="Submit"/></center></td>
            </tr>
        </table>
    </form>

 
<?php   
    if(isset($_POST['submit']))  
    {   
        $opt =$_POST['opt'];
        $cors = $_POST['course'];
        $ug = $_POST['degree'];

        if( $opt == 'MCA' or $opt == 'MTech'){
            if( $ug >= 70){
                if($opt =='MTech' and $cors == 'B.E'){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be B.E "); </script>';
                }
                if($opt =='MCA' and ($cors == 'BCA' or $cors == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be > 70%"); </script>';
            }
        }
        elseif( $opt == 'MBA'){
            if( $ug >= 60){
                echo '<script>alert("Registration Successful "); </script>';
            }
            else{
                echo '<script>alert("Percentage in Degree should be > 60%"); </script>';
            }
        }
        else{
            if( $ug >= 40){
                if($opt =='MSc' and ($cors == 'BCA' or $cors == 'BSc')){                    
                echo '<script>alert("Registration Successful ");</script>';
                }
                else{                    
                echo '<script>alert("Course Studied should be BCA or BSc "); </script>';
                }
            }
            else{
                echo '<script>alert("Percentage in Degree should be > 40%"); </script>';
            }
        }
    }     
?> 
</center>
</body>
</html>