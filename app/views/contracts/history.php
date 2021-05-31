<?php require_once APPROOT . '/views/inc/header.php' ?>
<table id="list" class="table">
    <thead>
    <tr>
        <form method="POST">
            <th scope="col">
                <button
                        name="header"
                        value="customer_name"
                        id="table-header-btn"
                        type="submit">Customer Name
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="provider_id"
                        id="table-header-btn"
                        type="submit">Provider
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="customer_email"
                        id="table-header-btn"
                        type="submit">Customer Email
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="customer_phone"
                        id="table-header-btn"
                        type="submit">Customer Phone
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="location"
                        id="table-header-btn"
                        type="submit">location
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="task"
                        id="table-header-btn"
                        type="submit">Task
                </button>
            </th>
            <th scope="col">
                <button
                        name="header"
                        value="money"
                        id="table-header-btn"
                        type="submit">Money
                </button>
            </th>
        </form>
    </tr>
    </thead>
    <tbody>

    <!-- Inserting data into the table -->
    <?php
    foreach ($data as $contract) {
        echo '<tr>
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
<?php require_once APPROOT . '/views/inc/footer.php' ?>
