@php
    echo "<a href='/search'> <<Back</a>";
    echo "<center><table border='1px' width='50%'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Class</th>";
        echo "</tr>";

        foreach($Userss as $user){
            echo "<tr>";
                echo "<th>".$user->id."</th>";
                echo "<th>".$user->name."</th>";
                echo "<th>".$user->class."</th>";
            echo "</tr>";
        }
    echo "</table></center>";
@endphp