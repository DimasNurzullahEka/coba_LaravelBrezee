<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Halaman  Contact</title>
</head>
<body>
	<h3>Ini halaman Kontak menggunakan controler  </h3>
	    {{-- cara pertama
        <a href="{{route('about.page')}}">Kembali ke halaman About</a> --}}

        {{-- cara kedua --}}
        <a href="{{url('/about')}}">kembali ke halaman about</a>
</body>
</html>
