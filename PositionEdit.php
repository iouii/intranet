<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="unicorn/css/bootstrap.min.css">
    <link rel="stylesheet" href="unicorn/css/unicons.css">
    <link rel="stylesheet" href="unicorn/css/owl.carousel.min.css">
    <link rel="stylesheet" href="unicorn/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="unicorn/css/tooplate-style.css">
    <link rel="stylesheet" href="bbc.css">
    <script src="jquery/jquery.min.js" type="text/javascript"></script>
    <script src="jquery/jquery.js" type="text/javascript"></script>
    <script src="jquery/jquery-ui.js" type="text/javascript"></script>


    <title>OguraClutch</title>
</head>
<?php
	include "chksession.php";
	include "connect.php";	
	
        $Usr_IdLoginCode=$_GET["Usr_IdLogin"];	
        $Usr_IdLogin=base64_decode(base64_decode("$Usr_IdLoginCode"));

        $Pos_IdEditCode=$_GET["Pos_Id"];
        $Pos_Id=base64_decode(base64_decode("$Pos_IdEditCode"));

        $sqlMem = "select * from Position where Pos_Id='$Pos_Id'";
        $queryMem = mssql_query($sqlMem)or die("error=$sqlMem");
        $rsT= mssql_fetch_array($queryMem);

?>
<style>
.ed-head {
    text-align: center;
}
</style>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-12 ">
                <h3 class="ed-head">Edit Position</h3>
                <br>
                <form id="form1" name="form1" method="post" action="PositionEditSave_DB.php">
                    <div class="form-group row">


                        <div class="col-sm-6">
                            <input name="Pos_Name2" type="text" class='form-control' id="Pos_Name2"
                                value="<?=$rsT['Pos_Name']?>" />
                            <input name="Pos_id2" type="hidden" id="Pos_id2" value="<?=$rsT['Pos_Id']?>" />
                            <input name="Pos_Name" type="hidden" id="Pos_Name" value="<?=$rsT['Pos_Name']?>" />
                            <input name="Usr_IdLogin" type="hidden" id="Usr_IdLogin" value="<?="$Usr_IdLogin";?>" />
                            <br>
                            <center>
                                <input type="submit" name="button" id="button" class="btn btn-primary" value="Edit" />
                                <input type="reset" name="button2" id="button2" class="btn btn-primary" value="Clear" />
                            </center>

                </form>

            </div>
        </div>
    </div>
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.min.js'></script>
    <script type='text/javascript' src='../js/logging.js'></script>
    <script type="text/javascript">
    function MM_preloadImages() { //v3.0
        var d = document;
        if (d.images) {
            if (!d.MM_p) d.MM_p = new Array();
            var i, j = d.MM_p.length,
                a = MM_preloadImages.arguments;
            for (i = 0; i < a.length; i++)
                if (a[i].indexOf("#") != 0) {
                    d.MM_p[j] = new Image;
                    d.MM_p[j++].src = a[i];
                }
        }
    }
    </script>
</body>

</html>