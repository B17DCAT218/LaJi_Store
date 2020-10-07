<ul class="list-unstyled level1">
        <?php 
            foreach($data as $rows):
         ?>
            <li><a href="index.php?controller=products&action=categories&catid=<?php echo $rows->id; ?>"> <?php echo $rows->name; ?></a>
            </li>
            <?php 
                //lay cac danh muc cap con
                $subCategory = DB::fetchAll("select * from categories where parent_id = ".$rows->id." order by id desc");
                foreach($subCategory as $subRows):
             ?>
             <li><a href="index.php?controller=products&action=categories&catid=<?php echo $subRows->id; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $subRows->name; ?></a>
            </li>
         <?php endforeach; ?>
        <?php endforeach; ?>
    </ul>