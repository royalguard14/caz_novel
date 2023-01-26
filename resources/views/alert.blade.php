 <?php if (session('message')): ?>
               
    <input type="hidden" id="alert" value="{{session('message')}}">

            <?php endif;?>
