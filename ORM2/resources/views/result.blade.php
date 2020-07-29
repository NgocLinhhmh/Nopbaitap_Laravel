@php
    echo "<a href='/search'> <<Back</a>";
    echo "<center><table border='1px' width='50%'>";
        echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
        echo "</tr>";

        foreach($Users as $user){
            echo "<tr>";
                echo "<th>".$user->id."</th>";
                echo "<th>".$user->name."</th>";
            echo "</tr>";
        }
    echo "</table></center>";
@endphp