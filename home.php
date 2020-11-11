<?php
    $my_file = $_COOKIE['userID'];
    if($_SERVER["REQUEST_METHOD"] != 'POST')
    {
        if(!(array_key_exists('userID',$_COOKIE))){
            header('location:index.php');
        }
    }
    else{

        $newwork = $_POST['new_work'];

        if(file_exists("$my_file.json")){
            require "data.php";
            $works = get_works($my_file);

            $works[] = $newwork;

            $updatedworks = json_encode($works, JSON_PRETTY_PRINT);
            file_put_contents("$my_file.json",$updatedworks);

        }
        else{
            $works[] = $newwork;

            $updatedworks = json_encode($works, JSON_PRETTY_PRINT);
            file_put_contents("$my_file.json",$updatedworks);
        }
        header('location:home.php');
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            Home Page
        </title>
        <link href="home.css" type="text/css" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
        <script src="home.js"></script>
    </head>
    <body>
        <header>
            <h1>TO DO LIST</h1>
        </header>
        <main>
            <div id = 'date'>
                <div>
                    <?php
                    $time = getdate();
                    echo $time["mday"];
                    ?>
                </div>
                <div>
                    <?php
                    echo $time["month"];
                    ?>
                </div>
                <div>
                    <?php
                    echo $time["weekday"]; ?>
                </div>
            </div>
            <section>
                <h2>Your work list</h2>
                <form action="home.php" method="POST" id = "work">
                    <textarea name="new_work" id = "new_work" placeholder="Enter Single work you want to do?"></textarea>
                    <div>
                        <p><input name="summit" type="submit" id = "summit" value="Summit" onclick="return newsummit()"></p>
                        <p><input name = "reset" type="reset" id = "reset" value="Reset"></p>
                    </div>
                </form>
                <?php
                    if(file_exists("$my_file.json")) {
                        require "data.php";
                        $works = get_works($my_file);
                        foreach ($works as $htmlwork) { ?>
                            <div id="wdiv">
                                <?php echo $htmlwork ?>
                            </div>
                        <?php
                    }
                }
                ?>
                <button type="button" id = "add" onclick="add()">ADD NEW</button>
            </section>
        </main>
    </body>
</html>
