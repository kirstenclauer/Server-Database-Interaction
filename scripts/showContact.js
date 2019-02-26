var $myfname; 
function getFName(fname) {
    showContact(fname, myFunction);
    $myfname = fname; 
    setInterval('getFName($myfname)', 10000);

}

// credit to: https://www.w3schools.com/js/tryit.asp?filename=tryjs_ajax_callback 
// XMLHttpRequest Object so that we can update a page, request, recieve, and send data to and from a server
function showContact(namestring, callbackFunction) {

    if (window.XMLHttpRequest) {
        xhr = new XMLHttpRequest();
    }

    xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("JSONoutPlace").innerHTML = this.responseText;
        callbackFunction(this.responseText);
        }
    }
    xhr.open("GET", "scripts/getuser.php?fname=" + namestring, true);
    xhr.send();
}
function myFunction(xhttp) {
    var wasJSONObject = JSON.parse(xhttp);
    console.log(wasJSONObject);
    var text = "";
    for (i = 0; i < wasJSONObject.length; i++) {
        text = text + wasJSONObject[i]["first"] + " " + wasJSONObject[i]["last"] + " " + wasJSONObject[i]["now()"]  + "<br>";
        console.log(text + "was entered");
    }
    document.getElementById("DBoutPlace").innerHTML = text;

}


