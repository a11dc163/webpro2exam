<!DOCTYPE html>
<html>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>商品一覧</title>
    　　　<h1>商品一覧</h1>
       <p>購入したい商品を選択してください。</p>
    <body>
      <ul>
    <?php foreach ($product as $products) {?> 
    <li><?php  ($products['name']); ?> 
       </li>
        <?php } ?>
    </ul>
        
        
    </body>
    <p><a href ="sales.php">売り上げ一覧へ</a></p>
</html>
