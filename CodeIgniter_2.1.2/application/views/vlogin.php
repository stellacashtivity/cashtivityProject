<?=form_open(base_url()."index.php/login")?>

	<table cellspacing="3" cellpadding="3">
    	<tr><td>
        Username or Email <td>
        <?=form_input(array("name"=>"tf_account","value"=>set_value("tf_account")))?>
        <td>
        <?=form_error("tf_account");?>
        </tr></td>
    </table>

<?=form_close()?>
