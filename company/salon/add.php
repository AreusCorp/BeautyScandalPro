<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>サロン情報｜Beauty Scandal Pro</title>
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
			<div class="heading1">新規サロン登録</div>
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
					<div class="heading2">サロン情報</div>
					<div class="content">
						<dl>
							<dt><p>BSサロンコード</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="0000000000" readonly="" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>企業</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="株式会社BeautyScandal" readonly=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>サロン名<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="BeautyScandalSalon"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>郵便番号<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><span class="zip">〒</span><input type="text" name="" value="1060032" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>住所<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="東京都港区六本木7-6-2"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>電話番号<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="0000000000" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>メールアドレス<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="aaaaaaa@aaaaaaa.aaa"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>サロンPASS</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="サロンPass"></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">発注権限</div>
					<div class="content">
						<dl>
							<dt><p>発注権限<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_inline"><input type="radio" name="auth" id="auth1" value="0"><label for="auth1">発注不可</label></div>
								<div class="form_inline"><input type="radio" name="auth" id="auth2" value="1"><label for="auth2">発注可能</label></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
					<div class="heading2">シェアEC</div>
					<div class="content">
						<dl>
							<dt><p>シェアEC</p></dt>
							<dd>
								<div class="form_inline"><input type="radio" name="shareec" id="shareec1" value="0"><label for="shareec1">行う</label></div>
								<div class="form_inline"><input type="radio" name="shareec" id="shareec2" value="1"><label for="shareec2">行わない</label></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">代理店</div>
					<div class="content">
						<dl>
							<dt><p>代理店選択</p></dt>
							<dd>
								<div class="form_block">
									<select>
										<option>代理店AAA</option>
										<option>代理店BBB</option>
										<option>代理店CCC</option>
										<option>代理店DDD</option>
										<option>代理店EEE</option>
										<option>代理店FFF</option>
									</select>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><p>支店選択</p></dt>
							<dd>
								<div class="form_block">
									<select>
										<option>支店AAA</option>
										<option>支店BBB</option>
										<option>支店CCC</option>
										<option>支店DDD</option>
										<option>支店EEE</option>
										<option>支店FFF</option>
									</select>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><p>担当者選択</p></dt>
							<dd>
								<div class="form_block">
									<select>
										<option>担当者AAA</option>
										<option>担当者BBB</option>
										<option>担当者CCC</option>
										<option>担当者DDD</option>
										<option>担当者EEE</option>
										<option>担当者FFF</option>
									</select>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><p>代理店サロンコード</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="000000"></div>
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
			<li><a href="/company/"><span>企業一覧</span></a></li>
			<li><a href="/company/view.php"><span>株式会社BeautyScandal</span></a></li>
			<li><a href="/company/salon/"><span>サロン一覧</span></a></li>
			<li><a href="/company/salon/add.php"><span>新規サロン登録</span></a></li>
		</ul>
	</div>
</main>

<aside>
	<nav>
		<div id="nav">
			<ul class="s_list">
				<li class="st"><a href="/admin/"><span class="material-symbols-outlined">space_dashboard</span>ダッシュボード</a></li>
				<li class="st"><a href="/order/"><span class="material-symbols-outlined">receipt_long</span>注文一覧</a></li>
				<li class="st active"><a href="/company/"><span class="material-symbols-outlined">apartment</span>企業一覧<i></i></a>
				<ul>
					<li class="active"><a href="/company/view.php">株式会社BeautyScandal<i></i></a>
					<ul>
						<li class="active"><a href="/company/salon/">サロン一覧</a></li>
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
				<li class="st"><a href="/agency/"><span class="material-symbols-outlined">storefront</span>代理店一覧<i></i></a>
				<ul>
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