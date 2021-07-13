<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        <form action="/save" method="post" enctype="multipart/form-data" method="POST" id="addimgform">
        @csrf
         
        <input type="file" name="image">
        <button type="submit">submit</button>
        </form>
</body>
</html>
{{-- <script>
    $(document).ready(function(){
        $(document).on('submit',(#addimgform),function(e){
            let formdata=new FormData($('#AddEmployeeForm')[0]);
            $.ajax({
                type:"post",
                url: "/employee",
                contentType:false,
                processData:false,
                success:function (response)
                {

                }
            });
        });
    });
</script> --}}