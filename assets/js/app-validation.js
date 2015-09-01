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
    $('#dpDisease').change(function(){
        if($('#dpDisease').val() == "no"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>'
            );
        }else if($('#dpDisease').val() == "caries"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="initial">Initial </option>' +
                '<option value="dentine">Dentine </option>' +
                '<option value="pulp">Pulp exposed </option>'
            );
        }else if($('#dpDisease').val() == "periodontal"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="gingivitis">Gingivitis </option>' +
                '<option value="periodontitis">Periodontitis </option>'
            );
        }else if($('#dpDisease').val() == "lesions"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="premalignant">Premalignant </option>' +
                '<option value="cancerous">Cancerous </option>' +
                '<option value="nonCancerous">Non Cancerous </option>'
            );
        }else if($('#dpDisease').val() == "malocclusion"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="cls2d1">Class 2 Division 1 </option>' +
                '<option value="cls2d2">Class 2 Division 2 </option>' +
                '<option value="cls3">Class 3 </option>'
            );
        }else if($('#dpDisease').val() == "fluorosis"){
            $('#dpCategory').prop('disabled', true);
            $('#dpCategory').empty().append(
                '<option value="no">-- No Category --</option>'
            );
        }else if($('#dpDisease').val() == "sensitivity"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="toothDecay">Tooth decay </option>' +
                '<option value="fractured">Fractured teeth </option>' +
                '<option value="wornFilling">Worn fillings </option>' +
                '<option value="gumDisease">Gum disease </option>' +
                '<option value="wornTooth">Worn tooth enamel </option>' +
                '<option value="exposedTooth">Exposed tooth root </option>'
            );
        }else if($('#dpDisease').val() == "oropharyngeal"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="sores">Sores that bleed easily or do not heal</option>' +
                '<option value="thick">Thick or hard spot or lump</option>' +
                '<option value="roughened">Roughened or crusted area</option>' +
                '<option value="numbness">Numbness, pain or tenderness</option>' +
                '<option value="change">Change in the way your teeth fit together when you bite down</option>'
            );
        }else if($('#dpDisease').val() == "missing"){
            $('#dpCategory').prop('disabled', true);
            $('#dpCategory').empty().append(
                '<option value="no">-- No Category --</option>'
            );
        }else if($('#dpDisease').val() == "dry"){
            $('#dpCategory').prop('disabled', true);
            $('#dpCategory').empty().append(
                '<option value="no">-- No Category --</option>'
            );
        }else if($('#dpDisease').val() == "extra"){
            $('#dpCategory').prop('disabled', false);
            $('#dpCategory').empty().append(
                '<option value="no">-- Please Select --</option>' +
                '<option value="facial">Facial issues </option>' +
                '<option value="swellings">Swellings </option>'
            );
        }else if($('#dpDisease').val() == "other"){
            $('#dpCategory').prop('disabled', true);
            $('#dpCategory').empty().append(
                '<option value="no">-- No Category --</option>'
            );
        }
    });
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