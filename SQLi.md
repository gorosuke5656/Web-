# SQLインジェクションとはとは？？<br>
 ![Diagram](./images/SQLi-1.jpg)<br>
![Diagram](./images/SQLi-2.jpg)<br>

## 【体験要領】

### サイト構成<br>
以下のようなサイト構成を例として実習します<br>

 ![Diagram](./images/SQLi-3.jpg)<br>

####事前準備
#####　①データベースの作成<br>

PaizaCloud上にあるDBサーバー（MYSQL）にログインし、以下の作業を実施<br>
PaizaCloudのWeb画面に左側にあるコンソールを起動<br>
sudo su でrootになっておく<br>


〇MYSQLにルートでログイン<br>
　　root@gorosuke-genki-inu-1:/home/ubuntu# mysql -u root<br>
　　　　　パスワードはなし（Enterを押す）<br>

〇ユーザを登録（パスワード設定あり）します<br>
　　mysql> CREATE USER gorosuke5656 IDENTIFIED BY '1qaz2wsx3edc$';<br>
　
〇ログアウトして先ほど登録したユーザログインを実施します<br>
　　root@gorosuke-genki-inu-1:/home/ubuntu# mysql -u gorosuke5656 -p<br>
　　Enter password:1qaz2wsx3edc$(表示されない）<br>

  ![Diagram](./images/SQLi-4.jpg)<br>

〇データベースを確認<br>

 ![Diagram](./images/SQLi-5.jpg)<br>

〇ログアウトして、再度rootでログイン後、作成ユーザに権限を持たせる<br>

root@gorosuke-genki-inu-1:/home/ubuntu# mysql -u root -p<br>
Enter password:→　
mysql> GRANT ALL PRIVILEGES ON *.* TO gorosuke5656@localhost IDENTIFIED BY '1qaz2wsx3edc$';<br>

![Diagram](./images/SQLi-6.jpg)<br>


〇再度作成ユーザ(gorosuke5656)でログイン<br>

root@gorosuke-genki-inu-1:/home/ubuntu# mysql -u gorosuke5656 -p<br>

show databases; コマンドによりgorosuke5656 に権限が付与されていることがわかる<br>

![Diagram](./images/SQLi-6(1).jpg)<br>

〇データベース(testuser)を作成<br>
#mysqlにログイン<br>
 $ mysql -u gorosuke5656 -p<br>
#testuserという名前のデータベースを作成<br>
 mysql>CREATE DATABASE testuser;<br>
#データベース”testuser”を指定<br>
 mysql>use testuser;<br>
#usersというテーブルを作成し、カラムを「uid、passwd、mail」として作成
mysql>CREATE TABLE testuser.users (uid varchar(20), passwd varchar(20), mail varchar(20));<br>

![Diagram](./images/SQLi-6.jpg)<br>

〇テーブル(users)にデータを投入<br>
mysql>INSERT INTO testuser.users (uid , passwd , mail) VALUES ('gorosuke5656', 'password', 'gorosuke@gmail.com');<br>
mysql>INSERT INTO testuser.users (uid , passwd , mail) VALUES ('test', 'test', 'test@tttttt.com');<br>
mysql>INSERT INTO testuser.users (uid , passwd , mail) VALUES ('sqliuser', 'sqlipass', 'sqli@sqlidsada.com');<br>


![Diagram](./images/SQLi-8.jpg)<br>


(正常な動作の確認）<br>
〇　脆弱性のあるサイト（login.php)にアクセスし、ユーザ/パスワードを入力します<br>
〇　トップページ（welcome.php）においてログアウトボタンを押します<br>
〇　ログアウト画面（logout.php)が表示され、ログアウトします<br>
 　　   
（異常な動作の確認）<br>
〇　脆弱性のあるサイト（login.php)にアクセスし、ユーザ/パスワードを入力します<br>
 　　![Diagram](./images/CSRF-4.jpg)<br>
〇　トップページ（welcome.php）において罠サイトボタンを押します<br>
 　　![Diagram](./images/CSRF-5.jpg)<br>
〇　罠サイト（trap.php）の強制ログアウトボタンを押します<br>
 　　![Diagram](./images/CSRF-6.jpg)<br>
〇　ログアウト画面（logout.php）が表示され、ログアウトします<br>
 　　　　![Diagram](./images/CSRF-7.jpg)<br>








### パケットとログを確認してみましょう！！<br>
![Diagram](./images/CSRF-8.jpg)<br>
![Diagram](./images/CSRF-9.jpg)<br>
