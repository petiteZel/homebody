<?php

/**
 * @package WordPress
 * @subpackage Homebody
 * @since Homebody 1.0
 */

/*
 * Template Name: 메인 페이지
 */
get_header(); ?>



<div class="page-header">


    <div class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img style="background-color: white;" src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container">
        <div class="categoryMenu">
            <ul class="middleMenu">
                <li id="homeDeco" class="btnCon">
                    <input type="radio" checked name="tabMenu" id="homeDecoCheck" />
                    <label for="homeDecoCheck">Home Decoration</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div><?php
                                $cat_title = 'Home Decoration';
                                $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                                get_submenu_categories($cat_title, 'product');
                                create_section('ranks', 'category', $cat_slug);
                                // create_section('product','category',$cat_slug);
                                // create_section('homepedia','homepedia_categories',$cat_slug);
                                // create_section('guide','guide_categories',$cat_slug);
                                ?></div>
                    </div>
                </li>
                <li id="homeOffice" class="btnCon">
                    <input type="radio" name="tabMenu" id="homeOfficeCheck" />
                    <label for="homeOfficeCheck">Home Office</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div><?php
                                $cat_title = 'Home Office';
                                $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                                get_submenu_categories($cat_title, 'product');
                                create_section('ranks', 'category', $cat_slug);
                                // create_section('product', 'category', $cat_slug);
                                // create_section('homepedia', 'homepedia_categories', $cat_slug);
                                // create_section('guide', 'guide_categories', $cat_slug);
                                ?></div>
                    </div>
                </li>
                <li id="selfCare" class="btnCon">
                    <input type="radio" name="tabMenu" id="selfCareCheck" />
                    <label for="selfCareCheck">Self-Care</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div><?php
                                $cat_title = 'Self-Care';
                                $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                                get_submenu_categories($cat_title, 'product');
                                create_section('ranks', 'category', $cat_slug);
                                // create_section('product', 'category', $cat_slug);
                                // create_section('homepedia', 'homepedia_categories', $cat_slug);
                                // create_section('guide', 'guide_categories', $cat_slug);

                                ?></div>
                    </div>
                </li>
                <li id="hobbies" class="btnCon">
                    <input type="radio" name="tabMenu" id="hobbiesCheck" />
                    <label for="hobbiesCheck">Hobbies</label>
                    <div class="subMenu">
                        <!-- 서브메뉴 아이템 -->
                        <div><?php
                                $cat_title = 'Hobbies';
                                $cat_slug = str_replace(' ', '-', strtolower($cat_title));

                                get_submenu_categories($cat_title, 'product');
                                create_section('ranks', 'category', $cat_slug);
                                // create_section('product', 'category', $cat_slug);
                                // create_section('homepedia', 'homepedia_categories', $cat_slug);
                                // create_section('guide', 'guide_categories', $cat_slug);

                                ?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
