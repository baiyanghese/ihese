<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="format-detection"content="telephone=no, email=no" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="renderer" content="webkit" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="HandheldFriendly" content="true" />
        <meta name="MobileOptimized" content="320" />
        <meta name="screen-orientation" content="portrait" />
        <meta name="x5-orientation" content="portrait"/>
        <meta name="full-screen" content="yes"/>
        <meta name="x5-fullscreen" content="true"/>
        <meta name="browsermode" content="application"/>
        <meta name="x5-page-mode" content="app"/>
        <meta name="msapplication-tap-highlight" content="no"/>
        <title>
        <?php if (is_home ()) {
            echo "荷色小站(iHese.com)&bull;为享受左脑艺术的乐趣而生";
        } elseif (is_category()) {
            single_cat_title();
            echo "荷色小站(iHese.com)&bull;为享受左脑艺术的乐趣而生";
        } elseif (is_single()||is_page()) {
            single_post_title();
            echo " - 荷色小站(iHese.com)&bull;为享受左脑艺术的乐趣而生";
        } elseif (is_search()) {
            echo "荷色小站(iHese.com)&bull;为享受左脑艺术的乐趣而生。search results:";
            echo wp_specialchars($s);
        } else {
            wp_title('',true);
        }?>
        </title>
        <link href="/favicon.ico" rel="bookmark" type="image/x-icon" />
        <link href="/favicon.ico" rel="icon" type="image/x-icon" />
        <link href="/favicon.ico" rel="shortcut icon" type="image/x-icon" />
        <meta name="keywords" content="荷色小站、iHese.com、WEB开发笔记、前端开发、网站开发、软件设计、网页设计、移动端研发、APP设计与制作" />
        <meta name="description" content="荷色小站(iHese.com)&bull;为享受左脑艺术的乐趣而生--专注网站开发笔记，Web技术的学习与研究，关注设计、互联网，一个记录、分享互联网知识与生活的网站" />
        <meta name="author" content="JackFan,baiyanghese@gmail.com" />
        <script type="text/javascript" src="/wp-content/themes/freefire/js/flexible.js"></script>
        <link rel="stylesheet" href="/wp-content/themes/freefire/css/hljs.css">
        <link rel="stylesheet" href="/wp-content/themes/freefire/css/animate.css">
        <link rel="stylesheet" href="/wp-content/themes/freefire/css/ihese.css"
        />
    </head>
    <body>
    <div class="status" id="loading">
      <div class="l-loading-panel">
        <span class="l-loading"></span>
      </div>
    </div>
    <heaher class="header">
        <section>
            <h1 class="website-name">
            <!-- <?php bloginfo( 'name' ); ?> -->
            文
            </h1>
        </section>
        <section>
            <div class="website-nav">
                <ul>
                    <li>
                        <a href="http://www.ihese.com" class="atips" data-tips="首页">
                            <img src="/wp-content/themes/freefire/images/home.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/" class="atips" data-tips="文">
                            <img src="/wp-content/themes/freefire/images/artice.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/" class="atips" data-tips="留言">
                            <img src="/wp-content/themes/freefire/images/feedbook.png" alt="" />
                        </a>
                    </li>
                    <li>
                        <a href="/" class="atips" data-tips="关于">
                            <img src="/wp-content/themes/freefire/images/about.png" alt="" />
                        </a>
                    </li>
                    <!-- <li>
                        <a href="/" class="atips" data-tips="点赞">
                            <img src="/wp-content/themes/freefire/images/good.png" alt="" />
                        </a>
                    </li>
                    -->
                    <!-- <li>
                        <a href="/" class="atips" data-tips="打赏">
                            <img src="/wp-content/themes/freefire/images/reward.png" alt="" />
                        </a>
                    </li> -->
                </ul>
            </div>
        </section>
    </heaher>
