<div class="main-panel">
    <div class="content">
        <div class="panel-header bg-primary-gradient">
            <div class="page-inner py-5">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                    <div>
                        <h2 class="text-white pb-2 fw-bold">Dashboard</h2>
                        <h5 class="text-white op-7 mb-2">Free Bootstrap 4 Admin Dashboard</h5>
                    </div>
                    <div class="ml-md-auto py-2 py-md-0">
                        <a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
                        <a href="#" class="btn btn-secondary btn-round">Add Customer</a>
                    </div>
                </div>
            </div>
        </div>
		<?= $this->session->flashdata('text_update'); ?>
        <form action="<?= base_url('Admin/change_text_skills')?>" method="post">
            <div class="mb-3 col-md-6">
                <label for="exampleInputEmail1" class="form-label">Change Text Subtitle</label>
                <input type="text" class="form-control" name="change_subtitle" value="<?= $text_skill['subtitle']?>">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Change Text Title</label>
                <input type="text" class="form-control" name="change_title" value="<?= $text_skill['title']?>">
            </div>
            <div class="mb-3 col-md-6">
                <label for="exampleInputPassword1" class="form-label">Change Text Deskripsi</label>
                <input type="text" class="form-control" name="change_deskripsi" value="<?= $text_skill['deskripsi']?>" >
            </div>
            <button type="submit" class="btn btn-primary ml-3">Update</button>
        </form>
    </div>