  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo url('/admin'); ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ads</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-danger" id="ads-list">
            <div class="box-header with-border">
              <h3 class="box-title">Quản Lý Tài Khoản </h3>
              <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-ad-form" data-target="<?php echo url('/admin/ads/add'); ?>">Thêm Ad Mới</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="results"></div>
              <table class="table table-bordered">
                <tr>
                  <th>STT</th>
                  <th>Tên Người Dùng</th>
                  <th>Bắt Đầu</th>
                  <th>Kết Thúc</th>
                  <th>Trạng Thái</th>
                  <th>Đã Tạo</th>
                  <th>Chỉnh Sửa</th>
                </tr>
                <?php foreach ($ads as $ad) { ?>
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $ad->id; ?></td>
                    <td>
                      <img src="<?php echo assets('images/' . $ad->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                      <?php echo $ad->name; ?>
                    </td>
                    <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->start_at); ?></td>
                    <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->end_at); ?></td>
                    <td style="vertical-align: middle;"><?php echo ucfirst($ad->status); ?></td>
                    <td style="vertical-align: middle;"><?php echo date('d-m-Y', $ad->created); ?></td>
                    <td style="vertical-align: middle;">
                      <button type="button" data-target="<?php echo url('admin/ads/edit/' . $ad->id) ?>" data-modal-target="#edit-ad-<?php echo $ad->id; ?>" class="btn btn-primary open-popup">
                        Edit
                        <span class="fa fa-pencil"></span>
                      </button>
                      <button data-target="<?php echo url('admin/ads/delete/' . $ad->id) ?>" class="btn btn-danger delete">
                        Delete
                        <span class="fa fa-trash"></span>
                      </button>
                    </td>
                  </tr>
                <?php } ?>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->