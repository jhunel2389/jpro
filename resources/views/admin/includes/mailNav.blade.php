<div class="col-md-3">
  <div class="box box-solid">
    <div class="box-header with-border">
      <h3 class="box-title">Folders</h3>

      <div class="box-tools">
        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
        </button>
      </div>
    </div>
    <div class="box-body no-padding">
      <ul class="nav nav-pills nav-stacked">
        <li class="{{ ($mm == "inbox") ? "active" : ""}}"><a href="{{ URL::Route('getMail') }}"><i class="fa fa-inbox"></i> Inbox
          <span class="label label-primary pull-right">{{$unreadMailCount}}</span></a></li>
        </li>
        <li><a href="#"><i class="fa fa-envelope-o"></i> Sent</a></li>
        <li><a href="#"><i class="fa fa-file-text-o"></i> Drafts</a></li>
        <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a></li>
        <li class="{{ ($mm == "trash") ? "active" : ""}}"><a href="javascript:void(0)"><i class="fa fa-trash-o"></i> Trash
        <span class="label label-primary pull-right">{{$unreadTrashCount}}</span></a></li>
      </ul>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /. box -->
  <!-- /.box -->
</div>