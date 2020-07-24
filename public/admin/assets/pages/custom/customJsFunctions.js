/*  Module : User  :  Sub Module : Add User
    Purpose :  Used For To add User Other Skills */

$('#skills').change(function() {

    var selectedValues = $('#skills').val();
    var n = selectedValues.includes("0");
    if (n == true) {
        $("#DivOthersSkills").show();
    } else {
        $("#DivOthersSkills").hide();
    }

});

/*  Module : User  :  Sub Module : Add User
    Purpose :  Used For To add User Other Languages
*/
$('#languages').change(function() {

    var selectedValues = $('#languages').val();
    var n = selectedValues.includes("0");
    if (n == true) {
        $("#DivOthersLanguages").show();
    } else {
        $("#DivOthersLanguages").hide();
    }

});