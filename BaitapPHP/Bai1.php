    <!DOCTYPE html>
    <html lang="v1">

    <head>

        <meta charset="utf-8">
        <meta name="author" content="hoangnhatsinh" />
        <link href="/myapp/site.css" rel="stylesheet" />
        <title>Xếp loại Kết quả tuyển sinh</title>

    </head>

    <body>
        <div id="wrapper">
            <h2> xếp loại kết quả tuyển sinh </h2>

            <form action="#" method="post">

                <div class="row">

                    <div class="lbltitle">

                        <Label>điểm môn toán </label>
                    </div>
                    <div class="lblinput">

                        <input type="number " name="Toan" value="<?php echo isset($_POST["Toan"]) ?

                                                                        $_POST["Toan"] : ""; ?>" />
                    </div>
                </div>

                <div class="row">
                    <div class="lbltitle">

                        <Label>điểm môn Lý </label>
                    </div>
                    <div class="lblinput">

                        <input type="number " name="Ly" value="<?php echo isset($_POST["Ly"]) ?

                                                                    $_POST["Ly"] : ""; ?>" />
                    </div>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="lbltitle">

                            <Label>điểm môn Hóa </label>
                        </div>
                        <div class="lblinput">

                            <input type="number " name="Hoa" value="<?php echo isset($_POST["Hoa"]) ?

                                                                        $_POST["Hoa"] : ""; ?>" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="submit">
                            <input type="submit" name=" btnsubmit" value="Xếp loại" />
                        </div>
                    </div>

            </form>
            <div id="result">
                <h2> Kết quả xếp loại</h2>
                <div class="lbltittle">
                    <label>Tổng điểm</label>
                    <?php
                    echo isset($_POST["btnsubmit"]) ? $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"]
                        : "";
                    ?>
                </div>
                <div class="lbloutput">
                    
                </div>
            </div>
            <div id="row">
                    <div class="lbltittle">
                        <label>Xếp loại</label>
                        <?php
                        if (isset($_POST["btnsubmit"])) {
                            $TongDiem = $_POST["Toan"] + $_POST["Ly"] + $_POST["Hoa"];
                            if ($TongDiem >= 24)
                                echo "Giỏi";
                            else if ($TongDiem >= 21)
                                echo "Khá";
                            else if ($TongDiem >= 15)
                                echo "Trung bình";
                            else
                                echo "yếu";
                        }
                        ?>
                    </div>
                    <div class="lbloutput">

                    </div>
            </div>
        </div>
    </body>

    </html>