<?php require_once APPROOT.'/views/inc/header.php' ?>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <!-- form add -->
            <div class="card card-outline-secondary mt-5">
                <div class="card-header">
                    <h3 class="mb-0">Add contract</h3>
                    <p class="mt-2">Please fill the fields below to add a contract</p>
                </div>
                <div class="card-body">
                    <form class="form" role="form" method="post" action="<?php echo URLROOT.'/contracts/add'?>">
                        <div class="form-group">
                            <label for="provider">Provider</label>
                            <input type="text" class="form-control" id="provider" name="provider" placeholder="Provider" value="<?php  //echo $data['name'];?>">
                        </div>
                        <div class="form-group">
                            <label for="name">Customer Name<sup>*</sup></label>
                            <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Customer name" value="<?php  //echo $data['name'];?>" required>

                        </div>
                        <div class="form-group">
                            <label for="customer_email">Customer Email<sup>*</sup></label>
                            <input type="email" class="form-control" id="customer_email" name="customer_email" placeholder="Customer Email" value="<?php  //echo $data['name'];?>" required>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="customer_phone">Phone number<sup>*</sup></label>
                            <input type="number" class="form-control" id="customer_phone" name="customer_phone" placeholder="+372" <?php // echo $data['phone_number_err'];?> required>
                            <span class="invalid-feedback"></span>
                        </div>
                        <div class="form-group">
                            <label for="task">Task<sup>*</sup></label>
                            <input type="text" class="form-control" id="task" name="task" placeholder="Task" value="<?php  //echo $data['name'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="location">Location<sup>*</sup></label>
                            <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?php  //echo $data['name'];?>" required>
                        </div>
                        <div class="form-group">
                            <label for="money">Money</label>
                            <input type="text" class="form-control" id="money" name="money" placeholder="Money" value="<?php  //echo $data['name'];?>">
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