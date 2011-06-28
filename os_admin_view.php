<?php
function os_add_admin_page() {
    $posted = (isset($_POST['posted'])) ? TRUE : FALSE;

    if($posted) {
        //Validation
            update_option('os_store',$_POST['data']);
            $od_error = FALSE;
        }else{
            $rtw_error = TRUE;
        }
?>



<?php //Updated message
if($posted === TRUE):?>
    <div class="updated">
        <p>
            <strong>設定を保存しました</strong>
        </p>
    </div>

<?php endif;?>

<div class="wrap">
    <h2>Options Store</h2>
				<form method="post" action="<?php echo str_replace( '%7E', '~', $_SERVER['REQUEST_URI']); ?>">
				<p>登録したい情報を入力してください。</p>
        <input type="hidden" name="posted" value="yes">
        <textarea style="width:700px;height:300px;" name='data' id='data' cols='70' rows='10'><?php echo get_option('os_store'); ?></textarea><br />

         <p class="submit" style="display:block;margin-left:360px;">
         <input type="submit" name="Submit" class="button-primary" value="変更を保存" />
         </p>
    </form>
</div>
<?php }

/* End of file os_admin_view.php */

