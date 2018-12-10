<?php


require 'vendor/autoload.php';
use SliderPhp\FrontController;
$siteController = new FrontController();
?>

<html>
<head>
    <meta charset="utf-8">
    <title>SLIDER ADMIN</title>
    <!-- Latest compiled and minified CSS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
 <div class="container">
     <?php if($_GET['save']) { ?>
         <div class="alert alert-success"> Nuevo Slider guardado correctamente </div>
     <?php } ?>
     <form action="src/SiteController.php" method="post" enctype="multipart/form-data">
         <input class="form-control" value="add" name="action" type="hidden">
         <input class="form-control" value="" name="id" type="hidden">
         <div class="form-group row">
             <label for="url-input" class="col-2 col-form-label">Slider Link</label>
             <div class="col-10">
                 <input class="form-control" name="url-slider" type="url"  id="link-input">
             </div>
         </div>

         <div class="form-group row">
             <label class="col-sm-2">Nueva Ventana</label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <label class="form-check-label">
                         <input class="form-check-input" name="new_window" value="1" type="checkbox">
                     </label>
                 </div>
             </div>
         </div>

         <div class="form-group row">
             <label class="col-sm-2">Activo</label>
             <div class="col-sm-10">
                 <div class="form-check">
                     <label class="form-check-label">
                         <input class="form-check-input" name="active" value="1" type="checkbox">
                     </label>
                 </div>
             </div>
         </div>
         <input type="file" name="fileToUpload" id="fileToUpload" required>
         <img src="" style="display:none" id="blah" width="200" height="100"/>

         <button type="submit" class="btn btn-primary">Submit</button>
     </form>
 </div>

<div class="container">
    <?php $sliders = $siteController->getSlider(); ?>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
        </thead>
    <tbody>
    <?php foreach($sliders as $slider) { ?>

        <tr class="js-slider-block">

            <td class="js-slider-active"><?php echo $slider['active']  ?></td>
            <td class="js-slider-link"> <?php echo $slider['link']  ?> </td>
            <td class="js-slider-new-window"><?php echo $slider['new_window']  ?> </td>
            <td> <img  class="js-slider-image img-responsive" src="/Slider-with-admin-panel/sliderphp/src/Controllers/uploads/<?php echo $slider['image']  ?>"/> </td>
            <td><?php echo $slider['position']  ?> </td>
            <td>
                <a href="src/SiteController.php?delete=<?php echo $slider['id'] ?>">
                    <span class="glyphicon glyphicon-remove-sign"></span>
                </a>
                <a href="src/SiteController.php?move=down&id=<?php echo $slider['id'] ?>">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                </a>
                <a href="src/SiteController.php?move=up&id=<?php echo $slider['id'] ?>">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                </a>
                <a href="#" class="js-edit-slider" data-id-slider="<?php echo $slider['id'] ?>">
                    <span class="glyphicon glyphicon-arrow-pencil">hola</span>
                </a>

            </td>

        </tr>


   <?php  } ?>
    </tbody>
    </table>

</div>
<script>
    $(function(){
      $('body').on('click','.js-edit-slider', function(event){
        event.preventDefault();
        $("input[name='action']").val('edit');
        console.log('ola');
        console.log($(this).attr('data-id-slider'));
        console.log($(this).attr('data-id'));
        $("input[name='id']").val($(this).data('id-slider'));
        if($(this).parents('.js-slider-block').find('.js-slider-active').text() == '1'){
          $("input[name='active']").val($(this).data($(this).parents('.js-slider-block').find('.js-slider-active').text()));
          $("input[name='active']").attr('checked', 'checked');
        }
        console.log('mierda vida');
        console.log($(this).parents('.js-slider-block').find('.js-slider-new-window').text());
        if($(this).parents('.js-slider-block').find('.js-slider-new-window').text() == 1){
          $("input[name='new_window']").val($(this).data($(this).parents('.js-slider-block').find('.js-slider-new-window').text()));
          $("input[name='new_window']").attr('checked', 'checked');
          console.log('entramos');
        }
        $("input[name='url-slider']").val($(this).parents('.js-slider-block').find('.js-slider-link').text());
        $('#blah').attr('src',$(this).parents('.js-slider-block').find('.js-slider-image').attr('src'));
        $('#blah').show();
      })
    });
    function readURL(input) {

      if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function(e) {
          $('#blah').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
      }
    }

    $("input[name='fileToUpload']").change(function() {
       readURL(this);
       $('#blah').show();
    });

</script>
</body>
</html>

