<?php
$address = get_option('lawyer_address');
$phone = get_option('lawyer_phone');
$mobile_1 = get_option('lawyer_mobile_1');
$mobile_2 = get_option('lawyer_mobile_2');
$email_1 = get_option('lawyer_email_1');
$email_2 = get_option('lawyer_email_2');
?>

<?php
if (!empty($address)) {
    ?>
    <p class="info-address animation" data-animation="slide-top" data-delay="0s">
        <span class="fas fa-map-marker-alt"></span>
        <?php echo $address ?>
    </p>
    <?php
}
?>

<?php
if (!empty($phone)) {
    ?>

    <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
        <span class="fas fa-phone-alt"></span>
        <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
    </p>
    <?php
}
?>

<?php
if (!empty($mobile_1)) {
    ?>

    <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
        <span class="fas fa-mobile-alt"></span>
        <a href="tel:<?php echo $mobile_1; ?>"><?php echo $mobile_1; ?></a>
    </p>
    <?php
}
?>

<?php
if (!empty($mobile_2)) {
    ?>

    <p class="info-phone animation" data-animation="slide-top" data-delay="0.2s">
        <span class="fas fa-mobile-alt"></span>
        <a href="tel:<?php echo $mobile_2; ?>"><?php echo $mobile_2; ?></a>
    </p>
    <?php
}
?>

<?php
if (!empty($email_1)) {
    ?>

    <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
        <span class="far fa-envelope"></span>
        <a href="mailto:<?php echo $email_1; ?>"><?php echo $email_1; ?></a>
    </p>
    <?php
}
?>

<?php
if (!empty($email_2)) {
    ?>

    <p class="info-email animation" data-animation="slide-top" data-delay="0.4s">
        <span class="far fa-envelope"></span>
        <a href="mailto:<?php echo $email_2; ?>"><?php echo $email_2; ?></a>
    </p>
    <?php
}
?>
    



