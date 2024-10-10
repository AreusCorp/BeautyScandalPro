<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>従業員情報｜Beauty Scandal Pro</title>
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/cmn.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
<link rel="shortcut icon" href="/favicon.webp">
</head>

<body>
<div id="load"><div></div><div class="loader"></div></div>
<div id="wrapper">

<header>
	<div id="close"><a href="#"><i></i></a></div>
	<div class="logo"><a href="/admin/"><img src="/images/cmn/pro.webp" alt="Beauty Scandal Pro"></a></div>
	<ul>
		<li><a href="/"><span class="material-symbols-outlined">move_item</span></a></li>
	</ul>
</header>

<main>
	
	<div class="row" id="m_title">
		<div class="col-12">
			<div class="heading1">新規従業員登録</div>
		</div>
	</div>
	
	<div class="row" id="m_list">
		<div class="col-12">
			<div class="msg done">完了メッセージ</div>
			<div class="msg error">エラーメッセージ
				<ul>
					<li>△△は××です</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="row">
		<form class="form">
			<div class="col-12">
				<div class="col_in">
					<div class="heading2">従業員情報</div>
					<div class="content">
						<dl>
							<dt><p>BS従業員コード</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="0000000000" readonly inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>代理店</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="株式会社代理店AAAAA" readonly=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>所属支店</p></dt>
							<dd>
							<div class="form_flex">
									<div>
										<select>
											<option>支店AAAA</option>
											<option>支店BBBB</option>
											<option>支店CCCC</option>
											<option>支店DDDD</option>
											<option>支店EEEE</option>
										</select>
									</div>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><p>従業員名<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>メールアドレス<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>従業員PASS</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="form_submit"><input type="button" value="保存する" class="btn1" onclick="#"></div>
		</form>
	</div>
	
	<div id="pan">
		<ul>
			<li><a href="/admin/"><span>ダッシュボード</span></a></li>
			<li><a href="/agency/"><span>代理店一覧</span></a></li>
			<li><a href="/agency/view.php"><span>株式会社代理店AAAAA</span></a></li>
			<li><a href="/agency/staff/"><span>従業員一覧</span></a></li>
			<li><a href="/agency/staff/add.php"><span>新規従業員登録</span></a></li>
		</ul>
	</div>
</main>

<aside>
	<nav>
		<div id="nav">
			<ul class="s_list">
				<li class="st"><a href="/admin/"><span class="material-symbols-outlined">space_dashboard</span>ダッシュボード</a></li>
				<li class="st"><a href="/order/"><span class="material-symbols-outlined">receipt_long</span>注文一覧</a></li>
				<li class="st"><a href="/company/"><span class="material-symbols-outlined">apartment</span>企業一覧<i></i></a>
				<ul>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li><a href="/company/staff/">スタッフ一覧</a></li>
					</ul></li>
				</ul></li>
				<li class="st active"><a href="/agency/"><span class="material-symbols-outlined">storefront</span>代理店一覧<i></i></a>
				<ul>
					<li class="active"><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li class="active"><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/agency/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
				</ul></li>
			</ul>
		</div>
	</nav>
</aside>

<footer><p class="cp">&copy; BEAUTY SCANDAL</p></footer>
</div>
</body>
</html>