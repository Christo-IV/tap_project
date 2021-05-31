<?php require_once APPROOT . '/views/inc/header_list.php' ?>
<h1>Table of Histories</h1>
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

    <?php
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
                  </tr>';
    } ?>
    </tbody>
</table>
<?php require_once APPROOT . '/views/inc/footer_list.php' ?>
