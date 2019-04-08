var selectUserType = (type)=> {
    if(type==2) {
        var element = document.getElementById("student-login");
        element.classList.remove("active");
        element.classList.add("deactive");
        var element = document.getElementById("admin-login");
        element.classList.remove("deactive");
        element.classList.add("active");
    }

    if(type==1) {
        var element = document.getElementById("admin-login");
        element.classList.remove("active");
        element.classList.add("deactive");
        var element = document.getElementById("student-login");
        element.classList.remove("deactive");
        element.classList.add("active");
    }
}