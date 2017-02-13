<?php
session_start();
include '../functions.php';
?>
<div class="carte" id="salats">
    <div class="white-bg" style="opacity: 1; width: 80%;">
        <div class="closeBtn"><img src="images/close-btn-menu.png"></div>
        <div class="picture">
            <div class="menu-gallery">
                <div class="item" style="background-image: url(images/salads/_MG_0615.jpg)">
                    <img src="images/salads/_MG_0615.jpg">
                </div>
                <div class="item" style="background-image: url(images/salads/_MG_0579.jpg)">
                    <img src="images/salads/_MG_0579.jpg">
                </div>
            </div>
        </div>
        <div class="listing" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <div class="arrow-up" style="opacity: 0;"><img src="images/arrow-up.svg"></div>
            <div class="arrow-down" style="opacity: 1;"><img src="images/arrow-up.svg"></div>
            <div class="listingContent">
                <div class="title"><h3><? echo lang('salat-title') ?></h3></div>
                <div class="list-item">
                    <ul>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat1-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">6,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat2-title') ?> (350 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">6,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat3-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">7,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat4-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">8,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat5-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">8,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat6-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">8,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat7-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat8-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat9-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat10-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">9,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat11-title') ?> (300 <? echo lang('gr') ?>)</p>
                            </div>
                            <div class="blocRight">11,90 <? echo lang('lv') ?></div>
                        </li>
                        <li>
                            <div class="blocLeft">
                                <p><? echo lang('salat12-title') ?></p>
                            </div>
                            <div class="blocRight">11,90 <? echo lang('lv') ?></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg" style="opacity: 0.8;"></div>
</div>