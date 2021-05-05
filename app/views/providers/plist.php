<?php require_once APPROOT.'/views/inc/header.php' ?>
    <table class="providers-table">
        <tr>
            <th class="table-head">speciality</th>
            <th class="table-head">Name</th>
            <th class="table-head">Email</th>
            <th class="table-head">Phone number</th>
            <th class="table-head">comment</th>
        </tr>
        <?php foreach($data as $provider) {
            echo '<tr>
                    <td class="table-data">'.$provider->speciality.'</td>
                    <td class="table-data">'.$provider->name.'</td>
                    <td class="table-data">'.$provider->email.'</td>
                    <td class="table-data">'.$provider->phone_number.'</td>
                    <td class="table-data">'.$provider->comment.'</td>
                  </tr>';
        }?>
    </table>
<?php require_once APPROOT.'/views/inc/footer.php' ?>