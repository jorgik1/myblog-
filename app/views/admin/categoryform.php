<?php require_once __DIR__ . '/../main/header.php'; ?>

<div>
    <h2>Create New Category</h2>
    <form enctype="multipart/form-data" method="POST" >
        <p><input type="text" name="title" value="<?php if (isset($_POST['title'])) echo $_POST['title']; ?>"></p>
        <p>
            <label for="parent_category">Parent Category</label>
                   <select id="parent_category" name="parent">
                       <option selected value="<?php if (isset($_POST['parent'])) echo $_POST['parent']; ?>"></option>
                <?php foreach ($data['categories'] as $category) { ?>
                       <option value="<?php echo $category['category_id']; ?>"><?php echo $category['title'] ?></option>
                <?php } ?>
            </select>
        </p>
        <p><input type='submit' name='submit' value='Submit'></p>
    </form>
</div>

<?php require_once __DIR__ . '/../main/footer.php'; if (isset($_POST['submit'])) $this->saveAction(); ?>
