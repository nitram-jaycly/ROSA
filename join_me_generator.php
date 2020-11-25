<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
    <style type="text/css">
        body
        {
            font-family: Arial;
            font-size: 10pt;
        }
        #dvPreview
        {
            filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=image);
            min-height: 400px;
            min-width: 400px;
            display: none;
        }
    </style>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script language="javascript" type="text/javascript">
$(function () {
    $("#fileupload").change(function () {
        $("#dvPreview").html("");
        var regex = /^([a-zA-Z0-9\s_\\.\-:])+(.jpg|.jpeg|.gif|.png|.bmp)$/;
        if (regex.test($(this).val().toLowerCase())) {
            if ($.browser.msie && parseFloat(jQuery.browser.version) <= 9.0) {
                $("#dvPreview").show();
                $("#dvPreview")[0].filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = $(this).val();
            }
            else {
                if (typeof (FileReader) != "undefined") {
                    $("#dvPreview").show();
                    $("#dvPreview").append("<img />");
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        $("#dvPreview img").attr("src", e.target.result);
                    }
                    reader.readAsDataURL($(this)[0].files[0]);
                } else {
                    alert("This browser does not support FileReader.");
                }
            }
        } else {
            alert("Please upload a valid image file.");
        }
    });
});
</script>
</head>
<body>
<div>
<input id="fileupload" type="file" />
<hr />
<b>Live Preview</b>
<br />
<br />
<div id="dvPreview">
</div>
</div>
</body>
</html><!--html>
    <head></head>
    <body>
        
        <img src"" style="display:none" height="200" id="image">
        <input type="file" onchange="showImage.call(this)">
        
        <script>
            function showImage()
            {
                if(this.files && this.files[0])
                {
                    var obj = new FileReader();
                    obj.onload = function(data) 
                    {
                        var image = document.getElementById("image");
                        image.src = data.target.result;
                        image.style.display = "image";
                    }
                    obj.readAsDataURL(this.files[0]);
                }
            }
        </script>
    </body>    
</html>


<!--script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="css/cropper.css" rel="stylesheet">
<script src="js/cropper.js"></script>


<img id="image" style="width: 1000; position: fixed; padding-top: 200px;" class="img-responsive" src="images/share/join_me_one.png" alt="">


<script>
    $("#image").cropper();
    
    function crop() {
       $("#image").cropper(''); 
    }
</script>

<style>

    .cropper-crop 
    {
        display: none;
    }
    .cropper-bg {
        background-image: url(images/share/pastor_chris_oyakhilome.png);
        background-repeat: no-repeat;
        background-position: center;
        
        padding-top: 150px;
    }
</style>

<button onclick="crop()">Crop<button>