# CSRFとは？？<br>
 ![Diagram](./images/CSRF/CSRF-1.jpg)<br>

【安全なウェブサイトの作り方 - 1.5 クロスサイト・リクエストフォージェリ】<br>
https://www.ipa.go.jp/security/vuln/websecurity/csrf.html

## 【体験要領】

### サイト構成<br>
以下のようなサイト構成を例として実習します<br>

#### 正常な動作<br>
 ![Diagram](./images/CSRF/CSRF-2.jpg)<br>

#### 異常な動作<br>
 ![Diagram](./images/CSRF/CSRF-3.jpg)<br>


#### 正常な動作の確認<br>
〇　脆弱性のあるサイト（login.php)にアクセスし、ユーザ/パスワードを入力します<br>
〇　トップページ（welcome.php）においてログアウトボタンを押します<br>
〇　ログアウト画面（logout.php)が表示され、ログアウトします<br>
 　　   
#### 異常な動作の確認<br>
〇　脆弱性のあるサイト（login.php)にアクセスし、ユーザ/パスワードを入力します<br>
 　　![Diagram](./images/CSRF/CSRF-4.jpg)<br>
〇　トップページ（welcome.php）において罠サイトボタンを押します<br>
 　　![Diagram](./images/CSRF/CSRF-5.jpg)<br>
〇　罠サイト（trap.php）の強制ログアウトボタンを押します<br>
 　　![Diagram](./images/CSRF/CSRF-6.jpg)<br>
〇　ログアウト画面（logout.php）が表示され、ログアウトします<br>
 　　![Diagram](./images/CSRF/CSRF-7.jpg)<br>


### パケットとログを確認してみましょう！！<br>
〇　Webサーバのアクセスログからrefererに注目します！<br>
![Diagram](./images/CSRF/CSRF-8.jpg)<br>
　　refererを確認することにより正常なアクセスかそうでない（異常）なアクセスかを確認できます<br>
  　【おさらい】refererとは？？
![Diagram](./images/CSRF/CSRF-9.jpg)<br>

[目次に戻る](./README.md) <br>
