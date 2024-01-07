<?php
/**
 * 主题首页
 * @package custom
 * Author: Veen Zhao
 * CreateTime: 2021/2/6 22:32
 */
$this->need('base/head.php');
$this->need('base/nav.php');
?>
    <style>
        .card {
            border: 0 !important;
        }
        .card-body {
            box-shadow: rgba(0, 0, 0, 0.1) 0px 10px 15px -3px, rgba(0, 0, 0, 0.05) 0px 4px 6px -2px;
            border: 0 !important;
        }
    </style>
    <div class="container">
        <blockquote class="blockquote text-center my-5 py-2">
            <h5 class="card-title lover-card-title">我们风雨同舟已经一起走过</h5>
            <h5 id="site_runtime"></h5>
        </blockquote>
        <div class="row indexPlate">
            <div class="col-md-4">
                <a href="<?php $this->options->blessingPageLink() ?>" class="card ">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-md">
                                    <img src="<?php $this->options->blessingPageIcon() ?>" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <p class="h5">祝福板</p>
                                <p class="small text-muted mb-1">💌写下对我们的祝福</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="/index.php/blog/" class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-md">
                                    <img src="<?php $this->options->timePageIcon() ?>" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <p class="h5">点点滴滴</p>
                                <p class="small text-muted mb-1">💖记录你我生活</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php $this->options->loveListPageLink() ?>" class="card ">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <div class="avatar avatar-md">
                                    <img src="<?php $this->options->loveListPageIcon() ?>" alt="..."
                                         class="avatar-img rounded-circle">
                                </div>
                            </div>
                            <div class="col">
                                <p class="h5">Love List</p>
                                <p class="small text-muted mb-1">📜甜蜜瞬间有你陪伴</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php $this->need('base/footer.php'); ?>