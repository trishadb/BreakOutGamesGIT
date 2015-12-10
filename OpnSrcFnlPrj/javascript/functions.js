$("document").ready(function () {
});


//functions
//reservation page
function sendReservation(roomId) {

    console.log(roomId);
    var num = $('#numPeople').val();
    var data = {
        "roomid": roomId,
        "numpeople": num 
        
    };
    console.log(num);
    data = $.param(data);
    $.ajax({
        type: "POST",
        dataType: "json",
        url: "/OpnSrcFnlPrj/submitreservation.php", //Relative or absolute path to response.php file
        data: data,
        success: function (dataResponse) {
            console.log(dataResponse);

        },
        error: function (dataResonse){
            console.log(dataResonse);
            
        }
    });


}

