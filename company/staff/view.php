<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>スタッフ情報｜Beauty Scandal Pro</title>
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
			<div class="heading1">スタッフ情報<span> - 山田 花子</span></div>
		</div>
	</div>
	
	<div class="row" id="m_list">
		<div class="col-12">
			<div class="list_dev2">
				<ul class="btn2">
					<li><a href="/company/view.php">企業情報</a></li>
					<li><a href="/company/salon/">サロン</a></li>
					<li><a href="/company/staff/" class="active-tab">スタッフ</a></li>
				</ul>
			</div>
		</div>
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
					<div class="heading2">スタッフ情報</div>
					<div class="content">
						<dl>
							<dt><p>BSスタッフコード</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="0000000000" readonly inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>サロン</p></dt>
							<dd>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon1"><label for="salon1">サロンAAA</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon2"><label for="salon2">サロンBBB</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon3"><label for="salon3">サロンCCC</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon4"><label for="salon4">サロンDDD</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon5"><label for="salon5">サロンEEE</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon6"><label for="salon6">サロンFFF</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon7"><label for="salon7">サロンGGG</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon8"><label for="salon8">サロンHHH</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon9"><label for="salon9">サロンIII</label></div>
								<div class="form_inline"><input type="checkbox" name="salon" id="salon10"><label for="salon10">サロンJJJ</label></div>
							</dd>
						</dl>
						<dl>
							<dt><p>スタッフ名<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="山田 花子"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>画像</p></dt>
							<dd>
								<div class="form_upload">
									<div class="canvas_area"><canvas></canvas></div>
									<div class="drop_area"><p>ファイルをドロップ<br>または</p><input type="button" id="upload_button" value="ファイルを選択" class="btn2"></div>
								</div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">SNS</div>
					<div class="content">
						<dl>
							<dt><p>Instagram</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="beautyscandal.official"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>TikTok</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="beautyscandal.official"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>youtube</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="beautyscandal.official"></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">コメント</div>
					<div class="content">
						<dl>
							<dt><p>コメント</p></dt>
							<dd>
								<div class="form_block"><textarea rows="5"></textarea></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">スタッフセール</div>
					<div class="content">
						<dl>
							<dt><p>スタッフセール</p></dt>
							<dd>
								<div class="form_inline"><input type="radio" name="staffsale" id="staffsale1" value="0"><label for="staffsale1">注文不可</label></div>
								<div class="form_inline"><input type="radio" name="staffsale" id="staffsale2" value="1"><label for="staffsale2">注文可能</label></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">「山田 花子」を削除</div>
					<div class="content">
						<input type="button" value="削除" class="btn3 action_delete">
						<p class="help">削除すると復元できません。</p>
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
			<li><a href="/company/staff/"><span>スタッフ一覧</span></a></li>
			<li><a href="/company/staff/view.php"><span>山田 花子</span></a></li>
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
						<li><a href="/company/salon/">サロン一覧</a></li>
						<li class="active"><a href="/company/staff/">スタッフ一覧</a></li>
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