<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Control de LEDs de APs UniFi</title>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300);
*,
*:before,
*:after {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}
html {
	min-height: 100%;
}
body {
	background: #f3efe0;
	font-family: "Open Sans";
	-webkit-font-smoothing: antialiased;
}
.page-wrap {
	margin: 0 auto;
	padding: 3em;
	text-align: center;
}
a {
	text-decoration: none !important;
}
button {
	display: block;
	margin: 2em auto;
	padding: 1em 4em;
	border-radius: 5px;
	color: white;
	font-size: 1.5em;
	cursor: pointer;
	-webkit-font-smoothing: antialiased;
	width: 400px;
}
button:active, button:focus {
	outline: none;
}
button.blue {
	background: #1ad;
	background: -webkit-linear-gradient(top, #1ad 0%, #0d86ae 100%);
	border-width: 1px;
	border-style: solid;
	border-color: #0a617e;
	box-shadow: 0 5px 0 #0a617e, inset 1px 1px rgba(255, 255, 255, 0.3), inset -1px 0px rgba(255, 255, 255, 0.3);
	text-shadow: 0 2px 0 #095e7a;
}
button.blue:hover, button.blue:focus {
	background: #10a1d1;
	background: -webkit-linear-gradient(top, #10a1d1 0%, #0f98c5 100%);
}
button.blue:active {
	box-shadow: 0 1px 0 #0f98c5, inset 1px 1px rgba(255, 255, 255, 0.3), inset -1px 0px rgba(255, 255, 255, 0.3);
	position: relative;
	top: 4px;
}
button.orange {
	border-width: 1px;
	border-style: solid;
	border-color: transparent #c7471d #9b3716;
	box-shadow: inset 1px 1px rgba(255, 255, 255, 0.2), inset -1px 0 rgba(255, 255, 255, 0.2), 0 1px 3px rgba(50, 54, 61, 0.15);
	background-image: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4gPHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGRlZnM+PGxpbmVhckdyYWRpZW50IGlkPSJncmFkIiBncmFkaWVudFVuaXRzPSJvYmplY3RCb3VuZGluZ0JveCIgeDE9IjAuNSIgeTE9IjAuMCIgeDI9IjAuNSIgeTI9IjEuMCI+PHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2UyNjAzNSIvPjxzdG9wIG9mZnNldD0iMTAwJSIgc3RvcC1jb2xvcj0iI2RlNGYyMCIvPjwvbGluZWFyR3JhZGllbnQ+PC9kZWZzPjxyZWN0IHg9IjAiIHk9IjAiIHdpZHRoPSIxMDAlIiBoZWlnaHQ9IjEwMCUiIGZpbGw9InVybCgjZ3JhZCkiIC8+PC9zdmc+IA==');
	background-size: 100%;
	background-image: -webkit-gradient(linear, 50% 0%, 50% 100%, color-stop(0%, #e26035), color-stop(100%, #de4f20));
	background-image: -moz-linear-gradient(top, #e26035, #de4f20);
	background-image: -webkit-linear-gradient(top, #e26035, #de4f20);
	background-image: linear-gradient(to bottom, #e26035, #de4f20);
	text-shadow: 0 2px 0 #7c351d;
}
button.orange:hover, button.orange:focus {
	background: #e36439;
}
button.orange:active {
	position: relative;
	top: 2px;
	background: #e05528;
}
</style>
</head>
<body>
	<div class="page-wrap">
		<a href="led_on.php"><button class="blue">Encender LEDs</button></a>
		<a href="led_off.php"><button class="orange">Apagar LEDs</button></a>
	</div>
</body>
</html>
