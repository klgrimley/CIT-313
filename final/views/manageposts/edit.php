<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1> Edit <em>"<?php echo $title; ?>"</em> </h1>
  </div>
  <?php if(isset($message)) if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>
  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>manageposts/<?php echo $task?>" method="post" onsubmit="editor.post()">
          <label>Title</label>
          <input type="text" class="span6" name="post_title" value="<?php echo $title; ?>">
          <label>Date</label>
          <input type="text" class="span6" name="post_date" value="<?php echo $date; ?>">
          <label>Category</label> 
          <select name="post_category">
                  <option <?php if($category == 1){ ?>selected<?php } ?> value="1">Techstuff</option>
                  <option <?php if($category == 2){ ?>selected<?php } ?> value="2">Weather</option>
                  <option <?php if($category == 3){ ?>selected<?php } ?> value="3">Sports</option>
          </select>
     			<label>Content</label>
          <textarea id="tinyeditor" name="post_content" style="width:556px;height: 200px"><?php echo $content?></textarea>
    			<br/>
          <input type="hidden" name="pID" value="<?php echo $pID ?>"/>
          <input type="hidden" name="uID" value="<?php echo $_SESSION['uID']; ?>"/>
          <button id="add-post" type="submit" class="form-button" >Submit</button>
        </form>

        
      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>

