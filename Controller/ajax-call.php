<script>
    function ajaxPeople(requestjax, custjax){
        $.ajax({
            type: "POST",
            url: "./Controller/submit-request.php",
            data: "request=" + requestjax + "&cust=" + custjax,
            success: function(data){
                $("#aOutput").html(data);
            },
            error: function(data){
                alert('An error occured. So... Go away. We\'ll fix it at some point.');
            },
        });
    }

    function ajaxLumberjack(logJax){
        $.ajax({
            type: "POST",
            url: "./Controller/login.php",
            data: "lumber=" + logJax,
            success: function(data){
                $("#bOutput").html(data);
                window.location.href = "./KingsCustom.php";
            },
            error: function(data){
                alert('An error occured. So... Go away. We\'ll fix it at some point.');
            },
        });
    }
</script>