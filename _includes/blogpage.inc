<!DOCTYPE html>
<html>
<!--head module-->

  <?php include "_includes/head.inc"; ?>

<!--end of head module-->


  <body>
    <div class="wrapper blogwrapper">

  <!--nav module-->

    <?php include "_includes/nav.inc"; ?>

  <!--end of nav module-->

    <a href="postpage.php"><div class="backbutton">Back to posts</div></a>
      <div class="viewport blogviewport">
        <div class="gallery bloggallery">
  <!--start of blog gallery-->

    <?php include "posts/{$blogentry}.inc"; ?>

  <!--end of blog gallery-->
</div>
    </div>
  </div>


  </body>
</html>
