/**
 * Created by Daminda on 8/9/2015.
 */


$(document).ready(function () {
    $('#btnDentalHealthSave').hide();
    $('#errorProfileEditDH').hide();
    $('#successProfileEditDH').hide();


    $('#btnDiagnose').click(function () {
        $.gritter.add({
            title: 'Success!',
            text: 'Profile has been updated',
            time: 3000
        });
    });
    $('#dp1').datepicker({
        format: "yyyy-mm-dd",
        todayBtn: "linked",
        autoclose: true,
        todayHighlight: true
    });
});
var FieldEnable = function (id) {
    var concatID = "#" + id;
    $(concatID).prop('disabled', false);
};
var FieldDisable = function (id) {
    var concatID = "#" + id;
    $(concatID).prop('disabled', true);
};
var ButtonSettings = function () {
    $("#btnProfileSave").hide();
    $('#successProfileEdit').hide();
    $('#errorProfileEdit').hide();
    $('#errorProfileEditFields').hide();
    $('#btnProfileEdit').show();
    FieldDisable("txtFirstName");
    FieldDisable("txtLastName");
    FieldDisable("txtOccupation");
    FieldDisable("txtEmail");
    FieldDisable("txtPostalNo");
    FieldDisable("txtAddress01");
    FieldDisable("txtAddress02");
    FieldDisable("txtCity");
    FieldDisable("txtHomeNo");
    FieldDisable("txtMobileNo");
    FieldDisable("txtWorkNo");
}
var ProfileSaveButtonAction = function () {
    var profile = {
        first_name: $('#txtFirstName').val(),
        last_name: $('#txtLastName').val(),
        occupation: $('#txtOccupation').val(),
        email: $('#txtEmail').val(),
        postal_no: $('#txtPostalNo').val(),
        address1: $('#txtAddress01').val(),
        address2: $('#txtAddress02').val(),
        city: $('#txtCity').val(),
        home_no: $('#txtHomeNo').val(),
        mobile_no: $('#txtMobileNo').val(),
        work_no: $('#txtWorkNo').val(),
        identity: $('#txtIdentityProfile').val(),
        p_id: $('#txtPID').val()
    };
    $.ajax({
        type: 'POST',
        url: SITE_URL + '/channeling/profile_save',
        data: {
            profile: profile
        },
        success: function (data) {
            if (data == "111") {
                ButtonSettings();
                $('#successProfileEdit').show().delay(3000);
                location.reload();
            } else {
                $('#errorProfileEdit').show();
            }
        }
    });
}
var ProfileEditButtonAction = function () {
    $('#btnProfileSave').show();
    $('#btnProfileEdit').hide();
    FieldEnable("txtFirstName");
    $("#txtFirstName").focus();
    FieldEnable("txtLastName");
    FieldEnable("txtOccupation");
    FieldEnable("txtEmail");
    FieldEnable("txtPostalNo");
    FieldEnable("txtAddress01");
    FieldEnable("txtAddress02");
    FieldEnable("txtCity");
    FieldEnable("txtHomeNo");
    FieldEnable("txtMobileNo");
    FieldEnable("txtWorkNo");
}
var DentalHealthEditButtonAction = function () {
    $('#btnDentalHealthSave').show();
    $('#btnDentalHealthEdit').hide();
    FieldEnable("chkDifficultyChewingFood");
    FieldEnable("chkTeethSensitive");
    FieldEnable("chkChewOneSide");
    FieldEnable("chkHurtWhenBite");
    FieldEnable("chkAvoidBrishingPain");
    FieldEnable("chkSlowHealing");
    FieldEnable("chkGumsBleed");
    FieldEnable("chkHadTrauma");
    FieldEnable("chkGumsSwollenTender");
    FieldEnable("chkPainInFCJJTT");
    FieldEnable("chkGumChewer");
    FieldEnable("chkBetelChewer");
    FieldEnable("chkPipeSmoker");
    FieldEnable("chkCigarette");
    FieldEnable("chkHotFood");
    FieldEnable("chkColdFood");
    FieldEnable("chkSours");
    FieldEnable("chkSweets");
    FieldEnable("txtAreaDHKnownAllergies");
    FieldEnable("txtAreaDHOther");
}

var ButtonSettingsDentalHealth = function(){
    $('#btnDentalHealthSave').hide();
    $('#btnDentalHealthEdit').show();
    $('#errorProfileEditDH').hide();
    $('#successProfileEditDH').hide();
    FieldDisable("chkDifficultyChewingFood");
    FieldDisable("chkTeethSensitive");
    FieldDisable("chkChewOneSide");
    FieldDisable("chkHurtWhenBite");
    FieldDisable("chkAvoidBrishingPain");
    FieldDisable("chkSlowHealing");
    FieldDisable("chkGumsBleed");
    FieldDisable("chkHadTrauma");
    FieldDisable("chkGumsSwollenTender");
    FieldDisable("chkPainInFCJJTT");
    FieldDisable("chkGumChewer");
    FieldDisable("chkBetelChewer");
    FieldDisable("chkPipeSmoker");
    FieldDisable("chkCigarette");
    FieldDisable("chkHotFood");
    FieldDisable("chkColdFood");
    FieldDisable("chkSours");
    FieldDisable("chkSweets");
    FieldDisable("txtAreaDHKnownAllergies");
    FieldDisable("txtAreaDHOther");

}
var DentalHealthSaveButtonAction = function(){
    var dentalHealth = {
        chkDifficultyChewingFood: $("#chkDifficultyChewingFood").is(':checked') ? 1 : 0,
        chkTeethSensitive: $("#chkTeethSensitive").is(':checked') ? 1 : 0,
        chkChewOneSide: $("#chkChewOneSide").is(':checked') ? 1 : 0,
        chkHurtWhenBite: $("#chkHurtWhenBite").is(':checked') ? 1 : 0,
        chkAvoidBrishingPain: $("#chkAvoidBrishingPain").is(':checked') ? 1 : 0,
        chkSlowHealing: $("#chkSlowHealing").is(':checked') ? 1 : 0,
        chkGumsBleed: $("#chkGumsBleed").is(':checked') ? 1 : 0,
        chkHadTrauma: $("#chkHadTrauma").is(':checked') ? 1 : 0,
        chkGumsSwollenTender: $("#chkGumsSwollenTender").is(':checked') ? 1 : 0,
        chkPainInFCJJTT: $("#chkPainInFCJJTT").is(':checked') ? 1 : 0,
        chkGumChewer: $("#chkGumChewer").is(':checked') ? 1 : 0,
        chkBetelChewer: $("#chkBetelChewer").is(':checked') ? 1 : 0,
        chkPipeSmoker: $("#chkPipeSmoker").is(':checked') ? 1 : 0,
        chkCigarette: $("#chkCigarette").is(':checked') ? 1 : 0,
        chkHotFood: $("#chkHotFood").is(':checked') ? 1 : 0,
        chkColdFood: $("#chkColdFood").is(':checked') ? 1 : 0,
        chkSours: $("#chkSours").is(':checked') ? 1 : 0,
        chkSweets: $("#chkSweets").is(':checked') ? 1 : 0,
        dhknownAllergies: $('#txtAreaDHKnownAllergies').val(),
        dhother: $('#txtAreaDHOther').val(),
        p_id: $('#txtPID').val()
    };
    //alert('before ajax');
    $.ajax({
        type: 'POST',
        url: SITE_URL + '/channeling/dentalHistory_save',
        data: {
            dentalHealth: dentalHealth
        },
        success: function (data) {
            if (data) {
                ButtonSettingsDentalHealth();
                $('#successProfileEditDH').show().delay(3000);
                location.reload();

            } else {
                $('#errorProfileEditDH').show().delay(3000);
                location.reload();

            }

        }
    });
    //alert('after ajax');
}
var ButtonSettingsMedicalHealthHistory = function(){
    $('#btnMedicalHealthHistorySave').hide();
    $('#errorMedicalHealthEdit').hide();
    $('#successMedicalHealthEdit').hide();
}
var MedicalHealthHistoryEditAction = function () {

    $('#btnMedicalHealthHistorySave').show();
    $('#btnMedicalHealthHistoryEdit').hide();
    FieldEnable("chkDiabetes");
    FieldEnable("chkShortness");
    FieldEnable("chkAngina");
    FieldEnable("chkDepression");
    FieldEnable("chkHighCholesterol");
    FieldEnable("chkTonsillitis");
    FieldEnable("chkKidney");
    FieldEnable("chkThyroid");
    FieldEnable("chkHighBloodPressure");
    FieldEnable("chkAsthma");
    FieldEnable("chkLung");
    FieldEnable("chkUlcers");
    FieldEnable("chkLowBloodPressure");
    FieldEnable("chkStroke");
    FieldEnable("chkLiver");
    FieldEnable("chkGastric");
    FieldEnable("chkHeartburn");
    FieldEnable("chkSinusProblems");
    FieldEnable("chkHeadaches");
    FieldEnable("chkEarProblems");
    FieldEnable("chkAnemia");
    FieldEnable("chkArthritis");
    FieldEnable("chkNeurological");
    FieldEnable("chkSeasonalAllergies");
    FieldEnable("chkSwollen");
    FieldEnable("chkCancer");
    FieldEnable("chkEyeDisorder");
    FieldEnable("chkOther");
    FieldEnable("txtAreaOther");

}

var  MedicalHealthHistorySaveAction = function(){

    var medicalHealth = {
        chkDiabetes: $("#chkDiabetes").is(':checked') ? 1 : 0,
        chkShortness: $("#chkShortness").is(':checked') ? 1 : 0,
        chkAngina: $("#chkAngina").is(':checked') ? 1 : 0,
        chkDepression: $("#chkDepression").is(':checked') ? 1 : 0,
        chkHighCholesterol: $("#chkHighCholesterol").is(':checked') ? 1 : 0,
        chkTonsillitis: $("#chkTonsillitis").is(':checked') ? 1 : 0,
        chkKidney: $("#chkKidney").is(':checked') ? 1 : 0,
        chkThyroid: $("#chkThyroid").is(':checked') ? 1 : 0,
        chkHighBloodPressure: $("#chkHighBloodPressure").is(':checked') ? 1 : 0,
        chkAsthma: $("#chkAsthma").is(':checked') ? 1 : 0,
        chkLung: $("#chkLung").is(':checked') ? 1 : 0,
        chkUlcers: $("#chkUlcers").is(':checked') ? 1 : 0,
        chkLowBloodPressure: $("#chkLowBloodPressure").is(':checked') ? 1 : 0,
        chkStroke: $("#chkStroke").is(':checked') ? 1 : 0,
        chkLiver: $("#chkLiver").is(':checked') ? 1 : 0,
        chkGastric: $("#chkGastric").is(':checked') ? 1 : 0,
        chkHeartburn: $("#chkHeartburn").is(':checked') ? 1 : 0,
        chkSinusProblems: $("#chkSinusProblems").is(':checked') ? 1 : 0,

        chkHeadaches: $("#chkHeadaches").is(':checked') ? 1 : 0,
        chkEarProblems: $("#chkEarProblems").is(':checked') ? 1 : 0,
        chkAnemia: $("#chkAnemia").is(':checked') ? 1 : 0,
        chkArthritis: $("#chkArthritis").is(':checked') ? 1 : 0,
        chkNeurological: $("#chkNeurological").is(':checked') ? 1 : 0,
        chkSeasonalAllergies: $("#chkSeasonalAllergies").is(':checked') ? 1 : 0,
        chkSwollen: $("#chkSwollen").is(':checked') ? 1 : 0,
        chkCancer: $("#chkCancer").is(':checked') ? 1 : 0,
        chkEyeDisorder: $("#chkEyeDisorder").is(':checked') ? 1 : 0,

        txtAreaOther: $('#txtAreaOther').val(),
        p_id: $('#txtPID').val()
    };


    $.ajax({

        type: 'POST',
        url: SITE_URL + '/channeling/medicalHistory_save',
        data: {
            medicalHealth: medicalHealth
        },
        success: function (data) {
            if (data) {
                $('#successMedicalHealthEdit').show().delay(3000);
                location.reload();
            } else {
                $('#errorMedicalHealthEdit').show();
            }
        }
    });
}

var PastTreatmentButtonSettings = function (){

    $('#pastTreatmentSave').hide();
    $('#successPastTreatment').hide();
    $('#errorPastTreatment').hide();
}

var pastTreatmentEditAction = function (){
    $('#pastTreatmentSave').show();
    $('#pastTreatmentEdit').hide();
    FieldEnable("chkRemoval");
    FieldEnable("chkWoundTreatment");
    FieldEnable("chkFilling");
    FieldEnable("chkSealants");
    FieldEnable("chkRetainers");
    FieldEnable("chkBraces");
    FieldEnable("chkCleaning");
    FieldEnable("chkPolishing");
    FieldEnable("chkBridges");
    FieldEnable("chkDentures");
    FieldEnable("chkImplants");

}

var pastTreatmentSaveAction = function (){

    var pastTreatment = {
        chkRemoval: $("#chkRemoval").is(':checked') ? 1 : 0,
        chkWoundTreatment: $("#chkWoundTreatment").is(':checked') ? 1 : 0,
        chkFilling: $("#chkFilling").is(':checked') ? 1 : 0,
        chkSealants: $("#chkSealants").is(':checked') ? 1 : 0,
        chkRetainers: $("#chkRetainers").is(':checked') ? 1 : 0,
        chkBraces: $("#chkBraces").is(':checked') ? 1 : 0,
        chkCleaning: $("#chkCleaning").is(':checked') ? 1 : 0,
        chkPolishing: $("#chkPolishing").is(':checked') ? 1 : 0,
        chkBridges: $("#chkBridges").is(':checked') ? 1 : 0,
        chkDentures: $("#chkDentures").is(':checked') ? 1 : 0,
        chkImplants: $("#chkImplants").is(':checked') ? 1 : 0,
        p_id: $('#txtPID').val()
    };

    $.ajax({

        type: 'POST',
        url: SITE_URL + '/channeling/pastTreatment_save',
        data: {
            pastTreatment: pastTreatment
        },
        success: function (data) {
            if (data) {
                $('#successPastTreatment').show().delay(3000);
                location.reload();
            } else {
                $('#errorPastTreatment').show();
            }
        }
    });

}

var womenHealthButtonSettings = function (){
    $('#btnwomenHealthSave').hide();
    $('#successWomenhealth').hide();
    $('#errorWomenhealth').hide();

}

var btnwomenHealthEditAction = function (){
    $('#btnwomenHealthSave').show();
    $('#btnwomenHealthEdit').hide();
    FieldEnable("chkPregnant");
    FieldEnable("txtNumberOfWeeks");
    FieldEnable("txtNumberOfPregnancies");
    FieldEnable("txtNumberOfBirths");
    FieldEnable("chkNursing");
    FieldEnable("txtMenstruating");
    FieldEnable("txtBeginningPeriods");
    FieldEnable("txtEndPeriods");

}

var btnwomenHealthSaveAction = function() {

    var womenHealth = {
        chkPregnant: $("#chkPregnant").is(':checked') ? 1 : 0,
        num_of_weeks: $('#txtNumberOfWeeks').val(),
        total_no_pregna: $('#txtNumberOfPregnancies').val(),
        total_no_birth: $('#txtNumberOfBirths').val(),
        chkNursing: $("#chkNursing").is(':checked') ? 1 : 0,
        stillMenstruating: $('#txtMenstruating').val(),
        txtBeginningPeriods: $('#txtBeginningPeriods').val(),
        txtEndPeriods: $('#txtEndPeriods').val(),
        p_id: $('#txtPID').val()
    };

    $.ajax({

        type: 'POST',
        url: SITE_URL + '/channeling/womenHealth_save',
        data: {
            womenHealth: womenHealth
        },
        success: function (data) {
            if (data) {
                $('#successWomenhealth').show().delay(3000);
                location.reload();
            } else {
                $('#errorWomenhealth').show();
            }
        }
    });

}
/**
 * ATTEMPTS
 */
//$('#modelEditProfile').on('show',function(e){
//    if(!confirm('You want to close me?'))
//        e.preventDefault();
//});
// enable disable
//$("#modelEditProfile :input").removeAttr('disabled');
//$("#modelEditProfile :input").attr('disabled','disabled');
//$("#modelEditProfile").find("textarea, select, text").attr("disabled", "disabled");
