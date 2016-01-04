<?php require_once __DIR__ . '/../main/header.php'; ?>

<div>
    <h2>Create New Post</h2>
    <form enctype="multipart/form-data" method="POST" name="postform"  action="postform.php" >
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
        <p><textarea name="post_text" rows="5" cols="100" placeholder="Enter the text"></textarea></p>
        <p><input type="submit"></p>
    </form>
</div>

<?php require_once __DIR__ . '/../main/footer.php'; ?>



