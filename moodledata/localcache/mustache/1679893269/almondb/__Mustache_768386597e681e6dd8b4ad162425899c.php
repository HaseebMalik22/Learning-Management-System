<?php

class __Mustache_768386597e681e6dd8b4ad162425899c extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $this->resolveValue($context->findDot('output.doctype'), $context);
        $buffer .= $indent . ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '<html ';
        $value = $this->resolveValue($context->findDot('output.htmlattributes'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '<head>
';
        $buffer .= $indent . '    <title>';
        $value = $this->resolveValue($context->findDot('output.page_title'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</title>
';
        $buffer .= $indent . '    <link rel="shortcut icon" href="';
        $value = $this->resolveValue($context->findDot('output.favicon'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '" />
';
        $buffer .= $indent . '    ';
        $value = $this->resolveValue($context->findDot('output.standard_head_html'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    <meta name="viewport" content="width=device-width, initial-scale=1.0">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    <style>
';
        $value = $context->find('colorsetup');
        $buffer .= $this->sectionEea59ee1d73cc384d995a0bfaedfd08f($context, $indent, $value);
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .block03desing2 {
';
        $buffer .= $indent . '        -webkit-font-smoothing: antialiased;
';
        $buffer .= $indent . '        -moz-osx-font-smoothing: grayscale;
';
        $buffer .= $indent . '        text-rendering: optimizelegibility;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        background-position: center;
';
        $buffer .= $indent . '        background-repeat: no-repeat;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        background-color: #ffffff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block03desing2 .fdb-box {
';
        $buffer .= $indent . '        height:200px;
';
        $buffer .= $indent . '        background: #ffffff;
';
        $buffer .= $indent . '        padding: 2rem 2rem;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        color: #444444;
';
        $buffer .= $indent . '        border-radius: 0.25rem;
';
        $buffer .= $indent . '        box-shadow: 0 0.3125rem 0.875rem 0 rgba(129, 129, 129, 0.2) !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block03desing2 .fdb-touch {
';
        $buffer .= $indent . '        border-top: solid 0.3125rem ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '    z-index: 2;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .fdb-box h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block03desing3 .boxhy {
';
        $buffer .= $indent . '        padding:30px;
';
        $buffer .= $indent . '        background:white;
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '        height: 100%;
';
        $buffer .= $indent . '        border:1px solid ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        border-radius:0px;
';
        $buffer .= $indent . '        transition:.4s all; 
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block03desing3 .boxhy-wrap:hover .boxhy {
';
        $buffer .= $indent . '        filter:blur(3px);
';
        $buffer .= $indent . '        opacity:.5;
';
        $buffer .= $indent . '        transform: scale(.98);
';
        $buffer .= $indent . '        box-shadow:none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block03desing3 .boxhy-wrap:hover .boxhy:hover {
';
        $buffer .= $indent . '        transform:scale(1);
';
        $buffer .= $indent . '        filter:blur(0px);
';
        $buffer .= $indent . '        opacity:1;
';
        $buffer .= $indent . '        box-shadow:0 8px 20px 0px rgba(0,0,0,0.125);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block04desing1__arrow {
';
        $buffer .= $indent . '        z-index: 1;
';
        $buffer .= $indent . '        width: 2em;
';
        $buffer .= $indent . '        height: 2em;
';
        $buffer .= $indent . '        border-radius: 50%;
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        align-items: center;
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '        border: none;
';
        $buffer .= $indent . '        padding: 0;
';
        $buffer .= $indent . '        opacity: .7;
';
        $buffer .= $indent . '        font-size: 1rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block06desing2 .img-area img {
';
        $buffer .= $indent . '        position:absolute;
';
        $buffer .= $indent . '        margin-top: 100px;
';
        $buffer .= $indent . '        right:0px;
';
        $buffer .= $indent . '        bottom:0;
';
        $buffer .= $indent . '        height:440px;
';
        $buffer .= $indent . '        content:"";
';
        $buffer .= $indent . '        z-index:1
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block06desing2 .choose-area {
';
        $buffer .= $indent . '        background:';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block06desing2 .choose-content p {
';
        $buffer .= $indent . '        color:white;
';
        $buffer .= $indent . '        font-size:14px;
';
        $buffer .= $indent . '        margin-bottom:20px
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07desing1 .card-body h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__container {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        box-sizing: border-box;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__list {
';
        $buffer .= $indent . '        margin: 0 !important;
';
        $buffer .= $indent . '        padding: 0 !important;
';
        $buffer .= $indent . '        width: -webkit-max-content;
';
        $buffer .= $indent . '        width: max-content;
';
        $buffer .= $indent . '        will-change: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide.is-active .splide__list {
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        align-items: flex-start;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__pagination {
';
        $buffer .= $indent . '        display: inline-flex;
';
        $buffer .= $indent . '        align-items: center;
';
        $buffer .= $indent . '        width: 40%;
';
        $buffer .= $indent . '        flex-wrap: wrap;
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '        margin-bottom: 40px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__pagination li {
';
        $buffer .= $indent . '        list-style-type: none;
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '        line-height: 1;
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__pagination li button {
';
        $buffer .= $indent . '        background-color: transparent;
';
        $buffer .= $indent . '        border: 1px solid ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        height: 10px;
';
        $buffer .= $indent . '        margin: 0 7px;
';
        $buffer .= $indent . '        width: 10px;
';
        $buffer .= $indent . '        border-radius: 50%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__pagination li button.is-active {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .splide {
';
        $buffer .= $indent . '        visibility: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide,
';
        $buffer .= $indent . '    .block07 .splide__slide {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__slide {
';
        $buffer .= $indent . '        box-sizing: border-box;
';
        $buffer .= $indent . '        list-style-type: none !important;
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '        flex-shrink: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__slide img {
';
        $buffer .= $indent . '        vertical-align: bottom;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__slider {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__track {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        z-index: 0;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        padding-top: 2em;
';
        $buffer .= $indent . '        padding-bottom: 2em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide--draggable > .splide__track > .splide__list > .splide__slide {
';
        $buffer .= $indent . '        -webkit-user-select: none;
';
        $buffer .= $indent . '        user-select: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide--ttb > .splide__track > .splide__list {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide--ttb > .splide__pagination {
';
        $buffer .= $indent . '        width: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__arrow--next {
';
        $buffer .= $indent . '        right: 0em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__arrow--prev {
';
        $buffer .= $indent . '        left: 0em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block07 .splide__arrow {
';
        $buffer .= $indent . '        top: 1%;
';
        $buffer .= $indent . '        background:  ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__container {
';
        $buffer .= $indent . '        padding: 0;
';
        $buffer .= $indent . '        margin-bottom: 2.35765%;
';
        $buffer .= $indent . '        background-color: #fff;
';
        $buffer .= $indent . '        border-radius: 0.2rem;
';
        $buffer .= $indent . '        border: 1px solid rgba(0, 0, 0, 0.125);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__container .hy__image img {
';
        $buffer .= $indent . '        object-fit: cover;
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        border-radius: 2px 2px 0 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__container h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 700;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__total {
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__info {
';
        $buffer .= $indent . '        padding: 1em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__image {
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__overlay {
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        bottom: 10px;
';
        $buffer .= $indent . '        left: 10px;
';
        $buffer .= $indent . '        right: 10px;
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        overflow: auto;
';
        $buffer .= $indent . '        width: auto;
';
        $buffer .= $indent . '        height: 50%;
';
        $buffer .= $indent . '        -webkit-transform: scale(0);
';
        $buffer .= $indent . '        -ms-transform: scale(0);
';
        $buffer .= $indent . '        transform: scale(0);
';
        $buffer .= $indent . '        -webkit-transition: .5s ease;
';
        $buffer .= $indent . '        transition: .5s ease;
';
        $buffer .= $indent . '        border-radius: 2px;
';
        $buffer .= $indent . '        opacity: 0.9;
';
        $buffer .= $indent . '        scrollbar-color: rgb(136, 136, 136)  ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '; 
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__overlay::-webkit-scrollbar-thumb {
';
        $buffer .= $indent . '        background: rgb(136, 136, 136);
';
        $buffer .= $indent . '        border-radius: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__container:hover .hy__overlay {
';
        $buffer .= $indent . '        -webkit-transform: scale(1);
';
        $buffer .= $indent . '        -ms-transform: scale(1);
';
        $buffer .= $indent . '        transform: scale(1);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .hy__text {
';
        $buffer .= $indent . '        color: white;
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        padding : 25px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing3 .card {
';
        $buffer .= $indent . '        border-radius: 0.2rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing3 .card, .card-img-top {
';
        $buffer .= $indent . '        border-top-left-radius: 0.2rem ;
';
        $buffer .= $indent . '        border-top-right-radius: 0.2rem ;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing3 .card-body h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing4 .card {
';
        $buffer .= $indent . '        border-radius: 0.2rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing4 .card, .card-img-top {
';
        $buffer .= $indent . '        border-top-left-radius: 0.2rem ;
';
        $buffer .= $indent . '        border-bottom-left-radius: 0.2rem ;
';
        $buffer .= $indent . '        border-top-right-radius: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing4 .card-body h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 600;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block08desing4 .card-body {
';
        $buffer .= $indent . '        padding: 1.0rem 0.2rem .5rem 0.01rem;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    @media (max-width: 767.98px) {
';
        $buffer .= $indent . '        .block08desing4 .card .card-body {
';
        $buffer .= $indent . '            padding: 0.625rem;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social li a:hover,.teachers .teacher-content h4 span {
';
        $buffer .= $indent . '        color: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social,.teachers .teacher-content:hover {
';
        $buffer .= $indent . '        background: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .teachers {
';
        $buffer .= $indent . '        background: #fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teachers-slider{
';
        $buffer .= $indent . '        margin-top:30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .single-teacher {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        margin-bottom: 30px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-head {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-head.overlay::before {
';
        $buffer .= $indent . '        opacity: 0;
';
        $buffer .= $indent . '        z-index: 1;
';
        $buffer .= $indent . '        visibility: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .single-teacher:hover .teacher-head.overlay:before{
';
        $buffer .= $indent . '        opacity:0.8;
';
        $buffer .= $indent . '        visibility:visible
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-head img{
';
        $buffer .= $indent . '        height:100%;
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '        text-align:center;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social {
';
        $buffer .= $indent . '        width: 75px;
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        top: 15px;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '        padding: 15px 0;
';
        $buffer .= $indent . '        opacity: 0;
';
        $buffer .= $indent . '        visibility: hidden;
';
        $buffer .= $indent . '        -webkit-transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '        -moz-transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '        transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '        left: 15px;
';
        $buffer .= $indent . '        z-index: 2;
';
        $buffer .= $indent . '        -webkit-transform: translateY(-100%);
';
        $buffer .= $indent . '        -moz-transform: translateY(-100%);
';
        $buffer .= $indent . '        transform: translateY(-100%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .single-teacher:hover .social{
';
        $buffer .= $indent . '        opacity:1;
';
        $buffer .= $indent . '        visibility:visible;
';
        $buffer .= $indent . '        transform: translateY(0%);
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social li {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '        margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social li:last-child{
';
        $buffer .= $indent . '        margin:0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social li a {
';
        $buffer .= $indent . '        color: #fff;
';
        $buffer .= $indent . '        font-size: 14px;
';
        $buffer .= $indent . '        width: 60px;
';
        $buffer .= $indent . '        height: 30px;
';
        $buffer .= $indent . '        line-height: 30px;
';
        $buffer .= $indent . '        border: 1px solid #fff;
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .social li a:hover{
';
        $buffer .= $indent . '        border-color:transparent;
';
        $buffer .= $indent . '        background:#fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-content {
';
        $buffer .= $indent . '        background: #fff;
';
        $buffer .= $indent . '        padding: 12px 30px;
';
        $buffer .= $indent . '        text-align: center;
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        bottom: -15px;
';
        $buffer .= $indent . '        left: 15px;
';
        $buffer .= $indent . '        z-index: 33;
';
        $buffer .= $indent . '        -webkit-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
';
        $buffer .= $indent . '        -moz-box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
';
        $buffer .= $indent . '        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.15);
';
        $buffer .= $indent . '        -webkit-transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '        -moz-transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '        transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .single-teacher:hover .teacher-content,
';
        $buffer .= $indent . '    .teachers .single-teacher.active .teacher-content{
';
        $buffer .= $indent . '        transform:scale(1.0);
';
        $buffer .= $indent . '        opacity:1;
';
        $buffer .= $indent . '        visibility:visible;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-content:hover h4,
';
        $buffer .= $indent . '    .teachers .teacher-content:hover span{
';
        $buffer .= $indent . '        color:#fff;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-content h4 {
';
        $buffer .= $indent . '        font-size: 18px;
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-content a {
';
        $buffer .= $indent . '        text-decoration: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .teachers .teacher-content h4 span {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '        font-weight: 400;
';
        $buffer .= $indent . '        font-size: 15px;
';
        $buffer .= $indent . '        margin-top: 5px;
';
        $buffer .= $indent . '        -webkit-transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '        -moz-transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '        transition:all 0.3s ease 0s;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .overlay{
';
        $buffer .= $indent . '        position:relative
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .overlay::before {
';
        $buffer .= $indent . '        position: absolute;
';
        $buffer .= $indent . '        top: 0;
';
        $buffer .= $indent . '        left: 0;
';
        $buffer .= $indent . '        width: 100%;
';
        $buffer .= $indent . '        height: 100%;
';
        $buffer .= $indent . '        opacity: 0.8;
';
        $buffer .= $indent . '        background: #20232E;
';
        $buffer .= $indent . '        content: "";
';
        $buffer .= $indent . '        -webkit-transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '        -moz-transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '        transition: all 0.3s ease 0s;
';
        $buffer .= $indent . '    }
';
        $value = $context->find('block08desing3');
        if (empty($value)) {
            
            $buffer .= $indent . '
';
            $buffer .= $indent . '    .splide__container {
';
            $buffer .= $indent . '        position: relative;
';
            $buffer .= $indent . '        box-sizing: border-box;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__list {
';
            $buffer .= $indent . '        margin: 0 !important;
';
            $buffer .= $indent . '        padding: 0 !important;
';
            $buffer .= $indent . '        width: -webkit-max-content;
';
            $buffer .= $indent . '        width: max-content;
';
            $buffer .= $indent . '        will-change: auto;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide.is-active .splide__list {
';
            $buffer .= $indent . '        display: flex;
';
            $buffer .= $indent . '        align-items: flex-start;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__pagination {
';
            $buffer .= $indent . '        display: inline-flex;
';
            $buffer .= $indent . '        align-items: center;
';
            $buffer .= $indent . '        width: 40%;
';
            $buffer .= $indent . '        flex-wrap: wrap;
';
            $buffer .= $indent . '        justify-content: center;
';
            $buffer .= $indent . '        margin-bottom: 40px;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__pagination li {
';
            $buffer .= $indent . '        list-style-type: none;
';
            $buffer .= $indent . '        display: inline-block;
';
            $buffer .= $indent . '        line-height: 1;
';
            $buffer .= $indent . '        margin: 0;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__pagination li button {
';
            $buffer .= $indent . '        background-color: transparent;
';
            $buffer .= $indent . '        border: 1px solid ';
            $value = $this->resolveValue($context->find('sitecolor'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ';
';
            $buffer .= $indent . '        height: 10px;
';
            $buffer .= $indent . '        margin: 0 7px;
';
            $buffer .= $indent . '        width: 10px;
';
            $buffer .= $indent . '        border-radius: 50%;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__pagination li button.is-active {
';
            $buffer .= $indent . '        background-color: ';
            $value = $this->resolveValue($context->find('sitecolor'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ';
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide {
';
            $buffer .= $indent . '        visibility: hidden;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide,
';
            $buffer .= $indent . '    .splide__slide {
';
            $buffer .= $indent . '        position: relative;
';
            $buffer .= $indent . '        outline: none;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__slide {
';
            $buffer .= $indent . '        box-sizing: border-box;
';
            $buffer .= $indent . '        list-style-type: none !important;
';
            $buffer .= $indent . '        margin: 0;
';
            $buffer .= $indent . '        flex-shrink: 0;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__slide img {
';
            $buffer .= $indent . '        vertical-align: bottom;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__slider {
';
            $buffer .= $indent . '        position: relative;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__track {
';
            $buffer .= $indent . '        position: relative;
';
            $buffer .= $indent . '        z-index: 0;
';
            $buffer .= $indent . '        overflow: hidden;
';
            $buffer .= $indent . '        padding-top: 2em;
';
            $buffer .= $indent . '        padding-bottom: 2em;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide--draggable > .splide__track > .splide__list > .splide__slide {
';
            $buffer .= $indent . '        -webkit-user-select: none;
';
            $buffer .= $indent . '        user-select: none;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide--ttb > .splide__track > .splide__list {
';
            $buffer .= $indent . '        display: block;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide--ttb > .splide__pagination {
';
            $buffer .= $indent . '        width: auto;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__arrow--next {
';
            $buffer .= $indent . '        right: 0em;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__arrow--prev {
';
            $buffer .= $indent . '        left: 0em;
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '    .splide__arrow {
';
            $buffer .= $indent . '        top: 1%;
';
            $buffer .= $indent . '        background:  ';
            $value = $this->resolveValue($context->find('sitecolor'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= ';
';
            $buffer .= $indent . '    }
';
            $buffer .= $indent . '
';
        }
        $buffer .= $indent . '    .block09desing1 {
';
        $buffer .= $indent . '        -webkit-font-smoothing: antialiased;
';
        $buffer .= $indent . '        -moz-osx-font-smoothing: grayscale;
';
        $buffer .= $indent . '        text-rendering: optimizelegibility;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        background-position: center;
';
        $buffer .= $indent . '        background-repeat: no-repeat;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        background-color: #ffffff;
';
        $value = $context->find('block09boxshadow');
        $buffer .= $this->section85de1b0ef140cc47bd5be61e7509a16f($context, $indent, $value);
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing1 .fdb-box {
';
        $buffer .= $indent . '        background: #ffffff;
';
        $buffer .= $indent . '        padding: 3rem 4rem;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        color: #444444;
';
        $buffer .= $indent . '        border: 1px solid  ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        border-radius: 0.25rem;
';
        $value = $context->find('block09boxshadow');
        $buffer .= $this->sectionDff1503f1c8b93e6291ce763392a5dcd($context, $indent, $value);
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing1 .fdb-touch {
';
        $buffer .= $indent . '        border-top: solid 0.3125rem ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        z-index: 2;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing1 h6 {
';
        $buffer .= $indent . '            font-size: 16px;
';
        $buffer .= $indent . '            font-weight: 700;
';
        $buffer .= $indent . '            margin-bottom: 10px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block-text-box {
';
        $buffer .= $indent . '        padding: 15px 0;
';
        $buffer .= $indent . '        color: #ffffff;
';
        $buffer .= $indent . '        border-radius: 0.25rem;
';
        $buffer .= $indent . '        background: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= ';
';
        $buffer .= $indent . '        opacity: 0.9;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .block09 .single-box {
';
        $buffer .= $indent . '        height: 150px;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        padding-top:35px;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        z-index: 1;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .single-box-color {
';
        $buffer .= $indent . '        height: 100px;
';
        $buffer .= $indent . '        background-size: cover;
';
        $buffer .= $indent . '        padding-top:35px;
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        z-index: 1;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .block09desing2 img {
';
        $buffer .= $indent . '        opacity: 0.5;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing2 h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 700;
';
        $buffer .= $indent . '        margin-top: 3px;
';
        $buffer .= $indent . '        margin-bottom: 3px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing3 img {
';
        $buffer .= $indent . '        opacity: 0.5;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09desing3 h6 {
';
        $buffer .= $indent . '        font-size: 16px;
';
        $buffer .= $indent . '        font-weight: 700;
';
        $buffer .= $indent . '        margin-top: 3px;
';
        $buffer .= $indent . '        margin-bottom: 3px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .single-box-alt {
';
        $buffer .= $indent . '        font-size: 13px; 
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        height: 50px;
';
        $buffer .= $indent . '        position:absolute; 
';
        $buffer .= $indent . '        left:0px;
';
        $buffer .= $indent . '        right:0px;
';
        $buffer .= $indent . '        bottom:0px; 
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '        opacity: 0.9;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .single-box-alt-color {
';
        $buffer .= $indent . '        font-size: 13px; 
';
        $buffer .= $indent . '        font-weight: 500;
';
        $buffer .= $indent . '        height: 50px;
';
        $buffer .= $indent . '        position:absolute; 
';
        $buffer .= $indent . '        left:0px;
';
        $buffer .= $indent . '        right:0px;
';
        $buffer .= $indent . '        bottom:25%; 
';
        $buffer .= $indent . '        width:100%;
';
        $buffer .= $indent . '        opacity: 0.9;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '    .block09 .splide__container {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        box-sizing: border-box;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__list {
';
        $buffer .= $indent . '        margin: 0 !important;
';
        $buffer .= $indent . '        padding: 0 !important;
';
        $buffer .= $indent . '        width: -webkit-max-content;
';
        $buffer .= $indent . '        width: max-content;
';
        $buffer .= $indent . '        will-change: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide.is-active .splide__list {
';
        $buffer .= $indent . '        display: flex;
';
        $buffer .= $indent . '        align-items: flex-start;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__pagination {
';
        $buffer .= $indent . '        display: inline-flex;
';
        $buffer .= $indent . '        align-items: center;
';
        $buffer .= $indent . '        width: 40%;
';
        $buffer .= $indent . '        flex-wrap: wrap;
';
        $buffer .= $indent . '        justify-content: center;
';
        $buffer .= $indent . '        margin-bottom: 40px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__pagination li {
';
        $buffer .= $indent . '        list-style-type: none;
';
        $buffer .= $indent . '        display: inline-block;
';
        $buffer .= $indent . '        line-height: 1;
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__pagination li button {
';
        $buffer .= $indent . '        background-color: transparent;
';
        $buffer .= $indent . '        border: 1px solid ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '        height: 10px;
';
        $buffer .= $indent . '        margin: 0 7px;
';
        $buffer .= $indent . '        width: 10px;
';
        $buffer .= $indent . '        border-radius: 50%;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__pagination li button.is-active {
';
        $buffer .= $indent . '        background-color: ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide {
';
        $buffer .= $indent . '        visibility: hidden;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide,
';
        $buffer .= $indent . '    .block09 .splide__slide {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        outline: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__slide {
';
        $buffer .= $indent . '        box-sizing: border-box;
';
        $buffer .= $indent . '        list-style-type: none !important;
';
        $buffer .= $indent . '        margin: 0;
';
        $buffer .= $indent . '        flex-shrink: 0;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__slide img {
';
        $buffer .= $indent . '        vertical-align: bottom;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__slider {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__track {
';
        $buffer .= $indent . '        position: relative;
';
        $buffer .= $indent . '        z-index: 0;
';
        $buffer .= $indent . '        overflow: hidden;
';
        $buffer .= $indent . '        padding-top: 2em;
';
        $buffer .= $indent . '        padding-bottom: 2em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide--draggable > .splide__track > .splide__list > .splide__slide {
';
        $buffer .= $indent . '        -webkit-user-select: none;
';
        $buffer .= $indent . '        user-select: none;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide--ttb > .splide__track > .splide__list {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide--ttb > .splide__pagination {
';
        $buffer .= $indent . '        width: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__arrow--next {
';
        $buffer .= $indent . '        right: 0em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__arrow--prev {
';
        $buffer .= $indent . '        left: 0em;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .block09 .splide__arrow {
';
        $buffer .= $indent . '        top: 1%;
';
        $buffer .= $indent . '        background:  ';
        $value = $this->resolveValue($context->find('sitecolor'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= ';
';
        $buffer .= $indent . '    }
';
        $value = $context->find('block11enabled');
        $buffer .= $this->section6c2b6389d29892640bf1bc2382a3ea0f($context, $indent, $value);
        $buffer .= $indent . '    @media only screen and (max-width: 576px) {
';
        $buffer .= $indent . '        .block19desing2 .col-xs {
';
        $buffer .= $indent . '            width: 50%;
';
        $buffer .= $indent . '        }
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setupbutton{
';
        $buffer .= $indent . '        position: relative; 
';
        $buffer .= $indent . '        bottom: 20px;
';
        $buffer .= $indent . '        margin-left: 20px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 {
';
        $buffer .= $indent . '        display: block;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #page {
';
        $buffer .= $indent . '        margin-top: 40px;
';
        $buffer .= $indent . '        margin-bottom: 45px;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #page-content{
';
        $buffer .= $indent . '        height: auto;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main {
';
        $buffer .= $indent . '    height: auto;
';
        $buffer .= $indent . '    padding-bottom : 40px;
';
        $buffer .= $indent . '    overflow-x: auto;
';
        $buffer .= $indent . '    overflow-y: visible;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main #site-news-forum {
';
        $buffer .= $indent . '    display: block !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main #frontpage-available-course-list{
';
        $buffer .= $indent . '        display: block !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main #frontpage-course-list{
';
        $buffer .= $indent . '        display: block !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main #frontpage-category-names{
';
        $buffer .= $indent . '        display: block !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main #frontpage-category-combo{
';
        $buffer .= $indent . '        display: block !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main .simplesearchform {
';
        $buffer .= $indent . '        display: none !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main .buttons{
';
        $buffer .= $indent . '        display: none !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main .skip-block-to{
';
        $buffer .= $indent . '        display: none !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    .setup1 #region-main .box{
';
        $buffer .= $indent . '        padding-top : 0px !important;
';
        $buffer .= $indent . '        padding-bottom : 0px !important;
';
        $buffer .= $indent . '    }
';
        $buffer .= $indent . '    </style>
';
        $buffer .= $indent . '    
';
        $buffer .= $indent . '
';
        $value = $context->find('block18enabled');
        $buffer .= $this->sectionC48b3e405f0ea6e89a9dcdf2840534fa($context, $indent, $value);
        $buffer .= $indent . '</head>
';

        return $buffer;
    }

    private function sectionEea59ee1d73cc384d995a0bfaedfd08f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    
        /* theme-color */
        .header-area, .footer-header-underline, .hybtn, .item-icon i {
            border-color: {{{sitecolor}}};
        }
        .hytext, .main-menu li.active a, a:hover, .main-menu li a:hover, .footer-menu li a:hover, 
        .hybtn:hover, .icon-icon i, .item-icon i:hover, .video-img-thumbnail a:hover, 
        .blog-tags a:hover, .blog-btn .read-more-btn:hover, .author-content a:hover, .address-line p a:hover {
            color: {{{sitecolor}}};
        }
        .hybtn, button.active, .icon-box-content, .item-icon i, .theme-bg, .course-inner::after, .project-inner::after, 
        .social-links li:hover, #scrollUp, .scrollUp {
            background-color: {{{sitecolor}}};
        }
        .box:hover{text-decoration:none;box-shadow:0 0 10px 3px #cff1ff; border-color:{{{sitecolor}}}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    
';
                $buffer .= $indent . '        /* theme-color */
';
                $buffer .= $indent . '        .header-area, .footer-header-underline, .hybtn, .item-icon i {
';
                $buffer .= $indent . '            border-color: ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .hytext, .main-menu li.active a, a:hover, .main-menu li a:hover, .footer-menu li a:hover, 
';
                $buffer .= $indent . '        .hybtn:hover, .icon-icon i, .item-icon i:hover, .video-img-thumbnail a:hover, 
';
                $buffer .= $indent . '        .blog-tags a:hover, .blog-btn .read-more-btn:hover, .author-content a:hover, .address-line p a:hover {
';
                $buffer .= $indent . '            color: ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .hybtn, button.active, .icon-box-content, .item-icon i, .theme-bg, .course-inner::after, .project-inner::after, 
';
                $buffer .= $indent . '        .social-links li:hover, #scrollUp, .scrollUp {
';
                $buffer .= $indent . '            background-color: ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .box:hover{text-decoration:none;box-shadow:0 0 10px 3px #cff1ff; border-color:';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '}
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section85de1b0ef140cc47bd5be61e7509a16f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            text-shadow:5px 5px 15px {{{sitecolor}}};
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            text-shadow:5px 5px 15px ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ';
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionDff1503f1c8b93e6291ce763392a5dcd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            box-shadow: 0.5rem 0.3125rem 0.875rem 0 {{{sitecolor}}} !important; 
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            box-shadow: 0.5rem 0.3125rem 0.875rem 0 ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' !important; 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section6c2b6389d29892640bf1bc2382a3ea0f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        .tag_list {
            font-size: 12px;
        }
        .tag_list b{
            display: none;
        }

        .slider_arrow_left, .slider_arrow_right {
            position: relative;
            top: -30px;
        }
        .slider_arrow_right a, .slider_arrow_left a {
        opacity: .9;
        background-color: {{sitecolor}}; 
        }
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        .tag_list {
';
                $buffer .= $indent . '            font-size: 12px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .tag_list b{
';
                $buffer .= $indent . '            display: none;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        .slider_arrow_left, .slider_arrow_right {
';
                $buffer .= $indent . '            position: relative;
';
                $buffer .= $indent . '            top: -30px;
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '        .slider_arrow_right a, .slider_arrow_left a {
';
                $buffer .= $indent . '        opacity: .9;
';
                $buffer .= $indent . '        background-color: ';
                $value = $this->resolveValue($context->find('sitecolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '; 
';
                $buffer .= $indent . '        }
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBbc74f3edbd03a91c51f3d151b01db8a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
			{{{block18csslink}}}
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('block18csslink'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section83cc721f95ad3cb0ec4a4b6ded9f355d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '	
		<style>   
			{{{block18css}}}
		</style>
		';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '		<style>   
';
                $buffer .= $indent . '			';
                $value = $this->resolveValue($context->find('block18css'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '		</style>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC48b3e405f0ea6e89a9dcdf2840534fa(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
		{{#block18csslink}}
			{{{block18csslink}}}
		{{/block18csslink}}
		{{#block18css}}	
		<style>   
			{{{block18css}}}
		</style>
		{{/block18css}}	
	';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('block18csslink');
                $buffer .= $this->sectionBbc74f3edbd03a91c51f3d151b01db8a($context, $indent, $value);
                $value = $context->find('block18css');
                $buffer .= $this->section83cc721f95ad3cb0ec4a4b6ded9f355d($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
