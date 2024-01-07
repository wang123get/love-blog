<style>
    .div1 {
        width: 280px;
        height: 50px;
        position: absolute;
        text-align: center;
        line-height: 40px;
        left: 20px;
        top: 20px;
        overflow: hidden;
        cursor: pointer;
        border-radius: 3px;
    }

    .div2, .div3 {
        width: 100%;
        height: 100%;
        background: rgba(206, 172, 192, 0.4);
        position: relative;
        animation-iteration-count: infinite;
    }

    .div2 {
        transform: rotate(70deg);
        animation-duration: 5s;
        left: -160px;
    }

    .div3 {
        transform: rotate(-70deg);
        animation-duration: 6s;
        left: 360px;
    }

    @keyframes move1 {
        from {
            left: -150px;
        }
        to {
            left: 350px;
        }
    }

    @keyframes move2 {
        from {
            left: 350px;
        }
        to {
            left: -350px;
        }
    }
</style>
<div class="container-fluid position-relative">
    <nav class="navbar navbar-expand-lg navbar-dark  text-white bg-transparent">
        <div class="container">
            <!--            <a class="navbar-brand" href="--><?php //Helper::options()->siteUrl() ?><!--">-->
            <?php //$this->options->title() ?><!--<div class="mtBoli"></div></a>-->
            <div class="div1 navbar-brand" id="div1">
                <?php $this->options->title() ?>
                <div class="div2"></div>
                <div class="div3"></div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
                    aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                </ul>
                <span class="navbar-text">
                    <?php $this->options->navsay() ?>
                </span>
            </div>
        </div>
    </nav>
    <section class="lover-background" style="background-image: url(<?php $this->options->heroimg(); ?>)"></section>
    <section class="container lover-container d-flex flex-column align-content-center justify-content-center">
        <div class="row align-items-center pb-5 lover">
            <div class="col">
                <div class="d-flex flex-column">
                    <img class="mx-auto avatar-img rounded-circle" src="<?php $this->options->boy(); ?>"
                         alt="<?php $this->options->boyname(); ?>">
                    <h4 class="mx-auto text-white pt-2"><?php $this->options->boyname(); ?></h4>
                </div>
            </div>
            <div class="col">
                <div class="d-flex justify-content-center">
                    <div class="heart"></div>
                </div>
            </div>
            <div class="col">
                <div class="d-flex flex-column">
                    <img class="mx-auto avatar-img rounded-circle" src="<?php $this->options->girl(); ?>"
                         alt="<?php $this->options->girlname(); ?>">
                    <h4 class="mx-auto text-white pt-2"><?php $this->options->girlname(); ?></h4>
                </div>
            </div>
        </div>
    </section>
    <section class="main-hero-waves-area waves-area">
        <svg class="waves-svg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
             viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
            <defs>
                <path id="gentle-wave"
                      d="M -160 44 c 30 0 58 -18 88 -18 s 58 18 88 18 s 58 -18 88 -18 s 58 18 88 18 v 44 h -352 Z"></path>
            </defs>
            <g class="parallax">
                <use xlink:href="#gentle-wave" x="48" y="0"></use>
                <use xlink:href="#gentle-wave" x="48" y="3"></use>
                <use xlink:href="#gentle-wave" x="48" y="5"></use>
                <use xlink:href="#gentle-wave" x="48" y="7"></use>
            </g>
        </svg>
    </section>
</div>
<div id="pjax-container">

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const div2 = document.querySelector('.div2');
            const div3 = document.querySelector('.div3');

            function animateDiv2() {
                div2.style.animation = 'move1 4s infinite';
                setTimeout(function () {
                    div2.style.animation = ''; // 清除动画
                    animateDiv3(); // 启动下一个动画
                }, 4000);
            }

            function animateDiv3() {
                div3.style.animation = 'move2 6s infinite';
                setTimeout(function () {
                    div3.style.animation = ''; // 清除动画
                    animateDiv2(); // 启动下一个动画
                }, 6000);
            }
            document.getElementById('div1').addEventListener('click', function() {
                // 在此处可以添加跳转逻辑，例如跳转到另一个页面
                console.log(111)
                window.location.href = "<?php Helper::options()->siteUrl() ?>";
            });
            animateDiv2(); // 初始启动 div2 的动画
        });
    </script>