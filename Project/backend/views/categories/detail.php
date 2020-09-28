<h1>Chi tiết danh mục</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th><?php echo $category['id']; ?></th>
    </tr>
    <tr>
        <th>Name</th>
        <th><?php echo $category['name']; ?></th>
    </tr>
    <tr>
        <th>Avartar</th>
        <th>
            <?php if (!empty($category['avatar'])): ?>
                <img src="assets/uploads/<?php echo $category['avatar'] ?>" width="60">
            <?php endif;?>
        </th>
    </tr>
    <tr>
        <th>Description</th>
        <th><?php echo $category['description']; ?></th>
    </tr>
    <tr>
        <th>Status</th>
        <th>
            <?php
            $status_text = 'Active';
            if ($category['status'] == 0){
                $status_text = 'Disabled';
            }
            echo $status_text;
            ?>
        </th>
    </tr>
    <tr>
        <th>Created_at</th>
        <th>
            <?php echo date('d-m-Y H:i:s', strtotime($category['created_at'])) ?>
        </th>
    </tr>
    <tr>
        <th>Updated_at</th>
        <th>
            <?php
            if (!empty($category['updated_at'])) {
                echo date('d-m-Y H:i:s', strtotime($category['updated_at']));
            }
            ?>
        </th>
    </tr>
</table>
<a class="btn btn-primary" href="index.php?controller=category&action=index">Back</a>