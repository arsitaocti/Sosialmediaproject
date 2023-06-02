<?= $this->extend('base') ?>
<?= $this->section('content') ?>

<div class="card text-center">
  <div class="card-body">
    <h5 class="card-title">What do you think?</h5
       <tr>
       <th scope="col "><?= session ('status') ?></th>
                        <th scope="col "></th>
     


    
    <div class="btn-group " role="group " aria-label="Basic example ">
                                <form action="/product/<?= session('id') ?>" method="POST" onsubmit="return confirm(`Are you sure?`)">
                                    <a href="/product/<?= session('id') ?>/edit" class="btn btn-info text-white "><i class='bx bx-pencil'></i></a>
                                    <input type="hidden" name="_method" value="DELETE" />
                                    <button class="btn btn-danger text-white" type="submit">
                                        <i class='bx bx-trash'></i>
                                    </button>
                                </form>
                            </div>
  </div>
  <div class="card-footer text-muted">
    tulis aja gitu
  </div>
</div>

</div>
<?= $this->endSection() ?>