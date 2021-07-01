<?php


if (isset($_POST['submit'])) submit();

function submit()
{
    $opt_website_name = $_POST['sf_opt_wesite'];
    $opt_home_link = $_POST['sf_opt_text'];
    $opt_contact = $_POST['sf_opt_contact'];
    $opt_github = $_POST['sf_opt_github'];





    global $sf_opt_wesite, $sf_opt_text, $sf_opt_contact , $sf_opt_github ;

    if (get_option('sf_opt_wesite') != trim($opt_website_name))
        update_option('sf_opt_text', trim($opt_website_name));

    if (get_option('sf_opt_text') != trim($opt_home_link))
        update_option('sf_opt_brand', trim($opt_home_link));

    if (get_option('sf_opt_contact') != trim($opt_contact))
        update_option('sf_opt_github', trim($opt_contact));

    if (get_option('sf_opt_github') != trim($opt_github))
        update_option('sf_opt_github', trim($opt_github));

}

?>

<div class="wrap">
    <div id="icon-options-general" class="icon32"> <br>
    </div>
    <h2>Area Settings</h2>

    <!--  -->
    <?php if (isset($_POST['submit'])) : ?>
        <div id="message" class="updated below-h2">
            <p> Your Footer has been added successfully...!</p>
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
                            <td><input type="text" name="sf_opt_wesite" value="<?php echo get_option('sf_opt_wesite'); ?>"
                                       style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">store link(url)</th>
                            <td><input type="text" name="sf_opt_text" value="<?php echo get_option('sf_opt_text'); ?>"
                                       style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">contact(url)</th>
                            <td><input type="text" name="sf_opt_contact" value="<?php echo get_option('sf_opt_contact'); ?>"
                                       style="width:350px;" /></td>
                        </tr>
                        <tr>
                            <th scope="row">Github Username</th>
                            <td><input type="text" name="sf_opt_github" value="<?php echo get_option('sf_opt_github'); ?>"
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