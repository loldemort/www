/**
 * Created by oysteinhauan on 18/01/17.
 */

$(document).ready(function () {

    $("#additionalPersons").on('change', function () {
        var selector = document.getElementById("additionalPersons");
        var persons = selector.options[selector.selectedIndex].value;
        $("#extraPersons").empty();
        $("#sleepover").empty()



        if (persons > 0 ) {
            for (i = 0; i < persons; i++) {
                var sleepoverid = "sleepover" + i;
                $("#extraPersons").append("<div class='col-sm-4'> <input type='name' required name = 'gjest_" + (i + 1) + "' id = 'person" + (i + 1) + "'class='form-control' placeholder='Gjest " + (i + 1) + "'> </div>")
                //$("#sleepover").append("<option value = " + (i + 1) + ">" + (i + 1) + " </option>")
            }
            //$("#sleepover").append("<option value = 'alle'>Alle</option>")
        }
        // } else if (persons == 0) {
        //     $("#sleepover").empty()
        //     $("#sleepover").append("<option value = 0>-- Fyll ut resten først --</option>")
        // }
        /*} else if(persons == 'nei'){
         $("#sleepover").empty()
         $("#sleepover").append("<option value = 0>-- Trenger du overnatting? --</option>")
         $("#sleepover").append("<option value = 'ja'>Ja</option>")
         $("#sleepover").append("<option value = 'nei'>Nei</option>")
         $("#sleepover").prop('disabled', false)


         }*/

    });
    
})
