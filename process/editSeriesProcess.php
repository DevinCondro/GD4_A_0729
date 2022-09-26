<?php
    if(isset($_POST['editSeries'])){


        include('../db.php');

        $id = $_POST['id'];
        $genre = $_POST['genre'];
        $name = $_POST['name'];
        $realese = $_POST['realease'];
        $season = $_POST['season'];
        $episode = $_POST['episode'];
        $synopsis = $_POST['synopsis'];
        
        $sql = "UPDATE series SET genre='$genre', name='$name', realease='$realese', season='$season', episode='$episode', synopsis='$synopsis' WHERE id=$id";

        if ($con->query($sql) === TRUE) {
          echo
                '<script>
                alert("Edit Series Success"); window.location = "../page/listSeriesPage.php"
                </script>';
        } else {
          echo
                  '<script>
                  alert("Edit Series Failed");
                  </script>';
        }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>