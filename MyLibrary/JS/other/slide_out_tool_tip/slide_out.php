<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <link href="slideOutToolTip.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="../../jquery-1.9.1.js"></script>
        <script type="text/javascript" src="../../my_lib_a.js"></script>
    </head>
    <body>
        <style type="text/css">
            .test{
                display: inline-block;
                margin-right: 40px;
                margin-bottom: 15px;
            }

            #hide{
                cursor: pointer;
                margin-top: 5px;
                float: right;
            }
            
            #hide:hover{
                text-decoration: underline;
            }
        </style>
        <!--------------------------------------------------------------------->
        <div class="test">
            <input type="checkbox" id="test1" class="popUpControl">
            <label for="test1" class="button">
                <span>Test1</span>
                <span class="box">
                    <img src="http://placedog.com/260/260">
                </span>
            </label>
        </div>

        <!--------------------------------------------------------------------->
        <div class="test">
            <input type="checkbox" id="test2" class="popUpControl">
            <label for="test2" class="link">
                <span>Test2</span>
                <span class="box">
                    <img src="http://placedog.com/260/260">
                </span>
            </label>
        </div>
        <!--------------------------------------------------------------------->
        <script type="text/javascript">
            $(document).ready(function() {

                $("#test3").click(function(event) {
                    if (getStateOfRadioOrChkBox("test3") === false) {
                        event.preventDefault();
                    }
                });

                $("#hide").click(function(event) {
                    setCheckedForCheckBox("test3", false);
                    event.preventDefault();
                });

            });

        </script>

        <div class="test">
            <input type="checkbox" id="test3" class="popUpControl">
            <label for="test3" class="button">
                <span>Test3/Login</span>
                <span class="box">
                    <?php include "_login.php"; ?>
                    <div id="hide">hide</div>
                </span>
            </label>
            <!--------------------------------------------------------------------->
        </div>
    </body>
</html>
