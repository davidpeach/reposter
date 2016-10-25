<div class="row">
    <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-headphone"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Total Listens</span>
                <span class="info-box-number">{{ $listenCount }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-social-twitter"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Tweets Scheduled</span>
                <span class="info-box-number">{{ $messageCount }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    <!-- fix for small devices only -->
    <div class="clearfix visible-sm-block"></div>
    <div class="col-md-2 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-location"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Checkins</span>
                <span class="info-box-number">{{ $checkinCount }}</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div>
    <!-- /.col -->
    {{-- <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
    </div> --}}
    <!-- /.col -->
</div>
<!-- /.row -->