<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style type="text/css">
        * {padding:0;margin:0;}
        body { font-family:'Roboto';}
        h1 { margin:50px auto; text-align:center;}
    </style>

    <!-- jQuery !-->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

    <!-- stick !-->
    <link rel="stylesheet" type="text/css" href="/poppables/stick-to-me.css">
    <script src="/poppables/stick-to-me.js"></script>

    <script>

        $(document).ready(function(){

            $.stickToMe({
                layer: '#stickLayer'
            });

        });

    </script>

    <title>Exit Poppables</title>
</head>
<body>
<h1>Laravel Exit Popups</h1>

@include('pops.popMain')
</body>
</html>