<?php include 'header.php'; ?>

<!--javascript Imports -->
<script type="text/javascript" src="../controller/home.js"></script>

<div class="container">
    <br><br>
    <h3 class="header center orange-text">Complete your registration</h3>
    <div class="row center">
        <a href="#div-completion" id="btn-completion" class="btn-large waves-effect waves-light orange modal-trigger">Fill-up
            Registration</a>
    </div>
    <br><br>
    <!-- Modal for Login Form -->
    <div class="modal col s3" id="div-completion">
        <div class="modal-content">
            <h4 class="header center orange-text">Personal Profile</h4>
            <div class="input-field">
                <input placeholder="Enter your firstname" id="input-firstname" type="text" class="validate">
                <label for="input-firstname">Given Name</label>
            </div>
            <div class="input-field">
                <input placeholder="Enter your middle name" id="input-middlename" type="text" class="validate">
                <label for="input-middlename">Middle Initial</label>
            </div>
            <div class="input-field">
                <input placeholder="Enter your lastname" id="input-lastname" type="text" class="validate">
                <label for="input-lastname">Surname</label>
            </div>
            <div class="input-field">
                <select id="input-gender">
                    <option value="" disabled selected>Choose your gender</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                <label>Gender</label>
            </div>
            <br><br>
            <h4 class="header center orange-text">Contact Number</h4>
            <div class="input-field">
                <input placeholder="Enter your contact number" id="input-contactNumber" type="text" class="validate">
                <label for="input-contactNumber">Contact Number</label>
            </div>
            <div class="input-field">
                <input placeholder="Enter your contact yype" id="input-contactType" type="text" class="validate">
                <label for="input-contactType">Contact Type</label>
            </div>
            <br><br>
            <h4 class="header center orange-text">Emergency Person</h4>
            <div class="input-field">
                <input placeholder="Enter Emergency Contact Person" id="input-contactPerson" type="text" class="validate">
                <label for="input-contactPerson">Contact Person</label>
            </div>
            <div class="input-field">
                <input placeholder="Enter Contact Person Number" id="input-contactPersonNum" type="text" class="validate">
                <label for="input-contactPersonNum">Contact Person Number</label>
            </div>
            <div class="input-field">
                <input placeholder="Enter Contact Person Relation" id="input-contactPersonRel" type="text" class="validate">
                <label for="input-contactPersonRel">Relation</label>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" id="btn-save" class="modal-close btn orange">Save</a>
        </div>
    </div>
</div>
</body>

<?php include 'footer.php'; ?>