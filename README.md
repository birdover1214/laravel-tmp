# My Learning Post
このアプリは日々の学習時間をiPhoneの時計アプリで計っていた製作者が、時計アプリでは日々の学習時間は確認出来るが毎日の学習内容や学習成果をより実感出来るアプリケーションがあれば便利だと思い、グラフなどを用いてより学習成果の可視化を図りたいと思って作成しました。<br>
私と同様に日々の学習時間や学習内容を記録し、グラフなどで確認出来たらいいなと思っている方もいらっしゃると思います。<br>
<br>
【URL】https://mylearningpost.net/ <br>
<br>
※ゲストログインボタンから簡単に動作確認を行えます。<br>
<br>
![top1](https://user-images.githubusercontent.com/71583677/96410994-c0eede00-1222-11eb-97f8-5a87f5ac0026.png)<br>
![top2](https://user-images.githubusercontent.com/71583677/96411006-c3513800-1222-11eb-9a51-d9f5bda7935d.png)<br>
![top3](https://user-images.githubusercontent.com/71583677/96411012-c51afb80-1222-11eb-81c9-5ee3bc03b61b.png)<br>
<br>
<br>
また、マルチログイン機能を実装しており、管理者としてログインすることで投稿・ユーザー・コメントなどの削除やスキルの新規登録が行えます。<br>
<br>
矢印部分から管理者ログインページへ移動できます。新規登録もしくは下記ログイン情報を入力してログインが可能です。<br>
管理者ログイン用メールアドレス：admin@example.com<br>
管理者ログイン用パスワード：password<br>
![top管理者](https://user-images.githubusercontent.com/71583677/104148732-bf464800-5416-11eb-8106-eb714fd3428a.png)<br>
<br>
以下はログイン後の管理者ページ画像になります。<br>
![ダッシュボード](https://user-images.githubusercontent.com/71583677/104148911-88246680-5417-11eb-8507-077db17ded7f.png)<br>
![ユーザー管理](https://user-images.githubusercontent.com/71583677/104148927-9ecabd80-5417-11eb-8623-cb9af009a852.png)<br>
![スキル管理](https://user-images.githubusercontent.com/71583677/104148952-c02ba980-5417-11eb-83ee-6330a3241054.png)<br>
<br>
<br>
# My Learning Postの特徴
このアプリはユーザー登録時に現在学習している・今後学習する予定であるスキルを選択し、その中から学習したスキルを選択して学習時間・コメントを入力することで投稿が出来ます。<br>
投稿された学習時間を元に、マイページにて日別の学習時間をグラフ出力し日々の学習成果を可視化します。<br>
各スキルの総学習時間が一定時間を超えるとスキルにアイコンが付き、より学習の成果を実感できるようになります。<br>
<br>
<br>
# インフラ構成図
AWSの複数のサービスを利用してデプロイしております。
<br><br>
デプロイの際に使用したAWSサービスは以下画像のようになります。<br><br><br>
![構成図](https://user-images.githubusercontent.com/71583677/96476423-21583c80-1270-11eb-8088-c0eabbb635f2.png)

# 実装済みの機能一覧
<ul>ユーザー
  <li>認証機能</li>
  <li>ゲストログイン機能</li>
  <li>マイページ機能</li>
  <li>プロフィール編集機能</li>
</ul>
<ul>管理者
  <li>認証機能</li>
  <li>管理者情報編集機能</li>
  <li>投稿・コメント・ユーザー・スキル削除機能</li>
  <li>スキル新規登録機能</li>
</ul>
<ul>投稿機能
  <li>投稿一覧</li>
  <li>投稿検索</li>
  <li>投稿編集</li>
  <li>投稿削除</li>
  <li>コメント機能</li>
  <li>いいね機能</li>
  <li>ページネーション</li>
</ul>
<ul>その他機能
  <li>グラフ描画機能</li>
  <li>マルチログイン機能</li>
  <li>Googleアナリティクスによるサイト分析機能</li>
</ul>

いいね機能とグラフ描画機能は非同期通信にて実装しており動的に変化します。<br>
また、全てのフォーム入力はJSとLaravel両方でバリデーションを行っております。<br>

# 使用技術一覧
<ul>
  <li>Sass</li>
  <li>PHP(Laravel)</li>
  <li>Javascript(jQuery)</li>
  <li>HTML/CSS</li>
</ul>
<ul>その他ライブラリ
  <li>Chart.js</li>
</ul>
<ul>開発環境
  <li>Docker</li>
  <li>PHP7.4</li>
  <li>Laravel6.8</li>
  <li>MySQL8.0</li>
</ul>

※Dockerに関して<br>
DockerFileは自分が構築したい環境と似た構成のものを探して、一部書き換えて使用しました。<br>
