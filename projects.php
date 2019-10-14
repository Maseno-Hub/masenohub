<?php 
  include 'header.php';

  class Project
  {
    var $name;
    var $link;
    var $lang;
  }
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
  curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/orgs/masenohub/repos');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
  
  $response = curl_exec($ch);
  curl_close($ch);
  $data = json_decode($response, true);

  $projects = array();
  $languages = array();
  foreach ($data as $i => $value) {
    $project = new Project();
    $project->name = $value["name"];
    $project->link = $value["html_url"];
    $lang = $value["language"];
    $project->lang = $lang;
    array_push($projects, $project);

    if (!in_array($lang, $languages) && $lang != "")
    {
      array_push($languages, $lang);
    }
  }
?>
  <!-- OUR LATEST WORK -->
  <section class="protfolio section-padding" id="product">
    <div class="container">
      <div class="row">
        <div class="wow zoomIn col-xs-12 text-center p-padding animated" style="visibility: visible; animation-name: zoomIn;">
          <h1 class="section-title">our latest work</h1>
          <p>
            At Maseno ICT, we are always on the move, always on the code. We strive to build better applications each time we meet and brainstorm. Here are some of the projects
            that have been completed by various ICT teams over the years.
          </p>
        </div>
      </div><!-- row -->
    </div><!-- container -->
    <div class="portfolio-menu">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <ul class="wow zoomIn animated" id="filter" style="visibility: visible; animation-name: zoomIn;">
              <li><a data-group="all" href="#" class="active">all</a></li>
              <?php foreach ($languages as $language): ?>
              <li><a data-group="<?= $language; ?>" href="#"><?= $language; ?></a></li>
              <?php endforeach; ?>
            </ul><!-- /#filter -->
          </div><!-- /.col-xs-12 -->
        </div>
      </div>
    </div>

    <div class="row">
      <div id="grid" class="shuffle" style="position: relative; height: 600px;">
        <!-- portfolio-item -->
        <?php foreach ($projects as $i => $p): ?>
        <div data-groups='["all", "<?= $p->lang; ?>"]' class=" portfolio-item col-xs-12 col-sm-6 col-md-3 shuffle-item filtered animated" style="margin:0; padding:0;">
          <div class="portfolio">
            <figure class="effect-julia">
              <img alt="img21" src="https://picsum.photos/id/100<?= $i; ?>/350/300">
              <figcaption>
                <div class="socia ls">
                  <a href="<?= $p->link; ?>" target="_blank"><i class="fa fa-expand"></i></a>
                  <a href=""><i class="fa fa-share animated"></i></a>
                </div>
                <div class="scoial-heading">
                  <p><?= $p->name; ?></p>
                  <strong><?= $p->lang; ?></strong>
                </div>
              </figcaption>
            </figure>
          </div><!-- /.portfolio -->
        </div><!-- /.portfolio-item -->
        <?php endforeach; ?>

      </div> <!-- /grid -->
    </div><!-- /row -->
  </section><!-- /our latest works -->
  <?php include 'footer.php'; ?>