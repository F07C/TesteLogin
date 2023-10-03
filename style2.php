<?php header("content-type: text/css");?>

/*--Author: W3Layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
 --*/

body {
    margin: 0;
    font-family: 'Roboto', sans-serif;
    background: #fff;
}

body a {
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    -moz-transition: 0.5s all;
    -o-transition: 0.5s all;
    -ms-transition: 0.5s all;
    text-decoration: none;
    outline: none;
}

h1,
h2,
h3,
h4,
h5,
h6 {
    margin: 0;
    font-family: 'Merriweather Sans', sans-serif;
}
.navbar{
    display: flex;
    align-items: center;
    padding: 20px;
}
nav{
    flex: 1;
    text-align: right;
    font-size: 19px;
    color: black;
}
nav ul{
    display: inline-block;
    list-style: none;
}
nav ul li{
    display: inline-block;
    margin-right: 20px;
}

p {
    margin: 0;
    color: #777;
    font-size: 1em;
    line-height: 1.6;
}

ul,
label {
    margin: 0;
    padding: 0;
}

ul {
    list-style-type: none;
}

body a:hover {
    text-decoration: none;
}

body a:focus {
    outline: none;
    text-decoration: none;
}

/*-- banner --*/

.banner-bg {
    background: url(../images/2.jpg)no-repeat right 80px;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
}



/* The colour of the indicators */

/* //testimonials */

/*--contact--*/

.contact {
    background: #ffffff;
}
.clearfix img{
    padding-left: 5%;
}
.contact-right {
    text-align: right;
}

.contact-form {
    padding: 10px;
    background: #e1f8ff;
}

.map iframe {
    width: 100%;
    min-height: 350px;
    border: 5px solid #f75252;
    padding: 5px;
}

.contact-form h5 {
    font-size: 1.5em;
    margin-bottom: 1em;
    color: #000000;
    text-transform: capitalize;
    font-weight: 600;
}

.address.address-mdl {
    margin: 2em 0 1em;
}

.address h5 {
    color: #000;
    text-transform: capitalize;
    margin-bottom: 1em;
    font-size: 1.1em;
}

.address p a {
    color: #777;
}

.address p a:hover {
    color: #34c663;
}

form.form_w3layouts {
    margin: 2em 0 0;
}

.contact-form input[type="text"] {
    width: 48.5%;
    color: #000;
    background: #ffffff;
    outline: none;
    font-size: 1em;
    padding: 1em 0.8em;
    -webkit-appearance: none;
    display: inline-block;
    font-family: 'Merriweather Sans', sans-serif;
}

.contact-form input[type="text"]:first-child {
    margin-right: 1em;
}

.contact-form input[type="email"] {
    width: 100%;
    margin: 2em 0;
    color: #000;
    background: #ffffff;
    outline: none;
    font-size: 1em;
    padding: 1em 0.8em;
    -webkit-appearance: none;
    display: inline-block;
    font-family: 'Merriweather Sans', sans-serif;
}

.contact-form textarea {
    resize: none;
    width: 100%;
    background: #ffffff;
    color: #000;
    font-size: 1em;
    outline: none;
    padding: 1em .8em;
    min-height: 9em;
    font-family: 'Merriweather Sans', sans-serif;
    -webkit-appearance: none;
}

.contact-form input[type="email"],
.contact-form textarea,
.contact-form input[type="text"] {
    border: none;
}

.contact-form input[type="submit"] {
    border: none;
    outline: none;
    color: #fff;
    letter-spacing: 1px;
    width: 30%;
    padding: 5px 0;
    font-size: 1em;
    margin: 2em 1em 0 0;
    -webkit-appearance: none;
    background: #69da85;
    padding-bottom: 3%;
    transition: 0.5s all;
    -webkit-transition: 0.5s all;
    font-family: 'Merriweather Sans', sans-serif;
    -moz-transition: 0.5s all;
}

.contact-form input[type="submit"]:hover,
.contact-form input[type="reset"]:hover {
    background: #e01414;
    color: #fff;
}

.contact-top1 {
    padding: 25px 20px;
    box-shadow: 05px 10px 10px 0px rgba(216, 216, 216, 0.78);
    -webkit-box-shadow: 5px 10px 10px 0px rgba(216, 216, 216, 0.78);
    -moz-box-shadow: 5px 10px 10px 0px rgba(216, 216, 216, 0.78);
    /* box-shadow: 5px 10px 10px 0px rgba(216, 216, 216, 0.78); */
}

.contact-bottom h6 {
    color: #000;
    font-size: 1.5em;
    text-align: center;
    font-weight: 600;
    text-transform: capitalize;
    margin: 1em auto 2em;
    background: #ededed;
    padding: 13px 0;
}

.contact-bottom {
    background: #fff;
    padding: 2em;
}

/*--//contact--*/


/*-- //bottom-to-top --*/

/* -- Responsive code -- */

@media screen and (max-width: 1600px) {
    .list-inline>li {
        display: inline-block;
        margin: 18px 0 0;
    }
}

@media screen and (max-width: 1440px) {
    .ab1 {
        padding: 29px 30px 5px;
    }
    .team-text {
        min-height: 239px;
    }
    .team-mid-txt.text-center {
        padding: 5em 3em;
    }
}

@media screen and (max-width: 1366px) {
    .ab1-text {
        margin-left: 0.5em;
        padding-right: 0;
    }
    .ab1-text h5 {
        margin-bottom: 7px;
    }
    .team-text {
        min-height: 227px;
    }
    .home-about2 {
        padding: 0;
    }
    .team-mid-txt.text-center {
        padding: 5em 3em 3.2em;
    }
    .team-grids:hover .social-icon {
        padding-top: 7em;
    }
}

@media screen and (max-width: 1280px) {
    .banner-bg-agileits {
        min-height: 738px;
    }
    .banner-text {
        padding: 23em 0 0;
    }
    h2.title {
        color: #ffffff;
        font-size: 6em;
    }
    .about-bottom-right {
        width: 100%;
    }
    .home-about2 {
        width: 100%;
    }
    .bg-right {
        margin-top: 2em;
    }
    .w3ls-section.stats {
        margin-top: 27px;
    }
    .team-text {
        padding: 40px 30px 0;
    }
    .team-text {
        padding: 20px 30px 0;
        min-height: 212px;
    }
    .team-mid-txt.text-center {
        padding: 4em 3em 2em;
    }
}

@media screen and (max-width: 1080px) {
    .navbar-nav>li {
        margin: 0 0.4em 0 0;
    }
    .banner-bg-inner {
        background-position: 0 -146px;
        min-height: 422px;
    }
    .banner-text p:before {
        left: 30.5%;
    }
    .banner-text p:after {
        right: 33%;
    }
    .team-container {
        width: 100%;
    }
    .team-text {
        min-height: 207px;
    }
    .bl2 {
        padding-right: 0;
    }
    .list-inline>li {
        padding: 2px;
        margin: 5px 0 0;
    }
    h2.title-inner {
        font-size: 3.8em;
    }
    .testi-grids {
        width: 77%;
    }
    .social-button .fa {
        font-size: 1.8em;
        line-height: 1.7;
    }
    .contact-form input[type="text"]:first-child {
        margin-right: 10px;
    }
}

@media screen and (max-width: 1050px) {
    h2.title {
        font-size: 5.5em;
    }
    .team-grid-left,
    .team-grid-right,
    .team-mid-txt {
        width: 100%;
        float: left;
    }
    .team-container {
        width: 85%;
    }
    .team-text {
        min-height: 424px;
        padding: 150px 30px 0;
    }
    .team-grids:hover .social-icon {
        padding-top: 14em;
    }
}

@media screen and (max-width: 1024px) {
    .banner-text {
        padding: 21em 0 0;
    }
    .banner-bg-agileits {
        min-height: 683px;
    }
    .team-text {
        min-height: 413px
    }
    h2.title-inner {
        font-size: 3.6em;
    }
}

@media screen and (max-width: 991px) {
    .rad-txt {
        font-size: 1.5em;
    }
    .navbar-default .navbar-nav>li>a {
        font-size: 13px;
        padding: 15px 5px;
    }
    h1 a.navbar-brand {
        font-size: 1.1em;
    }
    .cd-search-trigger,
    .cd-nav-trigger {
        width: 35px;
        height: 45px;
    }
    .cd-search-trigger::after {
        bottom: 14px;
        right: 0px;
    }
    i.fa.fa-cart-arrow-down {
        width: 33px;
        height: 40px;
    }
    .banner-text p:before {
        left: 29.4%;
    }
    .about-right-grid {
        margin-top: 3em;
    }
    .banner-text {
        padding: 19em 0 0;
    }
    .banner-bg-agileits {
        min-height: 670px;
    }
    .team-text {
        min-height: 398px;
    }
    .carousel-control.left {
        left: 45%;
        top: 46.6%;
    }
    .carousel-control.right {
        right: 47%;
        top: 46.6%;
    }
    .footer-nav {
        text-align: right;
    }
    .blog-footer,
    .contact-foot {
        margin-top: 1em;
    }
    .footer-cpy {
        padding: 3em 0;
    }
    .section {
        padding: 4em 0;
    }
    .subscribe-form {
        width: 75%;
    }
    .list-inline>li {
        padding: 7px;
        margin: 1em;
    }
    .contact-right {
        text-align: left;
    }
    .loginbox {
        width: 65%;
    }
}

@media screen and (max-width: 900px) {
    h2.title {
        font-size: 5.2em;
    }
    .team-text {
        min-height: 359px;
    }
    .team-grids:hover .social-icon {
        padding-top: 11em;
    }
}

@media screen and (max-width: 800px) {
    .banner-bg-agileits {
        min-height: 635px;
    }
    h2.title {
        font-size: 5em;
    }
    .numscroller {
        font-size: 29px;
    }
    .bg-right {
        min-height: 550px;
    }
    .banner-text {
        padding: 18em 0 0;
    }
    .team-text {
        min-height: 317px;
    }
    .team-mid-txt h5 {
        font-size: 4em;
    }
    .team-mid-txt h5:last-child {
        font-size: 3.5em;
    }
    h2.title-inner {
        font-size: 3.2em;
        letter-spacing: 3px;
    }
    .banner-bg-inner {
        background-position: 0 -80px;
        min-height: 385px;
    }
}

@media screen and (max-width: 768px) {
    .banner-bg-agileits {
        min-height: 600px;
    }
    h2.title {
        font-size: 4.5em;
    }
    .ab1 {
        padding: 17px 26px 15px;
    }
    .ab1-icon span {
        font-size: 1.7em;
    }
    .about-bottom-right .ab1-icon {
        width: 48px;
        height: 45px;
    }
    .team-text {
        min-height: 304px;
        padding: 120px 30px 0;
    }
    .team-grids:hover .social-icon {
        padding-top: 10em;
    }
}

@media screen and (max-width:767px) {
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        width: 100%;
        background: rgba(0, 0, 0, 0.79);
        border: none;
    }
    .navbar-nav>li {
        text-align: center;
    }
    .dropdown-menu li a {
        color: #fff !important;
        text-align: center;
    }
    nav.navbar.navbar-default.navbar-fixed-top.top-nav-collapse h1 a.navbar-brand {
        font-size: 1em;
        padding: 14px;
    }
    .navbar-default .navbar-collapse,
    .navbar-default .navbar-form {
        width: 100%;
        background: rgb(52, 198, 99);
        border: none;
        float: none;
        margin: 0 auto;
    }
    .dropdown-menu li a:hover {
        color: #fff !important;
    }
    .navbar-toggle {
        margin-right: 1em;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
    }
    .navbar-toggle .icon-bar {
        display: block;
        width: 26px;
        height: 4px;
        border-radius: 1px;
    }
    .navbar-default .navbar-toggle,
    .navbar-default .navbar-toggle:hover,
    .navbar-default .navbar-toggle:focus {
        background: transparent;
    }
    .navbar-default .navbar-toggle .icon-bar {
        background: #e85342;
    }
    .navbar-fixed-top .navbar-collapse,
    .navbar-fixed-bottom .navbar-collapse {
        padding: 20px;
        max-height: 460px;
    }
    .navbar-default .navbar-brand {
        padding-left: 1em;
        font-size: 1.1em;
        padding-bottom: 1em;
    }
    .search-bar-agileits,
    .cart-mainf {
        float: none;
        text-align: center;
    }
}

@media screen and (max-width: 736px) {
    .inner-about2 h4 {
        font-size: 1.8em;
    }
    .banner-text p:before {
        left: 29.3%;
    }
    .banner-text p:after {
        right: 32%;
    }
    .service2 .ab1 {
        margin-left: 4px;
    }
    .ab1 {
        margin: 5px 0 0 0;
    }
    .banner-bg-agileits {
        min-height: 550px;
    }
    .banner-text {
        padding: 16em 0 0;
    }
    ul.banner-txt li {
        padding: 5px 16px;
        font-size: 0.9em;
        letter-spacing: 1px;
    }
    .footer-nav,
    .contact-foot {
        text-align: left;
    }
    .footer-nav.text-center {
        margin-top: 1em;
    }
    .blog-footer,
    .contact-foot {
        margin-top: 1.5em;
    }
    .team-w3ls-txt h6 {
        font-size: 1.3em;
    }
    .team-text {
        min-height: 240px;
        padding: 93px 30px 52px;
    }
    .subscribe-main h5 {
        font-size: 1.1em;
    }
    .subscribe-form {
        width: 80%;
    }
    .bott-img.bott-img1 {
        margin-left: 0;
        margin-top: 3em;
    }
    .list-inline>li {
        margin: 10px;
    }
    .banner-bg-inner {
        min-height: 382px;
    }
    .list-inline>li {
        margin: 7px;
    }
    h2.title-inner {
        font-size: 3em;
    }
}

@media screen and (max-width: 667px) {
    .section {
        padding: 3em 0;
    }
    .team-grids:hover .social-icon {
        padding-top: 8em;
    }
    .rad-txt {
        font-size: 1.4em;
    }
    .team-text {
        padding: 66px 30px 52px;
    }
    .banner-text p:before {
        left: 28.77%;
    }
    .banner-bg-inner {
        min-height: 338px;
        background-position: 0 -34px;
    }
    h2.title-inner {
        font-size: 3em;
    }
    .banner-text-inner {
        padding: 13em 0 0;
    }
    .stats-icon span {
        font-size: 33px;
    }
    .subscribe-form {
        width: 81%;
    }
    .carousel-control.right {
        right: 45%;
    }
    .list-inline>li {
        margin: 7px 1px;
    }
    .loginbox {
        width: 80%;
    }
}

@media screen and (max-width: 640px) {
    .banner-bg-agileits {
        min-height: 530px;
    }
    .banner-text p:before {
        left: 28.5%;
    }
    .banner-text p {
        line-height: 45px;
    }
    .banner-text p:before {
        top: 37px;
    }
    .banner-text p:after {
        top: 32px;
        right: 32%;
    }
    h2.title {
        font-size: 4.3em;
    }
    .numscroller {
        font-size: 27px;
    }
    .stats-right {
        margin-left: 2em;
    }
    .bg-right {
        min-height: 540px;
    }
    .inner-about2 {
        padding: 3em;
    }
    .about-right-grid {
        min-height: 716px;
    }
    .subscribe-main h5 {
        font-size: 1em;
    }
    .banner-text p {
        font-size: 2.5em;
    }
    .banner-bg-agileits {
        min-height: 500px;
    }
    .banner-text p:before {
        left: 29.3%;
        top: 32px;
    }
    .banner-text p:after {
        top: 30px;
        right: 33%;
    }
    .team-text {
        padding: 53px 30px 52px;
    }
    .subscribe-form {
        width: 87%;
    }
    .list-inline>li {
        padding: 4px;
    }
}

@media screen and (max-width: 600px) {
    .banner-text {
        padding: 15em 0 0;
    }
    .banner-text p:before {
        left: 29%;
    }
    .banner-text p:after {
        top: 29px;
        right: 32%;
    }
    .services-w3ls {
        width: 100%;
    }
    .service2 .ab1 {
        margin-left: 0;
        margin-top: 6px;
    }
    .inner-about2 {
        padding: 2em;
    }
    .stats-right {
        margin-left: 10px;
    }
    .agileits_w3layouts-stats-grids {
        padding: 23px 20px;
    }
    .stats-right {
        margin-left: 25px;
    }
    .team-text {
        padding: 37px 30px 52px;
        min-height: 230px;
    }
    .subscribe-form {
        width: 93%;
    }
    .list-inline>li {
        padding: 5px;
        width: 24%;
        float: left;
        margin: 7px 2.5px;
    }
    h2.title-inner {
        font-size: 2.8em;
    }
}

@media screen and (max-width: 568px) {
    .banner-bg-inner {
        min-height: 320px;
    }
    .banner-bg-agileits {
        min-height: 470px;
    }
    .banner-text {
        padding: 14em 0 0;
    }
    .banner-text p:before {
        left: 28.6%;
    }
    h2.title {
        font-size: 4.1em;
        letter-spacing: 5px;
    }
    .section {
        padding: 2em 0;
    }
    .about-right-grid {
        min-height: 650px;
    }
    .about-bottom-right p {
        width: 100%;
    }
    .bg-right {
        width: 100%;
        min-height: 350px;
    }
    .w3ls-section.stats {
        width: 100%;
    }
    .team-container {
        width: 90%;
    }
    .agileits_w3layouts-stats-grids {
        padding: 23px 30px;
    }
    .subscribe-main h5 {
        font-size: 0.95em;
    }
    .subscribe-form {
        width: 100%;
    }
    .team-mid-txt h5 {
        font-size: 3em;
    }
    .team-mid-txt h5:last-child {
        font-size: 3em;
    }
    .contact-form input[type="text"]:first-child {
        margin-bottom: 2em;
        margin-right: 0;
    }
    .contact-form input[type="text"] {
        width: 100%;
    }
    .loginbox {
        width: 88%;
    }
    .description input[type="text"] {
        width: 50%;
    }
}

@media screen and (max-width: 480px) {
    .banner-text p:before {
        left: 27.6%;
    }
    .banner-text {
        padding: 13em 0 0;
    }
    .banner-bg-agileits {
        min-height: 450px;
    }
    ul.banner-txt li:nth-child(2) {
        margin: 0 0.8em;
    }
    .about-right-grid {
        min-height: 600px;
    }
    .team-container {
        width: 100%;
    }
    .team-text {
        padding: 25px 28px 25px;
        min-height: 216px;
    }
    h2.title {
        font-size: 3.8em;
        letter-spacing: 4px;
    }
    .about-right-grid {
        min-height: 563px;
    }
    .list-inline>li {
        width: 23.8%;
    }
    h2.title-inner {
        font-size: 2.5em;
    }
    .banner-bg-inner {
        min-height: 292px;
        background-position: 0 -6px;
    }
    .banner-text-inner {
        padding: 12em 0 0;
    }
    .team-grids:hover .social-icon {
        padding-top: 7em;
    }
    .carousel-control.right {
        right: 42%;
    }
    .about-left-grid {
        padding: 0;
    }
    .sub-news {
        width: 30%;
    }
    .email-news {
        width: 70%;
    }
    .email-news input[type="email"],
    .sub-news input[type="submit"] {
        padding: 10px 10px;
    }
    .footer-social.text-center {
        padding-top: 3em;
    }
    .subscribe-main h5 {
        line-height: 2;
    }
    .contact-bottom h6 {
        font-size: 1.4em;
        padding: 9px 0;
    }
    .loginbox {
        width: 100%;
    }
    label.control-label {
        padding: 0;
    }
    .description input[type="text"] {
        width: 60%;
    }
}

@media screen and (max-width: 414px) {
    .banner-bg-agileits {
        min-height: 415px;
    }
    .banner-text p:before {
        left: 26.6%;
    }
    .banner-text p:after {
        right: 31%;
    }
    .inner-about2 h4 {
        font-size: 1.6em;
    }
    h2.title {
        font-size: 3.6em;
        letter-spacing: 4px;
    }
    .team-grids {
        width: 100%;
    }
    .testi-grids {
        width: 70%;
    }
    .fimg1 {
        width: 92%;
        margin: 0 3em;
    }
    .email-news {
        padding: 20px 8px;
    }
    .sub-news {
        padding: 20px 8px;
    }
    .team-grids:hover .social-icon {
        padding-top: 12em;
    }
    .testi-grids {
        width: 75%;
    }
    .carousel-control.right {
        right: 39%;
    }
    .list-inline>li {
        width: 23.6%;
    }
    h2.title-inner {
        font-size: 2.2em;
    }
    .banner-text-inner {
        padding: 11em 0 0;
    }
    h2.title-inner {
        font-size: 2.1em;
    }
    .banner-bg-inner {
        min-height: 280px;
        background-position: 0 0px;
    }
}

@media screen and (max-width: 384px) {
    .list-inline>li {
        width: 23.5%;
    }
    .banner-bg-agileits {
        min-height: 390px;
    }
    .banner-text p:before {
        left: 25.8%;
    }
    .banner-text p:after {
        right: 30%;
    }
    .banner-text {
        padding: 12em 0 0;
    }
    h2.title {
        font-size: 3.4em;
        letter-spacing: 3px;
    }
    ul.banner-txt li {
        padding: 5px 13px;
    }
    .inner-about2 {
        padding: 2em 1.3em;
    }
    .inner-about2 h4 {
        font-size: 1.55em;
    }
    .rad-txt {
        font-size: 1.3em;
    }
    .fimg1 {
        width: 100%;
        margin: 0 1em;
    }
    .sub-news input[type="submit"] {
        letter-spacing: 0px;
    }
    h2.title-inner {
        font-size: 2.1em;
    }
    h2.title-inner {
        font-size: 1.95em;
        letter-spacing: 2px;
    }
    .banner-text-inner {
        padding: 12em 0 0;
    }
    .description input[type="text"] {
        width: 100%;
    }
}

@media screen and (max-width: 375px) {
    .inner-about2 h4 {
        font-size: 1.5em;
    }
    .rad-txt {
        margin-bottom: 1.2em;
    }
    .about-bottom.section span.abtext {
        display: block;
        width: 63%;
        margin-top: 10px;
    }
    .img-testi {
        padding: 0;
    }
    .footer-social ul li span {
        margin-left: 5px;
    }
    .contact-form input[type="submit"] {
        width: 37%;
        padding: 6px 0;
        margin: 1em 1em 0 0;
    }
    .footer-social.text-center {
        padding-top: 2em;
    }
    .footer-social h4 {
        font-size: 1.5em;
    }
}

@media screen and (max-width: 320px) {
     .navbar-toggle {
        padding: 9px 0 0;
        margin-top: 4px;
        margin-bottom: 0;
        margin-right: 15px;
    }
    .banner-text-inner {
        padding: 8em 0 0;
    }
    .navbar-brand {
        height: 20px;
        padding: 15px 15px;
        font-size: 17px;
        line-height: 16px;
    }
    .navbar-default .navbar-brand {
        font-size: 0.9em;
        padding-left: 15px;
    }
    .banner-bg-inner {
        min-height: 240px;
    }
    .banner-bg-inner {
        min-height: 215px;
    }
    h2.title-inner {
        font-size: 1.72em;
        letter-spacing: 1px;
    }
    .banner-text-inner {
        padding: 8.5em 0 0;
    }
    .ab1 {
        padding: 17px 19px 15px;
    }
    .about-bottom-right {
        padding: 0;
    }
    .list-inline>li {
        margin: 7px 2px;
    }
    nav.navbar.navbar-default.navbar-fixed-top {
        padding: 5px 0;
    }
    .banner-text p {
        font-size: 2.1em;
    }
    h2.title {
        font-size: 3em;
        letter-spacing: 2px;
    }
    ul.banner-txt li:nth-child(2) {
        margin: 0 0.5em;
    }
    ul.banner-txt li {
        padding: 5px 8px;
        font-size: 0.8em;
        letter-spacing: 0.5px;
    }
    .banner-text p:before {
        left: 25%;
    }
    .banner-text {
        padding: 10em 0 0;
    }
    .banner-bg-agileits {
        min-height: 345px;
    }
    .inner-about2 h4 {
        font-size: 1.23em;
    }
    .about-bottom.section span.abtext {
        width: 72%
    }
    .about-bottom-right .ab1-icon {
        width: 39px;
        height: 38px;
        padding: 0;
    }
    .ab1-icon span {
        font-size: 1.5em;
    }
    .team-grids:hover .social-icon {
        padding-top: 9em;
    }
    .agileits_w3layouts-stats-grids {
        padding: 23px 19px;
    }
    .banner-text p:after {
        width: 14%;
        height: 4px;
    }
    .banner-text p:before {
        width: 16.3%;
        height: 4px;
    }
    .testi-grids {
        width: 74%;
    }
    .fimg1 {
        margin: 0;
    }
    .rad-txt {
        font-size: 1.2em;
    }
    .carousel-control.right {
        right: 35%;
    }
    .email-news {
        width: 68%;
    }
    .sub-news {
        padding: 20px 4px;
        width: 32%;
    }
    .footer-social h4 {
        font-size: 1.5em;
    }
    .contact-top1 {
        padding: 25px 10px;
    }
    .subscribe-main p {
        letter-spacing: 0.5px;
    }
    .contact-form {
        padding: 0;
    }
    .footer-social.text-center {
        padding-top: 2em;
    }
    .map iframe {
        min-height: 290px;
    }
    .controls {
        padding: 0;
    }
    label.control-label {
        font-size: 0.8em;
    }
    .fpassword {
        top: -4px;
    }
    .btn-breadcrumb .btn {
        padding: 6px 7px 6px 13px;
    }
    ul.bc-list li a {
		font-size: 0.95em;
	}
}

/* -- //Responsive code -- */