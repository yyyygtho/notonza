<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOTONZA</title>
    <meta name="description" content="休日もPC">
    <link rel="stylesheet" href="assets/css/notonza.css" media="all">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/codemura.js"></script>
</head>
<body>
<div class="header">
    <header class="globalHeader">
        <div class="globalHeader__wrapper">
            <div class="globalHeader__logo">NOTONZA</div>
        </div>
    </header>
</div>
<div class="wrapper">
    <section id="form" class="contents">
        <div class="contents__inner">
            <h1 class="contents__title">目標金額表示</h1>
            <div class="textBox">
                <p class="textBox__text">差額<?= $diff_to_target ?></p>
                <p class="textBox__text">残月<?= $months_to_deadline ?></p>
                <p class="textBox__text">月平均必要貯金額<?= $average_to_save ?></p>
            </div>
        </div>
    </section>
</div>
</body>
</html>
