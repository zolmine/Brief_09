<?php


if (isset($_POST['submit'])) submit();

function submit()
{
    $opt_website_name = $_POST['zol_opt_website'];
    $opt_github = $_POST['zol_opt_github'];





    global $zol_opt_wesite, $zol_opt_github ;

    if (get_option('zol_opt_website') != trim($opt_website_name))
        update_option('zol_opt_text', trim($opt_website_name));



    if (get_option('zol_opt_github') != trim($opt_github))
        update_option('zol_opt_github', trim($opt_github));

}

?>

<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>
    <h2>Area Settings</h2>

    <!--  -->
    <?php if (isset($_POST['submit'])) : ?>
        <div id="message" class="updated below-h2">
            <p> Your Footer has been added succeszolully...!</p>
        </div>
    <?php endif; ?>
    <!--  -->

    <div class="metabox-holder">
        <div class="postbox">
            <h3><strong></strong></h3>
            <h3>
                <form method="post" action="">
                    <table  class="form-table">
                        <tr>
                            <th scope="row">site title</th>
                            <td><input type="text" name="zol_opt_website" value="<?php echo get_option('zol_opt_website'); ?>"
                                       style="width:350px;" /></td>
                        </tr>

                        <tr>
                            <th scope="row">Github Username</th>
                            <td><input type="text" name="zol_opt_github" value="<?php echo get_option('zol_opt_github'); ?>"
                                       style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">&nbsp;</th>
                            <td style="padding-top:10px;  padding-bottom:10px;">
                                <input type="submit" name="submit" value="Save changes" class="button-primary" />
                            </td>
                        </tr>
                    </table>
                </form>
            </h3>
        </div>
    </div>
