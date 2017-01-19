/**
 * Created by oysteinhauan on 28/11/16.
 */
$(document).ready(function () {

    var attendingPersons = [];

    $("#fullname").change(function () {
        var name = document.getElementById('fullname').value;
        if(name.length > 5 ){
            attendingPersons[0] = name;
        }

    })

    $(":input").click(function () {
        $(':input').blur(function()
        {
            if( !$(this).val() ) {
                $(this).parents('p').addClass('warning');
            }
        });
    })


    $("#additionalPersons").on('change', function () {
        var selector = document.getElementById("additionalPersons");
        var persons = selector.options[selector.selectedIndex].value;
        $("#extraPersons").empty();
        $("#sleepover").empty()



        if (persons > 0 ) {
            $("#extraPersons").append("<div class='col-sm-4'> <div class = 'panel panel-default'><div class = 'panel-body'><h5>Fint! Da vil vi gjerne ha navnet på de andre også.</h5> </div></div></div>")
            for (i = 0; i < persons; i++) {
                var sleepoverid = "sleepover" + i;
                $("#extraPersons").append("<div class='col-sm-4'> <input type='name' name='gjest_" + (i+2) + "' id = 'person" + (i + 2) + "'class='form-control' placeholder='Gjest " + (i + 2) + "'> </div>" +
                    " <div class='col-sm-4'><select class = 'form-control'  required name ='gjest_" + (i+2) + "_overnatting' id = '" + sleepoverid + "'>" +
                    "<option value = 0>-- Skal han/hun overnatte? --</option>" +
                    "<option value = ja>Ja</option>" +
                    "<option value = nei>Nei</select></div>")
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

    // $("#sleepover").on('change', function () {
    //     var selector = document.getElementById("sleepover");
    //     var persons = selector.options[selector.selectedIndex].value;
    //
    //     var selector2 = document.getElementById("additionalPersons");
    //     var attendants = parseInt(selector2.options[selector2.selectedIndex].value) + 1;
    //
    //
    //     $("#sleepoverPersons").empty()
    //     if(persons == 'alle' ){
    //
    //     } else if (persons == 'ingen'){
    //
    //     }
    //     else if (persons > 0 ) {
    //         $("#sleepoverPersons").append("<div class='form-group'> <div class='col-sm-4'> <h5>Greit! Kryss av for de av dere som trenger overnatting.</h5> </div> </div>")
    //         for (i = 0; i < attendants; i++) {
    //             $("#sleepoverPersons").append("<div class='form-group'> <div class='col-sm-4'> <label><input type='checkbox'>Test</label></div> </div>")
    //         }
    //     }
    //
    //
    // });




})