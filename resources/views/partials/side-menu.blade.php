<nav id="main-nav" role="navigation">
    <!-- Sample menu definition -->
    <ul id="main-menu" class="sm sm-mint justify-content-around">
        <li><a href="{{ url('home') }}">Home</a></li>

        <li><a href="javascript:void(0)">COMPANY</a>
            <ul>
                <li><a href="{{ url('company/branchIndex') }}">Add New Branch</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0)">SECURITY</a>
            <ul>
                <li><a href="{{ url('admin/register') }}">Add New User</a></li>
                <li><a href="{{ url('admin/activeUserIndex') }}">Activate New User</a></li>
                <li><a href="{{ url('admin/changePasswordIndex') }}">Change My Password</a></li>
                <li><a href="{{ url('admin/createRoleIndex') }}">Create New Role</a></li>
                <li><a href="{{ url('admin/manageRolePermissionIndex') }}">Manage Role Permission</a></li>
                <li><a href="{{ url('admin/manageUserPermissionIndex') }}">Manage User Permission</a></li>
            </ul>
        </li>



        <li><a href="javascript:void(0)">CLIENT</a>
            <ul>
                <li><a href="{{ url('profile/approveIndex') }}">Approve New Profile</a></li>
                <li><a href="{{ url('profile/debitAccountApproveIndex') }}">Approve Debit Account</a></li>
                <li><a href="{{ url('profile/resetPINIndex') }}">Reset Security PIN</a></li>
                <li><a href="{{ url('profile/documentIndex') }}">Client Document Upload</a></li>
                <li><a href="{{ url('profile/resetLimitIndex') }}">Reset Daily Limit</a></li>
            </ul>
        </li>

        <li><a href="javascript:void(0)">REPORTS</a>
            <ul>
                <li><a href="{{ url('report/clientListIndex') }}">Client List</a></li>
                <li><a href="{{ url('report/transSummaryIndex') }}">Transaction Summary</a></li>
                <li><a href="{{ url('report/interfaceLogIndex') }}">Interface Log</a></li>
                <li><a href="#"></a></li>
            </ul>
        </li>


    </ul>
    <br/>
</nav>



{{--<nav class="navbar navbar-expand-md navbar-light" style="background-color: rgba(255,251,0,0.35); padding-left: 20px">--}}
{{--    <div class="collapse navbar-collapse justify-content-center" id="navbarCollapse">--}}
{{--        <div class="navbar-nav">--}}
{{--            <a href="{!! route('home') !!}" class="nav-item nav-link active">Home</a>--}}
{{--            --}}{{--                    <a href="#" class="nav-item nav-link">Profile</a>--}}
{{--            <div class="nav-item dropdown">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">SECURITY</a>--}}
{{--                <div class="dropdown-menu">--}}
{{--                    <a href="#" class="dropdown-item">My Profile</a>--}}
{{--                    <a href="#" class="dropdown-item">Change Password</a>--}}
{{--                    <a href="#" class="dropdown-item">Chnage PIN</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="nav-item dropdown">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Account Services</a>--}}
{{--                <div class="dropdown-menu">--}}
{{--                    <a href="{!! url('account/summary') !!}" class="dropdown-item">Account Summary</a>--}}
{{--                    <a href="#" class="dropdown-item">Change Password</a>--}}
{{--                    <a href="#" class="dropdown-item">Chnage PIN</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="nav-item dropdown">--}}
{{--                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Fund Transfer</a>--}}
{{--                <div class="dropdown-menu">--}}
{{--                    <a href="#" class="dropdown-item">My Profile</a>--}}
{{--                    <a href="#" class="dropdown-item">Change Password</a>--}}
{{--                    <a href="#" class="dropdown-item">Chnage PIN</a>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </div>--}}
{{--</nav>--}}
{{--<script>--}}
{{--    jQuery(function($) {--}}
{{--        $('.navbar-light .dropdown').hover(function() {--}}
{{--            $(this).find('.dropdown-menu').first().stop(true, true).delay(250).slideDown();--}}

{{--        }, function() {--}}
{{--            $(this).find('.dropdown-menu').first().stop(true, true).delay(100).slideUp();--}}

{{--        });--}}

{{--        $('.navbar-vertical .dropdown > a').click(function(){--}}
{{--            location.href = this.href;--}}
{{--        });--}}

{{--    });--}}
{{--</script>--}}
