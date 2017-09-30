function formValidation()
{
    var email = document.getElementById('email');
    var pass = document.getElementById('pass');
    var pass2 = document.getElementById('pass2');
    if (email.value.length==0)
    {
        document.getElementById('head').innerHTML = "* Enter an email id *";
        return false;
    }

    if (pass.value.length==0)
    {
        document.getElementById('head2').innerHTML = "* Enter a password *";
        document.getElementById('head').innerHTML = " <br> ";
        //pass.focus();
        return false;
    }
    if (pass2.value.length==0)
    {
        document.getElementById('head2').innerHTML = "<br>";
        document.getElementById('head3').innerHTML = "* Enter a password *";
        //pass2.focus();
        return false;
    }
}

function passValidation()
{
    var pass = document.getElementById('pass');
    var pass2 = document.getElementById('pass2');
    if(pass.value == "")
    {
        document.getElementById('head').innerHTML = "All fields are mandatory";
        return false;
    }
    else
    {
        if (pass.value == pass2.value)
        {
            //document.getElementById('head').innerHTML = "matching"
            return true;
        }
        else
        {
            document.getElementById('head3').innerHTML = "<br>";
            document.getElementById('head2').innerHTML = "* Passwords donot match *";
          //  pass.focus();
            return false;
        }
    }
}

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}

function search()
{
    var s = document.getElementById('searchBook');
    if(s.value == "")
    {
        document.getElementById('searcherr').innerHTML = "Enter a book name";
        s.focus();
        return false;
    }
}

function selectBook(){
    var bname = document.getElementById('bname');

}