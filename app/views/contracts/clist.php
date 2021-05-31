<?php require_once APPROOT . '/views/inc/header.php' ?>
<table id="list" class="table">
    <thead>
    <tr>
        <form method="POST">
            <th scope="col"><button name="header" value="contract_id" id="table-header-btn" type="submit">#</button></th>
            <th scope="col"><button name="header" value="customer_name" id="table-header-btn" type="submit">Customer Name</button></th>
            <th scope="col"><button name="header" value="provider" id="table-header-btn" type="submit">Provider</button></th>
            <th scope="col"><button name="header" value="customer_email" id="table-header-btn" type="submit">Customer Email</button></th>
            <th scope="col"><button name="header" value="customer_phone" id="table-header-btn" type="submit">Customer Phone</button></th>
            <th scope="col"><button name="header" value="location" id="table-header-btn" type="submit">location</button></th>
            <th scope="col"><button name="header" value="task" id="table-header-btn" type="submit">Task</button></th>
            <th scope="col"><button name="header" value="money" id="table-header-btn" type="submit">Money</button></th>
        </form>
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
    /*
    function cmp($a, $b)
    {
        /*
        echo 'this is A <br>';
        print_r($a);
        echo '<br>';
        echo 'this is B <br>';
        print_r($b);
        return strcmp($a->provider_id, $b->provider_id);
        //print_r(func_get_args());
        return strcmp($a->location, $b->location);
    }
    */

    /*
    echo 'Unsorted:';
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    */
/*
    usort($data, function ($a, $b) {

        echo 'Comparing '.$a->task.' and '.$b->task.'<br>';
        echo $result.'<br>';

        $result = -1 * strcmp(strtoupper($a->task), strtoupper($b->task));
        return $result;
    });
*/
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
                    <td><button type="submit" name="remove" value="' . $contract->contract_id . '" class="btn btn-danger">&#9747;</button></td>
                  </form>
                  </tr>';
    } ?>
    </tbody>
</table>
<?php require_once APPROOT . '/views/inc/footer.php' ?>
