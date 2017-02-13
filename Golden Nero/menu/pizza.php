<?php
session_start();
include '../functions.php';
?>
<div class="carte" id="pizza">
    <div class="white-bg" style="opacity: 1; width: 80%;">
        <div class="closeBtn"><img src="images/close-btn-menu.png"></div>
        <div class="picture">
            <div class="menu-gallery">
                <div class="item" style="background-image: url(images/pizza/img1.jpg)">
                    <img src="images/pizza/img1.jpg">
                </div>
                <div class="item" style="background-image: url(images/pizza/img2.png)">
                    <img src="images/pizza/img2.png">
                </div>
                <div class="item" style="background-image: url(images/pizza/img3.png)">
                    <img src="images/pizza/img3.png">
                </div>
                <div class="item" style="background-image: url(images/pizza/img4.png)">
                    <img src="images/pizza/img4.png">
                </div>
                <div class="item" style="background-image: url(images/pizza/img5.png)">
                    <img src="images/pizza/img6.png">
                </div>
            </div>
        </div>
        <div class="listing" style="opacity: 1; transform: matrix(1, 0, 0, 1, 0, 0);">
            <div class="arrow-up" style="opacity: 0;"><img src="images/arrow-up.svg"></div>
            <div class="arrow-down" style="opacity: 1;"><img src="images/arrow-up.svg"></div>
            <div class="listingContent">
                <div class="title"><h3><? echo lang('pizza-title') ?></h3></div>
                <div class="list-item">
                    <h2><? echo lang('pizza-title-sm') ?></h2>
                    <ul>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza1-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">6,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza1-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">8,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza2-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">8,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza2-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">10,90 <? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza1-text2') ?></td>
                                    <td class="col-md-2">150<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">+9,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza3-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">12,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza3-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">17,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza4-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">12,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza4-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">18,90 <? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza4-text2') ?></td>
                                    <td class="col-md-2">150<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">+9,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza5-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">11,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza5-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">17,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza6-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">8,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza6-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">13,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza7-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">12,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza7-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">17,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza8-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">17,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza8-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">23,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                        <li>
                            <table>
                                 <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza9-title') ?></td>
                                    <td class="col-md-2">300 <? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">6,90<? echo lang('lv') ?></td>
                                  </tr>
                                  <tr>
                                    <td class="col-lg-10 col-md-8"><? echo lang('pizza9-text') ?></td>
                                    <td class="col-md-2">500<? echo lang('gr') ?></td>
                                    <td rowspan="1" class="col-md-2 col-lg-12">9,90 <? echo lang('lv') ?></td>
                                  </tr>
                            </table>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="black-bg" style="opacity: 0.8;"></div>
</div>