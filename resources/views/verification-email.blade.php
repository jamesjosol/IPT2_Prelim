<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<body>
<table class="body-wrap" style="box-sizing: border-box; font-size: 14px; width: 100%; background-color: #f6f6f6; margin: 0;" bgcolor="#f6f6f6">
    <tbody>
        <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
            <td style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
            <td class="container" width="600" style="box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;"
                valign="top">
                <div class="content" style="box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;">
                    <table class="main" width="100%" cellpadding="0" cellspacing="0" style="box-sizing: border-box; font-size: 14px; border-radius: 3px; background-color: #fff; margin: 0; border: 1px solid #e9e9e9;"
                        bgcolor="#fff">
                        <tbody>
                            <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="" style="box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background-color: #38414a; margin: 0; padding: 20px;"
                                    align="center" bgcolor="#71b6f9" valign="top">
                                    <span style="font-size:32px;color:#fff;"> IPT Email Systems </span> <br>
                                </td>
                            </tr>
                            <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                <td class="content-wrap" style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;" valign="top">
                                    <table width="100%" cellpadding="0" cellspacing="0" style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                        <tbody>
                                            <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                                <td class="content-block" style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                <h2> Welcome {{ $user->name }}!</h2>
                                                </td>
                                            </tr>
                                            <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                            <td class="content-block" style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                You've receive this email as result of registration to our website.
                                                Please click the button below to verify your account.
                                            </td>
                                        </tr>
                                            <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                            <td class="content-block" style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                <a href="{{ url('/verification/' . $user->id . "/" . $user->remember_token) }}" class="btn-primary" style="box-sizing: border-box; font-size: 14px; color: #FFF; text-decoration: none; line-height: 2em; font-weight: bold; text-align: center; cursor: pointer; display: inline-block; border-radius: 5px; text-transform: capitalize; background-color: #f1556c; margin: 0; border-color: #f1556c; border-style: solid; border-width: 8px 16px;">
                                                    Verify my account
                                                </a>
                                            </td>
                                        </tr>
                                        <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                            <td class="content-block" style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;" valign="top">
                                                Thanks for your patronage.
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="footer" style="box-sizing: border-box; font-size: 14px; width: 100%; clear: both; color: #999; margin: 0; padding: 20px;">
                        <table width="100%" style="box-sizing: border-box; font-size: 14px; margin: 0;">
                            <tbody>
                                <tr style="box-sizing: border-box; font-size: 14px; margin: 0;">
                                    <td class="aligncenter content-block" style="box-sizing: border-box; font-size: 12px; vertical-align: top; color: #999; text-align: center; margin: 0; padding: 0 0 20px;" align="center" valign="top">
                                    <hr>
                                    <div style="color: #999; font-style: italic; font-size: 0.95em;" class="text-center">
                                        This email is sent through our web application
                                    </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </td>
            <td style="box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;" valign="top"></td>
        </tr>
    </tbody>
</table>

<style type="text/css">
    body{margin-top:20px;}
</style>

<script type="text/javascript">

</script>
</body>