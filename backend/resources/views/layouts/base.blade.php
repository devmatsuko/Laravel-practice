<DOCTYPE!>
<html lang="ja">
<head>
<meta charset="UTF-8" />
<!-- titleの置き場 -->
<!-- セクション名:titleの値が反映される -->
<title>@yield('title')</title>
<!-- bootstrapのインポート -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>
<img src="https://wings.msn.to/image/wings.jpg" title="ロゴ" />
<hr />
<!-- mainコンテンツの置き場所 -->
@section('main')
<p>既定のコンテンツです。</p>
@show
<hr/>
</body>
</html>