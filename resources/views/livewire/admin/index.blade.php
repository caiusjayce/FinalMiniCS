<div>
    <h1 class="mt-2 text-white">Dashboard</h1>
    <div class="content">
            <div class="row mt-4 text-center">
                <div class="col mb-4">
                    <div class="card bg-transparent">
                        <a href="/recent-post" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-history text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Recent Post:</span>
                                        <span class="text-white" id="text2">{{ $allPosts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card bg-transparent">
                        <a href="/shoe" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-reorder text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Total Posts:</span><br>
                                        <span class="text-white" id="text2">{{ $shoes }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card bg-transparent">
                        <a href="/log" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-address-book text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Total Logs</span><br>
                                        <span class="text-white" id="text2">{{ $logs }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card bg-transparent">
                        <a href="/my-post" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-user-circle text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Your Posts</span><br>
                                        <span class="text-white" id="text2">{{ $posts }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col mb-2">
                    <div class="card bg-transparent">
                        <a href="/admin/users" id="dash-link">
                            <div class="card-body rounded">
                                <div class="row">
                                    <div class="col-3">
                                        <i class="fa fa-users text-white mt-3" id="dash-icon"></i>
                                    </div>
                                    <div class="col mt-4">
                                        <span class="text-white float-right" id="text">Total Users</span><br>
                                        <span class="text-white" id="text2">{{ $users }}</span>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

</div>


<style>
    .card {
        width: 200px;
    }
    .card:hover {
        transform: scale(1.02);
        transition: transform 0.1s ease;
    }
    .card-body {
        background-color: #011c1c;
        height: 100px;
    }
    .card-body:hover {
        background-color: #046866;
    }
    #dash-icon {
        font-size: 40px;
        opacity: 0.9;
    }
    #dash-link {
        text-decoration: none;
    }
    #text {
        font-size: 15px;
    }
    #text2 {
        opacity: 0.5;
        font-style: bold;
    }
</style>