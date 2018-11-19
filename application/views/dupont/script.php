<script type="text/javascript">
  function bacaGambar(input) {
     if (input.files && input.files[0]) {
        var reader = new FileReader();
   
        reader.onload = function (e) {
            $('#gambarview').attr('src', e.target.result);
        }
   
        reader.readAsDataURL(input.files[0]);
     }
  }
  $("#gambardupont").change(function(){
      bacaGambar(this);
  });
</script>