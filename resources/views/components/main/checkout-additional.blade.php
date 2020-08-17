<div class="form-row">
    <div class="form-group col-12 col-sm-12 col-md-12">
        <div class="form-check mb-3">
            <div class="custom-checkbox">
                <input class="form-check-input" type="checkbox" id="create_account">
                <span class="checkmark"></span>
                <label class="form-check-label" for="create_account">Create an account?</label>
            </div>
        </div>
        <div class="new-account-info mt-4">
            <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <p class="mb-4">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                    <label for="new_pass">Account Password <span class="text-danger">*</span></label>
                    <input type="password" class="form-control" id="new_pass">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-12 col-sm-12 col-md-12">
        <div class="form-check mb-3">
            <div class="custom-checkbox">
                <input class="form-check-input" type="checkbox" id="different_shipping">
                <span class="checkmark"></span>
                <label class="form-check-label" for="different_shipping" id="different_shipping_address">Ship to a different address?</label>
            </div>
        </div>
        <div class="ship-box-info mt-4">
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-6">
                    <label for="f_name">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="f_name" required>
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6">
                    <label for="l_name">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="l_name" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-6">
                    <label for="com_name">Company</label>
                    <input type="text" class="form-control" id="com_name">
                </div>
                <div class="form-group col-12 col-sm-12 col-md-6">
                    <label for="email_add">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="email_add" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="coun_name" class="d-block">Country <span class="text-danger">*</span></label>
                    <select name="country_id" id="coun_name" class="form-control nice-select" required="">
                        <option value=""> --- Please Select --- </option>
                        <option value="">Argentina</option>
                        <option value="">Bangladesh</option>
                        <option value="">Belgium</option>
                        <option value="">Brazil</option>
                        <option value="">Germany</option>
                        <option value="">India</option>
                        <option value="">United Kingdom</option>
                        <option value="">United States</option>
                    </select>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="street_add">Street Address</label>
                    <input type="text" class="form-control" id="street_add">
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="ap_add">Apartment, suite, unit etc. (optional)</label>
                    <input type="text" class="form-control" id="ap_add">
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="cit_name">City <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="cit_name" required>
                </div>
            </div>
            <div class="form-row mb-3">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="prov_name">Province <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="prov_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-12 col-sm-12 col-md-12">
                    <label for="zp_code">Zip Code <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" id="zp_code" required>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-12 col-sm-12 col-md-12">
        <label for="order_notes">Order Notes</label>
        <textarea class="form-control" id="order_notes" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
    </div>
</div>