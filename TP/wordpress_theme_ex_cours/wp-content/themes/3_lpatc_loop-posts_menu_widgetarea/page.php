        

        <?php get_header() ?>

        <div class="container">

            <div class="left-main">

            	<h3>Page Index.php</h3>

            	<p>Ici mon bloc central ...</p>

            </div>


            <div class="right-sidebar">

                <h3>Right Sidebar</h3>

                <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("right-sidebar") ): ?>
                <?php endif;?>

            </div>

        </div>


        <?php get_footer() ?>