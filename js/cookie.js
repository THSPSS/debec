$(function () {

    if (localStorage.chkbox && localStorage.chkbox != '') {
        $('#remember').attr('checked', 'checked');
        $('#userid').val(localStorage.username);
    } else {
        $('#remember').removeAttr('checked');
        $('#userid').val('');
    }

    $('#remember').click(function () {

        if ($('#remember').is(':checked')) {
            localStorage.username = $('#userid').val();
            localStorage.chkbox = $('#remember').val();
        } else {
            localStorage.username = '';
            localStorage.chkbox = '';
        }
});
});