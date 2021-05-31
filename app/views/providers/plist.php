<?php require_once APPROOT . '/views/inc/header.php' ?>
    <table class="table">
        <thead>
        <tr>
            <form method="POST">
                <th scope="col">
                    <button
                            name="header"
                            value="id"
                            id="table-header-btn"
                            type="submit">#
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="name"
                            id="table-header-btn"
                            type="submit">Name
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="email"
                            id="table-header-btn"
                            type="submit">Email
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="speciality"
                            id="table-header-btn"
                            type="submit">Speciality
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="phone_number"
                            id="table-header-btn"
                            type="submit">Phone Number
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="location"
                            id="table-header-btn"
                            type="submit">Location
                    </button>
                </th>
                <th scope="col">
                    <button
                            name="header"
                            value="comment"
                            id="table-header-btn"
                            type="submit">Comment
                    </button>
                </th>
            </form>
        </tr>
        </thead>
        <tbody>

        <!-- Button for adding new providers -->
        <tr>
            <a
                    href="<?php echo URLROOT; ?>/providers/add"
                    type="button"
                    class="btn btn-success">Add new
            </a>
        </tr>

<?php foreach ($data as $provider) {
    echo '<tr>
                  <th id="' . $provider->id . '">' . $provider->id . '</th>
                  <td>' . $provider->name . '</td>
                  <td>' . $provider->email . '</td>
                  <td>' . $provider->speciality . '</td>
                  <td>' . $provider->phone_number . '</td>
                  <td>' . $provider->location . '</td>
                  <td>' . $provider->comment . '</td>
                  <form method="post">
                    <td><button type="submit" name="remove" value="'.$provider->id.'" class="btn btn-danger">&#9747;</button></td>
                  </form>
                  </tr>';
        } ?>
        </tbody>
    </table>
<?php require_once APPROOT . '/views/inc/footer.php' ?>