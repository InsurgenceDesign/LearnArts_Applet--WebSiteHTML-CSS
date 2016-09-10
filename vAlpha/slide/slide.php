<!DOCTYPE html>
<html>
<head>
    <link href="js/style2.css" rel="stylesheet" type="text/css" />
    <script src="../js/java2.js" type="text/javascript"></script>
    <script type="text/javascript">
        imageSlider.thumbnailPreview(function (thumbIndex) { return "<img src='img/img" + (thumbIndex + 1) + ".jpg' style='width:100px;height:60px;' />"; });
    </script>
</head>
<body>
    <div id="sliderFrame">
        <div id="slider">
            <img src="img/photo1.jpg" alt="" />
            <img src="img/photo2.jpg" alt="" />
            <img src="img/photo3.jpg" alt="" />
            <img src="img/photo4.jpg" alt="" />
            <img src="img/photo5.jpg" alt="" />
        </div>
        <div style="display: none;">
            <div id="cap1">
            </div>
            <div id="cap2">
            </div>
            <div id="cap3">
            </div>
            <div id="cap4">
            </div>
            <div id="cap5">
            </div>
        </div>
    </div>

</body>
</html>
