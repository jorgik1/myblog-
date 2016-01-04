<?php require_once __DIR__ . '/../main/header.php'; ?>

<div>
    <h2>Admin Panel</h2>
</div>
<div>
        <h3>Categories</h3>
    <nav>        
        <ul>
        <?php foreach ($data['categories'] as $category) { ?>
            <li>
                <a href="#"> <?php echo $category['title']; ?> </a> 
            </li>
        <?php } ?>
            <li><a href="categoryform.php">Create New Category</a></li>
        </ul>
    </nav> 

    <div id="posts">
        <article>
            <?php echo 'Post array' ?>            
        </article>
    </div>
        <a href="postform.php">Create New Post</a>
</div>

<?php require_once __DIR__ .  '/../main/footer.php'; ?>