<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>NOTONZA</title>
    <meta name="description" content="休日もPC">
    <link rel="stylesheet" href="assets/css/notonza.css" media="all">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/codemura.js"></script>
    <script>

        comma();

        function comma(){

            var num = document.getElementsByClassName('formTable__input').val();
            console.log(num);
        }

    </script>
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
            <h1 class="contents__title">目標金額</h1>
            <div class="formBox">
                <form name="" action="balance" method="post">
                    <p class="formBox__text">目標金額の設定</p>
                    <div class="inputBox">
                        <table class="formTable">
                            <tr>
                                <th class="formTable__title">¥</th>
                                <td>
                                    <input name="target" id="target" class="formTable__input" value="" placeholder="例：300,000">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <p class="formBox__text">目標達成月の設定</p>
                    <div class="inputBox">
                        <select name="year_to">
                            <?= $years ?>
                        </select>
                        年
                        <select name="month_to">
                            <?= $months ?>
                        </select>
                        月
                    </div>
                    <div class="buttonWrapper">
                        <input type="submit" value="君に決めた" id="send" class="formButton">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
</body>
</html>
