<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <title>Document</title>
</head>
<body>
    <div>
        <img src="{{asset('storage/images/'.$img)}}" alt="img1" height="150px" width="150px" id="image">
        <form action="" method="post" id="myForm" name="myForm" enctype="multipart/form-data">
            <input type="file" value="{{ csrf_token() }}" style="display: none" id="upload" name="image">

        </form>
     </div>
</body>
</html>
<script>
$(document).ready(function(){
    var fileupload=$("#upload");
    var image = $("#image");
    image.click(function(){
        fileupload.click();
    });
  fileupload.change(function () {
        // var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
        var fileName=document.getElementById('upload').value;

        // let myForm = document.getElementById('myForm');
        //  let formData = new FormData(myForm);
            $.ajax({
            type: 'POST',
            url: '/update',
            data: fileName,

           // data: {data:fileName,name:name1,_token: '{{csrf_token()}}'},
            success: function( data ) {
                alert(data);
            },
});
});
});
</script>