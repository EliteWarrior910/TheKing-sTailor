<script>
    function ajaxPeople(badabing, name){
        $.ajax({
            type: "POST",
            url: "./Controller/submit-request.php",
            data: "request=" + badabing + "&name=" + name,
            success: function(data){
                $("#Whoa").html(data);
            },
            error: function(data){
                alert('An error occured. So... Go away. We\'ll fix it at some point.');
            },
        });
    }
</script>