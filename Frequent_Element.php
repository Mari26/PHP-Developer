 
        
   <?php

    function mostFrequent($arr, $n)
    {
        sort($arr);

        $max_count = 1;
        $res = $arr[0];
        $curr_count = 1;
        for ($i = 1; $i < $n; $i++) {
            if ($arr[$i] == $arr[$i - 1])
                $curr_count++;
            else {
                if ($curr_count > $max_count) {
                    $max_count = $curr_count;
                    $res = $arr[$i - 1];
                }
                $curr_count = 1;
            }
        }

        if ($curr_count > $max_count) {
            $max_count = $curr_count;
            $res = $arr[$n - 1];
        }

        return $res;
    } 
    
    {
        $arr = array(0, 1, 6, 1, 1, 1, 9);
        echo mostFrequent($arr, sizeof($arr));
    }

    ?>