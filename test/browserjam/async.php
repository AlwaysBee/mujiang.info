<!doctype html>
<html>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <title>async外部js不阻塞渲染测试</title>
    <body>
        <h1>async外部js不阻塞渲染测试</h1>
        <p>下载带有10秒网络延时的js：loadding <span id="timer"></span></p>
        <script>
            var time = (new Date()).getTime();
            var intv = setInterval(function(){ timer.textContent = ((new Date()).getTime()-time)/1000 }, 50);
        </script>
        <script async onload="clearInterval(intv);" src="http://mujiang.info/delayload/10s.php"></script>
        <p>按照标准标记为async会异步执行不妨碍解析</p>
        <p>执行总时间：
        <script> document.write(((new Date()).getTime()-time1)/1000 + 's'); </script>
        <?php include("../../ga.php"); ?>