var iscode = true;
var iss_name = true;
var isfaculty = true;

var validCode = () => {
    var code = document.getElementById("code");
    if(code.value.length>=4){
        console.log("code ok");
        iscode = true;
        code.classList.remove("warn");
        code.classList.add("valid");
    } else {
        console.log("code not ok");
        code.classList.remove("valid");
        code.classList.add("warn");
        code.value=""
        code.placeholder = "Enter valid code";
    }
}

var validName = () => {
    var name = document.getElementById("s_name");
    if(name.value.length>=5){
        console.log("name ok");
        iss_name = true;
        name.classList.add("valid");
        name.classList.remove("warn");
    } else {
        console.log("code not ok");
        name.classList.remove("valid");
        name.classList.add("warn");
        name.value=""
        name.placeholder = "Enter valid name";
    }
}

var validFaculty = () => {
    var faculty = document.getElementById("faculty");
    if(faculty.value.length>=5){
        console.log("faculty ok");
        isfaculty = true;
        faculty.classList.add("valid");
        faculty.classList.remove("warn");
    } else {
        console.log("code not ok");
        faculty.classList.remove("valid");
        faculty.classList.add("warn");
        faculty.value=""
        faculty.placeholder = "Enter valid faculty name";
    }
}