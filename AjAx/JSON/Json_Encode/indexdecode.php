<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>J ka Son</title>
    <style>
        #main{
            background-color: cornsilk;
            width: 70%;
            aspect-ratio: 1;
        }
    </style>
</head>
<body 
    style="display: grid;
     place-items: center;
     font-family: Arial, Helvetica, sans-serif;">
    <div id="main">
        <div id="header">
            <h1 style="text-align: center;">Read JSON Data</h1>
            </div>
            <div id="load-data">
                <table id="load-table" border="1" cellpadding="10px" width="100%">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                    </tr>
                </table>
            </div>
    </div>

    <script src="../jquery-3.7.1.min.js"></script>
    <script>

        $.ajax({
            type: "POST",
            url: "fetchJsonDecode.php",
            data: { id : 2 },
            dataType: "JSON",
            success: function (data) {
                $.each(data,function(key,value){
                    $("#load-table").append("<tr><td>" + value.id + "</td><td>" + value.student_name + "</td><td>" + value.age + "</td><td>" + value.city + "</td></tr>");
                });
            }
        });

        // $.getJSON(
        //     "fetchJsonDecode.php",
        //     function(data){
        //         $.each(data,function(key,value){
        //             $("#load-data").append(value.id + " " + value.student_name + " " + value.age + " " + value.city + "<br>");
        //         });
        //     }
        // );
    </script>
</body>
</html>