<?php require_once '../includes.php'; ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Colin O'Dell | Web Developer</title>
    <!-- Meta stuff -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Colin O'Dell is the Lead Web Developer at Unleashed Technologies LLC.">
    <meta name="author" content="Colin O'Dell">
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Styles -->
    <link rel="stylesheet" href="/assets/contrib/font-awesome/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/contrib/bootstrap/dist/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="/assets/compiled/site.css" type="text/css">
    <!-- Analytics -->
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-8142993-1', 'auto');
        ga('send', 'pageview');
    </script>
</head>
<body>
    <header class="header vcard">
        <div class="container">
            <img id="profile-image" class="img-responsive pull-left" src="assets/img/colinodell.jpg" alt="Colin O'Dell">
            <div id="profile-content" class="pull-left">
                <h1 class="fn n name"><span class="given-name">Colin</span> <span class="family-name">O'Dell</span></h1>
                <h2 class="role title desc">Web Developer</h2>
                <ul class="social list-inline">
                    <li><a href="http://twitter.com/colinodell" title="Twitter" rel="me"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://plus.google.com/107895682424085410306/posts" title="Google+" rel="me"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="http://www.linkedin.com/in/colinodell" title="LinkedIn" rel="me"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://github.com/colinodell" title="GitHub" rel="me"><i class="fa fa-github-alt"></i></a></li>
                    <li><a href="https://stackoverflow.com/users/158766/colin-odell" title="StackOverflow" rel="me"><i class="fa fa-stack-overflow"></i></a></li>
                    <li><a href="https://stackexchange.com/users/53116/colin-odell" title="StackExchange" rel="me"><i class="fa fa-stack-exchange"></i></a></li>
					<li><a href="http://www.phpgolf.org/user/colinodell" title="phpGolf" rel="me"><i class="fa fa-flag"></i></a></li>
					<li><a href="https://coderwall.com/colinodell" title="Coder Wall" rel="me"><i class="fa fa-code"></i></a></li>
					<li><a href="https://www.coinbase.com/colinodell" title="coinbase" rel="me"><i class="fa fa-btc"></i></a></li>
					<li class="last-item"><a href="https://keybase.io/colinodell" title="PGP key" rel="me"><i class="fa fa-key"></i></a></li>
                </ul>
            </div>
            <div id="certs" class="pull-right">
				<a href="https://connect.sensiolabs.com/profile/colinodell" target="_blank" style="margin-right: 1em;">
					<img src="assets/img/symfony-cert.png" height="116" alt="SensioLabs Certified Symfony Developer (Expert)" />
				</a>
                <a href="http://www.magentocommerce.com/certification/directory/dev/199859/" target="_blank">
                    <img src="assets/img/mage-cert.png" width="64" height="116" alt="Magento Certified Developer">
                </a>
            </div>
        </div>
    </header>
    <div id="wrapper" class="container sections-wrapper">
        <div class="row">
            <div id="main" class="col-md-8 col-sm-12 col-xs-12">
                <section class="about section">
                    <div class="section-inner">
                        <h2 class="heading">About Me</h2>
                        <div class="content">
                            <p>
                                I create websites, applications and e-commerce solutions at
                                <a href="http://www.unleashed-technologies.com" target="_blank">
                                    Unleashed Technologies
                                </a>.
                                I also like to tinker with Android; I've helped
                                <a href="http://www.androidpolice.com/2010/08/14/exclusive-entourage-releases-kernel-source-for-the-edge-androidpolice-co-release-root-instructions/" target="_blank">
                                    root the enTourage eDGe
                                </a>
                                and have a few
                                <a href="https://play.google.com/store/apps/developer?id=Colin+O'Dell" target="_blank">
                                    sound effect widgets
                                </a>
                                available on Google Play.
                            </p>
                            <p>
                                I'm also a <a href="https://connect.sensiolabs.com/profile/colinodell" target="_blank">Certified Symfony Expert</a> and a <a href="http://www.magentocommerce.com/certification/directory/dev/199859/" target="_blank">Magento Certified Developer</a>.
                            </p>
                        </div>
                    </div>
                </section>
                <aside class="blog section">
                    <div class="section-inner">
                        <h2 class="heading">Recent Blog Posts</h2>
                        <div class="content">
                            <?php foreach ($ut_posts as $up): ?>
                                <div class="item">
                                    <h3 class="title">
                                        <a rel="bookmark" href="<?php echo $up['link']; ?>">
                                            <i class="fa fa-external-link"></i>
                                            <?php echo $up['title']; ?>
                                        </a>
                                    </h3>
                                </div>
                            <?php endforeach; ?>
                            <a class="btn btn-cta-primary view-more" href="http://www.unleashed-technologies.com/blog/author/colin-odell">View older posts</a>
                        </div>
                    </div>
                </aside>
                <section class="latest section">
                    <div class="section-inner">
                        <h2 class="heading">Projects</h2>
                        <div class="content">
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://github.com/colinodell/commonmark-php" target="_blank">
                                    <img class="img-responsive project-image" src="assets/img/projects/markdown.png" alt="commonmark-php">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://commonmark.thephpleague.com/" target="_blank">league/commonmark</a> <span class="label label-theme">php</span></h3>
                                    <p>Open-source PHP Markdown parser compatible with the <a href="http://commonmark.org/" target="_blank">CommonMark</a> spec</p>
                                    <p><a class="more-link" href="https://github.com/colinodell/commonmark-php" target="_blank"><i class="fa fa-external-link"></i> Find out more</a></p>
                                </div>
                            </div>
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="https://play.google.com/store/apps/developer?id=Colin+O'Dell" target="_blank">
                                    <img class="img-responsive project-image" src="assets/img/projects/android-apps.png" alt="Android apps">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="https://play.google.com/store/apps/developer?id=Colin+O'Dell" target="_blank">Android Apps</a> <span class="label label-theme">Android</span></h3>
                                    <p>I have created several Android apps, including popular sound effect widgets:</p>
                                    <ul>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.colinodell.rimshotwidget" target="_blank">Rimshot Widget</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.colinodell.sadtrombonewidget" target="_blank">Sad Trombone Widget</a></li>
                                        <li><a href="https://play.google.com/store/apps/details?id=com.colinodell.cricketswidget" target="_blank">Instant Crickets Widget</a></li>
                                    </ul>
                                    <a class="btn btn-cta-secondary" href="" target="_blank"><i class="fa fa-android"></i> Download for Android</a>
                                </div>
                            </div>
                            <div class="item row">
                                <a class="col-md-4 col-sm-4 col-xs-12" href="http://www.instantdrumroll.com" target="_blank">
                                    <img class="img-responsive project-image" src="assets/img/projects/drumroll.png" alt="Instant Drum Roll">
                                </a>
                                <div class="desc col-md-8 col-sm-8 col-xs-12">
                                    <h3 class="title"><a href="http://www.instantdrumroll.com" target="_blank">InstantDrumRoll.com</a></h3>
                                    <p>Simple website which provides instant access to a drum roll sound effect.</p>
                                    <p><a class="more-link" href="http://www.instantdrumroll.com" target="_blank"><i class="fa fa-external-link"></i> Check it out</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="appearences section">
                    <div class="section-inner">
                        <h2 class="heading">Talks / Screencasts</h2>
                        <div class="content">
                            <div class="item">
                                <div class="header-wrapper">
                                    <div class="pull-right">
                                        <span class="label label-default"><time datetime="2015-03-18">March 18th, 2015</time></span>
                                    </div>
                                </div>
                                <h3 class="title">
                                    <a href="https://www.phproundtable.com/episode/semver-licensing-os-support-expectations-open-source-series-part-2" target="_blank">
                                        PHP Roundtable - Episode 015
                                    </a>
                                    <br>
                                    <small>SemVer, Licensing & OS Support Expectations</small>
                                </h3>
                                <div class="desc">
                                    <p>Discussed open-source topics including project support, implementing and maintaing <abbr title="Semantic Versioning">SemVer</abbr>, and licensing concerns.</p>
                                    <p><a class="more-link" href="https://www.phproundtable.com/episode/semver-licensing-os-support-expectations-open-source-series-part-2" target="_blank"><i class="fa fa-external-link"></i> Watch Episode</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="experience section">
                    <div class="section-inner">
                        <h2 class="heading">Work Experience</h2>
                        <div class="content">
                            <div class="item">
                                <h3 class="title">Lead Web Developer - <span class="place"><a href="http://www.unleashed-technologies.com/" target="_blank">Unleashed Technologies</a></span> <span class="year">(Sept 2008 - Present)</span></h3>
                                <p>Creating innovative web sites, custom applications and e-commerce solutions using open-source technologies such as PHP, Magento, Symfony2, and Drupal. Responsibilities also include database management, domain modeling, debugging, revision control management, and more.</p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="github section"></section>
            </div>
            <div id="sidebar" class="col-md-4 col-sm-12 col-xs-12">
                <aside class="info aside section">
                    <div class="section-inner">
                        <h2 class="heading sr-only">Information</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><i class="fa fa-map-marker"></i><span class="sr-only">Location:</span>Maryland, US</li>
                                <li><i class="fa fa-envelope-o"></i><span class="sr-only">Email:</span>colinodell<i class="fa fa-at"></i>gmail[dot]com</li>
                                <li><i class="fa fa-link"></i><span class="sr-only">Website:</span><a href="http://www.colinodell.com" rel="me">http://www.colinodell.com</a></li>
                                <li><i class="fa fa-briefcase"></i><span class="sr-only">Work:</span><a href="https://www.unleashed-technologies.com/people/colin-odell">Unleashed Technologies</a></li>
                            </ul>
                        </div>
                    </div>
                </aside>
                <aside class="skills aside section">
                    <div class="section-inner">
                        <h2 class="heading">Skills</h2>
                        <div class="content">
                            <div class="skillset">
                                <div class="item">
                                    <h3 class="level-title">PHP &amp; MySQL<span class="level-label" data-original-title="" title="">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="99%" style="width: 99%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">Magento &amp; Symfony2<span class="level-label" data-original-title="" title="">Expert</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="98%" style="width: 98%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">Drupal<span class="level-label" data-original-title="" title="">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="75%" style="width: 75%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">HTML5, CSS3 &amp; LESS<span class="level-label" data-original-title="" title="">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="85%" style="width: 85%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">JavaScript<span class="level-label" data-original-title="" title="">Pro</span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="80%" style="width: 80%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">C# &amp; Java<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="I used to work in these languages frequently, but it's been a while."><i class="fa fa-info-circle"></i></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="50%" style="width: 50%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">Linux<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="I can perform most intermediate administrative tasks, but don't ask me to compile kernel modules or anything crazy."><i class="fa fa-info-circle"></i></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="45%" style="width: 45%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <h3 class="level-title">Python<span class="level-label" data-toggle="tooltip" data-placement="left" data-animation="true" title="Actively learning."><i class="fa fa-info-circle"></i></span></h3>
                                    <div class="level-bar">
                                        <div class="level-bar-inner" data-level="25%" style="width: 25%;">
                                        </div>
                                    </div>
                                </div>

                                <p><a class="more-link" href="http://www.linkedin.com/in/colinodell" target="_blank"><i class="fa fa-external-link"></i> See LinkedIn endorsements</a></p>
                                <p><a class="more-link" href="https://coderwall.com/colinodell" target="_blank"><i class="fa fa-external-link"></i> More on Coderwall</a></p>
                            </div>
                        </div>
                    </div>
                </aside>
                <aside class="credits aside section">
                    <div class="section-inner">
                        <h2 class="heading">Credits</h2>
                        <div class="content">
                            <ul class="list-unstyled">
                                <li><a href="http://getbootstrap.com/" target="_blank"><i class="fa fa-external-link"></i> Bootstrap 3.2</a></li>
                                <li><a href="http://fortawesome.github.io/Font-Awesome/" target="_blank"><i class="fa fa-external-link"></i> FontAwesome 4.2</a></li>
                                <li><a href="http://jquery.com/" target="_blank"><i class="fa fa-external-link"></i> jQuery 1.11.1</a></li>
                            </ul>

                            <hr>

                            <p>Original template by Xiaoying Riley at <a href="http://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a>; used under the <a class="dotted-link" href="http://creativecommons.org/licenses/by/3.0/" target="_blank">Creative Commons Attribution 3.0 License</a></p>

                            <hr>

                            <p>Source code: <a href="https://github.com/colinodell/dotcom">github.com/colinodell/dotcom</a></p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div class="container text-center">
            <small class="copyright">&copy; <?php echo date('Y') ?> Colin O'Dell.  All rights reserved, unless otherwise noted. <i class="fa fa-code"></i> </small>
        </div>
    </footer>
    <script type="application/javascript" src="/assets/contrib/jquery/dist/jquery.min.js"></script>
    <script type="application/javascript" src="/assets/contrib/bootstrap/dist/js/bootstrap.min.js"></script>
    <script type="application/javascript">
        (function($){
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            })
        })(jQuery);
    </script>
</body>
</html>
