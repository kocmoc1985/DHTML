<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<style type="text/css">
    #add_form{
        margin-top: 30px;
        margin-left:auto;
        margin-right: auto;
        padding-left:10px;
        padding-bottom:5px;
        width:55%;
        display: block;
        overflow: auto;

        color: black;

        /* drop shadow */
        -webkit-box-shadow: 0px 0px 5px 0px #444;
        -moz-box-shadow: 0px 0px 5px 0px #444;
        box-shadow: 0px 0px 5px 0px #444;

        /*round corners*/
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px; /* future proofing */
        -khtml-border-radius: 10px; /* for old Konqueror browsers */

        /* Firefox 3.6+ */ 
        background: -moz-linear-gradient(left, #D8E7FC, #F9FCFF); 
        /* Safari 4-5, Chrome 1-9 */ 
        background: -webkit-gradient(linear, left top, right top, from(#D8E7FC), to(#F9FCFF)); 
        /* Safari 5.1+, Chrome 10+ */ 
        background: -webkit-linear-gradient(left, #D8E7FC, #F9FCFF);
        /* Opera 11.10+ */ 
        background: -o-linear-gradient(left, #D8E7FC, #F9FCFF);
    }

    #add_form img{
        display: inline;
        float: right;
        margin-right:20px;
        margin-top: 30px;
        width: 150px;
        height: 100px;
    }   

    #add_form label{
        display: inline-block;
        font-weight: bold;
        float: left;
        clear: left;
        margin-bottom: 2px;
    }

    #add_form input,select{
        margin-bottom: 10px;
        display: inline-block;
        margin-top: 2px;
        float: left;
        clear: left;
        -moz-border-radius: 5px;
        -webkit-border-radius: 5px;
        -khtml-border-radius: 5px; 
        border-radius: 5px;
    }

    #add_form textarea{
        margin-bottom: 5px;
        float: left;
        clear: both;
    }

    #add_formSubmitBtn{
        margin-right: 10px;
        float: right;
    }

    .cfinset{
        border-style: inset;
        color: black;
    }
</style>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title></title>
    </head>
    <body>


        <?php
        $json_arr_1 = array(
            'date_time' => "00.00.00",
            'ip' => "192.168.0.1",
            'country_code' => "RUS",
            'file_and_path' => "aaaa/bbb",
        );

        $json_arr_2 = array(
            'date_time' => "00.00.00",
            'ip' => "192.168.0.22",
            'country_code' => "DE",
            'file_and_path' => "ccc/bbb",
        );


        $json_string_1 = json_encode($json_arr_1);
        $json_string_2 = json_encode($json_arr_2);

        $json_string_arr = array($json_string_1, $json_string_2);

        echo "size = " . sizeof($json_string_arr);

        json_write_array_with_json_encoded_strings_to_file($json_string_arr, "opc_signals/test.txt");

        //
        //
        function json_write_array_with_json_encoded_strings_to_file($array, $file_path) {
            $to_record = "";
            foreach ($array as $encoded_json_string) {
                //
                //Building the string to be recorded to file
                $to_record .= $encoded_json_string . "\n";
            }
            //Write to file
            file_put_contents($file_path, $to_record);
        }
        ?>
    </body>
</html>
