/**
 * Created by arturolopez on 5/6/15.
 */
var id = null;
var name = null;
var row = null;

$("tr").mouseenter(function(){
    row = this;
    //console.log(row);
    id = row.cells[0].innerHTML;
    //console.log(id);
    name = row.cells[1].innerHTML + " " + row.cells[2].innerHTML;
});

$(".remove_button").click(deleteEvacuee);
$(".update_button").click(updateEvacuee);

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
    var firstName = row.cells[1].innerHTML;
    var lastName = row.cells[2].innerHTML;
    var dob = row.cells[3].innerHTML;

    row.cells[1].innerHTML  = "<input type='text' class='"+row.cells[1].className+"' value='"+firstName+"'/>";
    row.cells[2].innerHTML  = "<input type='text' class='"+row.cells[2].className+"' value='"+lastName+"'/>";
    row.cells[3].innerHTML  = "<input type='text' class='"+row.cells[3].className+"' value='"+dob+"'/>";
    row.cells[4].innerHTML = "<button type = 'button' class = 'glyphicon glyphicon-ok' aria-label = 'Left Align'> <span class = 'glyphicon glyphicon-pencil' aria-hidden =  'true></span></button>";
}


