<?php

    $connect = mysqli_connect("localhost", "root", "", "findit2");
    $output = '';
    $sql = "SELECT * FROM employees WHERE fname LIKE '%".$_POST["search"]."%'";
    $result = mysqli_query($connect, $sql);
        if(mysqli_num_rows($result) > 0)
        {
            $output .= '<h4 align="center">Search Result</h4>';
            $output .= '<div class="table-responsive"> 
            <div class="table table bordered">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th> 
                    </tr>';
            while($row = msqli_fetch_array($result))
            {
                $output .= '
                    <tr>
                        <td>'.$row["fname"].'</td>
                        <td>'.$row["lname"].'</td>
                        <td>'.$row["email"].'</td>
                    
                    </tr>
                ';
            }
            echo $output;
        }
           else
           {
               echo 'Data Not Found';
           }

?>
