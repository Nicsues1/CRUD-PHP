<?php include('header.php');?>
<?php include('dbcon.php');?>
        <h2>ALL STUDENTS</h2>
    <table class="table table-hover table-boarded table-striped">
        <thread>
            <tr> 
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>age</th>
            </tr>
        </thread>
        <tbody>
        <?php
        $query = "select * from 'students";

        $result = mysqli_query($connection,$query);
        ?>
            <tr>
                <td>3</td>
                <td>Jude</td>
                <td>Jariol</td>
                <td>19</td>
            </tr> 
            <tr>
                <td>5</td>
                <td>marianney</td>
                <td>jamero</td>
                <td>20</td>
            </tr>
        </tbody>
    </table>
    <?php include('footer.php');?>