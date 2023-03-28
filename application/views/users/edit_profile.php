<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            

        <?= form_open('user_home/edit_profile/'.$this->uri->segment(3)) ?>
        <div id="form-header">Edit Your Info and Password</div><br>

        <div class="form-group">
            <label for="name">Name</label>
            <?= form_input(['name' => 'name', 'placeholder' => 'Your name...', 'value' => set_value('name', $user_details->name), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('name') ?></div>
        </div>
        <div class="form-group">
            <label for="contact">Contact</label>
            <?= form_input(['name' => 'contact', 'placeholder' => 'Phone number...', 'value' => set_value('contact', $user_details->contact), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('contact') ?></div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <?= form_password(['name' => 'password', 'placeholder' => 'Password...', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('password') ?></div>
            </div>
            <div class="form-group col-md-6">
                <label for="repassword">Confirm Password</label>
                <?= form_password(['name' => 'repassword', 'placeholder' => 'Re-type Password...', 'class' => 'form-control']) ?>

                <div class="text-danger form-error"><?= form_error('repassword') ?></div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <?= form_input(['name' => 'address', 'placeholder' => 'Your address...', 'value' => set_value('address', $user_details->address), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('address') ?></div>
        </div>
        <div class="form-group">
            <label for="city">City</label>
            <?= form_input(['name' => 'city', 'placeholder' => 'Your city...', 'value' => set_value('city', $user_details->city), 'class' => 'form-control']) ?>

            <div class="text-danger form-error"><?= form_error('city') ?></div>
        </div>


        <div class="form-group">
            <?= form_submit(['name' => 'submit', 'value' => 'Update', 'class' => 'btn btn-primary btn-sm my-btn']) ?>
            <?= form_reset(['name' => 'reset', 'value' => 'Reset', 'class' => 'btn btn-danger btn-sm my-btn-res']) ?>
        </div>

        <?= form_close() ?>
    </div>
</div>
</div>
<style>
    .form-control {
        border: none;
        border-radius: 0;
        background-color: #f1f1f1;
        color: #333;
        font-size: 1rem;
        font-weight: 400;
        padding: 0.375rem 0.75rem;
        margin-bottom: 1rem;
    }

    .form-control:focus {
        box-shadow: none;
    }

  #form-header {
        font-size: 1.5rem;
        font-weight: 700;
    }
    
    .form-group {
        margin-bottom: 1.5rem;
    }
    
    .form-control {
        width: 100%;
        padding: 0.5rem;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        font-size: 1rem;
        font-weight: 400;
        color: #333;
        background-color: transparent;
        transition: border-bottom-color 0.3s ease-in-out;
    }
    
    .form-control:focus {
        border-bottom-color: #007bff;
    }
    
    .form-error {
        margin-top: 0.25rem;
        font-size: 0.8rem;
        font-weight: 400;
        color: #dc3545;
    }
    
    .my-btn {
        margin-right: 1rem;
    }
    
    .my-btn-res {
        margin-right: 1rem;
    }
</style>

<br>
