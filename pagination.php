<?php
    $results_on_page = 5;

    $sql_global = "SELECT * FROM pracownicy";
    $result_global = $mysqli->query($sql);

    if(!isset($_GET['page'])) {
        $page = 1;
    } else {
        $page = $_GET['page'];
    }

    $sql = "SELECT * FROM pracownicy LIMIT ".$start_limit.','.$results_on_page;
    echo '<li>'.$sql;

    $result = $mysqli->query($sql);
?>

<table class="table">

    <tr>
        <th>ID</th>
        <th>Imie</th>
        <th>Data urodzenia</th>
    </tr>

    <?php
        while($row = $result->fetch_assoc()) {
            ?>
                
            <?php
        }
    ?>

</table>

<?php



?>