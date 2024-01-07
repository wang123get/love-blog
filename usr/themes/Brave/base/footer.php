<div class="p-5 text-center ">
    <h6>©<?php $this->options->title() ?></h6>
    <!--    TODO:打字机-->
    💖<span class="writeBox" id="typed-text"></span>💖
</div>
<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12" type="application/javascript"></script>
<script>
    var typed = new Typed(".writeBox", {
        strings: ["你是我生命中的阳光。^3000",
            "你的微笑让我的心跳加速。^3000",
            "感谢有你陪伴在我的生命中。^3000",
            "你在我生活中的每个角落都是完美的。^3000",
            "每一刻和你在一起都是特别的。^3000",
            "我爱你胜过言语所能表达的。^3000",
            "你是我的心，我的灵魂，我的一切。^3000"],//输出的文字
        typeSpeed: 100,//打字的速度
        backSpeed: 100,//后退速度
        loop: true,
        smartBackspace: true, // 开启智能退格 默认false
    });

</script>

<script src="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js"
        type="application/javascript"></script>
<script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/nprogress/0.2.0/nprogress.min.js"
        type="application/javascript"></script>
<script>
    window.showSiteRuntime = function () {
        var site_runtime = $("#site_runtime");
        if (!site_runtime) return;
        window.setTimeout("showSiteRuntime()", 1000);
        start = new Date("<?php $this->options->lovetime(); ?>");
        now = new Date();
        T = (now.getTime() - start.getTime());
        i = 24 * 60 * 60 * 1000;
        d = T / i;
        D = Math.floor(d);
        h = (d - D) * 24;
        H = Math.floor(h);
        m = (h - H) * 60;
        M = Math.floor(m);
        s = (m - M) * 60
        S = Math.floor(s);
        site_runtime.html("第 <span style='color: #FF5722' class=\"bigfontNum\">" + D + "</span> 天 <span style='color: #FFA000' class=\"bigfontNum\">" + H + "</span> 小时 <span style='color: #03A9F4'  class=\"bigfontNum\">" + M + "</span> 分钟 <span style='color: #448AFF'  class=\"bigfontNum\">" + S + "</span> 秒");
    };
    showSiteRuntime();

    $(document).pjax('a', '#pjax-container', {
        fragment: '#pjax-container',
        timeout: 6000
    });
    $(document).on('pjax:send', function () {
        NProgress.start();
    });
    $(document).on('pjax:complete', function () {
        <?php $this->options->pjax回调(); ?>
        NProgress.done();
    });
</script>
<script src="<?php $this->options->themeUrl('/base/main.js'); ?>"></script>
<?php $this->footer(); ?>
<?php $this->options->底部自定义(); ?>
</body>

</html>