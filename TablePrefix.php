<?php
    
    
// Prefix
$prefix = 'php_mvc_'; //

// SQL statement
$sql = 'SELECT * FROM Question WHERE id = 1;';

// Statement to look for
$statement = 'FROM ';


if (strpos($sql, $statement) == false) {
    die("Error: SQL do not contain the statement!");

} else {

    $sql_pieces = explode($statement, $sql);

    $count = count($sql_pieces);
    $i = 0;

    foreach ($sql_pieces as $sql_piece) {
        $i++;
        if ($i == $count) {
            $sql_final .= $sql_piece;
    
        } else {
            $sql_final .= $sql_piece . $statement . $prefix;
    }
}

echo $sql_final;
}

?>