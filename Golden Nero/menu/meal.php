<?php
session_start();
include '../functions.php';
?>
<div class="carte" id="meal">
    <div class="white-bg" style="opacity: 1; width: 80%;">
        <div class="closeBtn"><img src="images/close-btn-menu.png"></div>
        <div class="picture">
            <div class="menu-gallery">
                <div class="item" style="background-image: url(images/meal/img1.jpg)">
                    <img src="images/meal/img1.jpg">
                </div>
                <div class="item" style="background-image: url(images/meal/img2.jpg)">
                    <img src="images/meal/img2.jpg">
                </div>
                <div class="item" style="background-image: url(images/meal/img3.jpg)">
                    <img src="images/meal/img3.jpg">
                </div>
                <div class="item" style="background-image: url(images/meal/img4.jpg)">
                    <img src="images/meal/img4.jpg">
                </div>
                <div class="item" style="background-image: url(images/meal/img5.jpg)">
                    <img src="images/meal/img5.jpg">
                </div>
            </div>
        </div>
        <div class="listing" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <div class="arrow-up" style="opacity: 0;"><img src="images/arrow-up.svg"></div>
            <div class="arrow-down" style="opacity: 1;"><img src="images/arrow-up.svg"></div>
            <div class="listingContent">
                <div class="title"><h3><? echo lang('meal-title') ?></h3></div>
                <div class="list-item">
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal1-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal2-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal3-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal4-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal5-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">15,60 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal6-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">11,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal7-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">14,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal8-title') ?> (350 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">14,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal9-title') ?> (350 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">19,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal10-title') ?> (250 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">19,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal11-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">22.90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal12-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">22.90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal13-title') ?> (200 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">33.90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('meal14-title') ?> (400 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">37,00 <? echo lang('lv') ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg" style="opacity: 0.8;"></div>
</div>