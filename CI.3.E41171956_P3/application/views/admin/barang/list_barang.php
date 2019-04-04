<p><a href="<?php echo base_url('admin/barang/tambah')?> class="btn btn-primary"><i class="fa fa-plus"></i>Tambah</a></p>

<table class="table table-striped table-bordered table-hover" <!-- id="dataTables-example -->">
    <thead>
        <th>Product id</th>
        <th>Name</th>
        <th>Price</th>
        <th>Image</th>
        <th>Description</th>
        <th width="200">Action</th>
    </thead>
    <?php
        foreach ('$products as $row') :
    ?>
    <tbody>
        <tr class="odd gradeX">
            <th> scope="row"><?php echo $row->product_id;?></th>
            <td><?php echo $row->name;?></td>
            <td><?php echo $row->price;?></td>
            <td><?php echo $row->image;?></td>
            <td><?php echo $row->description;?></td>
            <td>
                <a href="<?php echo base_url('admin/barang/edit/' .$row->product_id)?>" class="btn btn-primary btn-sm" title="Edit"><i
                class="fa fa-edit"></i> Edit </a>
                <a href="<?php echo base_url('admin/barang/delete/'.$row->product_id) ?>" class="btn btn-danger btn-sm" title="Hapus"
                onClick="return confirm('Apakah anda yakin ingin menghapus dsts ini?');"><i class="fa fa-trash"></i> Delete</a>
            </td>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>

