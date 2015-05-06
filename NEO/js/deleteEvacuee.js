/**
 * Created by arturolopez on 5/6/15.
 */
var id = null;
var name = null;
var row = null;
var firstName = null;
var lastName = null;
var dob = null;

$("tr").mouseenter(function(){
    row = this;
    //console.log(row);
    id = row.cells[0].innerHTML;
    //console.log(id);
    name = row.cells[1].innerHTML + " " + row.cells[2].innerHTML;
});

$(".remove_button").click(deleteEvacuee);
$(".update_button").click(updateEvacuee);
$(".update").click(updated);

function deleteEvacuee(){
    //console.log("button clicked");
    var confirmation = confirm("Are you sure you want to erase " + name + "?");
    if(confirmation == true){
        $.ajax({
            url:"adminFunctions.php",
            type:"GET",
            data: {
                action:"delete",
                id: id
            },
            success: function (data,status) {

            },
            error: function (xhr, status, errorThrown) {
                //alert( "Sorry, there was a problem!" );
                console.log( "Error: " + errorThrown );
                console.log( "Status: " + status );
                console.dir( xhr );
            },
            complete: function( xhr, status ) {
                //alert( "The request is complete!" );
                location.reload();
            }
        });
    }
}

function updateEvacuee(){
    firstName = row.cells[1].innerHTML;
    lastName = row.cells[2].innerHTML;
    dob = row.cells[3].innerHTML;

    row.cells[1].innerHTML  = "<input type='text' id = 'firstName' value='"+firstName+"'/>";
    row.cells[2].innerHTML  = "<input type='text' id = 'lastName' value='"+lastName+"'/>";
    row.cells[3].innerHTML  = "<input type='date' id = 'dob' value='"+dob+"'/>";
    row.cells[4].innerHTML = "<button type = 'button' class = 'glyphicon glyphicon-ok update' aria-label = 'Left Align' onclick='updated()'></button>";
}

function updated() {
    var button1 = "<button type='button' class='btn btn-default update_button' aria-label='Left Align'> <span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></button>";
    var button2 = "<button type='button' class='btn btn-default remove_button'  aria-label='Left Align'> <span class='glyphicon glyphicon-minus' aria-hidden='true'></span> </button>";

    var updatedFirstName = $("#firstName").val();
    var updatedLastName = $("#lastName").val();
    var updatedDOB = $("#dob").val();
    var data = {};
    console.log(firstName);
    console.log(lastName);
    console.log(dob);
    console.log(id);
    console.log();
    console.log(updatedFirstName);
    console.log(updatedLastName);
    console.log(updatedDOB);
    console.log(id);

    row.cells[1].innerHTML  = updatedFirstName;
    row.cells[2].innerHTML  = updatedLastName;
    row.cells[3].innerHTML  = updatedDOB;
    row.cells[4].innerHTML = button1 + button2;

    if(updatedFirstName != firstName && updatedLastName != lastName  && dob != updatedDOB){
        data = {firstName: updatedFirstName, lastName: updatedLastName, dob: updatedDOB, id: id,action: "update"};
    }
    else if(updatedFirstName == firstName && updatedLastName == lastName  && dob != updatedDOB){
        data = {lastName: updatedLastName, dob: updatedDOB,id: id,action: "update"};
    }
    else if(updatedFirstName == firstName && updatedLastName == lastName  && dob != updatedDOB){
        data = {dob: updatedDOB,id: id, action: "update"};
    }
    else if(updatedFirstName != firstName && updatedLastName == lastName  && dob != updatedDOB){
        data = {firstName: updatedFirstName, dob: updatedDOB,id: id, action: "update"};
    }
    else if(updatedFirstName != firstName && updatedLastName != lastName  && dob == updatedDOB){
        data = {firstName: updatedFirstName, lastName: updatedLastName,id: id, action: "update"};
    }
    $.ajax({
        url:"adminFunctions.php",
        type:"GET",
        data: data,
        success: function (data,status) {
                console.log(status);
        },
        error: function (xhr, status, errorThrown) {
            //alert( "Sorry, there was a problem!" );
            console.log( "Error: " + errorThrown );
            console.log( "Status: " + status );
            console.dir( xhr );
        },
        complete: function( xhr, status ) {
            //alert( "The request is complete!" );
          //  location.reload();
        }
    });



}


