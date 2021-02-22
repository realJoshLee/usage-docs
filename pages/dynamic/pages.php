<!--Copy the input
<input type="submit" class="button-control button-overview" value="Overview">-->
<input type="submit" class="button-control button-overview" value="Overview">
<input type="submit" class="button-control button-install" value="Install">
<script>
  $(document).ready(function(){
    // Copy this
    // $(document).on('click', '.button-overview', function(event){
    //   document.location.href = `index.php`;
    // });

    // Overview
    $(document).on('click', '.button-overview', function(event){
      document.location.href = `index.php`;
    });

    // Install
    $(document).on('click', '.button-install', function(event){
      document.location.href = `install.php`;
    });

  });
</script>