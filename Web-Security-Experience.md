# Webアプリケーション脆弱性体験

## (1) XSS<br>


### XSSとは？？<br>
 ![Diagram](./images/xss-1.jpg)<br>

XSSの種類<br>
 【反射型XSS】
　ユーザが送信するHTTPリクエストパラメータをＨＴＴＰレスポンスとしてHTMLに表示してしまうもの<br>
　
【格納型XSS】
　Webサイトにある掲示板やコメントの機能等を利用して悪意あるスクリプトを実行できるようにするもの<br>
　（反射型のようなパラメータでなく、そのページを閲覧しただけで、任意のスクリプトが実行。。）<br>

 反射型XSSのイメージ<br>
 ![Diagram](./images/xss-3.jpg)<br>

### XSSの体験<br>
以下のような画面遷移で動作するWebアプリケーションを例とします<br>

 ![Diagram](./images/xss-4.jpg)<br>


#### 【体験要領】

##### 事前準備<br>
模擬悪性サイトをPythonを使用して起動しておきます<br>

![Diagram](./images/xss-5.jpg)<br>
![Diagram](./images/xss-6.jpg)<br>
![Diagram](./images/xss-6.jpg)<br>

##### サイトの動作確認<br>
【通常の動作を確認します】<br>
![Diagram](./images/xss-8.jpg)<br>
![Diagram](./images/xss-9.jpg)<br>
![Diagram](./images/xss-10.jpg)<br>



【異常な動作を確認します】（その１）<br>
　自身のcookie情報を表示するスクリプトを入力し、実行します




【異常な動作を確認します】(その２）<br>
　　”模擬悪性サイトにCookie情報を転送するスクリプト”を入力し、実行します。



【パケットとログを確認しましょう！】<br>








## (2) CSRF<br>

### CSRFとは？？<br>






### (3) SQLインジェクション<br>
#### SQLインジェクションとは？？<br>







## (4) OSコマンドインジェクション
### QSコマンドインジェクションとは？？<br>



## 参考資料
  [安全なWebサイトの作り方(IPA）](https://www.ipa.go.jp/security/vuln/websecurity/about.html)<br>
 
   



  
