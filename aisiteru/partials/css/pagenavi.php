<style type="text/css">
/*wp-pagenavi
================================================================================================*/
.wp-pagenavi {
	clear: both;
	text-align:center;
	padding-bottom:50px;
	padding-top:25px;
}
.wp-pagenavi a, .wp-pagenavi span {
	background-color: #ffffff;
	border: 1px solid #ffffff;
	padding: 8px 15px;
	margin: 0 2px;
	white-space: nowrap;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-transition: 0.2s ease-in-out;
	-moz-transition: 0.2s ease-in-out;
	-o-transition: 0.2s ease-in-out;
	transition: 0.2s ease-in-out;
	text-align: center;
	text-decoration: none;
}

.wp-pagenavi span.current{
	color: #FFF;
	background-color: var(--color-secondary);
	border-color: var(--color-secondary);
	font-weight: bold;
}
.wp-pagenavi span.extend,
.wp-pagenavi span.pages{
	/*color:#5d5957;*/
}
span.pages,
a.page,
a.last,
a.first,
span.current,
span.extend{
	display:none;
}
a.nextpostslink{
	margin-left:20px;
}
a.previouspostslink{
	margin-right:20px;
}
@media only screen and (min-width: 680px) {
/*wp-pagenavi
================================================================================================*/
span.pages,
a.page,
a.last,
a.first,
span.current,
span.extend{
	display:inline;
}
.wp-pagenavi a:hover{
	color:#FFFFFF;
	background-color: var(--color-link-hover);
	border-color: var(--color-link-hover);
    font-weight: bold;
}
a.nextpostslink{
	margin-left:2px;
}
a.previouspostslink{
	margin-right:2px;
}
}
</style>