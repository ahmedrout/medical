<?php 

$conn = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE);


// getOne row by id
function getOne(string $table, string $where): array
{
  global $conn;
  
  $sql = "SELECT * FROM $table WHERE $where LIMIT 1";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    return mysqli_fetch_assoc($result);
  } else {
    return [];
  }
}

function getAll (string $table) : array
{
  global $conn;
  
  $sql = "SELECT * FROM $table";
  $result = mysqli_query($conn, $sql); 
  if (mysqli_num_rows($result) > 0) {
    return mysqli_fetch_assoc($result);
  } else {
    return [];
  }
}

function insert(string $table, string $data) : bool
{
  global $conn;

  $sql = "INSERT INTO $table $data";
echo $sql;
  if (mysqli_query($conn, $sql)) {
    return true;
  } else {
    return false;
  }
}