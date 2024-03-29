<?php
require 'conn/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo_id'])) {
    $todo_id = $_POST['todo_id'];
    // Lakukan redirect atau pindahkan ke halaman edit dengan membawa ID tugas
    header("Location: edit_todo.php?id=$todo_id");
    exit;
}
?>
