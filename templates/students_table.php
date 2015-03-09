<div id ='students-table-wrap'>
    <table class="table table-bordered table-hover table-striped">
        <thead>
        <tr>
            <th>Number</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Date of Birth</th>
            <th>GPA</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($vars as $row) {
            echo '<tr><td>'.$row['ID'].'</td><td>'.$row['name'].'</td><td>'.$row['last_name'].'</td><td>'.$row['date_of_birth'].'</td><td>'.$row['gpa'].'</td></tr>';
        }
        ?>
        </tbody>
    </table>
</div>