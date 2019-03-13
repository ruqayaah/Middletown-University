    // const firstName = document.getElementById("firstName");
    // const lastName = document.getElementById("lastName");
    // const gend = document.getElementsByClassName("gender");
    // const ddate = document.getElementById("date");
    // const origin = document.getElementById("origin");
    // const adDress = document.getElementById("add");
    // const email = document.getElementById("email");
    // const phoneNumber = document.getElementById("phoneNumber");
    // const userName = document.getElementById("userName");
    // const faculty = document.getElementById('faculty');
    // const course = document.getElementById('course');
    // const password = document.getElementById("password");
    // const confirm = document.getElementById("confirmPassword");
    // const picTure = document.getElementById("myFile");
    // const button = document.getElementById("next-button1");
    // const errorFirstName = document.getElementById('errorFirstName');
    // const errorLastName = document.getElementById('errorLastName');
    // const errorGender = document.getElementById('errorGender');
    // const errorDob = document.getElementById('errorDob');
    // const errorOrigin = document.getElementById('errorOrigin');
    // const errorAdd = document.getElementById('errorAdd');
    // const errorEmail = document.getElementById('errorEmail');
    // const errorMobileNumber = document.getElementById('errorMobileNumber');
    // const errorFac = document.getElementById('errorFac');
    // const errorCourse = document.getElementById('errorCourse');
    // const errorUsername = document.getElementById('errorUsername');
    // const errorPassword = document.getElementById('errorPassword');
    // const errorConfirmPassword = document.getElementById('errorConfirmPassword');
    // const errorImage = document.getElementById('errorImage');
    // const reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
    // const regFname = /^[A-Za-z ]+$/;
    // const regUsername = /^[A-Za-z0-9\s]+$/;
    // const errorText = document.getElementsByClassName('errorText');
    // let errorArr = [];




    // let nextbutton = document.getElementById('next-button1');
    // function validate() {
    //     checkFname();
        // checkLname();
        // checkGender();
        // checkDob();
        // checkOrigin();
        // checkAdd();
        // checkEmail();
        // checkMobile();
        // checkFaculty();
        // checkCourses();
        // checkUsername();
        // checkPasword();
        // checkConfirmPassword();
        // checkImage();
        // }

        // function app(){
        // event.preventDefault();
        // errorArr = [];
        // validate();
        // // console.log(errorArr);
        // if (errorArr.length === 0){
            //     window.location.hash = '#new_student_register.php';
            // }

            // const firstName = document.getElementById("firstName");
            // const errorFirstName = document.getElementById('errorFirstName');
            // let nextbutton = document.getElementById('next-button1');

            // // function validate() {
            // //     checkFname();
            // // }

            // function app() {
            //     // validate();
            //     checkFname();
            // }
            // function checkFname() {
            //     if (firstName.value == ""){
            //         errorFirstName.innerText = "First name cannot be empty";
            //         // errorArr.push('firstName error');
            //     }
            //     else if (!regFname.test(String(firstName.value).toLowerCase())) {
            //         errorFirstName.innerText = "First name can only contain letters and spaces";
            //         // errorArr.push('firstName error');
            //     }
            //     else {
            //         alert('victory!');
            //         errorFirstName.innerText = "";
            //     }
            // }
            // nextbutton.addEventListener('click', app);
    // function checkLname() {
    //     if (lastName.value == ""){
    //         errorLastName.innerText = "Last name cannot be empty";
    //         errorArr.push('lastName error');
    //     }
    //     else if (!regFname.test(String(lastName.value).toLowerCase())) {
    //         errorLastName.innerText = "Last name can only contain letters and spaces";
    //         errorArr.push('lastName error');
    //     }
    //     else {
    //         errorLastName.innerText = "";
    //     }
    // }
    // function checkGender() {
    //     if (gend.value == ""){
    //         errorGender.innerText = "Please pick an option";
    //         errArr.push('gender error');
    //     } else {
    //         errorGender.innerText = "";
    //     }
    // }
    // function checkDob() {
    //     if (ddate.value = "") {
    //         errorDob.innerText = "Date of birth cannot be empty";
    //         errorArr.push('Dob error');
    //             } else {
    //                 errorDob.innerText = "";
    //             }
    // }
    // function checkOrigin() {
    //     if (origin.value = "") {
    //         errorOrigin.innerText = 'Please fill your state of origin';
    //         errorArr.push('origin error');
    //     }else {
    //         errorOrigin.innerText = "";
    //     }

    // }
    // function checkAdd() {
    //     if (adDress.value = "") {
    //         errorAdd.innerText= "Please fill in your address";
    //         errorArr.push('Address error');
    //     } else {
    //         errorAdd.innerText =""
    //     }
    // }
    // function checkEmail() {
    //     if (email.value == "") {
    //         errorEmail.innerText = "Email cannot be empty";
    //         errorArr.push("email error");
    //     }
    //     else if (!reg.test(String(email.value).toLowerCase())) {
    //         errorEmail.innerText = "Email is invalid";
    //         errorArr.push("email error");
    //     }
    //     else {
    //         errorEmail.innerText = "";

    //     }
    // }
    // function checkMobile() {
    //     if (phoneNumber.value == "") {
    //         errorMobileNumber.innerText = "Phone number cannot be empty";
    //         errorArr.push("mobile error");

    //     }
    //     else errorMobileNumber.innerText = "";
    // }
    // function checkFaculty() {
    //     if (faculty.value= ""){
    //         errorFac.innerText ="Please fill out this field";
    //         errorArr.push("faculty error");
    //     } else {
    //         errorFac.innerText = "";
    //     }
    // }
    // function checkCourses() {
    //     if (course. value = "") {
    //         errorCourse.innerText = "Please fill out this";
    //         errorArr.push("Courses error");
    //     } else {
    //         errorCourse.innerText = "";
    //     }
    // }
    // function checkUsername() {
    //     if (userName.value == "") {
    //         errorUsername.innerText = "username cannot be empty";
    //         errorArr.push("username error");

    //     }
    //     else if (!regUsername.test(String(userName.value).toLowerCase())){
    //         errorUsername.innerText="Username can only contain numbers and letters";
    //         errorArr.push("username error");

    //     }
    //     else errorUsername.innerText = "";
    // }
    // function checkPasword() {
    //     if (password.value == "") {
    //         errorPasword.innerText = "Password cannot be empty";
    //         errorArr.push("password error");
    //     }
    //         else if (password.value.length < 8) { errorPasword.innerText="Password must contain at least 8 characters";
    //         errorArr.push("password error");
    // }
    //     else errorPasword.innerText = "";
    // }
    // function checkConfirmPassword() {
    //     if (confirm.value == ""){

    //         errorConfirmPassword.innerText = "Confirm password cannot be empty";
    //         errorArr.push("confirm password error");
    //     }
    //     else if  (password.value !== confirm.value) { errorConfirmPassword.innerText="Passwords do not match";
    //         errorArr.push("confirm password error");
    // }
    //     else errorConfirmPassword.innerText = "";
    // }
    // function checkImage() {
    //     if (picTure.value = "") {
    //         errorImage.innerText="Please upload an image";
    //         errorArr.push('Image error');
    //     } else {
    //         errorImage.innerText = "";
    //     }
    // }

const form1 = document.getElementById('form1');
const form2 = document.getElementById('form2');
const form3 = document.getElementById('form3');
const header1 = document.getElementById('form1-header');
const header2 = document.getElementById('form2-header');
const header3 = document.getElementById('form3-header');
const nextButton1 = document.getElementById('next-button1');
const nextButton2 = document.getElementById('next-button2');
const prevButton1 = document.getElementById('prev-button1');
const prevButton2 = document.getElementById('prev-button2');

const tabs = [form1, form2, form3];
const headers = [header1, header2, header3];
let i = 0;

function next(event) {
    event.preventDefault();
    tabs[i].style.display ='none';
    tabs[i+1].style.display ='block';
    headers[i].classList.remove('blue-border');
    headers[i+1].classList.add('blue-border');
    i++;
}

function prev(event) {
event.preventDefault();
tabs[i].style.display ='none';
tabs[i-1].style.display = 'block';
headers[i].classList.remove('blue-border');
headers[i-1].classList.add('blue-border');
i--;

}

let errArr = [];

const firstName = document.getElementById('firstName');
const lastName = document.getElementById("lastName");
const gend = document.getElementsByClassName("gender");
const ddate = document.getElementById("date");
const regFname = /^[A-Za-z ]+$/;

function ()
function validate() {

    function checkFname() {
        if (firstName.value == ""){
            errorFirstName.innerText = "First name cannot be empty";
            errorArr.push('firstName error');
        }
        else if (!regFname.test(String(firstName.value).toLowerCase())) {
            errorFirstName.innerText = "First name can only contain letters and spaces";
            errorArr.push('firstName error');
        }
        else {
            errorFirstName.innerText = "";
        }
    }
    checkFname();

    function checkLname() {
        if (lastName.value == "") {
            errorLastName.innerText = "Last name cannot be empty";
            errorArr.push('lastName error');
        }
        else if (!regFname.test(String(lastName.value).toLowerCase())) {
            errorLastName.innerText = "Last name can only contain letters and spaces";
            errorArr.push('lastName error');
            }
        else {
            errorLastName.innerText = "";
        }
    }
    checkLname();

    if (errorArr.Length === 0 ) {
        next(event);
    }

}
nextButton1.addEventListener('click', validate);
nextButton2.addEventListener('click', next);
prevButton1.addEventListener('click', prev);
prevButton2.addEventListener('click', prev);
                        // function checkGender() {
                        //     if (gend.value == "") {
                        //         errorGender.innerText = "Please pick an option";
                        //         errArr.push('gender error');
                        //     } else {
                        //         errorGender.innerText = "";
                        //     }
                        // }
                        // checkGender();

                        // function checkDob() {
                        //     if (ddate.value = "") {
                        //         errorDob.innerText = "Date of birth cannot be empty";
                        //         errorArr.push('Dob error');
                        //     } else {
                        //         errorDob.innerText = "";
                        //     }
                        // }
                        // checkDob();

                            // checkOrigin();
                            // checkAdd();
                            // checkEmail();
                            // checkMobile();
                            // checkFaculty();
                            // checkCourses();
                            // checkUsername();
                            // checkPasword();
                            // checkConfirmPassword();
                            // checkImage();
// function checkName() {
    //     if (firstName.value == ""){
        //         error ('please fill this field');
        //     } else if(!regFname.test(String(firstName.value).toLowerCase())) {
            //         alert('input allows only letters and spaces');
            //     } else {
                //         next(event);
                //     }
                // }

// const firstName = document.getElementById('firstName');
// regFname = /^[a-zA-Z ]+$/;
// // const lastName = document.getElementById('lastName');
// // const gend = document.getElementsByClassName('gender');
// function validate() {
//     checkFname();
// }

// function checkFname() {
//     if(firstName.value == "") {
//         alert('please fill this field');
//     } else if (!regFname.test(String(firstName.value).toLowerCase())) {
//         alert('input only letters and spaces');
//     } else {nextButton1.addEventListener('click', next);
//     }
// }
// function app() {
//     validate();
// }
