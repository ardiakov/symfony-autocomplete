$(function () {
    $('#autocomplete').autocomplete({
        serviceUrl: 'http://127.0.0.1:9999/api/autocomplete'
    }).enable();
})
