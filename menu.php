 <style>
 

.just-padding {
  padding: 15px;
}

.list-group.list-group-root {
  padding: 0;
  overflow: hidden;
}

.list-group.list-group-root .list-group {
  margin-bottom: 0;
}

.list-group.list-group-root .list-group-item {
  border-radius: 0;
  border-width: 1px 0 0 0;
}

.list-group.list-group-root > .list-group-item:first-child {
  border-top-width: 0;
}

.list-group.list-group-root > .list-group > .list-group-item {
  padding-left: 30px;
}

.list-group.list-group-root > .list-group > .list-group > .list-group-item {
  padding-left: 45px;
}

.list-group-item .glyphicon {
  margin-right: 5px;
}
 </style>
<div class="card" style="margin-top:25px;">
    <div class="body">
    


<div class="just-padding" style="margin-top:-15px;">

<div class="list-group list-group-root">
  
  <a href="index.php" class="list-group-item" style="background-color:#1995dc; color:#fff;">
    <i class="fa fa-home"></i>
        <span> Home</span>
  </a>
  <a href="index.php?page=diagnosis" class="list-group-item" style="background-color:#1995dc; color:#fff;">
    <i class="fa fa fa-stethoscope"></i><span> Diagnosis</span>
  </a>
  <a href="index.php?page=login" class="list-group-item" style="background-color:#1995dc; color:#fff;">
    <i class="fa fa fa-sign-in"></i><span> Login</span>
  </a>
  
</div>
</div>
</div>
</div>

<script>

 $(function() {
        
  $('.list-group-item').on('click', function() {
    $('.glyphicon', this)
      .toggleClass('glyphicon-chevron-right')
      .toggleClass('glyphicon-chevron-down');
  });

});
</script>