<!-- Info boxes -->
<div class="row">
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-telephone-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Telefones Utéis</span>
                <span class="info-box-number"><?php echo $dados['telefones']?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-red"><i class="ion ion-ios-email-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Emails</span>
                <span class="info-box-number"><?php echo $dados['emails']?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->

    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>

    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion icon ion-ios-copy-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Dicas</span>
                <span class="info-box-number"><?php echo $dados['dicas']?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Usuários</span>
                <span class="info-box-number"><?php echo $dados['users']?></span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->





<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Visitas nos últimos 30 dias</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div id="embed-api-auth-container"></div>
                        <div id="chart-container"></div>
                        <div id="view-selector-container"></div>
                    </div>

                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>

        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->


    <!--<div class="row">-->
        <!--<div class="col-md-6">-->
            <!--&lt;!&ndash; DIRECT CHAT &ndash;&gt;-->
            <!--<div class="box box-warning direct-chat direct-chat-warning">-->
                <!--<div class="box-header with-border">-->
                    <!--<h3 class="box-title">Paises</h3>-->

                    <!--<div class="box-tools pull-right">-->
                        <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
                        <!--</button>-->
                        <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>-->
                        <!--</button>-->
                    <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
                <!--<div class="box-body">-->
                    <!--&lt;!&ndash; Conversations are loaded here &ndash;&gt;-->
                    <!--<div class="direct-chat-messages">-->
                        <!--&lt;!&ndash; Message. Default to the left &ndash;&gt;-->
                        <!--<div id="chart-1"></div>-->
                        <!--<div id="view-selector"></div>-->

                    <!--</div>-->
                    <!--&lt;!&ndash;/.direct-chat-messages&ndash;&gt;-->

                    <!--&lt;!&ndash; /.direct-chat-pane &ndash;&gt;-->
                <!--</div>-->

            <!--</div>-->
            <!--&lt;!&ndash;/.direct-chat &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /.col &ndash;&gt;-->

        <!--<div class="col-md-6">-->
            <!--&lt;!&ndash; USERS LIST &ndash;&gt;-->
            <!--<div class="box box-danger">-->
                <!--<div class="box-header with-border">-->
                    <!--<h3 class="box-title">Latest Members</h3>-->

                    <!--<div class="box-tools pull-right">-->
                        <!--<span class="label label-danger">8 New Members</span>-->
                        <!--<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>-->
                        <!--</button>-->
                        <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>-->
                        <!--</button>-->
                    <!--</div>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box-header &ndash;&gt;-->
                <!--<div class="box-body no-padding">-->
                    <!--<ul class="users-list clearfix">-->
                        <!--<li>-->
                            <!--<img src="dist/img/user1-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Alexander Pierce</a>-->
                            <!--<span class="users-list-date">Today</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user8-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Norman</a>-->
                            <!--<span class="users-list-date">Yesterday</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user7-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Jane</a>-->
                            <!--<span class="users-list-date">12 Jan</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user6-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">John</a>-->
                            <!--<span class="users-list-date">12 Jan</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user2-160x160.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Alexander</a>-->
                            <!--<span class="users-list-date">13 Jan</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user5-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Sarah</a>-->
                            <!--<span class="users-list-date">14 Jan</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user4-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Nora</a>-->
                            <!--<span class="users-list-date">15 Jan</span>-->
                        <!--</li>-->
                        <!--<li>-->
                            <!--<img src="dist/img/user3-128x128.jpg" alt="User Image">-->
                            <!--<a class="users-list-name" href="#">Nadia</a>-->
                            <!--<span class="users-list-date">15 Jan</span>-->
                        <!--</li>-->
                    <!--</ul>-->
                    <!--&lt;!&ndash; /.users-list &ndash;&gt;-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box-body &ndash;&gt;-->
                <!--<div class="box-footer text-center">-->
                    <!--<a href="javascript:void(0)" class="uppercase">View All Users</a>-->
                <!--</div>-->
                <!--&lt;!&ndash; /.box-footer &ndash;&gt;-->
            <!--</div>-->
            <!--&lt;!&ndash;/.box &ndash;&gt;-->
        <!--</div>-->
        <!--&lt;!&ndash; /.col &ndash;&gt;-->
    <!--</div>-->
    <!--&lt;!&ndash; /.row &ndash;&gt;-->


<!--</div>-->
<!-- /.col -->



<script>

    gapi.analytics.ready(function() {

        function init() {

            gapi.analytics.auth.authorize({
                container: 'embed-api-auth-container',
                clientid: '1093598921959-m0cotdvoldrm0f1hn1m55ir66si7sf7b.apps.googleusercontent.com'
            });

        }
        init();
        /**
         * Create a new ViewSelector instance to be rendered inside of an
         * element with the id "view-selector-container".
         */
        var viewSelector = new gapi.analytics.ViewSelector({
            container: 'view-selector-container'
        });

//        var viewSelector1 = new gapi.analytics.ViewSelector({
//            container: 'view-selector'
//        });

        // Render the view selector to the page.
        viewSelector.execute();
//        viewSelector1.execute();


        /**
         * Create a new DataChart instance with the given query parameters
         * and Google chart options. It will be rendered inside an element
         * with the id "chart-container".
         */
        var dataChart = new gapi.analytics.googleCharts.DataChart({
            query: {
                metrics: 'ga:sessions',
                dimensions: 'ga:date',
                'start-date': '30daysAgo',
                'end-date': 'yesterday'
            },
            chart: {
                container: 'chart-container',
                type: 'LINE',
                options: {
                    width: '100%'
                }
            }
        });

//        var dataChart1 = new gapi.analytics.googleCharts.DataChart({
//            query: {
//                metrics: 'ga:sessions',
//                dimensions: 'ga:country',
//                'start-date': '30daysAgo',
//                'end-date': 'yesterday',
//                'max-results': 6,
//                sort: '-ga:sessions'
//            },
//            chart: {
//                container: 'chart-1',
//                type: 'PIE',
//                options: {
//                    //width: '100%',
//                    top:'-40px',
//                    pieHole: 3/9
//                }
//            }
//        });


        /**
         * Render the dataChart on the page whenever a new view is selected.
         */
        viewSelector.on('change', function(ids) {
            dataChart.set({query: {ids: ids}}).execute();
        });

//        viewSelector1.on('change', function(ids) {
//            dataChart1.set({query: {ids: ids}}).execute();
//        });

    });
</script>




