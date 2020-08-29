<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>聊天吧</title>
</head>
<body>

<h1>Websocket 聊天室</h1>


<textarea name="" id="rev_cont" cols="100" rows="20"></textarea>
<hr>
<input type="text" id="msg" style="width: 300px;height: 30px">
<input type="button" id="btn_msg" style="width:100px;height: 30px" value="发送">


<script src="/static/js/jquery.min.js"></script>
<script>
    var url = 'ws://ws.1910.com';       //websocket 服务器地址
    var ws = new WebSocket(url);
    ws.onopen = function(){
        console.log('open');
        //点击发送
        $("#btn_msg").on('click',function(){
            var msg = $("#msg").val();
            ws.send(msg);
        });
    }
    //接收服务器响应
    ws.onmessage = function(d){
        console.log(d.data);
        $("#rev_cont").append(d.data + "\n")
    }
</script>

</body>
</html>