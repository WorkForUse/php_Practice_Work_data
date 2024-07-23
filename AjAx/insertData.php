<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            display: grid;
            place-items: center;
            padding: 10px;
        }

        #header {
            background-color: #ffbb00;
        }

        h1 {
            text-align: center;
        }

        #table-form {
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #success-message {
            background-color: #14e714;
            color: #000;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        #error-message {
            background-color: #000;
            color: red;
            padding: 10px;
            margin: 10px;
            display: none;
            position: absolute;
            right: 15px;
            top: 15px;
        }

        .delete-btn {
            background-color: red;
            color: #fff;
            border: 0;
            padding: 4px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        .edit-btn{
            background-color: green;
            color: #fff;
            border: 0;
            padding: 4px 10px;
            border-radius: 3px;
            cursor: pointer;
        }
        #modal{
            background-color: rgba(0, 0, 0, 0.7);
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            display: none;
        }
        #modal-form{
            background: #fff;
            width: 40%;
            position: relative;
            top: 20%;
            left: calc(50% - 20%);
            padding: 15px;
            border-radius: 4px;
        }
        #modal-form h2{
            margin: 0 0 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #000;
        }
        #close-btn{
            background-color: red;
            color: whitesmoke;
            width: 30px;
            height: 30px;
            line-height: 30px;
            text-align: center;
            border-radius: 50%;
            position: absolute;
            top: -15px;
            right: -15px;
            cursor: pointer;
        }
        #search-bar{
            padding: 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;

            & label{
                font-weight: bold;
                font-size: 20px;
            }

            & input{
                width: 70%;
                padding: 10px;
                border: 0;
                border-radius: 20px;
            }
        }
    </style>
</head>

<body>
    <table id="main" border="0" cellspacing="0">
        <tr>
            <td id="header">
                <h1>Add Records with PHP & Ajax</h1>

                <div id="search-bar">
                    <label>Search</label>
                    <input type="text" id="search" autocomplete="off">
                </div>
            </td>
        </tr>
        <tr>
            <td id="table-form">
                <form id="addForm">
                    First Name : <input type="text" id="fname">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    Last Name : <input type="text" id="lname">
                    <input type="submit" id="save-button" value="Save">
                </form>
            </td>
        </tr>
        <tr>
            <td id="table-data">
            </td>
        </tr>
    </table>
    <div id="error-message"></div>
    <div id="success-message"></div>
    <div id="modal">
        <div id="modal-form">
            <h2>Edit Form</h2>
            <table cellpadding="10px" width="100%">
            </table>
            <div id="close-btn">X</div>
        </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "ajaxLoad.php",
                    type: "POST",
                    success: function(resultdata) {
                        $("#table-data").html(resultdata);
                    }
                });
            };
            loadTable();

            $("#save-button").on("click", function(e) {

                e.preventDefault();
                var fname = $("#fname").val();
                var lname = $("#lname").val();
                if (fname == "" || lname == "") {
                    $("#error-message").html("All fields are required").slideDown();
                    $("#success-message").slideUp();
                } else {
                    $.ajax({
                        url: "ajaxInsert.php",
                        type: "POST",
                        data: {
                            first_name: fname,
                            last_name: lname,
                        },
                        success: function(data) {
                            if (data == 1) {
                                loadTable();
                                $("#addForm").trigger("reset");
                                $("#success-message").html("Data Inserted Successfully").slideDown();
                                $("#error-message").slideUp();
                            } else {
                                $("#error-message").html("Can't Save Record").slideDown();
                                $("#success-message").slideUp();
                            }
                        }
                    });
                }
            })

            $(document).on("click", ".delete-btn", function() {

                if(confirm("Do you really want to delete this record ?")){

                var studentId = $(this).data("id");
                var element = this;
                
                $.ajax({
                    url: "ajaxDelete.php",
                    type: "POST",
                    data: {id: studentId},
                    success: function (responsedata) {
                        if(responsedata == 1){
                            $(element).closest("tr").fadeOut();
                        }else{
                            $("#error-message").html("Can't Delete Record").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
                }
            });

            $(document).on("click", ".edit-btn", function(){
                $('#modal').show();
                var studentId = $(this).data("eid");

                $.ajax({
                    type: "POST",
                    url: "load_UpdatE_form.php",
                    data: {id: studentId },
                    success: function (responsedatA) {
                        $("#modal-form table").html(responsedatA);
                    }
                });

            });

            $("#close-btn").on("click", function(){
                $('#modal').hide();
            });

            $(document).on("click","#edit-submit",function(){
                var stuId = $("#edit-id").val();
                var fname = $("#edit-fname").val();
                var lname = $("#edit-lname").val();

                $.ajax({
                    type: "POST",
                    url: "Ajax_Update_ForM.php",
                    data: {id: stuId, first_name: fname, last_name: lname},
                    success: function (ReS) {
                        if(ReS == 1){
                            $('#modal').hide();
                            loadTable();
                        }
                    }
                });
            });

            $("#search").on("keyup",function(){
                var search_term = $(this).val();

                $.ajax({
                    type: "POST",
                    url: "ajaxLiveSearch.php",
                    data: {search:search_term},
                    success: function (searchData) {
                        $("#table-data").html(searchData);
                    }
                });
            });

        });
    </script>

</body>

</html>