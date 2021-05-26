<?php require_once APPROOT . '/views/inc/header.php' ?>
<table class="table">
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
    <?php foreach ($data as $contract) {
        echo '<tr>
                  <th id="' . $contract->contract_id . '">' . $contract->contract_id . '</th>
                  <td>' . $contract->customer_name . '</td>
                  <td>' . $contract->provider_id . '</td>
                  <td>' . $contract->customer_email . '</td>
                  <td>' . $contract->customer_phone . '</td>
                  <td>' . $contract->location . '</td>
                  <td>' . $contract->task . '</td>
                  <td>' . $contract->money . '</td>
                  <form method="post">
                    <td><button type="submit" name="contract" value="'.$contract->contract_id.'" class="btn btn-danger">&#9747;</button></td>
                  </form>
                  </tr>';
    } ?>
    </tbody>
</table>
<?php require_once APPROOT . '/views/inc/footer.php' ?>
