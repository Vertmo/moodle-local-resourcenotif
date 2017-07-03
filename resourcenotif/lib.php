<?php
/**
 * @package    local_resourcenotif
 * @copyright  2012-2016 Silecs {@link http://www.silecs.info/societe}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

function local_resourcenotif_extend_navigation_course($settingsnav, $context) {
    global $OUTPUT, $PAGE;
    $html = "<a class='dropdown-item editing_notifications menu-action cm-edit-action' data-action='notifications' role='menuitem'"
        . "href='" . htmlspecialchars(new moodle_url('/local/resourcenotif/resourcenotif.php', array('id' => '123XYZ321')))."' "
        . "title='" . htmlspecialchars(get_string("notifications")) . "'>"
        . $OUTPUT->pix_icon('t/email', get_string("notifications"), 'moodle', array('class' => 'iconsmall', 'title' => ''))
        . "<span class='menu-action-text'>" . htmlspecialchars(get_string("notifications")) . "</span>"
        . "</a>";

    $PAGE->requires->js_call_amd('local_resourcenotif/script', 'init', array($html));
}
