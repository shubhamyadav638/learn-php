
<?php
$users=[
    [1,"user1","user1@gmail.com","noida"],
    [2,"user2","user2@gmail.com","delhi"],
    [3,"user3","user3@gmail.com","gurugram"],
    [4,"user4","user4@gmail.com","hariyana"],
    [5,"user5","user5@gmail.com","gaziyabad"],
    [6,"user6","user6@gmail.com","jaipur"],
];
echo "<table border=1 >";
for($i=0; $i<count($users); $i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]); $j++){
        echo "<td>";
        echo $users [$i][$j];
        echo "</td>";
}
 echo "</tr>";
}
echo "</table>";
?>
