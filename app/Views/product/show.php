<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5
       <tr>
       <th scope="col "><?= $data['status'] ?></th>
                        <th scope="col ">Stock</th>
     


    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

    <a href="#" class="btn btn-primary">Go somewhere</a>
    <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
  </div>
  <div class="card-footer text-muted">
    2 days ago
  </div>
</div>
<?= $this->endSection() ?>