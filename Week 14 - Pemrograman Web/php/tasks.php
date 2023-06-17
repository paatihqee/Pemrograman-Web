<?php
require_once 'config.php';

// Fungsi untuk menampilkan semua tugas
function getTasks() {
    global $conn;
    $sql = "SELECT * FROM tasks";
    $result = mysqli_query($conn, $sql);
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tasks;
}


// Fungsi untuk menambahkan tugas baru
function addTask($title, $description) {
    global $conn;
    $sql = "INSERT INTO tasks (title, description) VALUES ('$title', '$description')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk mengupdate tugas
function updateTask($id, $title, $description) {
    global $conn;
    $sql = "UPDATE tasks SET title='$title', description='$description' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Fungsi untuk menghapus tugas
function deleteTask($id) {
    global $conn;
    $sql = "DELETE FROM tasks WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Mengambil daftar tugas
$tasks = getTasks();

// Menampilkan daftar tugas
foreach ($tasks as $task) {
    echo "<div class='task'>";
    echo "<span class='task-title'>" . $task['title'] . "</span>";
    echo "<span class='task-description'>" . $task['description'] . "</span>";
    echo "</div>";
}

// Fungsi untuk mendapatkan tugas berdasarkan statusnya
function getTasksByStatus($status) {
    global $conn;
    $sql = "SELECT * FROM tasks WHERE status = '$status'";
    $result = mysqli_query($conn, $sql);
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $tasks;
}

?>
