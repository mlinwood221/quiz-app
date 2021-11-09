<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>QuizzlyBears</title>
	<style type="text/css">
		body {
			Margin: 0;
			padding: 0;
		}
		table {
			border-spacing: 0;
		}
		td {
			padding: 0;
			color: #222222;
			font-family: Roboto,"Helvetica Neue",Helvetica,Arial,sans-serif;
			font-size: 14px;
			font-weight: normal;
			text-align: left;
            word-break: break-word;
		}
		img {
			border: 0;
		}
		.wrapper {
			background-color: #f6f9fc;
			width: 100%;
			table-layout: fixed;
			padding-bottom: 40px;
		}

		.webkit {
			max-width: 600px;
			background-color: #FFFFFF;
		}

		.outer {
			Margin: 0 auto;
			width: 100%;
			max-width: 600px;
			font-family: sans-serif;
			color: #4a4a4a;
		}
		table {
			width: 100%;
			border-spacing: 0;
		}
		a {
			color: #8364E2;
			text-decoration: underline;
			display:inline-block;
		}
		.all-center {
			max-width: 440px;
			margin-left: auto;
			margin-right: auto;
		}
		.all-center td {
			text-align:center;
		}
		img {
			max-width: 100%;
		}
	
		@media screen and (max-width: 600px) { 
		}
		@media screen and (max-width: 400px) { 
		}
	</style>
</head>
<body>
	<center class="wrapper">
		<div class="webkit">
			<table class="outer" align="center">
				<tr>
					<td>
						<table>
							<tr>
								<td>
									<a href="{{ url('') }}" style="position: relative">
                                        <div style="font-size: 48px; color: white; position: absolute; left: 50%; top:50%; transform: translateX(-50%) translateY(-50%);">QuizzlyBears</div>
                                        <div style="background-image: url('{{ asset('user-assets/images/background/subheader.jpg') }}'); width: 600px; height: 200px; background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
                                    </a>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
                    <td style="padding-left:20px;padding-right:20px">
                        
                        @yield('content')
						
					</td>
				</tr>
				<tr>
					<td>
						<table>
							<tr>
								<td style="background-color: #8364E2;padding: 15px 20px;text-align:center;">
                                    <span style="margin:0;color:#FFFFFF;font-size: 14px;">QuizzlyBear. Love our product<br></span>
                                </td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</div>
	</center>
</body>
</html>