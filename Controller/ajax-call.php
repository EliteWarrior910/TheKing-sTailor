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
</script>