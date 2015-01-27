<!DOCTYPE html>    
<html>
  <head> 
      <title>Maps</title>
    <link rel="icon" type="image/png" href="https://saddahaq.blob.core.windows.net/multimedia/favicon.ico">
    <link rel="stylesheet" href="/public/css/index.css" />
    <link rel="stylesheet" href="/public/global/saddahaq/css/saddahaq-ie7.css" />
        <link rel="stylesheet" href="/public/global/saddahaq/css/saddahaq.css" />
    <link rel="stylesheet" href="/public/global/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/public/global/bootstrap/css/bootstrap-responsive.min.css" />
    <script type="text/javascript" src="/public/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="/public/js/jquery.leanModal.min.js"></script>
    <script type="text/javascript" src="/public/js/popup.js"></script>
    <script type="text/javascript" src="/public/js/map.js"></script>
    <script type="text/javascript" src="/public/global/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/public/global/bootstrap/js/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
    <script type="text/javascript">
  


        </script>
</head>
<body>
        <!--<div id="map-canvas"></div>-->
    <div class="container">
        <div class="main-container" align="center">
            <div class="mp-frm">
                
                <a id="popver" href="#" class="mps-inpt btn btn-info btn-small btn-login-indx" rel="popover">H</a>
                <select id="slct-month">
                    <option value="1" selected="">Dummy</option>
                    <option value="2">Dummy</option>
                    <option value="3">Dummy</option>
                    <option value="4">Dummy</option>
                    <option value="5">Dummy</option>
                    <option value="6">Dummy</option>
                    <option value="7">Dummy</option>
                    <option value="8">Dummy</option>
                    <option value="9">Dummy</option>
                    <option value="10">Dummy</option>
                    <option value="11">Dummy</option>
                    <option value="12">Dummy</option>
                </select>
                <buttun id="srch-butn" class="mps-inpt btn btn-info btn-small btn-login-indx"><i class="icon-search"></i></buttun>
            </div>
                   
        </div>
        </div>
        <div class="modal fade" id="newentry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">New Company</h4>
                    </div>
                    <div class="modal-body">
                        <div class="lft-flds">
                        Name:<input type="text" class="nw-ip" id="name">
                        Website:<input type="text" class="nw-ip" id="website">
                        Type:<input type="text" class="nw-ip" id="tp">
                        About:<textarea  class="nw-ip" id="abt" style="height: 60px;"></textarea>
                        City:<input type="text" class="nw-ip" id="cty">
                        </div>
                        <div class="lft-flds">
                            Address:<textarea class="nw-ip" id="adrss" style="height: 60px;"></textarea>
                        Contact:<input type="text" class="nw-ip" id="cntat">
                        Rating:<input type="text" class="nw-ip" id="rtng">
                        Longitude:<input type="text" class="nw-ip" id="lng">
                        Latitude:<input type="text" class="nw-ip" id="ltd">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default p-cls" data-dismiss="modal">Close</button>
                        <button type="button" id="new_etry" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="modal fade" id="admin_aprv" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Admin</h4>
                    </div>
                    <div class="modal-body">
                        <div class="navigtn new-lst">Newly added</div>&nbsp;
                        <div class="navigtn al-lst">All entries</div>
                        <table class="table table-hover table-condensed table-bordered lst-tab">
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                    </div>
                </div>
            </div>
        </div>
    </body>
    </html>