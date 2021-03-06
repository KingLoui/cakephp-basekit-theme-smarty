<?php $this->assign('title', __('Profile') . ' ' . __d('CakeDC/Users', '{0} {1}', $user->first_name, $user->last_name)); ?>
<section>
    <div class="container">
        
        <!-- LEFT -->
        <div class="col-lg-3 col-md-3 col-sm-4">
        
            <div class="thumbnail text-center">
                <?= $this->Html->image(empty($user->avatar) ? $avatarPlaceholder : $user->avatar, ['width' => '250', 'height' => '250']); ?>
                <h2 class="size-18 margin-top-10 margin-bottom-0"><?= __d('CakeDC/Users', '{0} {1}', $user->first_name, $user->last_name) ?></h2>
                <h3 class="size-11 margin-top-0 margin-bottom-10 text-muted"><?= $user->role ?></h3>
            </div>

            <!-- completed -->
            <div class="margin-bottom-30">
                <label>88% completed profile</label>
                <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: 88%; min-width: 2em;"></div>
                </div>
            </div>
            <!-- /completed -->

            <!-- SIDE NAV -->
            <ul class="side-nav list-group margin-bottom-60" id="sidebar-nav">
                <li class="list-group-item active"><a href="page-profile.html"><i class="fa fa-eye"></i> PROFILE</a></li>
                <li class="list-group-item list-toggle">   <!-- NOTE: "active" to be open on page load -->                
                    <a data-toggle="collapse" data-parent="#sidebar-nav" href="#collapse-1"><i class="fa fa-gears"></i> SETTINGS</a>
                    <ul id="collapse-1" class="collapse"><!-- NOTE: "collapse in" to be open on page load -->
                        <li>
                        <?= $this->Html->link('<i class="fa fa-angle-right"></i> ' . __d('CakeDC/Users', 'Change Password'), ['plugin' => 'KingLoui/BaseKitUsers', 'controller' => 'Users', 'action' => 'changePassword'], ['escape' => false]); ?>
                        </li>
                        <li class="active"><a href="#"><i class="fa fa-angle-right"></i> SUMBENU 3</a></li>
                    </ul>
                </li>
            </ul>
            <!-- /SIDE NAV -->


            <!-- info -->
            <div class="box-light margin-bottom-30"><!-- .box-light OR .box-light -->
                <div class="row margin-bottom-20">
                    <div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
                        <h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">12</h2>
                        <h3 class="size-11 margin-top-0 margin-bottom-10 text-info">PROJECTS</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
                        <h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">34</h2>
                        <h3 class="size-11 margin-top-0 margin-bottom-10 text-info">TASKS</h3>
                    </div>

                    <div class="col-md-4 col-sm-4 col-xs-4 text-center bold">
                        <h2 class="size-30 margin-top-10 margin-bottom-0 font-raleway">32</h2>
                        <h3 class="size-11 margin-top-0 margin-bottom-10 text-info">UPLOADS</h3>
                    </div>
                </div>
                <!-- /info -->

                <div class="text-muted">
                    <h2 class="size-18 text-muted margin-bottom-6"><b>About</b> Felicia Doe</h2>
                    <p>Lorem ipsum dolor sit amet diam nonummy nibh dolore.</p>
                    
                    <ul class="list-unstyled nomargin">
                        <li class="margin-bottom-10"><i class="fa fa-globe width-20 hidden-xs hidden-sm"></i> <a href="http://www.stepofweb.com">www.stepofweb.com</a></li>
                        <li class="margin-bottom-10"><i class="fa fa-facebook width-20 hidden-xs hidden-sm"></i> <a href="http://www.facebook.com/stepofweb">stepofweb</a></li>
                        <li class="margin-bottom-10"><i class="fa fa-twitter width-20 hidden-xs hidden-sm"></i> <a href="http://www.twitter.com/stepofweb">@stepofweb</a></li>
                    </ul>
                </div>
            
            </div>

        </div>


        <!-- RIGHT -->
        <div class="col-lg-9 col-md-9 col-sm-8">

            <!-- FLIP BOX -->
            <div class="box-icon-center box-icon box-icon-round box-icon-large text-center nomargin front">
                <div class="box1 noradius">
                    <div class="box-icon-title">
                        <i class="fa fa-user"></i>
                        <h2><?= __d('CakeDC/Users', '{0} {1}', $user->first_name, $user->last_name) ?> &ndash; Profile</h2>
                    </div>
                    <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere</p>
                </div>
            </div>

            <div class="box-light"><!-- .box-light OR .box-dark -->

                <div class="row">

                    <!-- POPULAR POSTS -->
                    <div class="col-md-6 col-sm-6">

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                POPULAR POSTS
                            </h3>
                            <div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
                            
                                <div class="clearfix margin-bottom-10"><!-- post item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/b-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div><!-- /post item -->

                                <div class="clearfix margin-bottom-10"><!-- post item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/6-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div><!-- /post item -->

                                <div class="clearfix margin-bottom-10"><!-- post item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/d-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div><!-- /post item -->

                                <div class="clearfix margin-bottom-10"><!-- post item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/a-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div><!-- /post item -->

                                <div class="clearfix margin-bottom-10"><!-- post item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/5-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-13 nomargin noborder nopadding"><a href="blog-single-default.html">Nullam Vitae Nibh Un Odiosters</a></h4>
                                    <span class="size-11 text-muted">June 29, 2015</span>
                                </div><!-- /post item -->

                            </div>
                        </div>

                        <div class="box-footer">
                            <!-- INLINE SEARCH -->
                            <div class="inline-search clearfix">
                                <form action="#" method="get" class="widget_search nomargin">
                                    <input type="search" placeholder="Search Post..." name="s" class="serch-input">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <!-- /INLINE SEARCH -->

                        </div>

                    </div>
                    <!-- /POPULAR POSTS -->

                    <!-- FRIENDS -->
                    <div class="col-md-6 col-sm-6">

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                FRIENDS
                            </h3>
                            <div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">

                                <div class="clearfix margin-bottom-10"><!-- squared item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/1-min.jpg" width="40" height="40" alt="" />
                                    <h4 class="size-14 nomargin noborder nopadding bold"><a href="#">Joana Doe</a></h4>
                                    <span class="size-12 text-muted">Lorem ipsum dolor sit amet.</span>
                                </div><!-- /squared item -->

                                <div class="clearfix margin-bottom-10"><!-- rounded item -->
                                    <img class="thumbnail pull-left rounded" src="assets/images/demo/people/300x300/2-min.jpg" width="40" height="40" alt="" />
                                    <h4 class="size-14 nomargin noborder nopadding bold"><a href="#">Melissa Doe</a></h4>
                                    <span class="size-12 text-muted">Lorem ipsum dolor sit amet.</span>
                                </div><!-- /rounded item -->

                                <div class="clearfix margin-bottom-10"><!-- squared item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/3-min.jpg" width="40" height="40" alt="" />
                                    <h4 class="size-14 nomargin noborder nopadding bold"><a href="#">Felicia Doe</a></h4>
                                    <span class="size-12 text-muted">Lorem ipsum dolor sit amet.</span>
                                </div><!-- /squared item -->

                                <div class="clearfix margin-bottom-10"><!-- rounded item -->
                                    <img class="thumbnail pull-left rounded" src="assets/images/demo/people/300x300/4-min.jpg" width="40" height="40" alt="" />
                                    <h4 class="size-14 nomargin noborder nopadding bold"><a href="#">Suzana Doe</a></h4>
                                    <span class="size-12 text-muted">Lorem ipsum dolor sit amet.</span>
                                </div><!-- /rounded item -->

                                <div class="clearfix margin-bottom-10"><!-- squared item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/5-min.jpg" width="40" height="40" alt="" />
                                    <h4 class="size-14 nomargin noborder nopadding bold"><a href="#">Jolie Doe</a></h4>
                                    <span class="size-12 text-muted">Lorem ipsum dolor sit amet.</span>
                                </div><!-- /squared item -->

                            </div>
                        </div>                                  

                        <div class="box-footer">
                            <!-- INLINE SEARCH -->
                            <div class="inline-search clearfix">
                                <form action="#" method="get" class="widget_search nomargin">
                                    <input type="search" placeholder="Search Friend..." name="s" class="serch-input">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <!-- /INLINE SEARCH -->

                        </div>

                    </div>
                    <!-- /FRIENDS -->

                </div>


                <div class="row margin-top-30">

                    <!-- DISCUSSIONS -->
                    <div class="col-md-6 col-sm-6">

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                DISCUSSIONS
                            </h3>
                            <div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
                            
                                <div class="clearfix margin-bottom-20"><!-- discussion item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/3-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Joana Doe</a></h4>
                                    <span class="size-13 text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        <span class="text-success size-11">12 min. ago</span>
                                    </span>
                                </div><!-- /discussion item -->

                                <div class="clearfix margin-bottom-20"><!-- discussion item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/4-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Melissa Doe</a></h4>
                                    <span class="size-13 text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        <span class="text-success size-11">54 min. ago</span>
                                    </span>
                                </div><!-- /discussion item -->

                                <div class="clearfix margin-bottom-20"><!-- discussion item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/5-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-15 nomargin noborder nopadding bold"><a href="#">juliet Doe</a></h4>
                                    <span class="size-13 text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        <span class="text-success size-11">8 days ago</span>
                                    </span>
                                </div><!-- /discussion item -->

                                <div class="clearfix margin-bottom-20"><!-- discussion item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/6-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Suanna Doe</a></h4>
                                    <span class="size-13 text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        <span class="text-success size-11">12 day ago</span>
                                    </span>
                                </div><!-- /discussion item -->

                                <div class="clearfix margin-bottom-20"><!-- discussion item -->
                                    <img class="thumbnail pull-left" src="assets/images/demo/people/300x300/7-min.jpg" width="60" height="60" alt="" />
                                    <h4 class="size-15 nomargin noborder nopadding bold"><a href="#">Felicia Doe</a></h4>
                                    <span class="size-13 text-muted">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                                        <span class="text-success size-11">1 month ago</span>
                                    </span>
                                </div><!-- /discussion item -->

                            </div>
                        </div>

                        <div class="box-footer">
                            <!-- INLINE SEARCH -->
                            <div class="inline-search clearfix">
                                <form action="#" method="get" class="widget_search nomargin">
                                    <input type="search" placeholder="Search Discussion..." name="s" class="serch-input">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <!-- /INLINE SEARCH -->

                        </div>

                    </div>
                    <!-- /DISCUSSIONS -->

                    <!-- NOTIFICATIONS -->
                    <div class="col-md-6 col-sm-6">

                        <div class="box-inner">
                            <h3>
                                <a class="pull-right size-11 text-warning" href="#">VIEW ALL</a>
                                NOTIFICATIONS
                            </h3>
                            <div class="height-250 slimscroll" data-always-visible="true" data-size="5px" data-position="right" data-opacity="0.4" disable-body-scroll="true">
                            
                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-success label-square pull-left">
                                        <i class="fa fa-comment"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>New Comment</b>: <a href="blog-single-default.html">Lorem ipsum Dolor</a></span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-danger label-square pull-left">
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Rejected</b>: <a href="#">Joana Doe</a> rejected friendship</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-warning label-square pull-left">
                                        <i class="fa fa-warning"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Warning</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-info label-square pull-left">
                                        <i class="fa fa-info-circle"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Info</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-primary label-square pull-left">
                                        <i class="fa fa-check"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Primary</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-default label-square pull-left">
                                        <i class="fa fa-heart-o"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Default</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                                <div class="clearfix margin-bottom-20"><!-- notification item -->
                                    <span class="label label-purple label-square pull-left">
                                        <i class="fa fa-clock-o"></i>
                                    </span>
                                    <span class="size-14 text-muted"><b>Various</b>: Lorem ipsum Dolor</span>
                                </div><!-- /notification item -->

                            </div>
                        </div>

                        <div class="box-footer">
                            <!-- INLINE SEARCH -->
                            <div class="inline-search clearfix">
                                <form action="#" method="get" class="widget_search nomargin">
                                    <input type="search" placeholder="Search notification..." name="s" class="serch-input">
                                    <button type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    <div class="clear"></div>
                                </form>
                            </div>
                            <!-- /INLINE SEARCH -->

                        </div>

                    </div>
                    <!-- /NOTIFICATIONS -->

                </div>


            </div>


            <form method="post" action="#" class="box-light margin-top-20"><!-- .box-light OR .box-dark -->
                <div class="box-inner">
                    <h4 class="uppercase">LEAVE A MESSAGE TO <strong>FELICIA DOE</strong></h4>
                    
                    <textarea required class="form-control word-count" data-maxlength="100" rows="5" placeholder="Type your message here..."></textarea>
                    <div class="text-muted text-right margin-top-3 size-12 margin-bottom-10">
                        <span>0/100</span> Words
                    </div>

                    <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> SEND MESSAGE</button>
                </div>
            </form>

        </div>
        
    </div>
</section>

<?php /* 

<div class="users">
    <?php //@todo add to config ?>
    
    <div class="row">
        <div class="large-6 columns strings">
            <h6 class="subheader"><?= __d('CakeDC/Users', 'Username') ?></h6>
            <p><?= h($user->username) ?></p>
            <h6 class="subheader"><?= __d('CakeDC/Users', 'Email') ?></h6>
            <p><?= h($user->email) ?></p>
            <?php
            if (!empty($user->social_accounts)):
                ?>
                <h6 class="subheader"><?= __d('CakeDC/Users', 'Social Accounts') ?></h6>
                <table cellpadding="0" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= __d('CakeDC/Users', 'Avatar'); ?></th>
                            <th><?= __d('CakeDC/Users', 'Provider'); ?></th>
                            <th><?= __d('CakeDC/Users', 'Link'); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($user->social_accounts as $socialAccount):
                        $escapedUsername = h($socialAccount->username);
                        $linkText = empty($escapedUsername) ? __d('CakeDC/Users', 'Link to {0}', h($socialAccount->provider)) : h($socialAccount->username)
                        ?>
                        <tr>
                            <td><?=
                                $this->Html->image(
                                    $socialAccount->avatar,
                                    ['width' => '90', 'height' => '90']
                                ) ?>
                            </td>
                            <td><?= h($socialAccount->provider) ?></td>
                            <td><?=
                                $this->Html->link(
                                    $linkText,
                                    $socialAccount->link,
                                    ['target' => '_blank']
                                ) ?></td>
                        </tr>
                    <?php
                    endforeach;
                    ?>
                    </tbody>
                </table>
            <?php
            endif;
            ?>
        </div>
    </div>
</div>

*/?>