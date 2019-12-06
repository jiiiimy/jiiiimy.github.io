<?php include('header.php'); ?>
	<div class="content-container">
		<div class="common-content-container common-mT60">
			<h2>採用情報</h2>
			<div class="common-mT60">
				<h3>職種一覧</h3>
				<div class="common-link-box">
					<div class="-flex-box">
						<a href="/sound.php">
							<div class="-button">
								<img class="-img-icon" src="/static/img/laptop.svg">
								<p>開発エンジニア</p>
								<img class="-img-direction" src="/static/img/arrow-right.svg">
							</div>
						</a>
						<a href="/contact.php">
							<div class="-button common-mT50">
								<img class="-img-icon" src="/static/img/mail.svg">
								<p>インフラエンジニア</p>
								<img class="-img-direction" src="/static/img/arrow-right.svg">
							</div>
						</a>
					</div>
					<div class="-flex-box pc-mT40">
						<a href="/recruit.php">
							<div class="-button common-mT50">
								<img class="-img-icon" src="/static/img/person.svg">
								<p>デザイナー</p>
								<img class="-img-direction" src="/static/img/arrow-right.svg">
							</div>
						</a>
						<a href="/recruit.php">
							<div class="-button common-mT50">
								<img class="-img-icon" src="/static/img/person.svg">
								<p>プランナー</p>
								<img class="-img-direction" src="/static/img/arrow-right.svg">
							</div>
						</a>
					</div>
				</div>
			</div>
			<div class="common-mT50" id="form">
				<h3 class=" form-sizing-box-wide">応募・問い合わせフォーム</h3>
				<div class="-about-box form-sizing-box-wide common-mT30">
					<p class="-text">採用以外のお問い合わせは<a class="text-navigation" href="/contact.php">コチラ</a>からお願いします。</p>
				</div>
				<div class="form-container">
					<form>
						<label class="-label common-mT15">お名前</label>
						<input class="-input common-mT5" type="text" name="name" required>
						<label class="-label common-mT15">メールアドレス</label>
						<input class="-input common-mT5" type="text" name="mail" required>
						<label class="-label common-mT15">希望職種</label>
						<select>
						</select>
						<label class="-label common-mT15">内容</label>
						<textarea class="-textarea common-mT5" name="content"></textarea>
						<input type="checkbox" name="check" value="checked" required>
						<label>下記のプライバシーポリシーを確認しました。</label>
						<button class="-button" type="submit">この内容で問い合わせる</button>
					</form>
				</div>
			</div>
			<div class="form-check-container common-mT60">
				<h3>個人情報の取り扱い</h3>
				<div class="-text-box common-mT15">
					<p>1.皆さまからお預かりする個人情報およびその他の情報については、お問合せ対応としてのみ利用させていただきます。<br>
						2.皆さまからお預かりする個人情報およびその他の情報については、法令に基づく場合や人の生命、身体又は財産の保護のために必要のある場合等を除き、第三者提供は行いません。<br>
						3.皆さまからお預かりする個人情報およびその他の情報の全部または一部を、外部に委託する場合がございます。<br>
						4.弊社が保有する個人情報およびその他の情報に関する利用目的の通知、開示、訂正等、利用停止等、および第三者提供停止に関するお問合せにつきましては、下記ご相談窓口までご連絡いただくことにより合理的な範囲で速やかに対応します。<br>5.ご入力いただく項目の中で必須項目に漏れがある場合は、弊社の適切なサービスを受けられない場合がございます。<br>
					6.クッキーやウエブビーコン等を用いるなどして、本人が容易に認識できない方法による個人情報の取得は行っていません。</p>
				</div>
			</div>
			<div class="form-check-container common-mT60 common-mB50">
				<h3>採用プライバシーポリシー</h3>
				<div class="-text-box common-mT15">
					<p>このたびお預かりする個人情報は、採用選考及び採用された後の人事管理の資料として利用し、法令に基づく場合及び本人ならびに公衆の生命・健康・財産を脅かす可能性がある場合を除き、ご本人の同意を得ることなく他に利用及び提供することはありません。<br>業務を委託するために個人情報を預託する場合は、弊社の厳正な管理の下で行います。必要な書類をご提出していただかないと適切な採用選考が行えませんので、ご了承ください。<br>
						ご提出頂きました個人情報について、開示・訂正・削除のご希望がございましたら、個人情報のご相談窓口までお問合せください。<br>
					万一不採用の場合、弊社へご提出いただいた書類については、1年以内に責任を持って廃棄し、返却はいたしませんので、予めご了承ください。</p>
				</div>
			</div>
		</div>
		</div>
	</div>
<?php include('footer.php'); ?>