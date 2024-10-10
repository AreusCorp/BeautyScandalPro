<!DOCTYPE HTML>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>企業情報｜Beauty Scandal Pro</title>
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
			<div class="heading1">新規企業登録</div>
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
					<div class="heading2">法人情報</div>
					<div class="content">
						<dl>
							<dt><p>BS企業コード</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="0000000000" readonly inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>法人名<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>代表名<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>郵便番号<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><span class="zip">〒</span><input type="text" name="" value="" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>住所<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>電話番号<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>メールアドレス<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
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
					<div class="heading2">SMBC GMO登録</div>
					<div class="content">
						<dl>
							<dt><p>SHOP ID</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>SITE PASS</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>CARD API KEY</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>CARD PUB KEY</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="col_in">
				<div class="heading2">月額支払い方法</div>
					<div class="content">
						<dl>
							<dt><p>支払い方法<span class="must">必須</span></p></dt>
							<dd>
								<div class="form_inline"><input type="radio" name="pay" id="pay1" value="0"><label for="pay1">請求書払い</label></div>
								<div class="form_inline"><input type="radio" name="pay" id="pay2" value="1"><label for="pay2">クレジットカード</label></div>
							</dd>
						</dl>
					</div>
				</div>
			</div>
			<div class="col-12" id="payment">
				<div class="col_in">
				<div class="heading2">カード情報</div>
					<div class="content">
						<dl>
							<dt><p>カード番号</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value="" inputmode="numeric"></div>
							</dd>
						</dl>
						<dl>
							<dt><p>クレジットカード名義人</p></dt>
							<dd>
								<div class="form_block"><input type="text" name="" value=""></div>
							</dd>
						</dl>
						<dl>
							<dt><p>有効期限</p></dt>
							<dd>
								<div class="form_flex">
									<div>
										<select>
											<option>01</option>
											<option>02</option>
											<option>03</option>
											<option>04</option>
											<option>05</option>
											<option>06</option>
											<option>07</option>
											<option>08</option>
											<option>09</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
										</select>月　
									</div>
									<div>
										<select>
											<option>24</option>
											<option>25</option>
											<option>26</option>
											<option>27</option>
											<option>28</option>
											<option>29</option>
											<option>30</option>
											<option>31</option>
											<option>32</option>
											<option>33</option>
											<option>34</option>
											<option>35</option>
											<option>36</option>
											<option>37</option>
											<option>38</option>
											<option>39</option>
											<option>40</option>
											<option>41</option>
											<option>42</option>
											<option>43</option>
										</select>年
									</div>
								</div>
							</dd>
						</dl>
						<dl>
							<dt><p>セキュリティコード</p></dt>
							<dd>
								<div class="form_flex"><input type="password" name="" value=""><span><i></i></span></div>
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
			<li><a href="/company/add.php"><span>新規企業登録</span></a></li>
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