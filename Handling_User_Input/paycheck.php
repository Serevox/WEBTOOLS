<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paycheck</title>
    <style>
        body {
            background: #000;
            color: white;
            text-align: center;
            
        }
    </style>
</head>
<body>
    <?php
        if(isset($_POST['submit']))
        {
            $emp_name = $_POST['emp_name'];
            $hrsworked = $_POST['hrsworked'];
            $empType = $_POST['empType'];

            if($emp_name==NULL OR $hrsworked==NULL OR $empType==NULL)
            {
                echo "Please do not leave a black space, Go back an fill up the form. <br/>";
                echo "<input type='button' value='Go Back' onclick='history.back(-1)'/>";
            }

            else
            {
                if ($hrsworked <= 41)
                {
                    echo "WEEKLY PAYSLIP";
                    echo "<br/>Employee's Name: ". $emp_name;
                    echo "<br/>Hours Worked   : ". $hrsworked;

                    if ($empType == "Regregular") 
                    {
                        $rate = 87.58;
                    }

                    elseif ($empType == "probationary") 
                    {
                        $rate = 59.84;
                    }

                        $gpay = $hrsworked * $rate;
                        echo "<br/>Grosspay       : PhP ". $gpay;
                }
                

            else
            {
                echo "WEEKLY PAYSLIP";
                echo "<br/>Employee's Name: ". $emp_name;
                echo "<br/>Hours Worked   : ". $hrsworked;

                if ($empType == "Regregular")
                {
                    $rate = 87.58;
                }

                elseif ($empType == "probationary") 
                {                                         
                    $rate = 59.84;
                }            
            
                $overtime = ($hrsworked - 40) * $rate;
                $total = ($overtime / 2) + $overtime;
                $regular = $hrsworked * $rate - $overtime;
                $gpay = $oTotal + $regular;
                
                            
                echo "<br/>Regular        : PhP ". $regular;
                echo "<br/>Overtime       : PhP ". $total;
                echo "<br/>Grosspay       : PhP ". $grosspay;

            }
            }
        }            
    ?>
</body>
</html>