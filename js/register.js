const firstName = document.getElementById("firstName");
    const lastName = document.getElementById("lastName");
    const userName = document.getElementById("userName");
    const email = document.getElementById("email");
    const phoneNumber = document.getElementById("phoneNumber");
    const password = document.getElementById("password");
    const confirm = document.getElementById("confirmPassword");
    const button = document.getElementById("submit");
    const errorFirstName = document.getElementById('errorFirstName');
    const errorLastName = document.getElementById('errorLastName');
    const errorEmail = document.getElementById('errorEmail');
    const errorMobileNumber = document.getElementById('errorMobileNumber');
    const errorUsername = document.getElementById('errorUsername');
    const errorPasword = document.getElementById('errorPasword');
    const errorConfirmPassword = document.getElementById('errorConfirmPassword');
    const reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    const regFname = /^[A-Za-z\s]+$/;
    const regUsername = /^[A-Za-z0-9\s]+$/;
    const errorText = document.getElementsByClassName('errorText');
    let errorArr = [];
    function validate() {
        checkFname();
        checkLname();
        checkUsername();
        checkEmail();
        checkMobile();
        checkPasword();
        checkConfirmPassword();
    }

    function app(event){
        event.preventDefault();
        errorArr = [];
        validate();
        console.log(errorArr);
        if (errorArr.length === 0){
            window.location.href = "./dashboard.html";
        }

    }

    function checkFname() {
        if (firstName.value == ""){
        errorFirstName.innerText = "First name cannot be empty";
        errorArr.push('firstName error');
    }
        else if (!regFname.test(String(firstName.value).toLowerCase())) {
            errorFirstName.innerText = "First name can only contain letters";
            errorArr.push('firstName error');
        }
        else {
            errorFirstName.innerText = "";
        }
    }
    function checkLname() {
        if (lastName.value == ""){
            errorLastName.innerText = "Last name cannot be empty";
            errorArr.push('lastname error');
        }
        else if (!regFname.test(String(lastName.value).toLowerCase())) {
            errorLastName.innerText = "Last name can only contain letters";
            errorArr.push('lastname error');

        }
        else {
            errorLastName.innerText = "";
        }
    }
    function checkEmail() {
        if (email.value == "") {
            errorEmail.innerText = "Email cannot be empty";
            errorArr.push("email error");
        }
        else if (!reg.test(String(email.value).toLowerCase())) {
            errorEmail.innerText = "Email is invalid";
            errorArr.push("email error");
        }
        else {
            errorEmail.innerText = "";

        }
    }
    function checkMobile() {
        if (phoneNumber.value == "") {
            errorMobileNumber.innerText = "Phone number cannot be empty";
            errorArr.push("mobile error");

        }
        else errorMobileNumber.innerText = "";
    }
    function checkUsername() {
        if (userName.value == "") {
            errorUsername.innerText = "username cannot be empty";
            errorArr.push("username error");

        }
        else if (!regUsername.test(String(userName.value).toLowerCase())){
            errorUsername.innerText="Username can only contain numbers and letters";
            errorArr.push("username error");

        }
        else errorUsername.innerText = "";
    }
    function checkPasword() {
        if (password.value == "") {
            errorPasword.innerText = "Password cannot be empty";
            errorArr.push("password error");
        }
            else if (password.value.length < 8) { errorPasword.innerText="Password must contain at least 8 characters";
            errorArr.push("password error");
    }
        else errorPasword.innerText = "";
    }
    function checkConfirmPassword() {
        if (confirm.value == ""){

            errorConfirmPassword.innerText = "Confirm password cannot be empty";
            errorArr.push("confirm password error");
        }
        else if  (password.value !== confirm.value) { errorConfirmPassword.innerText="Passwords do not match";
            errorArr.push("confirm password error");
    }
        else errorConfirmPassword.innerText = "";
    }

        function passwordCheck() {
        }

        button.addEventListener('click', app);

