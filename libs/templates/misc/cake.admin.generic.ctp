/**
 *
 * Generic CSS for CakeAdmin
 * Modified from Generic CSS for CakePHP
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app.webroot.css
 * @since         CakePHP(tm)
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

* {
	margin:0;
	padding:0;
}

/** General Style Info **/
body {
	background: #003d4c;
	color: #fff;
	font-family:'lucida grande',verdana,helvetica,arial,sans-serif;
	font-size:90%;
	margin: 0;
}
a {
	color: #003d4c;
	text-decoration: underline;
	font-weight: bold;
}
a:hover {
	color: #367889;
	text-decoration:none;
}
a img {
	border:none;
}
h1, h2, h3, h4 {
	font-weight: normal;
	margin-bottom:0.5em;
}
h1 {
	background:#fff;
	color: #003d4c;
	font-size: 200%;
}
h2 {
	background:#fff;
	color: #e32;
	font-family:'Gill Sans','lucida grande', helvetica, arial, sans-serif;
	font-size: 180%;
}
h3 {
	color: #993;
	font-family:'Gill Sans','lucida grande', helvetica, arial, sans-serif;
	font-size: 155%;
}
h4 {
	color: #993;
	font-weight: normal;
}
ul, li {
	margin: 0 12px;
}

/** Layout **/
#container {
	text-align: left;
}

#header{
	padding: 20px 20px 0 20px;
}
#header h1 {
	line-height:20px;
	background: #003d4c;
	color: #fff;
	padding: 0px 30px;
}
#header h1 a {
	color: #fff;
	background: #003d4c;
	font-weight: normal;
	text-decoration: none;
}
#header h1 a:hover {
	color: #fff;
	background: #003d4c;
	text-decoration: underline;
}
#content{
	background: #fff;
	clear: both;
	color: #333;
	padding: 10px 20px 40px 20px;
	overflow: auto;
}
#footer {
	clear: both;
	padding: 6px 10px;
	text-align: right;
}

/** Containers **/
div.form,
div.index,
div.view {
	float:right;
	width:76%;
	border-left:1px solid #666;
	padding:10px 2%;
}
div.actions {
	float:left;
	width:16%;
	padding:10px 1.5%;
}
div.actions h3 {
	padding-top:0;
	color:#777;
}

/** Navigation **/
.navigation {
    clear: both;
    height:36px;
    margin: 0 12px 0 0;
    padding: 1em 0 0 0;
}
.navigation li {
    background-color: #367889;
    color: #fff;
    list-style: none;
    float: left;
    margin: 0 2px;
}
.navigation li a {
    color: #fff;
    padding: 10px 1em;
    line-height: 16px;
    font-size: 16px;
    display: block;
    text-decoration: none;
}
.navigation li a:hover {
    text-decoration:underline;
}
.navigation li.first {
    margin-left: 0;
}
.navigation li.on {
    background-color: #fff;
}
.navigation li.on a {
    color: #003d4c;
}

/** Tables **/
table {
	background: #fff;
	border-right:0;
	clear: both;
	color: #333;
	margin-bottom: 10px;
	width: 100%;
}
th {
	border:0;
	border-bottom:2px solid #555;
	text-align: left;
	padding:4px;
}
th a {
	display: block;
	padding: 2px 4px;
	text-decoration: none;
}
th a.asc:after {
	content: ' ⇣';
}
th a.desc:after {
	content: ' ⇡';
}
table tr td {
	background: #fff;
	padding: 6px;
	text-align: left;
	vertical-align: top;
	border-bottom:1px solid #ddd;
}
table tr:nth-child(2n) td {
	background: #f5f5f5;
}
table .altrow td {
	background: #f5f5f5;
}
td.actions {
	text-align: center;
	white-space: nowrap;
}
table td.actions a {
	margin: 0px 6px;
	padding:2px 5px;
}
.cake-sql-log table {
	background: #f4f4f4;
}
.cake-sql-log td {
	padding: 4px 8px;
	text-align: left;
	font-family: Monaco, Consolas, "Courier New", monospaced;
}
.cake-sql-log caption {
	color:#fff;
}

/** Paging **/
div.paging {
	background:#fff;
	color: #ccc;
	margin-top: 1em;
	clear:both;
}
div.paging span.disabled {
	color: #ddd;
	display: inline;
}
div.paging span.current {
	color: #c73e14;
}
div.paging span a {
}

/** Scaffold View **/
dl {
	line-height: 2em;
	margin: 0em 0em;
	width: 60%;
}
dl .altrow {
	background: #f4f4f4;
}
dt {
	font-weight: bold;
	padding-left: 4px;
	vertical-align: top;
}
dd {
	margin-left: 10em;
	margin-top: -2em;
	vertical-align: top;
}

/** Forms **/
form {
	clear: both;
	margin-right: 20px;
	padding: 0;
	width: 95%;
}
fieldset {
	border: 1px solid #ccc;
	margin-bottom: 1em;
	padding: 16px 20px;
}
fieldset legend {
	background:#fff;
	color: #e32;
	font-size: 160%;
	font-weight: bold;
}
fieldset fieldset {
	margin-top: 0px;
	margin-bottom: 20px;
	padding: 16px 10px;
}
fieldset fieldset legend {
	font-size: 120%;
	font-weight: normal;
}
fieldset fieldset div {
	clear: left;
	margin: 0 20px;
}
form div {
	clear: both;
	margin-bottom: 1em;
	padding: .5em;
	vertical-align: text-top;
}
form .input {
	color: #444;
}
form .required {
	font-weight: bold;
}
form .required label:after {
	color: #e32;
	content: '*';
	display:inline;
}
form div.submit {
	border: 0;
	clear: both;
	margin-top: 10px;
}
label {
	display: block;
	font-size: 110%;
	margin-bottom:3px;
}
input, textarea {
	clear: both;
	font-size: 140%;
	font-family: "frutiger linotype", "lucida grande", "verdana", sans-serif;
	padding: 1%;
	width:98%;
}
select {
	clear: both;
	font-size: 120%;
	vertical-align: text-bottom;
}
select[multiple=multiple] {
	width: 100%;
}
option {
	font-size: 120%;
	padding: 0 3px;
}
input[type=checkbox] {
	clear: left;
	float: left;
	margin: 0px 6px 7px 2px;
	width: auto;
}
div.checkbox label {
	display: inline;
}
input[type=radio] {
	float:left;
	width:auto;
	margin: 0 3px 7px 0;
}
div.radio label {
	margin: 0 0 6px 20px;
}
input[type=submit] {
	display: inline;
	font-size: 110%;
	width: auto;
}
form .submit input[type=submit] {
	background:#62af56;
	background: -webkit-gradient(linear, left top, left bottom, from(#a8ea9c), to(#62af56));
	background-image: -moz-linear-gradient(top, #a8ea9c, #62af56);
	border-color: #2d6324;
	color: #000;
	text-shadow: #8cee7c 0px 1px 0px;
}
form .submit input[type=submit]:hover {
	background:#4ca83d;
	background: -webkit-gradient(linear, left top, left bottom, from(#85e573), to(#4ca83d));
	background-image: -moz-linear-gradient(top, #85e573, #4ca83d);
}

/** Notices and Errors **/
div.flash {
    clear: both;
    color: #fff;
    font-size: 120%;
    line-height: 140%;
    margin: 1em 0;
    padding: 0.8em;
}
div.flash em {
    color: #000;
    font-weight: normal;
    line-height: 140%;
}
div.error {
    background-color: #c73e14;
    font-family: Courier, monospace;
}
div.information {
    background-color:#50b0ec;
}
div.notice {
    background-color: #ffcc00;
    color: #000;
    font-family: Courier, monospace;
}
div.success {
    background-color: green;
}

/**  Actions  **/
div.actions ul {
	margin: 0;
	padding: 0;
}
div.actions li {
	margin:0 0 0.5em 0;
	list-style-type: none;
	white-space: nowrap;
	padding: 0;
}
div.actions ul li a {
	font-weight: normal;
	display: block;
	clear: both;
}
div.actions ul li a:hover {
	text-decoration: underline;
}

input[type=submit],
div.actions ul li a,
td.actions a {
	font-weight:normal;
	padding: 4px 8px;
	background:#e6e49f;
	background: -webkit-gradient(linear, left top, left bottom, from(#f1f1d4), to(#e6e49f));
	background-image: -moz-linear-gradient(top, #f1f1d4, #e6e49f);
	color:#333;
	border:1px solid #aaac62;
	-webkit-border-radius:8px;
	-moz-border-radius:8px;
	border-radius:8px;
	text-decoration:none;
	text-shadow: #fff 0px 1px 0px;
	min-width: 0;
}
input[type=submit]:hover,
div.actions ul li a:hover,
td.actions a:hover {
	background: #f0f09a;
	background: -webkit-gradient(linear, left top, left bottom, from(#f7f7e1), to(#eeeca9));
}

/** Related **/
div.related {
	clear: both;
	display: block;
}

/** Debugging **/
pre {
	color: #000;
	background: #f0f0f0;
	padding: 1em;
}
pre.cake-debug {
	background: #ffcc00;
	font-size: 120%;
	line-height: 140%;
	margin-top: 1em;
	overflow: auto;
	position: relative;
}
div.cake-stack-trace {
	background: #fff;
	color: #333;
	margin: 0px;
	padding: 6px;
	font-size: 120%;
	line-height: 140%;
	overflow: auto;
	position: relative;
}
div.cake-code-dump pre {
	position: relative;
	overflow: auto;
}
div.cake-stack-trace pre, div.cake-code-dump pre {
	color: #000;
	background-color: #F0F0F0;
	margin: 0px;
	padding: 1em;
	overflow: auto;
}
div.cake-code-dump pre, div.cake-code-dump pre code {
	clear: both;
	font-size: 12px;
	line-height: 15px;
	margin: 4px 2px;
	padding: 4px;
	overflow: auto;
}
div.cake-code-dump span.code-highlight {
	background-color: #ff0;
	padding: 4px;
}
div.code-coverage-results div.code-line {
	padding-left:5px;
	display:block;
	margin-left:10px;
}
div.code-coverage-results div.uncovered span.content {
	background:#ecc;
}
div.code-coverage-results div.covered span.content {
	background:#cec;
}
div.code-coverage-results div.ignored span.content {
	color:#aaa;
}
div.code-coverage-results span.line-num {
	color:#666;
	display:block;
	float:left;
	width:20px;
	text-align:right;
	margin-right:5px;
}
div.code-coverage-results span.line-num strong {
	color:#666;
}
div.code-coverage-results div.start {
	border:1px solid #aaa;
	border-width:1px 1px 0px 1px;
	margin-top:30px;
	padding-top:5px;
}
div.code-coverage-results div.end {
	border:1px solid #aaa;
	border-width:0px 1px 1px 1px;
	margin-bottom:30px;
	padding-bottom:5px;
}
div.code-coverage-results div.realstart {
	margin-top:0px;
}
div.code-coverage-results p.note {
	color:#bbb;
	padding:5px;
	margin:5px 0 10px;
	font-size:10px;
}
div.code-coverage-results span.result-bad {
	color: #a00;
}
div.code-coverage-results span.result-ok {
	color: #fa0;
}
div.code-coverage-results span.result-good {
	color: #0a0;
}