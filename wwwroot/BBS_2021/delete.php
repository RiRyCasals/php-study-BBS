<?php

require_once( __DIR__ . '/init.php' );

try {
    // データを取得
    $bbs_id = strval($_POST['bbs_id'] ?? '');
    $del_code = strval($_POST['del_code'] ?? '');
    
    // validate
    if ( ($bbs_id === '')||($del_code === '') ) {
        throw new \Exception('validate');
    }

    // CSRFチェック
    if (Csrf::check() === false) {
        throw new \Exception('csrf');
    }
    
    // bbs_idでレコードを取得
    $sql = 'SELECT * FROM bbses WHERE bbs_id = :bbs_id;';
    $pre = $dbh->prepare($sql);

    $pre->bindValue(":bbs_id", $bbs_id);
    $r = $pre->execute();

    if ($r === false) {
        throw new \Exception('DB error');
    }
    // データを読み込み
    $bbs = $pre->fetch(\PDO::FETCH_ASSOC);
    if ($bbs === false) {
        throw new \Exception('empty');
    }

    // del_codeが一致していること
    if ($bbs['del_code'] !== $del_code) {
        throw new \Exception('del_code');
    }

    // トランザクション
    $dbh->beginTransaction();

    // 対象のレコードを削除
    $sql = 'DELETE FROM comments WHERE bbs_id = :bbs_id;';
    $pre = $dbh->prepare($sql);
    $pre->bindValue(":bbs_id", $bbs_id);
    $r = $pre->execute();

    if ($r === false) {
        throw new \Exception('DB error(delete comments)');
    }

    $sql = 'DELETE FROM bbses WHERE bbs_id = :bbs_id;';
    $pre = $dbh->prepare($sql);
    $pre->bindValue(":bbs_id", $bbs_id);
    $r = $pre->execute();

    if ($r === false) {
        throw new \Exception('DB error(delete bbses)');
    }
    
    // トランザクション終了
    $dbh->commit();
    // 削除OKのメッセージ
    $_SESSION['flash']['delete'] = true;
} catch(\Throwable $e) {
    // トランザクション内なら、rollback
    if ($dbh->inTransaction() === true) {
        $dbh->rollback();
    }
    
    // XXX 特になにもしない
    echo $e->getMessage();
}

header('Location: ./index.php');
