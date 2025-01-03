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
        <li class="active">Bài Viết</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-sm-12">
          <div class="box box-danger" id="posts-list">
            <div class="box-header with-border">
              <h3 class="box-title">Quản Lý Bài Viết </h3>
              <button class="btn btn-danger pull-right open-popup" type="button" data-modal-target="#add-post-form" data-target="<?php echo url('/admin/posts/add'); ?>">Thêm Bài Viết</button>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="results"></div>
              <table class="table table-bordered">
                <tr>
                  <th>STT</th>
                  <th>Tiêu Đề</th>
                  <th>Danh Mục</th>
                  <th>Trạng Thái</th>
                  <th>Đã Tạo</th>
                  <th>Chỉnh Sửa</th>
                </tr>
                <?php foreach ($posts as $post) { ?>
                  <tr>
                    <td style="vertical-align: middle;"><?php echo $post->id; ?></td>
                    <td>
                      <img src="<?php echo assets('images/' . $post->image); ?>" style="width:50px; height: 50px; border-radius: 50%;" alt="" />
                      <?php echo $post->title; ?>
                    </td>
                    <td style="vertical-align: middle;"><?php echo $post->category; ?></td>
                    <td style="vertical-align: middle;"><?php echo ucfirst($post->status); ?></td>
                    <td style="vertical-align: middle;"><?php echo date('d-m-Y', $post->created); ?></td>
                    <td style="vertical-align: middle;">
                      <button type="button" data-target="<?php echo url('admin/posts/edit/' . $post->id) ?>" data-modal-target="#edit-post-<?php echo $post->id; ?>" class="btn btn-primary open-popup">
                        Sửa
                        <span class="fa fa-pencil"></span>
                      </button>
                      <button data-target="<?php echo url('admin/posts/delete/' . $post->id) ?>" class="btn btn-danger delete">
                        Xóa
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