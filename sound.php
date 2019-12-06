<?php include('header.php'); ?>
	<div class="content-container">
		<div class="common-content-container common-mT60">
			<h2>Sound Entertainment</h2>
			<div class="sound-content-box common-mT30">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<img class="-jacket" src="/static/img/sq.jpeg">
						</div>
						<div class="swiper-slide">
							<img class="-jacket" src="/static/img/sq.jpeg">
						</div>
						<div class="swiper-slide">
							<img class="-jacket" src="/static/img/sq.jpeg">
						</div>
					</div>
				</div>
				<div class="swiper-pagination"></div>
				<div class="-about-box common-mT30">
					<p class="-text">著名アーティストへの楽曲提供実績を活かしたサウンドクリエイティブ業務を提供しております。</p>
				</div>
			</div>
			<div class="sound-display-container common-mT40">
				<h3 class="-category">Works</h3>
				<div class="sound-display-box common-mT30">
					<h4 class="-genre"><span class="-en">Pop</span><span class="-line">/</span><span class="-ja">ポップ</span></h4>
					<div class="-scroll common-mT20">
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
					</div>
				</div>
				<div class="sound-display-box common-mT30">
					<h4 class="-genre"><span class="-en">Game</span><span class="-line">/</span><span class="-ja">ゲーム</span></h4>
					<div class="-scroll common-mT20">
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
						<a href="">
							<div class="sound-display">
								<img class="-jacket" src="/static/img/sq.jpeg">
								<p>タイトルタイトル</p>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="common-link-box common-mT40">
			<div class="-flex-box">
				<a href="/other.php">
					<div class="-button">
						<img class="-img-icon" src="/static/img/handshake.svg">
						<p>受託事業はこちら</p>
						<img class="-img-direction" src="/static/img/arrow-right.svg">
					</div>
				</a>
				<a href="/contact.php">
					<div class="-button common-mT50">
						<img class="-img-icon" src="/static/img/mail.svg">
						<p>CONTACT</p>
						<img class="-img-direction" src="/static/img/arrow-right.svg">
					</div>
				</a>
			</div>
		</div>
	<script type="text/javascript">
		var swiper = new Swiper('.swiper-container', {
			pagination: {
				el: '.swiper-pagination',
				type: 'bullets',
				clickable: true
			}
		});
	</script>
<?php include('footer.php'); ?>