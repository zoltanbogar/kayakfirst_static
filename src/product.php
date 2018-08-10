<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kayakfirst</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="../www/css/landing.css" rel="stylesheet">

    <style>
        @font-face { font-family: Gotham; src: url('../www/font/Gotham-Bold.otf'); }
        @font-face { font-family: Gotham-Light; src: url('../www/font/Gotham-Light.otf'); }
        @font-face { font-family: Gotham-Italic; src: url('../www/font/Gotham-BookItalic.otf'); }
        @font-face { font-family: Gotham-Ultra; src: url('../www/font/Gotham Ultra.otf'); }
        @font-face { font-family: Campton; src: url('../www/font/Campton-BoldDemo.otf'); }
        @font-face { font-family: Campton-Light; src: url('../www/font/Campton-LightDemo.otf'); }
    </style>

    <style>
        @media (max-width: 500px) {
            .firstSlide {
                margin: 15% 10% !important;
            }
        }

        .titleProd {
            color: #000;
            font-family: Gotham;
            font-size: 50px;
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.4;
            letter-spacing: normal;
            text-transform: uppercase;
        }

        .titleProdDesc {
            font-family: Gotham-Light;
            font-size: 30px;
            font-weight: 300;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.33;
            letter-spacing: 0.1px;
            text-align: left;
            color: #191919;
        }

        .productName {
            font-family: Gotham;
            font-size: 70px;
            font-weight: 900;
            font-style: normal;
            font-stretch: normal;
            line-height: 1.4;
            letter-spacing: normal;
            text-align: left;
            color: #191919;
        }

        @media (max-width: 991px) {
            .productBuyNow {
                position: unset !important;
                margin-bottom: 3%;
            }
        }

        .doboz {
            background-color: #1d9eda;
            width: 12vw;
            height: 12vw;
            display: flex;
        }

        .karika {
            background-color: #fff;
            border-radius: 50%;
            width: 4vw;
            height: 4vw;
        }

        @media (max-width: 1600px) {
            .dobozDescText {
                font-size: 10px;
            }
            .karika {
                width: 4vw;
                height: 4vw;
            }
            .dobozTitleText {
                font-size: 15px;
            }
        }

        @media (max-width: 1400px) {
            .dobozDescText {
                font-size: 9px;
            }
            .karika {
                width: 3.5vw;
                height: 3.5vw;
            }
            .dobozTitleText {
                font-size: 13.5px;
            }
        }

        @media (max-width: 1200px) {
            .dobozDescText {
                font-size: 8px;
            }
            .karika {
                width: 4vw;
                height: 4vw;
            }
            .dobozTitleText {
                font-size: 12px;
            }
        }

        @media (max-width: 1200px) {
            .dobozDescText {
                font-size: 7px;
            }
            .karika {
                width: 3vw;
                height: 3vw;
            }
            .dobozTitleText {
                font-size: 11px;
            }
        }

        @media (max-width: 800px) {
            .doboz {
                width: 23vw;
                height: 23vw;
            }
            .dobozDescText {
                font-size: 9px;
            }
            .karika {
                width: 6vw;
                height: 6vw;
            }
            .dobozTitleText {
                font-size: 17px;
            }
        }

        @media (max-width: 700px) {
            .doboz {
                width: 25vw;
                height: 25vw;
            }
            .dobozDescText {
                font-size: 8px;
            }
            .karika {
                width: 6vw;
                height: 6vw;
            }
            .dobozTitleText {
                font-size: 15px;
            }
        }

        @media (max-width: 575px) {
            .doboz {
                width: 25vw;
                height: 25vw;
            }
            .dobozDescText {
                font-size: 14px;
            }
            .karika {
                width: 14vw;
                height: 14vw;
            }
            .dobozTitleText {
                font-size: 22px;
            }

            .titleText4 {
                margin-bottom: 5%;
            }
        }

        @media (max-width: 460px) {
            .doboz {
                width: 25vw;
                height: 25vw;
            }
            .dobozDescText {
                font-size: 12px;
            }
            .karika {
                width: 12vw;
                height: 12vw;
            }
            .dobozTitleText {
                font-size: 18px;
            }

            .titleText4 {
                margin-bottom: 8%;
            }
        }

        @media (max-width: 390px) {
            .doboz {
                width: 25vw;
                height: 25vw;
            }
            .dobozDescText {
                font-size: 10px;
            }
            .karika {
                width: 14vw;
                height: 14vw;
            }
            .dobozTitleText {
                font-size: 15px;
            }

            .titleText4 {
                margin-bottom: 10%;
            }
        }
    </style>
</head>
<body style="margin: 0px; overflow-x: hidden;">
<div class="._LANDING container-fluid" style="padding: 0px !important;">
    <div class="firstSlide row section" style="margin: 10% 10% 0% 10%;">
        <div class="col-xs-12 col-md-12 col-sm-12 col-lg-12" style="display: flex; flex-direction: column;">
            <div class="titleProd">
                Title
            </div>
            <div class="titleProdDesc">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </div>
        </div>
    </div>
    <div class="secondSlide section row" style="margin: 0% 10%;">
        <div class="container-fluid">

        </div>
    </div>
    <div class="forthSlide section row" style="margin: 0% 10%;">
        <div class="col-md-12" style="display: flex; flex-direction: column;">
            <div class="titleText4" style="align-self: center;">OTHER FEATURES</div>
            <div class="descriptionText4" style="align-self: center; margin: 13px 0px;">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
        </div>
        <div class="col-md-12" style="text-align: -webkit-center;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">All-in-one</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">Compact size</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">Smart app</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">Cheap</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">Cheap</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-xs-4 col-sm-4">
                        <div class="doboz">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="karika"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozTitleText">Cheap</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="dobozDescText">Lorem ipsum is simply dummy text of the printing and typesetting industry. It has survived not only five centuries.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sixthSlide row" style="background-color: #000; padding: 1.5% 6%">
        <div class="col-md-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footerColumnTitleText">Company</div>
                        <div>
                            <div class="footerColumnText">Contact us</div>
                            <div class="footerColumnText">Our story</div>
                            <div class="footerColumnText">Terms and conditions</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footerColumnTitleText">Products</div>
                        <div>
                            <div class="footerColumnText">Ergometers</div>
                            <div class="footerColumnText">Webshop</div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footerColumnTitleText">Social media</div>
                        <div>
                            <div class="footerColumnText">Facebook</div>
                            <div class="footerColumnText">Instagram</div>
                            <div class="footerColumnText">Youtube</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin: auto; display: flex; flex-direction: column;">
            <div style="align-self: flex-end;">
                <div class="logoFooter">KAYAKFIRST</div>
            </div>
        </div>
    </div>

    <a href="../src/product.php">
        <div class="Rectangle-7 BUY-NOW-BOX">
            <div class="BUY-NOW">BUY NOW</div>
        </div>
    </a>
    <a href="../index.html">
        <div class="Rectangle-Logo">
            <div class="LOGO">KAYAKFIRST</div>
        </div>
    </a>
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
                <a href="../src/product.php"><li class="menuMainItem" style="margin: 10% 0%">PRODUCTS</li></a>
                <a href="#"><li class="menuSubItem">K1</li></a>
                <a href="#"><li class="menuSubItem">Uni-C</li></a>
                <a href="#"><li class="menuSubItem">Uni-D</li></a>
                <a href="#"><li class="menuSubItem">Uni-K</li></a>
                <a href="#"><li class="menuSubItem">Uni-S</li></a>
                <a href="#"><li class="menuSubItem">ALL-IN</li></a>
                <a href="../src/product.php"><li class="menuMainItem" style="margin-top: 10%">SHOP</li></a>
                <a href="../src/outStory.html"><li class="menuMainItem">OUR STORY</li></a>
                <a href="../src/contact.html"><li class="menuMainItem">CONTACT</li></a>
                <a href="../src/login.html"><li class="menuMainItem">LOGIN</li></a>
                <li class="menuLangItem"><a href="#">HU</a> - <a href="#"><strong>ENG</strong></a> - <a href="#">RU</a></li>
                <a href="#"><li class="menuSocialItem">linkedin</li></a>
                <a href="#"><li class="menuSocialItem">facebook</li></a>
                <a href="#"><li class="menuSocialItem">instagram</li></a>
            </ul>
        </div>
    </nav>
</div>



<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://app.ecwid.com/api/v3/14262098/products?sortBy=ADDED_TIME_ASC&enabled=true&token=secret_SPuzPcYRFffBh41AyVJ4Hf1Uv2gy5F5j",
CURLOPT_RETURNTRANSFER => true,
CURLOPT_ENCODING => "",
CURLOPT_MAXREDIRS => 10,
CURLOPT_TIMEOUT => 30,
CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
CURLOPT_CUSTOMREQUEST => "GET",
CURLOPT_HTTPHEADER => array(
"cache-control: no-cache"
),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
echo "cURL Error #:" . $err;
}
echo "<script> var tblProducts = " . $response . ";</script>";
?>


<script src="../www/js/jquery-3.1.1.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js" integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl" crossorigin="anonymous"></script>
<script>
    //let jsonString = '{"total":8,"count":8,"offset":0,"limit":100,"items":[{"id":110008801,"sku":"00000","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677085.jpg","unlimited":true,"inStock":true,"name":"Foo","price":2000,"priceInProductList":2000,"defaultDisplayedPrice":2000,"defaultDisplayedPriceFormatted":"2 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":0,"url":"https://shop-kayakfirst.ecwid.com/#!/Foo/p/110008801","created":"2018-07-02 11:17:50 +0000","updated":"2018-08-04 09:28:42 +0000","createTimestamp":1530530270,"updateTimestamp":1533374922,"productClassId":0,"enabled":false,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677079.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677086.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677087.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677078.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/855677078.jpg","width":640,"height":427},"borderInfo":{"dominatingColor":{"red":0,"green":0,"blue":0,"alpha":255},"homogeneity":true},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":7,"isSampleProduct":false},{"id":110008802,"sku":"00001","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904942.jpg","unlimited":true,"inStock":true,"name":"Fluxuskondenzátor","price":1337,"priceInProductList":1337,"defaultDisplayedPrice":1337,"defaultDisplayedPriceFormatted":"1 337Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":0,"url":"https://shop-kayakfirst.ecwid.com/#!/Fluxuskondenzátor/p/110008802","created":"2018-07-02 11:18:47 +0000","updated":"2018-08-04 09:28:41 +0000","createTimestamp":1530530327,"updateTimestamp":1533374921,"productClassId":0,"enabled":false,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904936.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904943.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904944.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904935.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/852904935.jpg","width":1398,"height":1156},"borderInfo":{"dominatingColor":{"red":255,"green":255,"blue":255,"alpha":255},"homogeneity":true},"galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":8,"isSampleProduct":false},{"id":112521384,"sku":"1000001","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"ALL-IN","price":600000,"priceInProductList":600000,"defaultDisplayedPrice":600000,"defaultDisplayedPriceFormatted":"600 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":32,"url":"https://shop-kayakfirst.ecwid.com/#!/ALL-IN/p/112521384","created":"2018-08-03 17:41:46 +0000","updated":"2018-08-03 17:41:48 +0000","createTimestamp":1533318106,"updateTimestamp":1533318108,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":6,"isSampleProduct":false},{"id":112521385,"sku":"00002","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"K1","price":500000,"priceInProductList":500000,"defaultDisplayedPrice":500000,"defaultDisplayedPriceFormatted":"500 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":30,"url":"https://shop-kayakfirst.ecwid.com/#!/K1/p/112521385","created":"2018-08-03 17:42:05 +0000","updated":"2018-08-03 17:42:05 +0000","createTimestamp":1533318125,"updateTimestamp":1533318125,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":1,"isSampleProduct":false},{"id":112521387,"sku":"00003","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"Uni-C","price":400000,"priceInProductList":400000,"defaultDisplayedPrice":400000,"defaultDisplayedPriceFormatted":"400 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":29,"url":"https://shop-kayakfirst.ecwid.com/#!/Uni-C/p/112521387","created":"2018-08-03 17:43:31 +0000","updated":"2018-08-03 17:43:31 +0000","createTimestamp":1533318211,"updateTimestamp":1533318211,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":2,"isSampleProduct":false},{"id":112521388,"sku":"00004","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"Uni-D","price":300000,"priceInProductList":300000,"defaultDisplayedPrice":300000,"defaultDisplayedPriceFormatted":"300 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":29,"url":"https://shop-kayakfirst.ecwid.com/#!/Uni-D/p/112521388","created":"2018-08-03 17:43:47 +0000","updated":"2018-08-03 17:43:47 +0000","createTimestamp":1533318227,"updateTimestamp":1533318227,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":3,"isSampleProduct":false},{"id":112521389,"sku":"00005","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"Uni-K","price":200000,"priceInProductList":200000,"defaultDisplayedPrice":200000,"defaultDisplayedPriceFormatted":"200 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":29,"url":"https://shop-kayakfirst.ecwid.com/#!/Uni-K/p/112521389","created":"2018-08-03 17:43:59 +0000","updated":"2018-08-03 17:43:59 +0000","createTimestamp":1533318239,"updateTimestamp":1533318239,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":4,"isSampleProduct":false},{"id":112521408,"sku":"00006","thumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767702.jpg","unlimited":true,"inStock":true,"name":"Uni-S","price":150000,"priceInProductList":150000,"defaultDisplayedPrice":150000,"defaultDisplayedPriceFormatted":"150 000Ft","tax":{"defaultLocationIncludedTaxRate":0,"enabledManualTaxes":[]},"isShippingRequired":true,"weight":20,"url":"https://shop-kayakfirst.ecwid.com/#!/Uni-S/p/112521408","created":"2018-08-03 17:44:10 +0000","updated":"2018-08-03 17:44:10 +0000","createTimestamp":1533318250,"updateTimestamp":1533318250,"productClassId":0,"enabled":true,"options":[],"warningLimit":0,"fixedShippingRateOnly":false,"fixedShippingRate":0,"defaultCombinationId":0,"imageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767688.jpg","smallThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767703.jpg","hdThumbnailUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767704.jpg","originalImageUrl":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","originalImage":{"url":"https://dqzrr9k4bjpzk.cloudfront.net/images/14262098/873767687.jpg","width":660,"height":440},"borderInfo":{"dominatingColor":{"red":207,"green":226,"blue":251,"alpha":255},"homogeneity":false},"description":"","galleryImages":[],"categoryIds":[],"categories":[],"defaultCategoryId":0,"seoTitle":"","seoDescription":"","attributes":[],"files":[],"relatedProducts":{"productIds":[],"relatedCategory":{"enabled":false,"categoryId":0,"productCount":5}},"combinations":[],"dimensions":{"length":0,"width":0,"height":0},"showOnFrontpage":5,"isSampleProduct":false}]}';
    //let tblProducts = JSON.parse(jsonString);
    $.each(tblProducts.items, function(i, e){
        if($('.secondSlide .container-fluid').children().length < 1){
            $('.secondSlide .container-fluid').append('<div class="row productRow" style="margin: 5% 0%"></div>');
        }

        var content = ''+
            '<a href="./productBrowser.html"><div class="container">'+
            '    <div class="row">'+
            '        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 productName" style="white-space: nowrap">'+
            '            '+e.name+
            '        </div>'+
            '        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6" style="position: relative; display: block;">'+
            '            <div class="BUY-NOW-BOX productBuyNow" style="position: absolute; top: 50%; margin-top: -5%; right: 7%;">' +
            '                <div class="BUY-NOW">BUY NOW</div>' +
            '            </div>'+
            '        </div>'+
            '    </div>'+
            '    <div class="row">'+
            '        <div class="col-md-12">'+
            '            <img src="'+e.imageUrl+'" style="width: 100%" />'+
            '        </div>'+
            '    </div>'+
            '</div></a>';

        if($('.secondSlide .container-fluid').children('.row.productRow').last().children().length > 1){
            $('.secondSlide .container-fluid').children('.row.productRow').last().after('<div class="row productRow" style="margin: 5% 0%"></div>');
        }
        $('.secondSlide .container-fluid .row.productRow').last().append('<div class="col-md-6 contentDiv" style="text-align: -webkit-right;">'+content+'</div>');

        if($('.secondSlide .container-fluid .row.productRow').last().children('.contentDiv').length < 2){
            $('.secondSlide .container-fluid .row.productRow').last().children('.contentDiv').last().css('padding-left', 0);
            $('.secondSlide .container-fluid .row.productRow').last().children('.contentDiv').last().css('padding-right', '8%');
        } else {
            $('.secondSlide .container-fluid .row.productRow').last().children('.contentDiv').last().css('padding-right', 0);
            $('.secondSlide .container-fluid .row.productRow').last().children('.contentDiv').last().css('padding-left', '8%');
        }
    });
</script>
</body>
</html>