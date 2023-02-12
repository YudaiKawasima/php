<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>javascript</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='./samples.js'></script>
    <script>
        // function button_click(){
        // alert('クリック')；
        // }
        // function button_check(){
        // var name = document.GetElementById('name_id').value;
        // if(name === ''){
        // alert('名前が入力されていません')；
        // }else{
        // document.GetElementById('write').innerHTML = name;
        // alert('入力された名前は'　+name+ 'です');
        // }
        // }
    </script>
</head>

<body>
    <form method="post" action="">
        名前<input id="name_id" type="text" name="name" value=""><br>
        <input type="button" name="click" value="クリック" onclick="button_click();"><br>
        <input type="button" name="check" value="チェック" onclick="button_check();"><br>

    </form>
    <div id="write"></div>

</body>

</html>