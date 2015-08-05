/**
 * Created by Mahesh Rathnayaka on 8/3/2015.
 */


$(document).ready(function () {
    $('#btnDiagnose').click(function () {
        $.gritter.add({
            title: 'Success!',
            text: 'Profile has been updated',
            time: 3000
        });
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
                //Refresh divProfileData div without refreshing the entire page
                //var url = window.location.href;
                //$('#divProfileData-wrapper').load(url + ' #divProfileData');
                //$('#modelEditProfile').modal('toggle');
                //Show notification
                //$.gritter.add({
                //    title: 'Success!',
                //    text: 'Profile has been updated',
                //    time: 3000
                //});
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