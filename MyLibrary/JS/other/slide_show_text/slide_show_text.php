<style type="text/css">
    #text_show{
        border-style: inset;
        width: 50%;
        height: 20%;
    }

    .text_entry{

    }
</style>


<head>
    <script type="text/javascript" src="../../jquery-1.9.1.js"></script>
    <script type="text/javascript" src="../../my_lib_a.js"></script>
</head>

<div id='text_show'>

</div>

<script language = "javascript">
    $(document).ready(go);
    var counter = 0;

    function get_texts() {
        var texts = new Array(
                "AAAAA",
                "BBBBB",
                "CCCCC"
                );
        return texts;
    }

    function go() {
        switch_();
        runFunctionWithInterval(switch_, 5000);
    }

    function switch_() {
        var arr = get_texts();
        if (arrayIndexExists(arr, counter) === false) {
            counter = 0;
        }
        show_text_with_fade("text_show", arr[counter]);
        counter++;
    }

    function show_text_with_fade(elem_in_which_to_show, text_to_show) {
        removeAllElementsForParentX(elem_in_which_to_show);

        var newDiv = document.createElement("p");
        newDiv.setAttribute("class", "text_entry");
        newDiv.innerHTML = text_to_show;

        appendOneElementToAnother(elem_in_which_to_show, newDiv);
        $(newDiv).fadeOut(0);
        $(newDiv).fadeIn(2000);
    }
    
</script>

