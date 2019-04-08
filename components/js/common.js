var printProfile = () => {
    var restorepage = document.body.innerHTML;
    var printcontent = document.getElementById("profile-box").innerHTML;
    document.body.innerHTML = printcontent;
    window.print();
    document.body.innerHTML = restorepage;
}