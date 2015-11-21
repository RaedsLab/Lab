<?php
require './src/Entry.php';

$entries = portfolio\Entry::getAllEntries();
if ($entries == NULL) {
    header("Location: 503.html");
}
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
        <!-- For Foundation Icons, put this in your head -->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">


    </head>
    <body>
        <div class="off-canvas-wrapper">
            <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
                <div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
                    <div class="row column">
                        <br>
                        <img class="thumbnail" src="http://placehold.it/550x350">
                        <h5>Mike Mikerson</h5>
                        <p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo.</p>
                    </div>
                </div>
                <div class="off-canvas-content" data-off-canvas-content>
                    <div class="title-bar hide-for-large">
                        <div class="title-bar-left">
                            <button class="menu-icon" type="button" data-open="my-info"></button>
                            <span class="title-bar-title">Mike Mikerson</span>
                        </div>
                    </div>
                    <div class="callout primary">
                        <div class="row column">
                            <h1>Hello! This is the portfolio of a very witty person.</h1>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>
                        </div>
                    </div>
                    <div class="row small-up-2 medium-up-3 large-up-4">
                        <?php
                        foreach ($entries as $entry) {
                            ?>
                            <div class="column entry-box">
                                <img class="thumb" src="<?php echo $entry->image_main ?>">
                                <h5><?php echo $entry->title ?></h5>
                                <p class="short-desc"><?php echo $entry->description_short ?></p>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                    <hr>
                    <?php include './footer.php'; ?>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
        <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
        <script>
            $(document).foundation();
        </script>
    </body>
</html>
