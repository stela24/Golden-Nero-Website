<?php
session_start();
include '../functions.php';
?>
<div class="carte" id="breakfast">
    <div class="white-bg" style="opacity: 1; width: 80%;">
        <div class="closeBtn"><img src="images/close-btn-menu.png"></div>
        <div class="picture">
            <div class="menu-gallery">
                <div class="item" style="background-image: url(images/breakfast/img1.JPG)">
                    <img src="images/breakfast/img1.JPG">
                </div>
                <div class="item" style="background-image: url(images/breakfast/img2.jpg)">
                    <img src="images/breakfast/img2.jpg">
                </div>
            </div>
        </div>
        <div class="listing" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <div class="arrow-up" style="opacity: 0;"><img src="images/arrow-up.svg"></div>
            <div class="arrow-down" style="opacity: 1;"><img src="images/arrow-up.svg"></div>
            <div class="listingContent">
                <div class="title"><h3><? echo lang('breakfast-title') ?></h3></div>
                <div class="list-item">
                    <? echo lang('breakfast-bigtitle') ?>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast1-title') ?></p>
                                <p><? echo lang('breakfast1-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast2-title') ?></p>
                                <p><? echo lang('breakfast2-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast3-title') ?></p>
                                <p><? echo lang('breakfast3-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast4-title') ?></p>
                                <p><? echo lang('breakfast4-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast5-title') ?></p>
                                <p><? echo lang('breakfast5-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast6-title') ?></p>
                                <p><? echo lang('breakfast6-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast7-title') ?></p>
                                <p></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast8-title') ?></p>
                                <p></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast9-title') ?></p>
                                <p></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast10-title') ?></p>
                                <p><? echo lang('breakfast10-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast11-title') ?></p>
                                <p><? echo lang('breakfast11-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast12-title') ?></p>
                                <p><? echo lang('breakfast12-text') ?></p>
                            </div>
                            <div class="blocRight"></div>
                        </li>
                    </ul>
                    <hr>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast13-title') ?></p>
                                <p><? echo lang('breakfast13-text') ?></p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast14-title') ?></p>
                            </div>
                            <div class="blocRight">7,90<? echo lang('lv') ?></div>
                        </li>
                    </ul>
                    <hr>
                    <h2><? echo lang('breakfast-san') ?></h2>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast15-title') ?> /300<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast16-title') ?> /200<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">7,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast17-title') ?> /350<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">8,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast18-title') ?> /200<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">9,90<? echo lang('lv') ?></div>
                        </li>
                    </ul>
                    <hr>
                    <h2><? echo lang('breakfast-pan') ?></h2>
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast19-title') ?> /150<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast20-title') ?> /140<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">6,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast21-title') ?> /140<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">4,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast22-title') ?> /150<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">3,90<? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('breakfast23-title') ?> /120<? echo lang('gr') ?>/</p>
                            </div>
                            <div class="blocRight">2,90<? echo lang('lv') ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg" style="opacity: 0.8;"></div>
</div>