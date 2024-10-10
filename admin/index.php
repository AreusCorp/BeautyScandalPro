<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>ダッシュボード｜Beauty Scandal Pro</title>
<meta name="robots" content="noindex,nofollow">
<meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/jquery.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/cmn.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/i18n/jquery.ui.datepicker-ja.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css">
<script>
$.get('https://holidays-jp.github.io/api/v1/date.json', function(holidaysData) {
	$('.datepicker').datepicker({
	beforeShowDay: function(date) { //祝日対応
		if (date.getDay() == 0) {
			return [true, 'is-sunday', null];
		} else if (date.getDay() == 6) {
			return [true, 'is-saturday', null];
		}
		var holidays = Object.keys(holidaysData);
		for (var i = 0; i < holidays.length; i++) {
			var holiday = new Date(Date.parse(holidays[i]));
			if (holiday.getYear() == date.getYear() &&
				holiday.getMonth() == date.getMonth() &&
				holiday.getDate() == date.getDate()) {
					return [true, 'is-holiday', null];
				}
			}
			return [true, 'is-weekday', null];
		}
	});
});
</script>
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
			<div class="heading1">ダッシュボード</div>
		</div>
	</div>

	<div class="row" id="m_sale">
		<div class="col-12">
			<span class="material-symbols-outlined" id="m_sale_setting">settings</span>
			<div class="content">
				<div class="inner">
					<div class="form_flex"><span class="material-symbols-outlined">calendar_month</span><input type="text" class="datepicker" value="<?php $today = date("Y/m/d"); print_r($today);?>"><span>～</span><input type="text" class="datepicker" value="<?php $today = date("Y/m/d"); print_r($today);?>"></div>
					<div class="form_flex">
						<span class="material-symbols-outlined">apartment</span>
						<div class="refine_company">
							<select>
								<option value="">すべての企業</option>
								<option>企業企業企業企業企業企業</option>
								<option>企業企業</option>
								<option>企業企業</option>
								<option>企業企業</option>
								<option>企業企業</option>
							</select>
						</div>
						<div class="refine_salon">
							<select>
								<option value="">すべてのサロン</option>
								<option>サロンサロンサロンサロンサロンサロン</option>
								<option>サロンサロン</option>
								<option>サロンサロン</option>
								<option>サロンサロン</option>
							</select>
						</div>
						<div class="refine_staff">
							<select>
								<option value="">すべてのスタッフ</option>
								<option>スタッフスタッフ</option>
								<option>スタッフスタッフ</option>
								<option>スタッフスタッフ</option>
								<option>スタッフスタッフ</option>
								<option>スタッフスタッフ</option>
							</select>
						</div>
					</div>
					<div class="form_flex">
						<span class="material-symbols-outlined">storefront</span>
						<div class="refine_agency">
							<select>
								<option value="">すべての代理店</option>
								<option>代理店代理店代理店代理店代理店代理店</option>
								<option>代理店代理店</option>
								<option>代理店代理店</option>
								<option>代理店代理店</option>
							</select>
						</div>
						<div class="refine_branch">
							<select>
								<option value="">すべての支店</option>
								<option>支店支店</option>
								<option>支店支店</option>
								<option>支店支店</option>
								<option>支店支店</option>
							</select>
						</div>
					</div>
					<div class="btn2 new"><a href="#">決定</a></div>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="col_in">
				<div class="content">
					<i><span class="material-symbols-outlined">point_of_sale</span></i>
					<div class="inner">
						<div class="heading3">売上合計</div>
						<p>000,000,000<span>円</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="col_in">
				<div class="content">
					<i><span class="material-symbols-outlined">receipt_long</span></i>
					<div class="inner">
						<div class="heading3">注文数</div>
						<p>0,000<span>件</span></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-4">
			<div class="col_in">
				<div class="content">
					<i><span class="material-symbols-outlined">health_and_beauty</span></i>
					<div class="inner">
						<div class="heading3">注文商品数</div>
						<p>0,000,000<span>点</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row" id="m_order">
		<div class="col-12">
			<div class="col_in">
				<div class="heading2">注文一覧<a href="/order/" title="もっと見る"><span class="material-symbols-outlined">apps</span></a></div>
				<div class="content">
					<table class="datatable">
						<thead>
							<tr>
							<td class="column-status"><a href="#" class="order-none">ステータス</a></td>
							<td class="column-code"><a href="#" class="order-none">BS注文コード</a></td>
								<td class="column-title"><a href="#" class="order-des">注文者</a></td>
								<td class="column-date"><a href="#" class="order-none">注文日</a></td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td class="column-status"><span class="tag1">ステータス</span></td>
								<td class="column-code">0000000000</td>
								<td class="column-title">
									<a href="/order/view.php">名字 名前</a>
									<div class="column-info"><span>送料：¥210</span><span>支払い金額：¥18,110</span><span>数量：5</span></div>
									<ul class="list_action">
										<li><a href="/order/view.php">注文情報詳細</a></li>
									</ul>
								</td>
								<td class="column-date"><span>2024/01/20</span><span>15:00</span></td>
							</tr>
							<tr>
								<td class="column-status"><span class="tag2">ステータス</span></td>
								<td class="column-code">0000000000</td>
								<td class="column-title">
									<a href="/order/view.php">名字 名前</a>
									<div class="column-info"><span>送料：¥210</span><span>支払い金額：¥18,110</span><span>数量：5</span></div>
									<ul class="list_action">
										<li><a href="/order/view.php">注文情報詳細</a></li>
									</ul>
								</td>
								<td class="column-date"><span>2024/01/20</span><span>15:00</span></td>
							</tr>
							<tr>
								<td class="column-status"><span class="tag3">ステータス</span></td>
								<td class="column-code">0000000000</td>
								<td class="column-title">
									<a href="/order/view.php">名字 名前</a>
									<div class="column-info"><span>送料：¥210</span><span>支払い金額：¥18,110</span><span>数量：5</span></div>
									<ul class="list_action">
										<li><a href="/order/view.php">注文情報詳細</a></li>
									</ul>
								</td>
								<td class="column-date"><span>2024/01/20</span><span>15:00</span></td>
							</tr>
							<tr>
								<td class="column-status"><span class="tag3">ステータス</span></td>
								<td class="column-code">0000000000</td>
								<td class="column-title">
									<a href="/order/view.php">名字 名前</a>
									<div class="column-info"><span>送料：¥210</span><span>支払い金額：¥18,110</span><span>数量：5</span></div>
									<ul class="list_action">
										<li><a href="/order/view.php">注文情報詳細</a></li>
									</ul>
								</td>
								<td class="column-date"><span>2024/01/20</span><span>15:00</span></td>
							</tr>
							<tr>
								<td class="column-status"><span class="tag3">ステータス</span></td>
								<td class="column-code">0000000000</td>
								<td class="column-title">
									<a href="/order/view.php">名字 名前</a>
									<div class="column-info"><span>送料：¥210</span><span>支払い金額：¥18,110</span><span>数量：5</span></div>
									<ul class="list_action">
										<li><a href="/order/view.php">注文情報詳細</a></li>
									</ul>
								</td>
								<td class="column-date"><span>2024/01/20</span><span>15:00</span></td>
							</tr>
						</tbody>
					</table>
					<div class="pager">
						<ul>
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">&lsaquo;</a></li>
							<li><p>1/5</p></li>
							<li><a href="#">&rsaquo;</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="pan">
		<ul>
			<li><a href="/admin/"><span>ダッシュボード</span></a></li>
		</ul>
	</div>
</main>

<aside>
	<nav>
		<div id="nav">
			<ul class="s_list">
				<li class="st active"><a href="/admin/"><span class="material-symbols-outlined">space_dashboard</span>ダッシュボード</a></li>
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
				<li class="st"><a href="/agency/"><span class="material-symbols-outlined">storefront</span>代理店一覧<i></i></a>
				<ul>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
					<ul>
						<li><a href="/agency/branch/">支店一覧</a></li>
						<li><a href="/agency/staff/">従業員一覧</a></li>
					</ul></li>
					<li><a href="/company/view.php">代理店AAAAAAAAAA<i></i></a>
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