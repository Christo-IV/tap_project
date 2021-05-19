<?php require_once APPROOT . '/views/inc/header.php' ?>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Speciality</th>
            <th scope="col">Phone num.</th>
            <th scope="col">Location</th>
            <th scope="col">Comment</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <button type="button" class="btn btn-success">Add new</button>
        </tr>
<?php foreach ($data as $provider) {
    echo '<tr>
                  <th id="' . $provider->id . '">' . $provider->id . '</th>
                  <td>' . $provider->speciality . '</td>
                  <td>' . $provider->name . '</td>
                  <td>' . $provider->email . '</td>
                  <td>' . $provider->phone_number . '</td>
                  <td>' . $provider->location . '</td>
                  <td>' . $provider->comment . '</td>
                  <form method="post">
                    <td><input type="submit" name="submit" class="btn btn-danger" value="'.$provider->id.'"></td>
                  </form>
                  </tr>';
        } ?>
        </tbody>
    </table>
<?php require_once APPROOT . '/views/inc/footer.php' ?>