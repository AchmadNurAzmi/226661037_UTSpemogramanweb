<?php
require 'conn/conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['todo_id'])) {
    $todo_id = $_POST['todo_id'];
    // Lakukan query DELETE atau panggil fungsi delete yang sesuai dalam file conn/conn.php
    $conn->query("DELETE FROM todos WHERE id = $todo_id");
    // Redirect kembali ke halaman utama atau halaman yang sesuai
    header("Location: index.php");
    exit;
}
?>
