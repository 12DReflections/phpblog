<?php include 'includes/header.php'; ?>
<!DOCTYPE html>
<body>
    <form method="post" action="add_post.php">
        <div class="form-group">
            <label>Post Title</label> <input name="title" type="text" class="form-control" placeholder="Enter title">
        </div>

        <div class="form-group">
            <label>Post Body</label> 
            <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
        </div>

        <div class="form-group">
            <label>Category</label> <select name="category" class="form-control">
                <option>Ontology</option>
                <option>Epistemology</option>
            </select>
	 </div>
	 
	 <div class="form-group">
            <label>Author</label> 
            <textarea name="Author" class="form-control" placeholder="Enter Author Name"></textarea>
        </div>
	
	<div class="form-group">
            <label>Tags</label> 
            <textarea name="tags" class="form-control" placeholder="Enter Tags"></textarea>
        </div>
	 
	 <div>
	 <input name="submit" type="submit" class="btn btn-default" value="Submit" />
	 <a href="index.php" class="btn btn-default">Cancel</a>
	 <br>
	 </div>
    </form>
    

</body>
</html>
    
    <?php include 'includes/footer.php'; ?>
