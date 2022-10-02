<?php include "connect.php" ?>
<html>
<head><<meta charset = "utf-8"></head>
<body>
    <?php 
        $stmt = $pdo->prepare("SELECT *FROM member");
        $stmt->execute();
    ?>
    <?php while ($row = $stmt->fetch()) : ?>
        <a href="detail.php?username=<?=$row["username"]?>">
            <img src = 'member_photo/<?=$row["num"]?>.jpg' width ='100'><br>
        </a><br>
        ชื่อสมาชิก: <?=$row["name"] ?><br>
        ที่อยู่: <?=$row["address"] ?><br>
        อีเมล์: <?=$row["email"] ?><br>
    <?php endwhile; ?>
</body>
</html>