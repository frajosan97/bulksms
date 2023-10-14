<form action="" method="post" class="registerUser">
    <h3 class="mb-3">Register / Create an account</h3>
    <div class="card border-0 shadow">
        <div class="card-header bg-transparent border-0">
            <small class="text-muted"><i>Fields marked with <span class="text-danger">*</span> are required.</i></small>
        </div>
        <hr class="dividerDiv1 my-1">
        <div class="card-body">
            <input type="hidden" name="client_key" value="<?= time() ?>">
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group my-1">
                        <label for="account_type"><span class="text-danger">*</span> Account Type</label>
                        <select name="account_type" id="account_type" class="form-control" required>
                            <option value="">--Select Account Type--</option>
                            <option value="normal" selected>Normal Client</option>
                            <option value="reseller">Reseller Account</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group my-1">
                        <label for="business_name"><span class="text-danger">*</span> Business name</label>
                        <input id="business_name" type="text" class="form-control" name="business_name" placeholder="Company/institution business name" required />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group my-1">
                        <label for="business_phone"><span class="text-danger">*</span> Phone Number</label>
                        <input id="business_phone" type="tel" class="form-control" name="business_phone" placeholder="Company/institution phone number" required />
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="form-group my-1">
                        <label for="business_address"><span class="text-danger">*</span> Physical Address</label>
                        <input id="business_address" type="text" class="form-control" name="business_address" placeholder="Company/institution Physical Address" required />
                    </div>
                </div>
                <div class="col-sm-12">
                    <h6 class="bg-light rounded p-1 mb-0">Account Manager Information</h6>
                    <div class="form-group my-1">
                        <label for="username"><span class="text-danger">*</span> Username</label>
                        <input id="username" type="text" class="form-control" name="username" placeholder="Username used for login" required />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group my-1">
                        <label for="firstName"><span class="text-danger">*</span> First Name</label>
                        <input name="first_name" id="firstName" class="form-control" type="text" placeholder="User's first name e.g Nixon" required />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group my-1">
                        <label for="lastName"> Last Name</label>
                        <input name="last_name" id="lastName" class="form-control" type="text" placeholder="User's last name" />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group my-1">
                        <label for="phoneNumber"><span class="text-danger">*</span> Phone Number</label>
                        <input name="phone_number" id="phoneNumber" class="form-control" type="tel" placeholder="Personal phone number" required />
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="form-group my-1">
                        <label for="email"> <span class="text-danger">*</span> Email Address</label>
                        <input name="email" id="email" class="form-control" type="email" placeholder="Personal email address" required />
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-between bg-transparent border-0">
            <button type="reset" class="btn btn-custom"><i class="fas fa-history"></i> Reset Input</button>
            <button type="submit" class="btn btn-custom"><i class="fas fa-edit"></i> Register</button>
        </div>
    </div>
</form>