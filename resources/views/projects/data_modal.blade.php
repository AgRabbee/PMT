{{--{{dd($projectInfo->servers[0]->pivot)}}--}}

<div class="modal-body">
    <div class="row">
        <div class="col-md-3 text-bold">Repository Name</div>
        <div class="col-md-9">: {{ $projectInfo['git_repo_name'] }}</div>
    </div>
    <div class="row">
        <div class="col-md-3 text-bold">Repository URL</div>
        <div class="col-md-9">: <a target="_blank" href="{{$projectInfo['git_repo_url']}}">{{$projectInfo['git_repo_url']}}</a></div>
    </div>
    @if(isset($projectInfo->servers) && !empty($projectInfo->servers))
        @foreach($projectInfo->servers as $key=>$server_info)
            <div class="row">
                <div class="col-md-3 text-bold">Server Name</div>
                <div class="col-md-9">: {{ $server_info->server_name }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">IP</div>
                <div class="col-md-9">: {{ $server_info->pivot->ip }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">Port</div>
                <div class="col-md-9">: {{ $server_info->pivot->port }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">Path</div>
                <div class="col-md-9">: {{ $server_info->pivot->path }}</div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">URL</div>
                <div class="col-md-9">: <a target="_blank" href="{{ $server_info->pivot->url }}">{{ $server_info->pivot->url }}</a></div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">Website Login Credentials</div>
                <div class="col-md-9 d-inline-flex">: &nbsp;
                    <?php
                        $cred = json_decode($server_info->pivot->web_login_cred,true);
                    ?>
                    <table border="1" width="200px" class="mt-2" cellpadding="5">
                        <tr>
                            <td style="width: 50%;">UserName</td>
                            <td>{{ $cred['username'] }}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $cred['password'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">File Access Credentials</div>
                <div class="col-md-9 d-inline-flex">: &nbsp;
                    <?php
                        $cred = json_decode($server_info->pivot->file_access_cred,true);
                    ?>
                    <table border="1" width="200px" class="mt-2" cellpadding="5">
                        <tr>
                            <td style="width: 50%;">UserName</td>
                            <td>{{ $cred['username'] }}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $cred['password'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 text-bold">VPN Credentials</div>
                <div class="col-md-9 d-inline-flex">: &nbsp;
                    <?php
                        $cred = json_decode($server_info->pivot->vpn_cred,true);
                    ?>
                    <table border="1" width="200px" class="mt-2" cellpadding="5">
                        <tr>
                            <td style="width: 50%;">UserName</td>
                            <td>{{ $cred['username'] }}</td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td>{{ $cred['password'] }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        @endforeach
    @endif
</div>
