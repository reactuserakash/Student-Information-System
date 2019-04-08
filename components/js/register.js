var usernameOK = false;
var userpassword = false;
var userfullname = false;
var regnumber = false;
var fathername = false;
var mothername = false;
var religion = false;
var city = false;
var district = false;
var post = false;
var pin = false;
var phone = false;
var email = false;
var hobby = true;
var s_answer = true;


//username
var userNameValidate = () => {
  var upperCaseLetters = /[A-Z]/g;
  var numbers = /[0-9]/g;
  var special = /[!@#\$%\^\&*\)\(+=._-]+$/g;
  var isNoUppercase = true;
  var isNoNumbers = true;
  var isNoSpecial = true;
  var ismMinLenght = true;
  var username = document.getElementById("username");
  if(username.value.length<5) {
    ismMinLenght = false;
  }
  if(username.value.match(upperCaseLetters)) {
    console.log("1")
    isNoUppercase = false;
  }
  if(username.value.match(numbers)) {
    console.log("2")
    isNoNumbers = false;
  }
  if(username.value.match(special)) { 
    console.log("3")
    isNoSpecial = false;
  }

  if(isNoUppercase==true && isNoNumbers==true && isNoSpecial==true && ismMinLenght==true) {
    console.log("All pass ok");
    usernameOK=true;
    username.classList.add("valid");
    username.classList.remove("warn");
  }else {
    username.classList.remove("valid");
    username.classList.add("warn");
    username.value=""
    username.placeholder = "Enter correct user name"
  }
}

//password
var userPasswordValidate = (type) =>{
  var firstPassword=document.getElementById("pass-1")
  if(type==1) {
    var upperCaseLetters = /[A-Z]/g;
    var numbers = /[0-9]/g;
    var special = /[!@#\$%\^\&*\)\(+=._-]+$/g;
    var isUppercase = false;
    var isNumbers = false;
    var isSpecial = false;
    var ismMinLenght = false;
    if(firstPassword.value.length >= 8){
      ismMinLenght = true;
    }
    if(firstPassword.value.match(upperCaseLetters)) { 
      isUppercase = true;
    }
    if(firstPassword.value.match(special)) { 
      isSpecial = true;
    }
    if(firstPassword.value.match(numbers)) { 
      isNumbers = true;
    }

    if(isUppercase==true && isNumbers==true && isSpecial==true && ismMinLenght==true) {
      console.log("Password ok")
      firstPassword.classList.add("valid");
      firstPassword.classList.remove("warn");
    } else {
      console.log("pass reset")
      firstPassword.classList.remove("valid");
      firstPassword.classList.add("warn");
      firstPassword.value = ""
      firstPassword.placeholder = "Enter correct password"
    }
  }else if(type==2) {
    var secondPassword=document.getElementById("pass-2");
    if(firstPassword.value==secondPassword.value) {
      userpassword = true;
      secondPassword.classList.add("valid");
      secondPassword.classList.remove("warn");
    } else {
      console.log("pass reset")
      secondPassword.classList.remove("valid");
      secondPassword.classList.add("warn");
      secondPassword.value = ""
      secondPassword.placeholder = "Retype the password correctly"
    }
  } 
}

//full name
var userFullNameValidate = () =>{
  var userFullName = document.getElementById("userRealName");
  if(userFullName.value.length>=3){
    console.log("user real name ok");
    userfullname = true;
    userFullName.classList.add("valid");
    userFullName.classList.remove("warn");
  } else {
    console.log("user real name reset");
    userFullName.classList.remove("valid");
    userFullName.classList.add("warn");
    userFullName.placeholder = "Name too short"
  }
}

//registration number
var userRegNumberValidate = () =>{
  var userReg = document.getElementById("userReg");  
  if(userReg.value.length==8 && userReg.value[2]=="U"){
    console.log("reg number ok");
    regnumber = true;
    userReg.classList.remove("warn");
    userReg.classList.add("valid");
  } else {
    console.log("reg number not ok");
    userReg.classList.remove("valid");
    userReg.classList.add("warn");
    userReg.value="";
    userReg.placeholder = "Enter Valid Reg. Number"
  }
}

//father full name
var fatherFullNameValidate = () =>{
  var fatherFullName = document.getElementById("fatherName");
  if(fatherFullName.value.length>=3){
    console.log("father name ok");
    fathername = true;
    fatherFullName.classList.add("valid");
    fatherFullName.classList.remove("warn");
  } else {
    console.log("father name reset");
    fatherFullName.classList.remove("valid");
    fatherFullName.classList.add("warn");
    fatherFullName.value="";
    fatherFullName.placeholder = "Father's name is too short"
  }
}

// mother full name
var motherFullNameValidate = () =>{
  var motherFullName = document.getElementById("motherName");
  if(motherFullName.value.length>=3){
    console.log("mother name ok");
    mothername = true;
    motherFullName.classList.add("valid");
    motherFullName.classList.remove("warn");
  } else {
    console.log("mother name not ok");
    motherFullName.classList.remove("valid");
    motherFullName.classList.add("warn");
    motherFullName.value="";
    motherFullName.placeholder = "Mother's name is too short"
  }
}

//calculate age
var ageCalculate = () => {
  var dob = document.getElementById("DOB").value;
  ageMS = Date.parse(Date()) - Date.parse(dob);
  age = new Date();
  age.setTime(ageMS);
  ageYear = age.getFullYear() - 1970;
  var age = document.getElementById("age")
  age.innerHTML = ageYear
} 


var religionValidate = () =>{
  var userReligion = document.getElementById("userReligion");
  if(userReligion.value.length>=3){
    console.log("religion name ok");
    religion = true;
    userReligion.classList.add("valid");
    userReligion.classList.remove("warn");
  } else {
    console.log("religion not ok");
    userReligion.classList.remove("valid");
    userReligion.classList.add("warn");
    userReligion.placeholder = "Enter your religion"
  }
}

var cityValidate = () =>{
  var userCity = document.getElementById("userCity");
  if(userCity.value.length>0){
    console.log("city name ok");
    city = true;
    userCity.classList.add("valid");
    userCity.classList.remove("warn");
  } else {
    console.log("city not ok");
    userCity.classList.remove("valid");
    userCity.classList.add("warn");
    userCity.placeholder = "Enter your city"
  }
}

var districtValidate = () =>{
  var userDistrict = document.getElementById("userDistrict");
  if(userDistrict.value.length>0){
    console.log("district name ok");
    district = true;
    userDistrict.classList.add("valid");
    userDistrict.classList.remove("warn");
  } else {
    console.log("district not ok");
    userDistrict.classList.remove("valid");
    userDistrict.classList.add("warn");
    userDistrict.placeholder = "Enter district name";

  }
}

var postValidate = () =>{
  var userPost = document.getElementById("postOffice");
  if(userPost.value.length>0){
    console.log("post name ok");
    post = true;
    userPost.classList.add("valid");
    userPost.classList.remove("warn");
  } else {
    console.log("post not ok");
    userPost.classList.remove("valid");
    userPost.classList.add("warn");
    userPost.placeholder = "Enter post office name";
  }
}


var pincodeValidate = () =>{
  var userpin = document.getElementById("pincode");
  if(userpin.value.length==6){
    console.log("pin name ok");
    pin = true;
    userpin.classList.add("valid");
    userpin.classList.remove("warn");
  } else {
    console.log("pin not ok");
    userpin.classList.remove("valid");
    userpin.classList.add("warn");
    userpin.value = "";
    userpin.placeholder = "Enter valid pin code";
  }
}

var phoneValidate = () =>{
  var userPhone = document.getElementById("phoneNumber");
  if(userPhone.value.length==10){
    console.log("phone name ok")
    phone = true;
    userPhone.classList.add("valid");
    userPhone.classList.remove("warn");
  } else {
    console.log("phone not ok");
    userPhone.classList.remove("valid");
    userPhone.classList.add("warn");
    userPhone.value = "";
    userPhone.placeholder = "Enter valid phone number";
  }
}

var emailValidate = () =>{
  var userEmail = document.getElementById("email");
  var emailReg = /[@]/g;
  if(userEmail.value.match(emailReg)){
    console.log("email ok")
    email = true;
    userEmail.classList.add("valid");
    userEmail.classList.remove("warn");
  } else {
    console.log("email not ok");
    userEmail.classList.remove("valid");
    userEmail.classList.add("warn");
    userEmail.value = "";
    userEmail.placeholder = "Enter valid email address";
  }
}

var visible = false;
var hobbySelect =() => {
  //var hobby = document.getElementById("hobby").value
  //console.log(hobby)
  if(visible==false){
    hobby = true;
    visible = true;
    console.log("showing");
    document.getElementById("specificHobby").style.visibility = "visible";
  } else{
    hobby = false;
    visible = false;
    console.log("hiding");
    document.getElementById("specificHobby").style.visibility = "hidden";
  }
}

var hobbyValidate = () => {
  var userHobby = document.getElementById("hobbyText");
  if(userHobby.value.length>0){
    console.log("hobby ok")
    hobby = true;
    userHobby.classList.add("valid");
    userHobby.classList.remove("warn");
  } else {
    hobby = false;
    console.log("hobby not ok");
    userHobby.classList.remove("valid");
    userHobby.classList.add("warn");
    userHobby.value = "";
    userHobby.placeholder = "Specify your hobby";
  }
}

var answerValidate = () =>{
  var sAnswer = document.getElementById("answer");
  if(sAnswer.value.length>=3){
    console.log("s_answer name ok");
    s_answer = true;
    sAnswer.classList.add("valid");
    sAnswer.classList.remove("warn");
  } else {
    console.log("s_answer name reset");
    sAnswer.classList.remove("valid");
    sAnswer.classList.add("warn");
    sAnswer.value="";
    sAnswer.placeholder = "Sequrity answer is too short"
  }
}


 


var myCheck = () => {
  var regBtn = document.getElementById("regBtn");
  var checkBox = document.getElementById("regCheck");
  if( usernameOK &&
     userpassword &&
     userfullname &&
     regnumber &&
     fathername &&
     mothername &&
     religion &&
     city &&
     district &&
     post &&
     pin &&
     phone &&
     email &&
     hobby && s_answer) {
    console.log("All ok")
    regBtn.classList.add("reg-active");
  } else {
    alert("some fields are missing")
    console.log("All not ok")
    checkBox.checked = false;
    regBtn.classList.remove("reg-active");
  }
}
