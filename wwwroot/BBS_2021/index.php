<?php
// https://dev2.m-fr.net/RiRy/BBS_2021/

require_once( __DIR__ . '/init.php' );
require_once( __DIR__ . '/../vendor/autoload.php');

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$twig = new Environment(new FilesystemLoader(__DIR__ . '/../templates'));

// 1ページあたりの表示数
$limit_num = 10;
// ページ数の取得(1 start)
$p = intval($_GET['p'] ?? 1);
if ($p < 1) {
    $p = 1;
}

// プリペアドステートメントを作成
$sql = 'SELECT * FROM bbses ORDER BY created_at DESC LIMIT :limit_num OFFSET :offset_num ;';
$pre = $dbh->prepare($sql);

// 値をバインド
$pre->bindValue(':limit_num', $limit_num + 1); // 「次があるか」を把握したいので +1
$pre->bindValue(':offset_num', $limit_num * ($p - 1));

// SQLを実行
$r = $pre->execute();

// データを読み込み
$list = $pre->fetchAll(\PDO::FETCH_ASSOC);

// 前後のページ数の把握
if ($limit_num + 1 === count($list)) {
    //echo "次のページ、あるよ<br>\n";
    $next_flg = true;
    // 末尾のデータを１つ除去
    array_pop($list);
} else {
    //echo "次のページないよ\n";
    $next_flg = false;
}

// プリペアドステートメントは使いまわす
$sql = 'SELECT * FROM comments WHERE bbs_id = :bbs_id ORDER BY created_at DESC;';
$pre = $dbh->prepare($sql);

foreach($list as $k => $v) {
    // コメントを取得
    $pre->bindValue(':bbs_id', $v['bbs_id']);
    $r = $pre->execute();
    $list[$k]['comment'] = $pre->fetchAll(\PDO::FETCH_ASSOC);
}

$flash_session = $_SESSION['flash'] ?? [];
unset($_SESSION['flash']);

// CSRFトークンの取得
$csrf_token = Csrf::set();

$context = [
    'flash' => $flash_session,
    'list' => $list,
    'page_num' => $p,
    'before_page_num' => $p - 1,
    'next_page_num' => $p + 1,
    'next_flg' => $next_flg,
    'csrf_token' => $csrf_token,
];

echo $twig->render('index.twig', $context);
