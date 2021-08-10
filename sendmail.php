<?php
// json 形式のデータを扱うための定義
header('Content-type: application/json');
// PHP5.1.0以上はタイムゾーンの定義が必須
date_default_timezone_set('Asia/Tokyo');

// --------------------------
// 個別設定項目（３つ）
// --------------------------
// 送信先メールアドレス
$to = 'koudaisports26@gmail.com';
// メールタイトル
$subject = 'お問い合わせフォームより';
// ドメイン（リファラチェックと送信元メールアドレスに利用）
$domain = 'cento.local';

//変数初期化
$errflg =0;    // エラー判定フラグ
$dispmsg ='';  // 画面に出力する内容（エラーメッセージ、サクセスメッセージ）

// 入力項目
$nameval = '';// 名前
$mailval = '';// メールアドレス
$telval = '';//電話番号
$addressval = ''; //住所
$textval = '';// 内容
// $referrer = '';// 遷移元画面 

// 画面からのデータを取得 isset値がセットされているかチェック $_POST[name属性]
if(isset($_POST['nameval'])){ $nameval = $_POST['your-name']; };
if(isset($_POST['mailval'])){ $mailval = $_POST['your-mail']; };
if(isset($_POST['telval'])){ $telval = $_POST['your-tel']; };
if(isset($_POST['addressval'])){$addressval = $_POST['your-address'];};
if(isset($_POST['textval'])){ $textval = $_POST['your-message']; };
// if(isset($_POST['referrer'])){ $referrer = $_POST['referrer']; };


if(strpos($_SERVER['HTTP_REFERER'], $domain) === false){
  //リファラ（referer）はあるページを開いたユーザーが、どのページから流入してきたかを知るための情報
  // 入力画面からの問い合わせではないときエラーにする
  $dispmsg = '<p id="errmsg">【リファラチェックエラー】お問い合わせフォームから入力されなかったため、メール送信できませんでした。</p>';
  $errflg = 1;
}
else if($nameval == '' || $mailval == ''){
  //値の存在チェック
  $dispmsg = '<p id="errmsg">【エラー】名前・メールアドレス・内容は必須項目です。</p>';
  $errflg = 1;
}
else if(!preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-z]+(\.[!#%&\-_0-9a-z]+)+$/", $mailval) || count( explode('@',$mailval) ) !=2){
  //メールアドレスチェック
  $dispmsg .= '<p id="errmsg">【エラー】メールアドレスの形式が正しくありません。</p>';
  $errflg = 1;
} 
else{
  // エラーがないのでメールデータを作成する
  $subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,'JIS','UTF-8'))."?=";
  $message= '名前：'.$nameval."\n";
  $message.='メールアドレス：'.$mailval."\n";
  $message.= 'お電話番号：'.$telval."\n";
  $message .= 'ご住所：' .$addressval. '\n';
  $message.="\n――――――――――――――――――――――――――――――\n\n";
  $message.=$textval; 
  $message.="\n\n――――――――――――――――――――――――――――――\n";
  $message.='送信日時：'.date( "Y/m/d (D) H:i:s", time() )."\n";
  $message.='送信元IPアドレス：'.@$_SERVER["REMOTE_ADDR"]."\n";
  $message.='送信元ホスト名：'.getHostByAddr(getenv('REMOTE_ADDR'))."\n";
  $message.='お問い合わせページ：'.@$_SERVER['HTTP_REFERER']."\n";
  $message= mb_convert_encoding($message,'JIS','UTF-8');
  $fromName = mb_encode_mimeheader(mb_convert_encoding($nameval,'JIS','UTF-8'));
  $header ='From: '.$fromName.'<wordpress@'.$domain.'>'."\n";
  $header.='Reply-To: '.$mailval."\n";
  $header.='Content-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/'.phpversion();
  // メール送信
  $retmail = mail($to,$subject,$message,$header);

  // 送信結果の判定
  if( $retmail ){
    $dispmsg ='<p class="success">メールを送信しました。返信までしばらくお待ちください。</p>';
    $dispmsg.='<blockquote><p>名前： '.hsc_utf8($nameval).'<br />';
    $dispmsg.= 'メールアドレス： '.hsc_utf8($mailval).'<br />';
    $dispmsg.= '電話番号： '.hsc_utf8($telval).'<br />';
    $dispmsg.= 'ご住所：' .hsc_urf8($addressval). '<br />';
    $dispmsg.= '<pre>'.hsc_utf8($textval).'</pre></blockquote>';
    // $dispmsg.= 'ふりがな： '.hsc_utf8($furival).'<br />';
    // $dispmsg.= '〒： '.hsc_utf8($codeval).'<br />';
    // $dispmsg.= '都道府県： '.hsc_utf8($kenval).'<br />';
    // $dispmsg.= '市区町村： '.hsc_utf8($matival).'<br />';
  }else{
    $dispmsg .= '<p id="errmsg">【エラー】メール送信に失敗しました。。</p>';
    $errflg = 1;
  }
}

// 処理結果を画面に戻す
$result = array('errflg'=>$errflg, 'dispmsg'=>$dispmsg);
echo json_encode( $result );

// HTMLエスケープ処理
function hsc_utf8($str) {
  return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
}
?>