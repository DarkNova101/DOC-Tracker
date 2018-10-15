<div class="container">
  <div class="row">
    <div class="col-sm-6 col-sm-offset-1">
      <div class="panel panel-default">
        <div class="panel-heading text-center">
          <div class="panel-title" style="font-size: 24px;">
            <i class="fa fa-user"></i> <?php echo $userinfo['firstname']."&nbsp".$userinfo['lastname']."&nbsp(".$userinfo['gender'].")"; ?>
            <i class="fa fa-pencil-square-o pull-right" title="Edit Profile" onclick="" data-toggle="tooltip" data-placement="top"></i>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-sm-5">
              <ul class="list-unstyled" style="line-height: 2.0em;">
                  <li><i class="fa fa-mobile fa-lg fa-fw" aria-hidden="true" data-toggle="tooltip" title="Cell Phone" data-placement="left"></i> <?php echo $userinfo['cellphone']; ?> &nbsp;</li>
                  <li> <i class="fa fa-phone fa-lg fa-fw" aria-hidden="true" data-toggle="tooltip" title="Home Phone" data-placement="left"></i> <?php echo $userinfo['homephone']; ?></li>
                  <li><i class="fa fa-at fa-lg fa-fw" aria-hidden="true" data-toggle="tooltip" title="Email Address" data-placement="left"></i> <?php echo $userinfo['email']; ?></li>
                  <li> <i class="fa fa-birthday-cake fa-lg fa-fw" aria-hidden="true" data-toggle="tooltip" title="Birthdate" data-placement="left"></i> <?php echo $userinfo['dob']; ?></li>
                  <li><i class="fa fa-home fa-lg fa-fw" aria-hidden="true" data-toggle="tooltip" title="Street Address" data-placement="left"></i> <?php echo $userinfo['address']."&nbsp".$userinfo['city']."&nbsp".$userinfo['state']."&nbsp".$userinfo['zipcode']; ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
