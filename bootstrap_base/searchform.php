<!--検索結果はsearch.phpに出力される-->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <form method="get" class="form-inline my-2 my-lg-0" action="<?php echo home_url('/'); ?>">
    <input class="form-control mr-sm-2" name="s" type="text" placeholder="記事検索" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</div>