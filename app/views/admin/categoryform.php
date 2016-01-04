<?php require_once __DIR__ . '/../main/header.php'; ?>

<div>
    <h2>Create New Category</h2>
    <form enctype="multipart/form-data" method="POST" name="category"  action="categoryform.php">
        <p><input type="text" name="title" placeholder="title"></p>
        <p>
            <label for="parent_category">Parent Category</label>
                   <select id="parent_category" name="parent">
                       <option selected value="0"></option>
                <?php foreach ($data['categories'] as $category) { ?>
                       <option value="<?php echo $category['category_id']; ?>"><?php echo $category['title'] ?></option>
                <?php } ?>
            </select>
        </p>
        <p><input type="submit"></p>
    </form>
</div>

<?php require_once __DIR__ . '/../main/footer.php'; ?>
