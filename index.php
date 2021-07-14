

<!DOCTYPE html>

<html lang="en">

<head>

    <title>AJAX PHP</title>

</head>

<body>

    Enter Name to retrieve your wish <input type="text" id="name">

    <input type="submit" id="retrieve" value="Retrieve">



    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 

 integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 

 crossorigin="anonymous"></script>

    <script>

        $('input#retrieve').on('click', function() {

            var name = $('input#name'). val();

            if($.trim(name) != ""){

                $.post('server.php', {name: name}, function(data){

                alert(data);

            })

            }

        })

    </script>

</body>

</html>