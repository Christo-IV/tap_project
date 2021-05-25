<?php require_once APPROOT.'/views/inc/header.php' ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- form add -->
            <div class="card card-outline-secondary mt-5">
                <div class="card-header">
                    <h3 class="mb-0">Add provider</h3>
                    <p class="mt-2">Please fill the fields below to add a provider</p>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="post" action="<?php echo URLROOT.'/providers/add'?>">
                        <div class="form-group">
                            <label for="name">Name<sup>*</sup></label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php  //echo $data['name'];?>" required>

                        </div>
                        <div class="form-group">
                            <label for="email">Email<sup>*</sup></label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php  //echo $data['name'];?>" required>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number<sup>*</sup></label>
                            <input type="number" class="form-control" id="phone_number" name="phone_number" placeholder="+372" <?php // echo $data['phone_number_err'];?> required>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="speciality">Speciality<sup>*</sup></label>
                            <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Speciality" value="<?php  //echo $data['name'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location<sup>*</sup></label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?php  //echo $data['name'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="comment">Comment</label>
                            <input type="text" class="form-control" id="comment" name="comment" placeholder="Comment" value="<?php  //echo $data['name'];?>">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-success btn-lg float-right" type="Submit">Add</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php require_once APPROOT.'/views/inc/footer.php' ?>