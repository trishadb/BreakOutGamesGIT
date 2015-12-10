var process = "open";
var reserveID = "open";
/**
function showAvailable(room){
    if(process == "closed"){
        cancelReserve(reserveId);
    }
    
    var a = room.split("_");
    var hr = new XMLHttpRequest();
    
    var url = "bookProcess.php";
    
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            var return_data = hr.responseText;
            document.getElementById("returnData").innerHTML = return_data;
        }
    };
    
    hr.send("getRoomBtns="+a[1]);
}

function reserveRoom(reserve_seats){
    process = "closed";
    
    var a = reserve_seats.splits("_");
    var hr = new XMLHttpRequest();
    var url = "bookProcess.php";
    
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            var return_data = hr.responseText.split("|");
            reserveId = return_data[1];
            document.getElementById("returnData").innerHTML = return_data[0];
        }
    };
    
    hr.send("getRoomBtns="+a[1]+"&num="+a[2]);
}

function cancelBooking(resId){
    var hr = new XMLHttpRequest();
    var url = "bookProcess.php";
    
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.send("clearRes="+resId);
    window.location = "BookOnlinePage.php";
}

function confirmBooking(){
    //Get form values
    var name = document.getElementById("name").value;
    var rmThm = document.getElementById("room_theme").value;
    var nPpl = document.getElementById("num_people").value;
    var rid = document.getElementById("reserveId").value;
    
    if(name =="" || rm_theme =="" || npeople =="" || rid ==""){
        return false;
    }
    
    var confirmation = "confirm="+rid+"&n="+name+"&rm="+rmThm+"$ppl="+nPpl;
    var hr = new XMLHttpRequest();
    var url = "bookProcess.php";
    
    hr.open("POST", url, true);
    hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    hr.onreadystatechange = function(){
        if(hr.readyState == 4 && hr.status == 200){
            var return_data = hr.responseText.split("|");
            
            if(return_data[0] == "false"){
                document.getElementById("returnData").innerHTML = return_data[1];
                var process = "open";
                var reserveId = "open";
            }else{
                var process = "open";
                var reserveId = "open";
                alert("You already booked");
                window.location = "BookOnlinePage.php";
            }
        }
    };
    
    hr.send(confirmation);
}**/

function sendReservation(roomID){
    
    
}
