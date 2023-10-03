<?
    include $_SERVER['DOCUMENT_ROOT'].'/releases.php';
    $coverbuttonvisible = 'none';
    foreach (/*array_slice(*/$releases_massive/*, 9)*/ as $release_array) {
        echo '<a class="release-button" target="_blank" style="background-position: 0 '.$release_array[bg_position].'%; background-image: url('.$release_array[picture_code].');" href="https://band.link/songlywings_'.$release_array[id].'">';
            echo '<img src="'.$release_array[picture_code].'">';
            echo '<div class="release-button-text"><div class="rbt-opacity"><text>';
            if ($release_array[artist] == "") {
                echo "";
            } else {
                echo '<b>'.$release_array[artist].'</b><br>';
            };
            echo $release_array[track_name];
        echo'</text></div></div></a>';
    };
?>