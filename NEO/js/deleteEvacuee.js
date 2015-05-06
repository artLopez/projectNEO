/**
 * Created by arturolopez on 5/6/15.
 */
var id = null;
var name = null;
$("tr").mouseenter(function(){
   var row =  this;
  //console.log(row);
    id = row.cells[0].innerHTML;
    //console.log(id);
    name = row.cells[1].innerHTML + " " + row.cells[2].innerHTML;

});

$(".remove_button").click(deleteEvacuee);

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
