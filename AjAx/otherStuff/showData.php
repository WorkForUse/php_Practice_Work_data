<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>PHP with Ajax</h1>
            </td>
        </tr>
        <tr>
            <td id="table-load">
                <input type="button" id="load-button" value="Load Data">
            </td>
        </tr>
        <tr>
            <td id="table-data">
                <table>
                </table>
            </td>
        </tr>
    </table>

    <!-- that both are same one is online and one is offline -->
    <!-- ---------------- -->
    <!-- offline method -->
    <!-- <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script> -->
    <!-- online method -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $("#load-button").on("click",function(e){
                $.ajax({
                    url : "ajaxLoad.php",
                    type : "POST",
                    success : function(resultdata){
                        $("#table-data").html(resultdata);
                    }
                });
            });
        });
    </script>

</body>
</html>