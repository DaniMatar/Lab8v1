
@extends ('pages.app')

<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>


			.title {
                font-size: 50px;
                margin-bottom: 20px;
            }


		</style>
	</head>

    @section('content')

	<body>
		<div class="container">
			<div class="content">
				<div class="title">Welcome : {{$first}}{{$last}} </div>

			</div>
		</div>
	</body>
        @stop
</html>
