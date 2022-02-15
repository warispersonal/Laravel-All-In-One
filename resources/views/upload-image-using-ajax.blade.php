
<!DOCTYPE html>
<html>
<head>
    <title>Upload Image in Laravel using Ajax</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<br />
<div class="container">
    <h3 align="center">Upload Image in Laravel using Ajax</h3>
    <br />
    <div class="alert" id="message" style="display: none"></div>
    <form method="post" id="upload_form" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <table class="table">

                <tr>
                    <input name="file_name" type="text" />
                </tr>
                <tr>
                    <td width="40%" align="right"><label>Select File for Upload</label></td>
                    <td width="30"><input type="file" name="file" id="select_file" /></td>
                    <td width="30%" align="left"><input type="submit" id="upload" class="btn btn-primary" value="Upload"></td>
                </tr>
                <tr>
                    <td width="40%" align="right"></td>
                    <td width="30"><span class="text-muted">jpg, png, gif</span></td>
                    <td width="30%" align="left"></td>
                </tr>
            </table>
        </div>
    </form>
    <br />
    <div style="display: none" id="upload_image">
        <img style="width: 100%; height: 100%;" id="upload_image_file" src="" />

    </div>
</div>
</body>
</html>

<script>
    $(document).ready(function(){

        $('#upload_form').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url:"{{ route('upload_image') }}",
                method:"POST",
                data:new FormData(this),
                dataType:'JSON',
                contentType: false,
                cache: false,
                processData: false,
                success:function(data)
                {
                    $('#message').css('display', 'block');
                    $('#message').html(data.message);
                    $('#message').addClass(data.class_name);
                    $("#upload_image").show()
                    $('#upload_image_file').attr('src', data.uploaded_image);
                }
            })
        });

    });
</script>
