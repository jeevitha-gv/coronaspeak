<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<script type="text/javascript">
var flag = 0, existing_class = '';
var class_value = ['one', 'two', 'three'];
$('#element').click(function(){
    if(flag <= 2)
    {
        $(this).removeClass(existing_class);

        $(this).addClass(class_value[flag]);
         $('#btn1').show();
        existing_class = class_value[flag];
    }
    flag++;
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<input type="button" class="btn" id="element" value="click">
<button type="button" class="btn" style="display: none;" id="btn1">Click Me</button>
</body>
</html>