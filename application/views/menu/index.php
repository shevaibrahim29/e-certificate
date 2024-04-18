        

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    
                    <div class="row">
                        <div class="col-lg-12">
                            <?= form_error('menu', '<div class="alert alert-danger" role="alert">', '</div>'); ?>

                            <?= $this->session->flashdata('message'); ?>
                            
                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newMenuModal">Add New Event</a>

                        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Event Date</th>
      <th scope="col">Location</th>
      <th scope="col">Organizer</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>  
</thead>
<tbody>
    <?php  $i = 1; ?>
    <?php foreach ($menu as $m) : ?> 
        
        
        <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $m['menu']; ?></td>
            <td>
                
          <a href="" class="badge badge-success">edit</a>
          <a href="" class="badge badge-danger">delete</a>
          </td>
      
    </tr>

    <?php $i++; ?>
    <?php endforeach ?>
  </tbody>
</table>

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            

<!-- Modal -->
<div class="modal fade" id="newMenuModal" tabindex="-1" aria-labelledby="newMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="newMenuModalLabel">Add New Event</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('menu'); ?>" method="post">
      <div class="modal-body">
      
      <div class="form-group">
    <input type="text" class="form-control" id="menu" name="menu" placeholder="Menu name">
  </div>
        
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>