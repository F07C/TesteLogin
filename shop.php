<?php header("content-type: text/css");?>

.container-cart {
	width: 80%;
	margin: 0 auto;
}

/*-- Shopping-Cart-PopUp --*/

div#my-cart-modal {
	background-color: rgba(0, 0, 0, 0.50);
}

div#my-cart-modal .modal-dialog {
	width: 50%;
	margin: 100px auto 0;
}

div#my-cart-modal .modal-content {
	background-color: #F5F5F5;
	box-shadow: none !important;
	border: none !important;
	border-radius: 0;
	padding: 30px;
}

div#my-cart-modal .modal-header {
	padding: 0 15px 15px;
	border-bottom: 3px solid #333;
}

div#my-cart-modal h4#myModalLabel {
	font-size: 20px;
	color: #F60B0E;
}

div#my-cart-modal .modal-body {
	padding: 0;
}

div#my-cart-modal .table {
	margin: 0;
}

div#my-cart-modal .table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
	padding: 10px;
	vertical-align: middle;
	border: none;
}

div#my-cart-modal .table>tbody>tr {
	border-top: 1px solid #CCC;
}

div#my-cart-modal .table>tbody>tr:nth-child(1) {
	border: none;
}

div#my-cart-modal .btn-danger {
	color: #000;
	background-color: #FFF;
	border-color: #000;
}

div#my-cart-modal .btn-danger:hover {
	color: #fff;
	background-color: #c9302c;
	border-color: #c9302c;
}

div#my-cart-modal strong {
	font-family: 'Roboto', sans-serif;
	color: #000;
	font-size: 15px;
}

div#my-cart-modal .modal-footer {
	border-top: 3px solid #000;
}

div#my-cart-modal button.btn.btn-default,
div#my-cart-modal button.btn.btn-primary {
	padding: 8px 0;
	width: 15%;
	font-family: 'Roboto', sans-serif;
	font-size: 14px;
	border: none;
	border-radius: 0;
	outline: none;
	background-color: #333;
	color: #FFF;
}

div#my-cart-modal button.btn.btn-default:hover {
	background-color: #F60B0E;
}

div#my-cart-modal button.btn.btn-primary a {
	color: #FFF;
}

div#my-cart-modal button.btn.btn-primary:hover {
	background-color: #F60B0E;
}

div#my-cart-modal .alert-danger {
	color: #FFF;
	text-align: center;
	background-color: #F60B0E;
	font-family: 'Roboto', sans-serif;
	font-size: 15px;
	margin: 20px;
	border: none;
	border-radius: 0;
}

div#my-cart-modal .close {
	font-size: 25px;
	opacity: 1;
}

div#my-cart-modal .close:hover,
.close:focus {
	opacity: 1;
	color: #F60B0E;
}

/*-- //Shopping-Cart-PopUp --*/

#staplesbmincart form {
	position: relative;
	padding: 1em;
	background: #fbfbfb;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;
	-o-border-radius: 4px;
	-ms-border-radius: 4px;
	border-radius: 4px;
	color: #333;
	-webkit-box-shadow: 0px 0px 5px 2px #9a9a9a;
	-moz-box-shadow: 0px 0px 5px 2px #9a9a9a;
	-o-box-shadow: 0px 0px 5px 2px #9a9a9a;
	-ms-box-shadow: 0px 0px 5px 2px #9a9a9a;
	box-shadow: 0px 0px 5px 2px #9a9a9a;
}

#staplesbmincart form ul {
	overflow-y: scroll;
	max-height: 300px;
}

#staplesbmincart {
	display: none;
	position: fixed;
	left: 68%;
	top: 16.9%;
	width: 420px;
}

.sbmincart-showing #staplesbmincart {
	display: block;
	z-index: 9999;
	-webkit-animation: zoomIn .3s ease;
	-moz-animation: zoomIn .3s ease;
	-o-animation: zoomIn .3s ease;
	-ms-animation: zoomIn .3s ease;
	animation: zoomIn .3s ease;
}

#staplesbmincart form.sbmincart-empty {
	font-size: 16px;
	font-weight: bold;
}

#staplesbmincart ul {
	clear: both;
	float: left;
	width: 100%;
	margin: 5px 0 20px;
	padding: 1em;
	list-style-type: none;
	background: #fff;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
}

#staplesbmincart .sbmincart-empty ul {
	display: none;
}

.thumbnail {
	padding: 0;
	border: none;
	margin-bottom: 10px;
}

#staplesbmincart .sbmincart-closer {
	float: right;
	margin: -3px -10px 0;
	padding: 0 10px;
	background: 0;
	border: 0;
	font-size: 25px;
	cursor: pointer;
	font-weight: bold;
	outline: none;
}

#staplesbmincart .sbmincart-item {
	clear: left;
	padding: 7px 0;
	min-height: 35px;
	font-size: 1em;
}

#staplesbmincart .sbmincart-item+.sbmincart-item {
	border-top: 1px solid #f2f2f2;
}

#staplesbmincart .sbmincart-item a {
	color: #333;
	text-decoration: none;
}

#staplesbmincart .sbmincart-details-name {
	float: left;
	width: 62%;
}

#staplesbmincart .sbmincart-details-quantity {
	float: left;
	width: 15%;
}

#staplesbmincart .sbmincart-details-remove {
	float: left;
	width: 7%;
}

#staplesbmincart .sbmincart-details-price {
	float: left;
	width: 16%;
	text-align: right;
}

#staplesbmincart .sbmincart-attributes {
	margin: 0;
	padding: 0;
	background: transparent;
	border: 0;
	border-radius: 0;
	box-shadow: none;
	color: #999;
	font-size: 12px;
	line-height: 22px;
	overflow: inherit;
	height: inherit;
}

#staplesbmincart .sbmincart-attributes li {
	display: inline;
}

#staplesbmincart .sbmincart-attributes li:after {
	content: ",";
}

#staplesbmincart .sbmincart-attributes li:last-child:after {
	content: "";
}

#staplesbmincart .sbmincart-quantity {
	width: 30px;
	height: 18px;
	padding: 2px 4px;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
	font-size: 13px;
	text-align: right;
	transition: border linear 0.2s, box-shadow linear 0.2s;
	-webkit-transition: border linear 0.2s, box-shadow linear 0.2s;
	-moz-transition: border linear 0.2s, box-shadow linear 0.2s;
}

#staplesbmincart .sbmincart-quantity:hover {
	border-color: #0078C1;
}

#staplesbmincart .sbmincart-quantity:focus {
	border-color: #0078C1;
	outline: 0;
	box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 3px rgba(0, 120, 193, 0.4);
}

#staplesbmincart .sbmincart-remove {
	width: 18px;
	height: 19px;
	margin: 2px 0 0;
	padding: 0;
	background: #b7b7b7;
	border: 1px solid #a3a3a3;
	border-radius: 3px;
	color: #fff;
	font-size: 13px;
	opacity: 0.70;
	cursor: pointer;
}

#staplesbmincart .sbmincart-remove:hover {
	opacity: 1;
}

#staplesbmincart .sbmincart-footer {
	clear: left;
	text-align: center;
	margin-right: 1.5em;
	position: relative;
}

p.sbmincart-empty-text {
	color: #f44336;
	font-weight: 500;
}

#staplesbmincart .sbmincart-subtotal {
	bottom: 3px;
	padding-left: 0;
	font-size: 14px;
	font-weight: bold;
	display: block;
	text-align: left;
	letter-spacing: 1px;
}

#staplesbmincart .sbmincart-submit {
	margin-right: 6px;
	padding: 0;
	border: none;
	color: #F60B0E;
	background: none;
	outline: none;
	font-size: 0.87em;
	font-weight: 700;
	position: absolute;
	text-transform: uppercase;
	right: 0;
	top: 0;
}

/* Let's get this party started */

#staplesbmincart form ul::-webkit-scrollbar {
	width: 5px;
}

/* Track */

#staplesbmincart form ul::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 6px #999;
	-moz-box-shadow: inset 0 0 6px #999;
	-o-box-shadow: inset 0 0 6px #999;
	-ms-box-shadow: inset 0 0 6px #999;
	box-shadow: inset 0 0 6px #999;
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	border-radius: 10px;
}

/* Handle */

#staplesbmincart form ul::-webkit-scrollbar-thumb {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
	-o-border-radius: 10px;
	-ms-border-radius: 10px;
	border-radius: 10px;
	background: #3c43a4;
	-moz-box-shadow: inset 0 0 6px #3c43a4;
	-o-box-shadow: inset 0 0 6px #3c43a4;
	-ms-box-shadow: inset 0 0 6px #3c43a4;
	-webkit-box-shadow: inset 0 0 6px #3c43a4;
	box-shadow: inset 0 0 6px #3c43a4;
}

/*-- //cart-css --*/

/*-- cart-button --*/

.back form {
	margin-top: 0.5em;
}

.chr-cart:hover,
.back a:hover {
	-webkit-box-shadow: 0 0 9px 2px rgba(224, 224, 224, 0.5);
	-moz-box-shadow: 0 0 9px 2px rgba(224, 224, 224, 0.5);
	-o-box-shadow: 0 0 9px 2px rgba(224, 224, 224, 0.5);
	-ms-box-shadow: 0 0 9px 2px rgba(224, 224, 224, 0.5);
	box-shadow: 0 0 9px 2px rgba(224, 224, 224, 0.5);
}

.back a {
	font-size: 1em;
	color: #fff;
	padding: 4px 7px;
	display: inline-block;
}

.men-pro-item {
	position: relative;
}

.product-men {
	padding: 0 6px;
}

/*-- Model-Slider --*/

/*-- effect on products --*/

.men-cart-pro {
	bottom: 0;
	left: 0;
	margin: auto;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	right: 0;
	text-align: center;
	top: 0;
	transition: all 0.5s ease-out 0s;
	visibility: hidden;
}

.product-men:nth-child(2) .product-new-top,
.product-men:nth-child(6) .product-new-top,
.product-men:nth-child(7) .product-new-top {
	background: #FFC107;
}

.product-men:nth-child(4) .product-new-top,
.product-men:nth-child(8) .product-new-top,
.product-new-top,
.product-men:nth-child(3) .product-new-top {
	background: #219ff3;
}

.product-new-top {
	background: #F60B0E;
	color: #fff;
	right: 0;
	position: absolute;
	top: 0;
	width: 80px;
	font-size: 13px;
	height: 29px;
	text-align: center;
	line-height: 2.3;
}

span.money {
	font-size: 1em;
	font-weight: 700;
}

.inner-men-cart-pro {
	height: 100%;
	position: relative;
	width: 100%;
	transition: all 0.5s ease-out 0s;
}

.inner-men-cart-pro ul {
	left: 0;
	margin: -60px 0 0;
	padding: 0;
	position: absolute;
	top: 45%;
	width: 100%;
	transition: all 0.5s ease-out 0s;
}

.link-product-add-cart {
	background: #0c0c0c;
	color: #fff;
	display: inline-block;
	height: 40px;
	line-height: 40px;
	text-transform: uppercase;
	transition: all 0.5s ease-out 0s;
}

.inner-men-cart-pro>ul>li {
	display: inline-block;
}

.inner-men-cart-pro ul li a {
	color: #fff;
	transition: all 0.5s ease-out 0s;
	display: block;
	width: 40px;
	height: 40px;
	text-align: center;
}

.men-thumb-item:hover {
	cursor: pointer;
}

.men-thumb-item:hover::before {
	opacity: 1;
	visibility: visible;
}

.men-thumb-item:hover .men-cart-pro {
	opacity: 1;
	visibility: visible;
}

.men-thumb-item:hover .inner-men-cart-pro ul {
	margin: 20px 0 0;
}

.inner-men-cart-pro ul li a:hover {
	background: #ffc229 none repeat scroll 0 0;
}

.inner-men-cart-pro .link-product-add-cart {
	width: 51%;
	top: 0px;
	left: 25%;
	margin: 0 auto;
	position: absolute;
	transition: all 0.5s ease-out 0s;
	font-size: 0.8em;
}

.men-thumb-item:hover .inner-men-cart-pro .link-product-add-cart {
	top: 49%;
}

.link-product-add-cart:hover {
	background: #F60B0E;
	color: #fff;
}

ul.stars i {
	font-size: 9px;
}

ul.stars li {
	list-style: none;
	display: inline-block;
}

ul.stars li a {
	color: #333;
}

ul.stars li a:hover {
	color: #F60B0E;
}

.product-chr-info {
	padding: 20px;
	-webkit-transition: .5s all;
	-moz-transition: .5s all;
	transition: .5s all;
}

.product-chr-info:hover {
	box-shadow: -2px 4px 50px rgba(25, 13, 15, 0.38);
}

ul.rating li {
	display: inline;
}

ul.price-list li {
	display: inline-block;
	color: #000;
	font-size: 1em;
}

ul.price-list li:first-child {
	font-weight: 600;
	color: #34c663;
}

ul.price-list li:last-child {
	color: #777;
	float: right;
	text-decoration: line-through;
}

.product-chr-info .caption h4 {
	color: #000;
	text-transform: capitalize;
	font-size: 1em;
	letter-spacing: 0.5px;
	font-weight: 600;
	padding: 5px 10px;
	margin-bottom: 10px;
	background: #eee;
	text-align: center;
}

.caption p,
ul.rating {
	text-align: center;
}

ul.price-list {
	padding-top: 10px;
}

/*-- //effect on products --*/

/*-- product left --*/

.ads-list {
	width: 33.333%;
	float: left;
}

.select-box {
	background: rgba(255, 76, 76, 0.66);
	padding: 30px 30px;
	margin: 40px 0;
	border-radius: 6px;
	-webkit-border-radius: 6px;
	-moz-border-radius: 6px;
	-ms-border-radius: 6px;
	-o-border-radius: 6px;
}

.ads-list label {
	display: block;
	font-size: 14px;
	font-weight: 400;
	color: #000;
	margin-bottom: 6px;
}

.ads-list select {
	width: 70%;
	outline: none;
	color: #000;
	font-size: 15px;
	border: 1px solid #eee;
	padding: 7px 8px;
}

.btn-group.bootstrap-select.show-tick button {
	padding: 8px 10px;
}

.bootstrap-select:not([class*="col-"]):not([class*="form-control"]):not(.input-group-btn) {
	width: 260px;
}

#custom-search-input {
	padding: 3px;
	border: solid 1px #D1E0EE;
	border-radius: 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	-ms-border-radius: 0px;
	-o-border-radius: 0px;
	background-color: #fff;
	width: 80%;
	color: #000;
}

#custom-search-input input {
	border: 0;
	box-shadow: none;
}

#custom-search-input button {
	margin: 2px 0 0 0;
	background: none;
	box-shadow: none;
	border: 0;
	color: #666666;
	padding: 0 8px 0 10px;
	border-left: solid 1px #ccc;
}

#custom-search-input button:hover {
	border: 0;
	box-shadow: none;
	border-left: solid 1px #ccc;
}

#custom-search-input .glyphicon-search {
	font-size: 23px;
}

.input-lg {
	height: 29px;
	padding: 0px 10px;
	font-size: 15px;
	line-height: 1.3333333;
	border-radius: 0;
	-webkit-border-radius: 0px;
	-moz-border-radius: 0px;
	-ms-border-radius: 0px;
	-o-border-radius: 0px;
}

#custom-search-input .glyphicon-search {
	font-size: 16px;
}

.btn-default {
	border-color: #D1E0EE;
}

.btn {
	display: inline-block;
}

.search-hotel input[type="search"] {
	background: #dedede;
	border: none;
	width: 100%;
	outline: none;
	padding: 11px 10px 10px 10px;
	font-size: 13px;
	color: #000000;
	letter-spacing: 1px;
	text-align: center;
}

.search-hotel form input[type="submit"] {
	width: 100%;
	border: none;
	padding: 10px;
	margin-top: 0;
	background: #f7c052;
	color: #000;
	font-size: 1em;
	letter-spacing: 1px;
	-webkit-transition: .5s all;
	-moz-transition: .5s all;
	transition: .5s all;
	font-family: 'Roboto', sans-serif;
}

.search-hotel form input[type="submit"]:hover {
	background: #34c663;
	color: #fff;
}

.search-grid-left {
	padding: 15px;
	background: #f5f4f0;
}

h3.shopf-sear-head {
	color: #181c27;
	margin-bottom: 20px;
	font-size: 1.1em;
	font-weight: 600;
}

.search-hotel {
	padding: 15px 0;
	border-bottom: 1px solid #e5e3db;
}

/*-- Slider range --*/

ul.dropdown-menu6,
ul.dropdown-menu5 {
	margin: 0;
	position: relative;
}

ul.dropdown-menu6 li {
	list-style: none;
}

ul.dropdown-menu6 li p {
	width: 100%;
}

span.amount {
	color: #ffffff;
	font-size: 16px;
}

input#amount,
input#amount1 {
	font-size: 13px;
	outline: none;
	background: none;
	word-spacing: 1em;
	color: #000 !important;
	position: absolute;
	left: 0%;
	top: -27px;
	margin-top: -10px;
}

.range,
.shopf-brand-select,
.shopf-featured-ads {
	padding: 20px 0;
	background: #eee;
}

.side-bar {
	padding: 20px 15px;
	border: 1px solid #e4e4e4;
	background: #eee;
}

.shop-f-top img {
	width: 100%;
	margin-bottom: 1.5em;
}

/*-- //Slider range --*/

/*-- check input --*/

.left-side ul li {
	display: inline-block;
	width: 100%;
	margin-bottom: 6px;
}

input.checked {
	display: inline-block;
	margin: 0;
	cursor: pointer;
}

.left-side ul li span {
	font-size: 13px;
	color: #000;
	letter-spacing: 1px;
	margin-left: 3px;
	vertical-align: top;
}

.left-side {
	margin-top: 18px;
}

h3.shopf-sear-headits-sear-head {
	font-size: 16px;
	color: #000;
	font-weight: 600;
	margin-bottom: 12px;
	text-transform: capitalize;
	background: #fff;
	padding: 6px 10px;
}

.fteam_grid_info {
	text-align: center;
	padding: 40px 11px;
	-webkit-box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, 0.75);
	-moz-box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, 0.75);
	box-shadow: 0px 1px 10px -4px rgba(0, 0, 0, 0.75);
	margin: 0 4px;
	width: 31.8%;
	background: rgba(255, 255, 255, 0.76);
}

/*-- //check input --*/

/*-- customer --*/

.customer-rev ul li i {
	color: #ee4f4f;
	font-size: 0.8em;
}

.customer-rev ul li {
	list-style: none;
}

.customer-rev ul li a span {
	color: #000;
	font-weight: normal;
	font-size: 14px;
	margin-left: 8px;
}

/*-- //customer --*/

.wrapper_top_shop {
	background: #eee;
}

/*-- nuts --*/

.men-thumb-item {
	text-align: center;
	position: relative;
}

.item-info-product {
	text-align: center;
}

.item-info-product h4 a {
	color: #080808;
	font-size: 14px;
	font-weight: 700;
}

.info-product-price {
	margin: 12px 0;
}

span.item_price {
	font-size: 18px;
	color: #d60404;
}

.info-product-price del {
	font-weight: 300;
	margin-left: 13px;
	font-size: 15px;
}

.product-sec1.product-sec2 {
	background: url(../images/bg1.jpg)no-repeat 0px 0px;
	background-attachment: fixed;
	background-size: cover;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	-ms-background-size: cover;
	position: relative;
}

.effect-bg {
	margin-top: 40px;
}

.effect-bg h3 {
	color: #fff;
	font-size: 47px;
	letter-spacing: 3px;
	font-weight: 600;
}

.effect-bg h6 {
	font-size: 18px;
	letter-spacing: 2px;
	margin: 18px 0;
	color: #fff;
}

.effect-bg p {
	color: #000;
}

.product-men img {
	width: 100%;
}

.grid_meta {
	float: left;
	width: 80%;
	text-align: left;
}

.info-product-price {
	margin: 12px 0;
	padding: 1em;
	border-top: 1px solid #ddd;
}

button.chr-cart {
	font-size: 0.9em;
	color: #fff;
	border: none;
	width: 100%;
	border-radius: 5px;
	padding: 4px 15px;
	text-align: center;
	border-left: none !important;
	background: none;
	background: #ee4f4f;
	margin: 10px 0 0;
	text-decoration: none;
	text-transform: capitalize;
	outline: none;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

button.chr-cart i {
	font-size: 1.2em;
	font-weight: 600;
	margin-left: 10px;
	background: #fff;
	width: 28px;
	height: 28px;
	line-height: 27px;
	color: #000;
	border-radius: 50%;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	-ms-transition: 0.5s all;
}

button.chr-cart:hover {
	background: #34c663;
	color: #000;
}

button.chr-cart:hover i {
	background: transparent;
	color: #fff;
	font-size: 1.6em;
	font-weight: normal;
}

ul.footer_list_icons.single_in li {
	color: #2f2f2f;
	font-size: 15px;
	font-weight: 600;
	letter-spacing: 1px;
}

ul.footer_list_icons.single_in li a {
	color: #565555;
}

ul.footer_list_icons.single_in li a:hover {
	color: #333;
}

/*-- single-page --*/

.single-right-left h3 {
	text-transform: capitalize;
	font-size: 19px;
	color: #000;
	margin: 0;
	font-weight: 600;
}

.single-right-left h3 span {
	font-weight: normal;
	color: #777;
}

.single-right-left p {
	text-transform: capitalize;
	margin: .5em 0 0;
	letter-spacing: 0.2px;
}

.single-right-left p a {
	color: #ee4f4f;
	margin-left: 6px;
}

.single-right-left del {
	color: #555;
	margin-left: 10px;
	font-weight: 300;
	font-size: 0.8em;
}

.simpleCart_shelfItem .caption h6 {
	color: #000;
	font-size: 1.8em;
}

.rating-single {
	float: left;
	margin: 10px 0;
}

ul.rating li a {
	color: #f7c052;
}

span.fa.fa-star.yellow-star {
	color: #34c663;
}

.simpleCart_shelfItem .caption .rating {
	float: left;
	margin-top: 10px;
}

ul.rating-single li {
	display: inline-block;
}

.description {
	margin: 1.5em 0;
}

.description h5 {
	color: #545454;
	font-size: 0.9em;
	margin-bottom: 12px;
	letter-spacing: 1px;
}

.description p {
	color: #545454;
	line-height: 1.8em;
	margin: 0.5em 0 0;
	font-size: 0.9em;
}

.occasional {
	float: left;
}

.color-quality {
	float: right;
}

.color-quality-right h5,
.occasional h5 {
	color: #000;
	font-size: 16px;
	margin: 0 0 12px;
	letter-spacing: 1px;
}

.color-quality-right select {
	text-transform: capitalize;
	padding: 5px 29px;
	background: #eee;
}

.colr {
	width: 33.333%;
	float: left;
}

.description input[type="text"] {
	padding: 8px 8px;
	color: #000;
	font-size: 13px;
	width: 45%;
	outline: none;
	letter-spacing: 1px;
}

.description input[type="submit"] {
	color: #fff;
	font-size: 16px;
	background: #000000;
	border: none;
	outline: none;
	padding: 7px 33px 9px;
	letter-spacing: 2px;
	text-transform: capitalize;
	-webkit-transition: .5s all;
	-moz-transition: .5s all;
	transition: .5s all;
}

.description input[type="submit"]:hover {
	background: #34c663;
}

.descr .occasion-cart a {
	padding: 8px 20px;
	text-decoration: none;
	color: #fff;
	font-size: 15px;
	letter-spacing: 1px;
}

.bootstrap-tab {
	margin: 5em 0 0;
}

.bootstrap-tab-text p {
	font-size: 14px;
	color: #999;
	line-height: 1.8em;
}

.bootstrap-tab-text h5,
.add-review h4 {
	text-transform: uppercase;
	font-size: 1em;
	color: #212121;
	margin: 2em 0 1em 0;
	font-weight: 600;
	letter-spacing: 1px;
}

.bootstrap-tab-text p span {
	display: block;
	margin: 2em 0 0;
}

.bootstrap-tab-text-grid-left {
	float: left;
	width: 14%;
}

.bootstrap-tab-text-grid-right {
	float: right;
	width: 83%;
}

.bootstrap-tab-text-grid-right ul li {
	display: inline-block;
}

.bootstrap-tab-text-grid-right ul li:nth-child(2) {
	float: right;
}

.bootstrap-tab-text-grid-right ul li a {
	font-size: 1em;
	color: #F60B0E;
	text-transform: uppercase;
	text-decoration: none;
	font-weight: 600;
}

.bootstrap-tab-text-grid-right ul li a:hover {
	color: #212121;
}

.bootstrap-tab-text-grid-right ul li a i {
	left: -1em;
}

.bootstrap-tab-text-grids {
	margin: 3em 0 0 0em;
}

.bootstrap-tab-text-grid-right p {
	margin: 2em 0 0;
	color: #545454;
	font-size: 0.9em;
	line-height: 2sem;
}

.bootstrap-tab-text-grid:nth-child(2) {
	margin: 3em 0 0;
}

.add-review form {
	margin: 2em 0 0;
}

.add-review input[type="text"],
.add-review input[type="email"],
.add-review textarea {
	outline: none;
	padding: 10px;
	border: 1px solid #D2D2D2;
	width: 49%;
	font-size: 15px;
	color: #888;
}

.add-review input[type="email"] {
	margin-left: 1.55%;
}

.add-review textarea {
	width: 100% !important;
	min-height: 120px;
	margin: 1em 0;
	resize: none;
}

.add-review input[type="text"]:nth-child(3) {
	width: 100%;
	margin: 1em 0;
}

.add-review input[type="submit"] {
	outline: none;
	padding: 14px 0;
	background: #F60B0E;
	border: none;
	width: 20%;
	font-size: 1em;
	color: #fff;
	font-weight: 700;
	letter-spacing: 2px;
}

.add-review input[type="submit"]:hover {
	background: #000;
}

.nav .open>a,
.nav .open>a:hover,
.nav .open>a:focus {
	background-color: #F60B0E;
	color: #fff;
}

.product-men.single {
	margin: 0;
}

.shopf_latest_arrivals {
	margin: 4em auto 0;
}

.responsive_tabs_shopf {
	margin-top: 3em;
}

.chr.single-item {
	float: right;
}

.single_page h6 {
	font-size: 1.2em;
	font-weight: 700;
	letter-spacing: 1px;
	color: #4e4c4c;
	margin-bottom: 1em;
}

.single_page p {
	line-height: 2em;
	color: #888;
}

p.para {
	margin-top: 1em;
}

span.item_price {
	font-size: 19px;
	color: #212020;
	font-weight: 600;
}

input.button.add {
	font-size: 13px;
	color: #fff;
	background: #1d1d1d;
	text-decoration: none;
	position: relative;
	border: none;
	border-radius: 0;
	text-transform: uppercase;
	padding: .7em 1em;
	outline: none;
	letter-spacing: 1px;
	font-weight: 600;
}

.responsive_tabs {
	margin-top: 4em;
}

.new_arrivals h3 {
	font-size: 1.4em;
	color: #080808;
	font-size: 1.4em;
	letter-spacing: 1px;
	text-transform: uppercase;
	font-weight: 700;
	margin: 3em 0 1em 0;
}

.chr.single-item.single_page_b {
	float: none;
	margin-bottom: 2em;
	width: 27%;
}

.simpleCart_shelfItem .chr.single-item.single_page_b {
	float: none;
}

.radio,
.checkbox {
	font-size: 14px;
	font-weight: 600;
}

.desc_single {
	margin: 2em 0;
}

.desc_single h5 {
	color: #000;
	font-size: 1.2em;
	letter-spacing: 0.5px;
}

ul.single_specific li span {
	color: #777;
}

ul.single_specific li {
	color: #000;
	font-size: 1em;
	text-transform: capitalize;
	word-spacing: 9px;
	letter-spacing: 0.2px;
	line-height: 1.8;
}

.section.singlep_btm {
	background: #eee;
}

.col-md-3.product-men {
	background: #fff;
}

/*-- /Responsive --*/

@media screen and (max-width: 1440px) {
	.container-cart {
		width: 86%;
	}
}

@media screen and (max-width: 1366px) {
	.container-cart {
		width: 91%;
	}
}

@media(max-width:1280px) {
	.container-cart {
		width: 97%;
	}
	.item-info-product h4 a {
		font-size: 13px;
	}
	.chr.single-item {
		float: right;
		width: 15%;
	}
	.inner-men-cart-pro .link-product-add-cart {
		width: 70%;
		top: 0px;
		left: 16%;
		margin: 0 auto;
		font-size: 0.9em;
		height: 37px;
	}
	.product-new-top {
		right: 0;
		top: 0;
		width: 65px;
		font-size: 13px;
		height: 29px;
		line-height: 2.3;
	}
	.img-deals {
		padding-left: 0;
	}
	#staplesbmincart {
		left: 52%;
		top: 16.9%;
		width: 420px;
	}
}

@media(max-width:1080px) {
	.product-chr-info .caption h4 {
		font-size: 13.5px;
	}
}

@media(max-width:1050px) {
	.product-chr-info {
		padding: 10px;
	}
}

@media(max-width:1024px) {
	.container-cart {
		width: 100%;
	}
}

@media(max-width:991px) {
	.single-right-left.simpleCart_shelfItem {
		margin-top: 2em;
	}
	.single-right-left {
		width: 100%;
	}
	.responsive_tabs {
		margin-top: 3em;
	}
	.product-men.women_two {
		margin: 0;
	}
	.product-chr-info {
		width: 23.5%;
		margin: 0.5em;
		float: left;
		padding: 15px;
	}
	.side-bar {
		width: 100%;
		margin-top: 2em;
	}
	.left-ads-display {
		padding: 0;
	}
	.section.singlep_btm .container {
		width: 100%;
		padding: 0;
	}

}

@media(max-width:900px) {
	.product-chr-info {
		width: 23%;
	}
}

@media(max-width:800px) {
	.product-chr-info {
		width: 31.5%;
	}
	.single_page h6 {
		font-size: 1.2em;
		margin: 1em 0;
	}
	.bootstrap-tab-text-grid-right p {
		margin: 1em 0 0;
	}
	#staplesbmincart {
		left: 52%;
		top: 16.9%;
		width: 343px;
	}
}

@media(max-width:768px) {
	.product-chr-info {
		width: 31%;
	}
}

@media(max-width:736px) {
	#staplesbmincart {
		left: 52%;
		top: 16.9%;
		width: 322px;
	}
	#staplesbmincart .sbmincart-footer {
		margin-right: 0em;
	}
}

@media(max-width:667px) {
	#staplesbmincart {
		left: 44%;
		width: 341px;
	}
}

@media(max-width:640px) {
	.product-chr-info {
		padding: 15px;
		width: 46%;
		margin: 0.5em;
		float: left;
	}
	#staplesbmincart .sbmincart-submit {
		font-size: 0.7em;
	}
	#staplesbmincart .sbmincart-subtotal {
		bottom: 3px;
		font-size: 13px;
	}
	#staplesbmincart {
		left: 51%;
		top: 29.9%;
		width: 284px;
	}
	#staplesbmincart .sbmincart-item a {
		font-size: 0.8em;
	}
	#staplesbmincart .sbmincart-details-name {
		float: left;
		width: 51%;
	}
	#staplesbmincart .sbmincart-details-remove {
		float: left;
		width: 10%;
	}
	#staplesbmincart form {
		position: relative;
		padding: 1em 0.5em;
	}
}

@media(max-width:600px) {
	.colr {
		width: 47.333%;
		float: left;
	}
	.new_arrivals h3 {
		font-size: 1.2em;
	}
	.product-chr-info {
		padding: 15px;
		width: 46%;
		margin: 0.5em;
		float: left;
	}
	.single-right-left {
		width: 100%;
	}
}

@media(max-width:568px) {
	#staplesbmincart {
		left: 44.5%;
		top: 29.9%;
		width: 284px;
	}
	.description h5 {
		line-height: 25px;
	}
	.chr.single-item.single_page_b {
		width: 31%;
	}
}

@media(max-width:480px) {
	.product-chr-info {
		padding: 13px;
		width: 45%;
		margin: 0.5em;
		float: left;
	}
	.product-men {
		padding-left: 0;
		padding: 0;
	}
	#staplesbmincart {
		left: 22%;
		top: 15.9%;
		width: 294px;
	}
	.single-right-left h3 {
		font-size: 18px;
	}
	.colr {
		width: 60%;
		float: left;
	}
	.chr.single-item.single_page_b {
		width: 38%;
	}
}

@media(max-width:440px) {
	#staplesbmincart {
		left: 16%;
	}
	.product-chr-info {
		width: 100%;
		margin: 1.2em 0em 0em;
		float: none;
	}
	.shop-f-top img {
		margin-bottom: 0em;
	}
}

@media(max-width:414px) {
	span.money {
		font-size: 0.9em;
		font-weight: 700;
	}
	.product-chr-info {
		padding: 13px;
		width: 47%;
		margin: 0.3em;
		float: left;
	}
	.inner-men-cart-pro .link-product-add-cart {
		width: 80%;
		top: 0px;
		left: 10%;
		margin: 0 auto;
		font-size: 0.8em;
		height: 37px;
	}
	.description input[type="text"] {
		width: 100%;
	}
	.description input[type="submit"] {
		margin-top: 0.7em;
	}
	.new_arrivals h3 {
		margin: 1em 0 1em 0;
	}
	#staplesbmincart {
		left: 11%;
	}
	.color-quality {
		float: left;
		margin: 2em 0 0;
	}
	.chr.single-item.single_page_b {
		width: 45%;
	}
}

@media(max-width:384px) {
	.product-chr-info {
		padding: 13px;
		width: 97%;
		margin: 0.3em;
		float: left;
	}
	.inner-men-cart-pro .link-product-add-cart {
		width: 70%;
		top: 0px;
		left: 15%;
		margin: 0 auto;
		font-size: 0.8em;
		height: 37px;
	}
	.item-info-product h4 a {
		font-size: 15px;
	}
	#staplesbmincart {
		left: 9%;
		top: 15.9%;
		width: 294px;
	}
	#staplesbmincart {
		left: 3%;
	}
	.single-right-left h3 {
		font-size: 17px;
		line-height: 28px;
	}
	.simpleCart_shelfItem .caption h6 {
		font-size: 1.7em;
	}
	.chr.single-item.single_page_b {
		width: 48%;
	}
}

@media(max-width:320px) {
	#staplesbmincart {
		left: 2%;
		width: 290px;
	}
	button.top_chr_cart {
		padding: 0;
	}
	.chr.single-item.single_page_b {
		width: 58%;
	}

}

/*-- //Responsive --*/