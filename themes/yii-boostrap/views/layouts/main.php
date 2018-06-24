<?php

// setup versions
$bootstrapVersion = "4.1.1";
$fontAwesomeVersion = "3.2.1";
$jqueryVersion = "3.3.1";
$queryUiVersion = "1.10.3";
$popperVersion = "1.14.3";

// setup scriptmap for jquery and jquery-ui cdn
$cs = Yii::app()->clientScript;
$cs->scriptMap["jquery.js"] = "//ajax.googleapis.com/ajax/libs/jquery/$jqueryVersion/jquery.min.js";
$cs->scriptMap["jquery.min.js"] = $cs->scriptMap["jquery.js"];
$cs->scriptMap["jquery-ui.min.js"] = "//ajax.googleapis.com/ajax/libs/jqueryui/$queryUiVersion/jquery-ui.min.js";
$cs->scriptMap["popper.js"] = "//cdnjs.cloudflare.com/ajax/libs/popper.js/$popperVersion/umd/popper.min.js";

// fix jquery.ba-bbq.js for jquery 1.9+ (removed $.browser)
// https://github.com/joshlangner/jquery-bbq/blob/master/jquery.ba-bbq.min.js
$cs->scriptMap["jquery.ba-bbq.js"] = Yii::app()->theme->baseUrl . "/assets/js/jquery.ba-bbq.min.js";

// register js files
$cs->registerCoreScript('jquery');
$cs->registerScriptFile("//netdna.bootstrapcdn.com/bootstrap/$bootstrapVersion/js/bootstrap.min.js", CClientScript::POS_END);
$cs->registerScriptFile(Yii::app()->theme->baseUrl . "/assets/js/main.js", CClientScript::POS_END);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <!-- CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/<?php echo $bootstrapVersion; ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/<?php echo $fontAwesomeVersion; ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo Yii::app()->theme->baseUrl . "/assets/js/html5shiv.js"; ?>"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl . "/assets/js/respond.min.js"; ?>"></script>
    <![endif]-->

    <!-- Javascript -->
    <script>var baseUrl = "<?php echo Yii::app()->baseUrl; ?>";</script>

    <!-- NOTE: Yii uses this title element for its asset manager, so keep it last -->
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body class="bg-light">
    
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
      <a class="navbar-brand mr-auto mr-lg-0" href="#"><a class="navbar-brand" href="<?php echo Yii::app()->baseUrl; ?>"><?php echo Yii::app()->name; ?></a></a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
            <!-- Main nav -->
            <?php $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'navbar-nav mr-auto'),
                'items'=>array(
                    array('itemOptions'=>array('class' => 'nav-item'), 
                        'label'=>'Home', 
                        'url'=>array('/site', 'view'=>'index'), 
                        'linkOptions'=>array('class'=>'nav-link')),
                    array('itemOptions'=>array('class' => 'nav-item'), 
                        'label'=>'Post Thread', 
                        'url'=>array('/posts'), 
                        'linkOptions'=>array('class'=>'nav-link')),
                    array('itemOptions'=>array('class' => 'nav-item'), 
                        'label'=>'Users', 
                        'url'=>array('/users'), 
                        'linkOptions'=>array('class'=>'nav-link'),
                        'visible'=>!Yii::app()->user->isGuest),
                    array('itemOptions'=>array('class' => 'nav-item'), 
                        'label'=>'Users Role', 
                        'url'=>array('/usersRole'), 
                        'linkOptions'=>array('class'=>'nav-link'),
                        'visible'=>!Yii::app()->user->isGuest),
                ),
            )); ?>

            <!-- Right nav -->
            <?php $this->widget('zii.widgets.CMenu',array(
                'htmlOptions'=>array('class'=>'nav navbar-nav pull-left'),
                'items'=>array(
                    array('itemOptions'=>array('class' => 'nav-item'),
                        'label'=>'Login', 
                        'url'=>array('/site/login'),
                        'linkOptions'=>array('class'=>'nav-link'), 
                        'visible'=>Yii::app()->user->isGuest),
                    array('itemOptions'=>array('class' => 'nav-item'),
                        'label'=>'Logout ('.Yii::app()->user->name.')', 
                        'url'=>array('/site/logout'), 
                        'linkOptions'=>array('class'=>'nav-link'),
                        'visible'=>!Yii::app()->user->isGuest),
                    array('itemOptions'=>array('class' => 'nav-item'),
                        'label'=>'Join Forum', 
                        'url'=>array('users/create'), 
                        'linkOptions'=>array('class'=>'nav-link'),
                        'visible'=>Yii::app()->user->isGuest)
                ),
            )); ?>
        </div><!-- /.navbar-collapse -->
    </nav>

    <div class="nav-scroller bg-white box-shadow">
      <nav class="nav nav-underline">
        <a class="nav-link active" href="#">Dashboard</a>
        <a class="nav-link" href="#">
            KFHO
            <span class="badge badge-pill bg-light align-text-bottom">130</span>
        </a>
        <a class="nav-link" href="#">
            KFTD
            <span class="badge badge-pill bg-light align-text-bottom">27</span>
        </a>
        <a class="nav-link" href="#">
            KFD
            <span class="badge badge-pill bg-light align-text-bottom">40</span>
        </a>
        <a class="nav-link" href="#">
            KFA
            <span class="badge badge-pill bg-light align-text-bottom">24</span>
        </a>
        <a class="nav-link" href="#">
            Plant
            <span class="badge badge-pill bg-light align-text-bottom">49</span>
        </a>
      </nav>
    </div>

    <div class="container">

        <?php // NOTE: this does not use bootstrap's breadcrumbs component because CBreadcrumbs doesn't use UL/LI ?>
        <?php // You can implement it yourself or use Chris83's - http://www.yiiframework.com/extension/bootstrap/ ?>
        <?php if(isset($this->breadcrumbs)):?>
            <?php $this->widget('zii.widgets.CBreadcrumbs', array(
                'links'=>$this->breadcrumbs,
                'htmlOptions'=>array('class'=>'my-3 p-3 bg-white rounded box-shadow'),
            )); ?>
        <?php endif?>

        <div id="main-content">

            <?php if (!$this->menu): ?>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-3 bg-white rounded box-shadow">
                            <?php echo $content; ?>
                        </div>
                    </div>
                </div>

            <?php else: ?>

                <div class="row">
                    <div class="col-lg-10">
                        <div class="p-3 bg-white rounded box-shadow">
                            <?php echo $content; ?>
                        </div>
                    </div>

                    <div class="col-lg-2">
                        <div class="p-3 bg-white rounded box-shadow">
                            <div class="panel panel-info">
                                <div class="panel-heading">Operations</div>
                                    <?php
                                    $this->widget('zii.widgets.CMenu', array(
                                        'items'=>$this->menu,
                                        'htmlOptions'=>array('class'=>'nav nav-pills nav-stacked'),
                                    ));
                                    ?>
                            </div>
                        </div>
                    </div>
                </div>

            <?php endif; ?>


        </div> <!-- /#main-content -->

        <hr>

        <footer>
            <p>
                &copy; <?php echo Yii::app()->name; ?>. All Rights Reserved.<br/>
            </p>
        </footer>

    </div> <!-- /.container -->
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/holder.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/examples/offcanvas/offcanvas.js"></script>
</body>
</html>
