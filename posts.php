<?php include 'includes/header.php'; ?>
<?php
	//Create DB Object
	$db = new Database();
	
	//Check URL For Category
	if(isset($_GET['title'])){ //meant to be category, not title
		$category = $_GET['category'];
	//Create and Run Query
		$query ="SELECT * FROM posts WHERE category = ".$category;
		$posts = $db->select($query);	
	} else{
	//Create and Run Query
		$query ="SELECT * FROM posts";
		$posts = $db->select($query);
	}
	
	//Create and Run Query
	$query ="SELECT * FROM categories";
	$categories = $db->select($query);
	?>
<?php if($posts) : ?>
	<?php while($row = $posts->fetch_assoc()) : ?>
          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title'];?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?>  <a href="#"><?php echo $row['author']; ?></a></p>
		<?php echo shortenText($row['body']); ?>
		<a class="readmore" href="post.php?id=<?php echo urlencode($row['id']);?>">Read More</a>
          </div><!-- /.blog-post -->
<?php endwhile; ?>
	
	
  
<?php else : ?>
	<p>There are no posts yet</p>
<?php endif; ?>	
<?php include 'includes/footer.php';?>