<?php include 'view/header_ind.php'; ?>

<div class="section no-pad-bot" id="index-banner">
    <div class="container">
        <br><br>
        <h1 class="header center orange-text">Base Code for 4Hire Initiative</h1>
        <div class="row center">
            <h5 class="header col s12 light">A modern responsive Web Design for 4Hire</h5>
        </div>
        <div class="row center">
            <a href="#div-login" id="btn-signin" class="btn-large waves-effect waves-light orange modal-trigger">Signin</a>
            <a href="#div-registration" id="btn-signup" class="btn-large waves-effect waves-light orange modal-trigger">Signup</a>
        </div>
        <br><br>
        <!-- Modal for Login Form -->
        <div class="modal col s3" id="div-login">
            <div class="modal-content">
                <h4 class="header center orange-text">Singin to start booking!</h4>
                <div class="input-field">
                    <input placeholder="Enter your username" id="input-username" type="text" class="validate">
                    <label for="input-username">Username</label>
                </div>
                <div class="input-field">
                    <input placeholder="Enter your Password" id="input-password" type="password" class="validate">
                    <label for="input-password">Password</label>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" id="btn-login" class="modal-close btn orange">Signin</a>
            </div>
        </div>
        <!-- Modal for Registration Form -->
        <div class="modal col s3" id="div-registration">
            <div class="modal-content">
                <h4 class="header center orange-text">Be a member! Register now!</h4>
                <div class="input-field">
                    <input placeholder="Enter your Username" id="input-memUsername" type="text" class="validate">
                    <label for="input-memUsername">Username</label>
                </div>
                <div class="input-field">
                    <input placeholder="Enter your Password" id="input-memPassword" type="password" class="validate">
                    <label for="input-memPassword">Password</label>
                </div>
                <div class="input-field">
                    <input placeholder="Confirm Password" id="input-confPassword" type="password" class="validate">
                    <label for="input-address">Confirm Password</label>
                </div>
                <div class="input-field">
                    <input placeholder="Enter your Email Address" id="input-email" type="text" class="validate">
                    <label for="input-email">Password</label>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" id="btn-register" class="modal-close btn orange">Signin</a>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="section">
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">Easy Hiring of Professionals</h5>

                    <p class="light">We did most of the heavy lifting for you to provide an easier medium
                        to find the skills you need. Additionally, we refined safety and comfort to
                        provide a smoother experience for our customers.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">Customer Experience Focused</h5>

                    <p class="light">By utilizing skills and talent of our Service Providers, we were able to
                        create a service that incorporates professionalism and satifisfaction that provide more
                        feedback
                        to users. Additionally, a single underlying responsive care across all our services allow
                        for a more unified customer experience.</p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">Easy to work with</h5>

                    <p class="light">We have provided minimaslistc approach in creating our application to
                        help new users get started. We are also always open to feedback and can answer any
                        questions a customer may have about our application.</p>
                </div>
            </div>
        </div>

    </div>
    <br><br>
</div>
</body>

<?php include 'view/footer.php'; ?>