<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'practice');
    if(!$con){
        echo "connection Failed";
    }

    $query = "select * from employees";
    $run = mysqli_query($con, $query);

        ?>

        <form action="" method="post">
<label>Employees List : </label><br><br>
        <select name="EmployeesList" onchange="this.form.submit()" required>
            <option value=''>Select Employees</option>
            <?php
            while($data = mysqli_fetch_array($run)){
                echo "<option value='$data[1]'>$data[1]</option>";
            }
            
            ?>
        </select>
        <br><br>
        <input type="submit" value="Submit" name='submitBtn'>
        </form>

        <?php
        if(isset($_POST['EmployeesList'])){
            $employee = $_POST['EmployeesList'];
            echo "<br> You Have Selected  : ".$employee;
        }
        ?>
</body>
</html>