/**
 * Created by Mahesh Rathnayaka on 8/3/2015.
 */

//$(document).ready(function () {
//    $("#btnProfileSave").hide();
//});

var ButtonSettings = function () {
    $("#btnProfileSave").hide();
    $('#successProfileEdit').hide();
    $('#errorProfileEdit').hide();
    $('#btnProfileEdit').show();
    $("#txtFirstName").prop('disabled', true);
    $('#txtFirstName').prop('disabled', true);
    $('#txtLastName').prop('disabled', true);
    $('#txtOccupation').prop('disabled', true);
    $('#txtEmail').prop('disabled', true);
    $('#txtPostalNo').prop('disabled', true);
    $('#txtAddress01').prop('disabled', true);
    $('#txtAddress02').prop('disabled', true);
    $('#txtCity').prop('disabled', true);
    $('#txtHomeNo').prop('disabled', true);
    $('#txtMobileNo').prop('disabled', true);
    $('#txtWorkNo').prop('disabled', true);
}

var ProfileSaveButtonAction = function () {
    var profile = {
        first_name : $('#txtFirstName').val(),
        last_name : $('#txtLastName').val(),
        occupation : $('#txtOccupation').val(),
        email : $('#txtEmail').val(),
        postal_no : $('#txtPostalNo').val(),
        address1 : $('#txtAddress01').val(),
        address2 : $('#txtAddress02').val(),
        city : $('#txtCity').val(),
        home_no : $('#txtHomeNo').val(),
        mobile_no : $('#txtMobileNo').val(),
        work_no : $('#txtWorkNo').val(),
        identity : $('#txtIdentity').val(),
        p_id : $('#txtPID').val()
    };


            $.post("demo_test_post.asp",
                {
                    name: "Donald Duck",
                    city: "Duckburg"
                },
                function(data,status){
                    alert("Data: " + data + "\nStatus: " + status);
                });











    var request = $.ajax({
        url: "index.php/channeling/profile_save",
        type: 'POST',
        profile_data_array: {
            profile: profile
        },
        success: function(result){
            $('#successProfileEdit').show();
            alert(result);
        }
    });
    //request.done(function(data) {
    //    //$( "#tst" ).html( msg );
    //    $('#successProfileEdit').show();
    //    alert(data);
    //});
    //request.fail(function( jqXHR, textStatus ) {
    //    alert( "Request failed: " + textStatus );
    //});
}

var ProfileEditButtonAction = function () {
    $('#btnProfileSave').show();
    $('#btnProfileEdit').hide();
    $("#txtFirstName").prop('disabled', false);
    $("#txtFirstName").focus();
    $('#txtFirstName').prop('disabled', false);
    $('#txtLastName').prop('disabled', false);
    $('#txtOccupation').prop('disabled', false);
    $('#txtEmail').prop('disabled', false);
    $('#txtPostalNo').prop('disabled', false);
    $('#txtAddress01').prop('disabled', false);
    $('#txtAddress02').prop('disabled', false);
    $('#txtCity').prop('disabled', false);
    $('#txtHomeNo').prop('disabled', false);
    $('#txtMobileNo').prop('disabled', false);
    $('#txtWorkNo').prop('disabled', false);

    //$.ajax({
    //    url: "<?php echo base_url(); ?>index.php/channeling/profile_save",
    //    type: 'POST',
    //    data: {
    //        priceArray: price,
    //        sellerArray: sellers,
    //        locationArray: location
    //        //   attributesArray: attributes
    //    },
    //    success: function(data)
    //    {
    //        if (data)
    //        {
    //            $('#div_gallery').html(data);
    //        }
    //    }
    //});


    //$.ajax({
    //    method: "POST",
    //    url: "<?php echo base_url(); ?>index.php/channeling/profile_save?>",
    //    data: { name: "John", location: "Boston" }
    //})
    //    .done(function( msg ) {
    //        alert( "Data Saved: " + msg );
    //    });
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