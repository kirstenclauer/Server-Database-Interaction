//Sets up AJAX infrastructure to request time updates from the server
var request = null; 
function getCurrentTime(){

            request = new XMLHttpRequest(); 
            var url = 'localhost'; 
            request.open("GET", url, true);
            request.onreadystatechange = updatePage; 
            request.send(url);
        }
        function updatePage(){
            if(request.readyState === 4){
                var display = document.getElementById("datetime");
                display.innerHTML = request.responseText;
                console.log("time : " + display);
            }
        }
        getCurrentTime();
        setInterval('getCurrentTime()', 60000);

