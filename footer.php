<!-- 本源码基于apache2开源，你可以在不修改版权的基础上任意修改其他内容 -->
<br />
<footer>
    <script>
    fetch('https://v1.hitokoto.cn')
        .then(function (res) {
        return res.json();
    })
        .then(function (data) {
        var hitokoto = document.getElementById('hitokoto');
        hitokoto.innerText = data.hitokoto;
    })
        .
    catch (function (err) {
        console.error(err);
    })
    </script>
    <center>

        <div class="mdui-divider"></div>
        <p><a class="mdui-text-color-grey-800" href=<?php echo $url ?>>👉转到主页👈</a></p>
        <p id="hitokoto">:D 获取中...</p>

            <!--网站运行时间,请自行修改date数值(line 41)-->
            <p id="RunTime" style="color:Dark;"></p>
               <script>
                 var BootDate = new Date("2022/1/13 00:00:00");
                 function ShowRunTime(id) {
                 var NowDate = new Date();
                 var RunDateM = parseInt(NowDate - BootDate);
                 var RunDays = Math.floor(RunDateM/(24*3600*1000));
                 var RunHours = Math.floor(RunDateM%(24*3600*1000)/(3600*1000));
                 var RunMinutes = Math.floor(RunDateM%(24*3600*1000)%(3600*1000)/(60*1000));
                 var RunSeconds = Math.round(RunDateM%(24*3600*1000)%(3600*1000)%(60*1000)/1000);
                 var RunTime = RunDays + "天" + RunHours + "时" + RunMinutes + "分" + RunSeconds + "秒";
                 document.getElementById(id).innerHTML = "本站已稳定运行:" + RunTime;
                 }
                 setInterval("ShowRunTime('RunTime')", 1000);
               </script>
        <a class="mdui-text-color-grey-800" href="https://beian.miit.gov.cn">豫ICP备2022002835号-1</a>
    </center>
</footer>