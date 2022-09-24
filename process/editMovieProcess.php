<?php
    if(isset($_POST['editMovie'])){

        include('../db.php');

        $id = $_POST['id'];
        $name = $_POST['name'];
        $genre = $_POST['genre'];
        $release = $_POST['release'];
        $season = $_POST['season'];
        
        $sql = "UPDATE movies SET name='$name', genre='$genre', release='$release', season='$season' WHERE id=$id";

        if($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Edit Movie Berhasil"); window.location = "../page/listMoviesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Edit Movie Gagal");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>