<?php
    /**
     * This function is SUPPOSED to take an "owner" string
     * and return an array of "rides" possessed by that "owner".
     *
     * Can you fix the code below so it works as expected?
     */
    function ride($owner) {
        $rides = array('car', 'boat', 'bike');
        $arr_length = count($rides);
        for($i = 0; $i < $arr_length; $i++) {
            array_push($rides, $owner . "'s " . $rides[$i]);
        }
        return $rides;
    }
?>
<!DOCTYPE html>
<html>
  <head></head>
  <body>
    <p>
        <pre>
        <?php
            print_r(ride('Jason'));
        ?>
        </pre>
    </p>
    <p>
        <pre>
        <?php
            print_r(ride('Eric'));
        ?>
        </pre>
    </p>
  </body>
</html>