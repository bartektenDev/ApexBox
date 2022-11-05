$("#dt").datepicker({
    onSelect: function(dateText, inst) {
        //var date = $(this).val();
        var time = $('#time').val();
        alert(time.toString());
        $("#start").val(date + time.toString(' HH:mm').toString());
        console.log(date + time.toString(' HH:mm').toString());

        $("#dt").val(date + time.toString(' HH:mm').toString());

        $("#dateDataHidden").val("test");
    }
});
