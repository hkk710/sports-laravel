<!DOCTYPE html>
<html>
	<body style="background: #fff; background-size: cover; line-height: 30px;">
		<div style="border: 2px solid #f5f8fa;">
			<div style="background: #f5f8fa; padding: 15px; text-align: center; line-height: normal;">
				<h3 style="margin: 0;"><b>{{ config('app.name') }}</b></h3><br>
				<h4 style="margin: 0;">Registration success!</h4>
			</div>
			<div style="padding: 30px;">
				<div>
					<div>
						<p>Your name was successfully registered in {{ config('app.name') }}. <br> Thank You!</p>
					</div>
				</div>
			</div>
			<div style="background: #f5f8fa; padding: 15px; text-align: center;">
				© 2017 <a href="{{ url('/') }}">{{ config('app.name') }}</a>. All rights reserved.
			</div>
		</div>
	</body>
</html>
