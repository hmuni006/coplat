<?php
/**
 * Created by PhpStorm.
 * User: lorenzo_mac
 * Date: 4/9/14
 * Time: 2:08 PM
 */
?>

<div><h3><?php echo $user->fname; ?> <?php echo $user->lname; ?> Dashboard</h3></div>
<br>

<div><h4>Tickets</h4></div>

<!-- <div style="margin-top = 0px; height: 300px; width: 1000px; overflow-y: scroll; border-radius: 5px;"> -->
<div id="fullcontent">

    <div>
        <div class="span4" style="width: 800px; margin-left: 0px">
            <table cellpadding="0" cellspacing="0" border="0"
                   class="table table-striped table-bordered table-fixed-header"
                   id="#mytable" width="100%" style="table-layout:fixed; background-color:  #EEE">

                <thead class="header">
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Creator Name</th>
                    <th width="13%">Domain</th>
                    <th width="37%">Subject</th>
                    <th width="20%">Created Date</th>
                </tr>
                </thead>
                <?php if ($Tickets == null) {
                    echo "No tickets";
                } else {
                    ?>
                    <?php foreach ($Tickets as $Ticket) {
                        $domain = Domain::model()->findBySql("SELECT * FROM domain WHERE id=:id", array(":id" => $Ticket->domain_id));
                        $creator = User::model()->find("id=:id", array(":id" => $Ticket->creator_user_id)); ?>
                        <tbody>
                        <tr id="<?= $Ticket->id ?>" class="triggerTicketClick">
                            <td width="5%"><?php echo $Ticket->id; ?></td>
                            <td width="25%"><?php echo $creator->fname . ' ' . $creator->lname; ?></td>
                            <td width="13%"><?php echo $domain->name; ?></td>
                            <td width="37%"><?php echo $Ticket->subject; ?></td>
                            <td width="20%"><?php echo date("M d, Y", strtotime($Ticket->created_date)); ?></td>
                        </tr>
                        </tbody>
                    <?php
                    }
                }
                ?>
            </table>

        </div>
        <!-- </div> -->

        <div class="span2" style="margin-left: 30px"
        <!-- Cancel Button -->
        <table>
            <tr>
                <td>
                    <h4>Manage</h4>
            </tr>
            </td>
            <td>
                <!-- Profile Button -->
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'link', 'id' => 'new-box', 'url' => '/coplat/index.php/profiles', 'type' => 'primary',
                    'label' => 'Profiles', 'size' => 'medium', 'htmlOptions' => array('style' => 'width: 120px')));
                ?>
                </tr>
            </td>
            <td><br>
                <!-- Manage Domain Button -->
                <?php $this->widget('bootstrap.widgets.TbButton', array(
                    'buttonType' => 'link', 'id' => 'new-box', 'url' => '/coplat/index.php/projectMeeting/adminViewProjects', 'type' => 'primary',
                    'label' => 'Project Mentor', 'size' => 'medium', 'htmlOptions' => array('style' => 'width: 120px')));
                ?>

            </td>
            </tr>
        </table>
        <br/>
        <table>
            <tr><?php if (User::isCurrentUserProMentor()) { ?>
                <td>
                    <h4>Mentoring</h4>
            </tr>
            </td>
            <td>
                <!-- Manage Domain Button -->
                <?php
                    $this->widget('bootstrap.widgets.TbButton', array(
                        'buttonType' => 'link', 'id' => 'new-box', 'url' => '/coplat/index.php/projectMeeting/pMentorViewProjects', 'type' => 'primary',
                        'label' => 'Project Mentor', 'size' => 'medium', 'htmlOptions' => array('style' => 'width: 120px')));
                }?>

                </tr></td>
            <td><br>

            </td>
            </tr>
        </table>
    </div>
</div>
</div>
<!-- End FullContent -->

<script>
    $('.triggerTicketClick').on('click', function () {
        window.location = "/coplat/index.php/ticket/view/" + $(this).attr('id');
    });

    $('.table-fixed-header').fixedHeader();
</script>