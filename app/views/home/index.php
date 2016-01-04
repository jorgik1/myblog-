<?php require_once __DIR__ . '/../main/header.php'; ?>
<div>
        <h3>Categories</h3>
    <nav>        
        <ul>
        <?php foreach ($data['categories'] as $category) { ?>
            <li>
                <a href="#"> <?php echo $category['title']; ?> </a> 
            </li>
        <?php } ?>            
        </ul>
    </nav> 

    <div id="posts">
        <h3>Posts</h3>
            <?php foreach ($data['post'] as $post) { ?>

        <h3><?php echo $post['title']; ?></h3>
        <article>
                <?php $post['body'];  ?>

        </article>
    <?php } ?>
    </div>
</div>

<?php require_once __DIR__ . '/../main/footer.php'; ?>