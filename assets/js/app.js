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
jQuery(document).ready(function() {

    var api=jQuery('.metro-gal-container').megafoliopro(
        {
            filterChangeAnimation:"pagebottom",			// fade, rotate, scale, rotatescale, pagetop, pagebottom,pagemiddle
            filterChangeSpeed:400,					// Speed of Transition
            filterChangeRotate:99,					// If you ue scalerotate or rotate you can set the rotation (99 = random !!)
            filterChangeScale:0.6,					// Scale Animation Endparameter
            delay:20,
            defaultWidth:980,
            paddingHorizontal:10,
            paddingVertical:10,
            layoutarray:[9,11,5,3,7,12,4,6,13]		// Defines the Layout Types which can be used in the Gallery. 2-9 or "random". You can define more than one, like {5,2,6,4} where the first items will be orderd in layout 5, the next comming items in layout 2, the next comming items in layout 6 etc... You can use also simple {9} then all item ordered in Layout 9 type.
        });

    // FANCY BOX ( LIVE BOX) WITH MEDIA SUPPORT
    jQuery(".fancybox").fancybox();

    // THE FILTER FUNCTION
    jQuery('.filter').click(function() {
        jQuery('.filter').each(function() { jQuery(this).removeClass("selected")});
        api.megafilter(jQuery(this).data('category'));
        jQuery(this).addClass("selected");
    });


});
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