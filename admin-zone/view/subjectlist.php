<?php if (empty($subjects)) : ?>
    <option value="">No Subjects Found!</option>
<?php endif; ?>


<?php foreach ($subjects as $row) : ?>
    <option value="<?php echo $row['sid']; ?>"><?php echo $row['sub_name']; ?></option>
<?php endforeach; ?>