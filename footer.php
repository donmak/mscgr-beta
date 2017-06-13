<?php wp_footer(); ?>
<hr />
<div style="margin-left: 50px; margin-right: 50px;">
        <h3 class="text-danger" style="text-align: center;">
        More Categories
        </h3>
<?php
include('includes/categories-inline.php');
?>

</div>    
<hr />
      <footer>
        <h4 class="small" style="text-align: center;">
                &copy; MSCGR <? echo date('Y'); ?>. All Rights Reserved. <br />
                Material on MSCGR is copyrighted. Reproduction without permission is prohibited. <br />
<p class="small"><em>We receive a small kickback from our partners when you click through and purchase the great gear we recommend. <a href="/support/" rel="nofollow">Details</a></em></p>
        <a href="/privacy-policy/" rel="nofollow">Privacy Policy</a>
        </h4>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>

<a href="#" onclick="<?php echo partner_events('*Event Category*','*Event Action*','*Event Label*' );?>">Das Lynx</a>

  </body>
</html>