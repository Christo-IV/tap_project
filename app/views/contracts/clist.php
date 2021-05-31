<?php require_once APPROOT . '/views/inc/header.php' ?>
<table id="list" class="table">
    <thead>
    <tr>
        <form method="POST">
            <th scope="col">
                <button
                        name="header"
                        value="contract_id"
                        id="table-header-btn"
                        type="submit">#
                </button>
            </th>
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

    <!-- Button for adding new contracts -->
    <tr>
        <a
                href="<?php echo URLROOT; ?>/contracts/add"
                type="button"
                class="btn btn-success">Add new
        </a>
    </tr>

    <!-- Button for viewing the table's history / log -->
    <tr>
        <a
                href="<?php echo URLROOT; ?>/contracts/history"
                type="button"
                class="btn btn-success">History
        </a>
    </tr>

    <!-- Inserting data into the table -->
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
                  <form method="post">
                    <td><button type="submit" name="remove" value="' . $contract->contract_id . '" class="btn btn-danger">&#9747;</button></td>
                  </form>
                  </tr>';
    } ?>
    </tbody>
</table>
<?php require_once APPROOT . '/views/inc/footer.php' ?>
