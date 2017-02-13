<?php
session_start();
include '../functions.php';
?>
<div class="carte" id="cocktails">
    <div class="white-bg" style="opacity: 1; width: 80%;">
        <div class="closeBtn"><img src="images/close-btn-menu.png"></div>
        <div class="picture">
            <div class="menu-gallery">
                <div class="item" style="background-image: url(images/cocktails/img1.jpg)">
                    <img src="images/cocktails/img1.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img2.jpg)">
                    <img src="images/cocktails/img2.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img3.jpg)">
                    <img src="images/cocktails/img3.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img4.jpg)">
                    <img src="images/cocktails/img4.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img5.jpg)">
                    <img src="images/cocktails/img5.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img6.jpg)">
                    <img src="images/cocktails/img6.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img7.jpg)">
                    <img src="images/cocktails/img7.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img8.jpg)">
                    <img src="images/cocktails/img8.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img9.jpg)">
                    <img src="images/cocktails/img9.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img10.jpg)">
                    <img src="images/cocktails/img10.jpg">
                </div>
                <div class="item" style="background-image: url(images/cocktails/img11.jpg)">
                    <img src="images/cocktails/img11.jpg">
                </div>
            </div>
        </div>
        <div class="listing" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <div class="arrow-up" style="opacity: 0;"><img src="images/arrow-up.svg"></div>
            <div class="arrow-down" style="opacity: 1;"><img src="images/arrow-up.svg"></div>
            <div class="listingContent">
                <div class="title"><h3><? echo lang('cocktails-title') ?></h3></div>
                <div class="list-item">
                    <h2><? echo lang('cocktails-title-sm') ?></h2>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails1-title') ?>  /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails1-text') ?></p>
                            </div>
                            <div class="blocRight">3,60<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails2-title') ?>  /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails2-text') ?></p>
                            </div>
                            <div class="blocRight">4,30<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails3-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails3-text') ?></p>
                            </div>
                            <div class="blocRight">4,60<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails4-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails4-text') ?></p>
                            </div>
                            <div class="blocRight">4,90<? echo lang('lv') ?></div>
                        </li>
                    </ul>
                    <hr>
                    <h2><? echo lang('cocktails-title-sm2') ?></h2>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails5-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails5-text') ?></p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails6-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails6-text') ?></p>
                            </div>
                            <div class="blocRight">6,30<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails7-title') ?> /150<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails7-text') ?></p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails8-title') ?> /220<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails8-text') ?></p>
                            </div>
                            <div class="blocRight">6,30<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails9-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails9-text') ?></p>
                            </div>
                            <div class="blocRight">7,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails10-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails10-text') ?></p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails11-title') ?> /300<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails11-text') ?></p>
                            </div>
                            <div class="blocRight">8,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails12-title') ?> /100<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails12-text') ?></p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('cocktails13-title') ?> /100<? echo lang('ml') ?>/</p>
                                <p><? echo lang('cocktails13-text') ?>/p>
                            </div>
                            <div class="blocRight">6,30<? echo lang('lv') ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg" style="opacity: 0.8;"></div>
</div>