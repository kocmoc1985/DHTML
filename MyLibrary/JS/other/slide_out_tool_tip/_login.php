<style type="text/css">
    #add_form{
        margin-top: 30px;
        margin-left:auto;
        margin-right: auto;
        padding-left:10px;
        padding-bottom:5px;
        width:400px !important;
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
        margin-right:50px;
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

<div id="add_form">
    <form action="submit.php" method="post" id="loginform">
        <img src="images/forms/login_1.png" alt="login_1" style="width: 70px;height: 70px">
        <h2>Login</h2>
        <label>Username</label>
        <input class="cfinset" name="username" size="30" required>
        <label>Password</label>
        <input class="cfinset" name="password" type="password" size="30" required>
        <input id="add_formSubmitBtn" type="submit" value="Submit">
    </form>
</div>

