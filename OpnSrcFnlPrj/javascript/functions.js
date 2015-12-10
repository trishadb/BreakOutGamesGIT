$("document").ready(function () {
});

//functions
//reservation page
var sendData;
function sendReserv(roomId) {
    console.log(roomId);
    var num = $('#numPeople').val();
    sendData = {
        "roomid": roomId,
        "numpeople": num 
        
    };
    console.log(num);
    data = $.param(sendData);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/OpnSrcFnlPrj/services/submitreservation.php", //Relative or absolute path to response.php file
        data: data,
        success: function (dataResponse) {
            window.location = 'BillingPage.php?';
        },
        error: function (dataResonse){
            console.log(dataResonse);
            
        }
    });
}
function cancelReserv() {
    var resId = sendData.roomid;
    console.log(resId);
    var data = {
        "resID": resId
    };
    data = $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/OpnSrcFnlPrj/services/cancelreservation.php", //Relative or absolute path to response.php file
        data: data,
        success: function (dataResponse) {
            window.location = 'index.php?';
        },
        error: function (dataResonse){
            console.log(dataResonse);
            
        }
    });
}




