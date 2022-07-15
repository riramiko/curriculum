<?php
// 作成したgetData.phpを読み込む
require_once('getData.php');


$getData = new getData();
$userData = $getData->getUserData();
$postData = $getData->getPostData();

?>
<!Doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>PHP 3章 チェックテスト</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <img src="logo.png" alt="logo">
            </div>
            <div class="inner">
                <div class="user">
                    <p>ようこそ <?php echo ($userData["first_name"] . $userData["last_name"]); ?> さん</p>
                </div>
                <div class="login">
                    <p>最終ログイン日： <?php echo ($userData["last_login"]); ?></p>
                </div>
            </div>
        </div><!-- END header -->

        <div class="posts">
            <table>
                <tr>
                    <th>記事ID</th>
                    <th>タイトル</th>
                    <th>カテゴリ</th>
                    <th>本文</th>
                    <th>投稿日</th>
                </tr>

                <?php
                foreach ($postData as $post) { ?>
                    <tr>
                        <td><?php echo $post['id']; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php if ($post['category_no'] == 1) {
                            echo "食事"; 
                        } elseif ($post['category_no'] == 2) {
                            echo "旅行";
                        } else {
                            echo "その他";
                        } ?>
                        </td>
                        <td><?php echo $post['comment']; ?></td>
                        <td><?php echo $post['created']; ?></td>
                    </tr>
                <?php } ?>
                </tr>
            </table>
        </div><!-- END posts -->

        <div class="footer">
            <p>Y&I group.inc</p>
        </div><!-- END footer -->
    </div><!-- END wrap -->
</body>

</html>