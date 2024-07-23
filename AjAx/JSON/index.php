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

            <div id="load-data"></div>

        </div>
    </div>

    <script src="./jquery-3.7.1.min.js"></script>
    <script>
        // $(document).ready(function(){
        //     $.ajax({
        //         type: "GET",
        //         // url: "https://jsonplaceholder.typicode.com/posts/50",
        //         // url: "https://jsonplaceholder.typicode.com/posts",
        //         url: "./my.json",
        //         success: function (jsonResponse) {
        //             // $("#load-data").append(jsonResponse.id + "<br>" + jsonResponse.title + "<br>" + jsonResponse.body);
        //             // console.log(jsonResponse);
        //             $.each(jsonResponse, function(key,value){
        //                 // console.log(value.id + "<br>" + value.title + "<br>" + value.body)
        //                 $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
        //             });
        //         }
        //     });
        // })

        $(document).ready(function(){
            $.getJSON(
                "./my.json",
                function (jsonResponse) {
                    $.each(jsonResponse, function(key,value){
                        $("#load-data").append(value.id + "<br>" + value.title + "<br>" + value.body + "<br>");
                });
                }
            );
        });
    </script>
</body>
</html>