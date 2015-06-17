<? if(isset($error)): ?>
    <div class="alert alert-danger">
        <?=$error?>
    </div>
    <? die(); endif ?>
<h1>Kinnitus saadetud teie emailile!</h1>

<script type="text/javascript">
    $(document).ready(function() {
        $(".myform").hide();
        window.document.forms[0].submit();
    });
</script>