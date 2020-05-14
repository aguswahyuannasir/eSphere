<html>
    <head>
        <script src="./jquery.min.js" type="text/javascript"></script>
    </head>
    <body>
        <input type="text" id="input">
        <button type="button" id="btn_submit"> Submit </button>
        <br>
        <span> Hasil : </span>
        <span id="hasil"></span>
    </body>
</html>


<script>

    $('#btn_submit').on('click', function() {
        var rs =  $('#input').val();

        var url         = 'ajax.php';
        var param       = {rs:rs};
        $.post(url, param, function(msg){
            $('#hasil').text(msg);

        });

     });

</script>
