<!DOCTYPE html>
<html>
<head>
	<title>Anasayfa</title>
	
	</style>
</head>
<body>
	<div class="navbar">
		<div class="navbar-logo">Logo</div>
		<div class="ustmenu">
			<a href={{url('/kategoriler')}}>Kategoriler</a>
			<a href={{url('/ilanlar')}}>İlanlar</a>
			<a href={{url('/dashboard')}}>Admin Panel</a>
		</div>
		<div class="login-register">
			<a href={{url('/login')}}>Giriş</a>
			<a href={{url('/register')}}>Kayıt Ol</a>
		</div>
	</div>

	<div class="sidebar">
		<ul>
			<li><a href={{url('/')}}>Anasayfa</a></li>
			<li><a href={{url('/hakkimizda')}}>Hakkımızda</a></li>
			<li><a href={{url('/iletisim')}}>İletişim</a></li>
			<li><a href={{url('/kategoriler')}}>Kategoriler</a></li>
			<li><a href={{url('/ilanlar')}}>İlanlar</a></li>
		</ul>
	</div>
	<section class="content">

@yield('content')  


</section>
	<div class="clearfix"></div>

	<footer class="footer">
    <div>
      <b>Version</b> 1.0 Beta
    </div>
    <strong>Copyright &copy; 2023 <a href="https://github.com/buckyxz">Abdulbaki Dobur</a></strong> Tüm hakları saklıdır.
  </footer>
</body>
</html>

<style>
		/* CSS Kodları */
		.ustmenu {
    text-align: center;
    margin: 5px 0;
}

.ustmenu a {
    display: inline-block;
    margin: 0 10px;
    padding: 10px;
    text-decoration: none;
    color: #fff;
    background-color: rgba(0, 0, 130, 0.7); /* Yarı saydam koyu yeşil */
    border-radius: 5px;
}

.ustmenu a:hover {
    background-color: rgba(0, 0, 130, 0.6); /* Hover durumunda arkaplan rengini biraz daha koyu yapabilirsiniz */
}
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		.navbar {
			background-color: #ffaa00;
			color: #fff;
			padding: 10px;
			display: flex;
			justify-content: space-between;
			align-items: center;
		}

		.navbar-logo {
			font-size: 20px;
			font-weight: bold;
		}

		.sidebar {
			background-color: rgba(0, 0, 130, 0.7); /* Lacivert tonunda transparan arka plan */
    width: 200px;
    padding: 20px;
    height: 100vh;
    float: left;
}

		.sidebar ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}

		.sidebar ul li {
			margin-bottom: 10px;
		}

		.sidebar ul li a {
			color: #fff;
			text-decoration: none;
		}

		.content {
			margin-left: 240px;
			padding: 20px;
		}


		.login-register {
			display: flex;
			align-items: center;
		}

		.login-register a {
			margin-left: 10px;
			color: #fff;
			text-decoration: none;
		}
		.footer {
    background-color: #ffaa00; /* Footer arka plan rengi */
    color: #fff; /* Metin rengi */
    padding: 10px; /* Padding ayarı */
    text-align: center; /* Metni merkeze hizala */
    position: fixed; /* Sayfa sonunda sabit tutmak için */
    bottom: 0; /* Sayfa altında görünmesi için */
    width: 100%; /* Genişliği tam ekran genişliğine ayarla */
}

.footer div {
    float: left; /* Version bölümünü sola hizala */
}

.footer strong {
    float: center; /* Copyright bölümünü sağa hizala */
}