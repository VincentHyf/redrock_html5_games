<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<title>我正在参与《我给团团拍张照》游戏</title>
	<script src="{{URL::asset('js/cqupt/jquery.min.js')}}"></script>
	<script src="{{URL::asset('js/cqupt/main.js')}}"></script>
	<link rel="stylesheet" href="{{URL::asset('css/cqupt/style.css')}}"/>
</head>
<body>
	<div class="container">
		<ul>
			<li class="mask">
				<div class="non-opacity">
				</div>
				<div class="guide">
					<div class="guide-img">
						<div class="guide-words">
						</div>
					</div>
				</div>
				<div class="score-board">
					<div class="score-img">
						<p>
							<span class="score-num"></span> <span>分</span>
						</p>
						<input type="text" placeholder="输入您的手机号码" class="phone-box">
						<div class="apply-btn"></div>
					</div>
				</div>
			</li>
			<li class="beginPage">
				<img src="{{URL::asset('images/cqupt/play.png')}}" class="play">

				</img>
				<p class="copyright">© 红岩网校工作站</p>
			</li>
			<li class="gamePage">
				<div class="cross cross-bg">
				</div>
				<div class="shutBox">
					<div class="shut">
					</div>
				</div>
			</li>
		</ul>
	</div>
</body>
</html>