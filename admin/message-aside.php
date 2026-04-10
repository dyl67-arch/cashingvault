<div class="row">
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <div class="mail">
            <span class="title">Mail</span> &nbsp;<button class="navbar-toggle" data-target=".aside-nav" data-toggle="collapse" type="button"><span class="icon"><i class="fas fa-caret-down"></i></span></button>
            <p class="description">Message Center</p>
        </div>
        <center><a href="compose" class="btn btn-md btn-danger compose-mail">Compose Mail</a></center>
        <div class="aside-nav collapse show pt-3">
            <div class="list-group">
                <a href="inbox?pagename=Inbox" class="list-group-item list-group-item-action">
                    <i class="fas fa-fw fa-inbox"></i>&nbsp; Inbox <span class="badge badge-primary float-right"><?php echo $message_counter; ?></span>
                </a>
                <a href="sent-message?pagename=Sent Messages" class="list-group-item list-group-item-action">
                    <i class="fas fa-fw  fa-envelope"></i>&nbsp; Sent Mail 
                </a>
                
            </div>
        </div>
    </div>