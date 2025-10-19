<?php

namespace Code\Html;

class Table
{
    public $title;
    public $rows;
    public function message()
    {
        echo "<p>Table '{$this->title}' has {$this->rows} rows.</p>";
    }
}

$table = new Table();
$table->title = "New table title";
$table->rows = 10;
?>
<!DOCTYPE html>
<html>

<body>

    <?php
    $table->message();
    ?>

</body>

</html>