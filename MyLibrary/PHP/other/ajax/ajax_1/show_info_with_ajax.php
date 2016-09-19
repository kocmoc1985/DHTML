<style type="text/css">
    #ajax_div{
        width: 50%;
        /*height: 20%;*/
        border-style: inset;
        overflow: auto;
        padding-bottom: 20px;
    }

    .btn{
        display: inline-block;
        margin-bottom: 20px;
    }

    .btn_jquery{
        display: inline-block;
    }
</style>

<head>
    <script type="text/javascript" src="../../../../../mylibrary/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="../../../../../mylibrary/js/my_lib_a.js"></script>
</head>

<div id='ajax_div'>
    <h3>Ajax with js</h3>
    <button class='btn' type='button' onclick="ajax_request(this.innerHTML);">100</button>
    <button class='btn' type='button' onclick="ajax_request(this.innerHTML);">200</button>
    <button class='btn' type='button' onclick="ajax_request(this.innerHTML);">300</button>
    <br><hr>
    <h3>Ajax with jquery</h3>
    <button class='btn_jquery' type='button' onclick="ajax_request_jquery(this.innerHTML);">100</button>
    <button class='btn_jquery' type='button' onclick="ajax_request_jquery(this.innerHTML);">200</button>
    <br><hr>
</div>


<script language = "javascript">

        function ajax_request(val_to_send) {
//            alert("val_to_send = " + val_to_send);
            xmlhttp = ajaxRequest("ajax.php", "test_request", "" + val_to_send, true);
            ajaxRequestReady(xmlhttp, handle_ajax_response);
        }

        function handle_ajax_response(response) {
            ajaxAddResponse("ajax_div", response);
        }

        //==========================================================================
        //==========================================================================

        function ajax_request_jquery(val_to_send) {
            $.ajax({
                async: "true", //is true by default
                type: "GET",
                url: "ajax.php",
                data: {test_request: val_to_send, test_request_2: "400"}//test_request_2 is unused in this example
            })
                    .done(function(response) {
                ajaxAddResponse("ajax_div", response);
            });
        }

</script>


