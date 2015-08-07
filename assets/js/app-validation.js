/**
 * Created by Mahesh Rathnayaka on 8/3/2015.
 */

var FieldEnable = function (id) {
    var concatID = "#" + id;
    $(concatID).prop('disabled', false);
};

var FieldDisable = function (id) {
    var concatID = "#" + id;
    $(concatID).prop('disabled', true);
};
$(document).ready(function () {
    $('#widgetWomenHealth').hide();
    $('#id_radio_male').click(function () {
        $('#widgetWomenHealth').hide();
    });
    $('#id_radio_female').click(function () {
        $('#widgetWomenHealth').show();
    });

    $('#chkOther').click(function () {
        if ($('#chkOther').prop('checked')) {
            FieldEnable("txtAreaOther");
            $('#txtAreaOther').focus();
        } else {
            FieldDisable("txtAreaOther");
        }
    });
    $('#chkPregnant').click(function () {
        if ($('#chkPregnant').prop('checked')) {
            FieldEnable("txtNumberOfWeeks");
            FieldEnable("txtNumberOfPregnancies");
            FieldEnable("txtNumberOfBirths");
            $('#txtNumberOfWeeks').focus();
        } else {
            FieldDisable("txtNumberOfWeeks");
            FieldDisable("txtNumberOfPregnancies");
            FieldDisable("txtNumberOfBirths");
        }
    });
    $('#chkNursing').click(function () {
        if ($('#chkNursing').prop('checked')) {
            FieldEnable("txtMenstruating");
            FieldEnable("txtBeginningPeriods");
            FieldEnable("txtEndPeriods");
            $('#txtMenstruating').focus();
        } else {
            FieldDisable("txtMenstruating");
            FieldDisable("txtBeginningPeriods");
            FieldDisable("txtEndPeriods");
        }
    });
    /**
     * Show success div for a 3 seconds and hide
     */
    setTimeout(function() {
        $('#divSuccessArea').hide();
    }, 3000);
});
$(document).ready(function () {
    $('#btnPatientSave').click(function(){
        if(validation.valid()){
            $('#divErrorArea').show();
        }else{
            $('#divErrorArea').hide();
        }
    });
    var validation = $('#formRegistration').validate({
        errorLabelContainer: "#ulErrorList",
        wrapper: "li",
        rules: {
            txtFirstName: "required",
            txtSurname: "required",
            txtBirthday: {
                required: true
            },
            txtMobileTel: {
                required: true,
                minlength: 10,
                maxlength:10
            },
            txtEmail: {
                required: true,
                email: true
            },
            txtAreaReasonForVisit: {
                required: true
            },
            optionsRadios1: "required"
        },
        messages: {
            txtFirstName: "First name cannot be empty",
            txtSurname: "Surname cannot be empty",
            txtBirthday: {
                required: "Birthday cannot be empty"
            },
            txtMobileTel: {
                required: "Mobile number cannot be empty",
                minlength: "Mobile number is not valid",
                maxlength: "Mobile number is not valid"
            },
            txtEmail: {
                required: "Email address cannot be empty",
                email: "Email addredd is not valid"
            },
            txtAreaReasonForVisit: "Reason cannot be empty",
            optionsRadios1: "Gender is not selected"
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});