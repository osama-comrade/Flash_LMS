<?php include "stdheader.php" ?> <!--- header -->
<body background="images/bgpic2.jpg">

<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2 class="admin-heading">All Authors</h2>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-12">
            <div class="message"></div>
              <?php
              if(isset($_GET['page'])){
                $page = $_GET['page'];
              }else{
                $page = 1;
              }
              $offset = ($page - 1) * $limit;
              $sql = "SELECT * FROM author ORDER BY author_id DESC LIMIT {$offset}, {$limit}";
              $result = mysqli_query($conn, $sql); ?>
              <table class="content-table">
                  <thead>
                    <th>S.No</th>
                    <th>Author Name</th>
                
                  </thead>
                  <tbody>
                  <?php if(mysqli_num_rows($result) > 0){
                  $serial = $offset + 1;
                    while($row= mysqli_fetch_assoc($result)){ ?>
                    <tr>
                      <td><?php echo $serial; ?></td>
                      <td><?php echo $row['author_name'] ?></td>
                      
                    </tr>
                    <?php $serial++;
                    } 
                  }else{ ?>
                    <tr>
                      <td colspan="4">No Authors Found</td>
                    </tr>
                  <?php } ?>
                  </tbody>
              </table>
              <?php // pagination
              $sql1 = "SELECT * FROM author";
              $result = mysqli_query($conn, $sql1);
              if(mysqli_num_rows($result) > 0){
                $total_records = mysqli_num_rows($result);

                $total_page = ceil($total_records / $limit);
                // show pagination
                if($total_page > 1){
                  $pagination =  "<ul class='pagination admin-pagination'>";
                  if($page > 1){ // show previous button
                    $pagination .= '<li class=""><a href="stdauthors.php?page='.($page - 1).'">Prev</a></li>';
                  }
                  for($i = 1; $i <= $total_page; $i++){
                    if($i == $page){
                      $active = "active";
                    }else{
                      $active = "";
                    }
                    $pagination .= '<li class="'.$active.'"><a href="stdauthors.php?page='.$i.'">'.$i.'</a></li>';
                  }
                  if($total_page > $page){ //show next button
                    $pagination .= '<li class=""><a href="stdauthors.php?page='.($page + 1).'">Next</a></li>';
                  }
                  $pagination .= "</ul>";
                  echo $pagination;
                }
              } ?>
            </div>
        </div>
    </div>
</div>
<!-- jquery -->
<script src="js/jquery-3.6.0.min.js" charset="utf-8"></script>
<script type="text/javascript">
//delete author script
$(".delete-author").on("click", function(){
  var author_id = $(this).data("aid");
  $.ajax({
    url : "delete-stdauthors.php",
    type : "POST",
    data : {author_id: author_id},
    success: function(data){
      $(".message").html(data);
      setTimeout(function(){ window.location.reload(); }, 2000);
    }
  });
});
</script>
<?php include "footer.php" ?> <!--- footer -->
