<?php require_once APPROOT . '/views/inc/header_list.php' ?>
<table id="list" class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Customer Name</th>
        <th scope="col">Provider</th>
        <th scope="col">Customer Email</th>
        <th scope="col">Customer Phone</th>
        <th scope="col">Location</th>
        <th scope="col">Task</th>
        <th scope="col">Money</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <a href="<?php echo URLROOT; ?>/contracts/add" type="button" class="btn btn-success">Add new</a>
    </tr>
    <tr>
        <a href="<?php echo URLROOT; ?>/contracts/history" type="button" class="btn btn-success">History</a>
    </tr>

    <?php
    function cmp($a, $b) {
        /*
        echo 'this is A <br>';
        print_r($a);
        echo '<br>';
        echo 'this is B <br>';
        print_r($b);
        return strcmp($a->provider_id, $b->provider_id);*/
        //print_r(func_get_args());
        return strcmp($a->location, $b->location);
    }
    /*
    echo 'Unsorted:';
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    */

    $sorted_data = usort($data, function($a, $b)
    {
        /*
        echo 'Comparing '.$a->task.' and '.$b->task.'<br>';
        echo $result.'<br>';
        */
        $result = -1 * strcmp(strtoupper($a->task), strtoupper($b->task));
        return $result;
    });

    /*
    echo 'Sorted:';
    echo '<pre>';
    print_r($sorted_data);
    //print_r($data);
    echo '</pre>';
*/
    foreach ($data as $contract) {
        echo '<tr>
                  <th id="' . $contract->contract_id . '">' . $contract->contract_id . '</th>
                  <td>' . $contract->customer_name . '</td>
                  <td>' . $contract->provider_id . '</td>
                  <td>' . $contract->customer_email . '</td>
                  <td>' . $contract->customer_phone . '</td>
                  <td>' . $contract->location . '</td>
                  <td>' . $contract->task . '</td>
                  <td>' . $contract->money . ' €</td>
                  <form method="post">
                    <td><button type="submit" name="contract" value="'.$contract->contract_id.'" class="btn btn-danger">&#9747;</button></td>
                  </form>
                  </tr>';
    } ?>
    </tbody>
</table>
<?php require_once APPROOT . '/views/inc/footer_list.php' ?>
