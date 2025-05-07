<table border="1"  cellspacing="0" cellpadding="2" >
    <thead>
    <tr>    
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Registrating Date</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($source as $row){
                echo "<tr>";
                echo '<td>'.$row['name'].'</td>';
                echo "<td>".$row['email'].'</td>';
                echo "<td>".$row['status'].'</td>';
                echo "<td>".$row['regdate'].'</td>';
                echo "</tr>";
            
            }
        ?>
    </tbody>
</table>
<style>
    .rawr{
        color: red;
    }
    td{
        color: orange;
    }
</style>